<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas v1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <h1>Conversor de moedas v1.0</h1>
        <?php 

            







            $num =(float) $_GET["num"] ?? 0;
            $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
            $dolar = number_Format($num/5.22,2);
            echo "Seus " . numfmt_format_currency($padrao,$num,"BRL") . " equivalem ". numfmt_format_currency($padrao,$dolar,"USD");
        ?>
        <p>Cotação fixa de R$5,22</p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </section>
</body>
</html>