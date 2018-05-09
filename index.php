<?php

require('funciones/maquetacionHTML.php');
require('funciones/muestra_contenido1.php');
require('funciones/filtradoPHP.php');
include_once('conexion.php');

if(!isset($_GET['obra'])&&!isset($_GET['coleccion'])){
    session_start();
    HTMLinicio("Página principal");
    if(isset($_SESSION['usuario']) && $_SESSION['usuario']!='fallo'){
      cabeceraLogueado();
    }else{
      cabecera();
    }
    nav(0);
    contenido(); //abrimos contenid
    if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] )) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
      else if( isset( $_SERVER ['HTTP_VIA'] ))  $ip = $_SERVER['HTTP_VIA'];
      else if( isset( $_SERVER ['REMOTE_ADDR'] ))  $ip = $_SERVER['REMOTE_ADDR'];
      else $ip = null ;
        //echo $ip  ;
    sectionPagPrincArticulos();
   // comentario1Javascript();
    cierreContenido();
    cierraEstructura();
    pie();
    HTMLfin();
  }else{
      echo $_SERVER[‘REMOTE_ADDR’]  ;
      if(!isset($_GET['obra'])){
          $indice=999;
      }else{
          $indice=$_GET['obra'];
      }


      $colecc=$_GET['coleccion'];
      $_SESSION['tipo']=$colecc;

      if($indice==0){
        $_SESSION['obra']=0;

      }else{
        $_SESSION['obra']=$indice;
      }

      HTMLinicio("Página principal");
      if(isset($_SESSION['usuario']) && $_SESSION['usuario']!='fallo'){
        cabeceraLogueado();
      }else{
        cabecera();
      }
      nav(0);
      contenido(); //abrimos contenido

      if($indice==0){
              sectionPagPrincArticulos();
      }else if($colecc!=null&&$indice==999){
          colecciones($colecc);
      }else if($indice<=9||$indice>=1){
          $_SESSION['obra']=$indice;
          sectionPagPrincObra($indice);
          if($_SESSION['cargo']==0 || $_SESSION['cargo']==2 ){
            echo 'La sesion es del cargo: '.$_SESSION['cargo'];
            comentario2Javascript($indice);
          }else{
            comentario1Javascript($indice);
          }

      }

      cierreContenido();
      cierraEstructura();
      pie();
      HTMLfin();
  }

 ?>
