<?php

// Permissões de Pastas (0:nenhuma,1:execução,2:gravação,3:1+2,4:leitura,5:4+1,6:4+2,7:tudo)

$pasta = "arquivos";
$permissao = "0775";

if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Diretório criado com sucesso!";

?>