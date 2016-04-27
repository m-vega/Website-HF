$(document).ready(function() { 
	$("#home1").css({"padding-top": "0px"});
	$("#navi").css({"background": "transparent"});
	
	
	$(window).scroll(function() {
               if ($(".navbar").offset().top > 50) {
                    $("#navi").css({"background": "#881B1F", "height": "5%"});
                } else if($(window).width() > 768){
                    $("#navi").css({"background": "transparent"});
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
});