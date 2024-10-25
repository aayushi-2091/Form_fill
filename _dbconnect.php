<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "form";

   // Create a connection
     $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("some error occoured");
    }
?>