<?php
$servername = "localhost";
$username = "usuariophp";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE HU_deber";
if($conn->query($sql)===TRUE){
    echo "Connected successfully";
}else{
    echo "Error creating database: ". $conn->error;
}
$conn->close();
?>


