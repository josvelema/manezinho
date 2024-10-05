const imgScroller = document.querySelector(".img-scroller");
const imgScrollerControls = document.querySelector(".img-scroller-controls");
const foodImages = document.querySelector(".food-images");

function mainScroller() {
  imgScroller.querySelectorAll(".image-scroll").forEach((img, index) => {
    const dot = document.createElement("div");
    dot.classList.add("dot");
    dot.addEventListener("click", () => {
      imgScroller.querySelector(".active").classList.remove("active");
      img.classList.add("active");
      imgScrollerControls.querySelector(".active").classList.remove("active");
      dot.classList.add("active");
    });
    imgScrollerControls.appendChild(dot);
    if (index === 0) {
      img.classList.add("active");
      dot.classList.add("active");
    }
  });
  // scroll trough images
  let i = 0;
  setInterval(() => {
    imgScroller.querySelector(".active").classList.remove("active");
    imgScrollerControls.querySelector(".active").classList.remove("active");
    i = (i + 1) % imgScroller.children.length;
    imgScroller.children[i].classList.add("active");
    imgScrollerControls.children[i].classList.add("active");
  }, 5000);
}
document.addEventListener("DOMContentLoaded", mainScroller);

function foodScoller() {
  foodImages.querySelectorAll(".food-scroll").forEach((img, index) => {
    if (index === 0) {
      img.classList.add("active");
    }
  });
  let j = 0;
  setInterval(() => {
    foodImages.querySelector(".active").classList.remove("active");
    j = (j + 1) % foodImages.children.length;
    foodImages.children[j].classList.add("active");
  }, 4500);
}

// observer to start foodScoller when in view
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      foodScoller();
      observer.disconnect();
    }
  });
});

observer.observe(foodImages);

const modal = document.querySelector(".modal");
// const openModal = document.querySelector(".open-button");
const openModal = document.querySelectorAll(".open-button");
const closeModal = document.querySelector(".close-button");
const modalBg = document.querySelector(".modal-background");
const aboutUs = document.querySelector(".main-about");
// const readMore = document.querySelector(".read-main");
const scrollHere = document.querySelector("#scrollHere");

// openModal.addEventListener("click", () => {
//   modal.style.display = "flex";
//   modalBg.style.display = "block";
//   modal.setAttribute("opening", "");
//   modal.addEventListener(
//     "animationend",
//     () => {
//       modal.removeAttribute("opening");
//     }, {
//       once: true
//     }
//   );

// });

openModal.forEach((button) => {
  button.addEventListener("click", () => {
    modal.style.display = "flex";
    modalBg.style.display = "block";
    modal.setAttribute("opening", "");
    modal.addEventListener(
      "animationend",
      () => {
        modal.removeAttribute("opening");
      },
      {
        once: true,
      }
    );
  });
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
    {
      once: true,
    }
  );
});

let form = document.querySelector(".reservation-form");
let responseWrapper = document.querySelector(".response-wrapper");
let responseMsg = document.querySelector(".response-msg");
let exitBtn = document.querySelector("#response-exit-btn");
let errorsMsg = document.querySelector(".errors-msg");
let whatNext = document.querySelector(".what-next");

let page = window.location.pathname.split("/").pop().split(".")[0];

// console.log(page);

exitBtn.addEventListener('click', () => {
  responseWrapper.style.display = 'none';
});

form.addEventListener("submit", async (event) => {
  console.log("submitting form");
  event.preventDefault();
  let formData = new FormData(event.target);


  try {
    const response = await fetch("reservation.php", {
      method: "POST",
      body: formData,
    });
    const result = await response.json();

    if (result && !result.errors) {
      console.log("success");
      console.log(result);
      responseWrapper.style.display = "flex";
      responseMsg.innerHTML = result.success;
      form.reset();
    } else if (result.errors) {
      console.log(result.errors);
      errorsMsg.textContent = "";

      Object.values(result.errors).forEach((error) => {
        errorsMsg.textContent += error + "\n";
      });
      errorsMsg.classList.add("active");
      console.log(result.errors);
    } else {
      errorsMsg.textContent = "An unexpected error occurred.";
      errorsMsg.classList.add("active");
      console.log(result);
    }
  } catch (err) {
    console.error(err);
    errorsMsg.textContent =
      "An error occurred while submitting the form. Please try again.";
    errorsMsg.classList.add("active");
  }
});
