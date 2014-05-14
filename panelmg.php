<?php

$title = 'Panel Administracyjny';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
/**
* Get the localization for game
*/

require_once('languages/'.$player -> lang.'/admin.php');

if ($player -> rank != 'Admin' && $player -> rank != 'Mistrz Gry' && $player -> rank != 'Mistrzyni Gry'  && $player -> rank != 'Namiestnik' && $player -> rank != 'Hrabia')
{
    error ('Nie jesteś Mistrzem Gry!');
}

/**
 * Add player to quest
 */
if (isset($_GET['view']) && $_GET['view'] == 'playerquest')
{
    $smarty -> assign(array("Addplayer" => ADD_PLAYER,
                            "Toquest" => TO_QUEST,
                            "Aadd" => A_ADD));
    if (isset($_GET['step']) && $_GET['step'] == 'add')
    {
        if (empty($_POST['pid']) || empty($_POST['qid']))
        {
            error(EMPTY_FIELDS);
        }
        

        $db -> Execute("UPDATE `players` SET `forumfab`=".$_POST['qid']." WHERE id=".$_POST['pid']);
        $smarty -> assign("Message", YOU_ADD);
    }
}


/**
* Player donation
*/
if (isset ($_GET['view']) && $_GET['view'] == 'donate')
{
	$resources = array ('pktfabularne');

	$resources_names = array ("punkty fabularne");

    $smarty -> assign(array("Donateid" => DONATE_ID,
        "Donateamount" => AMOUNT,
        "Adonate" => A_DONATE,
		'Resources' => $resources,
		'ResourcesNames' => $resources_names,
		));

    if (isset ($_GET['step']) && $_GET['step'] == 'donated')
    {
		is_numeric ($_POST['amount']) or error (ERROR);
		preg_match ('/^[a-z]*$/', $_POST['what']) or error (ERROR);

		if ($_POST['what'] == 'pktfabularne' or $_POST['what'] == 'platinum') {
			$table = 'players';
			$id = 'id';
		}
		if ($_POST['what'] == 'add')
		{
			$action='+';
			$msg="Dodałeś ".$_POST['amount']." punktów fabularnych graczowi id ".$_POST['id'];
		}
		else
		{
			$action='-';
			$msg="Zabrałeś ".$_POST['amount']." punktów fabularnych graczowi id ".$_POST['id'];
		}
        $db->Execute("UPDATE players SET pktfabularne=pktfabularne".$action.$_POST['amount']." WHERE id=".$_POST['id']);
        error ($msg);
    }
}

$smarty -> assign(array('View' => $_GET['view'],
                        'Step' => $_GET['step'],
                        'Action' => $_GET['action']));
$smarty -> display('panelmg.tpl');

require_once('includes/foot.php');

?>




?>
