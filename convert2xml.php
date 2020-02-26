<?
echo '<pre>'; print_r($_POST); echo '</pre>';

$type = $_POST["type"];
$titel = $_POST["titel"];
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$createdate = date("d.m.Y H:i");
$publicdate = $_POST["publicdate"];
$email = $_POST["email"];

$bgcolor = $_POST["bgcolor"];
$transition = $_POST["transition"];
$folieninhalt = $_POST["folieninhalt"];

// This function create a xml object with element root.
// creating new SimpleXMLElement 
// object from $user 
$xml = new SimpleXMLElement('<DOCUMENT/>'); 

$xml->addAttribute('type', $type);

// Adding child named "institution" 
// and valued "geeksforgeeks" 
$xml->addChild("titel", $titel);
$xml->addChild("author", $vorname.' '.$nachname);
$xml->addChild("createdate", $createdate);
$xml->addChild("publicdate", $publicdate);
$xml->addChild("email", $email);

for ($i = 0; $i < count($bgcolor); $i++) {
    $page = $xml->addChild('page');
    $page->addAttribute('bgColor', $bgcolor[$i]);
    $page->addAttribute('data-transition', $transition[$i]);
    $page->addChild('content', $folieninhalt[$i]);
}

$xml->asXML("xml/CONTENT.xml");
?>