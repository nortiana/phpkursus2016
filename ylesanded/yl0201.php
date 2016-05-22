<?php 
// Kristil, PHP, 2016
// Ülesanne 0201

/*Genereeri tsükliga 100 täisarvust koosnev massiiv.
Väljasta see "print_r" funktsiooniga.
*/

/*for($i = 1; $i <= 100; $i++) 
{ 
  echo $i; 
} 
echo "<br>"; 

echo "<pre>"; 
print_r($animals); 
echo "</pre>"; 
*/

$array = array();

for($i=1; $i<=100; $i++)
    
{
    $array[$i] = $i;
}

print_r($array);

 ?>