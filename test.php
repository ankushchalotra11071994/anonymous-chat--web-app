<?php
include ('connect.php');

function get_user(){
global $con;

$get = "SELECT * FROM users ";
$run_get = mysqli_query($con,$get);
while ($row = mysqli_fetch_array($run_get)) {
$user_name = $row['user_name'];

echo "<div id='users'>
?>