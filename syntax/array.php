<?php 

$drinks[]="Piim";
$drinks[]="Limonaad";
$drinks[]="Tee";
$drinks[]="Kohv";
$drinks[]="Vesi";
$drinks[]="Mahl";

//elemendi väljastus

//echo $drinks[4];

echo "<pre>";
print_r($drinks);
echo"</pre>";

//var_dump($drinks);

$rand1 = rand(0, sizeof($drinks)-1);
$rand2 = rand(0, sizeof($drinks)-1);

echo "Isa lemmik jook on $drinks[$rand1] 
aga poeg joob hea meelega jooki $drinks[$rand2]";

echo "<hr>";

//for tükliga väljastus 
//hinnakiri

echo"<ul>";

for ($i = 0; $i <= sizeof($drinks)-1; $i++)

{
    echo "<li>$drinks[$i] ";
    echo "- " . rand(2,7) . "€";
    echo "</li>";
}

echo "</ul>";

//foreach tükliga väljastus 

echo"<p>;

foreach ($drinks as $key => $val)

//otsi viga

{
    $counter ++;
    echo "$counter ) Massiivi element indeksiga $key väärtus on $val <br>";
    }
 
/*foreach ($animals as $key => $val) 
{ 
  echo "Massiivi võti on $key ja elemendi väärtus on $val<br>"; 
   
  #lisaks muudame massiivi elementi 
  $animals[$key] = "metsik ".$val; 
} */   


 ?>