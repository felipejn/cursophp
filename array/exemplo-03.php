<?php

$pessoas = array();

array_push($pessoas, array( // array_push adiciona info nas arrays
    'nome' => 'João',       // Aqui tem uma array dentro de uma array
    'idade' => '20'
));

array_push($pessoas, array(
    'nome' => 'Glaucio',
    'idade' => '25'
));

//print_r($pessoas); //print_r mostra arrays

print_r($pessoas[0]['idade']); // Assim mostra campos específicos

?>
