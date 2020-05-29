<?php

$id= $_POST['input_id'];
$Lugar = $_POST['input_Lugar'];
$Fecha = $_POST['input_Fecha'];
$Hora = $_POST['input_Hora'];
$Tipo = $_POST['input_Tipo'];
$Placa = $_POST['input_Placa'];
$Denuncia = $_POST['input_Denuncia'];

echo $id;
echo "</br>";
echo $Lugar;
echo "</br>";
echo $Fecha;
echo "</br>";
echo $Hora;
echo "</br>";
echo $Tipo;
echo "</br>";
echo $Placa;
echo "</br>";
echo $Denuncia;
echo "</br>";

//1. conexión entre nuestra app(php) y el servidor de bases de datos(mysql)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "denuncias";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
    echo "mi conexión con la bd falló";
    die("la conexión falló " . $conn->connect_error);
}
else
{
    echo "conexión establecida entre php y mysql</br>";
}

//2. sentencia sql (CRUD: Create, Read, Update, Delete)

$sql = "UPDATE denuncias_transporte SET Lugar='{$Lugar}', Fecha='{$Fecha}', Hora='{$Hora}', Tipo='{$Tipo}', Placa='{$Placa}', denuncia = '{$Denuncia}' WHERE id_pk='{$id}'";

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