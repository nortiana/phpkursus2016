<?php 

// Kristil, PHP, 2016
// Ülesanne 0205

/*Sisesta käsitsi 3x3 kahemõõtmeline massiiv. Massiivi elementideks sisesta filmide nimed.
Nt.
$movies[1][1] = 'Matrix';
$movies[1][2] = 'Titanic';
jne.
Väljasta see massiiv tsüklitega.
*/

$movies[1][1] = 'The Shining ';
$movies[1][2] = 'Harry Potter and the Deathly Hallows: Part 2 ';
$movies[1][3] = 'There Will Be Blood ';
$movies[2][1] = 'Goodfellas ';
$movies[2][2] = 'Kramer vs. Kramer ';
$movies[2][3] = 'The Da Vinci Code ';
$movies[3][1] = 'Inglourious Basterds ';
$movies[3][2] = 'Hannibal ';
$movies[3][3] = 'The Godfather ';

for ($i=1; $i<=3; $i++)
    
{
  for ($j=1; $j<=3; $j++)
      
  {
    echo $movies[$i][$j] ;
  }
echo  "<br />";
}


 ?>