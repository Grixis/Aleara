<?php
//pobierz z bazy ostatnie 10 wpisów.
$newsy=$db -> Execute("Select * from newsy order by id desc limit 10");
$i = 0;
$id=array();
$author=array();
$text=array();
while (!$newsy -> EOF) 
{
	$id[$i]=$newsy->fields['id'];
	$author[$i]=$newsy->fields['author'];
	$text[$i]=$newsy->fields['text'];
	$i++;
	$newsy->MoveNext();
}
//teraz wyświetlamy
$smarty -> assign('Id',$id);
$smarty -> assign('Author',$author);
$smarty -> assign('Text',$text);
//ok, teraz można jakiś dodać
if (isset($_GET['step']) && $_GET['step'] == "add")
{


$adresat = mysql_query("select * from players");
while ($odbio = mysql_fetch_array($adresat)) {
mysql_query("insert into newsy (author, text) values ('".$player->user."','".$_POST['text']."')") or die(mysql_error());
mysql_query("INSERT INTO log (owner, log, unread, czas) VALUES (".$odbio['id'].", '<b>Właśnie zaktualizowano newsy krainy!</b>', 'F', now() );") or die("Błąd");
	   
	   
	   
	
	error("Możesz poczuś się zajebisty ponieważ dodałęś newsa.");
}
}
//that's all folks! 
?>