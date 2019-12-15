<?php

session_id('un9mg2kstl1fp81738fa4sdbmr');

require_once("config.php");

session_regenerate_id(); // gera novo id

echo session_id();

echo "<br>";

var_dump($_SESSION);

?>
