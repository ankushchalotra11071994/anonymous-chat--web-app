<?php
$to = $_POST['otp'];
$subject = "Anonymous signup User";
$header = "From: Ankushchalotra58@gmail.com";
$message ="YOUR OTP IS
0000
   " ;
if (mail($to , $subject , $message, $header  ))
{
	echo "Link has been sent to your gmail account ";
echo"<a href='index1.html'>ENTER YOUR OTP HERE</a>";
}
else
{
	echo "Link not sent ";


}
	
?>