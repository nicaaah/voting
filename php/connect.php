<?php
    $dbhost = "localhost";
    $dbuser = "id16218880_webhostingbscs3a";
    $dbpass = "t9%~bjqmK)uHAwe[";
    $db = "id16218880_buceils";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
    if ($conn->connect_error) {
        die("Connection to database failed: ". $conn->connect_error);
    }

    // $result = mysql_query("SELECT 'name' FROM student");
    // $row_cnt = mysql_num_rows($result);
    //procedural
    // $result = mysqli_query($conn, "SELECT 'name' FROM student");
    // $row_cnt = mysqli_num_rows($result);
    // $row_cnt = $result->num_rows; 
    //oop
    // $student = $conn->query("SELECT 'name' FROM student");
    // $row_cnt = $student->num_rows;

	// echo "Row Count: ", $row_cnt;
?>