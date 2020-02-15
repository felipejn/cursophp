<?php

function autoloader($nomeclasse) {

    var_dump($nomeclasse);
    require_once("$nomeclasse.php");

}

spl_autoload_register("autoloader");

$carro = new DelRey();

$carro->acelerar(80);

?>
