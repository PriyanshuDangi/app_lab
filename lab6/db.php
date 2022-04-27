<?php
    require_once 'vendor/autoload.php';
    $servername='localhost';
    $username='newuser';
    $password='Password@123';
    $dbname = "lab6";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
?>