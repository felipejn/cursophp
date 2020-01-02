<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Calculadora de Somas da Lara</title>
</head>
<body style="background-color:lightblue;">
<h1>Calculadora de Somas da Lara</h1>
<form>
    <input type="text" name="va">
    <b> + </b> <input type="text" name="vb">
    <input type="submit" value="SOMAR"><br /><br />
</form>
</body>
</html>

<?php
//Início PHP
if (isset($_GET)) {
    $soma = NULL;
    foreach ($_GET as $key => $value) {
        $soma .= $value;
    }
    if (isset($soma)){
        echo "<h3>Resultado = ".$soma."</h3>";
    }
}
// Fim PHP
?>
