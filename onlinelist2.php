<?php
@require_once('includes/config.php');
require_once('includes/franks.php');
require_once('includes/tags.php');
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
						'Wielki Mistrz' => 'mistrz',
						'Gladiator' => 'gladiator',
						'Stary Dziad' => 'dziad',
						'Wskrzesiciel' => 'wskrzesiciel',
						'Kostuch' => 'kostuch',
						'Hrabia' => 'hrabia',
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
	$name=getTaggedPlayerName($play['user'], $play['tribe'], $play['tribe_rank']);
	print("<div class='menuleft'>");
	print("<div id='placeholder".$play['id']."'><img src=\"images/ranks/".$arrRankImages[$play['rank']].".png\" /> <a href=\"view.php?view=".$play['id']."\" onmouseover=\"$('#box".$play['id']."').toggle('highlight', {color: 'grey'}); $('#box".$play['id']."').position({my: 'right center', at:'left center', of: $('#placeholder".$play['id']."'), collision: 'none'}) \" onmouseout=\"$('#box".$play['id']."').toggle('highlight', {color: 'grey'}); \">".$name."</a> ".$play['id']."</div>");

	print('<div class="opis" style="display: none">     <table style="width: 160px"><tr><td>'.$play['opis'].'</td></tr></table>     </div>');
	print("</div>");
	print("<div class=\"ui-widget-content ui-corner-all \" style=\"display:none; position: absolute\" id=\"box".$play['id']."\">");
	print("<center><h3 class=\"ui-widget-header\">".$name." (".$play['id'].")</h3></center>");
	print("<table><tr><td><img src=\"images/ranks/".$arrRankImages[$play['rank']].".png\" width=\"34\" height=\"34\"/>".$rank."</td></tr><tr><td style=\"vertical-align: top; width: 100px\">");
	print("<br/>Poziom: ".$play['level']);
	print("<br/>Rasa: ".$play['rasa']);
	print("<br/>Klasa: ".$play['klasa']);
	print("<br/>Podklasa: ".$play['podklasaa']);
	
	
	if ($play['gender'] == "M")
	{
		print("<br/>Płeć: Mężczyzna");
	}
	else
	{
		print("<br/>Płeć: Kobieta");
	}
	if ($play['hp']>0)
	{
		print("<br/>Stan: <span style=\"color:green\">Żywy</span>");
	}
	else
	{
		print("<br/>Stan: <span style=\"color:red\">Martwy</span>");
	}
	if ($play['page'] == 'Altara')
	{
		if ($play['miejsce'] == 'Altara')
		{
			print('<br><br>Ostatnio widziany: Aleara');
		}
		else
		{
			print('<br><br>Ostatnio widziany: Krwawe Mokradła');
		}
	}
	else
	{
		print('<br><br>Ostatnio widziany:'.$play['page']);
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
	print("</tr><tr><td colspan=\"2\"><hr><i>Opis: <div style=\"width:250\"><span style=\"color: grey\">".$play['opis']."</span></div></i><hr></td></tr></table>");
	print("</div>");
}
print("<span id='onlin' style='display:none'>".$online."</span>");





?>
