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
        $atual = intval(date("Y"));
        $ano_nasc = $_GET['ano_nasc'] ?? "2026";
        $ano_escolhido = $_GET['ano_escolhido'] ?? $atual;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" id="ano_nasc" name="ano_nasc" min="1900" max="<?=($atual-1)?>" value="<?=$ano_nasc?>">

            <label for="ano_escolhido">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" id="ano_escolhido" name="ano_escolhido" value="<?=$ano_escolhido?>">

            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php
        $idade = $ano_escolhido - $ano_nasc;
          echo "Quem nasceu em $ano_nasc vai ter <strong>$idade anos</strong> em $ano_escolhido";
        ?>
    </section>

</body>
</html>