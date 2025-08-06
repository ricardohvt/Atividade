<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $atual = date("Y");
        $nasc = $_GET['nasc'] ?? '2000'; 
        $ano = $_GET['ano'] ?? $atual;
        // quando o campo de "Quer saber sua idade em que ano?" da erro
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano vocẽ nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual-1?>">
            <label for="ano">Quer saber sua idade em que ano?</label>
            <input type="number" name="ano" id="ano" min="1900">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php
            $idade = $ano - $nasc; 
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?>!</p>
    </section>
</body>
</html>