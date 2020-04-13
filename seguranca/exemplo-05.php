<!-- Prevenção de ataques Cross Site Scripting XSS -->

<form method="post">
	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php  

//$_POST["busca"] = "<a href=\"#\"><strong>Olá!</strong><script>alert(\"Ok!\")</script>";

if (isset($_POST["busca"])) 
{	// strip_tags($var, exceções) para eliminar caracteres de tags
	//echo strip_tags($_POST["busca"], "<strong>"); 
	// Ou htmlentities($var) para transformar em texto as tags html
	echo htmlentities($_POST["busca"]);
}

?>