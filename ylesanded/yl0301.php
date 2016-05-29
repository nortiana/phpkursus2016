<?php 

// Kristil, PHP, 2016
// Ülesanne 0301

/*Luua massiivi nimega "$mas" elementidega Karu, Jänes, Hunt, Rebane, Hirv, Hiir, Põder, Ahv, Mäger, Mutt.
Karu massiivi elemendi indeks olgu 0, Jänesel 1 jne.

Teha funktsioon nimega "kuva_massiiv". Funktsiooni sisendargumendiks olgu massiiv mida soovime välja kuvada. Funktsiooni sees lugeda funktsiooniga "sizeof" elemendid kokku ja väljastada tsükliga kõik masiivi elemendid üksteise alla. Kuvatud elemendi ette panna ka massiivi elemendi number. Kuvamisel panna kõige lõppu panna paragrafi tag "<p>".

Näide:
0. Karu
1. Jänes
2. Hunt
jne.

Lisainfoks , et peale 0301-0303 ülesannet peab tulema umbes säärane programm:

funktsioon kuva_massiiv
funktsioon vaheta_elemendid
funktsioon kustuta_element

tee massiiv
kuva_massiiv
vaheta_elemendid
kuva_massiiv
kustuta_element
kuva_massiiv */


/*$loomad[0]="Karu";
$loomad[1]="Jänes";
$loomad[2]="Hunt";
$loomad[3]="Rebane";
$loomad[4]="Hirv";
$loomad[5]="Hiir";
$loomad[6]="Põder";
$loomad[7]="Ahv";
$loomad[8]="Mäger";
$loomad[9]="Mutt"*/


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

 ?>