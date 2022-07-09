<?php ob_start(); ?>
<?php include "../includes/db.php"; ?>
<?php include "functions.php"; ?>



<?php session_start(); ?>


<?php 




if(isset($_SESSION['user_role'])) {



} else {

header("location: ../index.html");


}




 ?>







<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jos Velema">

    <title>Manezinho Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


 <link href="css/styles.css" rel="stylesheet">

 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>

<script src="js/jquery.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>


 
</head>

<body>



