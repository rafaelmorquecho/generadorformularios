<?php
 require("conexiones/conexion.php");
 
$consulta="SELECT * FROM ".$_GET['table_code']."limit 1";
$result= mysqli_query($conexion, $consulta);
$printed_headers = true;
if ($result){

?>
<div style="margin-top:10px;">

    <?php
while($row=mysqli_fetch_assoc($result)){
//print the headers once:
foreach ( array_keys($row) AS $header )
{

if ( !is_int($header) )
{
echo "<br>$header";
}
}
echo "<br><br>UPDATE ".$_GET['table_code'];
echo "<BR> SET ";
foreach ( array_keys($row) AS $header )
{

if ( !is_int($header) )
{
echo "$header=’&#36;_POST[$header]’, " ;
}
}
echo "<br><br>INSERT INTO ".$_GET[table_code];
echo "(";
foreach ( array_keys($row) AS $header )
{

if ( !is_int($header) )
{
echo "‘$header’, " ;
}
}
echo "<br>VALUES (";
foreach ( array_keys($row) AS $header )
{

if ( !is_int($header) )
{
echo "‘&#36;_POST[$header]’," ;
}
}
echo ")<br><br><br>";
//guardamos uno nuevo
echo "&#60;form method=post action=" . "&#62;<br>";
foreach ( array_keys($row) AS $header )
{

if ( !is_int($header) )
{
echo "$header:&#60;input id=’$header’ name=’$header’ value=’&#36;_POST[$header]’ &#62;<br>" ;
}
}
echo "&#60;/form &#62;<br>";
}
?>
</div>
<?php
}

