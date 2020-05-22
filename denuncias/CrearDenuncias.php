<?php

$lugar= $_POST['input_lugar'];
$fecha= $_POST['input_fecha'];
$hora= $_POST['input_hora'];
$tipo= $_POST['input_tipo'];
$placa= $_POST['input_placa'];
$denuncia= $_POST['input_denuncia'];

echo $lugar;
echo"</br>";
echo $fecha;
echo"</br>";
echo $hora;
echo"</br>";
echo $tipo;
echo"</br>";
echo $placa;
echo"</br>";
echo $denuncia;
echo"</br>";

//conexion entre nuestra app y el servidor
$servername ="localhost";
$username="root";
$password="";
$dbname="denuncias";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    echo "Mi conexion falló";
    die("La conexión falló".$conn->connect_error);
}
else
{
    echo "Conexión establecida entre php y mysql";
}
//2. Sentencia sql()

$sql= "Insert into denuncias_transporte (Lugar,Fecha,Hora,Tipo,Placa,Denuncia) 
values ('".$lugar."', '".$fecha."', '".$hora."', '".$tipo."', '".$placa."', '".$denuncia."')";

//Procesar respuesta
$respuesta= $conn->query($sql);

if($respuesta === TRUE) {
    echo "Registro creado correctamente";
}
else{
    echo "Error:" . "</BR>" . $conn->error;
}
//Cerrar nuestra conexion
$conn->close();
header("Location: index.php"); 

?>

