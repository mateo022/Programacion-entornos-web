<?php

$id_para_editar_denuncia = $_GET['id_para_editar'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "denuncias";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
    //echo "Conección establecida con la base de datos...";
}

$sql = "SELECT * FROM denuncias_transporte WHERE id_pk= {$id_para_editar_denuncia}";
$respuesta = $conn->query($sql);

while($row=$respuesta->fetch_array())
{
    
    $Lugar= $row['Lugar'];
    $Fecha= $row['Fecha'];
    $Hora= $row['Hora'];
    $Tipo= $row['Tipo'];
    $Placa= $row['Placa'];
    $Denuncia= $row['Denuncia'];

}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion web denuncias Transito y Transporte</title>
</head>

<style>
    html {
        height: 100%;
        
    }
    
    body {
        height: 100%;
        background-image: url("media/fondo.jpg");
        background-repeat: no-repeat;
    }

    
    
    .sesion {
        height: 90%;
      
    }
    .header{
        height: 10%;
    }
    .footer{
        height: 10%;

    }


</style>

<body> 
    <div class="header">
        <center>
        <h1>Denuncias Web App Transito y Transporte</h1>
        </center>
        <p>Aquí podremos modificar nuestra denuncia de manera correcta y sencilla </p>
    </div>
    <div class="sesion">

<h3>Edite aquí sus denuncias</h3>
<form action="editarDenuncia.php" method="POST">
<input type="hidden" name="input_id" value="<?php echo $id_para_editar_denuncia?>">
    <div class="item-form">
    <label for="">Lugar:</label>
        <input value="<?php echo $Lugar; ?>" type="text" name="input_Lugar" id="" required>
    </div>
    <div class="item-form">
        <label for="">Fecha:</label>
        <input value="<?php echo $Fecha; ?>" type="date" name="input_Fecha" id="" required>
    </div>
    <div class="item-form">
        <label for="">Hora:</label>
        <input value="<?php echo $Hora; ?>" type="time" name="input_Hora" id="" required>
    </div>
    <div class="item-form">
        <label for="">Tipo de Vehículo:</label>
        <input value="<?php echo $Tipo; ?>" type="text" name="input_Tipo" id="" required>
    </div>
    <div class="item-form">
        <label for="">Placa:</label>
        <input value="<?php echo $Placa; ?>" type="text" name="input_Placa" id="" required>
    </div>
    <div class="item-form">
        <label for="">Denuncia:</label>
        <input value="<?php echo $Denuncia; ?>" type="textarea" name="input_Denuncia" id="" required>
    </div>
    <div class="item-form">
    <button><svg class="bi bi-arrow-repeat" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z"/>
  <path fill-rule="evenodd" d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z"/>
</svg></button>
    </div> 
</form>
