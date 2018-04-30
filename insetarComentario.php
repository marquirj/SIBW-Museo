<?php
echo 'jl';
echo $_SESSION['tipo'];
require('funciones/maquetacionHTML.php');
require('funciones/muestra_contenido1.php');
require('funciones/filtradoPHP.php');
include_once('conexion.php');
if(isset($_POST['usu']) && isset($_POST['com'])) {
    $nom=$_POST['usu'];
    $tex=$_POST['com'];
    $tex1=$_POST['filtro'];
    echo $tex1;
    echo $nom;
    echo $tex;
}

HTMLinicio("Comentario insertado");
cabecera();
nav(0);
contenido(); //abrimos contenidsectionPagPrincObra();
sectionPagPrincObra($tex1);
comentario1Javascript($tex1);
cierreContenido();
cierraEstructura();
pie();
HTMLfin();

 ?>
