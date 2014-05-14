<?php
@require_once('includes/config.php');
require_once('includes/franks.php');
require_once('includes/tags2.php');
require_once('includes/avatars.php');
$i=0;
mysql_query("Update players set lpv=".time()." where id=".$_GET['playerid']);

$resul1=mysql_query('Select * from players where lpv >='.(time()-180).' AND gametype !="invisible" ORDER by id ASC');

$online=mysql_affected_rows();

$arrRankImages = array(
						'Admin' => 'admin',
						'Staff' => 'ksiaze',
						'Sędzia' => 'sedzia',
						'Ławnik' => 'lawnik',
						'Prawnik' => 'prawnik',
						'Bibliotekarz' => 'bibliotekarz',
						'Rycerz' => 'rycerz',
						'Dama' => 'dama',
						'Marszałek Rady' => 'marszalek',
						'Redaktor' => 'redaktor',
						'Karczmarka' => 'karczmarz',
						'Techniczny' => 'techniczny',
						'Hero' => 'hero',
						'Magazynier' => 'magazynier',
						'Namiestnik' => 'namiestnik',
						'Prokurator' => 'ksiadz',
						'Strażnik Miejski' => 'straznik',
						'Murgrabia' => 'murgrabia',
						'Druid' => 'druid',
						'Królowa Potępionych' => 'admin',
						'Honorowy Mieszkaniec' => 'honorowy',
							'Hrabia' => 'hrabia',
						'Wielki Mistrz' => 'mistrz',
						'Gladiator' => 'gladiator',
						'Stary Dziad' => 'dziad',
						'Wskrzesiciel' => 'wskrzesiciel',
						'Kostuch' => 'kostuch',
						'Mistrz Gry' => 'mistrzgry',
						'Member' => 'mieszkaniec',
						'Member2' => '',
						'Bohater' => 'bohater',
						'Ksiądz' => 'ksiadz',
						'Kronikarz' => 'kronikarz',
						'Żebrak' => 'zebrak',
						'Żebraczka' => 'zebrak');

while($play=mysql_fetch_array($resul1))

{
	$i++;
	$rank=footselectrank($play['rank'],$play['gender'],'pl');
	//$name=getTaggedPlayerName($play['user'], $play['tribe'], $play['tribe_rank']);
	$name=$play['user'];
	
	print("<div class='menuleft' style='font-size: 10px'>");
	print("<div id='placeholder".$play['id']."'><font size=1><font color=#FFFFCC><font face=Verdana><img src=\"images/ranks/".$arrRankImages[$play['rank']].".png\" /> <font size=1><font color=#FFFFCC><font face=Verdana><span style='color:#FFFFCC' onmouseover=\"$('#box".$play['id']."').toggle('highlight', {color: 'grey'}); $('#box".$play['id']."').position({my: 'right center<font size=1><font color=#FFFFCC><font face=Verdana>', at:'left center', of: $('#placeholder".$play['id']."'), collision: 'none'}) \" onmouseout=\"$('#box".$play['id']."').toggle('highlight', {color: 'grey'}); \"><font size=1><font color=#FFFFCC><font face=Verdana>".$name."</span><span style='color: #FFFFCC'> <font size=1><font color=#C0C0C0><font face=Verdana>".$play['id']."</span></div>");

	print('<div class="opis" style="color: grey; font-size: 10px">     <table style="width: 170px"><tr><td><font size=1><font color=#669999><font face=Verdana>'.$play['opis'].'</td></tr></table>     </div>');
	print("</div>");
	print("<div class=\"ui-widget-content ui-corner-all \" style=\"display:none; position: absolute\" id=\"box".$play['id']."\">");
	print("<center><h3 class=\"ui-widget-header\">".$name." (".$play['id'].")</h3></center>");
	print("<table><tr><td><img src=\"images/ranks/".$arrRankImages[$play['rank']].".png\" width=\"34\" height=\"34\"/><font size=1><font color=#669999><font face=Verdana>".$rank."</td></tr><tr><td style=\"vertical-align: top; width: 100px\">");
	print("<br/><font size=1><font color=#669999><font face=Verdana>Poziom: ".$play['level']);
	print("<br/><font size=1><font color=#669999><font face=Verdana>Rasa: ".$play['rasa']);

	
	
	
	print("<br/><font size=1><font color=#669999><font face=Verdana>Klasa: ".$play['klasa']);
		print("<br/><font size=1><font color=#669999><font face=Verdana>Podklasa: ".$play['podklasaa']);
	
	
	if ($play['gender'] == "M")
	{
		print("<br/><font size=1><font color=#669999><font face=Verdana>Płeć: Mężczyzna");
	}
	else
	{
		print("<br/><font size=1><font color=#669999><font face=Verdana>Płeć: Kobieta");
	}
	if ($play['hp']>0)
	{
		print("<br/><font size=1><font color=#669999><font face=Verdana>Stan: <span style=\"color:green\">Żywy</span>");
	}
	else
	{
		print("<br/><font size=1><font color=#669999><font face=Verdana>Stan: <span style=\"color:red\">Martwy</span>");
	}
	if ($play['page'] == 'Altara')
	{
		if ($play['miejsce'] == 'Altara')
		{
			print('<br><br><font size=1><font color=#669999><font face=Verdana>Ostatnio widziany: Aleara');
		}
		else
		{
			print('<br><br><font size=1><font color=#669999><font face=Verdana>Ostatnio widziany: Krwawe Mokradła');
		}
	}
	else
	{
		print('<br><br><font size=1><font color=#669999><font face=Verdana>Ostatnio widziany:'.$play['page']);
	}
	print("</td><td>");
	$plik = 'avatars/'.$play['avatar'];
	if (is_file($plik))
	{
		require_once('includes/avatars.php');
		$arrImage = scaleavatar2($plik);
		print( '<center><img src="'.$plik.'" width="'.$arrImage[0].'" height="'.$arrImage[1].'" /></center>');
	}
	print("</td>");
	print("</tr><tr><td colspan=\"2\"><hr><i><font size=1><font color=#669999><font face=Verdana>Opis: <div style=\"width:250\"><span style=\"color: grey\">".$play['opis']."</span></div></i><hr></td></tr></table>");
	print("</div>");
}
print("<span id='onlin' style='display:none'>".$online."</span>");





?>
