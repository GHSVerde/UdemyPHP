<?php
//Configuração de Variáveis
$servidor = "localhost";
$usuario  = "root";
$senha    = "KaGa0611";
$banco    = "dbphp7";

//String de conexão
$con = new mysqli($servidor, $usuario, $senha, $banco);

//Verificação de Erro
if ($con->connect_error) {
    echo "Erro:". $con->connect_error;
    exit;
}

//Preparando Query para realizar
$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

//Preparando os dados a serem usados nos (?, ?), pois não pode ser passado diretamente na Bind Param
$userLogin = "user";
$userSenha = "KaGa0611";

//Dizendo os tipos
$stmt->bind_param("ss", $userLogin, $userSenha);
/* s - String
   i - Inteiro
   d - Double
   b - Blob */

// Executa a query, caso deseje realizar mais de uma query, basta alterar as variáveis passaras para o bind_param (sem executar o bind novamente) e rodar novamente o execute;
$stmt->execute();

?>
