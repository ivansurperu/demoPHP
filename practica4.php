<!DOCTYPE html>
<html>
<head>
        <title>
            Demo 4
        </title>        
    </head>
    <body>
        <h1>4. FUNCIONES</h1>
        <?php
        include("funciones.php");        
        //funciones desde un archivo;
        $valorA=6;
        $valorB=7;
        $valorC=8;

        function operaciones($valA,$valB,$valC){
            echo "variable A es ".$valA."<br/>";    
            echo "variable B es ".$valB."<br/>";   
            echo "variable C es ".$valC."<br>";
            $suma = Suma($valC,$valB);    
            echo "el valor de la funcion Suma (C + B) es ".$suma;
            echo "<br>";
            $resta = Resta($valC,$valA);
            echo "el valor de la funcion Resta (C - A) es ".$resta;

        }

         operaciones($valorA,$valorB,$valorC);

        ?>

    </body>

</html>
