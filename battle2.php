<?php

$title = "Arena Honorowa";
require_once("includes/head.php");
require_once("includes/funkcje2.php");
require_once("class/fight_class2.php");
require_once('includes/security.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
/**
* Get the localization for game
*/
require_once("languages/pl/battle2.php");
require_once("languages/pl/funkcje.php");

global $runda;
global $number;
global $newdate;
global $smarty;
global $db;

if (!isset($_GET['action']) && !isset($_GET['battle']))
{
    $smarty -> assign(array("Battleinfo" => BATTLE_INFO,
                            "Ashowalive" => A_SHOW_ALIVE,
                            "Ashowlevel" => A_SHOW_LEVEL,
                            "Ashowmonster" => A_SHOW_MONSTER));
}

/**
* Show players on this same level which have a player
*/
$test = $db -> Execute('SELECT user FROM players');
$user = $test -> fields['user'];
$smarty -> assign(array("user" => $user)); 

                  
                              
if (isset ($_GET['action']) && $_GET['action'] == 'levellist')
{
    $smarty -> assign(array(
                            "Showall" => SHOW_ALL,
                            "Tolevel" => TO_LEVEL,
                            "Ago" => A_GO));
    if (isset($_GET['step']) && $_GET['step'] == 'go')
    {
        
        $elist = $db -> SelectLimit("SELECT id, user, rank, level FROM players WHERE page='Arena Honorowa' AND id!=".$player -> id." ", 50);
        $arrid = array();
        $arrname = array();
        $arrrank = array();
        $arrlevel = array();
        $i = 0;
        while (!$elist -> EOF)
        {
            if ($elist -> fields['rank'] == 'Admin')
            {
                $arrrank[$i] = R_ADMIN;
            }
                elseif ($elist -> fields['rank'] == 'Staff')
            {
                $arrrank[$i] = R_STAFF;
            }
                elseif ($elist -> fields['rank'] == 'Member')
            {
                $arrrank[$i] = R_MEMBER;
            }
                else
            {
                $arrrank[$i] = $elist -> fields['rank'];
            }
            $arrid[$i] = $elist -> fields['id'];
            $arrname[$i] = $elist -> fields['user'];
            $arrlevel[$i] = $elist -> fields['level'];
            $elist -> MoveNext();
            $i = $i + 1;
        }
        $elist -> Close();
        $smarty -> assign (array("Enemyid" => $arrid,
                                 "Enemyname" => $arrname,
                                 "Enemylevel" => $arrlevel,
                                 "Enemyrank" => $arrrank,
                                 "Lid" => L_ID,
                                 "Lname" => L_NAME,
                                 "Lrank" => L_RANK,
                                 "Lclan" => L_CLAN,
                                 "Loption" => L_OPTION,
                                 "Aattack" => A_ATTACK));
    }
}


/**
* Start battle
*/

if (isset($_GET['battle']))
{
// Protection from attacks immediately after reset.
// Will work only with resets at full hour, need to be adapted otherwise.
    $arrResets = array( 0,8,10,12,14,16,18,20,22,24);
    $intTimestamp = time();  // current time (Unix timestamp)
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $hour = date("H");
    $blnTest = true;
    for($i = 0; $i < 9; $i++) // count to "number of resets" -1 !
        if( $arrResets[$i] <= $hour && $hour < $arrResets[$i+1]) // find between which resets we are
        {// reset gap was found
            $start = mktime ($arrResets[$i],0,0,$month,$day,$year);
            $stop = mktime ($arrResets[$i],5,0,$month,$day,$year);
            if( $intTimestamp >= $start && $intTimestamp < $stop)
                error(TOO_SOON.' '.$arrResets[$i].':'.'05.');
            break;
        }

    global $runda;
    global $number;
    global $newdate;
    global $smarty;
    global $db;
    
    
    if (!strictInt($_GET['battle']))
    {
        error(ERROR);
    }


    $attacker = new Fighter($player -> id);
    $defender = new Fighter($_GET['battle']);


    if (!$defender -> id)
    {
        error(NO_PLAYER);
    }
  if ($defender -> hp <= 0)
    {
        error($defender -> user." ".IS_DEAD);
    }
    if ($attacker -> hp <= 0)
    {
        error(YOU_DEAD);
    }
    if (($attacker -> clas == 'Wojownik' || $attacker -> clas == 'Rzemieślnik' || $attacker -> clas == 'Barbarzyńca' || $attacker -> clas == 'Złodziej') && $attacker -> usespell)
    {
        error(BAD_CLASS);
    }


 
 
    $smarty -> assign (array("Enemyname" => $defender -> user,
                             "Versus" => VERSUS,
                             "Action" => ''));
    
    $smarty -> display ('battle2.tpl');
    require_once('includes/battle2.php');

    pvpfight($attacker,$defender);
    require_once("includes/foot.php");
    exit;
}


/**
* Initialization of variables
*/
if (!isset($_GET['battle']))
{
    $_GET['battle'] = '';
}

if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}

if (!isset($_GET['fight']))
{
    $_GET['fight'] = '';
}

if (!isset($_GET['fight1']))
{
    $_GET['fight1'] = '';
}

if (!isset($_GET['dalej']))
{
    $_GET['dalej'] = '';
}

if (!isset($_GET['next']))
{
    $_GET['next'] = '';
}

if (!isset($_GET['action']))
{
    $_GET['action'] = '';
}
if (!isset($_GET['view']))
{
    $_GET['view'] = '';
}

/**
* Assign variables and display page
*/
$smarty -> assign (array("Action" => $_GET['action'],
                         "Battle" => $_GET['battle'],
                         "Step" => $_GET['step'],
                         "Fight" => $_GET['fight'],
                         "Fight1" => $_GET['fight1'],
                         "Dalej" => $_GET['dalej'],
                         "Next" => $_GET['next'],
                         "View" => $_GET['view']));
$smarty -> display ('battle2.tpl');

require_once("includes/foot.php");
?>
