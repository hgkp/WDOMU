<?php
$plik=fopen("napisy.txt","r+");
$tablica=[];
$n=0;
while(!feof($plik))
{

    $tablica[$n] = fgets($plik);
    $n++;
}
for($i=0;$i<count($tablica)-1;$i++) {
    echo $i + 1 , ". " , $tablica[$i] , "- " , bindec(''.$tablica[$i]);
    echo "<br>";
}
///Krystian Pierzchalski