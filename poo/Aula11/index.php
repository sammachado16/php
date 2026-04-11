<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alunos</title>
    </head>
    <body>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Bolsista.php';
            $v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(56);
            $v1->setSexo("Masculino");
            print_r($v1);
            
            $al = new Aluno();
            $al->setNome("Roselino");
            $al->setCurso("medicina");
            print_r($al);
            
            $b1 = new Bolsista();
            $b1->SetNome("Rogério");
            $b1->setCurso("geografia");
            $b1->setBolsa(12.9);
            $b1->pagarMensalidade();
            print_r($b1);
            
        ?>
    </body>
</html>
