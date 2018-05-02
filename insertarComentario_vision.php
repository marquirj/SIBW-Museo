<?php

echo $_SESSION['tipo'];
require('funciones/maquetacionHTML.php');
require('funciones/muestra_contenido1.php');
require('funciones/filtradoPHP.php');
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
