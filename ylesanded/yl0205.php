<?php
// Mingi jama kuvamisega
$movies[1][1] = 'Matrix';
$movies[1][2] = 'Titanic';
$movies[1][3] = '1944';
$movies[2][1] = 'Klassikokkutulek';
$movies[2][2] = 'Terminator';
$movies[2][3] = 'Rambo';
$movies[3][1] = 'Nukitsamees';
$movies[3][2] = 'Viimne reliikvia';
$movies[3][3] = 'Mehed ei nuta';
for ($i=1;$i<=3;$i++)
{
    for ($j=1;$j<=3;$j++)
    {
        echo "$movies[$i][$j]<br>";
    }
}    
foreach ($movies as $key => $val)
{
  echo "$key - $val<br>";
  
} 
?>
