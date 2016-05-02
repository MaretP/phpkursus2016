<?php 

$drinks[]="piim";
$drinks[]="JimBeam";
$drinks[]="tee";
$drinks[]="limonaad";
$drinks[]="latte";

echo $drinks[0];

echo "<pre>";
print_r($drinks);
echo "</pre>";

//var_dump(¤drinks);

$rand1 = rand(0,sizeof($drinks)-1);
$rand2 = rand(0,sizeof($drinks)-1);

echo "Isa lemmikjook on $drinks[$rand1] aga poeg joob hea meelega jooki $drinks[$rand2]";

echo "<hr>";

echo "<ul>";
for ($i = 0; $i < sizeof($drinks); $i++)
{
    echo "<li>$drinks[$i] ";
    echo "- " . rand(2,7) . "€";
    echo "</li>";
}
echo "</ul>";

echo "<p>";

foreach ($drinks as $key => $val)
{
    $counter++;
    echo "$counter) Massiivi element indexiga $key väärtus on $val</br>";
}
?>