<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplos de PHP</title>
    </head>
    <body>
        <h1>Esto es PHP!!!</h1>
        <h1>
            <?php
            echo 'Hola mundo!!';

            $var1 = "texto ";
            $var2 = 10;
            $var3 = 4;

            echo $var1 . $var2;
            
            echo "suma: ".$var2 + $var3.
             " / resta: ".$var2 - $var3.
             " / multiplica: ".$var2 * $var3.
             " / divide: ".$var2 / $var3;
            ?>
        </h1>
    </body>
</html>