<?php
$tekst="W TYM ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE SIĘ 08.09.2018 R. W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA ŻEROMSKIEGO „PRZEDWIOŚNIE”. 
WŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ SZKOLE W PRZEDDZIEŃ TEGO WYDARZENIA 07.09.2018 R. 
NA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ. CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.
FORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ DO CZYTANIA LUB SŁUCHANIA.";
$narodoweCzytanie=fopen('narodoweCzytanie.txt', "r+");
fwrite($narodoweCzytanie,$tekst);
getLines();

function getLines(){

    $liniaZpliku=fopen('narodoweCzytanie.txt', "r+");
    while(!feof($liniaZpliku))
    {
        $keep=fgets($liniaZpliku);
        print(nl2br($keep));

    }

}
///Krystian Pierzchalski

