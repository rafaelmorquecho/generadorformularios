<?php

require("conexiones/conexion.php");

$campos = "SELECT column_name FROM information_schema.columns 
WHERE Table_name = 'socios'";
$resultados = mysqli_query($conexion, $campos);
$n = 0;
echo "&lt;form action='tablas_bilioteca.php' method='post'&gt;<br>";
while ($fila = mysqli_fetch_row($resultados)) {
    foreach ($fila as $valor) {
        echo "\"&lt;input type='text' name='$fila[0]' value='\" . \$fila[$n] . \" ' &gt;&lt;br&gt;<br>";
        $n = $n + 1;
    }
}
echo "&lt;input type='Submit' name='enviar' value='Aceptar información'&gt;&lt;br&gt;";
echo "&lt;/form&gt;<br>";

