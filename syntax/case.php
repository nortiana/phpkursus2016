<?php   
//random number, kui break ära võtta käivituvad mõlemad read

$menu_id = $_get['menu_id']; 

switch ($menu_id) 
{ 
  case 1: 
    echo "Esileht"; 
    break; 
  case 2: 
    echo "Tutvustus"; 
    break; 
  case 3: 
    echo "Tooted"; 
    break; 
  case 4: 
    echo "Kontakt"; 
    break; 
  default: 
    echo "Error 404"; 
    break; 
} 
echo "<br>"; 

/*Nimi:mari
name
$_post['name'];
kõik on sama nimelised
*/

?>