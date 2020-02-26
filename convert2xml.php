<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>XML 2 Slide</title>

		<link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="css/app.css">

		<link href="css/quill.snow.css" rel="stylesheet">
	</head>
	<body>
		<div class="grid-container">
			<h1 class="h1">Digitale Präsentation in wenigen Schritten generieren</h1>
			<div class="row">
				<div class="large-6 columns">
					<div class="callout secondary">
						<h5>Quelldatei in XML-Format</h5>
						<p>It has an easy to override visual style, and is appropriately subdued.</p>
						<a class="button" href="#0">Create Slide</a>
					</div>
				</div>
				<div class="large-6 columns">
					<div class="callout success">
						<h5>This is a secondary callout</h5>
						<p>It has an easy to override visual style, and is appropriately subdued.</p>
						<a class="button" href="#0">Open your XML file</a>
					</div>
				</div>
			</div>
		</div>
		<div class="grid-container">
			<div class="callout secondary">
				<h5>Quelldatei in XML-Format</h5>
				<p>It has an easy to override visual style, and is appropriately subdued.</p>
				<a class="button" href="#0">Download XML</a>
			</div>
			<div class="callout success">
				<h5>This is a secondary callout</h5>
				<p>It has an easy to override visual style, and is appropriately subdued.</p>
				<a class="button" href="#0">Open WebView</a>
			</div>
		</div>
		<? echo '<pre>'; print_r($_POST); echo '</pre>'; ?>

		<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/what-input.js"></script>
		<script src="js/vendor/foundation.js"></script>
		<script src="js/quill.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>