<?php

class Dados {

    public $nome;

    public function retornoDados() {

        return "O seu nome é ".$this->nome.".";

    }

}

$novo = new Dados();

$novo->nome = "Felipe";
$novo->retornoDados();

echo $novo->retornoDados();

?>
