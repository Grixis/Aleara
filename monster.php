<?php
@require_once('includes/config.php');
$show=$_GET['show'];
if (!is_numeric($show))
{
	die('No possible.');
}
$result=mysql_query("Select * from monsters where id=".$show) or die('No monsta :(');
$monster=mysql_fetch_array($result);
$avatar=strtolower($monster['name']);
$avatar=str_replace('ą','a',$avatar);
$avatar=str_replace('ę','e',$avatar);
$avatar=str_replace('ł','l',$avatar);
$avatar=str_replace('ć','c',$avatar);
$avatar=str_replace('ń','n',$avatar);
$avatar=str_replace('ś','s',$avatar);
$avatar=str_replace('ż','z',$avatar);
$avatar=str_replace('ź','z',$avatar);
$avatar=str_replace('ó','o',$avatar);
$avatar=str_replace(' ','_',$avatar);

$display="<center><h1>".$monster['name']."</h1></center><br>";
$display.="<center><img src='images/beasts/".$avatar.".jpg'/></center>";
$display.="<ul><li>Poziom: ".$monster['level']."</li>";
$display.="<li>Punkty życia: ".$monster['hp']."</li>";
$display.="<li>Doświadczenie: ".$monster['exp1']."-".$monster['exp2']."</li>";
$display.="<li>Złoto za wygraną: ".$monster['credits1']."-".$monster['credits2']."</li></ul><br>";
$display.="<p>".$monster['description']."</p><br>";
$display.="Szybka walka:<br>";
$display.='<form method="post" action="battle.php?action=monster&amp;fight='.$show.'">';
$display.='<input type="submit" value="Walcz" /> Jednocześnie z <input type="text" size="5" name="razy" value="1" /> potworami ';
$display.='<input type="text" size="5" name="times" value="1" /> razy</form><br>';
$display.='Walka turowa:<br>';     
$display.='<form method="post" action="battle.php?action=monster&amp;fight1='.$show.'">';
$display.='<input type="submit" value="Walcz" /> jednocześnie z <input type="text" size="5" name="razy" value="1" /> potworami ';
$display.='<input type="hidden" name="write" value="Y" /></form>';
                
print($display);
?>