<?php
session_start();
header ('Content-Type: text/plain; charset=ISO-8859-1');
$nu = date('Y-m-d H:i:s');				// Täna.
$radera = date('Y-m-d H:i', time() - (3600*24*7));	// Kogu sisu kustutamise aeg.
$tim = date('Y-m-d H:i', time() - (3600));		// Aeg, kustuta peale viimase.
$lny = date('Y-m-d H:i:s', time() - (15));		// - 15 sek.
$dagar = Array('Pühapäev','Esmaspäev','Teisipäev','Kolmapäev','Neljapäev','Reede','Laupäev');
$fil = "cdata.txt";
if (!isset($_SESSION['logg']) || $_SESSION['logg'] !== true) {
header("Location: index.php");
exit;
}

if (file_exists($fil))
{
$data = file($fil);					// Kustuta:
	foreach ($data as $id=>$rad) {
	$antal = count(file ($fil));
	$fält = explode('|',$rad);
	$datum = $fält[0];
	if ($datum < $radera) { $data[$id] = "";}	// Kustuta peale 1 nädalat.
	if ($antal > 5 && $datum < $tim) { $data[0] = "";} // peale 1 tundi.
	if ($id > 19) { $data[0] = "";}
	}
	$fd = fopen($fil, "w");
	fwrite($fd, implode('', $data));
	fclose($fd);
}

$data = file("inlogg.txt");				// Hangi osavõtjate nimekiri.
$nr = count(file('inlogg.txt'));
foreach($data as $rad) {
	$fält = explode("|",$rad);
	$ltid = $fält[0];
	$lnamn = $fält[1];
	$inlogg = $inlogg . "<a href=\"javascript: infoga( ' $lnamn' )\">$lnamn</a>, "; 
	}


$data = file($fil);					// Hangi teade failist.
// arsort($data);
$gtid = substr($datum,0,10);
foreach($data as $rad) {
    $fält = explode("|",$rad);
    $datum = $fält[0];
    $namn = $fält[1];
    $namn = "<a href=\"javascript: infoga( ' $namn ' ) \">$namn</a>";
    $text = $fält[2];

$text = str_replace(':D','<img src="smileD.gif">',$text);
$text = str_replace(':)','<img src="smile.gif">',$text);
$text = str_replace(':(','<img src="sad.gif">',$text);
$text = str_replace(';)','<img src="wink.gif">',$text);
$text = str_replace(':o','<img src="smileO.gif">',$text);
$text = str_replace(':O','<img src="smileO.gif">',$text);
$text = str_replace(':@','<img src="angry.gif">',$text);
$text = str_replace(':$','<img src="blush.gif">',$text);
$text = str_replace(":'(",'<img src="cry.gif">',$text);
$text = str_replace(":,(",'<img src="cry.gif">',$text);
$text = str_replace(":P",'<img src="smileP.gif">',$text);


    $dagnr = date('w',strtotime($datum));
    $dag = $dagar[$dagnr];
    $tid = substr($datum,11,5);
    if ($gtid < substr($datum,0,10)) { $tid = '<p>'. $dag .'<br>'.$tid;}
    $gtid = substr($datum,0,10);
    $chatmess = $chatmess .'<span class=\'bla12\'>'.$tid .' '. $namn . ': </span>'. $text .'<br>';
    }


$chatmess = $chatmess . ':|: Sisselogitud: '. $inlogg .":|:". $nr;
echo $chatmess;
?>
