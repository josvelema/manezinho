const currentDate = new Date();
const currentTime = new Date();
const currentDay = currentTime.getDay();
const nextDay = currentDay + 1
const currentHour = currentTime.getHours();
const currentMinute = currentTime.getMinutes();
const datesClosed = document.querySelector("#datesClosed");
let neonAreWeOpen = document.querySelector(".neon-top");
let neonSign = document.querySelector(".neon h3");
let neonOpensIn = document.querySelector(".neon-down")

// Assuming the JSON file contains an array of objects, each representing a day of the week
// with properties "day" (a number from 0-6, with 0 being Sunday) and "hours" (a string in the format "HH:MM-HH:MM")
const daysOfWeek = [
  {fullDay: "Sunday",day: 0, hours: "Closed"},
  {fullDay: "Monday",day: 1, hours: "Closed"},
  {fullDay: "Tuesday",day: 2, hours: "17:00-02:00"},
  {fullDay: "Wednesday",day: 3, hours: "17:00-02:00"},
  {fullDay: "Thursday",day: 4, hours: "17:00-02:00"},
  {fullDay: "Friday",day: 5, hours: "17:00-02:00"},
  {fullDay: "Saturday",day: 6, hours: "17:00-02:00"}
];

let todayID = daysOfWeek[currentDay]['fullDay'];
let currentDayID = document.getElementById(todayID);
currentDayID.classList.toggle("today");

// An array of objects representing holidays, with properties "date" (a Date object) and "hours" (a string in the format "HH:MM-HH:MM")
const holidays = [
  {date: new Date("December 31, 2022"), hours: "Closed"},
  {date: new Date("December 30, 2022"), hours: "Closed"},
  {date: new Date("January 1, 2022"), hours: "Closed"}
];

const getHoursForDay = (day) => {
  // Check if the current date matches any of the holidays
  const holiday = holidays.find(h => h.date.getTime() === currentTime.getTime());
  if (holiday) {
    // If it's a holiday and the store is closed, return the string "Closed"

    return holiday.hours;
  } else {
    // Find the object in the array that has the same day as the current day
    const currentDayObject = daysOfWeek.find(d => d.day === day);
    // Return the hours string if it was found, or an empty string if not
    return currentDayObject ? currentDayObject.hours : "";
  }
};

