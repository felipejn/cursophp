<?php

// Cria e escreve um arquivo
//$file = fopen("log.txt","w+"); // var do tipo resource pois faz referencia a um
                                // arquivo externo. w+ apaga conteudo e reescreve
$file = fopen("log.txt","a+"); // a+ adiciona informação sem apagar

fwrite($file, date("Y-m-d H:i:s")."\n");

fclose($file);

echo "Dados adicionados com sucesso!";

?>
