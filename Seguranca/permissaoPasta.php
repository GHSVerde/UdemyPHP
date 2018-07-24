<?php
//Strings Base
$pasta     = "arquivos";
$permissao = "0775";

//Verifica se existe e cria a pasta
if (!is_dir($pasta)) {
    mkdir($pasta, $permissao);
    echo "Diretório criado com sucesso";
}
?>