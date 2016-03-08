<meta name="apple-mobile-web-app-capable" content="yes">

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">Gallery</h1>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Gallery</li>
        </ol>
    </div>
</div>

<script  src="js/jquery.min.js"></script>
<script  src="js/tiksluscarousel.js"></script>
<script src="js/rainbow.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery.fullscreen.js"></script>
<script src="js/jquery.fullscreen.min.js"></script>
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/tiksluscarousel.css" />
<link rel="stylesheet" href="css/github.css" />
<link rel="stylesheet" href="css/animate.css" />
    
<style>

#wrapper{
margin:auto;
width: 100%;
}
a{
text-decoration:none;
color: cornflowerblue;
}
a:hover{
text-decoration:underline;
}
#product{
border:10px solid #000;
}
</style>

<div id="fullscreen">
<div id="wrapper" align="center">

    <!--Empieza lo de Php-->
    <div id="x">
        <ul id="c">
        
        </ul>
    </div>
    <!--Termina lo de php-->
    
    
    <script language="javascript">
        jQuery.noConflict();
        setTimeout(function(){
            jQuery.get( "views/img.php", { name: 'products' } ).done(function( data ) { 
                data = jQuery.parseJSON( data );
                console.log(data);
                jQuery('#c').html(data.response);
                  $("#x").tiksluscarousel({progressBar:true,width:1200,height:400,nav:'thumbnails',current:1,type:'slide',next:'>>',prev:'<<',navIcons:'false'});
            }).fail( function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
            });
            
        }, 1);
    </script>
    
    

</div>

<div class="row" align="Center">
    <div class="col-md-12">
        <nav>
            <ul class="pager">
                <li><a href="#" id="facilities" onclick="variable($(this).attr('id'))">Facilities</a></li>
                <li><a href="#" id="products" onclick="variable($(this).attr('id'))">Products</a></li>
                <li><a href="#" class="requestfullscreen">Fullscreen</a></li>
            </ul>
        </nav>
    </div>
</div>

</div>

 <hr>

<script language="javascript">
    
    function variable(name) { 
        jQuery.noConflict();
        //document.getElementById("c").innerHTML="";
        document.getElementById("wrapper").innerHTML="<div id=\"x\"><ul id=\"c\"></ul></div>";
        jQuery.get( "views/img.php", { name: name } ).done(function( data ) { 
                data = jQuery.parseJSON( data );
                console.log(data);
                jQuery('#c').html(data.response);
             $("#x").tiksluscarousel({progressBar:true,width:1200,height:400,nav:'thumbnails',current:1,type:'slide',next:'>>',prev:'<<',navIcons:'false'});  
            }).fail( function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
            });
        
                
    }
    
</script>

<script type="text/javascript">
                jQuery.noConflict();
                jQuery(function() {
                    // check native support
                    jQuery('#support').text(jQuery.fullscreen.isNativelySupported() ? 'supports' : 'doesn\'t support');

                    // open in fullscreen
                    jQuery('#fullscreen .requestfullscreen').click(function() {
                        jQuery('#fullscreen').fullscreen();
                        return false;
                    });

                    // exit fullscreen
                    jQuery('#fullscreen .exitfullscreen').click(function() {
                        jQuery.fullscreen.exit();
                        return false;
                    });

                    // document's event
                    jQuery(document).bind('fscreenchange', function(e, state, elem) {
                        // if we currently in fullscreen mode
                        if (jQuery.fullscreen.isFullScreen()) {
                            jQuery('#fullscreen .requestfullscreen').hide();
                            jQuery('#fullscreen .exitfullscreen').show();
                        } else {
                            jQuery('#fullscreen .requestfullscreen').show();
                            jQuery('#fullscreen .exitfullscreen').hide();
                        }

                        jQuery('#state').text(jQuery.fullscreen.isFullScreen() ? '' : 'not');
                    });
                });
</script>
