<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<?php
if( $_REQUEST['boton1'] !="" )
{
    $nombre= $_REQUEST['nombre'];
    $dni= $_REQUEST['dni'];
    $sueldo= $_REQUEST['sueldo'];
    if($nombre == "" || $dni == ""){
echo "Falta ingresar algunos datos <br>";
echo "Los campos marcados * son obligatorios<br/>";
echo "Pulse el boton Volver para reiniciar formulario <br>";
 ?> 
<form action="ejercicio2-formulario.php" method="post">
<input type="submit" name="boton2" value="Volver">
<?php
}
else
{
    echo "<H2>";
    if($sueldo>1000)
        echo "$nombre tiene un Sueldo eficiente";
        else
            echo "$nombre tiene un Sueldo Ineficiente" ;
        
} }
else 
{
    ?>

<h2>Formulario de ingreso de datos</h2><br/>
<hr>
<form action="ejercicio2-formulario.php" method="post">
    
*<input type="text" name="nombre" placeholder="Nombre" size="30"><br/><br/>
*<input type="text" name="dni" placeholder="Dni" size="15"><br/><br/>
*<input type="text" name="sueldo" placeholder="Sueldo" size="20"><br/><br/><br/>
<input type="submit" name="boton1" value="Ingresar Datos"><br/><br/>
Los campos marcados * son obligatorios<br/>
</form>
<?php
}
?>

</body>
</html>