<?php
session_start();
$nu = date('Y-m-d H:i');
$bort = date('Y-m-d H:i', time() - (60*60));	// Logi välja peal 1 tundi.
if (!isset($_SESSION['user'])) {$fel = "Sa ei ole sisse logitud!";}
$losen = "demo";				// Siin saad vahetada salasõna!
$block = "moderator";				// Blokeeritud kasutaja
if (isset($_POST['namn']) && isset($_POST['pass1'])) {
	if (strtolower($_POST['namn']) == $block) {$_POST['namn'] = "";}
	if (strtolower($_POST['namn']) == "admin") {$_POST['namn'] = "";}
	if (strtolower($_POST['namn']) == "hasse") {$_POST['namn'] = "";}
	
	if (strtolower($_POST['namn']) == $_POST['pass1']) {$_POST['namn'] = "";}
	if ($_POST['pass1'] === $losen && !$_POST['namn'] == "") {
	setcookie('nick', $_POST['namn'], time()+3600*24*7);
	$_SESSION['logg'] = true;
	$_SESSION['user'] = $_POST['namn'];
	$in = fopen("inlogg.txt","a");
	fwrite($in, $nu. "|" .$_POST['namn']. "|\n");
	fclose($in);
	header("Location: chat.php");
	exit;
	}
	else {$fel = "Vale kasutaja või salasõna!"; }
}
session_unset();
$data = file("inlogg.txt");
	foreach ($data as $id=>$rad) {
	$fält = explode('|',$rad);
	$ltid = $fält[0];
	$lnamn = $fält[1];
	if ($lnamn == $_COOKIE['nick']) { $data[$id] = "";}
	if ($ltid < $bort) { $data[$id] = "";}
	$fd = fopen("inlogg.txt", "w");
	fwrite($fd, implode('', $data));
	fclose($fd);
	}

$data = file("inlogg.txt");
$nr = count(file('inlogg.txt'));
	foreach($data as $rad) {
	$fält = explode("|",$rad);
	$ltid = $fält[0];
	$lnamn = $fält[1];
	$inlogg = $inlogg .$ltid . ' <b>'. $lnamn . '</b><br>';
	}
?>
<html><head><title>PHP Kursuse jutukas</title>
<LINK rel="stylesheet" type="text/css" href="chatmall.css"> 
</head>
<body background="green-1.jpg";background-size: cover;>
<div class="box">
<?php echo "<b><font color='#408000'>" . $fel . "</font></b>"; ?>
<br>
<form action="" method="post">
Kasutaja:<br>
<input type="text" name="namn" size=10 value="<?php echo $_COOKIE['nick'] ?>"><br>
Salasõna:<br>
<input type="password" name="pass1" size=10><br>
<input type="submit" value='Logi sisse'>
</form>
Hetkel jutukas: <?php echo "$nr<br>$inlogg" ?>
</div>

</body></html>