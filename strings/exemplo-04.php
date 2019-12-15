<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, "mãe"); // procura posição

$texto = substr($frase, 0,$q);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto);

echo "<br>";

var_dump($texto2);

?>
