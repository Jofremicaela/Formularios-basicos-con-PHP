<html>
    <head></head>
    <body>
    <?php 

    foreach($_REQUEST['select1'] as $valor){

        if( $valor == 'suma'){
            $suma=$_REQUEST['valor1'] + $_REQUEST['valor2'];
            echo "La suma de los valores es $suma <br/>";
        }
        if( $valor == 'resta'){
            $resta=$_REQUEST['valor1'] - $_REQUEST['valor2'];
            echo "La resta de los valores es $resta <br/>";
        }
        if( $valor == 'mul'){
            $mul=$_REQUEST['valor1'] * $_REQUEST['valor2'];
            echo "La multiplicacion de los valores es $mul <br/>";
        }
        if( $valor == 'div'){
            $div=$_REQUEST['valor1'] / $_REQUEST['valor2'];
            echo "El resultado de la division es $div <br/>";
        }

    }



    ?>
    </body>
</html>