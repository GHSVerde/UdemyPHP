<?php

$pasta = "mover";
$pastaII = "uploads";
if (!is_dir($pasta)) mkdir($pasta);
if (!is_dir($pastaII)) mkdir($pastaII);

foreach (scandir($pastaII) as $file) {
    rename($pastaII.DIRECTORY_SEPARATOR.$file, $pasta.DIRECTORY_SEPARATOR.$file);

}

?>