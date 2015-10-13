$(document).ready(function() { 
	loadIndex();
	$("#coverabout").hide();

});

function loadAbout(){
	$("#myCarousel").hide();
	$("#coverabout").show();
	$("#content").load("views/about.html");
	$("#about").css({"color": "#4ca64c","text-shadow": "none !important"});
}

function loadContact(){
	$("#myCarousel").hide();
	$("#coverabout").hide();
	$("#content").load("views/contact.html");	
}

function loadIndex(){
	$("#myCarousel").show();
	$("#coverabout").hide();
	$("#content").load("views/index.php");
}

