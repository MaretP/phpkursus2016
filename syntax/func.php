<?php 

function getname($name)
{

    
$names = "koer  123
kass    456
kukk    789
kana    25887";
    
    $rows = explode("\n", $names);
    //print_r($rows);
    
    foreach($rows as $key => $val)
    {
        $temp = explode("    ", $val);
        $surnames[$temp[0]] = $temp(1);
    }
    print_r($surename);
    
    
    return $count;
    

}

getname("koer");


 ?>