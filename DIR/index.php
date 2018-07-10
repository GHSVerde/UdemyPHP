<?php
$name = "images";

if (!is_dir($name)) {
    mkdir($name);//Cria diretório
    echo "Diretório $name criado com sucesso";
} else {
    rmdir($name);//Deleta Diretório
    echo "O diretório $name foi removido com sucesso";
}
?>
