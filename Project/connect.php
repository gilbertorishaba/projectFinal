<?php 
$servername="localhost";
 $username = "root";
 $password ="";
 $database= "slareg";

$connect = new MySqli("$servername"," $username"," $password","$database");

//  checking connection
if ( connect == true) {
   echo ("connection successfull");

}else{
   echo("connection failed,try again");
}








?>