<form method="post">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>
</form>

<?php

if(isset($_POST['busca'])) {
    echo strip_tags($_POST['busca'], "<strong>") . "<br><br>"; //Rempove Tags
    echo htmlentities($_POST['busca']); //Transforma tags em texto
}

?>