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
function vaheta_elemendid($e1, $e2, $massiiv)  {
	$ajutine = $massiiv[$e1];
	$massiiv[$e1] = $massiiv[$e2];
	$massiiv[$e2] = $ajutine;
	return $massiiv;
}
// Jama on, et kustuta viimast elementi ikkagi täiesti ära
function kustuta_element($e1, $massiiv)  {
    $max = sizeof($massiiv);
    echo "$max<br>";
    for($i = $el1; $i < $max;$i++)
    {
        $massiiv[$i] = $massiiv[$i+1];
    }
    unset ($massiiv[$max-1]);
    $max = sizeof($massiiv);
    echo "$max<br>";
	return $massiiv;
}
$loomad = array ('Karu', 'Jänes', 'Hunt', 'Rebane', 'Hirv', 'Hiir', 'Põder', 'Ahv', 'Mäger', 'Mutt');
kuva_massiiv($loomad);
$loomad = vaheta_elemendid(3, 7, $loomad);
kuva_massiiv($loomad);
$loomad = kustuta_element(5, $loomad);
kuva_massiiv($loomad);
?>
