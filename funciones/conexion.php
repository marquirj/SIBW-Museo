
<?php
// datos para la conexión a mysql
define('DB_SERVER','localhost');
define('DB_NAME','SIBW');
define('DB_USER','sibw');
define('DB_PASS','sibw');

$con = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("no se ha podido");
mysqli_set_charset($con,"utf8");
return $con;
?>
