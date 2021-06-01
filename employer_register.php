<?php include "er_register_action.php" ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employer Registration</title>


  <!-- STYLESHEETS -->

  <link rel="stylesheet" href="emp_css/register.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>

  <!-- EMPLOYER REGISTRATION FORM -->

  <form action="<?php echo $_SERVER['SCRIPT_NAME'] ?>	" enctype="multipart/form-data" method='post'>
    <div class="container">
      <h1><u>Employer Registeration</u></h1>
      <hr>


      <!-- FORM -->



      <input type="text" class="input1" style="background-color: <?php echo $returnStyle1 ?>;" placeholder="Enter Company name" name="er_comp_name" required><span class="asterisk_input"></span>


      <input type="text" class="input1" style="background-color: <?php echo $returnStyle2 ?>;" placeholder="Enter Company Website" name="er_comp_website" required><span class="asterisk_input"></span>

      <br>
      <br>

      <span><label style="font-size: 20px; color:blue;  display:inline-block">Upload Terms and Conditions agreement</label> <i class='fas fa-upload' style='font-size:24px'></i> <span class="asterisk_input1"></span> <span><input type="file" name="er_tc" required> </span></span>

      <br>


      <label style="font-size: 20px; color:blue; display:inline-block">Upload Company Documents</label> <i class='fas fa-upload' style='font-size:24px'></i> <span class="asterisk_input1"></span> <span><input type="file" name="er_cd" required></span>


      <br>
      <br>

      <input type="tel" class="input1" style="background-color: <?php echo $returnStyle3 ?>;" placeholder="Enter Phone Number " name="er_phone" required><span class="asterisk_input"></span>


      <br>



      <input type="text" placeholder="City" name="er_city" id=location>


      &nbsp &nbsp


      <input type="text" placeholder="State" name="er_state" id=location>


      <br>



      <input type="text" style="background-color: <?php echo "$returnStyle4" ?>;" placeholder="Enter Email" class="input1" name="er_email" required><span class="asterisk_input"></span>




      <input type="password" style="background-color: <?php echo "$returnStyle5" ?>;" class="input1" placeholder="Enter Password" name="er_password" required><span class="asterisk_input"></span>


      <input type="password" class="input1" style="background-color: <?php echo "$returnStyle6" ?>;" placeholder="Confirm Password" name="er_confirm_password" required><span class="asterisk_input"></span>






      <hr>


      <input type="submit" name='er_register' value="Register" class="registerbtn">
    </div>


  </form>

</body>

</html>