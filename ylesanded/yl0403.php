<?php
header('Content-Type: text/html; charset=utf-8');
$colors[0]="Blue";
$colors[1]="BlueViolet";
$colors[2]="Red";
$colors[3]="Coral";
$colors[4]="Chocolate";
$colors[5]="Cyan";
$colors[6]="DarkOrange";
$colors[7]="DarkOrchid";
$colors[8]="DeepSkyBlue";
$colors[9]="Gold";
$colors[10]="GoldenRod";
$colors[11]="Orchid";
$colors[12]="MidnightBlue";
$colors[13]="LightCoral";
$colors[14]="Maroon";
for($i=0; $i<sizeof($colors); $i++)
{
  echo ($i+1) . '. <span style="color:'  . $colors[$i] . '" >' . $colors[$i] . '</span><br />';
} 
?>
