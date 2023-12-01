<?php

    $servername='localhost';
    $username='root';
    $password='(Jaijawan@123)';
    $dbname = "cars";
    
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
    }
    include_once 'index.php';
?>
