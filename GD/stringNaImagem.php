<?php

//Cria uma imagem com base num filename existente
$image = imagecreatefromjpeg("certificado.jpg");

//Definições de cores
$titleColor = imagecolorallocate($image, 0,0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image, 5, 440, 350, "Gabriel Henrique", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ". date("d/m/Y")), $titleColor);

header("Content-Type: image/jpeg");

//Configura mais coisas do arquivo no padrão:
//(Variável de imagem, filename do arquivo, qualidade de 1 a 100
imagejpeg($image, "certificado-".date("d-m-Y").".jpg", 10);

imagedestroy($image);

?>