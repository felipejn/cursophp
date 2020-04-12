<?php  // Proteção contra SQL Injection
// Exemplo de entrada no GET: "id=10 OR 1 = 1 --"

// Se $_GET foi setada, traz id, senão traz 1
$id = (isset($_GET["id"]))?$_GET["id"]:1;

// Solução para evitar SQL Injection
if (!is_numeric($id) || strlen($id) >5)
{
    exit("Pegamos você!");
}

$conn = mysqli_connect("localhost", "root", "root", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

// Transforma resultado em objeto
while ($resultado = mysqli_fetch_object($exec))
{
    //echo $resultado->deslogin . "<br/>";
    var_dump($resultado); //-> Resultados roubados
}

?> 
