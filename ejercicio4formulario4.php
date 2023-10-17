<html>
    <head>
    </head>
    <body>


    <?php

if(isset($_REQUEST['checkbox1'])){
    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
    echo "La suma es $suma <br/>";
}if(isset($_REQUEST['checkbox2'])){
    $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
    echo "El resto es $resta <br/>";
}if(isset($_REQUEST['checkbox3'])){
    $multiplicacion = $_REQUEST['valor1'] * $_REQUEST['valor2'];
    echo "El resto de la multiplicacion es $multiplicacion <br/>";
}if(isset($_REQUEST['checkbox4'])){
    $division = $_REQUEST['valor1'] / $_REQUEST['valor2'];
    echo "La division es $division <br/>";
}



    ?>    


    </body>
   

</html>