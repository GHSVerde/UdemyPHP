<?php
require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

//$user = new Usuario();
//Carrega um usuário
//$user->loadById(5);
//echo $user;

//Carrega todos os usuarios
//$lista = Usuario::getLista();
//echo json_encode($lista);

//Carrega todos os usuários com "pesquisa" no nome
//$lista = Usuario::search("Gabriel");
//echo json_encode($lista);

//Carrega um Usuário através do Login
//$usuario = new Usuario();
//$usuario->login("Karrant","dklqnkwnjdjn");
//echo $usuario;

//Cadastro
//$aluno = new Usuario("Usuario","Senha");
//$aluno->Cadastrar();
//echo $aluno;

//Update
$aluno = new Usuario();
$aluno->loadById(1);
echo $aluno;
$aluno->update("Gabriel", "kakaka");

echo $aluno;
?>
