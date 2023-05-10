<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $n1 = $_GET["v1"] ?? 0;
    $salMin = 1380;
    $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Salário(R$)</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>">
            <input type="submit" value="Enviar">
        </form>
        <p>Considerando o salário mínimo de <strong>R$<?=$salMin?></strong></p>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php             
            $resultado = intdiv($n1,$salMin);
            $resto = $n1 % $salMin;
        ?>
        <p>Quem recebe um salário de <?=numfmt_format_currency($padrao,$n1,"BRL")?> ganha <strong><?=$resultado?> salários mínimos</strong> + <?=numfmt_format_currency($padrao,$resto,"BRL")?>.</p>
    </section>
</body>

</html>