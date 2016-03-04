$(document).ready(function() { 
	loadHome();
	$("#headcover").show();
	$('.slidercontent').show();
});

function loadHome(){
	$("#home1").css({"padding-top": "0px"});
	$("#navi").css({"background": "transparent"});
	$("#myCarousel").show();
	$('.slidercontent').show();
	$("#headcover").show();
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
	$('.slidercontent').hide();
	$("#headcover").hide();
	$("#content").load("views/about.html");
	$(window).scroll(function() {$(".navbar-fixed-top").addClass("top-nav-collapse");});
	$("#about").css({"color": "#4ca64c","text-shadow": "none !important"});
	$("#home1").css({"padding-top": "100px"});
	$("#navi").css({"background": "#881B1F"});
}

function loadProducts(){
	$("#myCarousel").hide();
	$('.slidercontent').hide();
	$("#headcover").hide();
	$("#content").load("views/products.html");
	$("#home1").css({"padding-top": "100px"});
	$(window).scroll(function() {$(".navbar-fixed-top").addClass("top-nav-collapse");});
	$("#navi").css({"background": "#881B1F"});	
}

function loadContact(){
	$("#myCarousel").hide();
	$('.slidercontent').hide();
	$("#headcover").hide();
	$("#content").load("views/contact.html");	
	$(window).scroll(function() {$(".navbar-fixed-top").addClass("top-nav-collapse");});
	$("#home1").css({"padding-top": "100px"});
	$("#navi").css({"background": "#881B1F"});
}

function loadGallery(){
  $("#myCarousel").hide();
  $('.slidercontent').hide();
  $("#headcover").hide();
  $("#content").load("views/gallery.php");	
  $(window).scroll(function() {$(".navbar-fixed-top").addClass("top-nav-collapse");});
  $("#home1").css({"padding-top": "100px"});
  $("#navi").css({"background": "#881B1F"});
}


