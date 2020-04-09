<?php

function trataNome($name) {

    if (!$name) {
        throw new \Exception("Nenhum nome foi informado.", 1);
    }

    echo ucfirst($name)."<br/>";

}

// Usar em blocos que podem dar problema. Ex: Banco de dados, email,...
try {

    trataNome("João");
    trataNome("");

// Captura o erro e exibe informação
} catch (\Exception $e) {

    echo $e->getMessage();

// Por fim executa bloco finally
} finally {

    echo "<br/>Executou o bloco Try!";

}

?>
