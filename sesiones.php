<?php
  /*echo 'hola: '.$_POST['correo'];
  echo 'hola: '.$_POST['clave'];*/

 if (isset($_POST['correo']) && isset($_POST['clave'])) {
   echo 'hola: '.$_POST['correo'];
   echo 'hola: '.$_POST['clave'];
 include_once "funciones/conexion.php";
 //$con = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
 session_start();
 $_SESSION['usuario']="fallo";
 $_SESSION['cargo']=999;
 $query = 'SELECT correo, password, tipo from miembros';
 $rec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($rec)){
  if (($_POST['correo']==$row['correo'])&&($_POST['clave']==$row['password']) ){

   $_SESSION['usuario']=$row['correo'];
   $_SESSION['cargo']=$row['tipo'];
   echo $_SESSION['usuario'];
   echo $_SESSION['cargo'];
   header("Location:".$_POST['diract']);
  }else if (($_POST['correo']==$row['email'])&&($_POST['clave']==$row['pass'])){
   $_SESSION['usuario']=$row['email'];
   $_SESSION['cargo']=$row['tipo'];
   echo $_SESSION['usuario'];
   echo $_SESSION['cargo'];
   header("Location:".$_POST['diract']);
  }
 }
 header("Location:".$_POST['diract']);
 }



?>
