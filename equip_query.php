<?php
@require_once("includes/config.php");
$type=$_GET['type'];
$owner=$_GET['owner'];
$test=mysql_query("Select level from players where id=".$owner);
$test2=mysql_fetch_array($test);
$level=$test2['level'];
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
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	//$temp="$(ui.panel.load('equip_query.php?type=".$type."&sort=amount')";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','amount'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','name'); return false; \">Nazwa</a></th>";
	
	
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','maxwt'); return false; \">Stan</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','maxwt'); return false; \">Opcje</a></th>";
	$display .="</tr>";
	while($weap=mysql_fetch_array($result))
	{	
		
		if ($level<$weap['minlev'])
		{
		$display .="<tr bgcolor= \"red\">";
		}
		elseif(strstr($weap['name'],'Zatrut'))
		{
			$display .="<tr bgcolor=\"#005800\">";
		}
		else
		{
		$display .="<tr>";
		}
		$display .="<td>".$weap['amount']."</td>";
		if(strstr($weap['name'],'Zatrut'))
		{
		$display .="<td>".$weap['name']." (+".$weap['power']."/+".$weap['poison'].")</td>";
		}
		else
		{
			$display .="<td><span style='font-size: 10pt'>".$weap['name']." +".$weap['power']."</span><br><img src='images/icons/speed.png'> ".$weap['szyb']."</span><img src='images/icons/agility.png'> ".-$weap['zr']."</span></td>";
		}
		
		
		$display .="<td>".$weap['wt']."/".$weap['maxwt']."</td>";
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Zak.</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sell</a> | <a href=\"equip.php?napraw=".$weap['id']."\">Nap.</a></td>";
		$display .="</tr>";
	
	}
	$display .="</table>";
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
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','wt'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','name'); return false; \">Nazwa</a> | <a href='#' onclick=\"reloadTab('".$type."','power'); return false; \">Siła</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','maxwt'); return false; \">Opcje</a></th>";
	$display .="</tr>";
	while($weap=mysql_fetch_array($result))
	{
		if ($level<$weap['minlev'])
		{
		$display .="<tr style=\"background-color: red;\">";
		}
		elseif(strstr($weap['name'],'Zatrut'))
		{
			$display .="<tr bgcolor=\"#005800\">";
		}
		else
		{
		$display .="<tr>";
		}
		$display .="<td>".$weap['wt'];
		if (strstr($weap['name'],'Zatrut'))
		{
			$display .="<td>".$weap['name']." (+".$weap['power']."/+".$weap['poison'].")</td>";
		}
		else
		{
		$display .="<td>".$weap['name']." (+".$weap['power'].")</td>";
		}
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Załóż</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sell</a></td>";
		$display .="</tr>";
	}
	$display .="</table>";
	$display .="<br><a href=\"equip.php?sprzedaj=".$type."\" onclick=\"return confirm('Na pewno chcesz sprzedać wszystko?');\">Sprzedaj wszystko</a>";
	print($display);
}
elseif ($type == "H" or $type =="S" or $type == "L" or $type =="A")
{
	if (isset($_GET['sort']))
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U' order by ".$_GET['sort']." DESC");
	}
	else
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U'");
	}
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','amount'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','name'); return false; \">Nazwa</a> | <a href='#' onclick=\"reloadTab('".$type."','power'); return false; \">Siła</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','zr'); return false; \">Zr</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','maxwt'); return false; \">Stan</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','maxwt'); return false; \">Opcje</a></th>";
	$display .="</tr>";
	while($weap=mysql_fetch_array($result))
	{
		if ($level<$weap['minlev'])
		{
		$display .="<tr style=\"background-color: red;\">";
		}
		else
		{
		$display .="<tr>";
		}
		$display .="<td>".$weap['amount'];
		$display .="<td>".$weap['name']." (+".$weap['power'].")</td>";
		if ($weap['zr'] > 0)
		{
		$display .="<td>-".$weap['zr']."</td>";
		}
		else
		{
		$display .="<td>+".-$weap['zr']."</td>";
		}
		$display .="<td>".$weap['wt']."/".$weap['maxwt']."</td>";
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Załóż</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sell</a> | <a href=\"equip.php?napraw=".$weap['id']."\">Napraw</a></td>";
		$display .="</tr>";
	}
	$display .="</table>";
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
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','amount'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','name'); return false; \">Nazwa</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','power'); return false; \">Moc</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','maxwt'); return false; \">Opcje</a></th>";
	$display .="</tr>";
	while($weap=mysql_fetch_array($result))
	{
		if ($level<$weap['minlev'])
		{
		$display .="<tr style=\"background-color: red;\">";
		}
		else
		{
		$display .="<tr>";
		}		
		$display .="<td>".$weap['amount'];
		$display .="<td>".$weap['name']."</td>";
		$display .="<td>+".$weap['power']."</td>";
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Załóż</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sell</a></td>";
		$display .="</tr>";
	}
	$display .="</table>";
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
	
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','amount'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','name'); return false; \">Nazwa</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','power'); return false; \">Moc</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','maxwt'); return false; \">Opcje</a></th>";
	$display .="</tr>";
	while($weap=mysql_fetch_array($result))
	{
		$multi=10*$level/$weap['power'];
		if ($level<$weap['minlev'])
		{
		$display .="<tr style=\"background-color: red;\">";
		}
		else
		{
		$display .="<tr>";
		}
		$display .="<td>".$weap['amount'];
		$display .="<td>".$weap['name']."</td>";
		$display .="<td>".$weap['power']."</td>";
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Załóż</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sell</a></td>";
		$display .="</tr>";
	}
	$display .="</table>";
	$display .="<br><a href=\"equip.php?sprzedaj=".$type."\" onclick=\"return confirm('Na pewno chcesz sprzedać wszystko?');\">Sprzedaj wszystko</a>";
	print($display);
}
elseif ($type == "C")
{
	$test=mysql_query("Select level from players where id=".$owner);
	$test2=mysql_fetch_array($test);
	$level=$test2['level'];
	
		if (isset($_GET['sort']))
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U' order by ".$_GET['sort']." DESC");
	}
	else
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U'");
	}
	
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','amount'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','name'); return false; \">Nazwa</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','power'); return false; \">Mana</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','maxwt'); return false; \">Opcje</a></th>";
	$display .="</tr>";
	while($weap=mysql_fetch_array($result))
	{
		$multi=10*$level/$weap['power'];
		if ($level<$weap['minlev'])
		{
		$display .="<tr style=\"background-color: red;\">";
		}
		else
		{
		$display .="<tr>";
		}
		$display .="<td>".$weap['amount'];
		$display .="<td>".$weap['name']."</td>";
		$display .="<td>+".$weap['power']."%</td>";
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Załóż</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sell</a></td>";
		$display .="</tr>";
	}
	$display .="</table>";
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
	$display="<table style=\"width:100%;\">";
	$display .="<tr>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','amount'); return false; \">Ilość</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','name'); return false; \">Nazwa</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','power'); return false; \">Moc</a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','efect'); return false; \">Działanie</a> | <a href='#' onclick=\"reloadTab('".$type."','type'); return false; \">Typ</a></a></th>";
	$display .="<th><a href='#' onclick=\"reloadTab('".$type."','maxwt'); return false; \">Opcje</a></th>";
	$display .="</tr>";
	while($weap=mysql_fetch_array($result))
	{
		$display .="<tr>";
		$display .="<td>".$weap['amount'];
		$display .="<td>".$weap['name']."</td>";
		$display .="<td>".$weap['power']."</td>";
		$display .="<td>".$weap['efect']."</td>";
		if ($weap['type'] == "P")
		{
		$display .="<td><a href=\"equip.php?poison=".$weap['id']."\">Zatruj broń</a> | <a href=\"equip.php?sell_potion=".$weap['id']."\">Sell</a></td>";
		}
		else
		{
		$display .="<td><a href=\"equip.php?wypij=".$weap['id']."\">Wypij</a> | <a href=\"equip.php?sell_potion=".$weap['id']."\">Sell</a></td>";
		}
		$display .="</tr>";
	}
	$display .="</table>";
	$display .="<br><a href=\"equip.php?sell_allpotion\" onclick=\"return confirm('Na pewno chcesz sprzedać wszystko?');\">Sprzedaj wszystko</a> | ";
	$display .="<a href=\"#\" onclick=\"$('#dialog').dialog({width: 450 }); return false;\">Wypij wiele mikstur naraz</a>";
	print($display);
}
?>