<?php
session_start();
include_once('conexion.php');
//$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
function colecciones($coleccion_p){
    $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
    $query2 = "SELECT id_obra, titulo FROM Obra WHERE Coleccion='{$coleccion_p}'";
    $rec2=mysqli_query($con,$query2);
    while($row2 = mysqli_fetch_array($rec2)){

    echo '<article class="imag">
          <a class="escritura" href="?obra='.$row2["id_obra"].'"><img class="pr" src="img/logo.png" alt="vistas" />'.$row2["titulo"].'</a>
      </article>';
      }
      mysqli_close( $con );
}

function filtro_coleccion(){
    $con33 = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
  $query1 = "SELECT id_obra,Coleccion FROM Obra WHERE (Coleccion='Disfraz') OR (Coleccion='Maquillaje')OR (Coleccion='disfraces') OR (Coleccion='artesanales')";
  $rec1=mysqli_query($con33,$query1);
  while($row = mysqli_fetch_array($rec1)){
  echo '<article class="imag">
        <a class="escritura" href="/?obra='.$row["id_obra"].'"><img class="pr" src="img/logo.png" alt="vistas" />'.$row["Coleccion"].'</a>
    </article>';
    }

  mysqli_close( $con33 );
}
function sectionPagPrincArticulos(){
  $_SESSION['tipo']=1;
  $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
$query1 = "SELECT id_obra,titulo FROM Obra";
$rec1=mysqli_query($con,$query1);
while($row = mysqli_fetch_array($rec1)){
echo '<article class="imag">
      <a class="escritura" href="?obra='.$row["id_obra"].'"><img class="pr" src="img/logo.png" alt="vistas" />'.$row["titulo"].'</a>
  </article>';
  }

mysqli_close( $con );
}

function sectionPagPrincObra($h){
  //include_once('conexion.php');
  $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
  $filtro =$h;
  $query = "SELECT * FROM Obra WHERE id_obra= '{$filtro}' ";

  $rec=mysqli_query($con,$query);
  $obra=mysqli_fetch_array($rec); //array asociativo obra

  $titulo = $obra["titulo"];
  $query1 = "SELECT nombre FROM imagenes ";

  $rec=mysqli_query($con,$query1);
  $imga=mysqli_fetch_array($rec);
  $img=$imga['nombre'];
  ?>
  <script type="text/javascript">
    var obra = '<?php echo $titulo;?>'
    var imga = '<?php echo $img;?>'

  /*window.onload = function(){
             alert("hola"+obra);        }*/
  </script>

  <?php
  echo '  <div id="info_obra">
      <h1 id="tit_obra">'.$obra["titulo"].'</h1>
        <img alt="siguenos en facebook" onclick="activaFB(obra)" height="32" src="http://2.bp.blogspot.com/-q_Tm1PpPfHo/UiXnJo5l-VI/AAAAAAAABzU/MKdrVYZjF0c/s1600/face.png" title="siguenos en facebook" width="32" />
        <img alt="siguenos en Twitter" onclick="activaTW(obra)" height="32" src="http://3.bp.blogspot.com/-wlwaJJG-eOY/UiXnHS2jLsI/AAAAAAAAByQ/I2tLyZDLNL4/s1600/Twitter+NEW.png" title="siguenos en Twitter" width="32" />
        <a href="obra_imprimir.html" target="_blank"><img alt="imprime la obra" height="32" src="img/print.png" title="" width="32" /></a>

      <h2 id="aut_obra">'.$obra["autor"].'</h2>
      <h3 class="dat_obra">'.$obra["datacion"].'</h3>
      <h3 class="dat_obra">'.$obra["fecha_publicacion"].'</h3>
      <h3 class="dat_obra">'.$obra["fecha_modificacion"].'</h3 >
      <input type="button" id="bt_comentario" value="Ver Comentarios" onclick="mostrar()"/>
    </div>
    <div id="fotos_obra">
      <img class="f_obra" alt="Imagen 1" src="img/logo.png" />
      <img class="f_obra" alt="Imagen 2" src="img/logo.png"/>
    </div>
    <div id="des_obra">
    </br> <p id="texto">'.$obra["descripcion"].'</p>
    </div>';

    $query2 = "SELECT nombre FROM imagenes WHERE id_obra= '{$filtro}' ";
    $rec2=mysqli_query($con,$query2);
    echo '<div id="galeria">';
    while($row = mysqli_fetch_array($rec2)){
    echo '<article class="imag">
          <img class="pr" src="img/'.$row["nombre"].'" alt="" />
      </article>';
      }
    echo '<iframe width="260" height="115" src="https://www.youtube.com/embed/nDpoNblOZ0U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> </div>';



    mysqli_close( $con );
}



?>
