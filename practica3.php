<!DOCTYPE html>
<html>
<head>
        <title>
            Demo 3
        </title>        
    </head>
    <body>
        <h1>3. FUNCIONES</h1>
        <?php
        //funciones sin parametros
        function calculo1(){
            $valor1=10;
            $valor2=5;
            echo $valor1+$valor2;
        }
         
        calculo1();

        echo "<br>";
        
        //funciones con parametros;
        $valorA=2;
        $valorB=3;
        $valorC=4;

        function operaciones(){
            echo "variable A ".$valorA."<br/>";    
            echo "variable B ".$valorB."<br/>";   
            echo "variable C ".$valorC."<br>";    
            echo "el valor de la funcion Suma (C + B) es ".Suma($valorC,$valorB);
            echo "<br>";
            echo "el valor de la funcion Resta (C - A) es ".Resta($valorC,$valorA);

        }

         function Suma($val1,$val2){
            echo $val1 + $val2;
         }

         function Resta($val1,$val2){
            echo $val1 - $val2;
         }

         operaciones();

        ?>

    </body>

</html>
