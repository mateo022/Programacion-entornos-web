<?php

$nombre= $_POST['input_nombre'];
$descripcion= $_POST['input_descripcion'];
$fecha= $_POST['input_fecha'];
$prioridad= $_POST['input_prioridad'];
$responsable= $_POST['input_responsable'];


echo $nombre;
echo"</br>";
echo $descripcion;
echo"</br>";
echo $fecha;
echo"</br>";
echo $prioridad;
echo"</br>";
echo $responsable;
echo"</br>";


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
    echo "Conexión establecida entre php y mysql";
}
//2. Sentencia sql()

$sql= "Insert into lista_tareas (nombre,descripcion,fecha,prioridad,responsable) 
values ('".$nombre."', '".$descripcion."', '".$fecha."', '".$prioridad."', '".$responsable."')";

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

