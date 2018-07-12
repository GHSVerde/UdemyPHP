<?php

$file = fopen("teste.txt", "w+");
fclose($file);

unlink("teste.txt");//Remove o arquivo
?>
