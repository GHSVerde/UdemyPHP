<?php
// Incialização de variáveis
$nome1 = "João";
//Exibição de Variáveis
echo $nome1;
echo "<br><br>";

//Remove os valores de $nome1
unset($nome1);

//isset($nome1) verifica se a variável está iniciado
if (isset($nome1)) {
    echo $nome1;
}

$nome = "Gabriel";
$sobrenome = "Verde";

$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto;
?>