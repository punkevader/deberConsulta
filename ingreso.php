<?php
$servername = "localhost";
$username = "usuariophp";
$password = "root";
$dbname = "HU_deber";
$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$correo = $_POST['mail'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO db_hu (firstname, lastname, email)
    VALUES ('$nombre', '$apellido', '$correo')";
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null;
  ?>