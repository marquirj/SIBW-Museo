<?php

require('funciones/maquetacionHTML.php');
require('funciones/muestra_contenido.php');
include_once('conexion.php');

$indice=$_GET['indice'];
//echo $nombre;
if($indice==0){
  $_SESSION['tipo']=0;
}else{
  $_SESSION['tipo']=$indice;
}

HTMLinicio("Página principal");
cabecera();
nav(0);
contenido(); //abrimos contenido
if($_SESSION['tipo']==0){
  sectionPagPrincArticulos();
}else{ //cuando es distinto de 0 entra
  sectionPagPrincObra();
  comentarioJavascript();
}
cierreContenido();
cierraEstructura();
pie();
HTMLfin();
 ?>
