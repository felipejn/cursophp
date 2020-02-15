<?php

function incluirClasses($nomeclasse) {

    if (file_exists($nomeclasse.".php") === true) {
        require_once($nomeclasse.".php");
    }

}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeclasse) {
    if (file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeclasse.".php") === true) {
        require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeclasse.".php");
    }
});

$carro = new DelRey;
$carro->acelerar(80);

?>
