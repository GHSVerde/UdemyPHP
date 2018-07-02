<?php
require_once("config.php"); //Importação das Configurações
use Cliente\Cadastro;//Mudando a referência da Classe que eu quero no formato Namespace\Classe;

//Inicialização do Objeto Cadastro
$cad = new Cadastro();
$cad->setNome("Gabriel");
$cad->setEmail("gpqpqp@outlook.com");
$cad->setSenha("jqjccn");
echo $cad."<br><br>";

$cad->registrarVenda();

?>
