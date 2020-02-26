<?php
if (isset($_POST)) {

	// Variablen definieren
	$type = $_POST["type"];
	$titel = $_POST["titel"];
	$vorname = $_POST["vorname"];
	$nachname = $_POST["nachname"];
	$createdate = date("d.m.Y H:i");
	$email = $_POST["email"];
	$bgcolor = $_POST["bgcolor"];
	$transition = $_POST["transition"];
	$folieninhalt = $_POST["folieninhalt"];

	$filename = str_replace(" ", "", $titel)."_".$vorname.$nachname.'_'.date("dmY").".xml";
	$filepath = "xml/".$filename;

	// SimpleXMLElement erstellt ein xml Objekt mit dem ROOT-Element
	$xml = new SimpleXMLElement('<DOCUMENT/>'); 

	$xml->addAttribute('type', $type);

	// der XML-Struktur neue Tags (mit Werten aus dem Array) hinzufügen
	$xml->addChild("titel", $titel);
	$xml->addChild("author", $vorname.' '.$nachname);
	$xml->addChild("createdate", $createdate);
	$xml->addChild("email", $email);

	// Schleife um den FolienInhalt anzulegen
	for ($i = 0; $i < count($bgcolor); $i++) {
	    $page = $xml->addChild('page');
	    $page->addAttribute('bgColor', $bgcolor[$i]);
	    $page->addAttribute('data-transition', $transition[$i]);
	    $page->addChild('content', $folieninhalt[$i]);
	}

	$xml->asXML($filepath);
	
	header('Content-type: text/xml');
	header('Content-Disposition: attachment; filename="'.$filename.'"');
	exit();
}
?>