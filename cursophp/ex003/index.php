<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos Escalares - ex003</title>
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
        
        echo "<hr>";

        echo "<h2>Informando tipo da variável na saída | var_dump()</h2>";

        $variavel = 45.3;
        var_dump($variavel);
        echo "<br>";
        $variavelBool = true;
        var_dump($variavelBool);
        echo "<br>";
        $variavelString = "Ronald";
        var_dump($variavelString);
        echo "<br>";
        $variavelPotencia = 3e2;          // 3 x 10 elevado a 2
        var_dump($variavelPotencia);

        echo "<hr>";

        echo "<h2>Coerção - forçar tipos em variáveis</h2>";

        $num = "950";
        var_dump($num);     echo "<br>";
        echo "sofrendo a Coerção...<br>";
        $num = (int) "950";
        var_dump($num);

        echo "<hr>";

        echo "<h2>Comportamentos em variáveis booleana</h2>";
        echo "<strong>Escrever o valor de uma variável booleana na tela, se o valor for true retorna 1, se o valor for false retorna vazio.</strong><br><br>";

        $varBoolFalse = false; 
        echo "Variável do tipo bool recebendo false: <br>";
        var_dump($varBoolFalse);
        print "<br>O valor para variável varBoolFalse é: $varBoolFalse"; echo "<br><br>";

        $varBoolTrue = true;
        echo "Variável do tipo bool recebendo true: <br>";
        var_dump($varBoolTrue);
        print "<br>O valor para variável varBoolTrue é: $varBoolTrue"; echo "<br>";

    ?>
</body>
</html>