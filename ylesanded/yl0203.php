<?php 
// Kristil, PHP, 2016
// Ülesanne 0203

/*Lisa käsitsi massiivi kümne näitleja nime kasutades massiivi loomiseks array funktsiooni 
$stars = array('Clint', 'Bruce'); 
Väljasta see "for" tsükliga.
*/

$stars = array('Jack Nicholson', 'Ralph Fiennes','Daniel Day-Lewis', 'Robert De Niro','Al Pacino', 'Dustin Hoffman','Tom Hanks', 'Brad Pitt','Anthony Hopkins', 'Marlon Brando', );

for ($i=0; $i<sizeof($stars); $i++)
    
{
  echo $i+1 . ". " . $stars[$i] . "<br />";
}

 ?>