<?php

$id = (isset($_GET["id"])) ? $_GET['id'] : 1;

$con = mysqli("localhost", "root", "", "dbphp7");

$sql = "select * from tb_usuarios where idusuario = $id";

?>