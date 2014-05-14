<?php
$title = "Pole ziemniaków";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
// inicjalizacja zmiennej
$smarty -> assign("Message", '');
//
if (isset ($_GET['action']) && $_GET['action'] == 'kop') {
    if (isset($_GET['dalej'])) {
        if ($_POST['rep'] <= 0) {
            error ("Wpisz ilę czasu (energii) chcesz przepracować na polu!");
        }
        if (!ereg("^[1-9][0-9]*$", $_POST['rep'])) {
            error ("Zapomnij o tym");
        }
        if ($player -> hp == 0) {
            error ("Nie możesz kopać ponieważ jesteś martwy!");
        }
        $razy = ($_POST['rep'] * 0.2);
        if ($player -> energy < $razy) {
            error ("Nie masz tyle energii!");
        }
        $smarty -> assign ("Message", "Kopałeś przez pewien czas i wykopałeś ".$_POST['rep']." ziemniaków.");
        $db -> Execute("UPDATE players SET energy=energy-".$razy." WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET ziemniaki=ziemniaki+".$_POST['rep']." WHERE id=".$player -> id);
    }
}

// inicjalizacja zmiennej
if (!isset($_GET['action'])) {
    $_GET['action'] = '';
}
// przypisanie zmiennych oraz wy¶wietlenie strony
$smarty -> assign( array("Action" => $_GET['action']));
$test = $db -> Execute("SELECT ziemniaki FROM players WHERE id=".$player -> id);
$ziemniaki = $test -> fields['ziemniaki'];
$smarty -> assign(array("ziemniaki" => $ziemniaki));





$smarty -> display('ziemniaki.tpl');
require_once("includes/foot.php"); 
?>
