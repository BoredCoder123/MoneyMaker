<?php

$server="localhost";
$username="root";
$password="root";
$db="project";

//Create a connection
$conn=mysqli_connect($server,$username,$password,$db);

if(!$conn){
    die("Connection Failed: ".mysqli_connect_error);
}

//echo "Connect successfully";
    

?>