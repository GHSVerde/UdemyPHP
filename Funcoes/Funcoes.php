<?php
//função recebendo parâmetros
function somar($a, $b) {
    return $a + $b;
}
//Exemplo de função básica
function salario() {
    return 954.03;
}

//Maneira útil de se utilizar parâmetros
echo "Gabriel recebeu o valor de 3 salários mínimos, sendo este valor: ".(salario()*3);

//Parâmetros por Referência/Valor
echo "<h1>Parâmetros por referência / valor</h1>";

$a = 10;

function trocaValor(&$a) {
    $a += 50;
    return $a;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);

?>
