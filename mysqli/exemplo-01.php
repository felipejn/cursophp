<?php

$conn = new mysqli("localhost", "root", "root", "dbphp7");

// Testa a conexão com o servidor
if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;

}

// $stmt: Statement
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

$stmt->bind_param("ss", $login, $pass); // ss = string string para os ?,? acima. Poderia ser
                                        // i para inteiros, etc
$login = "user";
$pass = "12345";

$stmt->execute(); //Executar

//Criar mais usuarios
$login = "user2";
$pass = "123456";

$stmt->execute();

?>
