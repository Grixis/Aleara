<?php
//pobierz z bazy ostatnie 10 wpisów.
$weather=$db -> Execute("Select * from weather order by id desc limit 10");
$i = 0;
$id=array();
$author=array();
$text=array();
while (!$weather -> EOF) 
{
	$id[$i]=$weather->fields['id'];
	$author[$i]=$weather->fields['author'];
	$text[$i]=$weather->fields['text'];
	$i++;
	$weather->MoveNext();
}
//teraz wyświetlamy
$smarty -> assign('Id',$id);
$smarty -> assign('Author',$author);
$smarty -> assign('Text',$text);
//ok, teraz można jakiś dodać
if (isset($_GET['step']) && $_GET['step'] == "add")
{
	$db->Execute("insert into weather (author, text) values ('".$player->user."','".$_POST['text']."')") or die(mysql_error());
	error("Niczym jedno z bóstw zmieniłeś pogodę w krainie.");
}
//that's all folks! 
?>