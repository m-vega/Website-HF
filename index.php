<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="favhf.ico">
    <title>Heirloom Farms</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <!-- Custom Show Images -->
    <link href="css/lightbox.css" rel="stylesheet">
    <!-- Custom Scroll Down -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
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
<div class="container-fluid slidercontent">
<center>
         <div id="myCarousel" class="Container_Carousel carrusel">
            <div id="carousel-1" class="carousel slide" data-ride="carousel">
                <!--Indicadores-->
                <ol  class="carousel-indicators">
                    <?php
                    $nombredir = 'slider';
                    $num=0;
                    if (file_exists("img/".$nombredir)) {
                        $dir = opendir("img/".$nombredir);
                        $count = 1;
                    while ($archivo = readdir($dir)) {
                        if (!is_dir($archivo)) {
                            if($count != 0){
                                if($count<=1){
                                    echo"
                                        <li data-target=\"#carousel-1\" data-slide-to=\"0\" class=\"active\"></li>
                                        ";
                                }else{
                                    $num=$count-1;
                                    echo"
                                        <li data-target=\"#carousel-1\" data-slide-to=\"$num\"></li>
                                        ";
                                    }
                                }
                             $count++;
                            }
                        } 
                    }
                ?>
                </ol>
                <!--Contenedor de los Slides-->
                <div class="carousel-inner" role="listbox">
                    
                <?php
                    $nombredir = 'slider';
                    if (file_exists("img/".$nombredir)) {
                        $dir = opendir("img/".$nombredir);
                        $count = 1;
                    while ($archivo = readdir($dir)) {
                        if (!is_dir($archivo)) {
                            if($count != 0){
                                $count++;
                                if($count<=2){
                                    echo"
                                        <div class=\"item active\">
                                        <img id=\"imgca\" src=\"img/slider/$archivo\" class=\"img-responsive\">
                                        <div class=\"carousel-caption hidden-xs\">
                                        </div>
                                        </div>
                                        ";
                                }else{
                                    echo"
                                        <div class=\"item\">
                                        <img id=\"imgca\" src=\"img/slider/$archivo\" class=\"img-responsive\">
                                        <div class=\"carousel-caption hidden-xs\">
                                        </div>
                                        </div>
                                        ";
                                    }
                                }
                            }
                        } 
                    }
                ?>

                    <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev" style="height: 100% !important; background: none !important;">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next" style="height: 100% !important; background: none !important;">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
        </center>
</div>
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
                <a class="mouseHover navbar-brand" onclick="loadHome();" style="padding-top:0px;">
                    <div class="logo_header">
                        <img class="img-responsive" src="img/logos/logo_xs.png" > 
                    </div>
                     <a onclick="loadHome();" class="hfarm navbar-brand">
                     <b>Heirloom</b>Farms</a>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse .navbar-collapse.in" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" >
                    <li><a class="mouseHover navbar-link " onclick="loadHome();">Home</a></li>
                    <li><a class="mouseHover navbar-link" id="about" onclick="loadAbout();">About Us</a></li>
                    <li><a class="mouseHover navbar-link" id="products" onclick="loadProducts();">Our Products</a></li>
                    <li><a class="mouseHover navbar-link" onclick="loadGallery();">Gallery</a></li>
                    <li><a class="mouseHover navbar-link" onclick="loadContact();">Contact</a></li>
                    <li><a class="mouseHover navbar-link"><img class="facebook-logo" src="img/images/facebook-logo.png"></a></li>
                    <li><a class="mouseHover navbar-link"><img class="instagram-logo" src="img/images/instagram-logo.png"></a></li>
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
            <!-- Dynamic content from views folder -->
    </div>
</div>
<div class="container-fluid footer">
<footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Heirloom Farms 2015</p>
                </div>
            </div>
</footer>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>
    <!-- Script to show images -->
    <script src="js/lightbox.min.js"></script>
    <!-- Effect scroll down -->
    <script src="js/scrolling-nav.js"></script>
    <!-- Script to manipulate views -->
    <script src="js/views.js"></script>
    <!-- Script to Activate the Carousel -->


    <script>
        $(document).on('click','.navbar-collapse.in',function(e) {
        if( $(e.target).is('a') ) {
            $(this).collapse('hide');
        }
        });

    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

<script>
 jQuery(".slidercontent").backstretch("img/bkgslider.jpg");
/*jQuery(".slidercontent").backstretch([
        "img/bkgslider.jpg",
    ], {duration: 2000, fade: 1200});*/
</script>

</body>
</html>