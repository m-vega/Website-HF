<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favhf.ico">
    <title>Contact Us</title>
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
                    <li><a class="mouseHover navbar-link" id="about" href="/">About Us</a></li>
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
                <h1 class="page-header">Contact Us</h1>
                <ol class="breadcrumb">
                    <li><a href="../">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
            <!-- Map Column -->
            <div class="row">
            <div class="container-fluid  col-md-8" id="map" style="height: 350px;">
                <!-- Embedded Google Map -->
                
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    <strong>Address</strong>:
                    5 de Mayo, Parcela No. 226<br>Ensenada, Mexico<br>
                </p>
                <p>
                    <strong>Phone</strong>:
                    (619) 520-1061
                    <br>(646) 117-4656</p>
                <p> 
                    <strong>E-mail</strong>:
                    <a href="mailto:ws@heirloom.mx">ws@heirloom.mx</a>
                </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        <!-- /.row -->
        </div>
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-10">
                <hr>
                <h3>Do you have a question? Feel free to message us! We will contact you shortly.</h3>
                <form method="post" action="sendmail.php" name="sentcommens" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Company Name:</label>
                            <input type="text" class="form-control" name="company" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>
<script>
jQuery("#cover").backstretch("img/covermap.png");
</script>

    <script>
    var latlon;
    function initMap() {
        var latlng = {lat:31.687018,lng:-116.5829936};
        var map = new google.maps.Map(document.getElementById('map'), {
            center: latlng,
            scrollwheel: true,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.SATELLITE
        });

        
        latlng = new google.maps.LatLng(31.687018, -116.5829936);
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: "Heirloom Farms",
            animation: google.maps.Animation.DROP
        });
          
      }    
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB83uAunSEPcmGeMS8I3lQMqQVhBATXZ4Y&callback=initMap" id="maps">
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