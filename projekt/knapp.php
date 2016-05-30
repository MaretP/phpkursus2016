<?php
header("Content-type: image/png");
$chattare = count(file("inlogg.txt"));
$string = $chattare." hetke kasutaja";
$im     = imagecreate(175, 25);
$bg_color = imagecolorallocate($im, 220, 210, 60);
$text_color = imagecolorallocate($im, 0, 0, 0);
$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
imagestring($im, 4, $px, 3, $string, $text_color);
imagepng($im);
imagedestroy($im);
?>
