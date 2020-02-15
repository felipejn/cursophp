<?php

// AUTOLOAD
spl_autoload_register(function($nameClass) {
    $nameClass = str_replace('\\', '/', $nameClass);

    // Pasta das classes
    $dirClass = "class";
    // Caminho do arquivo de classe a ser carregado
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
    
    if (file_exists($filename)) {
        require_once($filename);
    }

});

?>
