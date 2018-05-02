<?php
/*echo 'jl';
echo $_SESSION['tipo'];
require('funciones/maquetacionHTML.php');
require('funciones/muestra_contenido1.php');
require('funciones/filtradoPHP.php');*/
include_once('funciones/conexion.php');
if(isset($_POST['usu']) && isset($_POST['com'])) {
    $nom=$_POST['usu'];
    $tex=$_POST['com'];
    $correo=$_POST['username'];
    $filtro=$_POST['filtro'];
    $tex2=$_POST['ip'];
    echo $filtro;
    echo $tex2;
    echo $nom;
    echo $tex;
    echo $correo;
}
$fecha=date("Y-m-d");
echo $fecha;
$time=date("H-i-s");
echo  $time;
//$con2 = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
$query2="INSERT INTO Comentarios(ip, nombre, correo, fecha, hora, texto, id_obra)
        VALUES ('{$tex2}','{$nom}','{$correo}','{$fecha}','{$time}','{$tex}','{$filtro}')";
    if ($con->query($query2) === TRUE) {
    	header('location:index.php');
    }else{
    	echo 'adios';
    }




/*HTMLinicio("Comentario insertado");
cabecera();
nav(0);
contenido(); //abrimos contenidsectionPagPrincObra();
sectionPagPrincObra($tex1);
comentario1Javascript($tex1);
cierreContenido();
cierraEstructura();
pie();
HTMLfin();*/

 ?>
