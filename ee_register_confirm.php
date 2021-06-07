<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
  <title>Confirmation of Employee Registration</title>
=======
  <title>Confirmation of Employer Registration</title>
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- STYLESHEETS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .success {
      margin-bottom: 15px;
      padding: 4px 12px;

      background-color: #ddffdd;
      border-left: 6px solid #04AA6D;
    }
  </style>

</head>

<body style="background-color: white">


 <?php



<<<<<<< HEAD
  include "db_ee_connection.php";
=======
  include "db_connection.php";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
  include "function.php";

  //GETTING EMAIL FROM GET METHOD

  if (isset($_GET['email'])) {
    $to_email = $_GET['email'];
    $to_name=$_GET['name'];
  }

    




  //GENERATES PASSWORD
$user_password=password_generate(5);
//echo $user_password;

<<<<<<< HEAD
$query="SELECT randSalt FROM ee_login";

$select_randsalt_query=mysqli_query($connection2,$query);
$row=mysqli_fetch_array($select_randsalt_query); //NEEDS ONLY ONE 

$salt=$row['randSalt']; //fetching the value of randsalt





$user_passwordcrypt=crypt($user_password,$salt);


$query = "UPDATE ee_login SET ";
$query .="user_password   = '{$user_passwordcrypt}'" ;
=======
 
$query = "UPDATE user SET ";
$query .="user_password   = '{$user_password}'" ;
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
$query .= "WHERE user_email='{$to_email}'";




<<<<<<< HEAD
$selectquery=mysqli_query($connection2,$query);
=======
$selectquery=mysqli_query($connection,$query);
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2



  $body =  "Hi!  $to_name    You are successfully registered. Click  here for Login 
<a href=http://localhost/ems/ee_login_form.php>Login </a><br>, Your password : $user_password
<br> Thanks,<br>Help Desk  ";


  $headers = array(
    "From:no-reply@gmail.com",
    "Content-Type: text/html; charset=ISO-8859-1\r\n"
  );

  $subject = "Successfully Registered";

  //Sending mail
  if (mail($to_email, $subject, $body, implode("\r\n", $headers))) {

    echo "
<div class=success>
  <p><strong>Success!</strong> You are Successfully Registered!<br> Email successfully sent to $to_email...</p>
</div>";
  } else {
    echo "Email sending failed...";
  }
