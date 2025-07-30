<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <hr>
    <?php 
        // 0x = é em hexadecimal; 0b = binário; 0 = Octal
        // $num = 0x1A; // Hexadecimal
        // $num = 0b1011; // Binário
        $num = 010; // Octal
        echo "O valor da variável é: $num <br>";
        
        echo "<hr>";
        
        // $v = 300; // int
        // $v = 45.2; // float
        // $v = true; // true
        $v = "Ricardo"; // string
        var_dump($v);
        
        echo "<hr>";

        $num2 = (int) 3e2; // 3 x 10(2) com coerção
        echo "O valor é $num2 ";
        var_dump($num2);

        echo "<hr>";
        
        $num3 = (float) "950"; // considera float com a coerção, mesmo o 950 sendo string.
        var_dump($num3);
        
        echo "<hr>";
        
        $casado = false;
        var_dump($casado);
        print " O valor para casado é $casado <hr>"; // se for False, a variável não mostra nada no print, se for true, mostra 1.
    ?>
</body>
</html>