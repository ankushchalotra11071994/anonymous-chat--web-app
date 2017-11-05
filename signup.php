<?php
{
	session_start();
include('connectivity.php');

  $name=$_POST["username"];
  $last=$_POST["lname"];
$pass=$_POST["email"];	
 $Password_1 = mysqli_real_escape_string($con,$_POST['Password_1']);
 $Password_2 = mysqli_real_escape_string($con,$_POST['Password_2']);
$Password_1=password_hash($Password_1,CRYPT_BLOWFISH);
  if($last==0000)
{
    $check = "SELECT * FROM users WHERE email='$pass'";
  $run_check = mysqli_query($con,$check);
  $check_u = mysqli_num_rows($run_check);


if ($check_u ==1) {
    echo "
<div class='alert alert-warning' role='alert'><h1><strong>Wait ! </strong>Email Already Used</div></h1>
  ";}else {
  $insert_user = "INSERT INTO users (username,userpassword,email,lname) VALUES ('$name','$Password_1','$pass','$last')";
  $run_insert = mysqli_query($con,$insert_user);
 if ($run_insert) {
    $_SESSION['username'] = $name;
      echo "
  <div class='alert alert-success' role='alert'><strong>Done ! </strong>User Was Added</div>
    ";
   echo "<script>window.open('home.php','_self')</script>";
  }else {
  echo "
    <div class='alert alert-danger' role='alert'><strong>Failed ! </strong>User Was Not Added</div>
  ";
 
  }
}
}

  ELSE 
  {
    echo"the OTP YOU HAVE ENTERED IS  WRONG <br>";
     echo"VERIFY OTP FROM EMAIL AND GTRY AGAIN <br>";
    echo "<a href='index1.html'>CLICK HERE</a>";
}}
?>