<?php

$title = "Wielka Puszcza Krutynów";
require_once("includes/head.php");

/**
* Get the localization for game
*/
$tablica[0]='<li><a href="">Wędrowałeś sobie dróżką lecz nic nie zauważyłeś.</a></li> ';
$tablica[1]='<li><a href="">Wędrując drużką dostrzegłeś wystające wielkie rogi zza zarośli... Postanawiasz zawrócić, aby nie pakować się w kłopoty.</a></li> ';
$tablica[3]='<li><a href="pustynia.php">Przedzierając się przez puszczę napotykasz na swojej drodze wielki głaz skalny. Jest na nim jednak jakiś znak! Wskazuje on Ci drogę! Idziesz we wskazanym kierunku i dochodzisz na wielką Pustynię Wymarłych. Idziesz dalej.</a></li> ';
$tablica[4]='<li><a href="">Błąkasz się bezcelowo po Puszczy Krutynów. Nie potrafisz się na niczym skupić. Siadasz i odpoczywasz. </a></li> ';
$tablica[5]='<li><a href="wjaskinia.php">Idąc drogą grunt pod Tobą się zapada. Wpadasz do Wielkiej Jaskini Jastrzębia. Rozglądasz się wokół i widzisz przed sobą wielkie podziemne korytarze! Na dnie leżą sztabki złota! Postanawiasz iść dalej!</a></li> ';
$tablica[6]='<li><a href="">Jesteś zmęczony i siadasz na pniu starego drzewa aby odpocząć.</a></li> ';
$tablica[7]='<li><a href="">Przed Tobą pojawia się Krzykacz! Zdajesz sobie sprawę z tego, iż nie jesteś zbyt silny aby z nim walczyć! Zaczynasz uciekać. Po chwili ucieczki widzisz drzewo na które można łatwo się wspiąć. Tak właśnie robisz. Czekasz tam chwilę aż Krzykacz odejdzie. Tak się stało! Idziesz dalej!</a></li> ';
$tablica[8]='<li><a href="">Idąc ścieżką zaplątałeś się we liany... zdejmujesz to z siebie i wędrujesz dalej.</a></li> ';
$tablica[9]='<li><a href="">Potykasz się o kamień. Wstajesz i wędrujesz dalej.</a></li> ';
$tablica[10]='<li><a href="">Twoją uwagę odwraca święcąca biżuteria. Podnosisz pierścień z ziemi i zakładasz na palec. Niestety pierścień spalił się na Twojej dłoni. Widocznie był magiczny. Postanawiasz wędrować dalej</a></li> ';
$tablica[11]='<li><a href="">Nic ciekawego nie zwróciło Twojej uwagi... Chwilę stoisz w miejscu rozglądając się, czy rzeczywiście tutaj nic nie ma. Postanawiasz jednak podążać dalej.</a></li> ';
$tablica[12]='<li><a href="">Idąc drogą miałeś wrażenie, że nie chodzisz po zwykłej ziemi. Spoglądasz w dół i widzisz na ziemi kości! To cmentarzysko! Nie wiedząc co Cię tu czeka zawracasz szybko!.</a></li> ';
$tablica[13]='<li><a href="">Upadasz ze zmęcznia na ziemię. Budzisz się po chwili i powolnym krokiem idziesz dalej.</a></li> ';
$tablica[14]='<li><a href="">Zabłądziłeś ofermo!</a></li> ';
$tablica[15]='<li><a href="">Widzisz przed sobą wielki smaczny kwiat. Zjadasz go po czym wędrujesz dalej.</a></li> ';
$tablica[16]='<li><a href="puszczazagajnik.php">Widzisz przed sobą zagajnik. Podchodzisz bliżej!</a></li> ';
$tablica[17]='<li><a href="">Wędrowałeś sobie dróżką lecz nic nie zauważyłeś.</a></li> ';
$tablica[18]='<li><a href="">Wędrując drużką dostrzegłeś wystające wielkie rogi zza zarośli... Postanawiasz zawrócić, aby nie pakować się w kłopoty.</a></li> ';
$tablica[19]='<li><a href="">Błąkasz się bezcelowo po Puszczy Krutynów. Nie potrafisz się na niczym skupić. Siadasz i odpoczywasz. </a></li> ';
$tablica[20]='<li><a href="">Jesteś zmęczony i siadasz na pniu starego drzewa aby odpocząć.</a></li> ';
$tablica[21]='<li><a href="">Przed Tobą pojawia się Krzykacz! Zdajesz sobie sprawę z tego, iż nie jesteś zbyt silny aby z nim walczyć! Zaczynasz uciekać. Po chwili ucieczki widzisz drzewo na które można łatwo się wspiąć. Tak właśnie robisz. Czekasz tam chwilę aż Krzykacz odejdzie. Tak się stało! Idziesz dalej!</a></li> ';
$tablica[22]='<li><a href="">Idąc ścieżką zaplątałeś się we liany... zdejmujesz to z siebie i wędrujesz dalej.</a></li> ';
$tablica[23]='<li><a href="">Potykasz się o kamień. Wstajesz i wędrujesz dalej.</a></li> ';
$tablica[24]='<li><a href="">Twoją uwagę odwraca święcąca biżuteria. Podnosisz pierścień z ziemi i zakładasz na palec. Niestety pierścień spalił się na Twojej dłoni. Widocznie był magiczny. Postanawiasz wędrować dalej</a></li> ';
$tablica[25]='<li><a href="">Nic ciekawego nie zwróciło Twojej uwagi... Chwilę stoisz w miejscu rozglądając się, czy rzeczywiście tutaj nic nie ma. Postanawiasz jednak podążać dalej.</a></li> ';
$tablica[26]='<li><a href="">Idąc drogą miałeś wrażenie, że nie chodzisz po zwykłej ziemi. Spoglądasz w dół i widzisz na ziemi kości! To cmentarzysko! Nie wiedząc co Cię tu czeka zawracasz szybko!.</a></li> ';
$tablica[27]='<li><a href="">Upadasz ze zmęcznia na ziemię. Budzisz się po chwili i powolnym krokiem idziesz dalej.</a></li> ';
$tablica[28]='<li><a href="">Zabłądziłeś ofermo!</a></li> ';
$tablica[29]='<li><a href="">Widzisz przed sobą wielki smaczny kwiat. Zjadasz go po czym wędrujesz dalej.</a></li> ';





$klucz=array_rand($tablica);
print($tablica[$klucz]."<br>");



$test = $db -> Execute("SELECT kly FROM players WHERE id=".$player -> id);
$kly= $test -> fields['kly'];
$denars = $test -> fields['soul'];


$smarty -> assign(array("kly" => $kly));
$smarty -> display ('bagnisko2.tpl');

require_once("includes/foot.php");
?>
