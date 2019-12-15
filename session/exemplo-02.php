<?php // precisa rodar o exemplo-01.php antes para existir
        // a informação
require_once("config.php");

// session_unset($_SESSION["nome"]);

echo $_SESSION["nome"];

session_destroy();

?>
