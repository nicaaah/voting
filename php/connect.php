<?php
/*
    $dbhost = "localhost";
    $dbuser = "id16218880_webhostingbscs3a";
    $dbpass = "t9%~bjqmK)uHAwe[";
    $db = "id16218880_buceils";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
    if ($conn->connect_error) {
        die("Connection to database failed: ". $conn->connect_error);
    }*/
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $db = "votetest";
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
     if ($conn->connect_error) {
         die("Connection to database failed: ". $conn->connect_error);
     }
?>