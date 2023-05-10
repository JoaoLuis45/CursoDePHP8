<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios retroalimentados</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $n1 = $_GET["v1"] ?? 0;
    $n2 = $_GET["v2"] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado da Soma</h2>
        <?php             
            $s = $n1 + $n2;
            echo "<p>A soma entre os valores $n1 e $n2 é igual a <strong>$s</strong></p>"
        ?>
    </section>
</body>

</html>