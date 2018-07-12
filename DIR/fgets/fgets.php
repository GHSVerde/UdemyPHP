<?php
$filename = "../fopen/usuarios.csv";
//Verifica se o arquivo existe
if (file_exists($filename)) {
    //Abre em modo leitura
    $file = fopen($filename, "r");

    //Separa em um array (explode) cada registro da primeira linha
    $headers = explode(",",fgets($file));
    //Array associativo com todos os dados do CSV
    $data = array();

    //Enquanto o fgets($file) ler alguma linha, continuará rodando
    while ($row = fgets($file)) {
        //Separa em um array todos os registros das linhas
        $rowData = explode(",", $row);
        $linha = array();

        //Começando em zero, conta a quantidade no header
        for ($i = 0; $i < count($headers); $i++) {
            //Para cada registro do header, pega um registro do header e atribui um valor real
            //Assumindo assim, um array associativo
            $linha[$headers[$i]] = $rowData[$i];
        }
        //Coloca os valores associativos em um array
        array_push($data, $linha);
    }

    echo json_encode($data);
    fclose($file);

} else {
    echo "Arquivo não existe";
}

?>
