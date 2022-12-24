const OPENING_HOURS_URL = 'assets/js/openhours.json';
const HTML_ELEMENT_ID = 'openofniet';

async function updateOpeningHours() {
  const response = await fetch(OPENING_HOURS_URL);
  const { regular, exceptions } = await response.json();

  const now = new Date();
  const day = now.getDay();
  const time = now.getHours() * 100 + now.getMinutes();

  let status, open, close;
  for (const exception of exceptions) {
    if (exception.date === now.toISOString().split('T')[0]) {
      status = exception.status;
      open = exception.open;
      close = exception.close;
      break;
    }
  }
  if (status === undefined) {
    status = regular[day].status;
    open = regular[day].open;
    close = regular[day].close;
  }

  let message;
  if (status === 'open') {
    
    if (time < open) {
      const hoursUntilOpen = Math.ceil((open - time) / 100);
      message = `Opens in ${hoursUntilOpen} ${hoursUntilOpen > 1 ? 'hours' : 'hour'}`;
    } else if (time < close) {
      const hoursUntilClose = Math.floor((close - time) / 100);
      message = `Closes in ${hoursUntilClose} ${hoursUntilClose > 1 ? 'hours' : 'hour'}`;
    } else {
      message = 'Closed';
    }
  } else {
    let nextOpen;
    for (let i = day + 1; i < regular.length; i++) {
      if (regular[i].status === 'open') {
        nextOpen = i;
        break;
      }
    }
    if (nextOpen === undefined) {
      for (let i = 0; i <= day; i++) {
        if (regular[i].status === 'open') {
          nextOpen = i;
          break;
        }
      }
    }
    const daysUntilOpen = (nextOpen - day + 7) % 7;
    const hoursUntilOpen = Math.ceil((regular[nextOpen].open - time) / 100);
    message = `Opens in ${daysUntilOpen} ${daysUntilOpen > 1 ? 'days' : 'day'} and ${hoursUntilOpen} ${hoursUntilOpen > 1 ? 'hours' : 'hour'}`;
  }

  document.getElementById(HTML_ELEMENT_ID).innerHTML = message;
}

updateOpeningHours();
setInterval(updateOpeningHours, 60 * 60 * 1000); // update every hour


// 3 more tries including timezone
 


const OPENING_HOURS_URL = 'assets/js/openhours.json';
const HTML_ELEMENT_ID = 'openofniet';

async function updateOpeningHours() {
  const response = await fetch(OPENING_HOURS_URL);
  const { regular, exceptions } = await response.json();

  const now = new Date();
  const timezone = 'Atlantic/Azores';

  const hours = new Intl.DateTimeFormat('en-US', { hour: '2-digit', timeZone: timezone }).format(now);
const minutes = new Intl.DateTimeFormat('en-US', { minute: '2-digit', timeZone: timezone }).format(now);
const time = parseInt(`${hours}${minutes}`);


  // const hours = new Intl.DateTimeFormat('en-US', { hour: 'numeric', timeZone: timezone }).format(now);
  // const minutes = new Intl.DateTimeFormat('en-US', { minute: 'numeric', timeZone: timezone }).format(now);
  // const time = parseInt(`${hours}${minutes}`);
  

  // const time = new Intl.DateTimeFormat('en-US', { hour: 'numeric', minute: 'numeric', timeZone: timezone }).format(now);
  // const day = new Intl.DateTimeFormat('en-US', { weekday: 'numeric', timeZone: timezone }).format(now);
  const day = new Date(now).getDay();


  let status, open, close;
  for (const exception of exceptions) {
    if (exception.date === now.toISOString().split('T')[0]) {
      status = exception.status;
      open = exception.open;
      close = exception.close;
      break;
    }
  }
  if (status === undefined) {
    status = regular[day].status;
    open = regular[day].open;
    close = regular[day].close;
  }

  let message;
  if (status === 'open') {
    if (close < open) { // shop is open in the night
      if (time < open && time >= close) {
        const hoursUntilOpen = Math.ceil((open - time) / 100);
        message = `Opens in ${hoursUntilOpen} ${hoursUntilOpen > 1 ? 'hours' : 'hour'}`;
      } else {
        const hoursUntilClose = Math.floor(((2400 - time) + close) / 100);
        message = `Closes in ${hoursUntilClose} ${hoursUntilClose > 1 ? 'hours' : 'hour'}`;
      }
    } else { // shop is open during the day
      if (time < open) {
        const hoursUntilOpen = Math.ceil((open - time) / 100);
        message = `Opens in ${hoursUntilOpen} ${hoursUntilOpen > 1 ? 'hours' : 'hour'}`;
      } else if (time < close) {
        const hoursUntilClose = Math.floor((close - time) / 100);
        message = `Closes in ${hoursUntilClose} ${hoursUntilClose > 1 ? 'hours' : 'hour'}`;
      } else {
        message = 'Closed';
      }
    }
  } else {
    message = 'Closed';
  }

  document.getElementById(HTML_ELEMENT_ID).innerHTML = message;
}

updateOpeningHours();
setInterval(updateOpeningHours, 60 * 60 * 1000); // update every hour
