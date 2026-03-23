<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" id="numero" name="numero">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php
            $raizq = number_format(sqrt($numero), 3, ",", ".");
            $raizc = number_format(pow($numero, 1/3), 3, ",", ".");
            echo "Analisando o <strong>número $numero</strong>, temos:
            <ul><li>A sua raiz quadrada é <strong>$raizq</strong>
            <li>A sua raiz cúbica é <strong>$raizc</strong></ul>";
        ?>
    </section>

</body>
</html>