<?php

$nome = "Felipe";

function teste() {
    global $nome;
    echo $nome;
    echo "</br>";
}

function teste2() {
    $nome = "Lara";
    echo $nome." agora no teste2";
}

teste();
teste2();

?>
