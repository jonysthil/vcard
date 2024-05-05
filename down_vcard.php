<?php 

$path = "./assets/vcf/";  
$file = "ING. Jonathan Jimenez.vcf";  

header('Content-Type: text/x-vCard');  
header('Content-Disposition: attachment; filename= "'.$file.'"');  
header('Content-Length: '.filesize($path.$file));  
header('Connection: close');  

readfile($path.$file);


?>