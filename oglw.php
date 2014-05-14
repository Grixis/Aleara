<?php
$title = "Dodaj Ogloszenie";
$title1= "Dodaj Ogloszenie";
require_once("includes/head.php");
if ($player -> location != "Altara") {
error ("Nie masz prawa przebywać tutaj.");
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$smarty -> assign ( array("Button" => "Dodaj ogloszenie", "Link" => "oglw.php?action=add"));

// dodawanie nowej wie¶ci
if (isset ($_GET['action']) && $_GET['action'] == 'add') {

if (empty($_POST['addtitle']) || empty($_POST['oglw'])) {
error ("Wypełnij wszystkie pola.");
}
$_POST['oglw'] = nl2br($_POST['oglw']);
$db -> Execute("INSERT INTO ogloszenia (starter, title, ogloszenia) VALUES('(".$player->user.")','".$_POST['addtitle']."','".$_POST['oglw']."')") or error("Wystąpił błąd przy dodawaniu ogloszenia");
error ("Ogloszenie dodane.");
}

// modifikacja wie¶ci
if (isset ($_GET['modify'])) {
if (!ereg("^[1-9][0-9]*$", $_GET['modify'])) {
error ("Zapomnij o tym!");
}
$update = $db -> Execute("SELECT * FROM updates WHERE id=".$_GET['modify']);
$smarty -> assign ( array("Title1" => $update -> fields['title'], "Text" => $update -> fields['ogloszenia'], "Button" => "Modyfikuj", "Link" => "oglw.php?action=modify&updid=".$update -> fields['id']));
$update -> Close();
}

//zapisywanie modyfikacji istniej±cej wiadomo¶ci
if (isset ($_GET['action']) && $_GET['action'] == 'modify') {
if (empty($_POST['addtitle']) || empty($_POST['oglw'])) {
error ("Wypełnij wszystkie pola.");
}
if (!ereg("^[1-9][0-9]*$", $_GET['updid'])) {
error ("Zapomnij o tym!");
}
$uid = $db -> Execute("SELECT id FROM updates WHERE id=".$_GET['updid']);
if ($uid -> fields['id']) {
$_POST['oglw'] = nl2br($_POST['oglw']); 
$db -> Execute("UPDATE ogloszenia SET title='".$_POST['addtitle']."' WHERE id=".$_GET['updid']);
$db -> Execute("UPDATE ogloszenia SET ogloszenia='".$_POST['oglw']."' WHERE id=".$_GET['updid']);
error ("Ogloszenie zmodyfikowana.");
} else {
error ("Nie ma takiej wiadomości!");
}
$uid -> Close();
}

$smarty -> display('oglw.tpl');

require_once("includes/foot.php");
?>






i oglw.tpl: