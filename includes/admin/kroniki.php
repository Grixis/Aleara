<?php
//pobierz z bazy ostatnie 10 wpisów.
$kroniki=$db -> Execute("Select * from kroniki order by id desc limit 10");
$i = 0;
$id=array();
$author=array();
$text=array();
while (!$kroniki -> EOF) 
{
	$id[$i]=$kroniki->fields['id'];
	$author[$i]=$kroniki->fields['author'];
	$text[$i]=$kroniki->fields['text'];
	$i++;
	$kroniki->MoveNext();
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
mysql_query("insert into kroniki (author, text) values ('".$player->user."','".$_POST['text']."')") or die(mysql_error());
mysql_query("INSERT INTO log (owner, log, unread, czas) VALUES (".$odbio['id'].", '<b>Właśnie pojawił się nowy wpis w kronikach Aleary</b>', 'F', now() );") or die("Błąd");
	   
	    
	






	error("Możesz poczuś się zajebisty(a) ponieważ dodałeś(aś) news w kronikach. Wszyscy kochają Dema xD");
}
}
//that's all folks! 
?>