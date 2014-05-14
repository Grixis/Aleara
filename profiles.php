<?php
@require_once('includes/config.php');
$id=$_GET['id'];
if (!is_numeric($id))
{
	print("<center>Błąd podczas wczytywania</center>");
	exit();
}
$test=mysql_query('SELECT id, text FROM profiles WHERE id='.$id);
$profile=mysql_fetch_array($test);
if (!$profile['id'])
{
	print("<br><br><hr><center>Błąd podczas wczytywania</center><hr><br><br>");
	exit();
}
else {
	print($profile['text']);
	}
?>