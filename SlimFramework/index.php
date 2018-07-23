<?php
//Autoload Padrão
require_once("vendor/autoload.php");

//Criação do objeto Slim
$app = new \Slim\Slim();

//Configuração de rota
$app->get('/',function () {
    echo json_encode(array(
        'data' => date("d-m-Y H:i:s")
    ));
});

//Execução do Slim
$app->run();
