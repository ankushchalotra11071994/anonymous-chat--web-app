<?php
session_start();
include('connectivity.php');
$username= $_POST["username"];
$userpassword1 = $_POST["userpassword"];

$result=mysqli_query($con,"select username,userpassword from users where username='$username'");
if($result === FALSE) 
{ 
die('no record fetched'.mysql_error());
}
$row =mysqli_fetch_array($result);

if(password_verify($userpassword1,$row[userpassword]) )
{$_SESSION['loggedin']=true;
$_SESSION["username"]=$username;
sleep(1);
header("Location:home.php");
}
else
{
sleep(1);
header("Location:error.php");
exit();
}
mysqli_close($con);
?>