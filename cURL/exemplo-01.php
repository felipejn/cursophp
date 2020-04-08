<?php

$cep = "88040410";
$link = "https://viacep.com.br/ws/$cep/json/";

// Inicia a biblioteca cURL
$ch = curl_init($link);
// Pede retorno
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// Para funcionar com links https.
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// Executa o acesso a url
$response = curl_exec($ch);
curl_close($ch);

// Recebe dados em json e usa decode com opção true para decodificar em array
$data = json_decode($response, true);

print_r($data);

?>
