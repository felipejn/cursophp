<?php

class Login {
    private $login;

    public function getForm() {
        if (isset($_POST["login"]) && (isset($_POST["pass"]))) {
            $this->getLogin($_POST["login"],$_POST["pass"]);
        } else {
            echo "<p style=\"font-size:16px\">Complete os campos para logar no sistema.</p>";
        }
    }

    public function getLogin($l,$p) {
        if (isset($l) && !empty($l)) {
            $conn = new PDO("mysql: host=localhost;dbname=testes", "root", "root");
            $stmt = $conn->prepare("SELECT login FROM cadastro WHERE login = :login");
            $stmt->bindParam(":login", $l);
            $stmt->execute();
            $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
            $stmt = null;
            $conn = null;
            if (isset($result) && !empty($result)) {
                $busca = implode($result);
                echo $busca;
                if (isset($busca) && (!empty($busca))) {
                    if ($busca === $l) {
                        $l = $login;
                        var_dump($l);
                    } else {
                        echo "<p style=\"color:red\">*Email não encontrado!";
                    }
                }
            }
        }
        if (isset($p) && !empty($p)) {
            $pass = $p;
        }
    }
}

?>
