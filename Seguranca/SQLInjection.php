<?php

$id = (isset($_GET["id"])) ? $_GET['id'] : 1;

$con = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "select * from tb_usuarios where idusuario = $id";

$exec = mysqli_query($con, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
    echo $resultado->deslogin."<br>";
}

?>