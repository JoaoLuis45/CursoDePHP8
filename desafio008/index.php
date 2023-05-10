<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $n1 = $_GET["v1"] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Número</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php             
            $raizq = number_format(sqrt($n1),2);
            $raizc = number_format($n1 ** (1/3),2);
        ?>
        <p>Analisando o <strong><?="numero $n1"?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=$raizq?></strong></li>
            <li>A sua raiz cúbica é <strong><?=$raizc?></strong></li>
        </ul>        
    </section>
</body>

</html>