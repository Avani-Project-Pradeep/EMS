<?php

include "connection.php"; //INCLUDES DATABASE CONNECTION

//IF REGISTERED

if (isset($_POST['er_register'])) {
  $error1 = 0; //THIS TELLS NO ERROR IN FORM

  //print_r($_POST);


  //Employee NAME

  $ee_first_name = $_POST['ee_first_name'];
  $ee_last_name = $_POST['ee_last_name'];

  if (strlen($ee_first_name) > 50) //MAX LENGHTH SHOULD BE 50
  {
    $returnStyle1 = 'indianred'; //IF FALSE, FIELD HIGHLIGHTS IN RED COLOR

    $error1++; //SPECIFIES ERROR

    echo "<h1 style='color:red'><i>Max Limit of employee first name is 50 characters<br></i></h1>";
  }

  
  if (strlen($ee_last_name)>50) {

    $returnStyle1 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Max limit of employee second name is 50 character</i></h1>";
  }


  //PHONE NUMBER VALIDATION


  $ee_phone = $_POST['ee_phone'];

  $mobilenumber = "/^[0-9][0-9]{9}$/" ;

  if (!preg_match($mobilenumber, $ee_phone)) {

     $returnStyle2="indianred";
    echo "<h1 style='color:red'><i>Please enter your 10 digit phone
number</i></h1>";
    $error1++;
  }


  $query = "SELECT * FROM employee_personal_details WHERE ee_phone='{$ee_phone}'";
  $select_user_query = mysqli_query($connection, $query);


  if (mysqli_num_rows($select_user_query) != 0) {
    echo "<h1>This phone number is registered</h1>";
    $returnStyle2="indianred";


    $error1++;
  }



  //VALIDATE EMAIL   



  $email = $_POST['ee_email'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $returnStyle3 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Invalid format of email</i></h1>";
  }


  $query = "SELECT * FROM employee_personal_details WHERE ee_email='{$email}'";
  $select_user_query = mysqli_query($connection, $query);
  if (mysqli_num_rows($select_user_query) != 0) {
    echo "<h1 style='color:red'><i>This email is registered</i></h1>";
    $returnstyle3 = "indianred";  }


  //MAX LIMIT 8 CHARACTERS PASSWORD
  $password = $_POST['ee_password'];

  if (strlen($password) > 8) {
    $returnStyle4 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Limit exceeded</i></h1>";
  }



  //MAX LENGTH OF CITY IS 50

  $city = $_POST['ee_city'];

  if (strlen($city) > 50) {
    $returnStyle5 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Limit Exceeded</i></h1>";
  }

  //STATE
  $state = $_POST['ee_state'];



  //CONFIRM PASSWORD

  $confirm = $_POST['ee_confirm_password'];

  if ($password !== $confirm) {
    $returnStyle6 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Password does not match.</i></h1>";
  }




 if($error1==0)//THIS SPECIFIES NO ERROR
 { 
   //INSERT VALUES TO TABLES

        $ee_first_name = $_POST['ee_first_name'];
        $ee_last_name = $_POST['ee_last_name'];
        $ee_phone = $_POST['ee_phone'];
        $email = $_POST['ee_email'];
        $password = $_POST['ee_password'];
        $confirm = $_POST['ee_confirm_password'];

        
        $ee_img= $_FILES['ee_img']['name'];
        $ee_img_temp= $_FILES['ee_img']['tmp_name'];


        move_uploaded_file($ee_img, "/image/$ee_img");


        $city = $_POST['ee_city'];
        $state = $_POST['ee_state'];


  //$query1 = "INSERT INTO employee_professional_details (er_email,er_company_name, er_comp_website, er_tc, er_docs) VALUES('{$email}','{$comp_name}','{$website}','{$er_tc}','{$er_cd}')";



//   $query_er1 = mysqli_query($connection, $query1);

//  if (!$query_er1) {
//       die("query failed:" . mysqli_error($connection));
//   } 
 


 $query2="INSERT INTO employee_personal_details (ee_first_name,ee_last_name,ee_contact, ee_state, ee_city,ee_image)
  VALUES('{$ee_first_name}','{$ee_last_name}','{$ee_phone}','{$ee_state}', '{$ee_city}','{$ee_img}')" ;

 $query_ee = mysqli_query($connection, $query2);

 if (!$query_ee) {
  die("query failed:" . mysqli_error($connection));
} 
 

 $query3="INSERT INTO user(user_email ,user_role ,user_password) VALUES('{$email}','employee', '{$password}')";
 

 $query_er3 = mysqli_query($connection, $query3);
 if (!$query_er3) {
      die("query failed:" . mysqli_error($connection));
  } 
 
 
//When all queries will run successfully.. registration confirmation
      
if(($query_er1) && ($query_er2) && ($query_er3))
{
  header("location:registerconfirm.php?email=$email");
}


}
}
?>