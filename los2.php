<?php
$title = "Loteria";
$title1 = "Loteria"; //By wyświetlało wewnątrz gry
require_once("includes/head.php");
$test = $db->Execute("SELECT podklasa FROM players WHERE id=".$player->id);
$podklasa=$test->fields['podklasa'];
	if ($podklasa != "Jasnowidz")
	{
		error("Nie jesteś jasnowidzem!");
	}
	if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
function sign($val) 
{ 
	return $val == 0 ? 0 : ($val > 0 ? 1 : -1); 
}
if ($player -> location != 'Altara' && $player-> location !='Ardulith') 
{
	error ("Zapomnij o tym!");
} 
if ($player -> hp <=0)
{
	error('Jesteś martwy');
}
$money=$db -> GetOne('Select value from settings where setting="lottery"');
if (!$money)
{
	$money=0;
}
if (isset($_GET['step']) && $_GET['step'] == 'buy')
{
	$los=array();
	$los[1]=$_POST['los1'];
	$los[2]=$_POST['los2'];
	$los[3]=$_POST['los3'];
	$los[4]=$_POST['los4'];
	$los[5]=$_POST['los5'];
	$los[6]=$_POST['los6'];	
	
	$losstring=implode(',', $los);	
	//idiot test	
	foreach ($los as $key => $value)
	{
		if (!is_numeric($value))
		{
			error("Zapomnij o tym");
		}
		if ($value <=0 or $value >45)
		{
			error("Jedna z wprowadzonych liczb jest mniejsza lub równa zeru albo większa od 45, popraw to");
		}
	}
	if (count($los) != count(array_unique($los)))
	{
		error("Liczby nie mogą się powtarzać");
	}
	if ($player -> credits < $player -> level * 1000)
	{
		error('Masz za mało złota by kupić los.');
	}
	//end of idiot test
	$day=getdate();
	$day=$day['mday'];
	$record['owner'] = $player -> id;
	$record['numbers'] = $losstring;
	$record['los'] = $player -> level * 1000;
	$record['date'] = $day;
	$table='lottery';
	
	$db ->AutoExecute($table, $record, 'INSERT');
	$db ->Execute('update players set credits=credits-'.$player -> level *1000 .' where id='.$player->id);
	$db ->Execute('update settings set value=value+'.$player->level*1000 .' where setting="lottery"'); 
	error('Dokonałeś zakupu losu. Powodzenia w losowaniu!');
}
if (isset($_GET['step']) && $_GET['step'] == 'check')
{
	$numbers = $db -> GetOne("Select value from settings where setting='lastlos'");
	$date = $db -> GetOne("Select value from settings where setting='lastlosdate'");
	$pula = $db -> GetOne("Select value from settings where setting='lottery'");
	$datenow=$date-1;
	$arrnumbers = explode(',',$numbers);
	$check=$db -> Execute("SELECT * from lottery where owner=".$player->id ." and date=".$datenow);
	if (!$check -> fields['id'])
	{
		error('Nie masz już losów z poprzedniego dnia.');
		
	}
	else 
	{
		$array=array_fill(0,7,0);
		$money=0;		
		while($arr= $check->FetchRow())
		{
			$arrplayernums=explode(',',$arr['numbers']);
			$ile=6-count(array_diff($arrplayernums, $arrnumbers));
			$array[$ile]++;
		}
		$money=$money+(sign($array[6])*($pula/1));
		$money=$money+(sign($array[5])*($pula/2));
		$money=$money+(sign($array[4])*($pula/4));
		$money=$money+(sign($array[3])*$player->level*10000);
		
		$mess="Trafiłeś:<br><b>".$array[6]."<b> szóstek<br>";
		$mess.="<b>".$array[5]."<b> piątek<br>";
		$mess.="<b>".$array[4]."<b> czwórek<br>";
		$mess.="<b>".$array[3]."<b> trójek<br>";
		$mess.="<b>".$array[2]."<b> dwójek<br>";
		$mess.="<b>".$array[1]."<b> jedynek<br>";
		$mess.="<br>Wygrałeś <b>".$money."</b> sztuk złota";
		
		$db->Execute("Delete from lottery where owner=".$player->id." and date<=".$datenow);
		$db->Execute("update settings set value=value-".$money." where setting='lottery'");
		$db->Execute("update players set credits=credits+".$money." where id=".$player->id);
		
		error($mess);
		
	}
}
$smarty -> assign('Stawka', $money);
$smarty -> assign('Koszt', $player -> level * 1000);
$smarty -> display('los.tpl');
require_once("includes/foot.php"); 
?>
