<?php  
function string_info($input)
{
    $a_tahti = 0;
    $pikkus = strlen($input);
    $esitaht = $input[0];
    $viimtaht = $input[$pikkus-1];
    $vaike = strtolower($input);
    $suur = strtoupper($input);
    for ($i=0;$i<$pikkus;$i++)
    {
        if ($input[$i]=='a')
        {
            $a_tahti++;
        }
    }
    
    echo "1. stringi $input esitäht on $esitaht ja viimane täht on $viimtaht<br>";
    echo "2. stringis $input on $pikkus tähte<br>";
    echo "3. string $input on väiketähtedena $vaike<br>";
    echo "4. string $input on suurtähtedena $suur<br>";
    echo "5. stringis $input on a tähti $a_tahti tk<br>";
}
string_info("johhaidii joppakolla minumuru paagan");
?>
