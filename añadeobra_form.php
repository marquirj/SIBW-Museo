<?php session_start();?>

<html>
<body>
<h1>AÑADIR OBRA</h1>
<form method="POST" action="añadirobra.php">
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
