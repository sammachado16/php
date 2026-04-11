<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Animais</title>
    </head>
    <body>
        <?php
          require_once 'Mamifero.php';
          require_once 'Reptil.php';
          require_once 'Peixe.php';
          require_once 'Ave.php';
          require_once 'Canguru.php';
          require_once 'Aguia.php';
          
          $m = new Mamifero();
          $a = new Ave();
          $c = new Canguru();
          $m->setPeso(50.9);
          $m->locomover();
          $a->locomover();
          $c->locomover();
          
          $
        ?>
    </body>
</html>
