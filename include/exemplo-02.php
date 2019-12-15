<?php

// include "exemplo-01.php"; // include não obriga existir o arquivo

require_once "exemplo-01.php"; // require obriga existir o arquivo e ele
                            // estar funcionando
require_once "exemplo-01.php"; // require_once inclui apenas uma vez
                                // uma mesma função
$resultado = somar(10,20);

echo $resultado;

?>
