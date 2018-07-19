<?php
require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;

// configura os filenames das pastas
$config = array(
    "tpl_dir"       => "templates",
    "cache_dir"     => "cache"
);
Tpl::configure( $config );

// Instancia a classe Tpl
$tpl = new Tpl;

// Atribui as variáveis
$tpl->assign( "name", "Gabriel" );
$tpl->assign("version", PHP_VERSION);

//Exibe o Template
$tpl->draw( "index" );


?>