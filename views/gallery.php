<div class="row">
    <div class="col-md-6">
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
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/tiksluscarousel.css" />
<link rel="stylesheet" href="css/github.css" />
<link rel="stylesheet" href="css/animate.css" />
    
<style>

#wrapper{
margin:auto;
width: 1800px;
background-color: red;
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
                  $("#x").tiksluscarousel({progressBar:true,width:640,height:480,nav:'thumbnails',current:1,type:'slide',next:'>>',prev:'<<',navIcons:'false'});
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
            </ul>
        </nav>
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
             $("#x").tiksluscarousel({progressBar:true,width:640,height:480,nav:'thumbnails',current:1,type:'slide',next:'>>',prev:'<<',navIcons:'false'});  
            }).fail( function(xhr, textStatus, errorThrown) {
                alert(xhr.responseText);
            });
        
                
    }
    
  
          
   
    
    
</script>