<?php
$title="Panel Kostuchy";
require_once("includes/head.php");
if ($player -> rank !="Kostuch" && $player -> rank != 'Admin' && $player -> rank != 'Staff')
{
	error("Wyjdź śmiertelniku!");
}
$wynik=$db->Execute("Select value from settings where setting='open_grave'");
$otwarte=$wynik->fields['value'];
if ($otwarte =="Y")
{
	$info="Bramy cmentarza są otwarte";
}
else
{
	$info="Bramy cmentarza są zamknięte";
}
$welcome="Jesteś w siedlisku Kostuchy. Co chcesz zrobić?";

if (isset($_GET['step']) and $_GET['step']=="open")
{	
	if ($otwarte=="Y")
	{
		error("Wygląda na to że chcesz otworzyć otwarty cmentarz");
	}
	$db->Execute("UPDATE settings SET value='Y' WHERE setting='open_grave'");
	error("Cmentarz został otwarty");
}
if (isset($_GET['step']) and $_GET['step']=="close")
{	
	if ($otwarte=="N")
	{
		error("Wygląda na to że chcesz zamknąć zamknięty cmentarz");
	}
	$db->Execute("UPDATE settings SET value='N' WHERE setting='open_grave'");
	error("Cmentarz został zamknięty");
}
if (isset ($_GET['step']) && $_GET['step'] == 'send')
{
        if (empty ($_POST['body']) || empty($_POST['subject']))
        {
            error ("Wypełnij wszystkie pola");
        }
        $_POST['subject'] = strip_tags($_POST['subject']);
        $_POST['body'] = strip_tags($_POST['body']);
        $strSubject = $db -> qstr($_POST['subject'], get_magic_quotes_gpc());
        $strBody = $db -> qstr($_POST['body'], get_magic_quotes_gpc());
        $strDate = $db -> DBDate($newdate);
        $odbio = $db -> Execute("SELECT id FROM players");
        $gracze = 0;
        while (!$odbio -> EOF)
        {
            $db -> Execute("INSERT INTO mail (sender, senderid, owner, subject, body, date) VALUES('".$player -> user."','".$player -> id."',".$odbio -> fields['id'].", ".$strSubject.", ".$strBody.", ".$strDate.")") or error(E_DB);
            $gracze = $gracze + 1;
            $odbio -> MoveNext();
        }
        $odbio -> Close();
        error ("Wysłano wiadomość do ".$gracze." graczy");
}
$smarty -> assign("Welcome", $welcome);
$smarty -> assign("Info", $info);

$smarty -> display("kostuch.tpl");
require_once("includes/foot.php");
?>