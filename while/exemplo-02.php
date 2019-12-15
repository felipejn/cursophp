<?php

$total = 200;
$desconto = 0.9;

do { // Do While executa pelo menos uma vez, mesmo com condiçao falsa
    $total *= $desconto;
} while ($total > 100);

echo $total;

?>
