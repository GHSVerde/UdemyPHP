<?php

$con = new PDO("mysql:dbname=dbphp7;host=localhost;","root","KaGa0611");

$con->beginTransaction();//Inicia Transação

$stmt = $con->prepare("DELETE FROM tb_usuarios WHERE idusuario = :USUARIO");

$usuario = 5;
$stmt->bindParam(":USUARIO", $usuario);
$stmt->execute();

$con->rollback();//Cancela
//$con->commit();//Confirma
