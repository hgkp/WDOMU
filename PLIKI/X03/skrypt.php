<?php
$plik=fopen("imiona.txt","r+");
$tablica=[];
$n=0;
while(!feof($plik))
{

    $tablica[$n] = fgets($plik);
    $n++;
}
for($i=0;$i<count($tablica);$i++) {
    echo $tablica[$i];
    echo "<br>";
}
for($j=count($tablica)-1;$j>=0;$j--)
{
    echo $tablica[$j];
    echo "<br>";
}
///Krystian Pierzchalski