<?php
$title = 'Wyjście Z Opuszczonej Kopalni';
require_once('includes/head.php');

$adresat = mysql_query("select * from players");
while ($odbio = mysql_fetch_array($adresat)) {


mysql_query("INSERT INTO log (owner, log, unread, czas) VALUES (".$odbio['id'].", '<b>Właśnie pojawiła się nowa plotka w Zakątku Plotkarskim.</b>', 'F', now() );") or die("Błąd");
}
$smarty -> display('bierznajemnika.tpl');
require_once("includes/foot.php"); 
?>
