<?php
<<<<<<< HEAD
include "db_ee_connection.php";
include "db_er_connection.php";
if(isset($_POST['upload']))
{      $ee_id=$_POST['ee_id'];
       
        
      
    // print_r($_FILES);
    $ee_image          =  ($_FILES['ee_image']['name']);
    $ee_image_temp     =  ($_FILES['ee_image']['tmp_name']);
=======
include "db_connection.php";
if(isset($_POST['upload']))
{
      
     print_r($_FILES);
    $ee_image          =  ($_FILES['ee_img']['name']);
    $ee_image_temp     =  ($_FILES['ee_img']['tmp_name']);
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
    move_uploaded_file($ee_image_temp, "images/$ee_image");



<<<<<<< HEAD
    $error2=0;


    //Image file size
    if (($_FILES['ee_image']["size"] > 5000000)) {
=======
    $error1=0;


    //Image file size
    if (($_FILES['ee_img']["size"] > 5000000)) {
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

        echo " <div class='error'>
    <p><strong></strong>Max file size is 5MB<br></p> 
    <a href=add_employee_tab2.php>Back </a>

    </div> ";
<<<<<<< HEAD
        $error2++;
=======
        $error1++;
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
    }


    //CHECKING EXTENSION OF FILE


<<<<<<< HEAD
    //print_r($_FILES);

    $ext = pathinfo($ee_image, PATHINFO_EXTENSION);

    if (($ext != 'jpeg') && ($ext!='png') && ($ext !='jpg')) {
=======
    print_r($_FILES);

    $ext = pathinfo($ee_image, PATHINFO_EXTENSION);

    if (($ext == 'jpeg') || ($ext=='png')) {
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

        echo " <div class='error'>
    <p><strong></strong> Only png or jpeg format is allowed<br>
    </p> </div> ";
<<<<<<< HEAD
        $error2++;
=======
        $error1++;
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
    }





<<<<<<< HEAD
    if($error2==0){


    $query="UPDATE employee_personal_details SET ee_image='$ee_image' WHERE ee_id= $ee_id";
   
    $selectquery= mysqli_query($connection2,$query);

    $query2= "UPDATE employee_registration SET ee_image='$ee_image' WHERE ee_id= $ee_id";
    $selectquery= mysqli_query($connection,$query2);

    echo"Image successfully uploaded";
}
}


if(isset($_POST['remove']))
{
    $query="UPDATE employee_personal_details SET ee_image='' WHERE ee_id= $ee_id";
   
    $selectquery= mysqli_query($connection2,$query);

    $query2= "UPDATE employee_registration SET ee_image='' WHERE ee_id= $ee_id";
    $selectquery= mysqli_query($connection,$query2);

    echo"Image successfully uploaded";
}


?>



   

=======
    if($error1==0){


        $last_id = mysqli_insert_id($connect);

    $query="UPDATE employer_personal_details SET ee_image='$ee_image' WHERE ee_id= $last_id";
    $selectquery= mysqli_query($connection,$query);

    check($query); //checks result of  query execution

    if($query)
    {
        echo"imagesuccess";
    }
    }
  


}



?>
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
