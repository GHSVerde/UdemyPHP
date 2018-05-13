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

//Operadores de Comparação
echo "<h3>Operadores de Comparação</h3>";
$a = 30;
$b = 55;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a != $b);

//Operadores Especiais do PHP 7
echo "<h3>Operadores Especiais do PHP7</h3>";
$a = 55;
$b = 35;

//Spaceship
var_dump($a <=> $b);

//Null Coalesce
echo "<h3>Null Coalesce</h3>";
$null1 = null;
$null = null;
$valor = 10;

echo $null1 ?? $null ?? "Valor Padrão";
?>
