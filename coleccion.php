<?php

require('funciones/maquetacionHTML.php');
require('funciones/muestra_contenido1.php');
require('funciones/filtradoPHP.php');
include_once('conexion.php');
HTMLinicio("Página principal");
cabecera();
nav(0);
contenido();
filtro_coleccion();
cierreContenido();
cierraEstructura();
pie();
HTMLfin();
