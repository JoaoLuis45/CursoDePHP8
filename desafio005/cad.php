<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de números reais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <h1>Conversor de números reais</h1>
        <?php 
            $n = $_GET["num"];
            $num = floor($_GET["num"]);
            $frac = number_format(fmod($_GET["num"],1),3);
        ?>
        <p>O número escolhido foi <strong><?php echo"$n"?></strong>.</p>
        <ul>
            <li>Sua parte inteira é <strong><?php echo"$num"?></strong></li>
            <li>Sua parte fracionária é <strong><?php echo"$frac"?></strong></li>
        </ul>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </section>
</body>
</html>