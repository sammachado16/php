<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano_nasc = $_GET['ano_nasc'] ?? 0;
        $ano_atual = $_GET['ano_atual'] ?? (int)date("Y");
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" id="ano_nasc" name="ano_nasc" value="<?=$ano_nasc?>">

            <label for="ano_atual">Quer saber sua idade em que ano? (atualmente estamos em <strong>2026</strong>)</label>
            <input type="number" id="ano_atual" name="ano_atual" value="<?=$ano_atual?>">

            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php
        $idade = $ano_atual - $ano_nasc;
          echo "Quem nasceu em $ano_nasc vai ter <strong>$idade anos</strong> em $ano_atual";
        ?>
    </section>

</body>
</html>