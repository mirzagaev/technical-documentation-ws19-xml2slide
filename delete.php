<?php
// erhält als GET-Parameter den Dokumentennamen
$filename = $_GET["f"];
$file = "xml/".$filename;

// führt anschließend mit unlink() die Löschung der Datei aus
unlink($file);

// Weiterleitung zu der Startseite
header("Location: index.php");
die();
?>