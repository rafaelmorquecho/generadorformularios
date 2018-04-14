<?php

require("conexiones/conexion.php");
//$tabla="socios";
$tabla=$_GET['tabla'];
echo "<h2>formulario_insertar_" . $tabla . "</h2>";
$campos = "SELECT column_name FROM information_schema.columns 
WHERE Table_name = '$tabla'";
$resultados = mysqli_query($conexion, $campos);



echo "&lt;form action='php/insertar_". $tabla . ".php' method='post'&gt;&lt;br&gt;<br>";
while ($fila = mysqli_fetch_row($resultados)) {

    foreach ($fila as $valor) {
        echo "&lt;input type='text'  name='$valor' value=' ' &gt;&lt;br&gt;<br>";
    }
}
echo "&lt;input type='Submit' name='enviar' value='Aceptar información'&gt;&lt;br&gt;<br>";
echo "&lt;/form&gt;&lt;br&gt;<br>";
echo "<br><br>";
?>

    
<?php


/*$campos = "SELECT column_name FROM information_schema.columns 
WHERE Table_name = '$tabla'";*/
echo "<h2>insertar_" . $tabla . "</h2>";
$resultados = mysqli_query($conexion, $campos);
 //print_r ($resultados) . "<br>";
 $cadena="";
 while ($fila = mysqli_fetch_row($resultados)) {

            foreach ($fila as $valor) {
               echo "$" . "$valor=\$_POST[" . "'" . $valor . "'];<br>"; 
               $cadena=$cadena . ", " . "'$". $valor ."'";
            }
          
        }
        $cadena = trim($cadena, ',');
   //echo "esta es la cadena" . $cadena . "<br>";
   
       
?>

<pre><code>require("conexiones/datos_conexion.php");

        
        try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

<?php
 echo "    \$sql = \"INSERT INTO socios VALUES ($cadena);\"; <br>";

?>
    $insertar = $conn->prepare($sql);
            $insertar->execute();
            $cuenta = $insertar->rowCount();
    
    echo "&lt;div&gt;&lt;p&gt; $cuenta registro creado&lt;/p&gt;&lt;/div&gt;";
   
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;</code></pre>

<h1>MODIFICAR</h1>
<?php    
        /*$campos = "SELECT column_name FROM information_schema.columns 
WHERE Table_name = '$tabla'";*/
echo "<h2>buscar_modificar_" . $tabla . "</h2>";
$resultados = mysqli_query($conexion, $campos);
$n = 0;
echo "echo \"&lt;form action='modificar_". $tabla . ".php' method='post'&gt;&lt;br&gt;\";<br>";

while ($fila = mysqli_fetch_row($resultados)) {
    foreach ($fila as $valor) {
        echo "echo \"&lt;input type='text' name='$fila[0]' value=' \" . \$fila['$fila[0]'] . \" ' &gt;&lt;br&gt;\";<br>";
        $n = $n + 1;
    }
}
echo "echo \"&lt;input type='Submit' name='enviar' value='Aceptar información'&gt;&lt;br&gt;\";<br>";
echo "echo \"&lt;/form&gt;&lt;br&gt;\";<br>";
       
?>
