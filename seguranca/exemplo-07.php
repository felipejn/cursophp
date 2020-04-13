<!-- Prevenção contra SSL e PHP Session Hijacking - Ataque à sessões
Para prevenir esse tipo de ataque pode-se usar HTTPS ou criar novos ids de sessão -->

<?php

session_start();

// Depois de verificar login e senha, reinicie o ID da sessão
session_destroy();

session_start();

// Gera novo id de sessão a cada carregamento da página
session_regenerate_id();

echo session_id();

?>