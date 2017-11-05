<?php
include('connectivity.php');

function get_user(){
global $con;

$get = "SELECT * FROM users ";
$run_get = mysqli_query($con,$get);
while ($row = mysqli_fetch_array($run_get)) {
$user_name = $row['username'];

echo "<div id='users'>
<center>
<p>$user_name</p>
<hr>
</center>
</div>"
;
}
}
function insert_msg(){
global $con;
global $user_id;

if (isset($_POST['send'])) {

  $msg = addslashes($_POST['msg']);
  

  $insert = "INSERT INTO messages (user_id,msg,msg_date) VALUES ('$user_id','$msg',NOW())";
  $run_insert = mysqli_query($con,$insert);
  if ($run_insert) {

    echo "<script>window.open('home.php','_self')</script>";
  }else {
      echo "<script>alert('Message Not Sent')</script>";
  }
}
}
function get_post(){
global $con;

$get_msg = "SELECT * FROM messages ORDER BY 1 DESC";
$run_msg = mysqli_query($con,$get_msg);

while ($row = mysqli_fetch_array($run_msg)) {
$msg_id = $row['msg_id'];
$user_id = $row['user_id'];
$msg = $row['msg'];
$date = $row['msg_date'];

$user = "SELECT * FROM users WHERE user_id='$user_id'";
$run_user = mysqli_query($con,$user);
  $row_user = mysqli_fetch_array($run_user);
  $user_name = $row_user['username'];

  echo "<div id='posts'>
  <div id='tit'>
  <p><strong>$user_name : </strong>$msg</p>
  <p>$date</p>
  </div>
  </div>
  ";


}
}
 ?>