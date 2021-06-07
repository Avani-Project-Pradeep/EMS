<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<link rel="stylesheet" href="css/er_login.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
  <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
</head>

<body>
 
<div class="container">
    <div class="login-form">
 <form class = "box" action ="" method = "post" >
<h1> Reset Password</h1>

<input type="password" name = "newpass"  placeholder ="New Password">

<input type="password" name = "confirmpass"  placeholder ="Confirm Password">

<input type="submit" name="reset"  value ="Reset">

</form>

</div>
</div>
</body>

</html>
    
</body>
</html>



<?php 
include "db_er_connection.php"; //DB CONNECTION

if(isset($_GET['token']))
{
    
    $user_token=$_GET['token'];//getting token through url
    $user_email=$_GET['email'];//getting email through url


    if(isset($_POST['reset'])) //If reset,fetch data from reset
{

   $user_password=$_POST['newpass'];
   $confirm_password=$_POST['confirmpass'];


   if (strlen($user_password) > 8) {   //max password length is 8
    echo " <div class='error'>
<p><strong></strong> Limit exceeded<br></p> </div> ";
}

   if($user_password!==$confirm_password) //checking matching password
   {
       
    echo " <div class='error'>
    <p><strong></strong> Password does not match.<br></p> </div> ";
    }
    else
    {   
      
      $user_password=mysqli_real_escape_string($connection,$user_password);
      $query="SELECT randSalt FROM er_login";

      $select_randsalt_query=mysqli_query($connection,$query);

      $row=mysqli_fetch_array($select_randsalt_query); //NEEDS ONLY ONE 

      $salt=$row['randSalt']; //fetching the value of randsalt
  
  
  
      $user_password=crypt($user_password,$salt);



      
      
      //updating password
        $query = "UPDATE er_login SET ";
        $query .="user_password   = '{$user_password}' ";
        $query .= "WHERE user_email='{$user_email}' AND  token = '{$user_token}' ";

        $edit_user_query = mysqli_query($connection,$query);


        if($edit_user_query)
        {
         //success message    
  echo"<div class=success>
<p><strong>Success!</strong> Password Reset Successful! <br>
<a href=http://localhost/ems/er_login_form.php > Back to Login Page </a>
</p>
</div>";



//sending  password  changed mail 

$body =  "As per your request, your password has changed
successfully.<br> Click  here for Login 
<a href=http://localhost/ems/er_login_form.php>Login </a><br>
<br> Thanks,<br>Help Desk  ";


  $headers = array(
    "From:support@gmail.com",
    "Content-Type: text/html; charset=ISO-8859-1\r\n"
  );

  $subject = "Password Reset";

  //Sending mail
  if (mail($user_email, $subject, $body, implode("\r\n", $headers))) {

    echo "
<div class=success>
  <p> Email successfully sent to $user_email.</p>
</div>";
  } else {
    echo "Email sending failed...";
  }


   



    }



   }
}
}

?>