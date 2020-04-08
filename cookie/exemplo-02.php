<?php

// Verifica se $_COOKIE tem valor e gera objeto com informações do cookie
if (isset($_COOKIE["NOME_DO_COOKIE"])) {
    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);
    echo $obj->empresa; // -> Chama info do campo empresa como se fosse atributo
}

?>
