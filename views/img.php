<?php
$nombredir = $_GET["name"]; 
$imgs = "";
if (file_exists("../img/gallery/".$nombredir)) {
    $dir = opendir("../img/gallery/".$nombredir);
    $count = 1;
    while ($archivo = readdir($dir)) {
        if (!is_dir($archivo)) {
            if($count != 0){
                $count++;
                $imgs .= "<li><img src=\"img/gallery/$nombredir/$archivo\"/></li>";
            }else{  
                $count = 0; 
            }
        }
    } 
    echo json_encode(array('response' =>  $imgs));
}else{
    echo json_encode(array('response' => 'no se encontro la ruta'));
}
?>
