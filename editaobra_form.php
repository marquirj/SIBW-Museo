<?php session_start();?>

<html>
<body>
<h1>EDITAR OBRA</h1>
<form method="POST" action="editarobra.php">
  ID:<br>
  <input type="text" name="id_obra" readonly  value="<?php echo $_POST["id_obra"]; ?>"><br>
  Titulo:<br>
  <input type="text" name="titulo" value="<?php echo $_POST["titulo"]; ?>"><br>
  Coleccion:<br>
  <input type="text" name="Coleccion" value="<?php echo $_POST["Coleccion"]; ?>"><br>
  Autor:<br>
  <input type="text" name="autor" value="<?php echo $_POST["autor"]; ?>"><br>
  Datacion:<br>
  <input type="text" name="datacion" value="<?php echo $_POST["datacion"]; ?>"><br>
  Fecha publicacion:<br>
  <input type="text" name="fecha_publicacion" value="<?php echo $_POST["fecha_publicacion"]; ?>"><br>
  Fecha modificacion:<br>
  <input type="text" name="fecha_modificacion" value="<?php echo $_POST["fecha_modificacion"]; ?>"><br>
  Descripcion:<br>
  <input type="text" name="descripcion" value="<?php echo $_POST["descripcion"]; ?>"><br>
  <input type="submit" value="Confirmar"/>
</form>
</body>
</html>
