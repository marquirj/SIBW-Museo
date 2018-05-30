<?php
session_start();
//Esta función es la cabecera de todo documento html, está incluida en cada una de las páginas de nuestra web.
function HTMLinicio($titulo){
 echo '
 <!DOCTYPE html>
 <html>
 <head>

 <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
 <title>'.$titulo.'</title>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
 <script type="text/javascript" src="js/social.js"></script>
 <script type="text/javascript" src="js/form.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon" />

 </head>
 <body> ';

}
//Cierre del body
function HTMLfin(){
 echo '
 </body>
 </html>';
}
//Aqui va la imagen del logo de equipo de ivnestigación
function cabecera(){
 echo'
 <header>
       <div id="cab_izq">
         <img id="logo" alt="Logo" src="img/logo.png" />
       </div>
       <div id="cab_der">
           <div id="cab_titulo">
             <h2 id="titulo">MUSEO DEL CARNAVAL</h2>
             <div id="identificador">
                <form action="sesiones.php" method="POST">
                 <h4>Acceso Identificado</h4>
                 <input type="hidden" name="diract" value="'.$_SERVER['PHP_SELF'].'">
                 <input type="text" name="correo" placeholder="Correo.."></input>
                 <input type="password" name="clave" placeholder="Contraseña.."></input>
                 <input type="submit" value="Acceder"/>
                </form>
            </div>
           </div>
           <div id="cab_menu">
             <nav id="menu_princ">
                 <ul id="menu_sec">
                     <li id="menu_lista"><a href="/">Índice</a></li>
                     <li id="menu_lista"><a href="/coleccion.php">Colecciones</a></li>
                 </ul>
             </nav>
           </div>
       </div>
</header>';
}

function cabeceraLogueado(){
 echo'
 <header>
       <div id="cab_izq">
         <img id="logo" alt="Logo" src="img/logo.png" />
       </div>
       <div id="cab_der">
           <div id="cab_titulo">
             <h2 id="titulo">MUSEO DEL CARNAVAL</h2>
             <div id="identificador">
              <p> Usuario: '.$_SESSION["usuario"].'</p>
              <a href="cerrarsesion.php">Cerrar Sesion</a>
              </div>
           </div>
           <div id="cab_menu">
             <nav id="menu_princ">
                 <ul id="menu_sec">
                     <li id="menu_lista"><a href="/">Índice</a></li>
                     <li id="menu_lista"><a href="/coleccion.php">Colecciones</a></li>
                 </ul>
             </nav>
           </div>
       </div>
</header>';
}

//Cierre del pie de página.
function pie(){
 echo '
 <footer>
       <img id="foo_izq" alt="Logo" src="img/logo.png" />
         <!--<nav id="foo_princ">
             <ul id="foo_menu_sec">
                 <li id="foo_lista"><a href="#">Índice</a></li>
                 <li id="foo_lista"><a href="#">Obra</a></li>
                 <li id="foo_lista"><a href="#">Obra Imprimir</a></li>
             </ul>
         </nav>-->
       </div>
       <div id="foo_der">
           <div id="foo_titulo">
             <h2 id="foot_titulo">UNIVERSIDAD DE GRANADA</h2>
           </div>
           <div id="foo_menu">
             <p id="copyright"> &copy;Todos los derechos reservados.</p>
           </div>
       </div>
 </footer>';
}
//Navegador, igual que los menus anteriores donde nos redirige a seleccionar un valor al formulario correspondiente.
function nav($activo){
 echo '
 <div id="contenido">
     <aside id="barra_lateral">
         <ul>
             <li>  <form action="añadeobra_form.php" method="POST">
                   <input type="submit" value="Añadir Obra"/>
                   </form>';?>
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
                    <script>
                      function buscar_ajax(cadena){
                        $.ajax({
                        type: 'POST',
                        url: 'buscar.php',
                        data: 'cadena=' + cadena,
                        success: function(respuesta) {
                          //Copiamos el resultado en #mostrar
                          $('#mostrar').html(respuesta);
                         }
                      });
                      }
                    </script>
                    <?php echo '
                    <div id="mostrar"></div>
                   <li id="menu_lista">
                    <form>
                        <input type="text" name="buscar" onkeyup="buscar_ajax(this.value);"></li>
                    </form>
            </li>
         </ul>
     </aside>';
}

function navGestor($activo){
 echo '
 <div id="contenido">
     <aside id="barra_lateral">
         <ul>
             <li><a href="#">Menú 1</a></li>
             <li><a href="#">Menú 2</a></li>
             <li><a href="#">Menú 3</a></li>
             <li><a href="#">Menú 4</a></li>
             <form>
                 <input type="text" name="obra" list="consejos" onkeyup="buscar_ajax(this.value);"></li>
             </form>
             ';?>

             <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
              <script>
                function buscar_ajax(cadena){
                  console.log(cadena);
                  $.ajax({
                  type: 'POST',
                  beforeSend: function(){
                    $("#respuesta").html("Procesando, espere por favor...");
                  },
                  url: '/funciones/buscar.php',
                  data: {cadena1: cadena},
                  success: function(respuesta) {
                    //console.log(respuesta);
                    valores = JSON.parse(respuesta);
                    console.log(valores["nombre"]);
                    console.log(valores["id"]);

                    var lista = document.getElementById('consejos');
                    lista.innerHTML = "";
                    //for (i = 0 ; i < valores.length ; i++) {
                    var option = document.createElement('option');
                    option.value = valores["nombre"];
                    lista.appendChild(option);
                    //}
                    //Copiamos el resultado en #mostrar
                    //$('#mostrar').html(respuesta);
                    //$('#mostrar').empty();
                    //$('#mostrar').append('<a href="" >respuesta[o]["id"]</a>');
                    /*for( o in valores){
                      $('#consejos').empty();
                      $('#consejos').append('<option href="?obra=">'+valores[o]+'</option>');
                    }*/

                   }
                });
                }
              </script>
              <?php echo '
              <datalist id="consejos">
                <option value=""></option>
              </datalist>

              <p id="respuesta"></p>

             <li id="menu_lista">

         </ul>
     </aside>';
}

function navUsuarioRegistrado($activo){
 echo '
 <div id="contenido">
     <aside id="barra_lateral">
         <ul>
             <li><a href="#">Actualiza Perfil</a></li>
         </ul>
     </aside>';
}

function contenido(){
 echo '
 <section id="contenido_princ">
 ';
}

function cierraEstructura(){
  echo '</div>';
}
function cierreContenido(){
 echo'
 </section>';
}
?>
