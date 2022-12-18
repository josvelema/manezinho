<?php
include "includes/db.php";

include "admin/functions.php";
include "includes/header.html";
include "includes/nav.html";

$per_page = 5;


(isset($_GET['page'])) ? $page = $_GET['page'] :  $page = "";



($page == "" || $page == 1) ?  $page_1 = 0 : $page_1 = ($page * $per_page) - $per_page;

(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') ?
  $post_query_count = "SELECT * FROM posts" :
  $post_query_count = "SELECT * FROM posts WHERE post_status = 'published'";


$find_count = mysqli_query($connection, $post_query_count);
$count = mysqli_num_rows($find_count);

if ($count < 1) {


  echo "<h1 class='text-center'>There are currently no events</h1>";
} else {
  $count  = ceil($count / $per_page);

?>
  <main>

    <section class="events-header">


      <header class="main-header rise">

        <span>Art Restaurant</span>
        <h1>Manezinho</h1>
        <h2>Events</h2>
      </header>
    </section>
    <section class="events">

      <div class="rj-card-container">
        <article class="rj-card rj-card-first">

          <div class="event-img">
            <img src="assets/svg/manezinhologo.svg" alt="Manezinho Logo">
            <span>Live music</span>
          </div>
          <div class="title-date">
            <h3>
              Events
            </h3>
            <p>
              If you're an artist and you would like to play on our stage, send us an e
              <a href="mailto:pieter@pieter-adriaans.com">Contact us</a>.
            </p>
            <!-- <a href="events.php" class="btn btn--accent">More info</a> -->
          </div>

        </article>
        <?php




        $query = "SELECT * FROM posts  ORDER BY post_event_date DESC LIMIT $page_1, $per_page";
        $select_all_posts_query = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
          $post_id = $row['post_id'];
          $post_title = $row['post_title'];
          // $post_author = $row['post_user'];
          $post_date = $row['post_date'];
          $post_image = $row['post_image'];
          // $post_content = substr($row['post_content'], 0, 400);
          $post_status = $row['post_status'];

          $post_event_date    = $row['post_event_date'];
          $post_event_time    = $row['post_event_time'];
          $post_content       = $row['post_content'];
          $post_content_p     = $row['post_content_p'];
          $post_url           = $row['post_url'];

          $datum = strtotime($post_event_date);
          $datum_vandaag = strtotime(date("Y-m-d"));

        ?>



          <article class="events rj-card">
            <div class="title-date">
              <h3><?= $post_title ?></h3>
              <div class="event-header-datetime">
                <p><?= ($datum - $datum_vandaag == 0) ? "Today!" : date("l d F Y", $datum) ?>
                </p>
                <p><?= $post_event_time ?></p>
              </div>
            </div>
            <div class="event-img">
              <img src="images/<?= $post_image ?>" alt="<?= $post_title ?>">
            </div>
            <div class="title-date">
              <pre>
                  <?= $post_content ?>


                  </pre>
              <pre>
                  <?= $post_content_p ?>

                  </pre>

              <div>
                <a href="<?= $post_url ?>"><?= $post_url; ?></a>
              </div>
            </div>
          </article>
        








      <?php }
      } ?>

    </div>













      <ul class="pager">

        <?php

        $number_list = array();


        for ($i = 1; $i <= $count; $i++) {


          if ($i == $page) {

            echo "<li '><a class='active_link' href='events.php?page={$i}'>{$i}</a></li>";
          } else {

            echo "<li '><a href='events.php?page={$i}'>{$i}</a></li>";
          }
        }






        ?>
      </ul>

    </section>

  </main>

  <?php
  include "includes/footer.html";

  ?>