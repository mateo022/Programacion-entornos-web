<?php


$id_registro_seleccionado = $_GET['id_para_borrar'];


include_once('conexionBD.php');

$sql = "DELETE FROM lista_tareas WHERE num_tarea={$id_registro_seleccionado}";
$respuesta = $conn->query($sql);

if($respuesta === TRUE) {
    echo "Registro eliminado correctamente";
} else {
    echo "el error es: " . $conn->error;
}

$conn->close();
header("Location: index.php");





?>