<?php
//**no se lo dices */
require_once "conexiones/conexion.php";

$campos = "SELECT column_name FROM information_schema.columns 
WHERE Table_name = 'prestamos'";
$resultados = mysqli_query($conexion, $campos);

echo "&lt;form action='tablas_bilioteca.php' method='post'&gt;<br>";
while ($fila = mysqli_fetch_row($resultados)) {

    foreach ($fila as $valor) {
        echo "&lt;input type='text'  name='$valor' value='$valor'&gt;&lt;br&gt;<br>";
    }
}
echo "&lt;input type='Submit' name='enviar' value='Aceptar información'&gt;<br>";
echo "&lt;/form&gt;<br>";
?>








