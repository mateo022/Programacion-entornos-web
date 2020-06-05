<?php

$num_tarea= $_POST['input_num_tarea'];
$nombre = $_POST['input_nombre'];
$descripcion= $_POST['input_descripcion'];
$fecha= $_POST['input_fecha'];
$prioridad= $_POST['input_prioridad'];
$responsable= $_POST['input_responsable'];


echo $num_tarea;
echo"</br>";
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

//1. conexión entre nuestra app(php) y el servidor de bases de datos(mysql)
include_once('conexionBD.php');

//2. sentencia sql (CRUD: Create, Read, Update, Delete)

$sql = "UPDATE lista_tareas SET nombre='{$nombre}', descripcion='{$descripcion}', fecha='{$fecha}', prioridad='{$prioridad}', responsable='{$responsable}' WHERE num_tarea='{$num_tarea}'";

 //se lanza la consulta en la base de datos
$respuesta = $conn->query($sql);

//3. procesa la respuesta
if($respuesta === TRUE) {
    echo "Registro actualizado correctamente";
} else {
    echo "el error al actualizar es: " . $conn->error;
}

//4. cierra la conexión
$conn->close();
header("Location: index.php");


?>