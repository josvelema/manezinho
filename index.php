<?php
include "includes/db.php";
session_start();
include "admin/functions.php";
include "includes/header.html";
include "includes/nav.html";
?>

<main>

  <section class="hero">
    <div class="img-scroller">
      <!-- scroll trough images from img/scaledImg folder using img srcset  -->
      <img src="assets/img/scaledImg/Manezinho-Entrada-small.jpg" sizes="(max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 992px) 992px, 1200px" srcset="assets/img/scaledImg/Manezinho-Entrada-xl.jpg 1200w,
    assets/img/scaledImg/Manezinho-Entrada-large.jpg 992w,
    assets/img/scaledImg/Manezinho-Entrada-medium.jpg 768w,
    ./assets/img/scaledImg/Manezinho-Entrada-small.jpg 480w
    " alt="Descriptive alt text" loading="lazy" class="image-scroll active">
      <img src="assets/img/scaledImg/Manezinho-Interior-small.jpg" sizes="(max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 992px) 992px, 1200px" srcset="assets/img/scaledImg/Manezinho-Interior-xl.jpg 1200w,
    assets/img/scaledImg/Manezinho-Interior-large.jpg 992w,
    assets/img/scaledImg/Manezinho-Interior-medium.jpg 768w,
    ./assets/img/scaledImg/Manezinho-Interior-small.jpg 480w
    " alt="Descriptive alt text" loading="lazy" class="image-scroll">
      <!-- assets\img\scaledImg\Manezinho-Bar-small.jpg -->
      <img src="assets/img/scaledImg/Manezinho-Bar-small.jpg" sizes="(max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 992px) 992px, 1200px" srcset="assets/img/scaledImg/Manezinho-Bar-xl.jpg 1200w,
    assets/img/scaledImg/Manezinho-Bar-large.jpg 992w,
    assets/img/scaledImg/Manezinho-Bar-medium.jpg 768w,
    ./assets/img/scaledImg/Manezinho-Bar-small.jpg 480w
    " alt="Descriptive alt text" loading="lazy" class="image-scroll" style="object-position: 36%;">
      <!-- assets\img\scaledImg\Manezinho-Esplanada-small.jpg -->
      <img src="assets/img/scaledImg/Manezinho-Esplanada-small.jpg" sizes="(max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 992px) 992px, 1200px" srcset="assets/img/scaledImg/Manezinho-Esplanada-xl.jpg 1200w,
    assets/img/scaledImg/Manezinho-Esplanada-large.jpg 992w,
    assets/img/scaledImg/Manezinho-Esplanada-medium.jpg 768w,
    ./assets/img/scaledImg/Manezinho-Esplanada-small.jpg 480w" loading="lazy" alt="Descriptive alt text" class="image-scroll" style="object-position: 60%;">
      <!-- assets\img\scaledImg\Manezinho-Jardim-small.jpg -->
      <img src="assets/img/scaledImg/Manezinho-Jardim-small.jpg" sizes="(max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 992px) 992px, 1200px" srcset="assets/img/scaledImg/Manezinho-Jardim-xl.jpg 1200w,
    assets/img/scaledImg/Manezinho-Jardim-large.jpg 992w,
    assets/img/scaledImg/Manezinho-Jardim-medium.jpg 768w,
    ./assets/img/scaledImg/Manezinho-Jardim-small.jpg 480w" loading="lazy" alt="Descriptive alt text" class="image-scroll" style="object-position: 20%;">
      <!-- assets\img\scaledImg\Manezinho-Frente-small.jpg -->
      <img src="assets/img/scaledImg/Manezinho-Frente-small.jpg" sizes="(max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 992px) 992px, 1200px" srcset="assets/img/scaledImg/Manezinho-Frente-xl.jpg 1200w,
    assets/img/scaledImg/Manezinho-Frente-large.jpg 992w,
    assets/img/scaledImg/Manezinho-Frente-medium.jpg 768w,
    ./assets/img/scaledImg/Manezinho-Frente-small.jpg 480w" loading="lazy" alt="Descriptive alt text" class="image-scroll" style="object-position: 66%;">

    </div>
    <div class="img-scroller-controls">
      <!-- insert scroll dots here  -->
    </div>




    <header class="main-header">


      <h1 class="rise"><span>Art Restaurant</span> Manezinho</h1>
      <h2 class="rise subheading">Live Music Art Lounge</h2>

    </header>

    <div class="btn-container">
      <p>        
          Art Restaurant Manezinho | <a href="https://www.facebook.com/Art-Restaurant-Manezinho-100617402655398" target="_blank">Canada do Açougue 9800-429 Urzelina, Sao Jorge</a>
      </p>
      <a href="tel:+351 968 990 696" class="btn btn--dark">
        <i class="fa-solid fa-phone"></i>
        <span>+351 968 990 696</span>
      </a>
      <button class="btn btn--dark openorclosed open-button">
        <i class="fa-solid fa-circle-info"></i>
      </button>
    </div>
  </section>

  <div class="home-divider music">
    <h2>Live Music</h2>
  </div>
  <section class="home-music">

    <div class="music-content">
      <p>
        Besides our resident artists, we regularly have guest playing on our stage. Sometime we also have jamsessions , where anyone can join in the fun. You can find more information about the events on the
        <a href="events.php">Event page</a>.
      </p>
    </div>
    






  </section>

</main>
<script>
  const imgScroller = document.querySelector(".img-scroller");
  const imgScrollerControls = document.querySelector(".img-scroller-controls");

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

  
</script>

<script>
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
      }, {
        once: true
      }
    );
  });
</script>

<?php

include "includes/footer.html";


?>