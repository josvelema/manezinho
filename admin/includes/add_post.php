<?php


if (isset($_POST['create_post'])) {

    $post_title        = escape($_POST['title']);
    $post_user         = escape($_POST['post_user']);
    $post_category_id  = escape($_POST['post_category']);
    $post_status       = escape($_POST['post_status']);

    $post_image        = escape($_FILES['image']['name']);
    $post_image_temp   = escape($_FILES['image']['tmp_name']);


    // $post_tags         = escape($_POST['post_tags']);
    // $post_content      = escape($_POST['post_content']);
    // $post_date         = escape(date('d-m-y'));

    $post_event_date    = escape($_POST['post_event_date']);
    $post_event_time    = escape($_POST['post_event_time']);
    $post_content       = escape($_POST['post_content']);
    $post_content_p     = escape($_POST['post_content_p']);
    $post_url           = escape($_POST['post_url']);



    move_uploaded_file($post_image_temp, "../images/$post_image");


    $query = "INSERT INTO posts(post_cat_id, post_title, post_author, 
      post_date,post_image,post_status,post_event_date,post_event_time,
      post_content,post_content_p,post_url) ";

    $query .= "VALUES({$post_category_id},'{$post_title}','{$post_user}',now()
    ,'{$post_image}','{$post_status}','{$post_event_date}','{$post_event_time}',
    '{$post_content}', '{$post_content_p}','{$post_url}') ";

    $create_post_query = mysqli_query($connection, $query);

    confirmQuery($create_post_query);

    $the_post_id = mysqli_insert_id($connection);


    echo "<p class='bg-success'>Post Created. <a href='../events.php'>View events </a> or <a href='posts.php'>Add More Posts</a></p>";
}




?>

<form action="" method="post" enctype="multipart/form-data">


    <div class="form-group">
        <label for="title">Event Post Title</label>
        <input type="text" class="form-control" name="title">
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <select name="post_category" id="">

            <?php

            $query = "SELECT * FROM categories";
            $select_categories = mysqli_query($connection, $query);

            confirmQuery($select_categories);


            while ($row = mysqli_fetch_assoc($select_categories)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];


                echo "<option value='$cat_id'>{$cat_title}</option>";
            }

            ?>


        </select>

    </div>


    <div class="form-group">
        <label for="users">Users</label>
        <select name="post_user" id="">

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





    <!-- <div class="form-group">
         <label for="title">Post Author</label>
          <input type="text" class="form-control" name="author">
      </div> -->



    <div class="form-group">
        <label for="status">Status post: (published by default)</label>

        <select name="post_status" id="status">
            <option value="draft">Post Status</option>
            <option value="published" selected>Published</option>
            <option value="draft">Draft</option>
            <option value="archive">Archive</option>

        </select>
    </div>



    <div class="form-group">
        <label for="post_image">Event Image</label>
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="event_date">Date of event</label>
        <input type="date" name="post_event_date" id="event_date">

        <label for="event_time">Time of event</label>
        <input type="time" name="post_event_time" id="event_date" pattern="[0-9]{2}:[0-9]{2}">
    </div>

    <div class="form-group">
        <label for="event_url">URL for reference (i.e. artist page)</label>
        <input type="text" class="form-control" name="post_url" id="event_url" placeholder="http://www.site.com">
    </div>


    <div class="form-group">
        <label for="post_content">Event Content English</label>
        <textarea class="form-control " name="post_content" class="body" cols="30" rows="6"></textarea>
    </div>


    <div class="form-group">
        <label for="post_content_p">Event Content Portuguese</label>
        <textarea class="form-control " name="post_content_p" class="body" cols="30" rows="6"></textarea>
    </div>




    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div>


</form>