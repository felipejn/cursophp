<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>***TEST***</title>
</head>
<body style="background-color:lightblue;">
<h1>*** TEST ***</h1>
<form>
    <b> Name: </b> <input type="text" name="name"> <br />
    <b> Last Name: </b> <input type="text" name="last_name"> <br />
    <input type="submit" value="Submit">
    <input type="submit" value="Clear">
</form>


<?php // PHP Start
$i = 1;
if (isset($_GET)) {
    $name = NULL;
    foreach ($_GET as $key => $value) {
        $name .= $value;
        if ($i < 2) $name .= " ";
        $i++;
    }
}

if (isset($name)) {
    echo "<h3>".ucwords(strtolower($name))."</h3>";
}

//if (isset($_GET)) {
//    foreach ($_GET as $key => $value) {
//        //$test = $value;
//        if ($value === "Clear") {
//            unset($_GET);
//            unset($name);
//        }
//    }
//}
//PHP END
?>

</body>
</html>
