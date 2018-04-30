<?php
function sectionPagPrincArticulos(){
        
echo '<article class="imag">
      <a class="escritura" href="?obra=1"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="?obra=2"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="?obra=3"><img  class="pr"src="img/logo.png" alt="vistas" />Pepito</a>
  </article>

  <article class="imag">
      <a class="escritura" href="?obra=4"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="?obra=2"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="?obra=3"><img  class="pr"src="img/logo.png" alt="vistas" />Pepito</a>
  </article>

  <article class="imag">
      <a class="escritura" href="?obra=4"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="?obra=1"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="?obra=2"><img  class="pr"src="img/logo.png" alt="vistas" />Pepito</a>
  </article>';

}

function sectionPagPrincObra(){
  include_once('conexion.php');

  $filtro = $_SESSION['tipo'];
  $query = "SELECT * FROM Obra WHERE id_obra= '{$filtro}' ";

  $rec=mysqli_query($con,$query);
  $obra=mysqli_fetch_array($rec); //array asociativo obra

  echo '  <div id="info_obra">
      <h1 id="tit_obra">'.$obra["titulo"].'</h1>
        <a href="#"><img alt="siguenos en facebook" height="32" src="http://2.bp.blogspot.com/-q_Tm1PpPfHo/UiXnJo5l-VI/AAAAAAAABzU/MKdrVYZjF0c/s1600/face.png" title="siguenos en facebook" width="32" /></a>
        <a href="#"><img alt="siguenos en Twitter" height="32" src="http://3.bp.blogspot.com/-wlwaJJG-eOY/UiXnHS2jLsI/AAAAAAAAByQ/I2tLyZDLNL4/s1600/Twitter+NEW.png" title="siguenos en Twitter" width="32" /></a>
        <a href="obra_imprimir.html" target="_blank"><img alt="imprime la obra" height="32" src="img/print.png" title="siguenos en Twitter" width="32" /></a>

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
    /*$seleccion = "SELECT palabra FROM BadWords WHERE id_palabra=1";
    $rec1 =mysqli_query($con,$seleccion);
    $mispalabras=mysqli_fetch_array($rec1);

    echo $mispalabras["palabra"];
    echo 'holaaa';*/
}

?>
