<?php

$images = scandir("images");
$data = array();

foreach ($images as $img) {
    if (!in_array($img, array(".",".."))) { // in_array() retorna busca especificada no array
        $filename = "images".DIRECTORY_SEPARATOR.$img;
        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost:8888/DIR/".str_replace("\\","/",$filename);
        array_push($data,$info);
    }
}

echo json_encode($data);

?>
