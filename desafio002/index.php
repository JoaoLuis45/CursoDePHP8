<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
        Gerador de números
        </h1>
    </header>
    <section>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            $num = mt_rand(0,100);
            ?>
        <p>O valor sorteado foi <strong><?php echo"$num"?></strong></p>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar Outro</button>
            
    </section>
</body>
</html>