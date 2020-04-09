<?php // Como gerar um thumbnail

header("Content-type: image/jpeg");

$file = "imagem.jpg";

// Novas dimensões
$new_width = 256;
$new_height = 256;

// Pega informações do array e separa em variáveis diferentes
list($old_width, $old_height) = getimagesize($file);

// Cria nova imagem com 256 bits e dimensões novas
$new_image = imagecreatetruecolor($new_width, $new_height);

// Cria imagem com as dimensões antigas
$old_image = imagecreatefromjpeg($file);

// imagecopyresampled(dst_image, src_image, dst pos x, dst pos y, src pos x, src pos y, dst w, dst h, src w, scr h)
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

// Renderiza imagem
imagejpeg($new_image);

// Elimina variáveis da memória
imagedestroy($old_image);
imagedestroy($new_image);

?>
