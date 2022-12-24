// made by Jos Velema 2022
const navBtn = document.querySelector("#menu-btn");
const nav = document.querySelector("nav");
const navLinks = document.querySelector(".nav-links");
const navLink = document.querySelectorAll(".nav-link");

const logo = document.querySelector(".logo");
const menuBtn = document.querySelector(".btn--menu");
// active page
navLink.forEach((link) => {
  
  console.log((link.href, window.location.href));
  if (link.href === window.location.href) {
    link.setAttribute("aria-current", "page");
  }
});

// --

// navBtn.addEventListener("click", () => {
//   navLinks.classList.toggle("activated");
//   const isExpanded = JSON.parse(navBtn.getAttribute("aria-expanded"));
//   navBtn.setAttribute("aria-expanded", !isExpanded);
//   !isExpanded && nav.classList.add("active");
//   logo.style.color = "#000000";
//   menuBtn.style.color = "#000000";
// });

// window.addEventListener('DOMContentLoaded', () => {
// })

// INTERSECTION OBSERVERS
// const navObserver = new IntersectionObserver(
//   (watchEntry) => {
//     // !watchEntry[0].isIntersecting ? nav.classList.add('active') : nav.classList.remove('active');
//     if (!watchEntry[0].isIntersecting ) {
//         nav.classList.add("active");
//         menuBtn.style.color = "#000000";
    
//         logo.style.color = "#000000";
//         navLink.forEach((link) => { 
//             link.style.color = "#000000"
//             });

//     } else {

//         nav.classList.remove("active");
//         menuBtn.style.color = "var(--gold-100)";

//         logo.style.color = "#fafafa";
//         navLink.forEach((link) => {
  
//         link.style.color = "#fafafa"
//       });
//     }
//   },
//   { threshold: 0.85 }
// );


navBtn.addEventListener('click' , () => {
  navLinks.classList.add('activated')
  const isExpanded = JSON.parse(navBtn.getAttribute('aria-expanded'));
  navBtn.setAttribute('aria-expanded' , !isExpanded);

  !isExpanded && nav.classList.add('active')

})

const navObserver = new IntersectionObserver((watchEntry) => {
  !watchEntry[0].isIntersecting ? nav.classList.add('active') : nav.classList.remove('active');
}, {threshold: 0.85});


navObserver.observe(document.querySelector("header"));

const fadeUpObserver = new IntersectionObserver(
  (elsToWatch) => {
    elsToWatch.forEach((el) => {
      if (el.isIntersecting) {
        el.target.classList.add("faded");
        fadeUpObserver.unobserve(el.target);
      }
    });
  },
  { threshold: 0.05 }
);

document.querySelectorAll(".fade-up").forEach((item) => {
  console.log(item);
  fadeUpObserver.observe(item);
});
document.querySelectorAll(".fade-up-delay").forEach((item) => {
  console.log(item);
  fadeUpObserver.observe(item);
});



let currentDate = new Date();
let weekday = [];
weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

let neonAreWeOpen = document.querySelector(".neon p");
let neonSign = document.querySelector(".neon h3");

if (currentDate.getDay() == 1 || currentDate.getDay() == 2) {
  neonSign.classList.toggle("neonClosed");
  neonSign.innerText = "Closed";
  neonAreWeOpen.innerText = "Sorry! Today we are";
} else {
  neonSign.classList.toggle("neonOpen");
  neonSign.innerText = "Open!";
  neonAreWeOpen.innerText = "Today we are";

  let currentDay = weekday[currentDate.getDay()];

  let currentTimeHours = currentDate.getHours();
  currentTimeHours =
    currentTimeHours < 10 ? "0" + currentTimeHours : currentTimeHours;
  let currentTimeMinutes = currentDate.getMinutes();
  let timeNow = currentTimeHours + "" + currentTimeMinutes;

  let currentDayID = document.getElementById(currentDay);
  //gets todays weekday and turns it into id
  // $(currentDayID).toggleClass("today");
  currentDayID.classList.toggle("today");
  //this works at hightlighting today

  // let openTimeSplit = currentDayID.children('.opens').innerText.split(":");
  let openTimeSplit = currentDayID.children[1].innerText.split(":");

  let openTimeHours = openTimeSplit[0];
  openTimeHours = openTimeHours < 10 ? "0" + openTimeHours : openTimeHours;

  let openTimeMinutes = openTimeSplit[1];
  let openTimex = openTimeSplit[0] + openTimeSplit[1];

  //let closeTimeSplit = $(currentDayID).children('.closes').text().split(":");
  let closeTimeSplit = currentDayID.children[3].innerText.split(":");

  let closeTimeHours = closeTimeSplit[0];
  closeTimeHours = closeTimeHours < 10 ? "0" + closeTimeHours : closeTimeHours;

  let closeTimeMinutes = closeTimeSplit[1];
  let closeTimex = closeTimeSplit[0] + closeTimeSplit[1];

  if (timeNow >= openTimex && timeNow <= closeTimex) {
    //$(".openorclosed").toggleClass("open");
    document.querySelector(".openorclosed").classList.toggle("open");
  } else {
    document.querySelector(".openorclosed").classList.toggle("closed");
  }
}
// const OPENING_HOURS_URL = 'assets/js/openhours.json';
// const HTML_ELEMENT_ID = 'openofniet';

