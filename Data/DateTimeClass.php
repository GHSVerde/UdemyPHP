<?php
//Instanciando uma nova classe DateTime
$dt = new DateTime();
//Definindo um novo intervalo
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y, H:i:s"). "<br>";
$dt->add($periodo);

echo $dt->format("d/m/Y, H:i:s");
?>
