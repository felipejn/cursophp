<?php

class Cadastro {

    private $nomeCompleto;
    private $login;
    private $pass;

    public function getNomeCompleto() {

        return $this->nomeCompleto;

    }

    public function setNomeCompleto($nomeCompleto) {

        // SET com tratamento de string
        $this->nomeCompleto = ucwords(strtolower($nomeCompleto));

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

class MostraCadastro extends Cadastro {

    public function verCadastro() {

        echo "NOVO CADASTRO<br/>";
        echo "Nome Completo: ".$this->getNomeCompleto()."<br/>";
        echo "Login: ".$this->getLogin()."<br/>";
        echo "Password: ".$this->getPass()."<br/>";

    }

}

$novo = new MostraCadastro;
$novo->setNomeCompleto("felipe NASCIMENTO"); // string sem tratamento
$novo->setLogin("FELIPEJN@GMAIL.COM"); // string sem tratamento
$novo->setPass("123456");

$novo->verCadastro();

?>
