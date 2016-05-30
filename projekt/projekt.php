<?php 

//Täringumäng
//Kristil, php kursus 2016

//ei ole lõpuni valmis aga teeb mida vaja

/* Esialgne plaan oli teha hoopis midagi muud aga läks nii nagu tavaliselt ja välja tuli selline roosa asi,
mis kindlasti tahab täiendust. Õpin, vaatan ja uurin ning jõuan sellise lahenduseni mida julgen teistele näidata.
*/

?>



<html>
<head>
<title>Täringumäng</title>
</head>
<body>
Täringumäng. Mängu mõte on: kas suudad veeretada arvutist suurema summa ? Toimub 3 veeretuskorda. Iga veeretusega saad täringu kas alles jätta või selle uuesti veeretada.
<p>


<button onclick="rl()">Proovi uuesti</button>
<script>
function rl() {
        location.reload();
        
}
</script>
<body bgcolor="pink">
<p>
<?php 
#täringute viskamise funktsioon sisendisse anda visete arv
function vt($korda) {
    for ($i = 1;$i <= $korda;$i++) {
        $taring = rand(1,6);
        $tulemus[] = $taring;
    }
     return $tulemus;
}
function pa($printarray) {
    foreach ($printarray as $silmad) {
        $tulemus = $tulemus . $silmad . " ";
 
    } 
    return $tulemus;
}
#Mängu võidab see kellel on suurim täringu silmade summa
$mangija = vt(5);
$arvuti = vt(5);
$mangijatulem = pa($mangija);
$arvutitulem = pa($arvuti);
$mskoor = array_sum($mangija);
$askoor = array_sum($arvuti);
$t1="<pre>#########<br>#       #<br>#       #<br>#   *   #<br>#       #<br>#       #<br>#########</pre>";
$t2="<pre>#########<br>#       #<br># *     #<br>#       #<br>#     * #<br>#       #<br>#########</pre>";
$t3="<pre>#########<br>#       #<br># *     #<br>#   *   #<br>#     * #<br>#       #<br>#########</pre>";
$t4="<pre>#########<br>#       #<br># *   * #<br>#       #<br># *   * #<br>#       #<br>#########</pre>";
$t5="<pre>#########<br>#       #<br># *   * #<br>#   *   #<br># *   * #<br>#       #<br>#########</pre>";
$t6="<pre>#########<br>#       #<br># * * * #<br>#       #<br># * * * #<br>#       #<br>#########</pre>";
?>
Mina sain tulemuseks:
<table>

<tr>

<?php
foreach ($mangija as $mtulem) {
    if ($mtulem == 1){
        echo "<td>" . $t1. "</td>";
    }elseif ($mtulem == 2){ 
        echo "<td>" . $t2. "</td>";
    }elseif ($mtulem == 3){ 
        echo "<td>" . $t3. "</td>";
    }elseif ($mtulem == 4){ 
        echo "<td>" . $t4. "</td>";
    }elseif ($mtulem == 5){ 
        echo "<td>" . $t5. "</td>";
    }elseif ($mtulem == 6){ 
        echo "<td>" . $t6. "</td>";
    }
}
?>
</tr>
</table>
<br>
Arvuti sai tulemuseks
<br>
<table>
<tr>
<?php
foreach ($arvuti as $atulem) {
    if ($atulem == 1){
        echo "<td>" . $t1. "</td>";
    }elseif ($atulem == 2){ 
        echo "<td>" . $t2. "</td>";
    }elseif ($atulem == 3){ 
        echo "<td>" . $t3. "</td>";
    }elseif ($atulem == 4){ 
        echo "<td>" . $t4. "</td>";
    }elseif ($atulem == 5){ 
        echo "<td>" . $t5. "</td>";
    }elseif ($atulem == 6){ 
        echo "<td>" . $t6. "</td>";
    }
}
?>
</tr>
</table>
<?php 
echo "mina sain tulemuseks $mangijatulem <p>";
echo "arvuti sai tulemuseks $arvutitulem <p>";
if ($mskoor > $askoor){
    echo "Mängija võitis kogusummaga $mskoor mis on suurem kui arvuti summa $askoor";
}elseif ($mskoor < $askoor){
    echo "Mängija kaotas kogusummaga $mskoor mis on väiksem kui arvuti summa $askoor";
}elseif ($mskoor == $askoor){
    echo "Mäng jäi viiki kogusummaga $askoor";
} ?>
</body>