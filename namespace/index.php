<?php

require_once("config.php");

// Usa o namespace gerado em class/Cliente/Cadastro.php
use Cliente\Cadastro;

// Inicia uma instancia do objeto Cadastro
$cad = new Cadastro();

// Seta valores para os atributos
$cad->setNome("Felipe Nascimento");
$cad->setEmail("felipejn@gmail.com");
$cad->setSenha("123456");

//Printa o retorno do objeto em Json
//echo $cad;

//Executa método em namespace Clientes
$cad->registrarVenda();

?>
