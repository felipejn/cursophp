<?php

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados() {

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

$objeto = new Pessoa();

// echo $objeto->nome . "<br/>"; // $nome é público
// echo $objeto->idade . "<br/>"; // Não pode ser acessado por ser protegido. Apenas
                                // quem está na mesma get_declared_classes
// echo $objeto->senha . "<br/>"; // Não pode ser acessado nem por herdeiros
$objeto->verDados();

?>
