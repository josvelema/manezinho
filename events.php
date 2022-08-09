<?php
include "includes/db.php";

include "admin/functions.php";
include "includes/eventbefore.php";

$per_page = 10;


if (isset($_GET['page'])) {


  $page = $_GET['page'];
} else {


  $page = "";
}


if ($page == "" || $page == 1) {

  $page_1 = 0;
} else {

  $page_1 = ($page * $per_page) - $per_page;
}


if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') {


  $post_query_count = "SELECT * FROM posts";
} else {

  $post_query_count = "SELECT * FROM posts WHERE post_status = 'published'";
}

$find_count = mysqli_query($connection, $post_query_count);
$count = mysqli_num_rows($find_count);

if ($count < 1) {


  echo "<h1 class='text-center'>No posts available</h1>";
} else {


  $count  = ceil($count / $per_page);




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



?>



              <article class="event">
                <div class="event-header">
                  <h2><?php echo $post_title ?></h2>
                  <div class="event-header-datetime">
                    <span><?php 
                    $datum = strtotime($post_event_date);
                    $datum_vandaag = strtotime(date("Y-m-d"));
                    if ($datum - $datum_vandaag == 0) {
                      echo "Today!";
                    } 
                    else {

                    echo date("l d F Y", $datum);
                    // echo $post_event_date ;
                    }
                    ?>
                    </span>
                    <span><?php echo $post_event_time ;?></span>
                </div>
                </div>
                <div class="event-image">
                  <img src="images/<?php echo $post_image; ?>" alt="<?php echo $post_title ?>">
                </div>
                <div class="event-content">
                  <p class="content-english">
                  <?php echo $post_content ?>


                  </p>
                  <p class="content-portoguese">
                  <?php echo $post_content_p ?>

                  </p>
                  
                  <div class="event-content-url">
                    <a href="<?php echo $post_url ;?>"><?php echo $post_url ;?></a>
                </div>
                </div>
              </article>









<?php }
} ?>













<ul class="pager">

  <?php

  $number_list = array();


  for ($i = 1; $i <= $count; $i++) {


    if ($i == $page) {

      echo "<li '><a class='active_link' href='index.php?page={$i}'>{$i}</a></li>";
    } else {

      echo "<li '><a href='index.php?page={$i}'>{$i}</a></li>";
    }
  }






  ?>
</ul>

<?php include("includes/eventafter.php") ?>