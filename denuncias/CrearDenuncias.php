<?php

$Lugar= $_POST['input_Lugar'];
$Fecha= $_POST['input_Fecha'];
$Hora= $_POST['input_Hora'];
$Tipo= $_POST['input_Tipo'];
$Placa= $_POST['input_Placa'];
$Denuncia= $_POST['input_Denuncia'];

echo $Lugar;
echo"</br>";
echo $Fecha;
echo"</br>";
echo $Hora;
echo"</br>";
echo $Tipo;
echo"</br>";
echo $Placa;
echo"</br>";
echo $Denuncia;
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
values ('".$Lugar."', '".$Fecha."', '".$Hora."', '".$Tipo."', '".$Placa."', '".$Denuncia."')";

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

