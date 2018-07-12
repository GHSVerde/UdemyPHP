<?php
//Conexão
$con = new PDO("mysql:dbname=dbphp7;host=localhost;","root", "");

// Os dados :LOGIN, :SENHA são identificadores de parâmetros exclusivos do PDO
$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :SENHA)");

//Criação das variáveis
$login = "Gabriel";
$senha = "dklqnkwnjdjn";

//bindParam para cada parâmetro do Prepare();
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

//Executa Query
$stmt->execute();

?>
