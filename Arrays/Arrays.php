<?php
$frutas = array("Laranja", "Abacaxi", "Melancia");

//Mostra toda a estrutura: Array ( [0] => Laranja [1] => Abacaxi [2] => Melancia )
print_r($frutas); 

//Array bidimensional
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo "<br><br>";
echo end($carros[1]);

/* --== FUNÇÕES DE ARRAYS ==-- */
echo "<h1>Funções de Arrays</h1>";

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 30
));

array_push($pessoas, array(
    'nome' => 'Glaucio',
    'idade' => 25
));
echo "<br>";
print_r($pessoas);
echo "<br>";
echo "<br>";
print_r($pessoas[0]);
echo "<br>";
echo "<br>";
print_r($pessoas[0]['nome']);
?>
