<?php
    $url='localhost';
    $username=' rootS';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"tourism");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>