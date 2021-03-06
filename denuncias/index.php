<!DOCTYPE html>
<html lang="es">

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
        height: 20%;
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
        <p>Aplicacion web para el resgitro de denuncias del transporte publico en colombia </p>
        <p>Permite el control y la veduria </p>
    </div>
    <div class="sesion">
    
        <h3>Registre aquí sus denuncias</h3>
        <form action="CrearDenuncias.php" method="POST">
            <div class="item-form">
                <label for="">Lugar:</label>
                <input type="text" name="input_Lugar" id="" required>
            </div>
            <div class="item-form">
                <label for="">Fecha:</label>
                <input type="date" name="input_Fecha" id="" required>
            </div>
            <div class="item-form">
                <label for="">Hora:</label>
                <input type="time" name="input_Hora" id="" required>
            </div>
            <div class="item-form ">
                <label for=" ">Tipo:</label>
                <input type="text" name="input_Tipo" id=" " required>
            </div>
            <div class="item-form ">
                <label for=" ">Placa:</label>
                <input type="text" name="input_Placa" id=" " required>
            </div>
            <div class="item-form ">
                <label for=" ">Denuncia:</label>
                <input type="text" name="input_Denuncia" id=" " required>
            </div>

            <div class="item-from ">
                <button>Enviar</button>
            </div>
        </form>
        <br>
        <br>
        <?php
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

$sql= "SELECT * FROM denuncias_transporte";

//Procesar respuesta
$respuesta= $conn->query($sql);

while($row=$respuesta->fetch_array())
{
        ?>
        <table border="1">
            <tr>
                <td><?php echo $row ['id_pk']; ?></td>
                <td><?php echo $row ['Lugar']; ?></td>
                <td><?php echo $row ['Fecha']; ?></td>
                <td><?php echo $row ['Hora']; ?></td>
                <td><?php echo $row ['Tipo']; ?></td>
                <td><?php echo $row ['Placa']; ?></td>
                <td><?php echo $row ['Denuncia']; ?></td>
                <td><a href="VerDenuncia.php?id_para_editar=<?php echo $row['id_pk']; ?>"><svg class="bi bi-wrench" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z"/>
</svg></a></td>
                <td><a href="eliminar_denuncia.php?id_para_borrar=<?php echo $row['id_pk']; ?>"><svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"/>
  </svg></a></td>
            </tr>
            <?php
            }
            //Cerrar nuestra conexion
            $conn->close();
            ?>
        </table>
    </div> 
    <br>
    <div class="footer ">
        Realizado por MCC
    </div>
</body>

</html>