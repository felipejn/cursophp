<?php               // JSON: Java Script Object Notation
                    // Facilita interoperabilidade de sistemas

$pessoas = array();

array_push($pessoas, array( // array_push adiciona info nas arrays
    'nome' => 'João',       // Aqui tem uma array dentro de uma array
    'idade' => '20'
));

array_push($pessoas, array(
    'nome' => 'Glaucio',
    'idade' => '25'
));

echo json_encode($pessoas);

?>
