<?php

require("conexiones/conexion.php");

$tabla=$_GET['tabla'];

$campos = "SELECT column_name FROM information_schema.columns 
WHERE Table_name = '$tabla'";
$resultados = mysqli_query($conexion, $campos);

echo "&lt;form action='tablas_bilioteca.php' method='post'&gt;&lt;br&gt;<br>";
while ($fila = mysqli_fetch_row($resultados)) {

    foreach ($fila as $valor) {
        echo "&lt;input type='text'  name='$valor' value='$valor'&gt;&lt;br&gt;<br>";
    }
}
echo "&lt;input type='Submit' name='enviar' value='Aceptar información'&gt;&lt;br&gt;<br>";
echo "&lt;/form&gt;&lt;br&gt;<br>";
echo "<br><br>";

?>
<h1></h1>
<?php
/*$campos = "SELECT column_name FROM information_schema.columns 
WHERE Table_name = '$tabla'";*/
$resultados = mysqli_query($conexion, $campos);
 while ($fila = mysqli_fetch_row($resultados)) {

            foreach ($fila as $valor) {
               echo "$" . "$valor=\$_POST[" . "'" . $valor . "'];<br>";  
            }
           
        }
?>
<h1></h1>
<?php    
        /*$campos = "SELECT column_name FROM information_schema.columns 
WHERE Table_name = '$tabla'";*/
$resultados = mysqli_query($conexion, $campos);
$n = 0;
echo "&lt;form action='tablas_bilioteca.php' method='post'&gt;&lt;br&gt;<br>";
while ($fila = mysqli_fetch_row($resultados)) {
    foreach ($fila as $valor) {
        echo "\"&lt;input type='text' name='$fila[0]' value=' \" . \$fila[$n] . \" ' &gt;&lt;br&gt;<br>";
        $n = $n + 1;
    }
}
echo "&lt;input type='Submit' name='enviar' value='Aceptar información'&gt;&lt;br&gt;<br>";
echo "&lt;/form&gt;&lt;br&gt;<br>";
       
?>

