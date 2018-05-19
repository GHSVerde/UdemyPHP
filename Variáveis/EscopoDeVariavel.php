<?php 

$nome = "Glaucio";

function teste() {
   global $nome;
    echo $nome;
}

function segundoTeste() {
    
    echo "<br><br>" . $GLOBALS['nome'];
}

teste();
segundoTeste();
?>
