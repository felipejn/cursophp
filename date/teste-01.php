<p>Digite seu nome:</p>

<form action="teste-01.php" method="GET">
    <input type="text" name="nome">
    <input type="submit" value="Confirmar">
</form>

<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

function dia($nome) {
    $semana = mb_strtolower(strftime("%A"));
    $dia = date("j");
    $mes = strtolower(strftime("%B"));
    $ano = date("Y");
    return "Olá ".$nome."! Hoje é ".$semana.", ".$dia." de ".$mes." de ".$ano.".";
}

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
    echo dia($nome);
}

?>
