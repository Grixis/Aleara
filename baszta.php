<?php
$title = "Baszta Najemnikow";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jeste w lochu - nie mo¿esz tutaj przebywaæ.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
// przypisanie zmiennej
$smarty -> assign("Avatar", '', "Cost", $cost);
$cost = ($player -> level * 5000);

//przyznawanie immunitetu bitewnego duzego
if (isset ($_GET['view']) && $_GET['view'] == "immu1") {
if (isset ($_GET['step']) && $_GET['step'] == 'yes') {
if ($player -> immunited == 'Y') {
error ("Posiadasz juz ochronê!");
}
if ($player -> credits < $cost) {
error ("Nie masz tyle pieniedzy!");
}
if ($player -> clas == '') {
error ("Musisz najpierw wybrac klase postaci");
}
$db -> Execute("UPDATE players SET immu='Y' WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET credits=credits-".$cost." WHERE id=".$player -> id);
}
}
//przyznawanie immunitetu bitewnego malego
if (isset ($_GET['view']) && $_GET['view'] == "immu3") {
if (isset ($_GET['step']) && $_GET['step'] == 'no') {
if ($player -> immunited == 'N') {
error ("Nie możesz odwołać ochrony, której nie posiadasz");
}
if ($player -> credits < $cost) {
error ("Nie masz tyle pieniedzy!");
}
if ($player -> clas == '') {
error ("Musisz najpierw wybrac klase postaci");
}
$db -> Execute("UPDATE players SET immu='N' WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET strength=strength*0.8, agility=agility*0.8, szyb=szyb*0.8, inteli=inteli*0.8, wisdom=wisdom*0.8, credits=credits-".$cost." WHERE id=".$player -> id);
}
}


//inicjalizacja zmiennych
if (!isset($_GET['view'])) {
$_GET['view'] = '';
}
if (!isset($_GET['step'])) {
$_GET['step'] = '';
}
//przypisanie zmiennych i wy¶wietlenie strony
$smarty -> assign (array ("View" => $_GET['view'], "Step" => $_GET['step']));
$smarty -> display('baszta.tpl');
require_once("includes/foot.php");
$db -> Close();
?>
