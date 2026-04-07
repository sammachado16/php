<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "BIC Cristal";
            $c1->cor = "Azul";
            $c1->destampar(); //função pública pode mexer em atributo protegido
            print_r($c1)
            
            /*
            
            $c2 = new Caneta;
            $c2->cor = "Vermelha";
            $c2->carga = 50;
            $c2->tampar();
            //var_dump($c1);
            print_r($c2); */
            
            /*
            $carro1 = new Carro;
            $carro1->ano = 2021;
            $carro1->modelo = "Corsa";
            $carro1->tipo = "Hatch";
            $carro1->bateu();
            $carro1->martelinho();
            $carro1->andar();*/
        ?>
        </pre>
    </body>
</html>