<?php

function sectionPagPrincArticulos(){
  $_SESSION['tipo']=1;

echo '<article class="imag">
      <a class="escritura" href="obra.html"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="obra.html"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="obra.html"><img  class="pr"src="img/logo.png" alt="vistas" />Pepito</a>
  </article>

  <article class="imag">
      <a class="escritura" href="obra.html"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="obra.html"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="obra.html"><img  class="pr"src="img/logo.png" alt="vistas" />Pepito</a>
  </article>

  <article class="imag">
      <a class="escritura" href="obra.html"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="obra.html"><img class="pr" src="img/logo.png" alt="vistas" />Pepito</a>
  </article>
  <article class="imag">
      <a class="escritura" href="obra.html"><img  class="pr"src="img/logo.png" alt="vistas" />Pepito</a>
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
}

function comentarioJavascript(){
  echo '  <div id="abs_comentario">
      <div id="form_comentario">
              <form method="post">
                  <fieldset>
                  <input id="usu" type="text" name="username" placeholder="Nombre.."></input>
                      <input id="cor" type="email" name="username" placeholder="Correo.."></input>
                  <textarea id="com" placeholder="Deje un comentario.." onkeyup="reemplaza()"></textarea>
                  <button type="button" onclick="enviar()">Enviar</button>
              </fieldset>
              </form>
      </div>

      <div id="comentarios">
      <p>Paco:</p> <p>Me encanta</p>
      <p>Luis:</p> <p>Menuda pasada!!!!!!</p>
      <p>Javier:</p> <p>QUE VIVA EL CARNAVAL</p>
      </div>';
}
?>
