<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
        $cotação = 5.17;

        $real = $_REQUEST["din"] ?? 0;

        $dólar = $real / $cotação;

        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus <strong>" . numfmt_format_currency($padrão, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD"). "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>