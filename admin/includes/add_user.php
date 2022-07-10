<?php


if (isset($_POST['create_user'])) {


   $user_first_name    = escape($_POST['user_first_name']);
   $user_last_name    = escape($_POST['user_last_name']);
   $user_role         = escape($_POST['user_role']);
   $user_name          = escape($_POST['user_name']);
   $user_email        = escape($_POST['user_email']);
   $user_pass     = escape($_POST['user_pass']);



   $user_pass = password_hash($user_pass, PASSWORD_BCRYPT, array('cost' => 10));

   $query = "INSERT INTO users(user_first_name, user_last_name, user_role,user_name,user_email,user_pass) ";

   $query .= "VALUES('{$user_first_name}','{$user_last_name}','{$user_role}','{$user_name}','{$user_email}', '{$user_pass}') ";

   $create_user_query = mysqli_query($connection, $query);

   confirmQuery($create_user_query);


   echo "User Created: " . " " . "<a href='users.php'>View Users</a> ";
}




?>

<form action="" method="post" enctype="multipart/form-data">



   <div class="form-group">
      <label for="title">First name</label>
      <input type="text" class="form-control" name="user_first_name">
   </div>




   <div class="form-group">
      <label for="post_status">Last name</label>
      <input type="text" class="form-control" name="user_last_name">
   </div>


   <div class="form-group">

      <select name="user_role" id="">
         <option value="subscriber">Select Options</option>
         <option value="admin">Admin</option>
         <option value="subscriber">Subscriber</option>


      </select>




   </div>

   <!--
      <div class="form-group">
         <label for="post_image">Post Image</label>
          <input type="file"  name="image">
      </div>
-->

   <div class="form-group">
      <label for="post_tags">Username</label>
      <input type="text" class="form-control" name="user_name">
   </div>

   <div class="form-group">
      <label for="post_content">Email</label>
      <input type="email" class="form-control" name="user_email">
   </div>

   <div class="form-group">
      <label for="post_content">Password</label>
      <input type="password" class="form-control" name="user_pass">
   </div>




   <div class="form-group">
      <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
   </div>


</form>