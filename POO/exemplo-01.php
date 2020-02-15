<?php

class Pessoa {

    public $nome; // Atributo

    public function falar() { // Método

        return "O meu nome é ".$this->nome; // Referencia a variavel que Esta
                                            // fora do metodo
    }

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

?>
