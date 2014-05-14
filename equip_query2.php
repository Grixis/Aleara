<?php
@require_once("includes/config.php");
$type=$_GET['type'];
$owner=$_GET['owner'];
$test=mysql_query("Select level from players where id=".$owner);
$test2=mysql_fetch_array($test);
$level=$test2['level'];
$arr_type=array('W','B','R','H','A','S','L','I','T','C','M');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($type == "W" or $type == "B" or $type == "A" or $type == "L" or $type == "H" or $type == "S")
{
	if (isset($_GET['sort']))
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U' order by ".$_GET['sort']." DESC");
	}
	else
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U'");
	}
	$id=array_search($type, $arr_type);
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th>Sortuj:</th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','amount'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','name'); return false; \">Nazwa</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','power'); return false; \">Siła</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','zr'); return false; \">Premia zręczności</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','szyb'); return false; \">Premia szybkości</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','maxwt'); return false; \">Stan</a></th>";
	$display .="</tr>";
	$display .="</table>";
	$display .="<table id='eq_content' style='width:100%'>";
	$display .="<tr>";
	$display .="<td style='width:50%' id='desc".$id."'></td><td style='width:50%; height: 528; overflow: visible;'><table><tr>";
	$i=1;
	
	while($weap=mysql_fetch_array($result))
	{	
		
		if ($level<$weap['minlev'])
		{
		$display .="<td style='border: 2px solid red'>";
		}
		elseif(strstr($weap['name'],'Zatrut'))
		{
			$display .="<td style='border: 2px solid green'>";
		}
		else
		{
		$display .="<td>";
		}
		$display .="<div id='equ".$weap['id']."' class='".$type." draggable' style='text-align: right; width:60px; height:60px; background: url(\"".$weap['icon']."\");' onclick=\"select('".$weap['id']."')\"><span style='color: lime; position: relative; right:5px; top:42px; '>+".$weap['power']."</span></div>";
		$display .="<span style='font-size:10px; text-align: center;'>Ilość:".$weap['amount']."<br>".$weap['wt']."/".$weap['maxwt']."</span>";
		$display .="<br><div style='display: none' id='eq".$weap['id']."'>";
		$display .="<script type='text/javascript'>$('.draggable').draggable({revert: 'invalid'});</script>";
		$display .="<span style='font-size: 15px;'>".$weap['name']."</span>";
		$display .="<ul class='list'>";
		$display .="<li>Poziom: ".$weap['minlev']."</li><br>";
		if ($type == 'W') $display .="<li class='damage'><b>Obrażenia</b>: ".$weap['power']."</li>";
		if ($type == 'B') $display .="<li class='ranged'><b>Obrażenia z dystansu</b>: ".$weap['power']."</li>";
		if (in_array($type, array('A','H','L','S'))) $display .="<li class='defense'><b>Obrona</b>: ".$weap['power']."</li>";
		$display .="<li class='agility'><b>Premia zręczności</b>: ".-$weap['zr']."</li>";
		$display .="<li class='speed'><b>Premia szybkości</b>: ".$weap['szyb']."</li>";
		$display .="<li class='endurance'><b>Stan</b>: ".$weap['wt']."/".$weap['maxwt']."</li><br>";
		if ($weap['poison'] > 0)
		{
			$arr_ptypes=array('I','N','D');
			$arr_pnames=array('Illani', 'Nutari', 'Dynallca');
			$display .="<li class='poison'><b>Trucizna z ".$arr_pnames[array_search($weap['ptype'],$arr_ptypes)]."</b>: +".$weap['poison']."</li><br>";
		}
		if ($weap['magic'] == 'Y')
		{
			$display .="<li class='magical'><b>Przedmiot magiczny</b></li>";
		}
		if ($weap['ulepszeniee'] != 0)
		{
			$display .="<li class='upgrade'><b>Przedmiot ulepszony w kuźni</b></li>";
		}
		
		
		$display .="</ul>";
		$display .="</div>";
		$display .="</td>";
		if ($i % 3 == 0)
		{
			$display .="</tr><tr>";
		}
	
	$i++;
	}
	$display .="</table>";
	$display .="</td></tr></table>";
	$display .="<br><a href=\"equip.php?sprzedaj=".$type."\" onclick=\"return confirm('Na pewno chcesz sprzedać wszystko?');\">Sprzedaj wszystko</a>";
	print($display);
}




