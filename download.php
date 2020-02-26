<?php
$filename = $_GET["f"];
$file = "xml/".$filename;

header('Content-type: text/xml');
header('Content-Disposition: attachment; filename="'.$filename.'"');

flush();
readfile($file);
exit();
?>