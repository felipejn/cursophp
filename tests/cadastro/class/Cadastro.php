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

    public function novoCadastro() {
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

?>
