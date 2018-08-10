$(document).ready(function(){

	$("#ddmenu").hide();
	$("#bgrey").hide();
	$("#menubar").click(function (){
		if ($("#ddmenu").is(":hidden")) {
			$("#ddmenu").slideDown("slow");
			$("#bgrey").fadeIn();
		} else{
			$("#ddmenu").slideUp("slow");	
			$("#bgrey").fadeOut();
		}
	});
});