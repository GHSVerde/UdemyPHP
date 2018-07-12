<?php
$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

//Pega o conteúdo do arquivo
$content = file_get_contents($link);

//função retorna um array contendo a interpretação da string
$parse = parse_url($link);

//Retorna do filename do link, a parte do arquivo
$basename = basename($parse["path"]);

//Cria o arquivo conforme o basename e diz que vai escrever
$file = fopen("uploads/".$basename, "w+");

//Escreve o conteúdo no arquivo
fwrite($file, $content);
fclose($file);
?>

<img src="uploads/<?=$basename ?>"></img>
