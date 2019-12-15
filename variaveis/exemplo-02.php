<?php

$nome = "Felipe";

$sobrenome = "Nascimento";

$nomeCompleto = $nome." ".$sobrenome;

echo $nomeCompleto;

exit;

echo "<br/>";

unset($nome);

if (isset($nome)) {
  echo $nome;
}

?>
