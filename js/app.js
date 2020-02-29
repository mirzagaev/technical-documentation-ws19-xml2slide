$(document).foundation();

var toolbarOptions = [
	[{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
	[{ 'header': [1, 2, 3, 4, 5, 6, false] }],
	['bold', 'italic', 'underline', 'strike'],        // toggled buttons
	[{ 'align': [] }],

	[{ 'list': 'ordered'}, { 'list': 'bullet' }],
	[{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript

	[{ 'font': [] }],
	['code-block'],

	['clean']                                         // remove formatting button
];

function initializeEditor(editorid) {
	var quill = new Quill('#'+editorid, {
		modules: {
			toolbar: toolbarOptions
		},
		theme: 'snow'
	});
}

initializeEditor("editor_1");

// ADD NEW SLIDE
$("#btnaddnewslide").on('click', function(){
	let sampleTR = $("table#hiddentbl tr#hiddensamplefolie").clone();
	var rowCount = $('table.folientabelle tr').length+1;
	sampleTR.find("#editor_").attr("id","editor_"+rowCount);
	$(".folientabelle tbody").append(sampleTR);
	initializeEditor("editor_"+rowCount);
	return false;
});

// DUPLICATE SLIDE
$(".folientabelle").on("click", "#duplicateslide", function() {
	let current_TR = $(this).closest("tr").clone();
	$(".folientabelle tbody").append(current_TR);
	return false;
});

// FOLIE LÖSCHEN
$(".folientabelle").on("click", "#removeslide", function() {
	if ( confirm("Sicher löschen?") ) {
		$(this).closest("tr").remove();
	}
	return false;
});

$("form").on("submit", function () {
	$("form .ql-editor").each(function() {
		$("form").append('<textarea class="hiddentextareas" name="folieninhalt[]">'+$(this).html()+'</textarea>');
	});
	setTimeout(function(){
		$(".hiddentextareas").remove();
	}, 2000);
});