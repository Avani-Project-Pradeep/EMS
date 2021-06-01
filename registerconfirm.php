<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: grey">

<div class="container">
<div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>You are Successfully registered!</strong> Please check the mail for login link.
  </div>
 
  <?php

include "db_connection.php";

if(isset($_GET['email']))
{
    $to_email = $_GET['email'];
}
 
$body= "Hello! You are successfully registered. For login use the given link <br>
<a href='http://localhost/ems/er_login.php'>Login </a><br> ";

$headers = array("From:no-reply@gmail.com",
"Content-Type: text/html; charset=ISO-8859-1\r\n");

$subject="Login link";


if (mail($to_email, $subject, $body,implode("\r\n",$headers))) 
{
echo "Email successfully sent to $to_email...";
}
else {
echo "Email sending failed...";
}

        