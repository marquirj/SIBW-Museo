<?php
include ("seguridad.php");
$_SESSION['cargo']=99;
session_unset();
session_destroy();
header('location:index.php');
?>
