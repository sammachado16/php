<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;


    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" id="valor1" name="valor1" value="<?=$valor1?>">

            <label for="peso1">1º Peso</label>
            <input type="number" id="peso1" name="peso1" value="<?=$peso1?>">

            <label for="valor2">2º Valor</label>
            <input type="number" id="valor2" name="valor2" value="<?=$valor2?>">

            <label for="peso2">2º Peso</label>
            <input type="number" id="peso2" name="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h1>Cálculo das Médias</h1>
        <?php
            $media_s = number_format((($valor1 + $valor2)/2), 2, ",", ".");
            $media_p = number_format(((($valor1 * $peso1) + ($valor2 * $peso2))/(($peso1) + ($peso2))), 2, ",", ".");
            echo "Analisando os valores $valor1 e $valor2: 
            <ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $media_s
            <li>A <strong>Média Aritmética Ponderada</strong> com os pesos $peso1 e $peso2 é igual a $media_p";
        ?>
    </section>

</body>
</html>