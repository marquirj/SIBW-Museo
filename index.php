<?php

require('funciones/maquetacionHTML.php');
require('funciones/muestra_contenido.php');
include_once('conexion.php');

if(!isset($_GET['obra'])){
  HTMLinicio("Página principal");
  cabecera();
  nav(0);
  contenido(); //abrimos contenid
  sectionPagPrincArticulos();
  cierreContenido();
  cierraEstructura();
  pie();
  HTMLfin();
}

$indice=$_GET['obra'];
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
}else if($_SESSION['tipo']<=9 || $_SESSION['tipo']>=1){ //cuando es distinto de 0 entra
  sectionPagPrincObra();
  comentarioJavascript();
}
cierreContenido();
cierraEstructura();
pie();
HTMLfin();
 ?>
