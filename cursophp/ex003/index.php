<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = Hexadecimal
        // 0b = Binario
        // 0  = Octal

        $num = 0x1A;
        echo "O valor da variávei Hexadecimal é $num <br>"; 

        $num2 = 0b11111100111;
        echo "O valor da variável binária é $num2 <br>";

        $num3 = 010;
        echo "O valor da variável Octal é $num3 <br>"; 
    ?>
</body>
</html>