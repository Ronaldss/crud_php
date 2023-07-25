<?php
echo "<h1>Operadores Aritmétricos e de Atribuição</h1>";

# 'a' é igual a 1000 e 'b' é igual a metade de 'a'
# apresentar o valor de 'b'

echo "A é igual a 1000 e B é igual a metade de A<br>";
echo "Apresentar o valor de B.<br><br>";

$a = 1000;
$b = $a / 2;

echo "B = $b";


echo "<br><br>";
echo "<hr>";

# 'a' é igual a 100 e 'b' é igual a 3 vezes o valor de 'a'
# apresentar o valor de 'b'

echo "A é igual a 100 e B é igual a 3 vezes o valor de A<br>";
echo "Apresente o valor de B.<br><br>";

$a = 100;
$b = $a * 3;

echo "B = $b";


echo "<br><br>";
echo "<hr>";

# 'a' é iniciado e apresentado com valor 20.
# na instrução seguinte, 'a' deverá ser apresentado com valor 21

echo "A é iniciado e apresentado com valor 20.<br>";
echo "Na instrução seguinte, 'A' deverá ser apresentado com valor 21.<br><br>";

$a = 20;
echo "A = $a";
++$a; 
echo "<br>A = $a";


echo "<br><br>";
echo "<hr>";


# 'a' é igual a 100
# 'b' é igual a 250
# 'c' é igual a 'a' mais 'b'
# acrecentar mais uma unidade a 'c'
# apresentar 'c'
#
# resultado será 351

echo "A é igual a 100<br>";
echo "B é igual a 250<br>";
echo "C é igual a A + B<br>";
echo "Acrescentar mais uma unidade a C<br>";
echo "Apresentar C<br><br>";

$a = 100;
$b = 250;
$c = $a + $b;
++$c;

echo "C = $c";







