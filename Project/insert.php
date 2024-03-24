<?php
require_once 'connect.php';

// store values
$firstName =$_POST['firstName'];
$lastName =$_POST['lastName'];
$password =$_POST['password'];

$insertData = "INSERT INTO customers(`firstName` ,`lastName`,`Password`)VALUES( '$firstName','$lastName','$password')";
$insert =$connect->query($insert);

if (conn == true) {
   echo 'data inserted to the database';

   else

   echo 'data insertion failed';
}












?>


