<?php

 if(!empty($_POST['name']) AND !empty($_POST['company']) AND !empty($_POST['phone']) AND !empty($_POST['email']) AND !empty($_POST['message'])){

$to ="ws@heirloom.mx";
$headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
$headers .= "From:".$_POST['email']."\r\n";            
$tema="Comments from ".$_POST['name']."\r\n";
$mensaje="
<center><H1>Message from HeirloomFarms.mx Contact Form</H1>
<table border='0' cellspacing='2' cellpadding='2'>
  <tr>
    <td width='20%' align='center' bgcolor='#50d879'><strong>Name:</strong></td>
    <td width='80%' align='left' bgcolor='#d8d8d8'>$_POST[name]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#50d879'><strong>E-mail:</strong></td>
    <td align='left' bgcolor='#d8d8d8'>$_POST[email]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#50d879'><strong>E-mail:</strong></td>
    <td align='left' bgcolor='#d8d8d8'>$_POST[phone]</td>
  </tr>
   <tr>
    <td width='20%' align='center' bgcolor='#50d879'><strong>Web | FB | Tw</strong></td>
    <td width='80%' align='left' bgcolor='#d8d8d8'>$_POST[company]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#50d879'><strong>Message:</strong></td>
    <td align='left' bgcolor='#d8d8d8'>$_POST[message]</td>
  </tr>
</table>
</center>
";
@mail($to,$tema,$mensaje,$headers); 
/*echo '<script>
        location.href = "../index.html";
        alerta("Correo enviado con exito");
    </script>';
*/
echo "Sent";

} else {
    echo '<script>
        location.href = "../";
    </script>';

}
?>