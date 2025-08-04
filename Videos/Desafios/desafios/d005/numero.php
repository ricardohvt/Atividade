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
        <h1>Analisador de número Real</h1>
        <?php
            $num = $_POST["n"] ?? 0;
            
            echo "<p>Analisando o número $num informado pelo usuário: </p>";
        ?> 
    </main>
</body>
</html>