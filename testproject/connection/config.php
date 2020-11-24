<?php 
$servername = "localhost:3308"; //default "localhost"
$username = "root";
$password = "";

$dbname = "testproject";

$conn = mysqli_connect($servername,$username,$password,$dbname); //either it returns 1 or 0

// if($conn) 
// {
//     echo "Connection successful";
// }
// else 
// {
//     echo "Connection failed.";
// }

?>