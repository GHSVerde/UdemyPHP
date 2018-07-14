<?php
function trataNome($name) {
    if (!$name) {
        throw new Exception("Nenhum nome foi informado", 1);
    }
}

try {
    trataNome("João");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage()."<br>";
    echo "Excessão está em: " .$e->getFile()." - Linha: ". $e->getLine();
} finally {
    echo "<br><br>Executado!";
}

?>