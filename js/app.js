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

var quill = new Quill('#editor', {
	modules: {
		toolbar: toolbarOptions
	},
	theme: 'snow'
});

// ADD NEW SLIDE
$("#btnaddnewslide").on('click', function(){
	let first_TR = $(".folientabelle tbody tr:first").closest("tr").clone();
	$(".folientabelle tbody").append(first_TR);
	return false;
});

// DUPLICATE SLIDE
$(".folientabelle").on("click", "#duplicateslide", function() {
	let current_TR = $(this).closest("tr").clone();
	$(".folientabelle tbody").append(current_TR);
	return false;
});

// DELETE SLIDE
$(".folientabelle").on("click", "#removeslide", function() {
	if ( confirm("Sicher löschen?") ) {
		$(this).closest("tr").remove();
	}
	return false;
});