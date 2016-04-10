var mailboxHandler = (function (obj) {
	var editor = document.getElementById("input_textarea");
	var editorHTML = editor.innerHTML;
	var starting_place = 0;
	var ending_place = 0;
	if(obj.getAttribute("name") !== 'font_sizing_mailbox') {
		if(editor.selectionStart) starting_place = editor.selectionStart;
		if(editor.selectionEnd) ending_place = editor.selectionEnd;
		if(starting_place !== ending_place) {
			if(obj.getAttribute("name") === 'mailbox_bold') {
				changeTextToBold(obj);
			} else if(obj.getAttribute("name") === 'mailbox_italic') {
				changeTextToItalic(obj);
			} else if(obj.getAttribute("name") === 'mailbox_underline') {
				changeTextToUnderline(obj);
			} else {
				console.log("you have dun goofed");
			}
		}
	}
	function changeTextToBold(obj) {
		var editorCharArray = editorHTML.split("");
		editorCharArray.splice(ending_place, 0, "</strong>");
        editorCharArray.splice(starting_place, 0, "<strong>"); //must do End first
        editorHTML = editorCharArray.join("");
        editor.innerHTML = editorHTML;
	}
	function changeTextToItalic(obj) {
		var editorCharArray = editorHTML.split("");
		editorCharArray.splice(ending_place, 0, "</em>");
        editorCharArray.splice(starting_place, 0, "<em>"); //must do End first
        editorHTML = editorCharArray.join("");
        editor.innerHTML = editorHTML;
	}
	function changeTextToUnderline(obj) {
		var editorCharArray = editorHTML.split("");
		editorCharArray.splice(ending_place, 0, "</u>");
        editorCharArray.splice(starting_place, 0, "<u>"); //must do End first
        editorHTML = editorCharArray.join("");
        editor.innerHTML = editorHTML;
	}
}); 
