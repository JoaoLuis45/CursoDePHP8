<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $n1 = $_GET["v1"] ?? 1;
    $n2 = $_GET["v2"] ?? 1;
    $p1 = $_GET["p1"] ?? 1;
    $p2 = $_GET["p2"] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Número 1</label>
            <input type="number" name="v1" id="v1" value="<?=$n1?>">
            <label for="p1">Peso 1</label>
            <input type="number" name="p1" id="p1" value="<?=$p1?>">
            <label for="v2">Número 2</label>
            <input type="number" name="v2" id="v2" value="<?=$n2?>">
            <label for="p2">Peso 2</label>
            <input type="number" name="p2" id="p2" value="<?=$p2?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php             
            //media simples
            $mediaSimples = number_format(($n1 + $n2) / 2,1);

            //media ponderada
            $mediaPonderada = number_format((($n1 * $p1) + ($n2 * $p2)) / ($p1 + $p2),1);

        ?>
        <p>Analisando os valores <strong><?="$n1 e $n2"?>:</strong></p>
        <ul>
            <li>A<strong> Média Aritmética Simples </strong> entre os valores é igual a <?=$mediaSimples?></li>
            <li>A<strong> Média Aritmética Ponderada </strong> com pesos <?=$p1?> e <?=$p2?> é igual a <?=$mediaPonderada?></li>
        </ul>        
    </section>
</body>

</html>