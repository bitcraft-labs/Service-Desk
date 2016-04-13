var mailBox_functions = (function () {
	var $text_area = document.getElementById("text_edit");
	if($text_area.getAttribute("data-show") == 0) {
		$text_area.getAttribute("data-show").value = 1;
		$text_area.style.display = "block";
	} else {
		$text_area.getAttribute("data-show").value = 0;
		$text_area.style.display = "none";
	}
}); 