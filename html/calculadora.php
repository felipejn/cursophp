<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Calculadora de Somas</title>
</head>
<body style="background-color:lightblue;">
<h1>Calculadora de Somas</h1>
<form action="calculadora.php" method="GET">
    <h4>Entre com valores inteiros</h4>
    <input type="number" name="va">
    <b> + </b> <input type="number" name="vb">
    <input type="submit" value="SOMAR"><br /><br />
</form>
</body>
</html>

<?php
//Início PHP
if (isset($_GET)) {
    $soma = NULL;
    foreach ($_GET as $key => $value) {
        $soma += $value;
    }
    if (isset($soma)){
        echo "<h3>Resultado = ".$soma."</h3>";
    }
}
// Fim PHP
?>
