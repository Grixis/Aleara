<?php

$title = "Sale Rozpaczy w Diabolium";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
/**
* Get the localization for game
*/
require_once("languages/".$player -> lang."/salerozpaczy1.php");

if ($player -> location != 'Diabolium') 
{
    error (ERROR);
}

$strMessage = '';

$objRings = $db -> Execute("SELECT `id`, `name`, `amount` FROM `salerozpaczy1`");
$i = 0;
$arrId = array();
$arrName = array();
$arrAmount = array();
while (!$objRings -> EOF)
{
    $arrId[$i] = $objRings -> fields['id'];
    $arrName[$i] = $objRings -> fields['name'];
    $arrAmount[$i] = $objRings -> fields['amount'];
    $i ++;
    $objRings -> MoveNext();
}
$objRings -> Close();

/**
 * Buy rings
 */
if (isset($_GET['buy']))
{
    if (!ereg("^[1-6]*$", $_GET['buy'])) 
    {
        error(ERROR);
    }
    if ($player -> credits < 50000)
    {
        error(NO_MONEY);
    }
    $intKey = $_GET['buy'] - 1;
    if (!$arrAmount[$intKey])
    {
        error(NO_RING);
    }
    
    
    
    
    
    
    $db -> Execute("UPDATE `salerozpaczy1` SET `amount`=`amount`-1 WHERE `id`=".$_GET['buy']);
    $objTest = $db -> Execute("SELECT `id` FROM `equipment` WHERE `owner`=".$player -> id." AND `name`='".$arrName[$intKey]."' AND `status`='U' AND `cost`=50");
    if (!$objTest -> fields['id'])
    {
        $db -> Execute("INSERT INTO `equipment` (`owner`, `name`, `power`, `status`, `type`, `cost`, `minlev`, `amount`) VALUES(".$player -> id.", '".$arrName[$intKey]."', '20', 'U', 'I', '50', '1', '1')");
    }
        else
    {
        $db -> Execute("UPDATE `equipment` SET `amount`=`amount`+1 WHERE `id`=".$objTest -> fields['id']);
    }
    $objTest -> Close();
    $db -> Execute("UPDATE `players` SET `credits`=`credits`-50000 WHERE `id`=".$player -> id);
    $strMessage = YOU_BUY.$arrName[$intKey].FOR_A." <a href=\"salerozpaczy1.php\">".A_REFRESH."</a>";
}






/**
 * Initialization of variable
 */
if (!isset($_GET['buy']))
{
    $_GET['buy'] = '';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array("Shopinfo" => SHOP_INFO,
                        "Rid" => $arrId,
                        "Rname" => $arrName,
                        "Ramount" => $arrAmount,
                        "Tname" => T_NAME,
                        "Tamount" => T_AMOUNT,
                        "Tbonus" => T_BONUS,
                        "Tcost" => T_COST,
                        "Taction" => T_ACTION,
                        "Abuy" => A_BUY,
                        "Message" => $strMessage));
$smarty -> display ('salerozpaczy1.tpl');

require_once("includes/foot.php");
?>
