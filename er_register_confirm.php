<!DOCTYPE html>
<html lang="en">

<head>
  <title>Confirmation of Employer Registration</title>

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
//CONNECT DATABASE
  include "db_er_connection.php";



=======

  include "db_connection.php";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

  //GETTING EMAIL FROM GET METHOD

  if (isset($_GET['email'])) {
<<<<<<< HEAD
    
    $to_email = $_GET['email']; //TO
  

  $body =  "Hi! You are successfully registered. Click  here for Login 
<a href=http://localhost/ems/er_login_form.php>Login </a><br>
Register your employees with this link <a href=http://localhost/ems/ee_register_form.php>Register Employee</a><br> Thanks,<br>Help Desk  "; //BODY
=======
    $to_email = $_GET['email'];
  }

  $body =  "Hi! You are successfully registered. Click  here for Login 
<a href=http://localhost/ems/er_login_form.php>Login </a><br>
Register your employees with this link <a href=http://localhost/ems/ee_register_form.php>Register Employee</a><br> Thanks,<br>Help Desk  ";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2


  $headers = array(
    "From:no-reply@gmail.com",
    "Content-Type: text/html; charset=ISO-8859-1\r\n"
<<<<<<< HEAD
  );//HEADERS

  $subject = "Successfully Registered"; //SUBJECT
=======
  );

  $subject = "Successfully Registered";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

  //Sending mail
  if (mail($to_email, $subject, $body, implode("\r\n", $headers))) {

    echo "
<div class=success>
  <p><strong>Success!</strong> You are Successfully Registered!<br> Email successfully sent to $to_email...</p>
<<<<<<< HEAD
</div>"; //SUCCESS MESSAGE
  } else {
    echo "Email sending failed...";
  }
  }
=======
</div>";
  } else {
    echo "Email sending failed...";
  }
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
