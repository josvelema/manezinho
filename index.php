<?php
include "includes/db.php";
session_start();
include "admin/functions.php";
include "includes/header.html";
include "includes/nav.html";
?>



<main class="scroll-wrapper">

  <section id="banner">
    <header class="main-header">

      <span>Art Restaurant</span>
      <h1 class="rise">Manezinho</h1>
      <h2 class="rise subheading">Live Music Art Lounge</h2>
      <!-- <p id="datesClosed" class="rise subheading"></p> -->

    </header>
    <a href="#one" class="goto-next scrolly">Next</a>
  </section>

  <section class="section-stretch main-hero">

    <div class="neon">
      <div class="neon-content rise subheading">
        <p class="neon-top">

        </p>
        <h3>

        </h3>
        <p class="neon-down">

        </p>
      </div>
      <div class="btn-container">

        <p>For reservations: </p>
        <a href="tel:+351 968 990 696" class="btn btn--dark">
          <i class="fa-solid fa-phone"></i>
          +351 968 990 696
        </a>
        <button class="btn btn--dark openorclosed open-button">
          <i class="fa-regular fa-clock"></i>
          &nbsp;Opening hours&nbsp;
        </button>

      </div>
    </div>

  </section>

  <section class="section-stretch" id="one">
    <div class="grid">
      <article class="rj-card rj-card-first">

        <div class="event-img">
          <img src="assets/svg/manezinhologo.svg" alt="Manezinho Logo">
          <span>Live music</span>
        </div>
        <div class="title-date">
          <h3>
            Coming events & sessions
          </h3>
          <p>
            Besides our resident artists, we regularly have guest playing on our stage. Sometime we also have jamsessions , where anyone can join in the fun. You can find more information about the events on the
            <a href="events.php">Event page</a>.
          </p>
        </div>

      </article>
      <?php

      $query = "SELECT * FROM posts WHERE post_event_date >= CURRENT_DATE() ORDER BY post_event_date LIMIT 4";
      $select_all_posts_query = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        // $post_author = $row['post_user'];
        $post_date = $row['post_date'];
        $post_image = $row['post_image'];
        // $post_content = substr($row['post_content'], 0, 400);
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_event_date    = $row['post_event_date'];
        $post_event_time    = $row['post_event_time'];
        $post_content       = $row['post_content'];
        $post_content_p     = $row['post_content_p'];
        $post_url           = $row['post_url'];



      ?>

        <article class="card fade-up">

          <div class="card__image-container">
            <img src="admin/images/<?= $post_image ?>" alt="<?= $post_title ?>">
          </div>
          <div class="card__text-container">
            <h3 class="card__title">
              <?= $post_title ?>
            </h3>
            <p class="card__date-time">
              <?= date("l d \\of F Y",  strtotime($post_event_date)) .
                " <br> Starts at " . $post_event_time
              ?>
            </p>
            <a href="events.php" class="btn btn--dark">More info</a>
          </div>

        </article>
      <?php
      }

      ?>
    </div>

    <p class="main-about">
      In 2020 Rini and Pieter Adriaans bought Manezinho, a
      restaurant on a very beautiful spot at the coast of
      Urzelina. It used to be famous on the islands at the
      beginning of the century but had been closed for a couple of
      years. After almost a year of renovation the place opened
      its doors again as Grand Café Manezinho in October 2021. The
      name was kept but the formula is different: a place where
      people can relax, see art and listen to live music. In
      Manezinho there is a permanent exposition of works by
      Pieter.
    </p>
    </article>

    <!-- <div class="main-buttons">
      <button class="btn btn--accent read-main">About us</button>
      <button class="btn btn--accent event-btn" onclick="location.href = 'events.php'">Events</button>
    </div> -->




  </section>

</main>
<script>
  const modal = document.querySelector(".modal");
  const openModal = document.querySelector(".open-button");
  const closeModal = document.querySelector(".close-button");
  const modalBg = document.querySelector(".modal-background");
  const aboutUs = document.querySelector(".main-about");
  // const readMore = document.querySelector(".read-main");
  const scrollHere = document.querySelector("#scrollHere");


  (function() {
    function getScrollPosition(selector, options) {
      console.log("in get scrollpos");
      const targetElement = document.querySelector(selector);
      if (!targetElement) return null;

      const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
      let finalScrollPosition;

      switch (options.anchor) {
        case 'middle':
          finalScrollPosition = targetPosition - (window.innerHeight - targetElement.offsetHeight) / 2;
          break;
        default:
        case 'top':
          finalScrollPosition = Math.max(targetPosition, 0);
      }

      finalScrollPosition -= (typeof options.offset === 'function') ? options.offset() : options.offset;
      return finalScrollPosition;

    }

    function scrolly(elements, options = {}) {
      const scrollContainer = document.querySelector('.scroll-container');
      const scrollWrapper = scrollContainer.querySelector('.scroll-wrapper');

      elements.forEach(element => {
        element.addEventListener('click', function(event) {
          event.preventDefault();
          const href = this.getAttribute('href');
          const targetElement = document.querySelector(href);
          if (!targetElement) return;

          const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;

          scrollContainer.style.overflow = 'hidden';
          const transformValue = `translateY(-${targetPosition}px)`;
          scrollWrapper.style.transform = transformValue;

          scrollWrapper.addEventListener('transitionend', () => {
            scrollContainer.style.overflow = 'auto';
          }, {
            once: true
          });
        });
      });
    }

    function scrolly(elements, options = {}) {
      elements.forEach(element => {
        element.addEventListener('click', function(event) {
          event.preventDefault();
          const href = this.getAttribute('href');
          const targetElement = document.querySelector(href);
          if (!targetElement) return;

          const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;

          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
        });
      });
    }

    // Usage
    scrolly('a[href^="#"]', {
      speed: '500ms',
      easing: 'linear'
    });



    window.scrolly = function(selector, options = {}) {
      const defaults = {
        anchor: 'top',
        easing: 'linear',
        offset: 0,
        pollOnce: false,
        speed: 1000
      };


      const finalOptions = Object.assign({}, defaults, options);
      const elements = document.querySelectorAll(selector);

      if (finalOptions.pollOnce) {
        getScrollPosition(window.location.hash, finalOptions);
      }

      scrolly(elements, finalOptions);
    };

  })();



  // Usage
  scrolly('a[href^="#"]', {
    speed: '500ms',
    easing: 'linear'
  });


  // Usage
  // scrolly('a[href^="#"]', { offset: 0 });


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