<<<<<<< HEAD

<?php
session_start();
include "db_er_connection.php";
 ?>

=======
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- STYLESHEETS -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employer Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


  <style>
    body {
      background-color: honeydew
    }

    ;
  </style>
</head>
<<<<<<< HEAD
<?php include "navbar.php"; ?>

=======

<?php


/* NAVIGATION BAR */

include "navbar.php"; ?>
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
<ul>

  <li><a href="http://localhost/ems/employer_portal.php">Home</a></li>
  <li><a href="http://localhost/ems/add_employee.php">Add Employees</a></li>
  <li><a href="#">Manage Employees</a></li>
  <li><a href="#">Logout</a></li>
</ul>
</nav>
<br>





<div class="row">
  <div class="col-sm-4" style="background-color:honeydew;">



    <br><br> <br> <br> <br> <br> <br> <br> <br> <br>





    <?php
    //QUERY TO GENERATE IMAGE FROM DATABASE

    $email_loggedin = $_SESSION['email'];

    $query = "SELECT * FROM employer_personal_details WHERE er_email='$email_loggedin'";
    $selectquery = mysqli_query($connection, $query);

<<<<<<< HEAD
=======
    check($query); //checks result of  query execution
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2



    while ($row = mysqli_fetch_assoc($selectquery)) {
      $er_image = $row['er_image'];




    ?>
      <form action="image_action.php" enctype="multipart/form-data" method='post'>

        <!--  EMPLOYER IMAGE -->
<<<<<<< HEAD
        <img src="images/<?php
        
        if(empty($er_image))
        {
          echo 'blank image.png';
        }
        else
        {
        
        
        echo $er_image;} ?>" style="margin:10px; width:300px ; height:300px; overflow:hidden;border:solid green" alt="Employer Image">
=======
        <img src="images/<?php echo $er_image; ?>" style="margin:10px; width:300px ; height:300px; overflow:hidden;border:solid green" alt="Employer Image">
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2


        <br>


        <input type='submit' name='remove_img' value='Remove Image' style="font-size:18px">

        &nbsp


        <input type='file' name='er_img' value="upload">
        <input type="submit" name='upload' value="Upload">




        <br>
        <br>



      </form>

    <?php } ?>
    <!-- WHILE LOOP ENDS HERE -->

  </div>


  <br>
  <br>


  <div class="col-sm-8" style="background-color:honeydew;">

    <?php
<<<<<<< HEAD
    include "er_edit_profession.php"; //professional
=======
    //Professional Details









    //Personal Details
    include "er_edit_profession.php";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2


  echo"<hr>";

<<<<<<< HEAD
    include "er_edit_personal.php"; //personal
=======
    include "er_edit_personal.php";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
    ?>

    </form>




    </form>


  </div>

</div>








</html>