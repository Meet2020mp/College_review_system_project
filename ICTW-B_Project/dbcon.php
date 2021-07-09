<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "project2";


$conn = mysqli_connect($server, $username, $password, $database);
try{
 if (!$conn){
    throw new Exception("Error! can not able to connect with database");
 }
}
catch(Exception $e){
    echo "<p>".e->getMessage()."</p>";
}
?>
