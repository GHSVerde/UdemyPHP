<?php

//Reaproveitamento da conexão
$con = new mysqli("localhost", "root", "KaGa0611", "dbphp7");
if ($con->connect_error) {echo "Erro:".$con->connect_error;}

//Realização de uma query diretamente e armazenando na variável $result
$result = $con->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

//Passando os dados para um array
$data = array();

//While percorre todas as linhas
//$row = $result->fetch_array() passa linha por linha pra variável $row
//Para arrays associativas basta utilizar: $fetch_array(MYSQLI_ASSOC) ou fetch_assoc()

while($row = $result->fetch_array(MYSQLI_ASSOC)){
    //Adiciona ao final do array uma nova array $data o valor atribuido no while ($row)
    array_push($data, $row);
}

//Codifica com json
echo json_encode($data);
?>
