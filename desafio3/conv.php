<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
            //Quantia em reais
            $reais = $_GET["reais"] ?? "0";

            //Quantia em dólares
            $dolar = ($reais / 5.23); 

            //Conversor da biblioteca intl
            $conversor = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($conversor, $reais, "BRL") .  " equivalem a " . numfmt_format_currency($conversor, $dolar, "USD");
          
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>
</html>