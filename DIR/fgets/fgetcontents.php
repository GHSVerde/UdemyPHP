<?php
$filename = "../images/Logo1.png";

//Converte para binário (file_get_contents) e depois usa o encode para base64
$base64 = base64_encode(file_get_contents($filename));

//Instancia um pedido para pegar o tipo de arquivo
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

//Pega o objeto e solicita o MIME_TYPE solicitado do $filename do arquivo
$mimetype = $fileinfo -> file($filename);

//Concatena tudo junto
$base64Encode = "data:". $mimetype.";base64,".$base64;
?>
<img src="<?=$base64Encode?>"></img>
