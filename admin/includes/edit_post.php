<?php

if (isset($_GET['p_id'])) {

  $the_post_id =  escape($_GET['p_id']);
}


$query = "SELECT * FROM posts WHERE post_id = $the_post_id  ";
$select_posts_by_id = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_posts_by_id)) {
  $post_id            = $row['post_id'];
  $post_user          = $row['post_author'];
  $post_title         = $row['post_title'];
  $post_cat_id        = $row['post_cat_id'];
  $post_status        = $row['post_status'];
  $post_image         = $row['post_image'];
  $post_content       = $row['post_content'];
  $post_content_p       = $row['post_content_p'];
  $post_tags          = $row['post_tags'];
  $post_comment_count = $row['post_comment_count'];
  $post_date          = $row['post_date'];

  $post_event_date    = $row['post_event_date'];
  $post_event_time    = $row['post_event_time'];

  $post_url           = $row['post_url'];
}


if (isset($_POST['update_post'])) {


  $post_user           =  escape($_POST['post_user']);
  $post_title          =  escape($_POST['post_title']);
  $post_category_id    =  escape($_POST['post_category']);
  $post_status         =  escape($_POST['post_status']);
  $post_image          =  escape($_FILES['image']['name']);
  $post_image_temp     =  escape($_FILES['image']['tmp_name']);
  // $post_content        =  escape($_POST['post_content']);
  // $post_tags           =  escape($_POST['post_tags']);


  $post_event_date    = escape($_POST['post_event_date']);
  $post_event_time    = escape($_POST['post_event_time']);
  $post_content       = escape($_POST['post_content']);
  $post_content_p     = escape($_POST['post_content_p']);
  $post_url           = escape($_POST['post_url']);



  move_uploaded_file($post_image_temp, "images/$post_image");

  if (empty($post_image)) {

    $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
    $select_image = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($select_image)) {

      $post_image = $row['post_image'];
    }
  }
  $post_title = mysqli_real_escape_string($connection, $post_title);


  $query = "UPDATE posts SET ";
  $query .= "post_title  = '{$post_title}', ";
  $query .= "post_cat_id = '{$post_category_id}', ";
  $query .= "post_date   =  now(), ";
  $query .= "post_author = '{$post_user}', ";
  $query .= "post_status = '{$post_status}', ";
  $query .= "post_tags   = '{$post_tags}', ";
  $query .= "post_content = '{$post_content}', ";
  $query .= "post_content_p = '{$post_content_p}', ";
  $query .= "post_event_date= '{$post_event_date}', ";
  $query .= "post_event_time= '{$post_event_time}', ";
  $query .= "post_url= '{$post_url}', ";
 

  $query .= "post_image  = '{$post_image} ' ";

  $query .= "WHERE post_id = {$the_post_id} ";

  $update_post = mysqli_query($connection, $query);

  confirmQuery($update_post);

  echo "<p class='bg-success'>Post Updated. <a href='../events'>View events on website </a> or <a href='posts.php'>Go back to view all events</a></p>";
}

?>


<form action="" method="post" enctype="multipart/form-data">


  <div class="form-group">
    <label for="title">Event Post Title</label>
    <input value="<?php echo htmlspecialchars(stripslashes($post_title)); ?>" type="text" class="form-control" name="post_title">
  </div>

  <div class="form-group">
    <label for="categories">Categories</label>
    <select name="post_category" id="">

      <?php

      $query = "SELECT * FROM categories ";
      $select_categories = mysqli_query($connection, $query);

      confirmQuery($select_categories);


      while ($row = mysqli_fetch_assoc($select_categories)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];


        if ($cat_id == $post_category_id) {


          echo "<option selected value='{$cat_id}'>{$cat_title}</option>";
        } else {

          echo "<option value='{$cat_id}'>{$cat_title}</option>";
        }
      }
      ?>


    </select>

  </div>

  <div class="form-group">
    <label for="users">Users</label>
    <select name="post_user" id="">


      <?php echo "<option value='{$post_user}'>{$post_user}</option>"; ?>

      <?php

      $users_query = "SELECT * FROM users";
      $select_users = mysqli_query($connection, $users_query);

      confirmQuery($select_users);


      while ($row = mysqli_fetch_assoc($select_users)) {
        $user_id = $row['user_id'];
        $username = $row['user_name'];


        echo "<option value='{$username}'>{$username}</option>";
      }

      ?>


    </select>

  </div>



  <div class="form-group">
    <label for="status">Status post: (published by default)</label>
    <select name="post_status" id="">

      <option value='<?php echo $post_status ?>'><?php echo $post_status; ?></option>

      <?php

      if ($post_status == 'published') {

        //todo make archive option
        echo "<option value='draft'>Draft</option>";
        echo "<option value='archived'>archived</option>";
      } else {


        echo "<option value='published'>Published</option>";
      }



      ?>


    </select>
  </div>






  <div class="form-group">
    <label for="post_image">Event Image</label>

    <img width="100" src="../images/<?php echo $post_image; ?>" alt="">
    <input type="file" name="image">
  </div>

  <div class="form-group">

    <label for="event_date">Date of event</label>
    <input type="date" name="post_event_date" id="event_date" value="<?php echo $post_event_date; ?>">

    <label for="event_time">Time of event</label>
    <input type="time" name="post_event_time" id="event_date" pattern="[0-9]{2}:[0-9]{2}" value="<?php echo $post_event_time; ?>">
  </div>

  <div class="form-group">
    <label for="event_url">URL for reference (i.e. artist page)</label>
    <input type="text" class="form-control" name="post_url" id="event_url" value="<?php echo $post_url; ?>">
  </div>


  <div class="form-group">
    <label for="post_content">Post Content English</label>
    <textarea class="form-control " name="post_content" class="body" cols="30" rows="6"><?php echo trim($post_content); ?></textarea>
  </div>


  <div class="form-group">
    <label for="post_content_p">Post Content Portuguese</label>
    <textarea class="form-control " name="post_content_p" class="body" cols="30" rows="6"><?php echo trim($post_content_p); ?></textarea>
  </div>




  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
  </div>


</form>