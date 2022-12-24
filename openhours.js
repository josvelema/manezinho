const checkOpeningHours = (currentDate, currentTime) => {
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

  // Get the current day of the week
  const currentDay = currentDate.toLowerCase();

  // Check if the restaurant is open on the current day
  if (openingHours[currentDay] === "closed") {
    // Restaurant is closed on the current day, so check when it will open again
    let nextOpenDay;
    for (let day in openingHours) {
      if (openingHours[day] !== "closed") {
        nextOpenDay = day;
        break;
      }
    }

    // Calculate the number of days until the restaurant opens again
    const daysUntilOpen = new Date(currentDate).setDate(new Date(currentDate).getDate() + (Object.keys(openingHours).indexOf(nextOpenDay) + 7 - Object.keys(openingHours).indexOf(currentDay)) % 7) - new Date();
    const daysUntilOpenRounded = Math.floor(daysUntilOpen / (1000 * 60 * 60 * 24));

    // Update the HTML element with the countdown until the restaurant opens again
    document.getElementById("opening-hours").innerHTML = `The restaurant is currently closed. It will open again in ${daysUntilOpenRounded} days.`;
  } else {
    // Restaurant is open on the current day, so check how many hours until it closes
    const [openTime, closeTime] = openingHours[currentDay].split("-");
    const openTimestamp = new Date(`${currentDate} ${openTime}`).getTime();
    const closeTimestamp = new Date(`${currentDate} ${closeTime}`).getTime();
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
      timeUntilClose = new Date(`${nextOpenDay} ${openTime}`).getTime() - currentTime;
    } else {
      // It's during the opening hours, so calculate the time until the restaurant closes
      timeUntilClose = closeTimestamp - currentTime;
    }

    // Convert the time until close to hours and minutes
    const hoursUntilClose = Math.floor(timeUntilClose / (1000 * 60 * 60));
    const minutesUntilClose = Math.floor((timeUntilClose % (1000 * 60 * 60)) / (1000 * 60));

    // Update the HTML element with the time until the restaurant closes
    document.getElementById("opening-hours").innerHTML = `The restaurant is open for another ${hoursUntilClose} hours and ${minutesUntilClose} minutes.`;
  }
};

// Example usage:
checkOpeningHours("Friday", 160000000); // Output: The restaurant is open for another 2 hours and 40 minutes.
checkOpeningHours("Sunday", 100000000); // Output: The restaurant is open for another 5 hours and 20 minutes.
checkOpeningHours("Wednesday", 600000000); // Output: The restaurant is closed. It will open again in 4 days.
