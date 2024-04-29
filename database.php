<?php
    $url='localhost';
    $username='root';
    $password='';
    $db = "mp_db";
    $conn=mysqli_connect($url,$username,$password,"mp_db");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>