// async function updateOpeningHours() {
//   const response = await fetch(OPENING_HOURS_URL);
//   const { regular, exceptions } = await response.json();

//   const now = new Date();
//   const day = now.getDay();
//   const time = now.getHours() * 100 + now.getMinutes();

 
//   let status, open, close;
//   for (const exception of exceptions) {
//     if (exception.date === now.toISOString().split('T')[0]) {
//       status = exception.status;
//       open = exception.open;
//       close = exception.close;
//       break;
//     }
//   }
//   if (status === undefined) {
//     status = regular[day].status;
//     open = regular[day].open;
//     close = regular[day].close;
//   }

//   let message;
//   if (status === 'open') {
//     if (close < open) { // shop is open in the night
//       if (time < open && time >= close) {
//         const hoursUntilOpen = Math.ceil((open - time) / 100);
//         message = `Opens in ${hoursUntilOpen} ${hoursUntilOpen > 1 ? 'hours' : 'hour'}`;
//       } else {
//         const hoursUntilClose = Math.floor(((2400 - time) + close) / 100);
//         message = `Closes in ${hoursUntilClose} ${hoursUntilClose > 1 ? 'hours' : 'hour'}`;
//       }
//     } else { // shop is open during the day
//       if (time < open) {
//         const hoursUntilOpen = Math.ceil((open - time) / 100);
//         message = `Opens in ${hoursUntilOpen} ${hoursUntilOpen > 1 ? 'hours' : 'hour'}`;
//       } else if (time < close) {
//         const hoursUntilClose = Math.floor((close - time) / 100);
//         message = `Closes in ${hoursUntilClose} ${hoursUntilClose > 1 ? 'hours' : 'hour'}`;
//       } else {
//         message = 'Closed';
//       }
//     }
//   } else {
//     message = 'Closed';
//   }

//   document.getElementById(HTML_ELEMENT_ID).innerHTML = message;
// }

// updateOpeningHours();
// setInterval(updateOpeningHours, 60 * 60 * 1000); // update every hour


// async function checkClosedDays() {
//    const response = await fetch(OPENING_HOURS_URL);
//   const { regular, exceptions } = await response.json();
//   const now = new Date();
//   const twoWeeksFromNow = new Date(now.getTime() + 14 * 24 * 60 * 60 * 1000);

//   const closedDays = [];
//   for (const exception of exceptions) {
//     if (exception.status === 'closed' && exception.date >= now.toISOString().split('T')[0] && exception.date <= twoWeeksFromNow.toISOString().split('T')[0]) {
//       closedDays.push(exception.date);
//     }
//   }

//   if (closedDays.length > 0) {
//     let message = 'The following days will be closed in the coming 2 weeks: ';
//     let consecutiveClosedDays = 1;
//     for (let i = 1; i < closedDays.length; i++) {
//       const currentDay = new Date(closedDays[i]);
//       const previousDay = new Date(closedDays[i - 1]);
//       if (currentDay.getTime() - previousDay.getTime() === 24 * 60 * 60 * 1000) {
//         consecutiveClosedDays++;
//       } else {
//         if (consecutiveClosedDays > 1) {
//           message += `${closedDays[i - consecutiveClosedDays]}-${closedDays[i - 1]}, `;
//         } else {
//           message += `${closedDays[i - 1]}, `;
//         }
//         consecutiveClosedDays = 1;
//       }
//     }
//     if (consecutiveClosedDays > 1) {
//       message += `${closedDays[closedDays.length - consecutiveClosedDays]}-${closedDays[closedDays.length - 1]}`;
//     } else {
//       message += closedDays[closedDays.length - 1];
//     }
//     console.log(message);
//   } else {
//     console.log('There are no days closed in the coming 2 weeks.');
//   }
// }

// checkClosedDays();



const modal = document.querySelector(".modal");
const openModal = document.querySelector(".open-button");
const closeModal = document.querySelector(".close-button");
const modalBg = document.querySelector(".modal-background");
const aboutUs = document.querySelector(".main-about");
// const readMore = document.querySelector(".read-main");
const scrollHere = document.querySelector("#scrollHere");

openModal.addEventListener("click", () => {
  modal.style.display = "flex";
  modalBg.style.display = "block";
});

closeModal.addEventListener("click", () => {
  modal.setAttribute("closing", "");

  modal.addEventListener(
    "animationend",
    () => {
      modal.removeAttribute("closing");
      modal.style.display = "none";
      modalBg.style.display = "none";
    },
    { once: true }
  );
});
