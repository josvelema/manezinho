// made by Jos Velema 2022
document.addEventListener("DOMContentLoaded", function () {
  let lazyVideos = [].slice.call(
      document.querySelectorAll(".video-slide.lazy")
  );

  if ("IntersectionObserver" in window) {
      let lazyVideoObserver = new IntersectionObserver(function (
          entries,
          observer
      ) {
          entries.forEach(function (video) {
              if (video.isIntersecting) {
                  for (let source in video.target.children) {
                      let videoSource =
                          video.target.children[source];
                      if (
                          typeof videoSource.tagName ===
                              "string" &&
                          videoSource.tagName === "SOURCE"
                      ) {
                          videoSource.src =
                              videoSource.dataset.src;
                      }
                  }

                  video.target.load();
                  video.target.classList.remove("lazy");
                  lazyVideoObserver.unobserve(video.target);
              }
          });
      });

      lazyVideos.forEach(function (lazyVideo) {
          lazyVideoObserver.observe(lazyVideo);
      });
  }
});
//Javacript for responsive navigation menu
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
  menuBtn.classList.toggle("active");
  navigation.classList.toggle("active");
});

//Javacript for video slider navigation
const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".content");

let sliderNav = function (manual) {
  btns.forEach((btn) => {
      btn.classList.remove("active");
  });

  slides.forEach((slide) => {
      slide.classList.remove("active");
  });

  contents.forEach((content) => {
      content.classList.remove("active");
  });

  btns[manual].classList.add("active");
  slides[manual].classList.add("active");
  contents[manual].classList.add("active");
};

btns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
      sliderNav(i);
  });
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

if (currentDate.getDay() == "Monday" || "Tuesday") {
  document
      .querySelector(".openorclosed")
      .classList.toggle("closed");
} else {
  let currentDay = weekday[currentDate.getDay()];

  let currentTimeHours = currentDate.getHours();
  currentTimeHours =
      currentTimeHours < 10
          ? "0" + currentTimeHours
          : currentTimeHours;
  let currentTimeMinutes = currentDate.getMinutes();
  let timeNow = currentTimeHours + "" + currentTimeMinutes;

  let currentDayID = document.getElementById(currentDay);
  //gets todays weekday and turns it into id
  // $(currentDayID).toggleClass("today");
  currentDayID.classList.toggle("today");
  //this works at hightlighting today

  // let openTimeSplit = currentDayID.children('.opens').innerText.split(":");
  let openTimeSplit =
      currentDayID.children[1].innerText.split(":");

  let openTimeHours = openTimeSplit[0];
  openTimeHours =
      openTimeHours < 10 ? "0" + openTimeHours : openTimeHours;

  let openTimeMinutes = openTimeSplit[1];
  let openTimex = openTimeSplit[0] + openTimeSplit[1];

  //let closeTimeSplit = $(currentDayID).children('.closes').text().split(":");
  let closeTimeSplit =
      currentDayID.children[3].innerText.split(":");

  let closeTimeHours = closeTimeSplit[0];
  closeTimeHours =
      closeTimeHours < 10 ? "0" + closeTimeHours : closeTimeHours;

  let closeTimeMinutes = closeTimeSplit[1];
  let closeTimex = closeTimeSplit[0] + closeTimeSplit[1];

  if (timeNow >= openTimex && timeNow <= closeTimex) {
      //$(".openorclosed").toggleClass("open");
      document
          .querySelector(".openorclosed")
          .classList.toggle("open");
  } else {
      document
          .querySelector(".openorclosed")
          .classList.toggle("closed");
  }
}