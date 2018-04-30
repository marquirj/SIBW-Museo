<?php

require('funciones/maquetacionHTML.php');
require('funciones/muestra_contenido1.php');
require('funciones/filtradoPHP.php');
include_once('conexion.php');


if(!isset($_GET['obra'])&&!isset($_GET['coleccion'])){
  HTMLinicio("Página principal");
  cabecera();
  nav(0);
  contenido(); //abrimos contenid
  if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] )) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if( isset( $_SERVER ['HTTP_VIA'] ))  $ip = $_SERVER['HTTP_VIA'];
    else if( isset( $_SERVER ['REMOTE_ADDR'] ))  $ip = $_SERVER['REMOTE_ADDR'];
    else $ip = null ;
      echo $ip  ;
  sectionPagPrincArticulos();
 // comentario1Javascript();
  cierreContenido();
  cierraEstructura();
  pie();
  HTMLfin();
}else{
    echo $_SERVER[‘REMOTE_ADDR’]  ;
    $indice=$_GET['obra'];
    $colecc=$_GET['coleccion'];
    $_SESSION['tipo']=$colecc;
    //echo $nombre;
    if($indice==0){
      $_SESSION['obra']=0;

    }else{
      $_SESSION['obra']=$indice;
    }

    HTMLinicio("Página principal");
    cabecera();
    nav(0);
    contenido(); //abrimos contenido

    if($indice==0){
            sectionPagPrincArticulos();
    }else if($colecc!=null&&$indice==null){
        colecciones($colecc);
    }else if($indice<=9||$indice>=1){
        $_SESSION['obra']=$indice;
        sectionPagPrincObra($indice);
        comentario1Javascript($indice);
    }

    cierreContenido();
    cierraEstructura();
    pie();
    HTMLfin();
}
 ?>
