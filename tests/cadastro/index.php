<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <style>
            body {
                background-color: gray;
                background-image: url("fundo.jpeg");
                background-blend-mode: lighten;
            }
            .cadastro {

                font-family: sans-serif, serif, arial;
                position: relative;
                top: 100px;
                left: 430px;
                background-color: lightblue;
                width: 300px;
                height: 350px;
                padding: 10px;
                border-style: solid;
                border-width: 2px;
                border-color: black;
                border-radius: 10px;
                text-align: center;

            }
        </style>
    </head>
    <body>
    <div class="cadastro">
            <form>
                <strong><h2>CADASTRO</h2></strong>
                <label for="nome">Nome: </label><br/>
                <input type="text" id="nome" name="nome"><br/>
                <label for="login">Email: </label><br/>
                <input type="email" id="login" name="login"><br/>
                <label for="pass">Senha: </label><br/>
                <input type="password" id="pass" name="pass"><br/>
                <label for="pass2">Repete senha: </label><br/>
                <input type="password" id="pass2" name="pass2"><br/></h4>
                <input type="reset" value="Limpar">
                <input type="submit" value="Cadastrar">
            </form>
    </body>
</html>

<?php

require_once("config.php");

if (isset($_GET['nome']) && (!empty($_GET['nome']))) {
    $nome = $_GET['nome'];
}

// Validação do Login
if (isset($_GET['login']) && (!empty($_GET['login']))) {
    $conn = new PDO("mysql: host=localhost;dbname=testes", "root", "root");
    $stmt = $conn->prepare("SELECT login FROM cadastro WHERE login = :login");
    $stmt->bindParam(":login", $_GET['login']);
    $stmt->execute();
    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    if (isset($results) && (!empty($results))) {
        echo "<p style=\"color:red\">* Já existe um cadastro com esse email.</p>";
    } else if (isset($results) && (empty($results) == true)){
        $login = $_GET['login'];
    }
}

// Validação da Senha
if (isset($_GET['pass']) && (!empty($_GET['pass']))) {
    if ($_GET['pass'] === $_GET['pass2']) {
        $pass = $_GET['pass'];
    }
    else {
        echo "<p style=\"color:red;\">* Senhas não coincidem.</p>";
    }
}

// Valida dados do cadastro e insere no server
if (isset($nome) && isset($login) && isset($pass)) {
    $cad = new Cadastro();
    $cad->setNome($nome);
    $cad->setLogin($login);
    $cad->setPass($pass);
    $cad->novoCadastro();
} else {
    echo "<p>Complete os campos para registrar um novo cliente.</p>";
}

?>
