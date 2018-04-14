
<?php

include("datos_conexion.php");

$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_contrasena, $bd_nombre);
if ($error = mysqli_connect_errno()) {
    echo "Fallo al conectar con la base de datos";
    echo $error;
    exit();
}
mysqli_set_charset($conexion, "utf8");

if($debug){
echo "<br>";
echo "conectado $bd_host, $bd_usuario, $bd_contrasena, $bd_nombre";
echo "<br>";}















