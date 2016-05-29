<?php 

// Kristil, PHP, 2016
// Ülesanne 0303


/*Jätkata eelmist ülesannet. 

Teha funktsioon nimega "kustuta_element". Funktsiooni sisendargumendiks olgu massiivi elemendi nr. mille väärtust soovime kustutada ja massiiv ise. Kustutatud elemendist järgmised liikugu ühe koha võrra ettepoole. Kustuta massiivi viimane tühi element funktsiooniga unset($mas[key]). Tagasta massiiv põhiprogrammile. Kustuta funktsiooniga element nr. 1 "Jänes". Kuvada "kuva_massiiv" funktsiooniga massiiv välja.

Näide:
Oli 0. Karu, 1. Jänes, 2. Hunt jne.
Peale kustutamist olgu 0. Karu, 1. Hunt jne.
 
*/

//1

function kuva_massiiv($loomad)
{
    $max = sizeof($loomad);
    for($i = 0; $i < $max;$i++)
    {
        echo "$i. $loomad[$i]<br>";
    }
    echo "<p>";
}

$loomad = array ('Karu', 'Jänes', 'Hunt', 'Rebane', 'Hirv', 'Hiir', 'Põder', 'Ahv', 'Mäger', 'Mutt');

kuva_massiiv($loomad); 

//2

function vaheta_elemendid($e1, $e2, $loomad)  
{
        $temp = $loomad[$e1];
        $loomad[$e1] = $loomad[$e2];
        $loomad[$e2] = $temp;
        return $loomad;
}

$loomad = array ('Karu', 'Jänes', 'Hunt', 'Rebane', 'Hirv', 'Hiir', 'Põder', 'Ahv', 'Mäger', 'Mutt');

kuva_massiiv($loomad);

$loomad = vaheta_elemendid(3, 7, $loomad);

kuva_massiiv($loomad);

//3

function kustuta_element($i1, $loomad)  
{
    unset($loomad[$i1]); 
    $loomad = array_values($loomad);
    return $loomad;
}

$loomad = vaheta_elemendid(3, 7, $loomad);

$loomad = kustuta_element(1, $loomad);

kuva_massiiv($loomad);

 ?>