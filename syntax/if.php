<?php

//$line = "lause";
$line = "lause1
lause2
";

if ($line == "lause1\nlause2\n")
{
    echo "OKAY!";
    echo "<br>";
}
$h = date("H");
echo "h on $h<br>";


$a = 12;
$b = 12;

if ($a > $b)
{
    echo "A $a on suurem kui B $b<br>";
}
elseif ($b > $a)
{
    echo "B $b on suurem kui A $a<br>";
}
else
{
    echo "A $a on võrdne B $b-ga<br>";
} 
?>
