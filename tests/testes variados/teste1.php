<?php

class Sql extends PDO {

    public function __construct() {
        parent::__construct("mysql: host=localhost;dbname=dbphp7","root","root");
    }

    public function buscaTabela($comandoSql) {
        $stmt = $this->prepare($comandoSql);
        $stmt->execute();
        $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
        echo json_encode($results);
    }

}

$tabela = "tb_usuarios";
$comandoSql = "SELECT * FROM ".$tabela;
$busca = new Sql;
$busca->buscaTabela($comandoSql)

?>
