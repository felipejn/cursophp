<?php

// Define imagem que vai ser usado para criar nova imagem
$image = imagecreatefromjpeg("certificado.jpg");

// Define cores RGB
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

// Define o que vai ser escrito
imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);

// utf8_decode() usada para exibir a palavra com acento
imagestring($image, 3, 440, 370, utf8_decode("Concluído em ").date("d/m/Y"), $titleColor);

// Define o tipo de imagem que será lida
header("Content-type: image/jpeg");

/* Renderiza a imagem que foi definida. Parametro foi usado para não exibir
a imagem e definir nome do arquivo a ser criado na pasta.
imagejpeg($var, filename, % de qualidade) */
imagejpeg($image, "certificado-".date("d-m-Y").".jpg", 50);

// Libera a variável da memória
imagedestroy($image);

?>
