<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
        $conversor = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" id="valor" name="valor" step="5" min="0" value="<?=$valor?>">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            $n100 = intdiv($valor, 100);
            $resto = $valor % 100;
            
            $n50 = intdiv($resto, 50);
            $resto = $valor % 50;

            $n10 = intdiv($resto, 10);
            $resto = $valor % 10;

            $n5 = intdiv($resto, 5);
        ?>
        <h1>Saque de <?=numfmt_format_currency($conversor, $valor, "BRL")?> realizado</h1>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="R$100,00"> x<?=$n100?></li>
            <li><img src="imagens/50-reais.jpg" alt="R$50,00"> x<?=$n50?></li>
            <li><img src="imagens/10-reais.jpg" alt="R$10,00"> x<?=$n10?></li>
            <li><img src="imagens/5-reais.jpg" alt="R$5,00"> x<?=$n5?></li>
        </ul>
    </section>
</body>
</html>