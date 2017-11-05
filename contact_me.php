<!DOCTYPE html>
<html>
<head>
  <title>Contact Me</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
   <link rel="stylesheet" href="css/animate.css" type="text/css">
   <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
   <link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css">
   <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
  <center>
  <legend>Contact Me</legend>
  <br/>
  <form action="" method="post" id="contact">
    <fieldset>
  <input class="form-control" type="name" name="sender" placeholder="Your Name" required="required"><br/>
  <input class="form-control" type="email" name="email" placeholder="Your Email" required="required"><br/>
  <textarea rows="5" class="form-control" name="msg" placeholder="Write Your Message Here!" required="required"></textarea>
    <br/>
    <button type="submit" name="envoi" class="btn btn-default">Send <span class="glyphicon glyphicon-send"></span></button>
    <a href="index1.php">Back</a>
    <br/><br/>
    <?php
    if (isset($_POST) && !empty($_POST) && is_array($_POST)) {
    $sender = $_POST['sender'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $ip = getenv("REMOTE_ADDR");
    $content = "You Got Message! <br/> FROM : $sender <br/> Email : $email <br/> He Says : $msg <br/>  IP : $ip";

    $response = mail("ankushchalotra58@gmail.com","New Contact Us Message",$content);

    if ($response === true) {
    echo "
    <div class='alert alert-success' role='alert'><strong>Thank You ! </strong>Message Was Sent.</div>
    ";
    }else {
    echo "
    <div class='alert alert-warning' role='alert'><strong>Fail ! </strong>Message Was Not Sent.</div>
    ";
    }
    }




     ?>

   </fieldset>
</form>
</center>
</body>
</html>