<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favhf.ico">
    <title>Heirloom Farms</title>
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

</head>
<body>

<!-- Plugin de jQuey para hacer las imagenes adaptables a cualquier tamaño de patalla
<div id="headcover"></div>
--><div class="container-fluid">
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
                    <li><a class="mouseHover navbar-link" href="../gallery/index.php?name=products">Gallery</a></li>
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
   
    <!-- Page Content -->


<br><br><br><br>
<!-- /.row -->
<!-- GALLERY OF PRODUCTS -->
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">Gallery</h1>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Gallery</li>
        </ol>
    </div>
</div>



<div class="row"><!--Row 1-->
<?php
  $nombredir = $_GET["name"];
  if (file_exists("../img/gallery/".$nombredir)) {
      $dir = opendir("../img/gallery/".$nombredir);
      $count = 1;
     while ($archivo = readdir($dir)) {
          if (!is_dir($archivo)) {
                  if($count != 0){
                  $count++;
                  echo "
                    <div class=\"col-xs-6 col-sm-3 col-md-3 col-lg-3\" >
                     <a href=\"../img/gallery/$nombredir/$archivo\" data-lightbox=\"roadtrip\" data-title=\"HeirloomFarm\" class=\"thumbnail\">
                      <img src=\"../img/gallery/$nombredir/$archivo\" class=\"img-responsive\" style=\"width:400px;\"/>
                      </a>
                    </div>
                  ";
                  }else{  
                    echo "</div> <!--Row 1 End-->";
                    echo "<div class=\"row\">";
                    $count = 0; 
                    }
          }
        } 
  }else{
      echo "<div class=\"alert alert-danger col-lg-7\" role=\"alert\"> <h2>No Hay Productos en el directorio <b>$nombredir</b> =( </h2></div>";
  }
?>
</div>
</div>
<!-- END -->
        
<div class="row" align="Center">
    <div class="col-md-12">
        <nav>
            <ul class="pager">
                <li><a href="index.php?name=facilities"  id="facilities" onclick="">Facilities</a></li>
                <li><a href="index.php?name=products" id="products" onclick="">Products</a></li>
            </ul>
        </nav>
    </div>
</div>

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

        

<script>
 jQuery(".slidercontent").backstretch("../img/bkgslider.jpg");
/*jQuery(".slidercontent").backstretch([
        "img/bkgslider.jpg",
    ], {duration: 2000, fade: 1200});*/
$(document).ready(function() { 
            $(window).scroll(function() {$("#navi").css({"background": "#881B1F", });});
            $("#about").css({"color": "#4ca64c","text-shadow": "none !important"});
            $("#home1").css({"padding-top": "80px"});
            $("#navi").css({"background": "#881B1F","height": "3%"});
});
</script>
</body>
</html>