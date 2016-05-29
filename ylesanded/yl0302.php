<?php 

// Kristil, PHP, 2016
// Ülesanne 0302

/*Jätkata eelmist ülesannet. 

Tee funktsioon nimega "vaheta_elemendid". Funktsiooni sisendargumendiks olgu kaks massiivi elemendi numbrit, mille kohtasid massiivis soovime vahetada ja massiiv ise. Vahetamiseks tuleb kasutada funktsioonisisest lisamuutujat. Vahetada elementide "3. Rebane" ja "7. Ahv" massiivi kohad. Tagasta massiiv põhiprogrammile. Kuvada "kuva_massiiv" funktsiooniga massiiv välja.

Näide: 
Rebane jääb nr. 7-ks
Ahv jääb nr. 3-ks

function vaheta_elemendid($e1, $e2, $mas)  {

	$ajutine = $mas[$e1];
	$mas[$e1] = $mas[$e2];
	$mas[$e2] = $ajutine;

	return $mas;

}

$loomad = vaheta_elemendid(3, 7, $loomad);*/


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




 ?>