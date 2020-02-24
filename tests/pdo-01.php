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

class Cadastro {

    private $nome;
    private $login;
    private $pass;

    public function getNome() {

        return $this->nome;

    }

    public function setNome($nome) {

        // SET com tratamento de string
        $this->nome = ucwords(strtolower($nome));

    }

    public function getLogin() {

        return $this->login;

    }

    public function setLogin($login) {

        // SET com tratamento de string
        $this->login = strtolower($login);

    }

    public function getPass() {

        return $this->pass;

    }

    public function setPass($pass) {

        $this->pass = $pass;

    }

}

class NovoCliente extends Cadastro {

    public function cadastrar() {

        $conn = new PDO("mysql: host=localhost;dbname=testes", "root", "root");

        $stmt = $conn->prepare("INSERT INTO cadastro (nome,login,pass) VALUES(:nome,:login,:pass)");

        $n = $this->getNome();
        $l = $this->getLogin();
        $p = $this->getPass();
        $stmt->bindParam(":nome", $n);
        $stmt->bindParam(":login", $l);
        $stmt->bindParam(":pass", $p);

        $stmt->execute();

        echo "<p>Novo cadastro registrado!</p>";
        echo "<strong>Nome: </strong>".$this->getNome()."<br/>";
        echo "<strong>Email: </strong>".$this->getLogin()."<br/>";
        echo "<strong>Senha: </strong>".$this->getPass()."<br/>";

    }

}

class ApagaCliente extends Cadastro {

    public function apagar($id) {

        $conn = new PDO("mysql: host=localhost;dbname=testes","root","root");

        $stmt = $conn->prepare("DELETE FROM cadastro WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute;

    }

}

if (isset($_GET['nome']) && (empty($_GET['nome']) == false)) {
    $nome = $_GET['nome'];
}

if (isset($_GET['login']) && (empty($_GET['login']) == false)) {
    $login = $_GET['login'];
}

if (isset($_GET['pass']) && (empty($_GET['pass']) == false)) {
    if ($_GET['pass'] === $_GET['pass2']) {
        $pass = $_GET['pass'];
    }
    else {
        echo "<p style=\"color:red;\">Senhas não coincidem.</p>";
    }
}

if (isset($nome) && isset($login) && isset($pass)) {

    $novo = new NovoCliente();

    $novo->setNome($nome);
    $novo->setLogin($login);
    $novo->setPass($pass);

    $novo->cadastrar();

} else {

    echo "<p>Complete os campos para registrar um novo cliente.</p>";

}

?>
