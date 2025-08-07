<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <?php
        $n = (int) $_REQUEST["numero"] ?? 0; // tipei com INT pq dava erro quando n recebia nada.
        $a = $n - 1;
        $s = $n + 1;
        echo "<p>O número escolhido foi <strong>$n</strong></p>";
        echo "<p>O seu antecessor é <strong>$a</strong></p>";
        echo "<p>O seu sucessor é <strong>$s</strong></p>";
        ?>
    <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </section>
</body>
</html>