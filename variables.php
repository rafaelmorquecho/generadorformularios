<?php

require("conexiones/conexion.php");

$campos = "SELECT column_name FROM information_schema.columns 
WHERE Table_name = 'prestamos'";
$resultados = mysqli_query($conexion, $campos);


 while ($fila = mysqli_fetch_row($resultados)) {

            foreach ($fila as $valor) {
                

               echo "$" . "$valor=\$_POST[" . "'" . $valor . "'];<br>";
                 
            }
           
        }
        
            

           
        
        
    
 
    
 
?>
