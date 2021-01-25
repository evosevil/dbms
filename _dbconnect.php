<?php
    $username="root";
    $password="root";
    $servername="localhost";
    $database="users";

    $con= mysqli_connect($servername,$username,$password,$database);

    if(!$con){
        die("Error: " . mysqli_connect_error());
    }

?>
