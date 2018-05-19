<?php
//// String ////
$nome = "HCode";
$site = "http://www.hcode.com.br";

var_dump($nome);
echo '<br>';
var_dump($site);
echo '<br><br>';

//// Int ////
$ano = 1990;

var_dump($ano);
echo '<br><br>';


//// Float ////
$salario = 5500.00;
var_dump($salario);echo '<br><br><br>';

//////////////////////////////////////

//// Array /// 
$array = array("abacaxi", "laranja", "manga", "");

for ($i = 0; $i<3;$i++) {
    echo $array[$i]. "<br>";
}
//// OBJETO ////
$nascimento = new DateTime();
//var_dump($nascimento);

//////////////////////////////////////
$arquivo = fopen("Exemplo-01.php", "r");
//var_dump($arquivo);

?>
