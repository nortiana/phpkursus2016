<?php 
// Kristil, PHP, 2016
// Ülesanne 0204

/*Lisa massiivi inimese isikuandmed (nimi, vanus jne.) min 5 elementi.
Väljasta need mõnes lauses, sellesama inimese kohta.
Nt. "Kodanik [nimi] on [vanus] aastane"
*/

$mas = array("nimi", "vanus", "sugu", "rahvus", "linn");

$mas[nimi]="Kustas Kõrvits"; 
$mas[vanus]="33"; 
$mas[sugu]="mees"; 
$mas[rahvus]="eestlane"; 
$mas[linn]="Pihkva"; 
 

echo "<p>$mas[nimi], $mas[sugu], on $mas[vanus] aastane. Ta on $mas[rahvus] ja elab $mas[linn] linnas.<p>"; 

 ?>