<!DOCTYPE html>
<html>
    <head>
        <title>
            Demo 2
        </title>        
    </head>
    <body>
        <h1>2. VARIBLES</h1>
        <?php
        //declarar variables
        $entero=1234;
        $real=3.141516;
        $cadena="Hola Amigo";
        $verdadero=true;
        $falso=false;

        echo "entero ".$entero."<br/>";
        echo "real ".$real."<br/>";
        echo "cadena ".$cadena."<br/>";
        echo "verdadero ".$verdadero."<br/>";
        echo "falso ".$falso."<br/>";


        //tipado dimamico
        $cadena1="5";
        $numero1=3;
        echo $cadena1+$numero1."<br/>";

        //sensible a las mayusculas y minusculas
        $valor1=5;
        $Valor1=4;
        echo "valor1 es ".$valor1." y Valor1 es ".$Valor1."<br/>";


        //variables por referencia
        $valorX='Bob'; //asigna el valor Bob a $valorX
        $valorY=&$valorX; //referencia $valorX via $valorY
        $valorY="Mi nombre es $valorY"; //modifica $valorY
        echo $valorX."<br/>"; //$valorX tambien se modifica
        echo $valorY."<br/>";
         
        //variables por valor
        $valorA='Ivan'; //asigna el valor Bob a $valorA
        $valorB=$valorA; //referencia $valorA via $valorB
        $valorB="Mi nombre es $valorB"; //modifica $valorB
        echo $valorA."<br/>"; //$valorA no se modifica
        echo $valorB;

        
        ?>

    </body>
</html>

