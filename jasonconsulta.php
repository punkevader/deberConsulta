<?php
$servername = "localhost";
$username = "usuariophp";
$password = "root";
$dbname = "HU_deber";
$conx=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password );
$conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$kueric = "SELECT * FROM db_hu";
$mostrado = $conx->prepare($kueric);
$mostrado->execute();
$obj = array();
/* array asociativo */
while ($row = $mostrado->fetch(PDO::FETCH_ASSOC)){
    $obj ['Usuarios Registrados'][] = $row;
}
echo json_encode($obj);
?>
