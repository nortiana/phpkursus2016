<?php
/*Loo array täring2
Loo array täring3
Loo array täring4
Loo array täring5
Loo array täring6
Tekita leht koos mängu kirjelduse ja nupuga alusta mängu.
Tekita randomiga 5 täisarvu 1-6'ni, nii mängijale kui arvutile.
Näita tulemust ekraanil.
Lase mängijal valida mis täringud ta saab alles jätta.
Mõtle välja mingi loogika mida arvuti alati jälgib ja jäta arvutile ka mingid väärtused alles.
Tekita randomiga n täisarvu vastavalt sellele mitu täringut uuesti tuleb veeretada
Kordub eelmine tegevus
uued randomid
Mängu tulemus ja nupp "mängi uuesti"*/
?>


<html>
<head>
<title>Täringumäng</title>
</head>
<body>
Täringumäng. Mängu mõte on: kas suudad veeretada arvutist suurema summa ? Toimub 3 veeretuskorda. Iga veeretusega saad täringu kas alles jätta või selle uuesti veeretada.
<p>

<?php 

$täring[]='1';
$täring[]='2';
$täring[]='3';
$täring[]='4';
$täring[]='5';
$täring[]='6';

echo '<p>';

echo '$täring[2] . $täring[rand(1,6)].'


/*for ($i = 1; $i <= 6; $i++) 
{ 
        echo "$i<br>"; 
    } 
    
echo "<br>";
 */
 
 ?>


<table border=1>
<th>Veeretus 1</th>
<th>Veeretus 2</th>
<th>Veeretus 3</th>
</table>
<p>

<input type=submit name=nupp value="Veereta">
</form>
</body>
</html>

 ?>