<!-- Formulário para envio de arquivo em HTML -->
<form method="post" enctype="multipart/form-data">

    <input type="file" name="fileUpload">

    <button type="submit" name="button">Enviar</button>

</form>

<?php

// Verifica se método foi POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $file = $_FILES["fileUpload"];
    if ($file["error"]) {
        throw new \Exception("Error: ".$file["error"]);
    }

    // Verifica se existe e cria pasta para upload
    $dirUploads = "uploads";
    if (!is_dir($dirUploads)) {
        mkdir($dirUploads);
    }

    // Realiza o upload
    if (move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])) {
        echo "Upload realizado com sucesso!";
    } else {
        throw new \Exception("Não foi possível realizar o upload.");
    }
}

?>
