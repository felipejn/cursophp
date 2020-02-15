<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a,$b,$c) { 

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    public function __destruct() { // apaga objeto da memoria

        // var_dump("Destruir");

    }

    public function __toString() { // Converte objeto em String

        return $this->logradouro.", ".$this->numero." - ".$this->cidade;

    }

}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

echo $meuEndereco;

?>
