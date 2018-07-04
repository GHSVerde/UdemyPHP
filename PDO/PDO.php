<?php
$con = new PDO("mysql:dbname=dbphp7;host=localhost;","root", "KaGa0611");

//Preaprando e executando a conexão
$stmt = $con->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");
$stmt->execute();

//Atribuindo a Results
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Percorrendo os valores
foreach($results as $row) {//atribui os subarrays ao $row
    foreach ($row as $key => $value){ //Pega o array $row e exibe os valores
        echo "<b>".$key.": </b>".$value."<br>";
    }
    echo "-------------- <br><br>";
}

//Atribuindo a um JSON
$json = json_encode($results);
echo $json;
?>
