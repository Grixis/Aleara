<?php

$title = "Czerwona Latarnia";
require_once("includes/head.php");
require_once("includes/checkexp.php");
$test = $db -> Execute("SELECT id FROM players WHERE `id`=".$player -> id);
$id = $test -> fields['id'];
$smarty -> assign(array("id" => $id));
//if ($id == 735) {
    //  error ('Black, wypierdalaj kurwa do żony! Kuchira w łóżku czeka, a nie będziesz dziwki rżnął non stop.');
//}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
$exp1 = ($player -> level * 1);
$exp2 = ($player -> level * 4);
$exp3 = ($player -> level * 8);
if (isset ($_GET ['action']) && $_GET ['action'] == 'zabaw'){
error ('<center><IMG SRC="images/locations/latarnia.png"></center><br>Widzę że chcesz się zabawić. Doświadczenie jakie zdobędziesz jest adekwatne dla Twojego poziomu postaci. Możesz korzystać z usług pracowników Latarnii tylko 5 razy na reset. Zapraszamy masz duży wybór:
<br> <center><b><li>Dla panów:</li></b></center> <br>
<center><li><a href="houselure.php?action=Eilidia">Eilida (za 1000 złota otrzymasz '.$exp1.' pkt exp.</a></li>
<li><a href="houselure.php?action=Karshala">Karshala (za 2000 złota otrzymasz '.$exp2.' pkt exp.)</a></li>
<li><a href="houselure.php?action=Arenturia">Arenturia (za 5000 złota otrzymasz '.$exp3.' pkt exp.)</a></li></center> <br>
<br> <center><b><li>Dla pań:</li></b></center> <br>
<center><li><a href="houselure.php?action=Herkulan">Herkulan (za 1000 złota otrzymasz '.$exp1.' pkt exp.)</a></li>
<li><a href="houselure.php?action=Illiadar">Illiadar (za 2000 złota otrzymasz '.$exp2.' pkt exp.)</a></li>
<li><a href="houselure.php?action=Oragon">Oragon (za 5000 złota otrzymasz '.$exp3.' pkt exp.)</a></li><br>
<hr align=center width=150><br>
<li><a href="houselure.php">Wracaj</a></li></center>
<br />');
}
	if (isset ($_GET['action']) && $_GET['action'] == 'Herkulan' || $_GET['action'] == 'Eilidia'){
$house = $db -> Execute("SELECT burdel FROM players WHERE id=".$player -> id);
$burdel = $house -> fields['burdel'];
if (2000 > $player -> credits) {
      error ('<center><IMG SRC="images/locations/latarnia.png"></center>Nie masz wystarczającej ilości pieniędzy');
}
if ($burdel > 4) {
      error ('<center><IMG SRC="images/locations/latarnia.png"></center>Możesz korzystać z usług tylko 5 razy na reset!');
}
$exp1 = ($player -> level * 1);
$db -> Execute("UPDATE players SET credits=credits-1000 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET houselure=houselure+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET burdel=burdel+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET exp=exp+".$exp1." WHERE id=".$player -> id);

	error ('<center><IMG SRC="images/locations/latarnia.png"></center>Zabawiałeś się całą noc czując że zdobywasz nowe doświadczenia');		
		}
		
             
if (isset ($_GET['action']) && $_GET['action'] == 'Illiadar' || $_GET['action'] == 'Karshala' ){
$house = $db -> Execute("SELECT burdel FROM players WHERE id=".$player -> id);
$burdel = $house -> fields['burdel'];
if (2000 > $player -> credits) {
      error ('<center><IMG SRC="images/locations/latarnia.png"></center>Nie masz wystarczającej ilości pieniędzy');
}
if ($burdel > 4) {
      error ('<center><IMG SRC="images/locations/latarnia.png"></center>Możesz korzystać z usług tylko 5 razy na reset!');
}
$exp2 = ($player -> level * 4);
$db -> Execute("UPDATE players SET credits=credits-2000 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET houselure=houselure+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET burdel=burdel+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET exp=exp+".$exp2." WHERE id=".$player -> id);

	error ('<center><IMG SRC="images/locations/latarnia.png"></center>Zabawiałeś się całą noc czując że zdobywasz nowe doświadczenia');		
		
  }               
if (isset ($_GET['action']) && $_GET['action'] == 'Oragon' || $_GET['action'] == 'Arenturia'){
$house = $db -> Execute("SELECT burdel FROM players WHERE id=".$player -> id);
$burdel = $house -> fields['burdel'];
if (5000 > $player -> credits) {
      error ('<center><IMG SRC="images/locations/latarnia.png"></center>Nie masz wystarczającej ilości pieniędzy');
}
if ($burdel > 4) {
      error ('<center><IMG SRC="images/locations/latarnia.png"></center>Możesz korzystać z usług tylko 5 razy na reset!');
}
$exp3 = ($player -> level * 8);
$db -> Execute("UPDATE players SET credits=credits-5000 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET houselure=houselure+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET burdel=burdel+1 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET exp=exp+".$exp3." WHERE id=".$player -> id);

	error ('<center><IMG SRC="images/locations/latarnia.png"></center>Zabawiałeś się całą noc czując że zdobywasz nowe doświadczenia');		
		
  }
$smarty -> display ("houselure.tpl");
require_once("includes/foot.php");
?>

