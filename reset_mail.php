<?php

include "db_connection.php";

//WHEN FORGOT IS SET, EMAIL ID FETCH
if(isset($_POST['forgot']))
{
    $to_email=$_POST['email'];






}


//SELECTING THE MAIL ID FROM DB


$query="SELECT * FROM user WHERE user_email='{$to_email}'";
$select_user_query = mysqli_query($connection, $query);



//CHECKING WHETHER EMAIL EXISTS

if(mysqli_num_rows($select_user_query)==0)
{
    echo"No mail id exist";
}

else
{
   //IF EXISTS, UPDATE THE TOKEN VALUE IN USER TABLE

   
   $length = 5;

   $token = bin2hex(openssl_random_pseudo_bytes($length));




    $query="UPDATE user SET token ='{$token}' WHERE user_email='{$to_email}'";
    


}

$subject= "Reset your password";



//FETCH NAME TO WRITE IN EMAIL  FROM DATABASE
$query = "SELECT * FROM employer_personal_details WHERE er_email='{$to_email}'";
        $select_user_query = mysqli_query($connection, $query);
    
        if (!$select_user_query) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
        else{
    
            while ($row = mysqli_fetch_assoc($select_user_query)) {
        
                 
                $db_fname= $row["er_firstname"];
                $db_lname=$row["er_lastname"];

                echo $db_lname,$db_fname;


                
            }

        }

        //mail body

        $body= "Hey, $db_fname $db_lname<br>
        As per your request regarding reset password, please click the link below <br><a href='reset.php?token={$token} & email={$to_email}'> Reset Password </a></h2><br>If you have not requested for password recovery, then kindly ignore this email<br>Thanks<br>Help Desk";



        $headers = array("From:no-reply@gmail.com",
        "Content-Type: text/html; charset=ISO-8859-1\r\n");


if (mail($to_email, $subject, $body,implode("\r\n",$headers))) 
{
    echo "Email successfully sent to $to_email...";
}
else {
    echo "Email sending failed...";
}



        





?>