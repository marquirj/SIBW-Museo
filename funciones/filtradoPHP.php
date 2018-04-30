<?php
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
                    <textarea id="com" name="com" placeholder="Deje un comentario.." onkeyup="reemplaza('.$registros.')"></textarea>
                    <input type="submit" value="Env"/>
                </fieldset>
                </form>
        </div>';
echo $filtro;
        $con2 = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
        $seleccion = "SELECT nombre, texto FROM Comentarios where id_obra = '{$filtro}'";
        $rec55 = mysqli_query($con2,$seleccion);
        while($row2 = mysqli_fetch_array($rec55)){
            echo '<div id="comentarios">
                <p>'.$row2["nombre"].':</p> <p>'.$row2["texto"].'</p>';
            }
            echo '</div>';
}
 ?>
