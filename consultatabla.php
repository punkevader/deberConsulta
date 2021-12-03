<?php
$servername = "localhost";
$username = "usuariophp";
$password = "root";
$dbname = "HU_deber";
$conexion = mysqli_connect($servername , $username, $password, $dbname) or die('ERROR,No es posible conectarse a la base de datos');
$sql = 'SELECT * FROM db_hu';
$result = $conexion->query($sql);
echo "<table class='table table-bordered'>";
echo "<tr>";
echo "  <th> ID </th>";
echo "  <th> NOMBRE </th>";
echo "  <th> APELLIDO </th>";
echo "  <th> CORREO ELECTRÓNICO </th>";
echo "  <th> FECHA </th>";
echo "</tr>";
echo "</div>";
while($row=$result->fetch_array(MYSQLI_ASSOC)){
    echo "<tr>  <td>" .  $row["id"] ."</td> <td>" . $row["firstname"] . "</td> <td>" . $row["lastname"] . "</td> <td>". $row["email"] . "</td> <td>" . $row["reg_date"] . "</td> </tr>";
}
echo('</table>');
$result->free();
?>
<button type="button" class="btn btn-regresar">Regresar</button>
