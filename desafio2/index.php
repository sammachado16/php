<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <section>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            $alea = mt_rand(0, 100);
            echo "O valor gerado foi de <strong>$alea<strong>";
        ?>
            <button onclick="javascript:window.location.reload()">Gerar Outro</button>
        </form>
    </section>
</body>
</html>