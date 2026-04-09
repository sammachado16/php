<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Banco.php';
            $c1 = new Banco(123, "Samuel");
            print_r($c1);
            $c1->abrirConta("cc");
            print_r($c1);
            $c1->sacar(50);
            print_r($c1);
            $c1->depositar(1000);
            print_r($c1);
            $c1->pagarMensal();
            print_r($c1);
        ?>
        </pre>
    </body>
</html>
