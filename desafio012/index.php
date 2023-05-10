<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $n1 = $_GET["v1"] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Qual é o tatal de segundos?</label>
            <input type="number" name="v1" id="v1" value="<?= $n1?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php
            $semanas = intdiv($n1,604800);
            $dias = intdiv(($n1%604800),86400);
            $horas = intdiv((($n1%604800)%86400),3600);
            $minutos = intdiv(((($n1%604800)%86400)%3600),60);
            $segundos = intdiv((((($n1%604800)%86400)%3600)%60),1);
        ?>
        <p>Analisando o valor que você digitou, <strong><?=$n1?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>

    </section>
</body>

</html>