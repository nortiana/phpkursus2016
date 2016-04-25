<?php 

//$line = "lause";
/*$line = "lause
";

if ($line == "lause\n")
{
    echo "okay!";
}*/

/*$line = "lause1
lause2
";

if ($line == "lause1\nlause2\n")
{
    echo "okay!";
}

//omistamine on kaks ==
//elseif võib palju kordi järjest kasutada ja else on varia

/*if ($line = "kala-lause3")
{
    echo "okay!";
}*/

//if funktsiooni näide

/*$a = 12; 
$b = 1211; 

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
localhost
*/

$money = 11000; 

if ($money > 10000) 
{ 
  echo "Raha üle 10k. Olen rahul. Raha on $money.<br>"; 
} 
elseif ($money < 10000) 
{ 
  echo "Raha alla 10k. Vaja juurde. Raha on $money.<br>"; 
} 
elseif ($money == 10000) 
{ 
  echo "Taha on täpselt 10k. Raha on $money<br>"; 
} 

?>