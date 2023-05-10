<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <h1>Resultado final</h1>
        <?php 
            $num = $_GET["num"] ?? 0;
            $sucessor = $num + 1;
            $antecessor = $num - 1;
        ?>
        <p>O número escolhido foi <strong><?php echo"$num"?></strong>.</p>
        <p>O seu antecessor é <strong><?php echo"$antecessor"?></strong>.</p>
        <p>O seu sucessor é <strong><?php echo"$sucessor"?></strong>.</p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </section>
</body>
</html>