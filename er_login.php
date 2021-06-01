<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="login.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
</head>

<body>
 
<div class="container">
    <div class="login-form">
 <form class = "box" action ="empr_login.php" method = "post">
<h1>Employer Login</h1>
<p1 style="color:#ADD8E6">Please Enter Your Credentials</p1>

<input type="text" class="input1"  placeholder =" Enter your company" name = "company" required> <span class="asterisk_input"></span>

<input type="text" name = "email"  placeholder =" Email">

<input type="password" name = "password"  placeholder ="Password">

<input type="submit" name="login"  value ="Login">
<a href="forgot_pass.php">Forgot Password? </a>
</form>

</div>
</div>
</body>

</html>



