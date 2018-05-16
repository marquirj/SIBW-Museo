<?php session_start();?>

<html>
<body>

<form>
  Titulo:<br>
  <input type="text" name="titulo" value="<?php echo $_POST["titulo"]; ?>"><br>
  Autor:<br>
  <input type="text" name="titulo" value="<?php echo $_POST["autor"]; ?>"><br>
  Datacion:<br>
  <input type="text" name="titulo" value="<?php echo $_POST["datacion"]; ?>"><br>
  Fecha publicacion:<br>
  <input type="text" name="titulo" value="<?php echo $_POST["fecha_publicacion"]; ?>"><br>
  Fecha modificacion:<br>
  <input type="text" name="titulo" value="<?php echo $_POST["fecha_modificacion"]; ?>"><br>
  <input type="submit" value="Confirmar"/>
</form>
</body>
</html>
