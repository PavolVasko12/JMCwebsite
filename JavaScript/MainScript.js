$(document).ready(function(){

	$("#hamburgerMenuHolder").on('click', function(){
		$(this).toggleClass("change");
		$("#nav").toggleClass("navToggle");
	});


}());