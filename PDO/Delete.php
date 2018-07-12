<?php
//Conexão
$con = new PDO("mysql:dbname=dbphp7;host=localhost;","root", "");

// Os dados :LOGIN, :SENHA são identificadores de parâmetros exclusivos do PDO
$stmt = $con->prepare("DELETE FROM tb_usuarios WHERE idusuario = :USUARIO");

//Criação das variáveis
$usuario = 1;

//bindParam para cada parâmetro do Prepare();
$stmt->bindParam(":USUARIO", $usuario);
    
//Executa Query
$stmt->execute();

?>
