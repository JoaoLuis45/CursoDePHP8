<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas v1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
        Conversor de moedas v1.0
        </h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="num">Digite quanto você deseja converter</label>
            <input type="number" name="num" id="idnum" step="0.01">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>