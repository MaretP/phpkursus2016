
<?php 

$rand = rand(1,200);

for($i = 0; $i < 200; $i++)
{ 
	echo "O";
	if ($i == $rand) echo "C";
}
?>
