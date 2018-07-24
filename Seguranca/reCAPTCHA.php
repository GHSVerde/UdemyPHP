<?php

$sitekey = "6LfOF2YUAAAAAGa-R6p6JE4Q3Zss8wKIZs5w0p5K";


?>


<form action="cadastrar.php" method="post">
    <input type="email" name="inputEmail">
    <div class="g-recaptcha" data-sitekey="<?= $sitekey ?>"></div>
    <button type="submit">Enviar</button>
</form>

<script src='https://www.google.com/recaptcha/api.js'></script>