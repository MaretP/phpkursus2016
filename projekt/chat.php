<?php					// 2016-05-29 Maret Piiriste , aluskood võetud netist
session_start();
$nu = date('Y-m-d H:i:s');				// Täna.
$fil = "cdata.txt";
if (!isset($_SESSION['logg']) || $_SESSION['logg'] !== true) {
header("Location: index.php");
exit;
}

if (!$_POST['nick'] == "") {
        $nick = $_POST['nick'];
	if (!$_POST['svar']) {
	header("location: chat.php");
	exit;
	}
	if (isset($_POST['svar'])) {			// Kirjutab teabe failis.

	$svar = stripslashes($_POST['svar']); $svar = strip_tags($svar);
	$in = fopen($fil,"a");
	fwrite($in, $nu. "|" .$nick. "|" .$svar. "|\n");
	fclose ($in);
	header("location: chat.php");
	}
} 
?>
<html><head>
<script language="JavaScript" type="text/javascript">
function infoga(text) { 
   var svar = document.getElementById('svar'); 
   svar.value += text; 
   svar.focus(); 
   } 
function start() {
document.chat.svar.focus();
updat('mess.php');
}
</script>
<title>PHP kursuse jutukas</title>
<LINK rel="stylesheet" type="text/css" href="chatmall.css">
<script language="JavaScript" type="text/javascript" src="ajax.js"></script>
</head>
<body background="green.jpg" onLoad="start()">

<div id="messbox"></div>

<div class="box">
<form action="" method="post" name="chat">
<input type="hidden" name="nick" value="<?php echo $_SESSION['user'] ?>">
<input type="text" name="svar" id="svar" size=70><br>
<a href="javascript:infoga(':)')"><img src="smile.gif" border =0 width=19 height=19 alt="Lõbus"></a>
<a href="javascript:infoga(':D')"><img src="smileD.gif" border =0 width=19 height=19 alt="Naerab"></a>
<a href="javascript:infoga(';)')"><img src="wink.gif" border =0 width=19 height=19 alt="Teeb silma"></a>
<a href="javascript:infoga(':P')"><img src="smileP.gif" border =0 width=19 height=19 alt="Näitab keelt"></a>
<a href="javascript:infoga(':O')"><img src="smileO.gif" border =0 width=19 height=19 alt="Imestab"></a>
<a href="javascript:infoga(':(')"><img src="sad.gif" border =0 width=19 height=19 alt="Kurb"></a>
<a href="javascript:infoga(':,(')"><img src="cry.gif" border =0 width=19 height=19 alt="Nutab"></a>
<a href="javascript:infoga(':$')"><img src="blush.gif" border =0 width=19 height=19 alt="Punastab"></a>
<a href="javascript:infoga(':@')"><img src="angry.gif" border =0 width=19 height=19 alt="Tige"></a>
<br>
<input type="submit" value='Saada'><br>
</form>
<p align=left><b><a href="index.php">Välja logi siit</a> *** Ära unusta välja logida enne kui lahkud jutukast! ***</b></p>
</div>
<div id="userbox"></div>
</body></html>
