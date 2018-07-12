<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Enviar</button>
</form>
<?php
//Verifica se há uma requisição POST sendo feita
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Recupera o arquivo
    $file = $_FILES['fileUpload'];

    //Se houver erro ao pegar o arquivo, exibe
    if ($file["error"]) throw new Exception("Error: ". $file['error']);

    //Variável contendo o diretório
    $dirUploads = "uploads";

    //Verifica se existe, se não, cria
    if (!is_dir($dirUploads)) mkdir($dirUploads);

    //Tenta mover, se for realizado, retorna true
    if(move_uploaded_file($file['tmp_name'], $dirUploads . DIRECTORY_SEPARATOR . $file['name'])) {
        echo "Upload feito com sucesso";
    } else {
        throw new Exception("Não foi possível realizar o Upload", 1);
    }
}
?>