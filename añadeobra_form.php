<?php session_start();?>
<head>
    <meta charset="utf-8">
    <title>Universidad de Granada</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon" />
</head>
<html>
<body>
  <STYLE type="text/css">
    H1 { text-align: center}
    form { text-align: center}
    #contenido1 {margin-left: 18%; height: 38%}
   </STYLE>

  <header>
        <div id="cab_izq">
          <img id="logo" alt="Logo" src="img/logo.png" />
        </div>
        <div id="cab_der">
            <div id="cab_titulo">
              <h2 id="titulo">MUSEO DEL CARNAVAL</h2>
            </div>
            <div id="cab_menu">
              <nav id="menu_princ">
            </div>
        </div>
</header>

<div id="contenido1">
    <section id="contenido_princ" >

            <h1>AÑADIR OBRA</h1>
            <form method="POST" action="añadirobra.php">
              Titulo:<br>
              <input type="text" name="titulo" value=""><br>
              Coleccion:<br>
              <input type="text" name="Coleccion" value=""><br>
              Autor:<br>
              <input type="text" name="autor" value=""><br>
              Datacion:<br>
              <input type="text" name="datacion" value=""><br>
              Fecha publicacion:<br>
              <input type="text" name="fecha_publicacion" value=""><br>
              Fecha modificacion:<br>
              <input type="text" name="fecha_modificacion" value=""><br>
              Descripcion:<br>
              <input type="text" name="descripcion" value=""><br>
              <p>
              <p>
              <input type="submit" value="Confirmar"/>
            </form>
          </section>
      </div>
      <footer>
            <img id="foo_izq" alt="Logo" src="img/logo.png" />
              </div>
            <div id="foo_der">
                <div id="foo_titulo">
                  <h2 id="foot_titulo">UNIVERSIDAD DE GRANADA</h2>
                </div>
                <div id="foo_menu">
                  <p id="copyright"> &copy;Todos los derechos reservados.</p>
                </div>
            </div>
      </footer>
</body>
</html>