elseif ($type == "R")
{
	if (isset($_GET['sort']))
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U' order by ".$_GET['sort']." DESC");
	}
	else
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U'");
	}
	$id=array_search($type, $arr_type);
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th>Sortuj:</th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','wt'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','name'); return false; \">Nazwa</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','power'); return false; \">Obrażenia</a></th>";
	$display .="</tr>";
	$display .="</table>";
	$display .="<table id='eq_content' style='width:100%'>";
	$display .="<tr>";
	$display .="<td style='width:50%' id='desc".$id."'></td><td style='width:50%'><table><tr>";
	$i=1;
	
	while($weap=mysql_fetch_array($result))
	{	
		
		if ($level<$weap['minlev'])
		{
		$display .="<td style='border: 2px solid red'>";
		}
		elseif(strstr($weap['name'],'Zatrut'))
		{
			$display .="<td style='border: 2px solid green'>";
		}
		else
		{
		$display .="<td>";
		}
		$display .="<div class='draggable' style='text-align: right; width:60px; height:60px; background: url(\"".$weap['icon']."\");' onclick=\"select('".$weap['id']."')\"><span style='color: lime; position: relative; right:5px; top:42px; '>+".$weap['power']."</span></div>";
		$display .="<span style='font-size:10px; text-align: center;'>Ilość:".$weap['wt']."</span>";
		$display .="<br><div style='display: none' id='eq".$weap['id']."'>";
		$display .="<script type='text/javascript'>$('.draggable').draggable({revert: 'invalid'});</script>";
		$display .="<span style='font-size: 15px;'>".$weap['name']."</span>";
		$display .="<ul class='list'>";
		$display .="<li>Poziom: ".$weap['minlev']."</li><br>";
		$display .="<li class='ranged'><b>Obrażenia z dystansu</b>: ".$weap['power']."</li>";
		if ($weap['poison'] > 0)
		{
			$arr_ptypes=array('I','N','D');
			$arr_pnames=array('Illani', 'Nutari', 'Dynallca');
			$display .="<li class='poison'><b>Trucizna z ".$arr_pnames[array_search($weap['ptype'],$arr_ptypes)]."</b>: +".$weap['poison']."</li><br>";
		}
		if ($weap['magic'] == 'Y')
		{
			$display .="<li class='magical'><b>Przedmiot magiczny</b></li>";
		}
		if ($weap['ulepszeniee'] != 0)
		{
			$display .="<li class='upgrade'><b>Przedmiot ulepszony w kuźni</b></li>";
		}
		
		
		$display .="</ul>";
		$display .="</div>";
		$display .="</td>";
		if ($i % 3 == 0)
		{
			$display .="</tr><tr>";
		}
	
	$i++;
	}
	$display .="</table>";
	$display .="</td></tr></table>";
	$display .="<br><a href=\"equip.php?sprzedaj=".$type."\" onclick=\"return confirm('Na pewno chcesz sprzedać wszystko?');\">Sprzedaj wszystko</a>";
	print($display);
}
elseif ($type == "I")
{
	if (isset($_GET['sort']))
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U' order by ".$_GET['sort']." DESC");
	}
	else
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U'");
	}
	$id=array_search($type, $arr_type);
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th>Sortuj:</th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','amount'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','name'); return false; \">Nazwa</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','power'); return false; \">Moc</a></th>";
	$display .="</tr>";
	$display .="</table>";
	$display .="<table id='eq_content' style='width:100%'>";
	$display .="<tr>";
	$display .="<td style='width:50%' id='desc".$id."'></td><td style='width:50%'><table><tr>";
	$i=1;
	
	while($weap=mysql_fetch_array($result))
	{	
		
		if ($level<$weap['minlev'])
		{
		$display .="<td style='border: 2px solid red'>";
		}
		elseif(strstr($weap['name'],'Zatrut'))
		{
			$display .="<td style='border: 2px solid green'>";
		}
		else
		{
		$display .="<td>";
		}
		$display .="<div class='draggable' style='text-align: right; width:60px; height:60px; background: url(\"".$weap['icon']."\");' onclick=\"select('".$weap['id']."')\"><span style='color: lime; position: relative; right:5px; top:42px; '>+".$weap['power']."</span></div>";
		$display .="<span style='font-size:10px; text-align: center;'>Ilość:".$weap['amount']."</span>";
		$display .="<br><div style='display: none' id='eq".$weap['id']."'>";
		$display .="<script type='text/javascript'>$('.draggable').draggable({revert: 'invalid'});</script>";
		$display .="<span style='font-size: 15px;'>".$weap['name']."</span>";
		$display .="<ul class='list'>";
		$display .="<li>Poziom: ".$weap['minlev']."</li><br>";
		$display .="<li class='upgrade'><b>Bonus do statystyk</b>: ".$weap['power']."</li>";
		$display .="<li class='magical'><b>Przedmiot magiczny</b></li>";
		
		if ($weap['ulepszeniee'] != 0)
		{
			$display .="<li class='upgrade'><b>Przedmiot ulepszony w kuźni</b></li>";
		}
		
		
		$display .="</ul>";
		$display .="</div>";
		$display .="</td>";
		if ($i % 3 == 0)
		{
			$display .="</tr><tr>";
		}
	
	$i++;
	}
	$display .="</table>";
	$display .="</td></tr></table>";
	$display .="<br><a href=\"equip.php?sprzedaj=".$type."\" onclick=\"return confirm('Na pewno chcesz sprzedać wszystko?');\">Sprzedaj wszystko</a>";
	print($display);
}

