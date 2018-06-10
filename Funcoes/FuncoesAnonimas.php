<?php
// --== Exemplo 1 ==--
function test($callback) {
    //Processo lento
    $callback();
}

test(function() {
   echo "Terminou!"; 
});

// --== Exemplo 2 ==--
echo "<br><br>";

$fn = function($a) {
    var_dump($a);
};

$fn('oi');
?>
