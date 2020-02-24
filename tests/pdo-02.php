<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form>
        <label for="login">Login:</label>
        <input type="email" id="login" name="login">
        <input type="submit" value="Procurar">
        </form>
    </body>
</html>

<?php // Procurar registro no banco de dados

$conn = new PDO("mysql: host=localhost;dbname=testes", "root", "root");

if (isset($_GET['login']) && (empty($_GET['login']) == false)) {
    $l = $_GET['login'];
    echo "<p>Email digitado: ".$l."</p>";
}

if (isset($l)) {
    $stmt = $conn->prepare("SELECT login FROM cadastro WHERE login = :login");
    $stmt->bindParam(":login", $l);
    $stmt->execute();
    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
}

if (isset($results) && (empty($results) == false)) {
    echo "<p style=\"color:red\">Já existe um cadastro com esse email.</p>";
} else if (isset($results) && (empty($results) == true)){
    echo "<p>Email válido.</p>";
}

// var_dump($results);

?>
