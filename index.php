<?php
include "includes/db.php";
session_start();
include "admin/functions.php";
include "includes/header.html";
include "includes/nav.html";
?>
<div class="response-wrapper">
  <div class="response">
    <h2>Thank you for your request!</h2>
    <p class="response-msg"></p>
    <button class="btn btn--dark" id="response-exit-btn" title="go back to page">close</button>
  </div>
</div>

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
      <!-- <p>
        Art Restaurant Manezinho | <a href="https://www.facebook.com/Art-Restaurant-Manezinho-100617402655398" target="_blank">Canada do Açougue 9800-429 Urzelina, Sao Jorge</a>
      </p> -->
      <div class="open-closed-info"></div>
      <button class="btn btn--dark openorclosed open-button">
        <i class="fa-solid fa-circle-info"></i><span>Opening Hours</span>
      </button>
      <a href="#reservation" class="btn btn--dark">
        <i class="fa-solid fa-utensils"></i>
        <span>Reservation</span>
      </a>
    </div>
  </section>

  <header class="home-divider home-food-header">
    <h2>Our Menu</h2>
    <p>
      Our menu is inspired by the local cuisine of the Azores. We use fresh and local ingredients to create our dishes. We also have a selection of wines and cocktails to accompany your meal. You can find more information about our menu on the
      <a href="/menu">Menu page</a>.
    </p>

  </header>

  <section class="home-food">
    <div class="food-images">
      <!--  4 food/drink images for scroller-->
      <div class="food-scroll">
        <img src="assets/img/scaledImg/manezinho_food_048-small.jpg" sizes="(max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 992px) 992px, 1200px" srcset="assets/img/scaledImg/manezinho_food_048-xl.jpg 1200w,
              assets/img/scaledImg/manezinho_food_048-large.jpg 992w,
              assets/img/scaledImg/manezinho_food_048-medium.jpg 768w,
              ./assets/img/scaledImg/manezinho_food_048-small.jpg 480w" loading="lazy" alt="Azorean limpets">
        <div class="img-scroll-txt">
          <h3>Lapas</h3>
          <!-- <p>Lapas are small, snail-like shellfish that are typically found on rocks in the intertidal zone.</p> -->
          <p>Lapas are small, snail-like shellfish. A local delicacy.</p>
        </div>
      </div>
      <div class="food-scroll">
        <img src="assets/img/scaledImg/Manezinho-Tábua-Mista-small.jpg" sizes="(max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 992px) 992px, 1200px" srcset="assets/img/scaledImg/Manezinho-Tábua-Mista-xl.jpg 1200w,
              assets/img/scaledImg/Manezinho-Tábua-Mista-large.jpg 992w,
              assets/img/scaledImg/Manezinho-Tábua-Mista-medium.jpg 768w,
              ./assets/img/scaledImg/Manezinho-Tábua-Mista-small.jpg 480w" loading="lazy" alt="Manezinho Tábua Mista">
        <div class="img-scroll-txt">
          <h3>Tábua-Mista</h3>
          <p>A mixed platter of local cheeses, meats and bread.</p>
        </div>
      </div>
      <div class="food-scroll">
        <img src="assets/img/scaledImg/Manezinho-Camarão-à-Manezinho-small.jpg" sizes="(max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 992px) 992px, 1200px" srcset="assets/img/scaledImg/Manezinho-Camarão-à-Manezinho-xl.jpg 1200w,
              assets/img/scaledImg/Manezinho-Camarão-à-Manezinho-large.jpg 992w,
              assets/img/scaledImg/Manezinho-Camarão-à-Manezinho-medium.jpg 768w,
              ./assets/img/scaledImg/Manezinho-Camarão-à-Manezinho-small.jpg 480w" loading="lazy" alt="Camarão à Manezinho">
        <div class="img-scroll-txt">
          <h3>Camarão à Manezinho</h3>
          <p>Delicious shrimp and homemade fries.</p>
        </div>
      </div>
      <div class="food-scroll">
        <img src="assets/img/scaledImg/manezinho_food_053-small.jpg" sizes="(max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 992px) 992px, 1200px" srcset="assets/img/scaledImg/manezinho_food_053-xl.jpg 1200w,
                  assets/img/scaledImg/manezinho_food_053-large.jpg 992w,
                  assets/img/scaledImg/manezinho_food_053-medium.jpg 768w,
                  ./assets/img/scaledImg/manezinho_food_053-small.jpg 480w" loading="lazy" alt="T-bone steak">
        <div class="img-scroll-txt">
          <h3>T-bone steak </h3>
          <p>Grilled T-bone steak with patatos.</p>
        </div>
      </div>
    </div>
    </div>



  </section>

  <header class="home-divider music">
    <h2>Live Music</h2>
  </header>
  <section class="home-music">
    <article>
      <div class="home-music-img">
        <img src="assets/img/pieterJet.png" alt="Pieter & Jet on stage">
        <h3>Pieter & Jet on stage</h3>
      </div>
      <p>
        Besides our resident artists, we regularly have guest playing on our stage. Sometime we also have jamsessions , where anyone can join in the fun. You can find more information about the events on the
        <a href="events.php">Event page</a>.
      </p>
    </article>


  </section>
  <header class="home-divider reservations" id="reservation">
    <h2>Reservations</h2>
  </header>

  <section>
    <p>
      You can request a reservation by filling out the form below. We will contact you via email as soon as possible to confirm your reservation.
      Please note, your reservation is only confirmed once you receive a confirmation from us.
      <br>
      For groups of more than 4 people, a phone number is required.
    </p>
    <p>
      You can also make a reservation by phone on the days we are open, starting in the afternoon. 
      <strong>Phone:</strong> <a href="tel:+351968990696">+351 968 990 696</a>
    </p>

    <p>
      Please note, we are <span style="text-decoration: underline; font-weight: 600">closed on Mondays and Tuesdays</span>, so reservation requests made on those days will likely
      be answered on our next open day and <span style="text-decoration: underline; font-weight: 600">reservations for the same day can only be made until 15:00</span>.
    </p>


    <form class="reservation-form" action="" method="post" enctype="multipart/form-data">

      <div class="fields">
        <div class="field half">
          <label for="name">Name <span class="form-required">* required</span></label>
          <input type="text" id="first_name" name="first_name" placeholder="Enter your name"
            title="First name must contain only characters!" required>

        </div>

        <div class="field half">
          <label for="email">Email <span class="form-required">* required</span></label>
          <input type="email" id="email" name="email" placeholder="Enter your email"
            title="Please enter a valid email address!" required>

        </div>
        <!-- accept phone number with numbers , () and - only -->
        <div class="field half">
          <label for="phone">Phone</label>
          <input type="text" name="phone" id="" placeholder="Enter your phone number"
            title="Please enter a valid phone number!">
        </div>
        <!-- // datepicker  -->
        <div class="field quarter">
          <label for="persons">Number of persons <span class="form-required">* required</span></label>
          <input type="number" name="persons" id="persons" placeholder="Enter number of persons" min=1 max=20 required title="Please enter a number between 1 and 20!">
        </div>
        <div class="field quarter">
          <label for="date">Date <span class="form-required">* required</span></label>
          <input type="date" name="date" id="date-reservation" required>
        </div>
        <!-- number of persons  -->

        <div class="field half">
          <label for="message">Additional information </label>
          <textarea name="message" id="message" rows="3" placeholder=" "></textarea>
        </div>
        <div class="field half button-field">
          <input type="submit" value="Send" class="btn btn--gold" />
          <input type="reset" value="Clear" class="btn btn--a clear-form" />
        </div>
        <div class="field half last-field">
          <p class="errors-msg"></p>
          <!-- <div class="g-recaptcha" data-sitekey="6LfUEvQpAAAAABZlIBzegXpvRMnnVGGwtCKaUMZ2"></div> -->


        </div>
    </form>
  </section>

</main>

<script src="assets/js/home.js"></script>
<script src="assets/js/closedOrOpen.js" defer></script>
<?php

include "includes/footer.html";


?>