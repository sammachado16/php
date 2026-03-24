<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos = $_GET['segundos'] ?? 0;
        $reajuste = $_GET['reajuste'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" id="segundos" name="segundos" value="<?=$segundos?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado do Reajuste</h1>
        <?php
        $semanas = intdiv($segundos, 604800);
        $resto = $segundos % 604800;

        $dias = intdiv($resto, 86400);
        $resto = $segundos % 86400;

        $horas = intdiv($resto, 3600);
        $resto = $segundos % 3600;

        $minutos = intdiv($resto, 60);
        $resto = $segundos % 60;

        $final_segundos = intdiv($resto, 1);

        echo "Analisando o valor que você digitou, <strong>" . number_format($segundos, 0, ",", ".") . " segundos</strong> equivalem a um total de:
        <ul><li>$semanas semanas
            <li>$dias dias
            <li>$horas horas
            <li>$minutos minutos
            <li>$final_segundos segundos
        </ul>";
        ?>
    </section>

</body>
</html>