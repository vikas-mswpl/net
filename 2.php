<?php
header ("Content-type: image/png");
$im=imagecreate(200,100);
$bg=imagecolorallocate($im,200,200,200);
$txt=imagecolorallocate($im,20,100,160);
$line=imagecolorallocate($im,120,10,60);
ImageLine($im, 165, 0, 130, 50, $line);
imageellipse ($im, 65, 25, 100, 40, $line);    
imagestring($im,50,50,50,"welcome",$txt);
imagepng($im);
?>