<?php

$conn = new mysqli("localhost", "root", "root", "dbphp7");

// Testa a conexão com o servidor
if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;

}

// Executa comando no query do mysql
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    //OU fetch_assoc() {
    array_push($data, $row);

}

echo json_encode($data);

?>
