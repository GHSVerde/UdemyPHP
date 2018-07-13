<?php
$cep = "60871640";
$link = "https://viacep.com.br/ws/$cep/json/";

//Inicia o pedido
$ch = curl_init($link);

//Configura a requisição
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);

//Executando e armazenando a resposta
$response = curl_exec($ch);

//Fechando a resposta
curl_close($ch);

$data = json_decode($response, true);
print_r($data);

echo "<h1>".$data["localidade"]."</h1>";


?>