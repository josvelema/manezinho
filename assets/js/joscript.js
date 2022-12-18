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

const modal = document.querySelector(".modal");
const openModal = document.querySelector(".open-button");
const closeModal = document.querySelector(".close-button");
const modalBg = document.querySelector(".modal-background");
const aboutUs = document.querySelector(".main-about");
const readMore = document.querySelector(".read-main");
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
