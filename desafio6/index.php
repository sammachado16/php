<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php 
        $dividendo = $_GET['iddividendo'] ?? 0;
        $divisor = $_GET['iddivisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="iddividendo" id="iddividendo" min="0" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="iddivisor" id="iddivisor" min="1" value="<?=$divisor?>">
            <input type="submit" id="analisar" value="Analisar">
        </form>
    </main>

        <section id="resultado">
            <h1>Estutura da divisão</h1>
            <?php 
                $resultado = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;
                echo "<div id='dividendo'>$dividendo</div>";
                echo "<div id='divisor'>$divisor</div>";
                echo "<div id='resultado'>$resultado</div>";
                echo "<div id='resto'>$resto</div>"

            ?>
        </section>
</body>
</html>