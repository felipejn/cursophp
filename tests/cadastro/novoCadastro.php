<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <div class="cadastro">
            <form method="post">
                <strong><h2>CADASTRO</h2></strong>
                <label for="nome">Nome: </label><br/>
                <input type="text" id="nome" name="nome"><br/>
                <label for="login">Email: </label><br/>
                <input type="email" id="login" name="login"><br/>
                <label for="pass">Senha: </label><br/>
                <input type="password" id="pass" name="pass"><br/>
                <label for="pass2">Repete senha: </label><br/>
                <input type="password" id="pass2" name="pass2"><br/></h4>
                <input class="btn" type="reset" value="Limpar">
                <input class="btn" type="submit" value="Cadastrar">
            </form>
    </body>

</html>

<?php

include_once("config.php");
$cad = new Cadastro;
$cad->getForm();

?>
