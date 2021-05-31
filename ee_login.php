<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="login.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
</head>

<body>
 
<div class="container">
    <div class="login-form">
 <form class = "box" action ="er_login.php" method = "post">
<h1> Employee Login</h1>
<p style="color:#ADD8E6"> Please Enter Your Credentials </p>

<input type="text" name = "email"  placeholder =" Email">
<i class="far fa-envelop"></i>

<input type="password" name = "password"  placeholder ="Password">
<i class="fas fa-lock"></i>

<input type="submit" name=""  value ="Login">
<a href="#"> Forgot Password? </a>
</form>

</div>
</div>
</body>

</html>