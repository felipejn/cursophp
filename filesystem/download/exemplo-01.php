<?php

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";

// Pega conteúdo do arquivo
$content = file_get_contents($link);

// Separa apenas o nome do arquivo do caminho
$parse = parse_url($link);
$basename = basename($parse["path"]);

// Cria o arquivo para download
$file = fopen($basename, "w+"); // --> nome pode ser personalizado
fwrite($file, $content);
fclose($file);

?>

<!-- Início bloco HTML -->
<img src="<?=$basename?>">
