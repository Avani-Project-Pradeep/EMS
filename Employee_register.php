<?php 

include "connection.php";

if(isset($_POST['submit'])) {

  $ee_name = $_POST['ee_name'];
  $ee_website = $_POST['ee_website'];
  $ee_tc = $_POST['ee_tc'];
  // $er_doc = $_POST['er_doc'];
  $ee_phone = $_POST['ee_phone'];
  $ee_city = $_POST['ee_city'];
  $ee_state = $_POST['ee_state'];
  $ee_email = $_POST['ee_email'];
  $ee_password = $_POST['ee_password'];


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
  <form action="" enctype="multipart/form-data">
    <div class="container">
      <h1><u>Employee Registeration</u></h1>
      <hr>


    <div>
      <input type="text" class="input1" placeholder="Enter your first name" name=" " required><span class="asterisk_input"></span>
    </div>
      
    <div>
      <input type="text" class="input1" placeholder="Enter your second name" name=" " required><span class="asterisk_input"></span>
    </div>

    <div>
      <input type="text" class="input1" placeholder="Enter phone number" name=" " required><span class="asterisk_input"></span>
      </div>

      <div>
      <input type="text" placeholder="City" name="er_city" id=location  required><span class ="asterisk_input"></span>


      &nbsp &nbsp


      <input type="text" placeholder="State" name="" id=location>

      <div>

      <br>

      <span><label style="font-size: 20px; color:blue;  display:inline-block">Upload Image</label> <i class='fas fa-upload' style='font-size:24px'></i><span><input type="file" name="er_tc" required> </span></span>

      <br>


      <br>
     
      <input type="text" class="input1" placeholder="Enter Address" name=" " required><span class="asterisk_input"></span>


      <input type="text" class="input1" placeholder="Enter Email" name=" " required><span class="asterisk_input"></span>


      <hr>


      <button type="submit" class="registerbtn">Register</button>
    </div>


  </form>

</body>

</html>
