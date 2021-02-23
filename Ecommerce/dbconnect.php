<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ecomdb";

//creating connection
$conn= mysqli_connect($servername, $username, $password, $dbname);

// //checking connection
// if(!$conn)
//     {
//         die("Connection failed:".mysqli_connect_error());
//     }
// else
//     echo "Connected succesfully";

?>