<?php 

$username = "root";
$password = "";
$server = 'localhost';
$db ='employee_management_system';


$connection = mysqli_connect($server,$username, $password, $db);

if ($connection){
    echo "connection successful";
} else {
    echo "No connection";
}



?>