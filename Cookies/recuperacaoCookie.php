<?php
//Verificando e pegando o Cookie
if (isset($_COOKIE["NOME_DO_COOKIE"])) {

    //Definindo como objeto
    $obj = json_decode($_COOKIE['NOME_DO_COOKIE']);

    //Pegando o atributo definido no array
    echo $obj->empresa;
}
?>