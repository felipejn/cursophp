<?php

$meses = array(
    "Janeiro", "Fevereiro", "Março", "Abril",
    "Maio", "Junho", "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {
    $index++;
    echo "O mês é: ".$mes.". $index<br>";
}

?>
