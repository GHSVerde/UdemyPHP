<?php
$file = fopen("log.txt", "a+");// Abre-Cria Arquivo

fwrite($file, date("Y-m-d H:i:s"). "\r\n"); //Escreve no arquivo

fclose($file);// Fecha o arquivo

echo "Arquivo criado com sucesso";
?>
