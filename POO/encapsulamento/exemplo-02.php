<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    protected $senha = "123456";

    public function verDados() {

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

class Programador extends Pessoa {

    public function verDados() {

        echo get_class($this) . "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>"; // Private: Não pode ser acessada pq esta fora da
                                    // classe
    }

}

$objeto = new Programador();

// echo $objeto->nome . "<br/>"; // $nome é público
// echo $objeto->idade . "<br/>"; // Não pode ser acessado por ser protegido. Apenas
                                // quem está na mesma get_declared_classes
// echo $objeto->senha . "<br/>"; // Não pode ser acessado nem por herdeiros
$objeto->verDados();

?>
