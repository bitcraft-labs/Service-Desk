var modalInformation = (function () {
	function buildForm($title) {
		$.post('modules/end_user_portal/modalInformation.php', {title : $title }, function (data) {	
			if(data == 0) {
				$("#incident-building").hide();
				$("#incident-building-label").hide();
				$("#incident-room-number-label").hide();	
				$("#incident-room-number").hide();
				$("#modal-form").attr("data-ad", 0);
			} else {
				$("#incident-building").show();
				$("#incident-room-number").show();
				$("#incident-building-label").show();
				$("#incident-room-number-label").show();
				$("#modal-form").attr("data-ad", 1);
			}
		});	
	}
	var publicAPI = {
		fillModal : buildForm
	};
	return publicAPI;
})();