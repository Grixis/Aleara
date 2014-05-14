<?php

$title = "Pustynia Wymarłych";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/
$tablica[0]='<li><a href="">Wędrowałeś po pustyni lecz nic nie zauważyłeś.</a></li> ';
$tablica[1]='<li><a href="">Idąc pustynią na horyzoncie pojawiło się wielkie cmentarzysko. Już wiesz skąd ta nazwa pustyni. Jednak nie masz odwagi tam iść i idziesz w inną stronę.</a></li> ';
$tablica[3]='<li><a href="piramida.php">Przed sobą widzisz wielką piramidę. Jest ona bardzo stara i sypie się na Twoich oczach.Zastanawiasz się czy wchodzić do środka. Po namyśle postanawiasz zaryzykować. Wchodzisz do środka!</a></li> ';
$tablica[4]='<li><a href="">Słońce świeci tak mocno że siadasz pod palmą i odpoczywasz. Jednak po chwili idziesz dalej</a></li> ';
$tablica[5]='<li><a href="">Zobaczyłeś kaktusy na swojej drodze. Wyciągasz maczetę, rozcinasz je i pijesz sok z nich.</a></li> ';
$tablica[6]='<li><a href="">Rozpętała się burza piaskowa. Zakrywasz oczy i czekasz aż minie</a></li> ';
$tablica[7]='<li><a href="">Piasek pod Twoimi stopami osuwa się powoli. Szybko uciekasz w podskokach.</a></li> ';
$tablica[8]='<li><a href="">Widzisz przed sobą wielkie cienie, Nie wiesz jak się uchronić. Zakopujesz się w piasku. Widać Ci tylko oczy. Przeczekujesz ich obecność. Potem wychodzisz i wędrujesz dalej.</a></li> ';
$tablica[9]='<li><a href="">Padasz na piach ze zmęczenia. Tracisz przytomność i budzisz się dopiero po pewnym czasie..</a></li> ';
$tablica[10]='<li><a href="">Siadasz na piachu  tracąc nadzieję na to, że wyjdziesz stąd żywy.</a></li> ';$klucz=array_rand($tablica);
print($tablica[$klucz]."<br>");



$test = $db -> Execute("SELECT kly FROM players WHERE id=".$player -> id);
$kly= $test -> fields['kly'];
$denars = $test -> fields['soul'];


$smarty -> assign(array("kly" => $kly));
$smarty -> display ('pustynia.tpl');

require_once("includes/foot.php");
?>
