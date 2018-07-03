<?php

//Configuração do Autoload das Classes
spl_autoload_register(function($classes){
    //Configura os diretórios
    $dirClass = "Classes"; //Pasta a ser usada
    $filename = str_replace("\\", "/", $dirClass. DIRECTORY_SEPARATOR . $classes . ".php");//Configuração do Filename
    //Filname nada mais é do que o caminho do arquivo
    
    //Verificação se existe e inclui
    if (file_exists($filename)) {
        require_once($filename);
    }
});// END - Autoload


?>
