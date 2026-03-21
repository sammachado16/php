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
            //Pega o número
            $numero = $_GET["numero"] ?? "0";           
            $n_formatado = number_format($numero, 3, ",", ".");

            $inteiro = (int)$numero;
            $int_formatado = number_format($inteiro, 0, ",", ".");

            $fracionario = $numero - $inteiro;
            $fra_formatado = number_format($fracionario, 3, ",", ".");

            number_format($fracionario, 3);

            echo "Analisando o número <strong>$n_formatado</strong> informado pelo usuário:<br>";
            echo "<li>A parte inteira do número é <strong>$int_formatado</strong> <br>
            <li>A parte fracionária do número é <strong>$fra_formatado</strong>"
          
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>
</html>