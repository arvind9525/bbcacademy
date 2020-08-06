<?php
//conection to the database
$servername="localhost";
$username="root";
$pasword="";
$conn = mysqli_connect($servername,$username,$password);
if(!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());
}

?>
