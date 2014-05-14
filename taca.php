<?php
$title = "Wrzuć na tacę";
require_once("includes/head.php");

$smarty -> assign("Message", '');

if (isset ($_GET['action']) && $_GET['action'] == 'kop') {
    if (isset($_GET['dalej'])) {
        
        $db -> Execute("UPDATE players SET credits=credits-".$_POST['rep']." WHERE id=".$player -> id);
        $db -> Execute("UPDATE players SET credits=credits+".$_POST['rep']." WHERE id=21");

        $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES (21,\'Gracz o ID: '.$player -> id.' wrzucił na Twoją tacę złoto w ilości: '.$_POST['rep'].'\', 0)');
         
        
        
  $smarty -> assign ("Message", "Wrzuciłeś na tacę ".$_POST['rep']." sztuk złota.");
    }
}


if (!isset($_GET['action'])) {
    $_GET['action'] = '';
}

$smarty -> assign( array("Action" => $_GET['action']));
$smarty -> display('taca.tpl');
require_once("includes/foot.php"); 
?>
