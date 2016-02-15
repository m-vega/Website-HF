        <!-- Marketing Icons Section -->
<div class="container home">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="text-align: center !important; font-size: 3em !important;">
                    Welcome to Heirloom Farms
                    
                </h1>
                <h4 style="text-align: center !important; font-style: italic;">Ensenada, México</h4>
                <hr>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading encabezado">
                        <h4>Philosophy</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                          Our philosophy is driven by the desire to attract and meet the demand of our customers, constantly generating quality products and a greater social development.   
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading encabezado">
                        <h4><i class="fa fa-check"></i> Mission</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            We are a company driven by our mission. We believe that our success depends on continuous and absolute dedication. This drives us and encourages us to create innovative products of the highest quality to serve the important needs of our customers. We believe that our philosophy allows us to build a company that improves the lives of all stakeholders - our customers, employees, partners, suppliers, families, and communities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading encabezado">
                        <h4><i class="fa fa-eye"></i> Vision</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            To be recognized as an agricultural company with high marks of performance and efficient production and marketing and to improve the productivity and profitability of our products. We want to create a heritage that is productive for all our customers, our company, our employees and the countries to which we export.
                        </p>
                    </div>
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
  $nombredir = 'products';
  if (file_exists("../img/".$nombredir)) {
      $dir = opendir("../img/".$nombredir);
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
      echo "<div class=\"alert alert-danger col-lg-7\" role=\"alert\"> <h2>No Hay Productos en el directorio <b>$nombredir</b> =( </h2></div>";
  }
?>
<!-- END -->
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">What Makes Us Best</h2>
            </div>
            <div class="col-md-6">
                <p>This is why we are leaders in our region:</p>
                <ul>
                    <li><strong>Our Certifications</strong></li>
                    
                        <ul>
                            <li>We are a <strong>PrimusGFS certified company</strong> from PrimusLabs for Harvest Crew and Ranch operations.</li>
                            <li>Also part of the <strong>ANSI Accredited Program Product Certification.</strong></li>
                        </ul>
                    
                    <li><strong>Innovative cropping techniques</strong></li>
                        <ul>
                            <li>
                                We implement hydroponic cropping techniques to grow our products.
                            </li>
                        </ul>
                    <li><strong>Top of the line technology</strong></li>
                        <ul>
                            <li>
                                Computer controlled irrigation that helps us add the exact amount of water that every product needs.
                            </li>
                            <li>
                                We also implement technology in other subjects such as fertilization and fumigation. 
                            </li>
                        </ul>
                </ul>
                <p>We are driven by the desire to attract and meet the demand of our customers, constantly generating quality products and a greater social development. </p>
            </div>
            <div class="col-md-3">
                <img class="img-responsive" src="img/logos/primus-labs-logo.png" alt="">
            </div>
            <div class="col-md-3">
                <img class="img-responsive" src="img/logos/ansi-logo.png" alt="">
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <script >
        jQuery(".home").backstretch("img/.jpg");
        </script>