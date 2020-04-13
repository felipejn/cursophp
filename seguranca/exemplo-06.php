<?php  // Criptografia em PHP

define("SECRET_IV", pack("a16", "senha"));
define("SECRET", pack("a16", "senha"));

$data = ["nome"=>"Hcode"];
echo "Dados Originais: ".print_r($data, true);

$openssl = openssl_encrypt(
	json_encode($data),
	"AES-128-CBC",
	SECRET,
	0, //-> Só encripta e não retona nada
	SECRET_IV
);

echo "<br/>Dados encriptados: ".$openssl;

$string = openssl_decrypt($openssl, "AES-128-CBC", SECRET, 0, SECRET_IV);

echo "<br/>Retorno do decrypt: ". print_r(json_decode($string, true), true);

?>

<!-- Estudar esse exemplo do PHP.net -->
<!-- <?php
//$key should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes
$plaintext = "message to be encrypted";
$cipher = "aes-128-gcm";
if (in_array($cipher, openssl_get_cipher_methods()))
{
    $ivlen = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
    //store $cipher, $iv, and $tag for decryption later
    $original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
    echo $original_plaintext."\n";
}
?> -->