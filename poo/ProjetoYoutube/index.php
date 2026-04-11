<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto YouTube</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Vizualizacao.php';
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");
            
            $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
            $g[1] = new Gafanhoto("Creusa", 43, "F", "cruzes");
            print_r($v);
            print_r($g);
            
            $vis[0] = new Vizualizacao($g[0], $v[2]);
            $vis[0] = new Vizualizacao($g[0], $v[1]);
            print_r($vis);
        ?>
        </pre>
    </body>
</html>
