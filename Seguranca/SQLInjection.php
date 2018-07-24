<?php

//Tenta pegar o GET na URL, se não houver, seta o id pra 1;
$id = (isset($_GET["id"])) ? $_GET['id'] : 1;

//String antiga de Conexão
$con = mysqli_connect("localhost", "root", "", "dbphp7");

//String da Query que sofrerá injeção
$sql = "select * from tb_usuarios where idusuario = $id";

//Execução da query
$exec = mysqli_query($con, $sql);

//Interpretação do resultado da Query
while ($resultado = mysqli_fetch_object($exec)) {
    echo $resultado->deslogin."<br>";
}

?>