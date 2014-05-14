<?php
require_once("includes/minihead.php");
if (isset($_GET['show']) and $_GET['show'] == "weapons")
{
	$arrid=array();
	$arrpower=array();
	$arrname=array();
	$i=0;
	$weapon=$db->Execute("Select * from equipment where type='W' and status !='E' and owner=".$player->id);
	
	while(!$weapon -> EOF)
	{
		$arrid[$i]=$weapon->fields['id'];
		$arrname[$i]=$weapon->fields['name'];
		$arrpower[$i]=$weapon->fields['power'];
		$weapon->MoveNext();
		$i=$i+1;
	}
	
	$smarty->assign("Id",$arrid);
	$smarty->assign("Name",$arrname);
	$smarty->assign("Power",$arrpower);
}

$smarty->assign("Show",$_GET['show']);
$smarty->display("equip_query2.tpl");
require_once("includes/minifoot.php");
?>