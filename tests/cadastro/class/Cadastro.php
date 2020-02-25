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

    public function getCadastro($n,$l,$p,$p2) {

        if (isset($n) && (!empty($n))) {
            $nome = $n;
        }
        // Validação do Login
        if (isset($l) && (!empty($l))) {
            $conn = new PDO("mysql: host=localhost;dbname=testes", "root", "root");
            $stmt = $conn->prepare("SELECT login FROM cadastro WHERE login = :login");
            $stmt->bindParam(":login", $l);
            $stmt->execute();
            $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
            $stmt = null;
            $conn = null;
            if (isset($results) && (!empty($results))) {
                echo "<p style=\"color:red\">* Já existe um cadastro com esse email.</p>";
            } else if (isset($results) && (empty($results) == true)){
                $login = $l;
            }
        }
        // Validação da Senha
        if (isset($p) && (!empty($p))) {
            if ($p === $p2) {
                $pass = $p;
            }
            else {
                echo "<p style=\"color:red;\">* Senhas não coincidem.</p>";
            }
        }
        // Valida dados do cadastro e insere no server
        if (isset($nome) && isset($login) && isset($pass)) {
            $this->setNome($nome);
            $this->setLogin($login);
            $this->setPass($pass);
            $this->novoCadastro();
        } else {
            echo "<p>Complete os campos para registrar um novo cliente.</p>";
        }
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
        $stmt = null;
        $conn = null;
        echo "<p>Novo cadastro registrado!</p>";
        echo "<strong>Nome: </strong>".$this->getNome()."<br/>";
        echo "<strong>Email: </strong>".$this->getLogin()."<br/>";
        echo "<strong>Senha: </strong>".$this->getPass()."<br/>";
    }

}

?>
