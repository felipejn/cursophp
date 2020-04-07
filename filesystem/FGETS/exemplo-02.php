<?php

$filename = "original.png";

// Converte dados do arquivo de imagem em Base64
$base64 = base64_encode(file_get_contents($filename));

// Função que examina arquivo e retorna qual o tipo
$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($filename);
$base64encode =  "data:".$mimetype.";base64,".$base64;

?>
<!-- HTML -->
<!--<a href="<?=$base64encode?>">Link Para Imagem</a> ISSO AQUI NÃO FUNCIONOU-->
<!-- Exibe a imagem na tela através do código -->
<img src="<?=$base64encode?>">
