<?php

include_once('funciones/conexion.php');

//if(isset($_POST['titulo']) && isset($_POST['Coleccion']) && isset($_POST['titulo'])    )

$id = $_POST['id_obra'];
$tit = $_POST['titulo'];
$Col = $_POST['Coleccion'];
$aut = $_POST['autor'];
$dat = $_POST['datacion'];
$fp = $_POST['fecha_publicacion'];
$fm = $_POST['fecha_modificacion'];
$des = $_POST['descripcion'];
$vis = 1;

$query3 = "UPDATE Obra
           SET titulo='{$tit}' ,autor='{$aut}',datacion='{$dat}',descripcion='{$des}',fecha_publicacion='{$fp}', fecha_modificacion='{$fm}', Coleccion='{$Col}', visible=1
          WHERE id_obra='{$id}'";
          
          if ($con->query($query3) === TRUE) {
          	header('location:index.php');
          }else{
          	echo 'adios';
          }

?>
