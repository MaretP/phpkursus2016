<?php
$array['name']="Triinu";
$array['aadress']="Stockholm, Rootsi";
$array['picture']="http://www.triinustreasury.com/wp-content/uploads/2016/04/triinu-e1461156462436-300x169.jpg";
$array['url']="http://www.triinustreasury.com";
 
 
echo '
<html>
<head>
<title>Ülesanne 0401</title>
</head>
<body>
<p>
Nimi on <b>' . $array['name'] . '</b>.<br>
Aadress on <i>' . $array['aadress'] . '</i>.<br>
<img src="' . $array['picture'] . '" alt="Array" height="206px" width="358px"><br>
<a href="' . $array['url'] . '">Link kodulehele</a>
<p>
</body>
</html>
';
?>
