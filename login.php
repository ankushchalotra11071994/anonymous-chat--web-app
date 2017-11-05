<?php
include ('connect.php');

if (isset($_POST['login'])) {
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $pass = mysqli_real_escape_string($con,$_POST['pwd']);
  $salt = $pass;
  $pwd = crypt($salt,$pass);

  $get_user = "SELECT * FROM users WHERE user_name='$name' AND user_pass='$pwd'";
  $run_user = mysqli_query($con,$get_user);
  $check_user = mysqli_num_rows($run_user);

  if ($check_user == 1) {
    $_SESSION['user_name'] = $name;
    echo "
<div class='alert alert-success' role='alert'><strong>Done ! </strong>User Was Found</div>
  ";
  echo "<script>window.open('home.php','_self')</script>";
}else {
echo "
  <div class='alert alert-danger' role='alert'><strong>Failed ! </strong>User Was Not Found</div>
";
exit();
}
}
if (isset($_POST['reg'])) {
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $pass = mysqli_real_escape_string($con,$_POST['pwd']);
  $salt = $pass;
  $pwd = crypt($salt,$pass);

  $check = "SELECT * FROM users WHERE user_name='$name'";
  $run_check = mysqli_query($con,$check);
  $check_u = mysqli_num_rows($run_check);

  if ($check_u == 1) {
    echo "
<div class='alert alert-warning' role='alert'><strong>Wait ! </strong>User Name Already Used</div>
  ";
}else {
  $insert_user = "INSERT INTO users (user_name,user_pass) VALUES ('$name','$pwd')";
  $run_insert = mysqli_query($con,$insert_user);

  if ($run_insert) {
    $_SESSION['user_name'] = $name;
      echo "
  <div class='alert alert-success' role='alert'><strong>Done ! </strong>User Was Added</div>
    ";
    
  }else {
  echo "
    <div class='alert alert-danger' role='alert'><strong>Failed ! </strong>User Was Not Added</div>
  ";
  exit();
  }
}
}
/*This was made by Othman El Mzalni (Youtube Channel : Self Learning)*/
 ?>
