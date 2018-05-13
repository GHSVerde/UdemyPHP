<?php
// -- 1.0 - Interpolação de Strings --
echo "<h3>Interpolação de Strings</h3>";
$nome = "Gabriel";

echo "O nome é $nome <br>";
echo 'O nome é $nome <br>';
echo 'O nome é '. $nome . '<br><br>';

// -- 2.0 - Funções do PHP -- 
echo "<h3>Funções do PHP</h3>";
$nomeMin = "gabriel henrique";
$nomeMai = "GABRIEL HENRIQUE";
echo $nomeMin . "<br>";

// -- 2.1 - strtoupper --
echo strtoupper($nomeMin) . "<br>";

// -- 2.2 - strtolower --
echo strtolower($nomeMai) . "<br>";

// -- 2.3 - ucwords --
echo ucwords($nomeMin) . "<br>";

// -- 2.4 - str_replace --
$nomeMai = str_replace("E", "3", $nomeMai);
echo $nomeMai . "<br><br>";

// -- 2.5 - strpos --
$frase = "A repetição é mãe da retenção";
$q = strpos($frase, "mãe");

var_dump($q);
echo "<br><br>";

// -- 2.6 - substr - 
$texto = substr($frase, 0, $q);
echo $texto;
?>
