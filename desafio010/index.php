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
    $n1 = $_GET["v1"] ?? 2000;
    $n2 = $_GET["v2"] ?? date("Y");
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Em que ano você nasceu?</label>
            <input type="number" name="v1" id="v1" value="<?=$n1?>" max="<?=date("Y")?>">
            <label for="v2">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=date("Y")?></strong>)</label>
            <input type="number" name="v2" id="v2" value="<?=$n2?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php             
            $calculo = $n2 - $n1;


        ?>
        <p>Quem nasceu em <?=$n1?> vai ter <strong><?="$calculo anos"?> em <?=$n2?></strong></p>

    </section>
</body>

</html>