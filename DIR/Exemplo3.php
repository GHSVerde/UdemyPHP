<?php
//Cria o diretório (mkdir) caso ele não exista (!is_dir)
if (!is_dir("images")) mkdir("images");

//para cada item retornado no array de scandir, atribua um $item
foreach(scandir("images") as $item) {
    if(!in_array($item, array(".", ".."))) {
        unlink("images".DIRECTORY_SEPARATOR.$item);
    }
}
?>
