<?php  
function number_info($input)
{
    switch ($input%2)
    {
        case 1: 
            $tyyp="paaritu";
            break;
        case 0:
            $tyyp="paaris";
            break;
        default:
            $tyyp="tundmatu";
            break;
    } 
    if ($input>10)
    {
        $kymps="suurem";
    }
    else
    {
        $kymps="väiksem";
    }
    if ($input>100)
    {
        $sada="suurem";
    }
    else
    {
        $sada="väiksem";
    }
    $ruut = pow ($input,2);
    $ruutjuur = pow ($input,1/2);
    
    echo "1. arv $input on $tyyp<br>";
    echo "2. arv $input on $kymps kui 10<br>";
    echo "3. arv $input on $sada kui 100<br>";
    echo "4. arv $input ruudus on $ruut<br>";
    echo "5. arvu $input ruutjuur on $ruutjuur<br>";
}
number_info(105);
?>
