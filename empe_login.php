<?php

include "db_connection.php";

//FETCHING DETAILS FROM FORM
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    print_r($_POST);
}


//CHECKING EMPTY

if(empty($email)&& empty($password) )
{
    header("location:ee_login.php");

}


    //SQL INJECTION
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection,$password);


    //FETCHING DETAILS FROM USER TABLE

    $query = "SELECT * FROM user WHERE user_email='{$email}'";
    $select_user_query = mysqli_query($connection, $query);

    if (!$select_user_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    else{

    while ($row = mysqli_fetch_assoc($select_user_query)) {

        $db_email= $row['user_email'];
        $db_password = $row['user_password'];
        print_r($row);
    }

    }


    //VALIDATION

    if(($email==$db_email) && ($db_password==$password))
    {
              
                     header("location:employee_portal.php");
 
    }
  
?>