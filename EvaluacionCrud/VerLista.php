<?php

$id_para_editar_tarea = $_GET['id_para_editar'];
include_once('conexionBD.php');
$sql = "SELECT * FROM lista_tareas WHERE num_tarea= {$id_para_editar_tarea}";
$respuesta = $conn->query($sql);

while($row=$respuesta->fetch_array())
{
    
    $nombre= $row['nombre'];
    $descripcion= $row['descripcion'];
    $fecha= $row['fecha'];
    $prioridad= $row['prioridad'];
    $responsable= $row['responsable'];

}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion para la modificacion de tareas</title>
</head>

<style>
    html {
        height: 100%;
        
    }
    
    body {
        height: 100%;
        background-image: url("media/fondo2.jpg");
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
    .parra{
        font-size:23px;
    }


</style>

<body> 
    <div class="header">
        <center>
        <h1>Lista de tareas pendientes</h1>

        <p class="parra">Aquí podremos modificar sus tareas de manera correcta y sencilla </p>
        </center>
    </div>
    <center>
    <div class="sesion">

<h3>Edite aquí sus tareas</h3>
<form action="editarTarea.php" method="POST">
<input type="hidden" name="input_num_tarea" value="<?php echo $id_para_editar_tarea?>">
    <div class="item-form">
    <label for="">Nombre de tarea:</label>
        <input value="<?php echo $nombre; ?>" type="text" name="input_nombre" id="" required>
    </div>
    <div class="item-form">
        <label for="">Fecha:</label>
        <input value="<?php echo $descripcion; ?>" type="text" name="input_descripcion" id="" required>
    </div>
    <div class="item-form">
        <label for="">Fecha de vencimiento:</label>
        <input value="<?php echo $fecha; ?>" type="date" name="input_fecha" id="" required>
    </div>
    <div class="item-form ">
                   <p> Prioridad:

    <select value="<?php echo $prioridad; ?>" type="text" name="input_prioridad"  id="" required>
    <?php
    switch ($prioridad) {
        case 'Baja':
            echo "
            <option value='Baja' selected='selected'>Baja</option>
            <option value='Media'>Media</option>
            <option value='Alta'>Alta</option>";
            break;
            case 'Media':
                echo "
                <option value='Baja' >Baja</option>
                <option value='Media' selected='selected'>Media</option>
                <option value='Alta'>Alta</option>";
                break;

                case 'Alta':
                    echo "
                    <option value='Baja' >Baja</option>
                    <option value='Media'>Media</option>
                    <option value='Alta'selected='selected'>Alta</option>";
                    break;
        default:
            # code...
            break;
    }
    
    ?>

      
    </select>

  </p>     

    </div>
    <div class="item-form">
        <label for="">Responsable:</label>
        <input value="<?php echo $responsable; ?>" type="text" name="input_responsable" id="" required>
    </div>
    
    <div class="item-form">
    <button><svg class="bi bi-arrow-repeat" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z"/>
  <path fill-rule="evenodd" d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z"/>
</svg></button>
    </div> 
</form>
