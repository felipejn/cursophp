<?php

$dir1 = "folder_01";
$dir2 = "folder_02";
$filename = "README.txt";

// Cria as pastas, caso não existam
if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

// Cria e escreve no arquivo
if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
}

/*  Move o arquivo da pasta original para pasta destino.
    Pode apenas renomear se não mudar a pasta*/
rename($dir1 . DIRECTORY_SEPARATOR . $filename, $dir2 . DIRECTORY_SEPARATOR . $filename);

echo "Arquivo ".$filename." movido de ".$dir1." para ".$dir2.".";

?>
