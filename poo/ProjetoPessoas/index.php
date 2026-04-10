<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Pessoas</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professores.php';
        require_once 'Funcionario.php';
        
        //Programa principal
        
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professores();
        $p4 = new Funcionario();
        
        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Cláudio");
        $p4->setNome("Faniana");
        
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4); 
        ?>
        </pre>
    </body>
</html>
