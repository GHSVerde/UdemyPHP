<?php
$data = array(
    "empresa" => "Agência",

);
//Configurando o nome, valor, tempo
//time() pega o valor atual e adiciona de 86400 segundos (24horas)
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 86400);

echo "Cookie Criado com sucesso";
?>