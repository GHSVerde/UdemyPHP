<?php
//require_once("config.php");

echo session_save_path();

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "Sessão desativada";
        break;
    case PHP_SESSION_NONE:
        echo "Sessão habilitada mas não inicializada";
        break;
    case PHP_SESSION_ACTIVE:
        echo "Sessão Inicializada";
        break;
    default:
        break;
}
?>
