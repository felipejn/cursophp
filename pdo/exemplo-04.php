<?php // Apagando dados

$conn = new PDO("mysql: host=localhost; dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Apagado idusuario".$id." OK";

?>
