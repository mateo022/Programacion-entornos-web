<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion web denuncias</title>
</head>
<style>
    html {
        height: 100%;
    }
    
    body {
        height: 100%;
    }
    
    .sesion {
        height: 50%;
        background-color: white;
    }
    header{
        height: 10%;
    }
    footer{
        height: 10%;

    }
</style>

<body>
    <div class="header">
        <h1>Denuncias Web App</h1>
        <p>Aplicacion web para el resgitro de denuncias del transporte publico en colombia </p>
        <p>Permite el control y la veduria </p>
    </div>
    <div class="sesion">
        <h3>Registre aquí sus denuncias</h3>
        <form action="CrearDenuncias.php" method="POST">
            <div class="item-form">
                <label for="">Lugar:</label>
                <input type="text" name="input_lugar" id="" required>
            </div>
            <div class="item-form">
                <label for="">Fecha:</label>
                <input type="date" name="input_fecha" id="" required>
            </div>
            <div class="item-form">
                <label for="">Hora:</label>
                <input type="datetime" name="input_hora" id="" required>
            </div>
            <div class="item-form ">
                <label for=" ">Tipo:</label>
                <input type="text" name="input_tipo" id=" " required>
            </div>
            <div class="item-form ">
                <label for=" ">Placa:</label>
                <input type="text" name="input_placa" id=" " required>
            </div>
            <div class="item-form ">
                <label for=" ">Denuncia:</label>
                <input type="text" name="input_denuncia" id=" " required>
            </div>

            <div class="item-from ">
                <button>Enviar</button>
            </div>
        </form>
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
                <td><a href="eliminar_denuncia.php?id_para_borrar=<?php echo $row['id_pk']; ?>">Eliminar</a></td>
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