elseif ($type == "T")
{
	
	if (isset($_GET['sort']))
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U' order by ".$_GET['sort']." DESC");
	}
	else
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U'");
	}
	$id=array_search($type, $arr_type);
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th>Sortuj:</th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','amount'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','name'); return false; \">Nazwa</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','power'); return false; \">Moc</a></th>";
	$display .="</tr>";
	$display .="</table>";
	$display .="<table id='eq_content' style='width:100%'>";
	$display .="<tr>";
	$display .="<td style='width:50%' id='desc".$id."'></td><td style='width:50%'><table><tr>";
	$i=1;
	
	while($weap=mysql_fetch_array($result))
	{	
		$multi=10*$level/$weap['power'];
		if ($level<$weap['minlev'])
		{
		$display .="<td style='border: 2px solid red'>";
		}
		elseif(strstr($weap['name'],'Zatrut'))
		{
			$display .="<td style='border: 2px solid green'>";
		}
		else
		{
		$display .="<td>";
		}
		$display .="<div class='draggable' style='text-align: right; width:60px; height:60px; background: url(\"".$weap['icon']."\");' onclick=\"select('".$weap['id']."')\"></div>";
		$display .="<span style='font-size:10px; text-align: center;'>Ilość:".$weap['amount']."</span><br>";
		$display .="<span style='font-size:10px; text-align: center;'>Moc:".floor($multi)."-".floor($multi*$weap['power'])."</span>";
		$display .="<br><div style='display: none' id='eq".$weap['id']."'>";
		$display .="<script type='text/javascript'>$('.draggable').draggable({revert: 'invalid'});</script>";
		$display .="<span style='font-size: 15px;'>".$weap['name']."</span>";
		$display .="<ul class='list'>";
		$display .="<li>Poziom: ".$weap['minlev']."</li><br>";
		$display .="<li class='magical'><b>Premia do siły czarów</b>: ".floor($multi)."-".floor($multi*$weap['power'])."</li>";
		$display .="<li class='magical'><b>Przedmiot magiczny</b></li>";
		
		if ($weap['ulepszeniee'] != 0)
		{
			$display .="<li class='upgrade'><b>Przedmiot ulepszony w kuźni</b></li>";
		}
		
		
		$display .="</ul>";
		$display .="</div>";
		$display .="</td>";
		if ($i % 3 == 0)
		{
			$display .="</tr><tr>";
		}
	
	$i++;
	}
	$display .="</table>";
	$display .="</td></tr></table>";
	$display .="<br><a href=\"equip.php?sprzedaj=".$type."\" onclick=\"return confirm('Na pewno chcesz sprzedać wszystko?');\">Sprzedaj wszystko</a>";
	print($display);
}
elseif ($type == "C")
{
	if (isset($_GET['sort']))
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U' order by ".$_GET['sort']." DESC");
	}
	else
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U'");
	}
	$id=array_search($type, $arr_type);
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th>Sortuj:</th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','amount'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','name'); return false; \">Nazwa</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','power'); return false; \">Premia many</a></th>";
	$display .="</tr>";
	$display .="</table>";
	$display .="<table id='eq_content' style='width:100%'>";
	$display .="<tr>";
	$display .="<td style='width:50%' id='desc".$id."'></td><td style='width:50%'><table><tr>";
	$i=1;
	
	while($weap=mysql_fetch_array($result))
	{	
		
		if ($level<$weap['minlev'])
		{
		$display .="<td style='border: 2px solid red'>";
		}
		elseif(strstr($weap['name'],'Zatrut'))
		{
			$display .="<td style='border: 2px solid green'>";
		}
		else
		{
		$display .="<td>";
		}
		$display .="<div class='draggable' style='text-align: right; width:60px; height:60px; background: url(\"".$weap['icon']."\");' onclick=\"select('".$weap['id']."')\"></div>";
		$display .="<span style='font-size:10px; text-align: center;'>Ilość:".$weap['amount']."</span><br>";
		$display .="<span style='font-size:10px; text-align: center;'>Mana:+".$weap['power']."%</span>";
		$display .="<br><div style='display: none' id='eq".$weap['id']."'>";
		$display .="<script type='text/javascript'>$('.draggable').draggable({revert: 'invalid'});</script>";
		$display .="<span style='font-size: 15px;'>".$weap['name']."</span>";
		$display .="<ul class='list'>";
		$display .="<li>Poziom: ".$weap['minlev']."</li><br>";
		$display .="<li class='mana'><b>Premia do many</b>: ".$weap['power']."%</li>";
		$display .="<li class='magical'><b>Przedmiot magiczny</b></li>";
		
		if ($weap['ulepszeniee'] != 0)
		{
			$display .="<li class='upgrade'><b>Przedmiot ulepszony w kuźni</b></li>";
		}
		
		
		$display .="</ul>";
		$display .="</div>";
		$display .="</td>";
		if ($i % 3 == 0)
		{
			$display .="</tr><tr>";
		}
	
	$i++;
	}
	$display .="</table>";
	$display .="</td></tr></table>";
	$display .="<br><a href=\"equip.php?sprzedaj=".$type."\" onclick=\"return confirm('Na pewno chcesz sprzedać wszystko?');\">Sprzedaj wszystko</a>";
	print($display);
}
elseif ($type == "M")
{
	if (isset($_GET['sort']))
	{
		$result=mysql_query("Select * from potions where owner=".$owner." and status='K' order by ".$_GET['sort']." DESC");
	}
	else
	{
		$result=mysql_query("Select * from potions where owner=".$owner." and status='K'");
	}
	$id=array_search($type, $arr_type);
	
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th>Sortuj:</th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','amount'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','name'); return false; \">Nazwa</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','power'); return false; \">Moc</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab2('".$type."','type'); return false; \">Typ</a></th>";
	$display .="</tr>";
	$display .="</table>";
	$display .="<table id='eq_content' style='width:100%'>";
	$display .="<tr>";
	$display .="<td style='width:50%' id='desc".$id."'></td><td style='width:50%'><table><tr>";
	$i=1;
	while($weap=mysql_fetch_array($result))
	{	
		
		$display .="<td>";
		if (strstr(strtolower($weap['name']),'mikstura z nutari'))
		{
		$display .="<div id='equ".$weap['id']."' class='".$type." draggable' style='text-align: right; width:60px; height:60px; background: url(images/icons/mana.png);' onclick=\"select('".$weap['id']."')\"><span style='color: lime; position: relative; right:5px; top:42px; '>+".$weap['power']."</span></div>";
		$display .="<span style='font-size:10px; text-align: center;'>Ilość:".$weap['amount']."</span><br>";
		$display .="<br><div style='display: none' id='eq".$weap['id']."'>";
		$display .="<script type='text/javascript'>$('.draggable').draggable({revert: 'invalid'});</script>";
		$display .="<span style='font-size: 15px;'>".$weap['name']."</span>";
		$display .="<ul class='list'>";
		$display .="<li class='mana'><b>Przywraca many</b>:".$weap['power']."</li>";
		}
		if (strstr(strtolower($weap['name']),'mikstura z illani'))
		{
		$display .="<div id='equ".$weap['id']."' class='".$type." draggable' style='text-align: right; width:60px; height:60px; background: url(images/icons/health.png);' onclick=\"select('".$weap['id']."')\"><span style='color: lime; position: relative; right:5px; top:42px; '>+".$weap['power']."</span></div>";
		$display .="<span style='font-size:10px; text-align: center;'>Ilość:".$weap['amount']."</span><br>";
		$display .="<br><div style='display: none' id='eq".$weap['id']."'>";
		$display .="<script type='text/javascript'>$('.draggable').draggable({revert: 'invalid'});</script>";
		$display .="<span style='font-size: 15px;'>".$weap['name']."</span>";
		$display .="<ul class='list'>";
		$display .="<li class='health'><b>Przywraca życia</b>:".$weap['power']."</li>";
		}
		if (strstr(strtolower($weap['name']),'antidotum'))
		{
		$display .="<div id='equ".$weap['id']."' class='".$type." draggable' style='text-align: right; width:60px; height:60px; background: url(images/icons/antidote.png);' onclick=\"select('".$weap['id']."')\"><span style='color: lime; position: relative; right:5px; top:42px; '>+".$weap['power']."</span></div>";
		$display .="<span style='font-size:10px; text-align: center;'>Ilość:".$weap['amount']."</span><br>";
		$display .="<br><div style='display: none' id='eq".$weap['id']."'>";
		$display .="<script type='text/javascript'>$('.draggable').draggable({revert: 'invalid'});</script>";
		$display .="<span style='font-size: 15px;'>".$weap['name']."</span>";
		$display .="<ul class='list'>";
		$display .="<li class='defense'><b>Obrona przed truciznami</b>";
		}
		if (strstr(strtolower($weap['name']),'trucizna'))
		{
		$display .="<div id='equ".$weap['id']."' class='".$type." draggable' style='text-align: right; width:60px; height:60px; background: url(images/icons/poison.png);' onclick=\"select('".$weap['id']."')\"><span style='color: lime; position: relative; right:5px; top:42px; '>+".$weap['power']."</span></div>";
		$display .="<span style='font-size:10px; text-align: center;'>Ilość:".$weap['amount']."</span><br>";
		$display .="<br><div style='display: none' id='eq".$weap['id']."'>";
		$display .="<script type='text/javascript'>$('.draggable').draggable({revert: 'invalid'});</script>";
		$display .="<span style='font-size: 15px;'>".$weap['name']."</span>";
		$display .="<ul class='list'>";
		$display .="<li class='poison'><b>".$weap['efect']."</b></li>";
		$display .="<li class='poison'><b>Moc</b>:".$weap['power']."</li>";
		}
		$display .="</ul>";
		$display .="</div>";
		$display .="</td>";
		if ($i % 3 == 0)
		{
			$display .="</tr><tr>";
		}
	
	$i++;
	}
	$display .="</table>";
	$display .="</td></tr></table>";
	$display .="<br><a href=\"equip.php?sell_allpotion\" onclick=\"return confirm('Na pewno chcesz sprzedać wszystko?');\">Sprzedaj wszystko</a> | ";
	$display .="<a href=\"#\" onclick=\"$('#dialog').dialog({width: 450 }); return false;\">Wypij wiele mikstur naraz</a>";
	print($display);
	
}
if (isset($_GET['mix']))
{
	$test=mysql_query("Select type from potions where id=".$_GET['mix']);
	$mix=mysql_fetch_array($test);
	$type=$mix['type'];
	
	print($type);
}
?>