const getOpenStatus = (hoursString) => {
  if (hoursString === "Closed") {
    // If the store is closed on the current day, calculate how many days and hours until the store opens
    const daysUntilOpen = daysOfWeek.findIndex(day => day.hours !== "Closed");
    const hoursUntilOpen = daysUntilOpen * 24 + parseInt(daysOfWeek[daysUntilOpen].hours.split("-")[0].split(":")[0], 10);
    // Return a string indicating how many days and hours until the store opens
    neonSign.classList.toggle("neonClosed");
    neonSign.textContent = "Closed";
    neonAreWeOpen.textContent = "Sorry! Today we are";
    neonOpensIn.textContent =  `Opens in ${daysUntilOpen} day${daysUntilOpen !== 1 ? "s" : ""} and ${hoursUntilOpen % 24} hour${hoursUntilOpen % 24 !== 1 ? "s" : ""}`;
    return `Opens in ${daysUntilOpen} day${daysUntilOpen !== 1 ? "s" : ""} and ${hoursUntilOpen % 24} hour${hoursUntilOpen % 24 !== 1 ? "s" : ""}`;
  } else {
    // Split the hours string into an array of two strings, representing the opening and closing time
    const [openTime, closeTime] = hoursString.split("-");
    // Split each time string into hours and minutes
    const [openHour, openMinute] = openTime.split(":").map(Number);
    const [closeHour, closeMinute] = closeTime.split(":").map(Number);
  
    // Calculate the total number of minutes since midnight for the opening and closing times
    let openMinutes = openHour * 60 + openMinute;
    let closeMinutes = closeHour * 60 + closeMinute;
    // Calculate the total number of minutes since midnight for the current time
    const currentMinutes = currentHour * 60 + currentMinute;
  
    if (closeMinutes < openMinutes) {
      // If the store's closing time is on the next day, add 1440 minutes (1 day) to the closing time
      closeMinutes += 1440;
    }
  
    if (currentMinutes < openMinutes) {
      // Calculate the number of hours until the store opens
      const hoursUntilOpen = Math.floor((openMinutes - currentMinutes) / 60);
      // Return a string indicating how many hours until the store opens
      neonSign.classList.toggle("neonOpen");
      neonSign.textContent = "Open!";
      neonAreWeOpen.textContent = "Yes, we are";
      neonOpensIn.textContent = `Opens in ${hoursUntilOpen} hour${hoursUntilOpen !== 1 ? "s" : ""}`;
      return `Opens in ${hoursUntilOpen} hour${hoursUntilOpen !== 1 ? "s" : ""}`;
    } else if (currentMinutes >= closeMinutes) {
      // Calculate the number of hours until the store opens on the next day
      openMinutes += 1440;
      const hoursUntilOpen = Math.floor((openMinutes - currentMinutes) / 60);
      if(nextDayHours !== "Closed") {  
        neonSign.classList.toggle("neonClosed");
        neonSign.textContent = "Closed";
        neonAreWeOpen.textContent = "Sorry! we are";
        neonOpensIn.textContent =  `Opens tomorrow in ${hoursUntilOpen} hour${hoursUntilOpen !== 1 ? "s" : ""}`;
      // Return a string indicating how many hours until the store opens on the next day
        return `Opens tomorrow in ${hoursUntilOpen} hour${hoursUntilOpen !== 1 ? "s" : ""}`;
      } else {
        getOpenStatus(nextDayHours);
      }
    } else {
      // Calculate the number of hours until the store closes
      const hoursUntilClose = Math.floor((closeMinutes - currentMinutes) / 60);
      // Return a string indicating how many hours until the store closes
      neonSign.classList.toggle("neonOpen");
      neonSign.textContent = "Open!";
      neonAreWeOpen.textContent = "Yes, we are";
      neonOpensIn.textContent = `Closes in ${hoursUntilClose} hour${hoursUntilClose !== 1 ? "s" : ""}`;
      return `Closes in ${hoursUntilClose} hour${hoursUntilClose !== 1 ? "s" : ""}`;
    }
  }
};


const getClosedDates = () => {
  // Find all holidays that occur within the next two weeks
  const upcomingHolidays = holidays.filter(h => h.date.getTime() > currentDate.getTime() && h.date.getTime() <= new Date(currentDate.getTime() + 14 * 24 * 60 * 60 * 1000));
  
  // If there are no upcoming holidays, return an empty string
  if (upcomingHolidays.length === 0) {
    return "";
  }
  
  // Sort the holidays by date
  upcomingHolidays.sort((a, b) => a.date.getTime() - b.date.getTime());
  
  let closedDates = "";
  
  // Iterate through the holidays and add their dates to the closedDates string
  for (let i = 0; i < upcomingHolidays.length; i++) {
    const holiday = upcomingHolidays[i];
    const holidayDate = holiday.date;
    const holidayHours = holiday.hours;
    
    // Check if the current holiday is part of a series of consecutive closed days
    let endDate = holidayDate;
    while (i + 1 < upcomingHolidays.length && upcomingHolidays[i + 1].date.getTime() === endDate.getTime() + 24 * 60 * 60 * 1000) {
      endDate = upcomingHolidays[i + 1].date;
      i++;
    }
    
    // If the current holiday is part of a series of consecutive closed days, add the range of dates to the closedDates string
    if (endDate.getTime() !== holidayDate.getTime()) {
      closedDates += `${holidayDate.toLocaleDateString()} - ${endDate.toLocaleDateString()}`;
    } else {
      // Otherwise, add the single holiday date to the closedDates string
      closedDates += holidayDate.toLocaleDateString();
    }
    
    // Add a comma and space if there are more holidays to come
    if (i + 1 < upcomingHolidays.length) {
      closedDates += ", ";
    }
  }
  
  // Return a string indicating the dates that the store will be closed
  return `Closed on ${closedDates}`;
};

(getClosedDates == "") ? console.log("No upcoming holidays") : datesClosed.textContent = getClosedDates();
const currentDayHours = getHoursForDay(currentDay);
const nextDayHours = getHoursForDay(nextDay);
console.log(getOpenStatus(currentDayHours));