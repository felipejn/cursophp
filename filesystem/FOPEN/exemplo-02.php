<?php

require_once("config.php");
// Consulta dados de usuarios no banco de dados
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

// Gera arquivo CSV com dados da tabela tb_usuarios
$file = fopen("usuarios.csv", "w+");

// Adiciona o "header" com o nome dos campos na tabela gerada
// obs: implode() adiciona string entre valores do array
fwrite($file, implode(",",$headers)."\r\n");

// Adiciona os valores dos campos no arquivo
foreach ($usuarios as $row) {
    $data = array();
    foreach ($row as $key => $value) {
        array_push($data, $value);
    }
    fwrite($file, implode(",", $data)."\r\n");
}

fclose($file);

echo "Arquivo criado!";

?>
