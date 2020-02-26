<?php
$file = "xml/".$_GET["f"];

unlink($file);

header("Location: index.php");
die();
?>