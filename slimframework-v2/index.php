<!--Copiar arquivo ".htaccess" para pasta do index-->

<?php

require_once("vendor/autoload.php");
$app = new \Slim\Slim();

// Rota do index
$app->get("/", function()
{
    echo json_encode(array(
        "date"=>date("d/m/Y"),
        "time"=>date("h:i:s")
    ));
});

// Chama a rota /hello/name via GET
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});
$app->run();

?>
