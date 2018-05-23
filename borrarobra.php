<?php

include_once('funciones/conexion.php');

//if(isset($_POST['titulo']) && isset($_POST['Coleccion']) && isset($_POST['titulo'])    )

$id = $_POST['id_obra'];

$query4 = "UPDATE Obra
           SET visible=0
          WHERE id_obra='{$id}'";

          if ($con->query($query4) === TRUE) {
          	header('location:index.php');
          }else{
          	echo 'adios';
          }

?>
