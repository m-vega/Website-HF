$(document).ready(function() { 
	loadHome();
	$("#cover").hide();
});

function loadHome(){
	$("#myCarousel").show();
	$("#cover").hide();
	$("#content").load("views/home.php");
}

function loadAbout(){
	$("#myCarousel").hide();
	$("#cover").show();
	$("#content").load("views/about.html");
//	$("#about").css({"color": "#4ca64c","text-shadow": "none !important"});
}


function loadProducts(){
	$("#myCarousel").hide();
	$("#cover").show();
	$("#content").load("#");	
}

function loadContact(){
	$("#myCarousel").hide();
	$("#covercontact").show();
	$("#content").load("views/contact.html");	
}

function loadGallery(){
	$("#myCarousel").hide();
	$("#cover").show();
	$("#content").load("views/gallery.html");
}

