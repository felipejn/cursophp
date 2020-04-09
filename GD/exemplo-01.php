<?php
// Cria imagem com a biblioteca GD - Graphic Design
header("Content-Type: image/png");

// Cria a variável resource com tamanho da imagem
$image = imagecreate(256,256);

// Define as cores RGB
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

// Cria texto na imagem (var, font(1 a 5), x(px), y(px), string, color)
imagestring($image, 5, 60, 120, "Curso de PHP", $red);

// Renderiza a imagem
imagepng($image);

// Apaga a variável resourve
imagedestroy($image);

?>
