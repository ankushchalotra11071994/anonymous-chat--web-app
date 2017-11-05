<?php

session_start();

setcookie("chat_room","Messages",time() + (-3600),"/",TRUE,TRUE);
include('connectivity.php');
include 'inc/fun.php';
 {
$page = $_SERVER['PHP_SELF'];
 $sec = "15";
header("Refresh: $sec; url=$page");}
 
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome !</title>
  <link rel="stylesheet" href="css/home_style.css" type="text/css">
  <link rel="stylesheet" href="css/button.css" type="text/css">
   <link rel="stylesheet" href="css/animate.css" type="text/css">
   <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
   <link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
   </script>		
   <style>	.text1{
background-color:yellow;
   }   </style>
</head>
<body>
<div class="text1">
<p ><h1><img src="logo.png" width="100"px" bgcolor=" yellow"  title="Chat Room">THIS WEB site is created by Ankush
&copy
<?php echo date("Y"); ?></h1></p></div>
  <?php
  $user = $_SESSION['username'];
       $get_user = "SELECT * FROM users WHERE username ='$user'";
       $run_user = mysqli_query($con,$get_user);
       $row = mysqli_fetch_array($run_user);

       $user_id = $row['userid'];
       $user_name = $row['username'];
	   
       echo "
       <h3 align='center'>Welcome $user_name</h3>";
   ?>
  <div>
    <div id="msg">

<form action="" method="post" id="form">

  <div id="txt">
<?php get_post(); ?>
  </div>
<input type="text" name="msg" class="form-control" placeholder="Write Your Message Here!" required="required" value="">
<center>
<button type="submit" name="send" class="btn btn-info">Send</button> ||
  <a href="index.html">logout</a>
<?php insert_msg(); ?>
</center>
</form>
<div id="user">
  <h4 align="center">All Members :</h4>
  <hr>
<?php get_user(); ?>

    </div>



    </div>
</div>

<div id="footer">
<footer> By Self Learning - <?php echo date("Y"); ?></footer>
</div>
</body>
</html>
 }