<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" id="salario" name="salario" min="1">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php
            $n_s = intdiv($salario, 1380);
            $resto = $salario % 1380;
            $conversor = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "Quem recebe um salário de $salario ganha <strong>$n_s salários mínimos </strong> + " . numfmt_format_currency($conversor, $resto, "BRL");
        ?>
    </section>

</body>
</html>