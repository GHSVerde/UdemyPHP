<?php
$bevan = "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
$playball = "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

//Cria uma imagem com base num filename existente
$image = imagecreatefromjpeg("certificado.jpg");

//Definições de cores
$titleColor = imagecolorallocate($image, 0,0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

//Padrão: ($variávelImagem, Tamanho, Angulo, X, Y, Cor, Filename da Fonte, String;
imagettftext($image, 32, 0,320, 250, $titleColor, $bevan,"Certificado");
imagettftext($image, 32,0, 375, 350, $titleColor , $playball, "Gabriel Henrique");
imagestring($image,3 , 440, 370, utf8_decode("Concluído em: ". date("d/m/Y")), $titleColor);

header("Content-Type: image/jpeg");

//Configura mais coisas do arquivo no padrão:
//(Variável de imagem, filename do arquivo, qualidade de 1 a 100
imagejpeg($image);

imagedestroy($image);
?>
