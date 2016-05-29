<?php 

// Kristil, PHP, 2016
// Ülesanne 0305

/*Teha funktsioon nimega "string_info". Funktsiooni sisendargumendiks olgu teksti string ($string). Funktsioon üleb:

1. Mis on selle stringi esimene täht ja viimane täht. Funktsioon "strlen" leiab stringi pikkuse ja "echo $string[0]" kuvab esimese tähe.
2. Mitu tähte stringis on (strlen).
3. Kogu string tehaks läbiva väiketähega (strtolower) ja väljastatakse.
4. Kogu string tehaks läbiva suurtähega (strtoupper) ja väljastatakse.
5. Tsükliga loetakse kokku ja kuvatakse ekraanile mitu "a" tähte stringis esineb.
*/

function string_info($string) 
{
    $strlen = strlen($string);
    $first_letter = $string[0];
    $last_letter = substr($string, -1);
    $lower_case = strtolower($string);
    $upper_case = strtoupper($string);
    
        echo 'Tekst: ' . $string;
        echo '<br>';
        echo '<p>';
        
        echo 'Teksti pikkus: ' . $strlen;
        echo '<br>';
        echo '<p>';

        echo 'Esimene täht: ' . $first_letter;
        echo '<br>';
        echo '<p>';
        
        echo 'Viimane täht: ' . $last_letter;
        echo '<br>';
        echo '<p>';
        
        echo 'Väikesed tähed: ' . $lower_case;
        echo '<br>';
        echo '<p>';
        
        echo 'Suured tähed: ' . $upper_case;
        echo '<br>';
        echo '<p>';
        
        echo 'A-tähtede arv: ' . substr_count($lower_case, 'a');
        
}

$string = 'Siil ehk harilik siil (Erinaceus europaeus) on lühikõrvaline putuktoiduline siillaste sugukonnast, üks kahest Eestis elavast siililiigist.';

        echo '<p>';

string_info($string);


 ?>