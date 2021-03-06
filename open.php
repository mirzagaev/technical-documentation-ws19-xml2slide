<?php
// erhält als GET-Parameter den Dokumentennamen
$filename = $_GET["f"];
$file = "xml/".$filename;

// im Falle fehlender oder fehlerhaften XML-Datei folgt Error...
$xml = simplexml_load_file($file) or die("Error: Cannot read file");

// Auslesen der Inhalte aus XML-Attribute
$document_bgColor = $xml['bgColor'];
$document_type = $xml['type'];

// Auslesen der Inhalte aus XML
$document_title = $xml->titel;
$document_author = $xml->author;
$document_createdate = $xml->createdate;
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- xml: Ausgabe des Titels der Präsentation -->
		<title><? echo $document_title; ?></title>

		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/black.css">
		<link rel="stylesheet" href="css/reveal-custom.css">

		<!-- reveal: Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="css/monokai.css">

		<!-- reveal: Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>
	</head>
	<body>
		<div class="reveal">
			<div class="slides">
				<?php
				// Schleife für den Page-Section und die Ausgabe des Inhalts
				for ($i = 0; $i < count($xml->page); $i++) {
					$page_bgColor = $xml->page[$i]['bgColor'];
					$fragmentContent = $xml->page[$i]->content;

					echo '<section';
						echo ($page_bgColor != '' ? ' data-background="'.$page_bgColor.'"' : '');
					echo '>';
						echo $fragmentContent;
					echo '</section>';
				}
				?>
			</div>
		</div>

		<script src="js/reveal.js"></script>
		<script>
			// REVEAL.js
			// More info about config & dependencies:
			// - https://github.com/hakimel/reveal.js#configuration
			// - https://github.com/hakimel/reveal.js#dependencies
			Reveal.initialize({
				// Display presentation control arrows
				controls: true,

				// Help the user learn the controls by providing hints, for example by
				// bouncing the down arrow when they first encounter a vertical slide
				controlsTutorial: true,

				// Determines where controls appear, "edges" or "bottom-right"
				controlsLayout: 'bottom-right',

				// Visibility rule for backwards navigation arrows; "faded", "hidden"
				// or "visible"
				controlsBackArrows: 'faded',

				// Display a presentation progress bar
				progress: true,

				// Display the page number of the current slide
				slideNumber: false,

				// Add the current slide number to the URL hash so that reloading the
				// page/copying the URL will return you to the same slide
				hash: true,

				// Push each slide change to the browser history. Implies `hash: true`
				history: false,

				// Enable keyboard shortcuts for navigation
				keyboard: true,

				// Enable the slide overview mode
				overview: true,

				// Vertical centering of slides
				center: true,

				// Enables touch navigation on devices with touch input
				touch: true,

				// Loop the presentation
				loop: false,

				// Change the presentation direction to be RTL
				rtl: false,

				// See https://github.com/hakimel/reveal.js/#navigation-mode
				navigationMode: 'default',

				// Randomizes the order of slides each time the presentation loads
				shuffle: false,

				// Turns fragments on and off globally
				fragments: true,

				// Flags whether to include the current fragment in the URL,
				// so that reloading brings you to the same fragment position
				fragmentInURL: false,

				// Flags if the presentation is running in an embedded mode,
				// i.e. contained within a limited portion of the screen
				embedded: false,

				// Flags if we should show a help overlay when the questionmark
				// key is pressed
				help: true,

				// Flags if speaker notes should be visible to all viewers
				showNotes: false,

				// Global override for autoplaying embedded media (video/audio/iframe)
				// - null: Media will only autoplay if data-autoplay is present
				// - true: All media will autoplay, regardless of individual setting
				// - false: No media will autoplay, regardless of individual setting
				autoPlayMedia: null,

				// Global override for preloading lazy-loaded iframes
				// - null: Iframes with data-src AND data-preload will be loaded when within
				//   the viewDistance, iframes with only data-src will be loaded when visible
				// - true: All iframes with data-src will be loaded when within the viewDistance
				// - false: All iframes with data-src will be loaded only when visible
				preloadIframes: null,

				// Number of milliseconds between automatically proceeding to the
				// next slide, disabled when set to 0, this value can be overwritten
				// by using a data-autoslide attribute on your slides
				autoSlide: 0,

				// Stop auto-sliding after user input
				autoSlideStoppable: true,

				// Use this method for navigation when auto-sliding
				autoSlideMethod: Reveal.navigateNext,

				// Specify the average time in seconds that you think you will spend
				// presenting each slide. This is used to show a pacing timer in the
				// speaker view
				defaultTiming: 120,

				// Enable slide navigation via mouse wheel
				mouseWheel: false,

				// Hide cursor if inactive
				hideInactiveCursor: true,

				// Time before the cursor is hidden (in ms)
				hideCursorTime: 5000,

				// Hides the address bar on mobile devices
				hideAddressBar: true,

				// Opens links in an iframe preview overlay
				// Add `data-preview-link` and `data-preview-link="false"` to customise each link
				// individually
				previewLinks: false,

				// Transition style
				transition: 'slide', // none/fade/slide/convex/concave/zoom

				// Transition speed
				transitionSpeed: 'default', // default/fast/slow

				// Transition style for full page slide backgrounds
				backgroundTransition: 'fade', // none/fade/slide/convex/concave/zoom

				// Number of slides away from the current that are visible
				viewDistance: 3,

				// Parallax background image
				parallaxBackgroundImage: '', // e.g. "'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg'"

				// Parallax background size
				parallaxBackgroundSize: '', // CSS syntax, e.g. "2100px 900px"

				// Number of pixels to move the parallax background per slide
				// - Calculated automatically unless specified
				// - Set to 0 to disable movement along an axis
				parallaxBackgroundHorizontal: null,
				parallaxBackgroundVertical: null,

				// The display mode that will be used to show slides
				display: 'block',
				dependencies: [
					{ src: 'js/plugin/markdown/marked.js' },
					{ src: 'js/plugin/markdown/markdown.js' },
					{ src: 'js/plugin/notes/notes.js', async: true },
					{ src: 'js/plugin/highlight/highlight.js', async: true }
				]
			});
		</script>
	</body>
</html>