<?php

class Cadastro {

    private $nome;
    private $email;
    private $senha;

    // GETers
    public function getNome():string {

        return $this->nome;

    }

    public function getEmail():string {

        return $this->email;

    }

    public function getSenha():string {

        return $this->senha;

    }

    // SETers
    public function setNome($nome) {

        $this->nome = $nome;

    }

    public function setEmail($email) {

        $this->email = $email;

    }

    public function setSenha($senha) {

        $this->senha = $senha;

    }

    // RETORNA OBJETO EM STRING/JSON
    public function __toString(){

        // Array com dados do cadastro
        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));

    }

}

?>
