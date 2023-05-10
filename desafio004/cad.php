<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <h1>Conversor de moedas v2.0</h1>
        <?php 

            $dtInicial = date("m-d-Y",strtotime("-10 days"));
            $dtFinal = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dtInicial.'\'&@dataFinalCotacao=\''.$dtFinal.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; 

            $dados = json_decode(file_get_contents($url),true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $num =(float) $_GET["num"] ?? 0;
            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            $dolar = number_Format($num/$cotacao,2);
            echo "Seus " . numfmt_format_currency($padrao,$num,"BRL") . " equivalem ". numfmt_format_currency($padrao,$dolar,"USD");
        ?>
        <p>Cotação <?php echo numfmt_format_currency($padrao,$cotacao,"BRL")?></p>
        <p>Cotação vinda do <a href="https://www.bcb.gov.br/">Banco Central do Brasil</a></p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </section>
</body>
</html>