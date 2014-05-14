<?php 
$title='Lista przyjaciół';
$title1='Lista przyjaciół';
require_once('includes/head.php');
$test = $db -> Execute("SELECT gametype FROM players WHERE id=".$player -> id);
$gametype = $test -> fields['gametype'];
//show the buddylist
$i=0;
$arrBuddyId=array();
$arrFriendsId=array();
$arrFriendsUser=array();
$arrFriendsLevel=array();
$arrFriendsOnline=array();

$buddys=$db->Execute("SELECT buddys.id AS buddy_id, players.id AS player_id, players.user AS player_user, players.level AS player_level, players.lpv AS player_lpv FROM players INNER JOIN buddys on players.id=buddys.buddy where type='F' AND owner=".$player->id);
while(!$buddys -> EOF)
{
	$arrBuddyId[$i]=$buddys->fields['buddy_id'];
	$arrFriendsId[$i]=$buddys->fields['player_id'];
	$arrFriendsUser[$i]=$buddys->fields['player_user'];
	$arrFriendsLevel[$i]=$buddys->fields['player_level'];
	if ($buddys->fields['player_lpv'] > time()-180 and $test -> fields['gametype'] != "invisible")
	{
		$arrFriendsOnline[$i]='<span style="color: lime">ONLINE</span>';
	}
	else
	{
		$arrFriendsOnline[$i]='<span style="color: red">OFFLINE</span>';
	}
	$buddys->MoveNext();
	$i++;
}
$smarty->assign("Buddysid", $arrBuddyId);
$smarty->assign("Friendid", $arrFriendsId);
$smarty->assign("Frienduser", $arrFriendsUser);
$smarty->assign("Friendlevel", $arrFriendsLevel);
$smarty->assign("Friendonline", $arrFriendsOnline);

if (isset($_GET['add']))
{
	if (!is_numeric($_POST['friendid'])) error("Błąd");
	$test = $db ->Execute("Select id from buddys where buddy=".$_POST['friendid']." and owner=".$player->id);
	if ($test -> fields['id']) error("Ta osoba jest już w znajomych!");
	$db -> Execute("INSERT INTO buddys(owner, buddy, type) VALUES (".$player->id.", ".$_POST['friendid'].", 'F')");
	error("Dodałeś gracza id ".$_POST['friendid']. " do listy przyjaciół");
} 
if (isset($_GET['del']))
{
	if (!is_numeric($_GET['del'])) error("Błąd");
	$test=$db ->Execute("Select id, owner from buddys where id=".$_GET['del']);
	if (!$test->fields['id']) error("Nie ma nikogo takiego na liście przyjaciół!");
	if ($test->fields['owner'] != $player->id) error("Próbujesz kasować z nie swojej listy");
	$db->Execute("Delete from buddys where id=".$_GET['del']);
	error("Usunąłeś gracza z listy przyjaciół");
} 
$smarty -> display('lista_przyjaciol.tpl');
require_once('includes/foot.php');
?>