<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;
    private $comb;

    public function getModelo() { // MODELO

        return $this->modelo;

    }

    public function setModelo($modelo) {

        $this->modelo = $modelo;

    }

    public function getMotor():float { // MOTOR (variavel tratada para float)

        return $this->motor;

    }

    public function setMotor($motor) {

        $this->motor = $motor;

    }

    public function getAno():int { // (variavel tratada para int)

        return $this->ano;

    }

    public function setAno($ano) {

        $this->ano = $ano;

    }

    public function getComb() {

        return $this->comb;

    }

    public function setComb($gilberto) {

        $this->comb = $gilberto;

    }

    public function exibir() {

        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno(),
            "combustível"=>$this->getComb()
        );

    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");
$gol->setComb("Gasolina");

$carro = json_encode($gol->exibir());

print $carro;

?>
