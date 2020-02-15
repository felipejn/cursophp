<?php

abstract class Animal {

    public function falar() {

        return "Som.";

    }

    public function mover() {

        return "Anda.";

    }

}

class Cachorro extends Animal {

    public function falar() {

        return "Late.";

    }

}

class Gato extends Animal {

    public function falar () {

        return "Mia.";

    }

}

class Passaro extends Animal {

    public function falar() {

        return "Canta.";

    }

    public function mover() {

        return "Voa e " . parent::mover(); // chama a classe pai estaticamente

    }

}

$pluto = new Cachorro();
echo $pluto->falar() . "<br/>"; // polimorfismo do método falar()
echo $pluto->mover() . "<br/>"; // herança da classe Animal
echo "----------------<br/>";
$garfield = new Gato();
echo $garfield->falar() . "<br/>"; // polimorfismo do método falar()
echo $garfield->mover() . "<br/>"; // herança da classe Animal
echo "----------------<br/>";
$ave = new Passaro();
echo $ave->falar() . "<br/>"; // polimorfismo do método falar()
echo $ave->mover() . "<br/>"; // polimorfismo do método mover()

?>
