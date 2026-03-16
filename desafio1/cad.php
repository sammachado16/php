<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <header>
        <h1>Resultado final</h1>
    </header>
    <main> 
        <?php 
            $n = $_GET["numero"] ?? "Sem número";
            $ant = ($n - 1);
            $suc = ($n + 1);
            echo "<p>O número escolhido foi <strong>$n</strong>\n";
            echo "<p>O seu <i>antecessor</i> é $ant \n";
            echo "<p>O seu <i>sucessor</i> é $suc"
          
        ?>
        <p class="voltar"><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>