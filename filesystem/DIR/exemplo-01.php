<?php

$name = "images";

// Verifica se existe o diretório
if (!is_dir($name)) {
    mkdir($name);
    echo "Diretório $name criado com sucesso!";
} else {
    rmdir($name);
    echo "Já existe o diretório: $name. Foi removido!";
}

?>
