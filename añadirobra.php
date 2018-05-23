<?php

include_once('funciones/conexion.php');

//if(isset($_POST['titulo']) && isset($_POST['Coleccion']) && isset($_POST['titulo'])    )

$tit = $_POST['titulo'];
$Col = $_POST['Coleccion'];
$aut = $_POST['autor'];
$dat = $_POST['datacion'];
$fp = $_POST['fecha_publicacion'];
$fm = $_POST['fecha_modificacion'];
$des = $_POST['descripcion'];
$vis = 1;

$query3 = "INSERT INTO Obra(titulo,autor,datacion,descripcion,fecha_publicacion, fecha_modificacion, Coleccion, visible)
          VALUES ('{$tit}','{$aut}', '{$dat}', '{$des}', '{$fp}', '{$fm}', '{$Col}', 1 )";
          if ($con->query($query3) === TRUE) {
          	header('location:index.php');
          }else{
          	echo 'adios';
          }

?>
<!--
<html>
<body>
<h1>AÑADIR OBRA</h1>
<form method="POST" action="insertarobra.php">
  Titulo:<br>
  <input type="text" name="titulo" value=""><br>
  Coleccion:<br>
  <input type="text" name="Coleccion" value=""><br>
  Autor:<br>
  <input type="text" name="autor" value=""><br>
  Datacion:<br>
  <input type="text" name="datacion" value=""><br>
  Fecha publicacion:<br>
  <input type="text" name="fecha_publicacion" value=""><br>
  Fecha modificacion:<br>
  <input type="text" name="fecha_modificacion" value=""><br>
  Descripcion:<br>
  <input type="text" name="descripcion" value=""><br>

  <input type="submit" value="Confirmar"/>
</form>
</body>
</html>
-->
