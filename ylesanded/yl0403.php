<?php
header('Content-Type: text/html; charset=utf-8');
$colors[0]="#F208FF";
$colors[1]="#E60FFF";
$colors[2]="#D917FF";
$colors[3]="#CC1FFF";
$colors[4]="#BF26FF";
$colors[5]="#B22EFF";
$colors[6]="#A636FF";
$colors[7]="#993DFF";
$colors[8]="#8C45FF";
$colors[9]="#804CFF";
$colors[10]="#7354FF";
$colors[11]="#665CFF";
$colors[12]="#5963FF";
$colors[13]="#4D6BFF";
$colors[14]="#4073FF";
for($i=0; $i<sizeof($colors); $i++)
{
  echo ($i+1) . '. <span style="color:'  . $colors[$i] . '" >' . $colors[$i] . '</span><br />';
} 
?>
