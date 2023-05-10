<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuste de preços</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $n1 = $_GET["v1"] ?? 0;
    $n2 = $_GET["v2"] ?? 30;
    $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Preço do produto(R$)</label>
            <input type="number" name="v1" id="v1" value="<?= $n1 ?>">
            <label for="range">Qual será o percentual de reajuste? <strong>(XX)</strong></label>
            <input type="range" id="range" name="v2" min="0" max="100" value="<?=$n2?>" oninput="">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
            $valorComAumento = $n1 + ($n1 * ($n2/100));
        ?>
        <p>O produto que custava <?=numfmt_format_currency($padrao,$n1,"BRL")?>, com <strong><?= "$n2 % de aumento"?></strong> vai passar a custar <strong><?= numfmt_format_currency($padrao,$valorComAumento,"BRL") ?></strong> a partir de agora.</p>

    </section>
</body>

</html>