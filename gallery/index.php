<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favhf.ico">
    <title>Our Gallery</title>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/styles.css" rel="stylesheet">
    <!-- Custom Show Images -->
    <link href="../css/lightbox.css" rel="stylesheet">
    <!-- Custom Scroll Down -->
    <link href="../css/scrolling-nav.css" rel="stylesheet">
    <script  src="../js/jquery.min.js"></script>
    <script  src="../js/tiksluscarousel.js"></script>
    <script src="../js/rainbow.min.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.fullscreen.js"></script>
    <script src="../js/jquery.fullscreen.min.js"></script>
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/tiksluscarousel.css" />
    <link rel="stylesheet" href="../css/github.css" />
    <link rel="stylesheet" href="../css/animate.css" />
        
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
    <!-- Custom Fonts 
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Plugin de jQuey para hacer las imagenes adaptables a cualquier tamaño de patalla
<div id="headcover"></div>
-->
<div class="container-fluid">
    <!-- Navigation -->
    <nav id="navi" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span id="menu" class="icon-bar"></span>
                    <span id="menu" class="icon-bar"></span>
                    <span id="menu" class="icon-bar"></span>
                </button>
                <a class="mouseHover navbar-brand" href="../" style="padding-top:0px;">
                    <div class="logo_header">
                        <img class="img-responsive" src="../img/logos/logo_xs.png" > 
                    </div>
                     <a href="../" class="hfarm navbar-brand">
                     <b>Heirloom</b>Farms</a>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse .navbar-collapse.in" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" >
                    <li><a class="mouseHover navbar-link " href="../">Home</a></li>
                    <li><a class="mouseHover navbar-link" id="about" href="../about">About Us</a></li>
                    <li><a class="mouseHover navbar-link" id="products" href="../products/">Our Products</a></li>
                    <li><a class="mouseHover navbar-link" href="../gallery/">Gallery</a></li>
                    <li><a class="mouseHover navbar-link" href="../contact/">Contact</a></li>
                    <li><a class="mouseHover navbar-link"><img class="facebook-logo" src="../img/images/facebook-logo.png"></a></li>
                    <li><a class="mouseHover navbar-link"><img class="instagram-logo" src="../img/images/instagram-logo.png"></a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>
    <!-- Header Carousel 
    <div class="container-fluid" id="coverabout">
        <img src="img/s1.jpg" class="img-responsive">
    </div>
    -->
    <!-- Page Content -->

<div id="home1" class="container-fluid">
    <div class="container " id="content">
    

<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">Gallery</h1>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Gallery</li>
        </ol>
    </div>
</div>

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
            jQuery.get( "img.php", { name: 'products' } ).done(function( data ) { 
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
        jQuery.get("img.php", { name: name } ).done(function( data ) { 
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
                      
    </div>
</div>
<div class="container-fluid footer">
<footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Heirloom Farms 2016</p>
                </div>
            </div>
</footer>
</div>
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.backstretch.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.js"></script>
    <!-- Script to show images -->
    <script src="../js/lightbox.min.js"></script>
    <!-- Effect scroll down -->
    <script src="../js/scrolling-nav.js"></script>
    <!-- Script to manipulate views -->
    <script src="../js/views.js"></script>
    <!-- Script to Activate the Carousel -->

    <script type="text/javascript">
        $(document).ready(function() { 
            $(window).scroll(function() {$("#navi").css({"background": "#881B1F", });});
            $("#about").css({"color": "#4ca64c","text-shadow": "none !important"});
            $("#home1").css({"padding-top": "80px"});
            $("#navi").css({"background": "#881B1F"});
        });
    </script>

</body>
</html>