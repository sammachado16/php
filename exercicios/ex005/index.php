<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de quotes</title>
</head>
<body>
    <?php 
    $nome = "Samuel \u{1F596}";
    $sobrenome = '\u{1F596}';
    echo "$nome $sobrenome";
    ?>
</body>
</html>