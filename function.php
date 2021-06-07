<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<<<<<<< HEAD
=======
     <style>
         
.error {
  background-color: #ffdddd;
  border-left: 6px solid #f44336;
}

.success {
  background-color: #ddffdd;
  border-left: 6px solid #04AA6D;}

         </style>

>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

</head>

<body>



    <?php

<<<<<<< HEAD
    include "db_er_connection.php";



    
    function check($query)
    {
        include "db_er_connection.php";
=======
    include "db_connection.php";



    //FUNCTION TO FETCH NAME FROM DATABASE AND USE IT TO SEND NAMES TO EMAIL
    
    function check($query)
    {
        include "db_connection.php";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
        $selectquery = mysqli_query($connection, $query);

        if (!$selectquery) {
            die("query failed:" . mysqli_error($connection));
        }
    }

<<<<<<< HEAD
    
        function checkee($query)
        {
            include "db_ee_connection.php";
            $selectquery = mysqli_query($connection2, $query);
    
            if (!$selectquery) {
                die("query failed:" . mysqli_error($connection2));
            }
        }
    
    

=======
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2





    function error_maxlength($var, $max)
    {
        if (strlen($var) > $max) {
<<<<<<< HEAD
            echo "
         *The  limit should be $max characters ";
=======
            echo " <div class='error'>
        <p style=font-size:'xx large'><strong> The  limit should be $max characters</strong> <br></p> </div> ";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

            return 1; // yes error

        } else {
            return 0;
        } //no error

    }


    function error_containdigit($var)
    {
        $containsDigit   = preg_match('/\d/', $var); //CHECKS -NUMERIC VALUE (NOT ALLOWED)

        if ($containsDigit) {

<<<<<<< HEAD
            echo " 
         *Name Should not contain numeric value!!<br></p> </div> ";
=======
            echo " <div class='error'>
        <p><strong></strong>  Name Should not contain numeric value!!<br></p> </div> ";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
            return 1;
        } else {
            return 0;
        }
    }


    function error_phone($phone)
    {

        $mobilenumber = "/^[0-9][0-9]{9}$/";

        if (!preg_match($mobilenumber, $phone)) {

<<<<<<< HEAD
            echo "*Please enter your 10 digit phone
        number";
=======
            echo " <div class='error'>
        <p><strong></strong> Please enter your 10 digit phone
        number<br></p> </div> ";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2

            return 1;
        } else {
            return 0;
        }
    }



    function error_email($email)
    {
        //VALIDATE EMAIL   
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
<<<<<<< HEAD
 echo " *Invalid format of email-id ";
=======
 echo " <div class='error'>
<p><strong></strong> Invalid format of email<br></p> </div> ";
>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
      return 1;  
    }

    else
    {
        return 0;
    }


    }



function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}





<<<<<<< HEAD
=======



>>>>>>> 5e1737651fde2b961074fbf268a7ab83fae6dba2
    ?>

</body>

</html>