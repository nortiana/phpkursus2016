<?php 
// Kristil, PHP, 2016
// Ülesanne 0202

/*Lisa käsitsi massiivi 10 looma nime kasutades massiivi kohanäitu. Nt. $animals[0]="karu" jne.
Väljasta see "foreach" tsükkliga.
*/

$animals[1]="karu"; 
$animals[2]="rebane"; 
$animals[3]="hunt"; 
$animals[4]="siil"; 
$animals[5]="hirv"; 
$animals[6]="jänes"; 
$animals[7]="elevant"; 
$animals[8]="põder"; 
$animals[9]="kährik"; 
$animals[10]="jõehobu";

foreach ($animals as $key => $val) 
{ 
  echo "$key) $val<br>"; 
   
} 

/*echo "<pre>"; 
print_r($animals); 
echo "</pre>"; 
*/

 ?>