<?php
//Preenchimento de dados Simples
$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 30
));

array_push($pessoas, array(
    'nome' => 'Glaucio',
    'idade' => 25
));

echo json_encode($pessoas,JSON_UNESCAPED_UNICODE);

//JSON Decode
echo "<br><br>";
$JSON = '[{"nome":"João","idade":30},{"nome":"Glaucio","idade":25}]';
$data = json_decode($JSON, true);

var_dump($data);
?>
