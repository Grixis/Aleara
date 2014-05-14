<?php

$title = "Droga do Opuszczonej Kopalni";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
echo('<center><img src="images/locations/lasdusz.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>');
$tablica[0]='<li><a href="">Wędrując drogą nic nie dostrzegłeś.</a></li> ';
$tablica[1]='<li><a href="">Po długiej przeprawie pośród niebezpieczeństw nadal niczego nie napotkałeś...</a></li> ';
$tablica[3]='<li><a href="">Przedzierając się przez puszczę potykasz się o wystający pień drzewa. Powoli wstajesz i ruszasz dalej.</a></li> ';
$tablica[4]='<li><a href="">Zabłądziłeś. Postanawiasz wrócić się tą samą drogą na początek lasu.</a></li> ';
$tablica[5]='<li><a href="">Drogę toruje Ci tytan. Ostrożnie wycofujesz się...</a></li> ';
$tablica[6]='<li><a href="muttausiedziba.php">Idąc przez las spotykasz starca podpierającego się laską, postanawiasz podejść...</a></li> ';
$tablica[7]='<li><a href="">Zatrzymujesz się podziwiając przepiękny krajobraz, po chwili ocknowszy się ruszasz dalej.</a></li> ';
$tablica[8]='<li><a href="">Nieprzytomny padasz ze zmęczenia, po chwili zdezorientowany podnosisz się i ruszasz dalej...</a></li> ';
$tablica[9]='<li><a href="">Widzisz przed sobą sporej wielkości skałę, postanawiasz odpocząć na niej...</a></li> ';
$tablica[10]='<li><a href="">Wędrując między drzewami napotykasz stado węży, postanawiasz zawrócić i ominąć je.</a></li> ';
$tablica[11]='<li><a href="">Błądząc miedzy drzewami wspinasz się na jedno z nich by odnaleźć drogę...</a></li>';
$tablica[12]='<li><a href="">Oczarowany śpiewem ptaków przystajesz na chwilę wsłuchując się w ich śpiew.</a></li>';
$tablica[13]='<li><a href="">Pośród drzew usłyszałeś jak coś w oddali biegnie w twoją strone, zaczynacz uciekać...</a></li> ';
$tablica[14]='<li><a href="">Znudzony drogą siadasz na pobliskim kamieniu i rozglądasz się za właściwym kierunkiem.</a></li>';
$tablica[15]='<li><a href="">Idąc przez las zaptrzymujesz się przed pięknym stawem, niestety msisz go ominąć...</a></li>';
$tablica[16]='<li><a href="">Po wielogodzinnej wędrówce przyspieszasz mając nadzieję na szybkie odnalezienie celu.</a></li>';
$tablica[17]='<li><a href="">Idąc pośród drzew zarośniętych kolcami ranisz się w rękę. Zabezpieczasz ranę i ruszasz dalej...</a></li> ';
$tablica[18]='<li><a href="">Mgła spowiła las. Siadasz i czekasz aż się rozrzedzi umożliwiając Ci dalszą wędrówkę.</a></li> ';

$klucz=array_rand($tablica);
print($tablica[$klucz]."<br>");
$smarty -> display ('opuszczonakopalnia.tpl');

require_once("includes/foot.php");
?>
