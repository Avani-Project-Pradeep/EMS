
<?php 

include "connection.php";

if(isset($_POST['submit'])) {

  $er_name = $_POST['er_name'];
  $er_website = $_POST['er_website'];
  $er_tc = $_POST['er_tc'];
  // $er_doc = $_POST['er_doc'];
  $er_phone = $_POST['er_phone'];
  $er_city = $_POST['er_city'];
  $er_state = $_POST['er_state'];
  $er_email = $_POST['er_email'];
  $er_password = $_POST['er_password'];


  $insertquery = "INSERT INTO employee_personal_details(ee_id,ee_first_name, ee_last_name,ee_image,ee_gender,ee_dob,ee_blood_type,ee_email_id,ee_contact,ee_pan,ee_aadhar,ee_emergency_contact,ee_state,ee_city,ee_permanent,ee_current,ee_hobbies,ee_education) "; 
  $insertquery .= "VALUES ('{$ee_id}','{$ee_first_name}','{$ee_last_name}','{$ee_image}','{$ee_gender}','{$ee_dob}','{$ee_blood_type}','{$ee_email_id}','{}','{}','{}',) "; 
   $result = mysqli_query($con, $insertquery);

   if($result) {
     ?>
     <script>
       alert ("data inserted properly");
       </script>
       <?php
   } else {
     ?>
     <script>
       alert("data not inserted");
     </script>
     <?php
   }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="css/register.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>
  <form action="" enctype="multipart/form-data" method="post">
    <div class="container">
      <h1><u>Employer Registeration</u></h1>
      <hr>



      <input type="text" class="input1" placeholder="Enter Company name" name="er_name" required><span class="asterisk_input"></span>


      <input type="text" class="input1" placeholder="Enter Company Website" name="er_website" required><span class="asterisk_input"></span>

<br>
<br>

      <span><label style="font-size: 20px; color:blue;  display:inline-block">Upload Terms and Conditions agreement</label> <i class='fas fa-upload' style='font-size:24px'></i> <span class="asterisk_input1"></span> <span><input type="file" name="er_tc" required> </span></span>

      <br>

 
     <!-- <label style="font-size: 20px; color:blue; display:inline-block">Upload Company Documents</label> <i class='fas fa-upload' style='font-size:24px'></i> <span class="asterisk_input1"></span> <span><input type="file" name="er_doc" required></span> -->

    
<br>
<br>
      <input type="tel" class="input1" placeholder="Enter Phone Number " name="er_phone" pattern="{0-9}{10}" required><span class="asterisk_input"></span>


      <br>



      <input type="text" placeholder="City" name="er_city" id=location>


      &nbsp &nbsp


      <input type="text" placeholder="State" name="er_state" id=location>


      <br>



      <input type="text" class="input1" placeholder="Enter Email" name="er_email" required><span class="asterisk_input"></span>




      <input type="password" class="input1" placeholder="Enter Password" name="er_password" required><span class="asterisk_input"></span>


      <input type="password" class="input1" placeholder="Confirm Password" name="er_password" required><span class="asterisk_input"></span>






      <hr>


      <button type="submit" class="registerbtn" name="submit" value="Register">Register</button>
    </div>


  </form>

</body>

</html>