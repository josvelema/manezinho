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
      <h2 class="rise subheading">Live Music Art Lounge</h2>
      <!-- <p id="datesClosed" class="rise subheading"></p> -->
      
    </header>


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
        <a href="tel:+351 968 990 696" class="btn btn--accent">
          <i class="fa-solid fa-phone"></i>
          +351 968 990 696
        </a>
        <!-- <a href="#" class="btn btn--accent openorclosed open-button">Opening hours</a> -->

      </div>
    </div>

  </section>

  <section>
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
            <img src="images/<?= $post_image ?>" alt="<?= $post_title ?>">
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
            <a href="events.php" class="card__button">More info</a>
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




  </section>

</main>


<?php
include "includes/footer.html";


?>