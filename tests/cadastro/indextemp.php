<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <div class="login">
            <form method="post">
                <strong><h2>LOGIN</h2></strong>
                <label for="nome">Digite seu email: </label><br/>
                <input type="email" id="login" name="login"><br/><br/>
                <label for="pass">Senha:</label><br/>
                <input type="password" id="pass" name="pass"><br/><br/>
                <input class="btnLogin" type="submit" value="Avançar">
            </form>
    </body>

</html>

<?php
include_once("config.php");
$login = new Login();
$login->getForm();

?>
