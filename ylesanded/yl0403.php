<?php 

/*Lisa massiivi 15 HTML erinevat värvi.
Leia ilusaid värvi nimed siit: http://www.w3schools.com/colors/colors_names.asp
Kuva tsükliga välja värvuste nimed ja värvi need sama värvi nt. 
<span style='color: cyan'>cyan - sinine taevas</span> */

$color[1]="Red";
$color[2]="OrangeRed";
$color[3]="Crimson";
$color[4]="Chartreuse";
$color[5]="DarkMagenta";
$color[6]="Coral";
$color[7]="CornflowerBlue";
$color[8]="DarkOrange";
$color[9]="DarkBlue";
$color[10]="DarkMagenta";
$color[11]="DeepPink";
$color[12]="DarkTurquoise";
$color[13]="GreenYellow";
$color[14]="DarkViolet";
$color[15]="LawnGreen";


    echo '<table>
    
<tr>
<td>';
    foreach ($color as $key => $val) 
{
    echo $key . '. <span style="color:' . $val . '">' . $val . '</span><br />'; 
} 
    echo '</td>
    
</tr>
</table>';

 ?>