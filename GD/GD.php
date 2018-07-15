<?php

//Diz qual o tipo de arquivo nós iremos mexer
header("Content-Type: image/png");

//Cria uma variável objeto para mexer com imagens
$image = imagecreate(256, 256);

//Define cores no padrão RGB
$black = imagecolorallocate($image, 0, 0,0);
$red = imagecolorallocate($image, 255, 0,0);

//Escreve na $image uma String
//Padrão": (variável de imagem, tamanho de 1 a 5, pos horizontal,
//pos vertical, String, cor do texto)
imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

//Função para criação das imagem em si
imagepng($image);

//Fecha a variável de imagem
imagedestroy($image);

?>