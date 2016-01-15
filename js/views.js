$(document).ready(function() { 
	loadHome();
	$("#cover").hide();
});

function loadHome(){
	$("#myCarousel").show();
	$("#cover").hide();
	$("#content").load("views/home.php");
	$(window).scroll(function() {
               if ($(".navbar").offset().top > 50) {
                    $(".navbar-fixed-top").addClass("top-nav-collapse");
                } else{
                    $(".navbar-fixed-top").removeClass("top-nav-collapse");
                }
        });
    
	//jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function() {
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });
}

function loadAbout(){
	$("#myCarousel").hide();
	$("#content").load("views/about.html");
	$(window).scroll(function() {$(".navbar-fixed-top").addClass("top-nav-collapse");});
	//$("#about").css({"color": "#4ca64c","text-shadow": "none !important"});
}

function loadProducts(){
	$("#myCarousel").hide();
	$("#content").load("#");
	$(window).scroll(function() {$(".navbar-fixed-top").addClass("top-nav-collapse");});	
}

function loadContact(){
	$("#myCarousel").hide();
	$("#content").load("views/contact.html");	
	$(window).scroll(function() {$(".navbar-fixed-top").addClass("top-nav-collapse");});
}

function loadGallery(){
	$("#myCarousel").hide();
	$("#content").load("views/gallery.html");
	$(window).scroll(function() {$(".navbar-fixed-top").addClass("top-nav-collapse");});
}

