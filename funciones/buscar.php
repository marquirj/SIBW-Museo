<?php

include_once('conexion.php');

//Recogemos la cadena
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");

$busqueda=$_POST['cadena1'];
$titulos=array();
//Aquí hacer la consulta para la busqueda con LIKE $busqueda
//$query2 = "SELECT titulo FROM Obra WHERE titulo='Obra 1'";
$query44 = "SELECT titulo,id_obra FROM Obra WHERE titulo LIKE '{$busqueda}%'";

$rec44=mysqli_query($con,$query44);
while($row44 = mysqli_fetch_array($rec44)){
    $titulos['nombre'] = $row44['titulo'];
    $titulos['id'] = $row44['id_obra'];
}
/*
for ($i = 0 ; $i < $numeroElementos ; $i++) {
    $salida[$i] =generateRandomString(rand(5,10));
  }*/

//Esto se pega en la div #mostrar
echo json_encode($titulos);
//return JsonResponse($titulos,safe=False);

?>
