$(document).ready(function() { 
  loadIndex();
});

function loadAbout(){
	$("#myCarousel").hide();
	$("#content").load("views/about.html");
	$("#about").css({"color": "#4ca64c","text-shadow": "none !important"});
}

function loadContact(){
	$("#myCarousel").hide();
	$("#content").load("views/contact.html");	
}

function loadIndex(){
	$("#myCarousel").show();
	$("#content").load("views/index.html");
}

