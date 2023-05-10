<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $n1 = $_GET["v1"] ?? 1;
    $n2 = $_GET["v2"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$n1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?=$n2?>">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section>
        <h2>Estrutura de uma divisão</h2>
        <?php             
            $resultado = intdiv($n1,$n2);
            $resto = $n1 % $n2;
        ?>
        <ul>
            <table class="divisao">
                <tr>
                    <td><?=$n1?></td>
                    <td><?=$n2?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td>
                    <td><?=$resultado?></td>
                </tr>
            </table>
        </ul>
    </section>
</body>

</html>