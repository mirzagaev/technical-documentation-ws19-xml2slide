<?php
// erhält als GET-Parameter den Dokumentennamen
$filename = $_GET["f"];
$file = "xml/".$filename;

// Header-Daten für die DownloadDatei definieren
header('Content-type: text/xml');
header('Content-Disposition: attachment; filename="'.$filename.'"');

flush();
readfile($file);
exit();
?>