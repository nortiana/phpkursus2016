<?php

//Ülesanne 0405
//Kristil, phpkursus2016

// ei ole minu tehtud aga saan aru kuidas toimib
/*
Genereeri kahe FOR tsükkliga 10x10 korrutustabel.
Korrutustabel peab olema HTML tabeli sees.
Korrutustabelis peab olema esimesel real ja veerul numbrid 1-10. 
Teisel real esimese rea ja veeru korrustis jne.
*/
echo "<table border=1>";
for ($i=1; $i<=10; $i++)
{ 
  echo "<tr>";
  for ($j=1; $j<=10; $j++)
  {
    $mas[$i][$j] = $i*$j;
    
   echo "<td><span style='color: $color'>$i,$j <br><b>".$mas[$i][$j]."</b></span></td>";
  }
  echo "</tr>";
}
echo "</table>"; 
?>
