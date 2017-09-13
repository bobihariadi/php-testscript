<?php 
$file = ("http://www.priokport.co.id/application/config/database.php");
header ("Content-Type:application/octet-stream");
 
header ("Accept-Ranges: bytes");
 
header ("Content-Length: ".filesize($file));
 
header ("Content-Disposition: attachment; filename=".$file);
 
readfile($file);
?> 