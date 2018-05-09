<?php
session_start();
/*include_once('conexion.php');

$filtro = $_SESSION['tipo'];
$query = "SELECT * FROM Obra WHERE id= '{$filtro}'";

$rec =$mysqli->query();
$numFilas = mysqli_num_rows ($resultado);

$fila = mysqli_fetch_array ($resultado);*/
function comentario1Javascript($filtro){
    // include_once('conexion.php');
    $con1 = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
    $seleccion = "SELECT palabra FROM BadWords";
    $rec1 = mysqli_query($con1,$seleccion);
    while($row = mysqli_fetch_array($rec1)){
        $registros[] = $row['palabra'];
    }
    //echo $registros[3];
    //echo "hoalllllllllllllllllllllllllllllllllllllllllllllllllllllllllllfflllllllllllllll";
    //echo $mispalabras["palabra"];
    echo '  <div id="abs_comentario">
        <div id="form_comentario">
                <form method="POST" action="insetarComentario.php">
                    <fieldset>
                    <input id="usu" type="text" name="usu" placeholder="Nombre.."></input>
                        <input id="cor" type="email" name="username" placeholder="Correo.."></input>
                        <input type="hidden" name="filtro" value="'.$filtro.'"</input>
                        <input type="hidden" name="ip" value="'.$_SERVER['REMOTE_ADDR'].'"</input>
                    <textarea id="com" name="com" placeholder="Deje un comentario.." onkeyup="reemplaza('.$registros.')"></textarea>
                    <input type="submit" value="Env"/>
                </fieldset>
                </form>
        </div>';
echo $filtro;
        $con2 = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
        $seleccion = "SELECT nombre, texto FROM Comentarios where id_obra = '{$filtro}'";
        $rec55 = mysqli_query($con2,$seleccion);
        echo '<div id="comentarios">';
        while($row2 = mysqli_fetch_array($rec55)){

                echo '<p>'.$row2["nombre"].':</p> <p>'.$row2["texto"].'</p>';
            }
            echo '</div>';
}

function comentario2Javascript($filtro){ //para editar
    // include_once('conexion.php');
    $con1 = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
    $seleccion = "SELECT palabra FROM BadWords";
    $rec1 = mysqli_query($con1,$seleccion);
    while($row = mysqli_fetch_array($rec1)){
        $registros[] = $row['palabra'];
    }
    //echo $registros[3];
    //echo "hoalllllllllllllllllllllllllllllllllllllllllllllllllllllllllllfflllllllllllllll";
    //echo $mispalabras["palabra"];
    echo '  <div id="abs_comentario">
        <div id="form_comentario">
                <form method="POST" action="insetarComentario.php">
                    <fieldset>
                    <input id="usu" type="text" name="usu" placeholder="Nombre.."></input>
                        <input id="cor" type="email" name="username" placeholder="Correo.."></input>
                        <input type="hidden" name="filtro" value="'.$filtro.'"</input>
                        <input type="hidden" name="ip" value="'.$_SERVER['REMOTE_ADDR'].'"</input>
                    <textarea id="com" name="com" placeholder="Deje un comentario.." onkeyup="reemplaza('.$registros.')"></textarea>
                    <input type="submit" value="Env"/>
                </fieldset>
                </form>
        </div>';
//echo $filtro;
        $con2 = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
        $seleccion = "SELECT id_comentario, nombre, texto FROM Comentarios where id_obra = '{$filtro}'";
        $rec55 = mysqli_query($con2,$seleccion);
        echo '<div id="comentarios">';
        ?>
        <script type="text/javascript">
          var arcomentario = new Array();
          var cnt = 0
        </script>
        <?php
        while($row2 = mysqli_fetch_array($rec55)){
                echo '<p id="'.$row2["id_comentario"].'" name="'.$row2["texto"].'">'.$row2["nombre"].':</p> <p>'.$row2["texto"].'</p>';
                $txt = $row2["texto"];
                //echo $txt;
                ?>
                <script type="text/javascript">
                  arcomentario[cnt]= "'<?php echo $txt;?>'"
                  cnt = cnt + 1
                  //alert(arcomentario[cnt])
                </script>
                <?php
                echo '<a onclick="muestraedicion('.$row2["id_comentario"].',arcomentario)">   <img name="" alt="editar comenario" height="32" src="img/editar.png" title="editar" width="32" /></a>';
                //echo $row2["texto"];
                echo '<a href="funcionborrarcomentario('.$row2["id_comentario"].','.$row2["nombre"].' ,'.$row2["texto"].')"><img name="'.$row2["id_comentario"].'" alt="borrar comenario" height="32" src="img/borrar.png" title="editar" width="32" /></a>';

            }
            echo '</div>';

            echo '

            <div id="abs_comentario_edicion">
                <div id="form_comentario">
                        <form method="POST" action="insetarComentario.php">
                            <fieldset>
                            <input id="usu" type="text" name="usu" value="EDITA" readonly></input>
                                <input type="hidden" name="filtro" value="'.$filtro.'"</input>
                                <input type="hidden" name="ip" value="'.$_SERVER['REMOTE_ADDR'].'"</input>
                            <textarea id="editacom" name="com" value="" onkeyup="reemplaza('.$registros.')"></textarea>
                            <input type="submit" value="Env"/>
                        </fieldset>
                        </form>
                </div>';
}
 ?>
