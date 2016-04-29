<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="../img/favhf.ico">
    <title>Oue Products</title>
   <!-- LIBRERIAS CSS-->
    <link href="../librerias.css" rel="stylesheet">
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
            <h1 class="page-header">Our Products</h1>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Our Products</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 product">
            <a href="#myModal" id="openBtn" data-toggle="modal">
                <img class="product-img" src="../img/products/cherry_heirloom.jpg">
                <div class="panel-heading encabezado">
                    <h4>Cherry Heirloom Mix</h4>
                </div>
            </a>
            <div class="modal fade" id="myModal">
    <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 class="modal-title">How do we usually sell our products?</h3>
            </div>
            <div class="modal-body">
              <h5 class="text-center">Cherry Heirloom Mix</h5>
              <table class="table table-striped" id="tblGrid">
                <thead id="tblHead">
                  <tr>
                    <th>Product</th>
                    <th>Units per box</th>
                    <th>Unit weight</th>
                    <th class="text-right">Total box weight</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td>Cherry Heirloom Mix</td>
                    <td>12 pints</td>
                    <td>0.685LB / 0.311KG</td>
                    <td class="text-right">8.22LB / 3.73KG</td>
                  </tr>
                  <tr><td>Cherry Heirloom Mix</td>
                    <td>8 shells</td>
                    <td>1LB / 0.4536KG</td>
                    <td class="text-right">8LB / 3.63KG</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
            </div>
                    
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
  </div>
  <div class="col-md-4 product">
        <a href="#myModal2" id="openBtn" data-toggle="modal">
            <img class="product-img" src="../img/products/heirloom.jpg">
            <div class="panel-heading encabezado">
                <h4>Heirloom Tomato Mix</h4>
            </div>
        </a>
        <div class="modal fade" id="myModal2">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title">How do we usually sell our products?</h3>
        </div>
        <div class="modal-body">
          <h5 class="text-center">Heirloom Tomato Mix</h5>
          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr>
                <th>Product</th>
                <th>Units per box</th>
                <th>Unit weight</th>
                <th class="text-right">Total box weight</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Heirloom Tomato Mix</td>
                <td>24 tomatoes</td>
                <td>0.685LB / 0.311KG</td>
                <td class="text-right">10LB / 4.54KG</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
        </div>
                
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
    </div>
    <div class="col-md-4 product">
        <a href="#myModal3" id="openBtn" data-toggle="modal">
            <img class="product-img" src="../img/products/red_cherry_tomato.jpg">
            <div class="panel-heading encabezado">
                <h4>Red Cherry Tomato</h4>
            </div>
        </a>
        <div class="modal fade" id="myModal3">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title">How do we usually sell our products?</h3>
        </div>
        <div class="modal-body">
          <h5 class="text-center">Red Cherry Tomato</h5>
          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr>
                <th>Product</th>
                <th>Units per box</th>
                <th>Unit weight</th>
                <th class="text-right">Total box weight</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Red Cherry Tomato</td>
                <td>12 pints</td>
                <td>0.685LB / 0.311KG</td>
                <td class="text-right">8.22LB / 3.73KG</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
        </div>
                
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  </div>
</div>  
<div class="row">
    <div class="col-md-4 product">
        <a href="#myModal" id="openBtn" data-toggle="modal">
            <img class="product-img" src="../img/products/cherry_heirloom.jpg">
            <div class="panel-heading encabezado">
                <h4>Cherry Heirloom Mix</h4>
            </div>
        </a>
        <div class="modal fade" id="myModal">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title">How do we usually sell our products?</h3>
        </div>
        <div class="modal-body">
          <h5 class="text-center">Cherry Heirloom Mix</h5>
          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr>
                <th>Product</th>
                <th>Units per box</th>
                <th>Unit weight</th>
                <th class="text-right">Total box weight</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Cherry Heirloom Mix</td>
                <td>12 pints</td>
                <td>0.685LB / 0.311KG</td>
                <td class="text-right">8.22LB / 3.73KG</td>
              </tr>
              <tr><td>Cherry Heirloom Mix</td>
                <td>8 shells</td>
                <td>1LB / 0.4536KG</td>
                <td class="text-right">8LB / 3.63KG</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
        </div>
                
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  </div>
  <div class="col-md-4 product">
        <a href="#myModal2" id="openBtn" data-toggle="modal">
            <img class="product-img" src="../img/products/heirloom.jpg">
            <div class="panel-heading encabezado">
                <h4>Heirloom Tomato Mix</h4>
            </div>
        </a>
        <div class="modal fade" id="myModal2">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title">How do we usually sell our products?</h3>
        </div>
        <div class="modal-body">
          <h5 class="text-center">Heirloom Tomato Mix</h5>
          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr>
                <th>Product</th>
                <th>Units per box</th>
                <th>Unit weight</th>
                <th class="text-right">Total box weight</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Heirloom Tomato Mix</td>
                <td>24 tomatoes</td>
                <td>0.685LB / 0.311KG</td>
                <td class="text-right">10LB / 4.54KG</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
        </div>
                
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
    </div>
    <div class="col-md-4 product">
        <a href="#myModal3" id="openBtn" data-toggle="modal">
            <img class="product-img" src="../img/products/red_cherry_tomato.jpg">
            <div class="panel-heading encabezado">
                <h4>Red Cherry Tomato</h4>
            </div>
        </a>
        <div class="modal fade" id="myModal3">
<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title">How do we usually sell our products?</h3>
        </div>
        <div class="modal-body">
          <h5 class="text-center">Red Cherry Tomato</h5>
          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr>
                <th>Product</th>
                <th>Units per box</th>
                <th>Unit weight</th>
                <th class="text-right">Total box weight</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Red Cherry Tomato</td>
                <td>12 pints</td>
                <td>0.685LB / 0.311KG</td>
                <td class="text-right">8.22LB / 3.73KG</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
        </div>
                
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
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

    <script type="text/javascript">
        $(document).ready(function() { 
            $(window).scroll(function() {$("#navi").css({"background": "#881B1F", });});
            $("#home1").css({"padding-top": "80px"});
            $("#navi").css({"background": "#881B1F", "height": "3%"});
        });
    </script>

</body>
</html>