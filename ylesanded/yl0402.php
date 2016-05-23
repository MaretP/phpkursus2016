<?php  
$box = array('Clint', 'Bruce', 'Arnold', 'Sandra', 'Pierce', 'Tommy', 'Sylvester', 'Madonna', 'Jean-Claude','Eddie'); 
$cell = array('Puder', 'Kapsad', 'Supp', 'Kana', 'Siga', 'Pizza', 'Mahl', 'Pirukas', 'Kohv','Tee'); 
$rdio = array('iPad', 'iPod', 'Android', 'VEF', 'Sigma', 'Sony', 'Philips', 'Nokia', 'Samsung','Huawei'); 
for($i=0;$i<10;$i++)
{
    echo "<input type=checkbox name=$box[$i] value=$box[$i]><br>";
}
for($i=0;$i<10;$i++)
{
    echo "<input type=text name=$cell[$i] value=$cell[$i] size=40><br>";
}
for($i=0;$i<10;$i++)
{
    echo "<input type=radio name=raadio value=$rdio[$i]> <br>";
}
?>
