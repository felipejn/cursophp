<?php

if (!is_dir("images")) mkdir("images");

// Lê e apaga arquivos da pasta
if (count(scandir("images")) >= 3) { // -> IF feito por mim
    foreach (scandir("images") as $item) {
        if (!in_array($item, array(".",".."))) {
            // unlink() apaga arquivos
            unlink("images/".$item);
            echo "Arquivo ".$item." apagado!<br/>";

        }
    }
    echo "Procedimento finalizado!";
} else {
    echo "A pasta está vazia!";
}

?>
