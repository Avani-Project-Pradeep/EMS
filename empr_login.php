<?php

include "db_connection.php";

//FETCHING DETAILS FROM FORM
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $company_name=$_POST['company'];
    print_r($_POST);
    echo"<br>";
}


//CHECKING EMPTY

if(empty($email)&& empty($password) && empty($company_name))
{
    header("location:er_login.php");

}


    //SQL INJECTION
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection,$password);
    $company_name=  mysqli_real_escape_string($connection,$company_name);


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
        $db_user_role = $row['user_role'];

        echo"$db_user_role,$db_email,$db_password";
    }

    }
    /* FETCH THE COMPANY NAME FROM EMPLOYER PROFESSIONAL DETAILS
*/
    
        $query = "SELECT * FROM employer_professional_details WHERE er_email='{$email}'";
        $select_user_query = mysqli_query($connection, $query);
    
        if (!$select_user_query) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
          
        $row=mysqli_fetch_assoc($select_user_query);

        $db_company=$row['er_company_name'];

        echo $db_company;

        
        
        


    



    //VALIDATING  ALL DETAILS 

   if(($email==$db_email) && ($db_password==$password) && ($company_name==$db_company))
   {
    
    //IF EQUAL SESSION STARTS AND SET
              session_start();
               $_SESSION['role']='employer';
               $_SESSION['email']=$db_email;
               $_SESSION['password']=$db_password;
               $_SESSION['company']=$db_company;

               //GO TO EMPLOYER PORTAL
            header("location:employer_portal.php");

   }

 








?>














