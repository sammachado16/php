<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aaa</title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 60.9, 11, 2, 1);
            $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            
            $UEC01 = new Luta();
            $UEC01->marcarLuta($l[1], $l[2]);
            $UEC01->lutar();
            $l[0]->status();
            $l[1]->status();
            
        ?>
    </body>
</html>
