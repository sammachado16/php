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
            //Cotação da API do Banco Central
            $dataIni = date("m-d-Y", strtotime("-7 days"));
            $dataHoje = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dataIni.'\'&@dataFinalCotacao=\''.$dataHoje.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            //Quantia em reais
            $reais = $_GET["reais"] ?? "0";

            //Quantia em dólares
            $dolar = ($reais / $cotacao); 

            //Conversor da biblioteca intl
            $conversor = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($conversor, $reais, "BRL") .  " equivalem a <strong>" . numfmt_format_currency($conversor, $dolar, "USD") ."</strong>";
          
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>
</html>