<?php 

//poolik funktsioon kuidas parem oleks get file content

function getname($name)

{
$names = "koer 123
kass    423434
kukk    332
kana    234564";
    
    $rows = explode ("\n", $names);
    
    //print_r($rows);
foreach($rows as $key => $val)   
{
    //$surenames[$val] = $key;
    //$surname[] = explode ("    ", $val);
    $temp[] = explode("    ", $val);
    $surname [$temp[0]] = $temp [1];
}
    print_r($surname);
    
    print_r(array_keys(surname, "koer"));
    
 return $count;
    
    }

getname("koer");



 ?>