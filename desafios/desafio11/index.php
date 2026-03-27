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
        $preco = $_GET['preco'] ?? 0;
        $reajuste = $_GET['reajuste'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" id="preco" name="preco" value="<?=$preco?>">

            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="reaj">?</span>%</strong>)</label>
            <input type="range" id="reajuste" name="reajuste" value="<?=$reajuste?>" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h1>Resultado do Reajuste</h1>
        <?php
        $valor_rj = $preco + ($preco * ($reajuste/100));
        $conversor = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "O produto que custava " . numfmt_format_currency($conversor, $preco, "BRL") . " com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($conversor, $valor_rj, "BRL") . "</strong> a partir de agora.";
        ?>
    </section>
    <script>
        //Declarações automáticas
        mudaValor()

        function mudaValor() {
            let texto = document.querySelector("span#reaj");
            let valor = document.querySelector("input#reajuste")
            texto.innerHTML = valor.value
        }
    </script>
</body>
</html>