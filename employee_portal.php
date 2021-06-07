<<<<<<< HEAD
<?php include "db_ee_connection.php" ?>
<?php session_start(); 
$email_loggedin = $_SESSION['email'];



$querygetid="SELECT * FROM ee_login WHERE user_email='$email_loggedin'";
$selectquery = mysqli_query($connection2, $querygetid);



while ($row = mysqli_fetch_assoc($selectquery)) {


  global $ee_id;

    $ee_id = $row['user_id'];
}
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
  <title>Employee Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


  <style>
    body {
      background-color: honeydew
    }
<<<<<<< HEAD
=======

    ;
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
  </style>

</head>

<?php


/* NAVIGATION BAR */

<<<<<<< HEAD
include "e_navbar.php"; ?>
<ul>

  <li><a href="http://localhost/ems/employee_portal.php">Home</a></li>
  <li><a href="http://localhost/ems/add_eedetails.php?ee_id=<?php echo $ee_id ?>">Add Details</a></li>
=======
include "navbar.php"; ?>
<ul>

  <li><a href="http://localhost/ems/employee_portal.php">Home</a></li>
  <li><a href="http://localhost/ems/add_details.php">Add Details</a></li>
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
  <li><a href="ee_logout.php">Logout</a></li>
</ul>
</nav>
<br>



<<<<<<< HEAD
<div class="col-sm-4" style="background-color:honeydew;">



<form action="" enctype="multipart/form-data" method='post'>


<?php
$email_loggedin=$_SESSION['email'];

$query = "SELECT * FROM employee_personal_details WHERE ee_email='$email_loggedin'";
$selectquery = mysqli_query($connection2, $query);

$row=mysqli_fetch_assoc($selectquery);
$ee_image=$row['ee_image'];

 if (isset($ee_image) && $ee_image != '') { ?>
  <img src="images/<?php echo $ee_image; ?>" style="margin:10px; width:300px ; height:300px; overflow:hidden;border:solid green" alt="Employee Image">
<?php }



/* ELSE BLANK IMAGE IS SHOWN */ else { ?>
  <img src="images/blank image.png" style="margin:10px; width:300px ; height:300px; overflow:hidden;border:solid green" alt="Employee Image">
<?php } ?>

<br>



&nbsp
=======


<div class="row">
  <div class="col-sm-4" style="background-color:honeydew;">







    <?php
    //QUERY TO GENERATE IMAGE FROM DATABASE

    $email_loggedin = $_SESSION['email'];

    $query = "SELECT * FROM employee_personal_details WHERE ee_email='$email_loggedin'";
    $selectquery = mysqli_query($connection, $query);

    check($query); //checks result of  query execution



    while ($row = mysqli_fetch_assoc($selectquery)) {
      $ee_image = $row['ee_image'];
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2




<<<<<<< HEAD


<br>
<br>



</form>


=======
    ?>

      <form action="image_action.php" enctype="multipart/form-data" method='post'>

        <!--  EMPLOYEE IMAGE -->

        <!-- IF UPLOAD IMAGE THEN THE IMAGE IS SHOWN -->
        <?php if (isset($ee_image) && $ee_image != '') { ?>
          <img src="images/<?php echo $ee_image; ?>" style="margin:10px; width:300px ; height:300px; overflow:hidden;border:solid green" alt="Employee Image">
        <?php }



        /* ELSE BLANK IMAGE IS SHOWN */ else { ?>
          <img src="images/blank image.png" style="margin:10px; width:300px ; height:300px; overflow:hidden;border:solid green" alt="Employee Image">
        <?php } ?>

        <br>



        &nbsp







        <br>
        <br>



      </form>
    <?php } ?>
    <!-- WHILE LOOP ENDS HERE -->

  </div>
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2


  <br>
  <br>


<<<<<<< HEAD
  <div class="col-sm-12" style="background-color:honeydew;">
=======
  <div class="col-sm-8" style="background-color:honeydew;">
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

    <?php
    //Professional Details
    include "ee_professional_details.php";

    echo "<br><br>";

    echo "<hr style=color:green;>";

    //Personal Details
    include "ee_personal_details.php";
<<<<<<< HEAD

    
=======
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
    ?>

    <br>




  </div>

</div>








</html>