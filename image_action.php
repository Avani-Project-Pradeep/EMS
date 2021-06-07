<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .error {
      margin-bottom: 15px;
      padding: 4px 12px;

      background-color: #ffdddd;
      border-left: 6px solid #f44336;
    }
 
 </style>
</head>
    
<body style="background-color: honeydew;">



<?php 

<<<<<<< HEAD
include "db_er_connection.php";
=======
include "db_connection.php";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
session_start();
$email_loggedin=$_SESSION['email'];
include "function.php";

if(isset($_POST['remove_img']))
{ 
 
    $query="UPDATE employer_personal_details SET er_image = ''  WHERE er_email='$email_loggedin'";

    $selectquery= mysqli_query($connection,$query);

    check($query); //checks result of  query execution

    if($query)
    {
        header("location:employer_portal.php");
    }


}



if(isset($_POST['upload']))
{
      
     //print_r($_FILES);
    $er_image          =  ($_FILES['er_img']['name']);
    $er_image_temp     =  ($_FILES['er_img']['tmp_name']);
    move_uploaded_file($er_image_temp, "images/$er_image");



    $error1=0;


    //Image file size
    if (($_FILES['er_img']["size"] > 5000000)) {

        echo " <div class='error'>
    <p><strong></strong>Max file size is 5MB<br></p> 
    <a href=employer_portal.php>Back to home </a>

    </div> ";
        $error1++;
    }


    //CHECKING EXTENSION OF FILE


    //print_r($_FILES);

    $ext = pathinfo($er_image, PATHINFO_EXTENSION);
<<<<<<< HEAD
   
    if(($ext!='jpg')&&($ext!='jpeg')||($ext!='png'))
    {
          echo"only jpeg/jpg or png is allowed";
=======

    if (($ext != 'jpeg') && ($ext!='png')) {

        echo " <div class='error'>
    <p><strong></strong> Only png or jpeg format is allowed<br>
     <a href=employer_portal.php>Back to home </a>
    </p> </div> ";
        $error1++;
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
    }



<<<<<<< HEAD
=======


>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
    if($error1==0){



    $query="UPDATE employer_personal_details SET er_image='$er_image' WHERE er_email='$email_loggedin'";
    $selectquery= mysqli_query($connection,$query);

    check($query); //checks result of  query execution

    if($query)
    {
        header("location:employer_portal.php");
    }
    }
  


}





?>

</body>
</html>