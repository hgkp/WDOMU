<?php
touch("nazwisko_i_imie.txt");
touch("doSkasowania.txt");
if(file_exists("doSkasowania.txt"))
    unlink("doSkasowania.txt");
if(!file_exists('Pierzchalski'))
mkdir("Pierzchalski",0700);
if(!file_exists('Pierzchalski\nazwisko_i_imie.txt'))
fopen('Pierzchalski\nazwisko_i_imie.txt', 'w');
///Krystian Pierzchalski