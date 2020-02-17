<?php // ALTERANDO BANCO DE DADOS

$conn = new PDO("mysql: host=localhost;dbname=dbphp7","root", "root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Joao";
$password = "qwerty";
$id = 2;

// Ligar as variaveis login e pass com VALUES :LOGIN :PASS
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK";

?>
