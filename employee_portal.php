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
  </style>

</head>

<?php


/* NAVIGATION BAR */

include "e_navbar.php"; ?>
<ul>

  <li><a href="http://localhost/ems/employee_portal.php">Home</a></li>
  <li><a href="http://localhost/ems/add_eedetails.php?ee_id=<?php echo $ee_id ?>">Add Details</a></li>
  <li><a href="ee_logout.php">Logout</a></li>
</ul>
</nav>
<br>



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






<br>
<br>



</form>




  <br>
  <br>


  <div class="col-sm-12" style="background-color:honeydew;">

    <?php
    //Professional Details
    include "ee_professional_details.php";

    echo "<br><br>";

    echo "<hr style=color:green;>";

    //Personal Details
    include "ee_personal_details.php";

    
    ?>

    <br>




  </div>

</div>








</html>