<?php

$qualASuaIdade = 30;
$idadeCrianca = 10;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
    echo "Criança";
} else if ($qualASuaIdade < $idadeMaior) {
    echo "Adolescente";
} else if ($qualASuaIdade < $idadeMelhor)
{
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br><br>";

$variavel = ($qualASuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";
echo $variavel;
?>