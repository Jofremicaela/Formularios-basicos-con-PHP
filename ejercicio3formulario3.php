<html>
    <head></head>
    <body>
    <?php
if(isset($_REQUEST ['radio1'])){

    if($_REQUEST ['radio1'] == 'sumar')
    $resultado= $_REQUEST['valor1'] + $_REQUEST['valor2'];
}else{
    echo "Debe seleccionar una operacion";
}
   if($_REQUEST ['radio1'] == 'restar')
   $resultado= $_REQUEST['valor1'] - $_REQUEST['valor2'];

   if($_REQUEST ['radio1'] == 'dividir')
   $resultado= $_REQUEST['valor1'] / $_REQUEST['valor2'];

   if($_REQUEST ['radio1'] == 'multiplicar')
   $resultado= $_REQUEST['valor1'] * $_REQUEST['valor2'];


echo "El resultado es : $resultado";

    ?>
    </body>
    
</html>