        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Heirloom Farms
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-book"></i> Story of Our Company</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                          Our philosophy is driven by the desire to attract and meet the demand of our customers, constantly generating quality products and greater social development.   
                        </p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-check"></i> Mission</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            We are a company driven by our mission. We believe that our success depends on continuous and absolute dedication drives us and encourages us to create innovative products of the highest quality to serve the important needs of our customers. We believe that our philosophy allows us to build a company that improves the lives of all stakeholders - our customers, employees, partners, suppliers, families, and communities
                        </p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-eye"></i> Vision</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            It is recognized as an agricultural company high marks for performance and efficient production and marketing of our improving our productivity and profitability products. We want to create a heritage that is productive for all our customers, our company, our employees and the countries to which we project export.
                        </p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
<!-- GALLERY OF PRODUCTS -->
<div class="col-lg-12">
<h2 class="page-header">Our Products</h2>
</div>
<div class="row"><!--Row 1-->
<?php
  $nombredir = 'productos';
  if (file_exists("../img/$nombredir")) {
      $dir = opendir("../img/$nombredir");
      $count = 1;
     while ($archivo = readdir($dir)) {
          if (!is_dir($archivo)) {
                  if($count != 0){
                  $count++;
                  echo "
                    <div class=\"col-xs-6 col-sm-3 col-md-3 col-lg-3\">
                     <a href=\"img/$nombredir/$archivo\" data-lightbox=\"roadtrip\" data-title=\"HeirloomFarm\" class=\"thumbnail\">
                      <img src=\"img/$nombredir/$archivo\" class=\"img-responsive\" />
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
      echo "<div class=\"alert alert-danger col-lg-7\" role=\"alert\"> <h2>No Hay Fotos sobre el Evento <b>$nombredir</b> =( </h2></div>";
  }
?>
<!-- END -->
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">What Makes Us Best</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.2.0</strong>
                    </li>
                    <li>jQuery v1.11.0</li>
                    <li>Font Awesome v4.1.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/prod/3.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->
        <hr>

       