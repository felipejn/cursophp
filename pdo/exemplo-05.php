<?php // Transações (Transactions)

$conn = new PDO("mysql: host=localhost; dbname=dbphp7", "root", "root");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 3;

$stmt->execute(array($id));

//$conn->rollback(); // Cancela transação
$conn->commit(); // Confirma transação

//echo "Delete Cancelado idusuario".$id." OK";
echo "Delete Confirmado idusuario".$id." OK";

?>
