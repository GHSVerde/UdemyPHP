<?php

header("Content-Type: image/jpeg");
$file = "wallpaper.jpg";

//Tamanho fixo da imagem
$new_width = 256;
$new_height = 256;

//Listagem do tamanho da imagem original
list($old_width, $old_height) = getimagesize($file);

//Criação de image com o novo tamanho
$new_image = imagecreatetruecolor($new_width, $new_height);

//Criação de imagem com antigo tamanho
$old_image = imagecreatefromjpeg($file);

//($novaImagem, $imagemAntiga, começoDoDesenhoXY, ComeçoDoCorteXY , Novo Tamanho, Tamanho antigo
imagecopyresampled(
    $new_image,
    $old_image,
    0, 0,
    0,0,
    $new_width, $new_height,
    $old_width, $old_height);

//Criação da Nova Imagem
imagejpeg($new_image);

//Destroi Todas as Imagens
imagedestroy($new_image);
imagedestroy($old_image);

?>
