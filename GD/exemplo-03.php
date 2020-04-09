<?php // Carregar fontes TTF

// Define imagem que vai ser usado para criar nova imagem
$image = imagecreatefromjpeg("certificado.jpg");

// Define cores RGB
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

/* Define o que vai ser escrito usando agora TTF
imagettftext($var, fontsize, angle, xpos, ypos, color, fontpath, string) */
imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR.
    "Bevan-Regular.ttf", "CERTIFICADO");

imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR.
    "Playball-Regular.ttf", "Divanei Aparecido");

// utf8_decode() usada para exibir a palavra com acento
imagestring($image, 3, 440, 370, utf8_decode("Concluído em ").date("d/m/Y"), $titleColor);

// Define o tipo de imagem que será lida
header("Content-type: image/jpeg");

/* Renderiza a imagem que foi definida. Parametro foi usado para não exibir
a imagem e definir nome do arquivo a ser criado na pasta.
imagejpeg($var, filename, % de qualidade)*/
//imagejpeg($image, "certificado_exemplo03_".date("d-m-Y").".jpg", 100);
imagejpeg($image);

// Libera a variável da memória
imagedestroy($image);

?>
