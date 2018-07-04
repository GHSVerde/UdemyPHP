<?php
//Conexão
$con = new PDO("mysql:dbname=dbphp7;host=localhost;","root", "KaGa0611");

// Os dados :LOGIN, :SENHA são identificadores de parâmetros exclusivos do PDO
$stmt = $con->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :USUARIO");

//Criação das variáveis
$login = "Gabriel";
$senha = "OITA";
$usuario = 1;

//bindParam para cada parâmetro do Prepare();
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":USUARIO", $usuario);
    
//Executa Query
$stmt->execute();

?>
