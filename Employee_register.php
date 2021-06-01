<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="emp_css/register.css">
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