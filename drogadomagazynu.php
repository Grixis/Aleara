<?php
$title = "Opuszczona Kopalnia - Wejście";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}





echo('<center><img src="akta.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>');
$tablica[0]='<li><a href="">Nie potrafiąc się na niczym skupić chodzisz od jednego do drugiego końca magazynu.</a></li> ';
$tablica[1]='<li><a href="">Nucąc ze znudzenia szukasz dalej.</a></li> ';
$tablica[3]='<li><a href="">Podchodzisz do zakurzonych akt. Okazują się aktami Aleary z początków jej istnienia, nie jest to jednak tym czego szukałeś. Odchodzisz...</a></li> ';
$tablica[4]='<li><a href="">Przechadzasz się po magazynie pomiędzy stertami akt...</a></li> ';
$tablica[5]='<li><a href="">W zakamarkach magazynu dostrzegasz wielkie pudło. Postanawiasz je otworzyć. Zauważyłeś tam szczątki dziwnego stworzenia. Żałując decyzji o otwarciu pudła postanawiasz wrócić czym prędzej do przeszukiwania akt.</a></li> ';
$tablica[6]='<li><a href="akty.php">Natrafiasz na stare akta opuszczonej kopalni, zaciekawiony zaczynasz czytać..</a></li> ';
$tablica[7]='<li><a href="">Dusząc się kurzem w magazynie szukasz okna które dało by się otworzyć.</a></li> ';
$tablica[8]='<li><a href="">Przestraszywszy się szczura potrąciłeś stos akt które padły z hukiem na ziemię unosząc w powietrzu kurz, który powoli znów zaczął opadać w dół. Zły na samego siebie zbierasz papiery.</a></li> ';
$tablica[9]='<li><a href="">Rozglądasz się po magazynie, jednak nic nie przykuło Twojej uwagi.</a></li> ';
$tablica[10]='<li><a href="">Znudzony przeszukiwaniem archiwum postanawiasz zrobić sobie przerwę.</a></li> ';
$tablica[11]='<li><a href="">Przeszukujesz akta,niestety nie znalazłeś nic sensownego.</a></li>';
$tablica[12]='<li><a href="">Znudzony opadasz na krzesło stojące obok siebie i zasypiasz. Gdy się ocknąłeś zabierasz sie nadal do poszukiwań</a></li>';
$tablica[13]='<li><a href="">Nie potrafisz znaleźć potrzebnych Ci akt.</a></li> ';
$tablica[14]='<li><a href="">Ani śladu po tym w związku z czym przybyłeś...</a></li>';
$tablica[15]='<li><a href="">Nie potrafiąc się na niczym skupić chodzisz od jednego do drugiego końca magazynu.</a></li> ';
$tablica[16]='<li><a href="">Nucąc ze znudzenia szukasz dalej.</a></li> ';
$tablica[17]='<li><a href="">Podchodzisz do zakurzonych akt. Okazują się aktami Aleary z początków jej istnienia, nie jest to jednak tym czego szukałeś. Odchodzisz...</a></li> ';
$tablica[18]='<li><a href="">Przechadzasz się po magazynie pomiędzy stertami akt...</a></li> ';
$tablica[19]='<li><a href="">W zakamarkach magazynu dostrzegasz wielkie pudło. postanawiasz je otworzyć. Zauważyłeś tam szczątki dziwnego stworzenia. Żałując decyzji o otwarciu pudła postanawiasz wrócić czym prędzej do przeszukiwania akt.</a></li> ';
$tablica[20]='<li><a href="">Nie potrafiąc się na niczym skupić chodzisz od jednego do drugiego końca magazynu.</a></li> ';
$tablica[21]='<li><a href="">Nucąc ze znudzenia szukasz dalej.</a></li> ';
$tablica[22]='<li><a href="">Podchodzisz do zakurzonych akt. Okazują się aktami Aleary z początków jej istnienia, nie jest to jednak tym czego szukałeś. Odchodzisz...</a></li> ';
$tablica[23]='<li><a href="">Przechadzasz się po magazynie pomiędzy stertami akt...</a></li> ';
$tablica[24]='<li><a href="">W zakamarkach magazynu dostrzegasz wielkie pudło. postanawiasz je otworzyć. Zauważyłeś tam szczątki dziwnego stworzenia. Żałując decyzji o otwarciu pudła postanawiasz wrócić czym prędzej do przeszukiwania akt.</a></li> ';
$tablica[25]='<li><a href="">Dusząc się kurzem w magazynie szukasz okna które dało by się otworzyć.</a></li> ';
$tablica[26]='<li><a href="">Przestraszywszy się szczura potrąciłeś stos akt które padły z hukiem na ziemię unosząc w powietrzu kurz, który powoli znów zaczął opadać w dół. Zły na samego siebie zbierasz papiery.</a></li> ';
$tablica[27]='<li><a href="">Rozglądasz się po magazynie, jednak nic nie przykuło Twojej uwagi.</a></li> ';
$tablica[28]='<li><a href="">Znudzony przeszukiwaniem archiwum postanawiasz zrobić sobie przerwę.</a></li> ';
$tablica[29]='<li><a href="">Przeszukujesz akta, niestety nie znalazłeś nic sensownego.</a></li>';
$tablica[30]='<li><a href="">Znudzony opadasz na krzesło stojące obok siebie i zasypiasz. Gdy się ocknąłeś zabierasz sie nadal do poszukiwań</a></li>';
$tablica[31]='<li><a href="">Nie potrafisz znaleźć potrzebnych Ci akt.</a></li> ';
$tablica[32]='<li><a href="">Ani śladu po tym w związku z czym przybyłeś...</a></li>';
$tablica[33]='<li><a href="">Dusząc się kurzem w magazynie szukasz okna które dało by się otworzyć.</a></li> ';
$tablica[34]='<li><a href="">Przestraszywszy się szczura potrąciłeś stos akt które padły z hukiem na ziemię unosząc w powietrzu kurz, który powoli znów zaczął opadać w dół. Zły na samego siebie zbierasz papiery.</a></li> ';
$tablica[35]='<li><a href="">Rozglądasz się po magazynie, jednak nic nie przykuło Twojej uwagi.</a></li> ';
$tablica[36]='<li><a href="">Znudzony przeszukiwaniem archiwum postanawiasz zrobić sobie przerwę.</a></li> ';
$tablica[37]='<li><a href="">Przeszukujesz akta,niestety nie znalazłeś nic sensownego.</a></li>';
$tablica[38]='<li><a href="">Znudzony opadasz na krzesło stojące obok siebie i zasypiasz. Gdy się ocknąłeś zabierasz sie nadal do poszukiwań</a></li>';
$tablica[39]='<li><a href="">Nie potrafisz znaleźć potrzebnych Ci akt.</a></li> ';
$tablica[40]='<li><a href="">Ani śladu po tym w związku z czym przybyłeś...</a></li>';







$klucz=array_rand($tablica);
print($tablica[$klucz]."<br>");















$smarty -> display('drogadomagazynu.tpl');
require_once("includes/foot.php"); 
?>
