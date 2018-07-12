<?php
//Retorna um array com todos os nomes dos arquivos nos diretórios
$images = scandir("images");
$data = array();

foreach($images as $img) {
    if (!in_array($img, array(".", ".."))) {
        $filename = "images".DIRECTORY_SEPARATOR.$img;
        $info = pathinfo($filename);//Retorna um array de informações
        $info["size"] = filesize($filename);//Retorna o tamanho do arquivo
        $info["modified"] = date("d/m/y H:i:s", filemtime($filename)); // Retorna a ultima modificação
        $info["url"] = str_replace("\\","/","http://localhost/Aulas%20PHP/DIR/".$filename);
        array_push($data, $info);
    }
}

echo json_encode($data);
?>
