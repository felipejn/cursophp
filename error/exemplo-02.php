<?php

// Nega a exibição de Notices
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

?>
