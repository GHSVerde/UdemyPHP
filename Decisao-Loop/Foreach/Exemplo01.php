<form>
    <input type="text" name="Nome">
    <input type="date" name="Nascimento">
    <input type="submit" name="Ok">
</form>


<?php 
foreach ($_GET as $key => $value) {
    echo "Nome do Campo: " . $key. "<br>";
    echo "Valor do Campo: " . $value . "<br>";
    echo "<hr>";
}
?>
