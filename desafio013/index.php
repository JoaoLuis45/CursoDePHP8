<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $n1 = $_GET["v1"] ?? 0;
    $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Qual é o valor que você deseja sacar? (R$)</label>
            <input type="number" name="v1" id="v1" value="<?= $n1?>" step="5">
            <span>*Notas disponíveis: R$100, R$50, R$10, R$5</span>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Saque de <?=numfmt_format_currency($padrao,$n1,"BRL")?> realizado</h2>
        <?php
            $cem = intdiv($n1,100);
            $cinquenta = intdiv(($n1 % 100),50);
            $dez = intdiv(($n1 % 100) % 50,10);
            $cinco = intdiv((($n1%100)%50)%10,5);
        ?>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <ul>
            <li>R$100 -> <?=$cem?></li>
            <li>R$50 -> <?=$cinquenta?></li>
            <li>R$10 -> <?=$dez?></li>
            <li>R$5 -> <?=$cinco?></li>
        </ul>
    </section>
</body>

</html>