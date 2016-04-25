<?php 

//tsükkel / jada, inkriment

/*for($i = 0; $i < 100; $i++)
{
    echo "$i ";
}    

*/
//mäng

$rand = rand(1,444);

for($i = 0; $i < 444; $i++)
{
    echo "O ";
    if ($i == $rand) echo "C ";
}    

 ?>