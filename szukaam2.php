<?php

$title = '';
require_once('includes/head.php');

/**
* Get the localization for game
*/

require_once("languages/".$player -> lang."/bank.php");

$tablica[0]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[1]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[3]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[4]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[5]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[6]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[7]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[8]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[9]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[10]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[11]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[12]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[13]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[14]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[15]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[16]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[17]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[18]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[19]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[20]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[21]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[22]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[23]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[24]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[25]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[26]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[27]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[28]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[29]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[30]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[31]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[32]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[33]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[34]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[35]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[36]='<li><a href="">Nie ma żadnych śladów Kapłana... szukam dalej...</a></li> ';
$tablica[37]='<li><a href="kaaplaan.php">Widzisz przed sobą wielki obóz... Podchodzisz bliżej...</a></li> ';

$klucz=array_rand($tablica);
print($tablica[$klucz]."<br>");

$smarty -> display ('szukaam2.tpl');

require_once("includes/foot.php");

?>
