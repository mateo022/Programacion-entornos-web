<?php
//conexion entre nuestra app y el servidor
$servername ="localhost";
$username="root";
$password="";
$dbname="evaluacionbd";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    echo "Mi conexion falló";
    die("La conexión falló".$conn->connect_error);
}
else
{
   // echo "Conexión establecida entre php y mysql";
}

?>