<?php
include "includes/db.php";
session_start();
include "admin/functions.php";
include "includes/header.html";
include "includes/nav.html";
?>



<main>

  <section>


    <header class="main-header">

      <span>Art Restaurant</span>
      <h1 class="rise">Manezinho</h1>
      <h2 class="rise subheading">An <em>unique</em> Azorean Experience</h2>
    </header>


    <div class="neon">
      <div class="neon-content">
        <p>

        </p>
        <h3>

        </h3>
      </div>
      <div class="btn-container">

        <p>For reservations: </p>
        <a href="tel:+351 968 990 696" class="btn btn--accent">
          <i class="fa-solid fa-phone"></i>
          +351 968 990 696
        </a>
        <!-- <a href="#" class="btn btn--accent openorclosed open-button">Opening hours</a> -->

      </div>
    </div>

  </section>

  <section>
    <div class="rj-card-container">
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
          <!-- <a href="events.php" class="btn btn--accent">More info</a> -->
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

        <article class="rj-card fade-up">

          <div class="event-img">
            <img src="images/manezinhoKerst.jpg" alt="<?= $post_title ?>">
          </div>
          <div class="title-date">
            <h3>
              <?= $post_title ?>
            </h3>
            <p>
              <?= date("l d \\of F Y",  strtotime($post_event_date)) .
                " <br> Starts at " . $post_event_time
              ?>
            </p>
            <a href="events.php" class="btn btn--accent">More info</a>
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

    <div class="main-buttons">
      <button class="btn btn--accent read-main">About us</button>
      <button class="btn btn--accent event-btn" onclick="location.href = 'events.php'">Events</button>
    </div>


    <article class="content">
      <h1>Food<br /></h1>
      <h2><span>Fresh and delicous</span></h2>
      <p>
        Try our signature burger , Shrimp in batter or the new
        T-bone Steak! And for dessert we highly recommend the
        cheesecake! We recently updated our menu and soon you can
        have a preview on this site.
      </p>
      <!-- <a href="#" class="btn">Read More</a> -->
    </article>
    <article class="content">
      <h1>Drinks<br /></h1>
      <h2><span>Cold beers , tasty wine and lush cocktails</span></h2>
      <p>
        We have all the drinks you got possibly want ! Beer from the
        tap and bottle , exclusive liquor and ofcourse our signature
        cocktails!
      </p>
      <!-- <a href="#" class="btn">Read More</a> -->
    </article>
    <article class="content">
      <h1>Live Music<br /></h1>
      <h2><span>Resident and guest artists</span></h2>
      <p>
        Besides enjoying a nice dinner and drinks , you're likely to
        see and hear music played by our artists-in-residence as
        well as guest players and even open stage nights where
        everybody can join in the fun! Check out the upcoming events
        on the event-page!
      </p>
      <a href="events.html" class="btn">Events</a>
    </article>
    <article class="content">
      <h1>Art<br /></h1>
      <h2><span>Expositions</span></h2>
      <p>
        Upon visiting Manezinho , you will see a lot of art made by
        <a href="http://www.pieter-adriaans.com" target="_blank">Pieter Adriaans</a>
        but also Manezinho acts as a cospace for expositions of
        works of other people. Check the event page for upcoming
        events / expositions.
      </p>
      <a href="events.html" class="btn">Events</a>
    </article>
    <aside class="media-icons">
      <a href="https://www.facebook.com/Art-Restaurant-Manezinho-100617402655398" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
        </svg>
      </a>
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <desc>
            Download more icon variants from
            https://tabler-icons.io/i/brand-instagram
          </desc>
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <rect x="4" y="4" width="16" height="16" rx="4"></rect>
          <circle cx="12" cy="12" r="3"></circle>
          <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
        </svg>
      </a>
      <a href="https://www.tripadvisor.com/Restaurant_Review-g11798114-d15697299-Reviews-Art_Restaurant_Manezinho-Urzelina_Sao_Jorge_Azores.html?m=19905" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tripadvisor" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <desc>
            Download more icon variants from
            https://tabler-icons.io/i/brand-tripadvisor
          </desc>
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <circle cx="6.5" cy="13.5" r="1.5"></circle>
          <circle cx="17.5" cy="13.5" r="1.5"></circle>
          <path d="M17.5 9a4.5 4.5 0 1 0 3.5 1.671l1 -1.671h-4.5z"></path>
          <path d="M6.5 9a4.5 4.5 0 1 1 -3.5 1.671l-1 -1.671h4.5z"></path>
          <path d="M10.5 15.5l1.5 2l1.5 -2"></path>
          <path d="M9 6.75c2 -.667 4 -.667 6 0"></path>
        </svg>
      </a>
    </aside>


  </section>

</main>

<?php
include "includes/footer.html";

?>