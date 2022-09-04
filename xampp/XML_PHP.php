<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("carta.xml") or die("Error: Cannot create object");
foreach($xml->children() as $tipo) {
        echo $tipo->nombre . ", ";
        echo $tipo->precio . ", ";
        echo $tipo->descripcion . ", ";
        echo $tipo->calorias . "<br>";
}
?>

</body>
</html>