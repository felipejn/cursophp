<?php

$pessoa = array(
    'nome' => 'Felipe',
    'idade' => 20
);

foreach ($pessoa as &$value) { // Usando & para referencia (altera variavel
                                // fora do escopo)
    if (gettype($value) === 'integer') $value += 10;

    echo $value.'<br>';
}

print_r($pessoa);

?>
