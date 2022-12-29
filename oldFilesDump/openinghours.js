const checkOpeningHours = () => {
  // Get the current date and time
  const currentDate = new Date();
  const currentTime = Date.now();

  // Load the JSON file containing the opening hours for the restaurant
  const openingHours = {
    "monday": "closed",
    "tuesday": "closed",
    "wednesday": "1700-0200",
    "thursday": "1700-0200",
    "friday": "1700-0200",
    "saturday": "1700-0200",
    "sunday": "1700-0200"
  };

  // Load the JSON file containing the special opening/closed dates for holidays
  const holidayDates = {
    "2020-12-25": "closed",
    "2020-12-31": "1200-0100"
  };

  // Check if it's a holiday and use the special hours if applicable
  let specialHours;
  for (let holiday in holidayDates) {
    const holidayStart = new Date(holiday).getTime();
    const holidayEnd = holidayStart + 86400000; // Add 24 hours to the start date to get the end date
    if (currentTime >= holidayStart && currentTime < holidayEnd) {
      specialHours = holidayDates[holiday];
      break;
    }
  }
  const hours = specialHours || openingHours[currentDate.toString().split(' ')[0].toLowerCase()];

  // Check if the restaurant is open on the current day
  if (hours === "closed") {
    // Restaurant is closed on the current day, so check when it will open again
    let nextOpenDay;
    for (let day in openingHours) {
      if (openingHours[day] !== "closed") {
        nextOpenDay = day;
        break;
      }
    }

    // Calculate the number of days until the restaurant opens again
    let daysUntilOpen = new Date(currentDate).setDate(new Date(currentDate).getDate() + (Object.keys(openingHours).indexOf(nextOpenDay) + 7 - Object.keys(openingHours).indexOf(currentDay)) % 7) - new Date();
    let daysUntilOpenRounded = Math.floor(daysUntilOpen / (1000 * 60 * 60 * 24));

    // Check if the next open day falls on a holiday with special hours
    for (let holiday in holidayDates) {
      const holidayStart = new Date(holiday).getTime();
      const holidayEnd = holidayStart + 86400000; // Add 24 hours to the start date to get the end date
      if (holidayStart <= daysUntilOpen && holidayEnd > daysUntilOpen) {
        // The next open day falls on a holiday, so add the number of closed days to the countdown
        let closedDays = 1;
        while (holidayDates[holiday] === "closed") {
          closedDays++;
          holiday = new Date(holiday).setDate(new Date(holiday).getDate() + 1);
        }
        daysUntilOpen += closedDays * 86400000; // Add the number of closed days in milliseconds to the countdown
        
        daysUntilOpenRounded = Math.floor(daysUntilOpen / (1000 * 60 * 60 * 24));
      }
    }

    // Update the HTML element with the countdown until the restaurant opens again
    document.querySelector("opening-hours").innerHTML = `The restaurant is currently closed. It will open again in ${daysUntilOpenRounded} days.`;
  } else {
    // Restaurant is open on the current day, so check how many hours until it closes
    const [openTime, closeTime] = hours.split("-");
    const openTimestamp = new Date(`${currentDate.toString().split(' ')[0]} ${openTime}`).getTime();
    const closeTimestamp = new Date(`${currentDate.toString().split(' ')[0]} ${closeTime}`).getTime();
    let timeUntilClose;
    if (currentTime < openTimestamp) {
      // It's before the opening time, so calculate the time until the restaurant opens
      timeUntilClose = openTimestamp - currentTime;
    } else if (currentTime > closeTimestamp) {
      // It's after the closing time, so calculate the time until the restaurant opens again on the next open day
      let nextOpenDay;
      for (let i = Object.keys(openingHours).indexOf(currentDay) + 1; i < Object.keys(openingHours).length; i++) {
        if (openingHours[Object.keys(openingHours)[i]] !== "closed") {
          nextOpenDay = Object.keys(openingHours)[i];
          break;
        }
      }
      // If there are no more open days in the week, set the next open day to the first open day of the following week
      if (!nextOpenDay) {
        for (let day in openingHours) {
          if (openingHours[day] !== "closed") {
            nextOpenDay = day;
            break;
          }
        }
      }
      timeUntilClose = new Date(`${nextOpenDay} ${openTime}`).getTime() - currentTime;
    } else {
      // It's during the opening hours, so calculate the time until the restaurant closes
      timeUntilClose = closeTimestamp - currentTime;
    }

    // Convert the time until close to hours and minutes
    const hoursUntilClose = Math.floor(timeUntilClose / (1000 * 60 * 60));
    const minutesUntilClose = Math.floor((timeUntilClose % (1000 * 60 * 60)) / (1000 * 60));

    // Update the HTML element with the time until the restaurant closes
    document.querySelector("opening-hours").innerHTML = `The restaurant is open for another ${hoursUntilClose} hours and ${minutesUntilClose} minutes.`;
  }
};

// Run the function when the page is loaded
window.addEventListener("load", checkOpeningHours);
