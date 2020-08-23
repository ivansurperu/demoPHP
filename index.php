<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplos de PHP</title>
    </head>
    <body>
        <h1>Esto es PHP!!!</h1>
        <h1>
            <?php
            error_reporting(-1);
            echo 'Hola mundo!!';\n\r;

            $var1 = "texto ";
            $var2 = 10;
            $var3 = 4;

            echo $var1 . $var2;
            echo " / suma: ".($var2 + $var3);
            echo  " / resta: ".($var2 - $var3);
            echo  " / multiplica: ".($var2 * $var3);
            echo  " / divide: ".($var2 / $var3);
            ?>
        </h1>
    </body>
</html>