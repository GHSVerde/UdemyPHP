<?php 
function soma (int ... $valores):string {
    return array_sum($valores);
}

echo soma(4, 5, 6, 7, 8). "<br>";
echo var_dump(soma(4, 5, 6, 7, 8));

?>
