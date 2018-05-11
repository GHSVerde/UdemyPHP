<?php
//Operadores de Atribuição
$primeiroNome = "Gabriel ";
$segundoNome = "Henrique";

$nomeCompleto = $primeiroNome;
$nomeCompleto .=$segundoNome;

echo $nomeCompleto . "<br><br>";

$valorTotal = 0;

$valorTotal += 100;
$valorTotal += 30;
$valorTotal -= 10;

echo $valorTotal . "<br><br><br>";
//Operadores Aritméticos

echo "<h3>Operadores Aritméticos</h3>";
$a = 10;
$b = 2;

echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>";
echo $a ** $b . "<br>";

?>
