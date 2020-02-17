<?php // INSERINDO DADOS NO BANCO DE DADOS MYSQL

$conn = new PDO("mysql: host=localhost;dbname=dbphp7","root", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN,:PASSWORD)");

$login = "Jose";
$password = "1234567890";

// Ligar as variaveis login e pass com VALUES :LOGIN :PASS
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK";

?>
