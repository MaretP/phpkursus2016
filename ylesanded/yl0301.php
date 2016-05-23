<?php  
function kuva_massiiv($massiiv)
{
    $max = sizeof($massiiv);
    for($i = 0; $i < $max;$i++)
    {
        echo "$i. $massiiv[$i]<br>";
    }
    echo "<p>";
}
$mas = array ('Karu', 'Jänes', 'Hunt', 'Rebane', 'Hirv', 'Hiir', 'Põder', 'Ahv', 'Mäger', 'Mutt');
kuva_massiiv($mas);
?>
