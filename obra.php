<?php
  //function llama_obra($titulo, $autor, $datacion, $descripcion, $fecha_publi, $fecha_){
  //$titulo= "pollas en ollas";

    echo'<section id="contenido_princ">
        <div id="info_obra">
          <h1 id="tit_obra">EOO->'.$fila[1].'</h1>
            <a href="#"><img alt="siguenos en facebook" height="32" src="http://2.bp.blogspot.com/-q_Tm1PpPfHo/UiXnJo5l-VI/AAAAAAAABzU/MKdrVYZjF0c/s1600/face.png" title="siguenos en facebook" width="32" /></a>
            <a href="#"><img alt="siguenos en Twitter" height="32" src="http://3.bp.blogspot.com/-wlwaJJG-eOY/UiXnHS2jLsI/AAAAAAAAByQ/I2tLyZDLNL4/s1600/Twitter+NEW.png" title="siguenos en Twitter" width="32" /></a>
            <a href="obra_imprimir.html" target="_blank"><img alt="imprime la obra" height="32" src="img/print.png" title="siguenos en Twitter" width="32" /></a>

          <h2 id="aut_obra">Autor Obra</h2>
          <h3 id="dat_obra">Datación</h3>
          <h3 id="dat_obra">Datación</h3>
          <h3 id="dat_obra">Datación</h3>
          <input type="button" id="bt_comentario" value="Ver Comentarios" onclick="mostrar()"/>
        </div>
        <div id="fotos_obra">
          <img class="f_obra" alt="Imagen 1" src="img/logo.png" />
          <img class="f_obra" alt="Imagen 2" src="img/logo.png"/>
        </div>
        <div id="des_obra">
        </br> <p id="texto">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
            nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,
             vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
             elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis,
              feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.
              Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel,
              luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
          </p>
        </div>
        <div id="abs_comentario">
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
          </div>
    </section>
</div>'
//}
 ?>
