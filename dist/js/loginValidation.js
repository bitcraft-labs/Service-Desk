var loginFormValidation = (function() {
	$('#login').submit(function (event) {
		var $username = $('#username').val();
		var $password = $('#password').val();
		var $error = '<div class="alert alert-danger alert-dismissable" id="error">';
		var $formError = "";
		// Handle username validation
		if($username === "") {
			 $formError += "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>" +
                           "<span class='sr-only'>Error:</span>" +
                           " Username cannot be empty<br/>";
		} 
		// Handle password validation
		if($password === "") {
			 $formError += "<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>" +
                           "<span class='sr-only'>Error:</span>" +
                           " Password cannot be empty<br/>";
		} 
		if($formError !== "") {
			event.preventDefault();
            $error += ("<button type='button' class='close' data-dismiss='alert'>x</button>" + $formError);
            $error += '</div>';
            $("#error-container").html($error);
        }
        else {
           event.submit(); 
		}
	});
});