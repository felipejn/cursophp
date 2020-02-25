<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <style>
            body {
                background-color: gray;
                background-image: url("background.jpeg");
                background-blend-mode: lighten;
            }

            .cadastro {
                font-family: arial;
                position: relative;
                top: 100px;
                left: 430px;
                background-color: lightblue;
                width: 300px;
                height: 350px;
                padding: 10px;
                border-style: solid;
                border-width: 2px;
                border-color: black;
                border-radius: 10px;
                text-align: center;
            }

            .btn:hover {
                background-color: lightblue;
                color: white;
            }
        </style>
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
$cad->getCadastro($_POST['nome'],$_POST['login'],$_POST['pass'],$_POST['pass2']);

?>
