<?php
require_once("../includes/config.php");
$type=$_GET['type'];
$owner=$_GET['owner'];
$test=mysql_query("Select level from players where id=".$owner);
$test2=mysql_fetch_array($test);
$level=$test2['level'];

if ($type == "W" or $type == "B")
{
	if (isset($_GET['sort']))
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U' order by ".$_GET['sort']." DESC");
	}
	else
	{
		$result=mysql_query("Select * from equipment where owner=".$owner." and type='".$type."' and status='U'");
	}
	$display="<table style=\"border-style: hidden;\">";
	$display .="<tr>";
	$display .="<td><b>Ilość</b></td><td><b>Nazwa</b></td><td><b>Szyb</b></td><td><b>Stan</b></td><td><b>Opcje</b></td>";
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
		$display .="<td>+".$weap['szyb']."</td>";
		$display .="<td>".$weap['wt']."/".$weap['maxwt']."</td>";
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Załóż</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sprzedaj</a> | <a href=\"equip.php?napraw=".$weap['id']."\">Napraw</a></td>";
		$display .="</tr>";
	}
	$display .="</table>";
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
	$display="<table>";
	$display .="<tr>";
	$display .="<td><b>Ilość</b></td><td><b>Nazwa</b></td><td><b>Opcje</b></td>";
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
		$display .="<td>".$weap['wt'];
		$display .="<td>".$weap['name']." (+".$weap['power'].")</td>";
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Załóż</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sprzedaj</a></td>";
		$display .="</tr>";
	}
	$display .="</table>";
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
	$display="<table>";
	$display .="<tr>";
	$display .="<td><b>Ilość</b></td><td><b>Nazwa</b></td><td><b>Zr</b></td><td><b>Stan</b></td><td><b>Opcje</b></td>";
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
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Załóż</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sprzedaj</a> | <a href=\"equip.php?napraw=".$weap['id']."\">Napraw</a></td>";
		$display .="</tr>";
	}
	$display .="</table>";
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
	$display="<table>";
	$display .="<tr>";
	$display .="<td><b>Ilość</b></td><td><b>Nazwa</b></td><td><b>Moc</b></td><td><b>Opcje</b></td>";
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
		}		$display .="<td>".$weap['amount'];
		$display .="<td>".$weap['name']."</td>";
		$display .="<td>+".$weap['power']."</td>";
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Załóż</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sprzedaj</a></td>";
		$display .="</tr>";
	}
	$display .="</table>";
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
	
	$display="<table>";
	$display .="<tr>";
	$display .="<td><b>Ilość</b></td><td><b>Nazwa</b></td><td><b>Moc</b></td><td><b>Opcje</b></td>";
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
		$display .="<td>".floor($multi)."-".floor($multi*$weap['power'])."</td>";
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Załóż</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sprzedaj</a></td>";
		$display .="</tr>";
	}
	$display .="</table>";
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
	
	$display="<table>";
	$display .="<tr>";
	$display .="<td><b>Ilość</b></td><td><b>Nazwa</b></td><td><b>Mana</b></td><td><b>Opcje</b></td>";
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
		$display .="<td><a href=\"equip.php?equip=".$weap['id']."\">Załóż</a> | <a href=\"equip.php?sell=".$weap['id']."\">Sprzedaj</a></td>";
		$display .="</tr>";
	}
	$display .="</table>";
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
	$display="<table>";
	$display .="<tr>";
	$display .="<td><b>Ilość</b></td><td><b>Nazwa</b></td><td><b>Moc</b></td><td>Działanie</td><td><b>Opcje</b></td>";
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
		$display .="<td><a href=\"equip.php?poison=".$weap['id']."\">Zatruj broń</a> | <a href=\"equip.php?sell_potion=".$weap['id']."\">Sprzedaj</a></td>";
		}
		else
		{
		$display .="<td><a href=\"equip.php?wypij=".$weap['id']."\">Wypij</a> | <a href=\"equip.php?sell_potion=".$weap['id']."\">Sprzedaj</a></td>";
		}
		$display .="</tr>";
	}
	$display .="</table>";
	print($display);
}
?>