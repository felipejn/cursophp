<?php

require_once("config.php");

echo session_save_path(); // diretorio onde fica salvo o id

echo "<br>";

var_dump(session_status());

echo "<br>";


switch(session_status()){

    case PHP_SESSION_DISABLED;
    echo "Sessão desabilitada.";
    break;

    case PHP_SESSION_NONE;
    echo "Sessão habilitada mas não iniciada.";
    break;

    case PHP_SESSION_ACTIVE;
    echo "Sessão habilitada";
    break;

}

?>
