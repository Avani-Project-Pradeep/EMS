<?php


include "db_connection.php"; //INCLUDES DATABASE CONNECTION

//IF REGISTERED

if (isset($_POST['er_register'])) {
  $error1 = 0; //THIS TELLS NO ERROR IN FORM

  //print_r($_POST);



  //COMPANY NAME

  $comp_name = $_POST['er_comp_name'];

  if (strlen($comp_name) > 50) //MAX LENGHTH SHOULD BE 50
  {
    $returnStyle1 = 'indianred'; //IF FALSE, FIELD HIGHLIGHTS IN RED COLOR

    $error1++; //SPECIFIES ERROR

    echo "<h1 style='color:red'><i>Max Limit of company name is 50 characters<br></i></h1>";
  }

  $containsDigit   = preg_match('/\d/', $comp_name); //CHECKS -NUMERIC VALUE (NOT ALLOWED)

  if ($containsDigit) {

    $returnStyle1 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Company name should not contain numeric value!!</i></h1>";
  }



  //CHECKS WHETHER COMPANY NAME IS TAKEN OR NOT.. IF YES THEN ERROR




  $query = "SELECT * FROM employer_professional_details WHERE er_company_name='$comp_name'";
  $select_user_query = mysqli_query($connection, $query);



  if (mysqli_num_rows($select_user_query) != 0) {
    $returnStyle1 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Company name is already taken!!<br></i></h1";
  }



  //COMPANY WEBSITE
  $website = $_POST['er_comp_website'];


  //VALIDATE URL

  if (!filter_var($website, FILTER_VALIDATE_URL)) {
    $returnStyle2 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Invalid format of website</i></h1>";
  }


  //VALIDATING TERMS AND CONDITIONS UPLOAD

  if (($_FILES['er_tc']["size"] > 500000)) {
    echo "<h1 style='color:red'><i>Max file size is 500KB</i></h1>"; //MAX FILE LIMIT
    $error1++;
  }


  //CHECKING EXTENSION OF FILE

  $er_tc = $_FILES['er_tc']['name'];
  $er_tc_temp = $_FILES['er_tc']['tmp_name'];

  //print_r($_FILES);

  $ext = pathinfo($er_tc, PATHINFO_EXTENSION);

  if ($ext != 'pdf') {
    echo "<h1 style='color:red'><i>Only pdf format is allowed</i></h1>";
    $error1++;
  }


  //VALIDATING DOCUMENTS UPLOAD

  if (($_FILES['er_cd']["size"] > 500000)) {
    echo "<h1 style='color:red'><i>Max file size is 500KB</i></h1><br>"; //MAX FILE LIMIT
    $error1++;
  }


  //CHECKING EXTENSION OF FILE

  $er_cd = $_FILES['er_cd']['name'];
  $er_cd_temp = $_FILES['er_cd']['tmp_name'];

 // print_r($_FILES);

  $ext = pathinfo($er_cd, PATHINFO_EXTENSION);

  if ($ext != 'pdf') {
    echo "<h1 style='color:red'><i>Only pdf format is allowed</i></h1>";
    $error1++;
  }





  //PHONE NUMBER VALIDATION


  $er_phone = $_POST['er_phone'];

  $mobilenumber = "/^[0-9][0-9]{9}$/" ;

  if (!preg_match($mobilenumber, $er_phone)) {

     $returnStyle3="indianred";
    echo "<h1 style='color:red'><i>Please enter your 10 digit phone
number</i></h1>";
    $error1++;
  }


  $query = "SELECT * FROM employer_personal_details WHERE er_phone='{$er_phone}'";
  $select_user_query = mysqli_query($connection, $query);


  if (mysqli_num_rows($select_user_query) != 0) {
    echo "<h1>This phone number is registered</h1>";
    $returnStyle3="indianred";



    $error1++;
  }






  //VALIDATE EMAIL   



  $email = $_POST['er_email'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $returnStyle4 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Invalid format of email</i></h1>";
  }




  $query = "SELECT * FROM employer_personal_details WHERE er_email='{$email}'";
  $select_user_query = mysqli_query($connection, $query);
  if (mysqli_num_rows($select_user_query) != 0) {
    echo "<h1 style='color:red'><i>This email is registered</i></h1>";
    $returnstyle4 = "indianred";  }


  //MAX LIMIT 8 CHARACTERS PASSWORD
  $password = $_POST['er_password'];

  if (strlen($password) > 8) {
    $returnStyle5 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Limit exceeded</i></h1>";
  }



  //MAX LENGTH OF CITY IS 50

  $city = $_POST['er_city'];

  if (strlen($city) > 50) {
    $returnStyle6 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Limit exceeded</i></h1>";
  }

  //STATE
  $state = $_POST['er_state'];



  //CONFIRM PASSWORD

  $confirm = $_POST['er_confirm_password'];

  if ($password !== $confirm) {
    $returnStyle6 = 'indianred';

    $error1++;

    echo "<h1 style='color:red'><i>Password does not match.</i></h1>";
  }




 if($error1==0)//THIS SPECIFIES NO ERROR
 { 
   //INSERT VALUES TO TABLES

        $comp_name = $_POST['er_comp_name'];
        $website = $_POST['er_comp_website'];
        $er_phone = $_POST['er_phone'];
        $email = $_POST['er_email'];
        $password = $_POST['er_password'];
        $confirm = $_POST['er_confirm_password'];

        
  $er_tc = $_FILES['er_tc']['name'];
  $er_tc_temp = $_FILES['er_tc']['tmp_name'];


  move_uploaded_file($er_tc, "/docs/$er_tc");





  $er_cd = $_FILES['er_cd']['name'];
  $er_cd_temp = $_FILES['er_cd']['tmp_name'];

  move_uploaded_file($er_cd, "/docs/$er_cd");



  $city = $_POST['er_city'];
  $state = $_POST['er_state'];




          


  $query1 = "INSERT INTO employer_professional_details (er_email,er_company_name, er_comp_website, er_tc, er_docs) VALUES('{$email}','{$comp_name}','{$website}','{$er_tc}','{$er_cd}')";




  $query_er1 = mysqli_query($connection, $query1);

 if (!$query_er1) {
      die("query failed:" . mysqli_error($connection));
  } 
 


 $query2="INSERT INTO employer_personal_details (er_phone,er_city, er_state, er_email)
  VALUES('{$er_phone}','{$city}','{$state}','{$email}')" ;

 $query_er2 = mysqli_query($connection, $query2);

 if (!$query_er2) {
  die("query failed:" . mysqli_error($connection));
} 
 



 $query3="INSERT INTO user(user_email ,user_role ,user_password) VALUES('{$email}','employer', '{$password}')";
 

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




