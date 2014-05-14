<?php

function whichcore ($number) {
	if ($number > 1156) return 0;
	if ($number > 1153) return 30;
	if ($number > 1148) return 29;
	if ($number > 1143) return 28;
	if ($number > 1136) return 27;
	if ($number > 1129) return 26;
	if ($number > 1120) return 25;
	if ($number > 1111) return 24;
	if ($number > 1100) return 23;
	if ($number > 1089) return 22;
	if ($number > 1076) return 21;
	if ($number > 1063) return 20;
	if ($number > 1048) return 19;
	if ($number > 1033) return 18;
	if ($number > 1016) return 17;
	if ($number > 999) return 16;
	if ($number > 680) return 0;
	if ($number > 670) return 15;
	if ($number > 649) return 14;
	if ($number > 618) return 13;
	if ($number > 586) return 12;
	if ($number > 551) return 11;
	if ($number > 514) return 10;
	if ($number > 475) return 9;
	if ($number > 435) return 8;
	if ($number > 390) return 7;
	if ($number > 340) return 6;
	if ($number > 285) return 5;
	if ($number > 225) return 4;
	if ($number > 150) return 3;
	if ($number > 80) return 2;
	return 1;
	}

/**
* function for cores fight
* arguments: attacker array, defender array
* returns fight's log
*/
function corefight(&$attacker,&$defender) {
	$attacksPerRound = min( floor($attacker['speed']/$defender['speed']), 5);
	$log = '';
	for ($rounds=0; ($rounds<24 && $attacker['hp'] > 0 && $defender['hp'] > 0); $rounds++) {
		for ($i=0; $i < $attacksPerRound && $defender['hp'] > 0; $i++) {
			$damage = floor($attacker['attack'] * rand(90,110) / 100 - $defender['defence']);
			if ($damage < 0) $damage = 0;
			$defender['hp'] -= $damage;
			$log .= '<b>'.($attacker['name']).' ['.($attacker['user']).']</b> '.ATTACKS.' <b>'.($defender['name']).' ['.($defender['user']).']</b> '.AND_HITS.' <b>'.$damage.'</b> '.DAMAGES.' ('.($defender['hp']).' '.HP_LEFT.')<br/>';
			}
		if ($defender['hp'] > 0) {
			$damage = floor($defender['attack'] * rand(90,110) / 100 - $attacker['defence']);
			if ($damage < 0) $damage = 0;
			$attacker['hp'] -= $damage;
			$log .= '<b>'.($defender['name']).' ['.($defender['user']).']</b> '.ATTACKS.' <b>'.($attacker['name']).' ['.($attacker['user']).']</b> '.AND_HITS.' <b>'.$damage.'</b> '.DAMAGES.' ('.($attacker['hp']).' '.HP_LEFT.')<br/>';
			}
		}
	return $log;
	}



















$title = "Grota Wojownika Płomieni w Diabolium";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> location != 'Diabolium') {
	error (ERROR);
	}

//getting info about corepass and breeding
$player -> raredata();

//getting language data
require_once("languages/".$player -> lang."/grota.php");
global $smarty;

$smarty -> assign("Corepass" ,$player -> corepass);

/**
* main/welcome view
*/
	if (!isset($_GET['view'])) {
		$smarty -> assign (array(
			"view" => 'none',
			"Coremain" => CORE_MAIN,
			"Mycore" => A_MY_CORE,
			"Arena" => A_ARENA,
			"Train" => A_TRAIN,
			"Market" => A_MARKET,
			"Search" => A_SEARCH,
			"Breed" => A_BREED,
			"Monuments" => A_MONUMENTS,
			"Back" => BACK
			));
		$smarty -> display('grota.tpl');
		}
	/**
* without license
*/
if ($player -> corepass !='Y') {
	//welcome
	if (!isset($_GET['answer'])) {
		$smarty -> assign(array(
			"Corepass" => ($player -> corepass),
			"Corepassinfo" => COREPASS_INFO,
			"Gold" => ($player -> credits)
			));
		if ($player -> credits >= 500) {
			$smarty -> assign(array(
				"Havemoney" => HAVE_MONEY,
				"Ayes" => A_YES,
				"Ano" => A_NO
				));
			}
		else {
			$smarty -> assign("Nomoney",NO_MONEY);
			}
		
		}
	//buying license
	else if ($_GET['answer'] == 'yes') {
		if ($player -> corepass == 'Y') error(ERROR);
		if ($player -> credits < 500) {
			$smarty -> assign("Message",NO_MONEY);
			}
		else {
			global $db;
			$db -> Execute("UPDATE `players` SET `credits`=`credits`-500, `corepass`='Y' WHERE `id`=".($player -> id));
			$smarty -> assign("Message",YES_LICENSE);
			}
		$smarty -> display('error1.tpl');
		}
	}
/**
* with license
*/
else {
		$smarty -> assign("view",$_GET['view']);
		global $db;
		switch ($_GET['view']) {
/**
* view my cores
*/
			case 'my': {
				//forms from other "view"
				if (isset($_POST['id'])) $_GET['id'] = $_POST['id'];
				//view list of cores
				if (!isset($_GET['id'])) {
					$list = '';
					$corelist = $db -> Execute("SELECT `wojp`.`id`, `status`,  `petname`, `wojownikplomieni`.`id` AS `name`, `arena` FROM `wojp`, `wojownikplomieni` WHERE `owner`=".($player -> id)." AND `base` = `wojownikplomieni`.`id` ORDER BY `status`, `wojownikplomieni`.`id`");
					for ($i = 0, $j = 0; !$corelist -> EOF; $corelist -> MoveNext()) {
						if (($corelist -> fields["arena"]) == 'Z') {
							$normalnamelist[$i] = (($corelist -> fields["petname"]) != '') ? '<b>'.$corelist -> fields["petname"].'</b> - ' : '' ;
							$normalnamelist[$i] .= $names[$corelist -> fields["name"]];
							$normalidlist[$i] = $corelist -> fields["id"];
							$normalstatuslist[$i] = $corelist -> fields["status"];
							$i++;
							}
						else {
							$magicnamelist[$j] = (($corelist -> fields["petname"]) != '') ? '<b>'.$corelist -> fields["petname"].'</b> - ' : '' ;
							$magicnamelist[$j] .= $names[$corelist -> fields["name"]];
							$magicidlist[$j] = $corelist -> fields["id"];
							$magicstatuslist[$j] = $corelist -> fields["status"];
							$j++;
							}
						}
					if (isset($normalnamelist))
						$smarty -> assign(array(
							"Normalnamelist" => $normalnamelist,
							"Normalidlist" => $normalidlist,
							"Normalstatuslist" => $normalstatuslist
							));
					else $smarty -> assign("Normalnamelist", '');
					if (isset($magicnamelist))
						$smarty -> assign(array(
							"Magicnamelist" => $magicnamelist,
							"Magicidlist" => $magicidlist,
							"Magicstatuslist" => $magicstatuslist
							));
					else $smarty -> assign("Magicnamelist", '');
					$corelist -> Close();
					$smarty -> assign(array(
						"Info" => MY_CORES_INFO,
						"List" => $list,
						"Back" => BACK
						));
					$smarty -> display('grota.tpl');
					}
				//view one core
				else {
					//integercheck
					$coreid = (int)$_GET['id'];
					if (!isset($coreid) || $coreid == '') error(ERROR);

					if (isset($_GET['action'])) {
						$smarty -> assign("action",$_GET['action']);
						//change core name
						if ($_GET['action'] == 'changename' && isset($_POST['corename'])) {
							$core = $db -> Execute("SELECT  `owner` FROM `wojp` WHERE `wojp`.`id` = ".$coreid);
							if (!isset($core) || $core -> EOF) error(NO_CORE);
							if ($core -> fields['owner'] != $player -> id) error(NOT_YOURS);
							$newname = str_replace(
									array("<",">","'","\""),
									array("&lt;","&gt","&apos;","&quot;"),
									$_POST['corename']);
							$db -> Execute("UPDATE `wojp` SET `petname`='".$newname."' WHERE `id`=".$coreid);
							$core -> Close();
							$smarty -> assign("Message",NAME_CHANGED);
							$smarty -> display('error1.tpl');
							}
						//sell core
						if ($_GET['action'] == 'sell') {
							$core = $db -> Execute("SELECT  `owner`, `hp`, `status` FROM `wojp` WHERE `wojp`.`id` = ".$coreid);
							if (!isset($core) || $core -> EOF) error(NO_CORE);
							if ($core -> fields['owner'] != $player -> id) error(NOT_YOURS);
							if ($core -> fields['hp'] <= 0) error(IS_DEAD);
							if ($core -> fields['status'] == 'A') error(WRONG_STATUS);
							if (isset($_POST['prize'])) {
								//integercheck
								$prize = (int)$_POST['prize'];
								if (!isset($prize) || $prize == '') error(ERROR);
								if ($prize <= 0) error(BAD_PRIZE);
								$smarty -> assign("Sellinfo",'');
								$db -> Execute("UPDATE `wojp` SET `status`='S', `prize`=".$prize." WHERE `id`=".$coreid);
								$smarty -> assign("Sellinfo",'');
								$smarty -> assign("Message",YOU_SOLD);
								$smarty -> display('error1.tpl');
								}
							else {
								$smarty -> assign("Sellinfo",SELL_INFO);
								}
							}
						//unsell core
						if ($_GET['action'] == 'unsell') {
							$core = $db -> Execute("SELECT  `owner`, `status` FROM `wojp` WHERE `wojp`.`id` = ".$coreid);
							if (!isset($core) || $core -> EOF) error(NO_CORE);
							if ($core -> fields['owner'] != $player -> id) error(NOT_YOURS);
							if ($core -> fields['status'] != 'S') error(NOT_FORSALE);
							$db -> Execute("UPDATE `wojp` SET `status`='N', `prize`= 0 WHERE `id`=".$coreid);
							$smarty -> assign("Message",YOU_UNSOLD);
							$smarty -> display('error1.tpl');
							}
						//pass core other player
						if ($_GET['action'] == 'pass') {
							
							
							$core = $db -> Execute("SELECT  `status`, `owner`, `petname`, `wojownikplomieni`.`id` AS `name` FROM `wojp`, `wojownikplomieni` WHERE `wojp`.`id` = ".$coreid." AND `base`=`wojownikplomieni`.`id`");
							if (!isset($core) || $core -> EOF) error(NO_CORE);
							if ($core -> fields['owner'] != $player -> id) error(NOT_YOURS);
							if (isset($_POST['corepass'])) {
								//integercheck
								$newowner = (int)$_POST['corepass'];
								if (!isset($newowner) || $newowner == '') error(ERROR);
								if ($newowner == $player -> id) error(NO_SELF);
								if ($core -> fields['status'] != 'N') error(WRONG_STATUS);
								$owner = $db -> Execute("SELECT `user`, `id` FROM `players` WHERE `id` = ".$newowner);
								if ( !isset($owner -> fields['id']) || $newowner != ($owner -> fields['id'])) error(NO_PLAYER);
								$db -> Execute("UPDATE `wojp` SET `owner` = ".$newowner." WHERE `id`=".$coreid);
								(isset($core -> fields['petname']) && $core -> fields['petname'] != '' ) ? $name = ($core -> fields['petname']).' - ' : $name = '';
								$name .= $names[($core -> fields['name'])];
								$msg = YOU_PASSED.' '.$name.' '.TO_PLAYER.' <a href="view.php?view='.$newowner.'">'.($owner -> fields['user']).'</a>';
								$msg2 = YOU_GOT.' '.$name.' '.FROM_PLAYER.' <a href="view.php?view='.($player -> id).'">'.($player -> user).'</a>';
								$smarty -> assign("Message",$msg);
								$smarty -> display('error1.tpl');
								$smarty -> assign("Message",'<br/><a href="grota.php">'.BACK.'</a>');
								$smarty -> display('error1.tpl');
								global $newdate;
								$strDate = $db -> DBDate($newdate);
								$db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$player -> id.', \''.$msg.'\', '.$strDate.');');
								$db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$newowner.', \''.$msg2.'\', '.$strDate.');');
								//there is no core to show after passing it
								break;
								
								}
							}
						//activate core
						if ($_GET['action'] == 'activate') {
							$core = $db -> Execute("SELECT `wojp`.`hp`, `owner`, `status`, `arena`, `value` FROM `wojp`, `wojownikplomieni` WHERE `wojp`.`id` = ".$coreid." AND `base`=`wojownikplomieni`.`id`");
							if (!isset($core) || $core -> EOF) error(NO_CORE);
							if ($core -> fields['owner'] != $player -> id) error(NOT_YOURS);
							if ($core -> fields['hp'] <= 0) error(IS_DEAD);
							if ($core -> fields['status'] != 'N') error(WRONG_STATUS);
							if ($core -> fields['arena'] == 'Z') {
								$goldcost = ($core -> fields['value']) * 100;
								$platinumcost = $core -> fields['value'];
								$smarty -> assign("Cost",YOU_PAY." ".$goldcost." ".GOLD_PIECES.", ".$platinumcost." ".PLATINUM);
								if ($goldcost > $player -> credits ||
									$platinumcost > $player -> platinum
									) $nomoney = NO_MONEY;
								else $nomoney = '';
								}
							else {
								$minerals = $db -> Execute("SELECT `crystal`, `adamantium` FROM `minerals` WHERE `owner` = ".($player -> id));
								$adamantium = $minerals -> fields['adamantium'];
								$crystal = $minerals -> fields['crystal'];
								$goldcost = ($core -> fields['value']) * 500;
								$platinumcost = ($core -> fields['value']) * 2;
								$adamantiumcost = $core -> fields['value'];
								$crystalcost = $core -> fields['value'];
								$smarty -> assign("Cost",YOU_PAY." ".$goldcost." ".GOLD_PIECES.", ".$platinumcost." ".PLATINUM.", ".$adamantiumcost." ".ADAMANTIUM.", ".$crystalcost." ".CRYSTAL);
								if ($goldcost > $player -> credits ||
									$platinumcost > $player -> platinum ||
									$adamantiumcost > $adamantium ||
									$crystalcost > $crystal
									) $nomoney = NO_MONEY;
								else $nomoney = '';
								}
							$smarty -> assign("Nomoney",$nomoney);
							if (isset($_POST['activate']) && $nomoney == '') {
								$smarty -> assign("Activateinfo","");
								$db -> Execute("UPDATE `wojp` SET `status` = 'A' WHERE `id`=".$coreid);
								$db -> Execute("UPDATE `players` SET `credits` = `credits` - ".$goldcost.", `platinum` = `platinum` - ".$platinumcost." WHERE `id`=".($player -> id));
								if ($core -> fields['arena'] == 'M') {
									$db -> Execute("UPDATE `minerals` SET `adamantium` = `adamantium` - ".$adamantiumcost.", `crystal` = `crystal` - ".$crystalcost." WHERE `owner`=".($player -> id));
									}
								$smarty -> assign("Message",CORE_ACTIVATED);
								$smarty -> display('error1.tpl');
								}
							else {
								$smarty -> assign("Activateinfo",ACTIVATE_INFO);
								}
							}
						//deactivate core
						if ($_GET['action'] == 'deactivate') {
							$core = $db -> Execute("SELECT `wojp`.`hp`, `owner`, `status`, `arena`, `value` FROM `wojp`, `wojownikplomieni` WHERE `wojp`.`id` = ".$coreid." AND `base`=`wojownikplomieni`.`id`");
							if (!isset($core) || $core -> EOF) error(NO_CORE);
							if ($core -> fields['owner'] != $player -> id) error(NOT_YOURS);
							if ($core -> fields['status'] != 'A') error(WRONG_STATUS2);
							if ($core -> fields['arena'] == 'Z') {
								$goldcost = ($core -> fields['value']) * 100;
								$platinumcost = $core -> fields['value'];
								$smarty -> assign("Cost",YOU_PAY." ".$goldcost." ".GOLD_PIECES.", ".$platinumcost." ".PLATINUM);
								if ($goldcost > $player -> credits ||
									$platinumcost > $player -> platinum
									) $nomoney = NO_MONEY;
								else $nomoney = '';
								}
							else {
								$minerals = $db -> Execute("SELECT `crystal`, `adamantium` FROM `minerals` WHERE `owner` = ".($player -> id));
								$adamantium = $minerals -> fields['adamantium'];
								$crystal = $minerals -> fields['crystal'];
								$goldcost = ($core -> fields['value']) * 500;
								$platinumcost = ($core -> fields['value']) * 2;
								$adamantiumcost = $core -> fields['value'];
								$crystalcost = $core -> fields['value'];
								$smarty -> assign("Cost",YOU_PAY." ".$goldcost." ".GOLD_PIECES.", ".$platinumcost." ".PLATINUM.", ".$adamantiumcost." ".ADAMANTIUM.", ".$crystalcost." ".CRYSTAL);
								if ($goldcost > $player -> credits ||
									$platinumcost > $player -> platinum ||
									$adamantiumcost > $adamantium ||
									$crystalcost > $crystal
									) $nomoney = NO_MONEY;
								else $nomoney = '';
								}
							$smarty -> assign("Nomoney",$nomoney);
							if (isset($_POST['deactivate']) && $nomoney == '') {
								$smarty -> assign("Deactivateinfo","");
								$db -> Execute("UPDATE `wojp` SET `status` = 'N' WHERE `id`=".$coreid);
								$db -> Execute("UPDATE `players` SET `credits` = `credits` - ".$goldcost.", `platinum` = `platinum` - ".$platinumcost." WHERE `id`=".($player -> id));
								if ($core -> fields['arena'] == 'M') {
									$db -> Execute("UPDATE `minerals` SET `adamantium` = `adamantium` - ".$adamantiumcost.", `crystal` = `crystal` - ".$crystalcost." WHERE `owner`=".($player -> id));
									}
								$smarty -> assign("Message",CORE_DEACTIVATED);
								$smarty -> display('error1.tpl');
								}
							else {
								$smarty -> assign("Deactivateinfo",DEACTIVATE_INFO);
								}
							}
						//free core
						if ($_GET['action'] == 'free') {
							$core = $db -> Execute("SELECT  `owner` FROM `wojp` WHERE `wojp`.`id` = ".$coreid);
							if (!isset($core) || $core -> EOF) error(NO_CORE);
							if ($core -> fields['owner'] != $player -> id) error(NOT_YOURS);
							if (isset($_POST['free'])) {
								$db -> Execute("DELETE FROM `wojp` WHERE `id`=".$coreid);
								$smarty -> assign("Message",CORE_FREE);
								$smarty -> display('error1.tpl');
								$smarty -> assign("Message",'<br/><a href="grota.php">'.BACK.'</a>');
								$smarty -> display('error1.tpl');
								//there is no core to show after freeing it
								break;
								}
							}
						//heal core
						if ($_GET['action'] == 'heal') {
							$core = $db -> Execute("SELECT  `owner`, `wojp`.`hp`, `wojp`.`max_hp`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `cost` FROM `wojp`, `wojownikplomieni` WHERE `wojp`.`id` = ".$coreid." AND `wojp`.`base` = `wojownikplomieni`.`id`");
							if (!isset($core) || $core -> EOF) error(NO_CORE);
							if ($core -> fields['owner'] != $player -> id) error(NOT_YOURS);
							if ($core -> fields['hp'] == $core -> fields['max_hp']) error(NO_NEED_HEAL);
							if ($core -> fields['hp'] == 0) error(NEED_RESURRECT);
							$cost = ceil(($core -> fields['attack'] + $core -> fields['defence'] + $core -> fields['speed']) * $core -> fields['cost'] / 2);
							$healinfo = HEAL_COST.' <b>'.$cost.'</b> '.GOLD_PIECES;
							$nomoney = '';
							if (isset($_POST['heal'])) {
								if ($player -> credits < $cost) error(NO_MONEY);
								$db -> Execute("UPDATE `players` SET `credits` = `credits` - ".$cost." WHERE `id` = ".($player -> id));
								$db -> Execute("UPDATE `wojp` SET `hp`=`max_hp` WHERE `id`=".$coreid);
								$smarty -> assign("Healinfo","");
								$smarty -> assign("Message",CORE_HEALED);
								$smarty -> display('error1.tpl');
								}
							else {
								if ($player -> credits < $cost) $nomoney = NO_MONEY;
								$smarty -> assign(array(
									"Healinfo" => $healinfo,
									"Nomoney" => $nomoney
									));
								}
							}
						//resurrect core
						if ($_GET['action'] == 'resurrect') {
							$core = $db -> Execute("SELECT  `owner`, `wojp`.`hp`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `cost` FROM `wojp`, `wojownikplomieni` WHERE `wojp`.`id` = ".$coreid." AND `wojp`.`base` = `wojownikplomieni`.`id`");
							if (!isset($core) || $core -> EOF) error(NO_CORE);
							if ($core -> fields['owner'] != $player -> id) error(NOT_YOURS);
							if ($core -> fields['hp'] > 0) error(NO_NEED_RES);
							$cost = ($core -> fields['attack'] + $core -> fields['defence'] + $core -> fields['speed']) * $core -> fields['cost'];
							$goldcost = ceil($cost / 2);
							$platinumcost = floor($cost / 100);
							$adamantiumcost = floor($cost / 200);
							$crystalcost = floor($cost / 200);
							$resinfo = RESURRECT_COST.' <b>'.$goldcost.'</b> '.GOLD_PIECES;
							if ($platinumcost > 0) $resinfo .= ', <b>'.$platinumcost.'</b> '.PLATINUM;
							if ($adamantiumcost > 0) $resinfo .= ', <b>'.$adamantiumcost.'</b> '.ADAMANTIUM;
							if ($crystalcost > 0) $resinfo .= ', <b>'.$crystalcost.'</b> '.CRYSTAL;
							$nomoney = '';
							$minerals = $db -> Execute("SELECT `crystal`, `adamantium` FROM `minerals` WHERE `owner` = ".($player -> id));
							$adamantium = $minerals -> fields['adamantium'];
							$crystal = $minerals -> fields['crystal'];
							if (isset($_POST['resurrect'])) {
								if ($player -> credits < $goldcost ||
									$player -> platinum < $platinumcost ||
									$adamantium < $adamantiumcost ||
									$crystal < $crystalcost
									) error(NO_MONEY2);
								$db -> Execute("UPDATE `players` SET `credits` = `credits` - ".$goldcost.", `platinum` = `platinum` - ".$platinumcost." WHERE `id` = ".($player -> id));
								if ($adamantiumcost > 0) $db -> Execute("UPDATE `minerals` SET `adamantium` = `adamantium` - ".$adamantiumcost.", `crystal` = `crystal` - ".$crystalcost." WHERE `owner` = ".($player -> id));
								$db -> Execute("UPDATE `wojp` SET `hp`=`max_hp` WHERE `id`=".$coreid);
								$smarty -> assign("Resinfo","");
								$smarty -> assign("Message",CORE_RESURRECTED);
								$smarty -> display('error1.tpl');
								}
							else {
								if ($player -> credits < $goldcost ||
									$player -> platinum < $platinumcost ||
									$adamantium < $adamantiumcost ||
									$crystal < $crystalcost
									) $nomoney = NO_MONEY2;
								$smarty -> assign(array(
									"Resinfo" => $resinfo,
									"Nomoney" => $nomoney
									));
								}
							}
						}
					else $smarty -> assign("action",'');


					$core = $db -> Execute("SELECT  `owner`, `petname`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `gender`, `wojp`.`hp`, `max_hp`, `status`, `wins`, `loses`, `age`, `wojownikplomieni`.`id` AS `name`, `picture`, `atuta`, `atutd`, `atuts`, `maturity`, `arena`, `prize`, `rest` FROM `wojp`, `wojownikplomieni` WHERE `wojp`.`id` = ".$coreid." AND `base` = `wojownikplomieni`.`id`");
					if (!isset($core) || $core -> EOF) error(NO_CORE);
					if ($core -> fields['owner'] != $player -> id) error(NOT_YOURS);

					$name = '';
					if (($core -> fields["petname"]) != '') $name .= $core -> fields["petname"].' - ';
					$name .= $names[$core -> fields["name"]];
					$age = $core -> fields['age'];
					if ($core -> fields['age'] < $core -> fields['maturity']) {
						$age .= ' ('.C_IMMATURE.')';
						$rest = 0;
						}
					else {
						$age .= ' ('.C_MATURE.')';
						$rest = $core -> fields['rest'];
						}
					$atut = '';
					if ($core -> fields['atuta'] == 1) $atut .= C_ATTACK.' ';
					if ($core -> fields['atutd'] == 1) $atut .= C_DEFENCE.' ';
					if ($core -> fields['atuts'] == 1) $atut .= C_SPEED.' ';
					switch ($core -> fields['status']) {
						case 'A': { $status = ACTIVE; break; }
						case 'N': { $status = NONACTIVE; break; }
						case 'S': { $status = FORSALE." (".($core -> fields['prize'])." ".GOLD_PIECES.")"; break; }
						}
					if ($core -> fields['hp'] <= 0) $status = C_DEAD;
					$smarty -> assign(array(
						"view" => "display",
						"Ctitle" => $name,
						"Gender" => ($core -> fields["gender"] == 'M' ? GENDER_MALE : GENDER_FEMALE),
						"Arena" => ($core -> fields["arena"] == 'Z' ? ARENA_Z : ARENA_M),
						"Status" => $status,
						"Statuscode" => ($core -> fields['status']),
						"Coreid" => $coreid,
						"Name" => ($core -> fields["petname"]),
						"Species" => ($names[$core -> fields["name"]]),
						"Text" => ($description[$core -> fields["name"]]),
						"Hp" => ($core -> fields['hp']),
						"Maxhp" => ($core -> fields['max_hp']),
						"Attack" => ($core -> fields["attack"]),
						"Defence" => ($core -> fields["defence"]),
						"Speed" => ($core -> fields["speed"]),
						"Wins" => ($core -> fields["wins"]),
						"Loses" => ($core -> fields["loses"]),
						"Age" => $age,
						"Rest" => $rest,
						"Atut" => $atut,
						"Image" => ($core -> fields['picture'])
						));

					$smarty -> display('grota.tpl');
					}
				break;
				}
/** 
* search for cores
*/

				
case 'sword':
$db = "INSERT INTO `wojp` (`owner`, `base`, `attack`, `defence`, `speed`, `hp`, `max_hp`, `age`, `gender`) VALUES(".$player -> id.", 'wojownik plomieni', '10', '10', '10', '10', '10', '10', 'Z')";
                
break;
/**
* train core
*/
			case 'train': {
				if (!isset($_POST['id'])) {
					$cores = $db -> Execute("SELECT `wojp`.`id`, `petname`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `wojp`.`hp`, `wojp`.`max_hp`, `wojownikplomieni`.`id` AS `name` FROM `wojp`, `wojownikplomieni` WHERE `base` = `wojownikplomieni`.`id` AND `status`='N' AND `wojp`.`hp` > 0 AND `owner` = ".($player -> id)." ORDER BY `wojownikplomieni`.`id`");
					for ($i = 0; !$cores -> EOF ; $i++) {
						$namelist[$i] = ($cores -> fields['petname']).' ('.($names[$cores -> fields['name']]).')';
						$attacklist[$i] = $cores -> fields['attack'];
						$defencelist[$i] = $cores -> fields['defence'];
						$speedlist[$i] = $cores -> fields['speed'];
						$hplist[$i] = ($cores -> fields['hp']).' / '.($cores -> fields['max_hp']);
						$idlist[$i] = $cores -> fields['id'];
						$cores -> MoveNext();
						}
					if (isset($namelist))
						$smarty -> assign(array(
							"Namelist" => $namelist,
							"Attacklist" => $attacklist,
							"Defencelist" => $defencelist,
							"Speedlist" => $speedlist,
							"Hplist" => $hplist,
							"Idlist" => $idlist,
							"Cost" => "",
							"Trained" => "N"
							));
					else $smarty -> assign(array(
						"Namelist" => '',
						"Cost" => '',
						"Trained" => 'N'
						));
					}
				else {
					//integercheck
					$coreid = (int)$_POST['id'];
					if (!isset($coreid) || $coreid == '') error(ERROR);
					$smarty -> assign("Namelist", '');
					$smarty -> assign("Trained", '');

					$core = $db -> Execute("SELECT `owner`, `petname`, `status`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `wojp`.`hp`, `wojp`.`max_hp`, `wojownikplomieni`.`id` AS `name`, `arena`, `cost`, `atuta`, `atutd`, `atuts` FROM `wojp`, `wojownikplomieni` WHERE `base` = `wojownikplomieni`.`id` AND `wojp`.`id` = ".$coreid);
					if ($core -> fields['owner'] != $player -> id) error(NOT_YOURS);
					if ($core -> fields['status'] != 'N') error(WRONG_STATUS);

					$baseenergycost = 0.1 * $core -> fields['cost'];
					$corename = ($core -> fields['petname']).' ('.($names[$core -> fields['name']]).')';

					$minerals = $db -> Execute("SELECT `adamantium`, `crystal` FROM `minerals` WHERE `owner` = ".($player -> id));
					$adamantium = $minerals -> fields['adamantium'];
					$crystal = $minerals -> fields['crystal'];
					$platinum = $player -> platinum;


					if (isset($_POST['stat']) && isset($_POST['times'])) {
						//integercheck
						$times = (int)$_POST['times'];
						if (!isset($times) || $times == '' || $times < 1) error(ERROR);
						if ($_POST['stat'] != 'A' && $_POST['stat'] != 'D' && $_POST['stat'] != 'S') error(WRONG_STAT);

						$energycost = $baseenergycost * $times;
						if ($core -> fields['arena'] == 'Z') {
							$baseadamantiumcost = 1;
							$basecrystalcost = 1;
							$baseplatinumcost = 0;
							}
						else {
							$baseadamantiumcost = 3;
							$basecrystalcost = 2;
							$baseplatinumcost = 1;
							}
						if ($energycost > $player -> energy) error(NO_ENERGY);

						$templebless = $db -> Execute("SELECT `bless`, `blessval` FROM `players` WHERE `id` = ".($player -> id));
						if ($templebless -> fields['bless'] == 'breeding') {
							$bless = $templebless -> fields['blessval'];
							$player -> breeding += $bless;
							}
						$gainbreed = 0;
						$gainstat = 0;
						$gainExp = 0;

						$statsum = $core -> fields['attack'] + $core -> fields['defence'] + $core -> fields['speed'];
						switch ($_POST['stat']) {
							case 'A': $stat = 'attack';
								$mult = ($core -> fields['atuta'] == 1)? 1.5 : 1;
								$strStat = T_ATTACK;
								break;
							case 'D': $stat = 'defence';
								$mult = ($core -> fields['atutd'] == 1)? 1.5 : 1;
								$strStat = T_DEFENCE;
								break;
							case 'S': $stat = 'speed';
								$mult = ($core -> fields['atuts'] == 1)? 1.5 : 1;
								$strStat = T_SPEED;
							}
						$statsum += $core -> fields[$stat];

						$adamantiumcost = 0;
						$crystalcost = 0;
						$platinumcost = 0;

						for ($i = 0; $i < $times; $i++) {
							//no minerals for succesfull training
							if ($adamantium < $adamantiumcost + $baseadamantiumcost ||
								$crystal < $crystalcost + $basecrystalcost ||
								$platinum < $platinumcost + $baseplatinumcost) {
								break;
								}
							$chance = 2000 * ($player -> breeding + $gainbreed) / ($statsum + $gainstat) - 5 * $core -> fields['cost'];
							if ($chance > 90) $chance = 90;
							if (rand(1,100) <= $chance) {
								$gainstat += (0.5 + ($player -> breeding + $gainbreed) / 50) * $mult;
								$gainbreed += $baseenergycost / 50;
								$gainExp += 5 * $core -> fields['cost'] * $baseenergycost;
								$adamantiumcost += $baseadamantiumcost;
								$crystalcost += $basecrystalcost;
								$platinumcost += $baseplatinumcost;
								}
							else {
								$gainbreed += $baseenergycost / 100;
								}
							}
						$energycost = $baseenergycost * $i;

						$gainbreed = round($gainbreed,2);
						$gainExp = floor($gainExp);

						$db -> Execute("UPDATE `wojp` SET `".$stat."` = `".$stat."` + ".$gainstat." WHERE `id` = ".$coreid);
						$playersql = "UPDATE `players` SET `energy` = `energy` - ".$energycost.", `platinum` = `platinum` - ".$platinumcost.", `breeding` = `breeding` + ".$gainbreed;
						if (isset($bless)) $playersql .= ", bless = '', blessval = 0";
						$playersql .= " WHERE `id` = ".($player -> id);
						$db -> Execute($playersql);
						$db -> Execute("UPDATE `minerals` SET `adamantium` = `adamantium` - ".$adamantiumcost.", `crystal` = `crystal` - ".$crystalcost." WHERE `owner`=".($player -> id));

						if ($gainExp > 0) {
							require_once('includes/checkexp.php');
							checkexp($player -> exp, $gainExp, $player -> level, $player -> race, $player -> user, $player -> id, '', '', '','',0);
							}

						$smarty -> assign(array(
							"Cost" => '',
							"Gainstat" => $gainstat,
							"Stat" => $strStat,
							"Gainbreed" => $gainbreed,
							"GainExp" => $gainExp,
							"Adamantium" => $adamantiumcost,
							"Platinum" => $platinumcost,
							"Crystal" => $crystalcost,
							"Energy" => $energycost,
							"Trained" => "Y"
							));
						}
					else {
						if ($core -> fields['arena'] == 'Z') {
							$cost = (FOR_ONE_TRAIN.' 1 '.ADAMANTIUM.', 1 '.CRYSTAL.', '.$baseenergycost.' '.ENERGY);
							}
						else {
							$cost = (FOR_ONE_TRAIN.' 3 '.ADAMANTIUM.', 2 '.CRYSTAL.', 1 '.PLATINUM.', '.$baseenergycost.' '.ENERGY);
							}
						$maxtries = floor($player -> energy / $baseenergycost);
						$smarty -> assign(array(
							"Cost" => $cost,
							"Maxtries" => $maxtries,
							"Corename" => $corename,
							"Coreid" => $coreid,
							"Trained" => "N"
							));
						}
					}
				$smarty -> display('grota.tpl');
				break;
				}

/**
* cores' arena
*/
			case 'arena': {
				//choosing cores to fight
				if (isset($_GET['arena'])) {
					if ($player -> energy < 0.5) error(NO_ENERGY);
					if ($_GET['arena'] != 'Z') error(WRONG_ARENA);
					else $smarty -> assign("Arena",$_GET['arena']);
					$mycores = $db -> Execute("SELECT `wojp`.`id`, `wojp`.`petname`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `wojp`.`max_hp`, `wojp`.`hp`, `wojownikplomieni`.`id` AS `name` FROM `wojp`, `wojownikplomieni` WHERE `status` = 'A' AND `base` = `wojownikplomieni`.`id` AND `wojp`.`hp` > 0 AND `wojownikplomieni`.`arena` = '".($_GET['arena'])."' AND `owner` = ".($player -> id)." ORDER BY `base`");
					for ($i = 0; !$mycores -> EOF ; $i++) {
						$namelist[$i] = ($mycores -> fields['petname']).' ('.($names[$mycores -> fields['name']]).')';
						$attacklist[$i] = $mycores -> fields['attack'];
						$defencelist[$i] = $mycores -> fields['defence'];
						$speedlist[$i] = $mycores -> fields['speed'];
						$hplist[$i] = ($mycores -> fields['hp']).' / '.($mycores -> fields['max_hp']);
						$idlist[$i] = $mycores -> fields['id'];
						$mycores -> MoveNext();
						}
					if ($i == 0) error(NO_ACTIVE_CORE);

					$opcores = $db -> Execute("SELECT `user`, `owner`, `wojp`.`id`, `wojp`.`petname`, `wojownikplomieni`.`id` AS `name` FROM `players`, `wojp`, `wojownikplomieni` WHERE `status` = 'A' AND `base` = `wojownikplomieni`.`id` AND `wojp`.`hp` > 0 AND `wojownikplomieni`.`arena` = '".($_GET['arena'])."' AND `owner` <> ".($player -> id)." AND `owner`=`players`.`id` ORDER BY `base`");

					for ($i = 0; !$opcores -> EOF ; $i++) {
						$onamelist[$i] = ($opcores -> fields['petname']).' ('.($names[$opcores -> fields['name']]).')';
						$oidlist[$i] = $opcores -> fields['id'];
						$oownerlist[$i] = $opcores -> fields['user'];
						$oowneridlist[$i] = $opcores -> fields['owner'];
						$opcores -> MoveNext();
						}
					if ($i == 0) error(NO_OPPONENTS);

					$smarty -> assign(array(
						"Namelist" => $namelist,
						"Attacklist" => $attacklist,
						"Defencelist" => $defencelist,
						"Speedlist" => $speedlist,
						"Hplist" => $hplist,
						"Idlist" => $idlist,
						"ONamelist" => $onamelist,
						"OIdlist" => $oidlist,
						"OOwnerlist" => $oownerlist,
						"OOwneridlist" => $oowneridlist,
						));
					}
				//cores fight
				else if (isset($_GET['action']) && $_GET['action'] == 'fight') {
					//integercheck
					if (isset($_POST['my'])) $myid = (int)$_POST['my'];
					if (!isset($myid) || $myid == '') error(ERROR);
					if (isset($_POST['opponent'])) $opid = (int)$_POST['opponent'];
					if (!isset($opid) || $opid == '') error(ERROR);

					if ($player -> energy < 0.5) error(NO_ENERGY);

					$mycore = $db -> Execute("SELECT `owner`, `wojp`.`petname`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `arena`, `fights`,  `wojp`.`hp`, `wojp`.`max_hp`, `wojownikplomieni`.`id` AS `name`, `cost` FROM `wojp`, `wojownikplomieni` WHERE `status` = 'A' AND `base` = `wojownikplomieni`.`id` AND `wojp`.`id` = ".$myid);
					if (!isset($mycore) || $mycore -> EOF) error(NO_CORE);
					
					if ($mycore -> fields['owner'] != $player -> id) error(NOT_YOURS);
					if ($mycore -> fields['hp'] <= 0) error(YOURS_IS_DEAD);

					//prepare attacker's core array
					$attacker['name'] = ($mycore -> fields['petname'] != '') ? ($mycore -> fields['petname']).' - ' : '' ;
					$attacker['name'] .= $names[($mycore -> fields['name'])];
					$attacker['attack'] = $mycore -> fields['attack'];
					$attacker['defence'] = $mycore -> fields['defence'];
					$attacker['speed'] = $mycore -> fields['speed'];
					$attacker['hp'] = $mycore -> fields['hp'];
					$attacker['max_hp'] = $mycore -> fields['max_hp'];
					$attacker['user'] = $player -> user;
					$attacker['ownerid'] = $player -> id;

					$opcore = $db -> Execute("SELECT `players`.`id`, `user`, `owner`, `wojp`.`petname`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `arena`, `fights`, `wojp`.`hp`, `wojp`.`max_hp`, `wojownikplomieni`.`id` AS `name`, `cost` FROM `players`, `wojp`, `wojownikplomieni` WHERE `status` = 'A' AND `base` = `wojownikplomieni`.`id` AND `wojp`.`id` = ".$opid." AND `owner` = `players`.`id`");
					if (!isset($opcore) || $opcore -> EOF) error(NO_OPPONENT);
					
					if ($opcore -> fields['hp'] <= 0) error(OPPONENTS_IS_DEAD);
					if ($mycore -> fields['owner'] == $opcore -> fields['owner']) error(YOUR_OWN);
					if ($mycore -> fields['arena'] != $opcore -> fields['arena']) error(DIFFERENT_ARENA);

					//prepare defender's core array
					$defender['name'] = ($opcore -> fields['petname'] != '') ? ($opcore -> fields['petname']).' - ' : '' ;
					$defender['name'] .= $names[($opcore -> fields['name'])];
					$defender['attack'] = $opcore -> fields['attack'];
					$defender['defence'] = $opcore -> fields['defence'];
					$defender['speed'] = $opcore -> fields['speed'];
					$defender['hp'] = $opcore -> fields['hp'];
					$defender['max_hp'] = $opcore -> fields['max_hp'];
					$defender['user'] = $opcore -> fields['user'];
					$defender['ownerid'] = $opcore -> fields['id'];

					$db -> Execute("UPDATE `players` SET `energy` = `energy` - 0.5 WHERE `id` = ".($player -> id));

					//fight
					if ($attacker['speed'] < $defender['speed']) $fightlog = corefight($defender,$attacker);
					else $fightlog = corefight($attacker,$defender);

					//page title
					$fight = '['.($attacker['user']).'] '.($attacker['name']).' '.VERSUS.' '.($defender['name']).' ['.($defender['user']).']';

					//after fight
					if ($attacker['hp'] < 0) $attacker['hp'] = 0;
					if ($defender['hp'] < 0) $defender['hp'] = 0;
					if ($attacker['hp'] > 0 && $defender['hp'] > 0) {
						$result = YOU_DRAW;
						$db -> Execute("UPDATE `wojp` SET `hp` = ".($attacker['hp']).", `fights` = `fights` + 1 WHERE `id` = ".$myid);
						$db -> Execute("UPDATE `wojp` SET `hp` = ".($defender['hp']).", `fights` = `fights` + 1 WHERE `id` = ".$opid);
						$smarty -> assign('Reward','');
						$msg = CORE_M.' '.($attacker['name']).' [<a href="view.php?view='.($attacker['ownerid']).'">'.($attacker['user']).'</a>] '.ATTACKED.' '.($defender['name']).'. '.YOU_DRAW;
						}
					else if ($attacker['hp'] > 0 && $defender['hp'] == 0) {
						$result = YOU_WON;
						$gainHp = rand(1, ($opcore -> fields['cost'])) / 10;
						$db -> Execute("UPDATE `wojp` SET `hp` = ".($attacker['hp']).", `max_hp` = `max_hp` + ".$gainHp.", `fights` = `fights` + 1, `wins` = `wins` + 1 WHERE `id` = ".$myid);
						$db -> Execute("UPDATE `wojp` SET `hp` = ".($defender['hp']).", `fights` = `fights` + 1, `loses` = `loses` + 1 WHERE `id` = ".$opid);
						//attacker wins and get gold to hand
						$gainGold = ceil($defender['attack'] + $defender['defence'] + $defender['speed'] + $defender['max_hp'] + 5000);
						$gainGold *= (($opcore -> fields['arena']) == 'Z') ? 2 : 3;
						$gainPlatinum = rand(0,ceil($gainGold/200));
						$smarty -> assign('Reward',YOU_GOT.' <b>'.$gainGold.'</b> '.GOLD_PIECES.', <b>'.$gainPlatinum.'</b> '.PLATINUM);
						$db -> Execute("UPDATE `players` SET `credits` = `credits` + ".$gainGold.", `platinum` = `platinum` + ".$gainPlatinum." WHERE `id` = ".$attacker['ownerid']);
						$msg = CORE_M.' '.($attacker['name']).' [<a href="view.php?view='.($attacker['ownerid']).'">'.($attacker['user']).'</a>] '.ATTACKED.' '.($defender['name']).'. '.YOU_LOST;
						}
					else {
						$result = YOU_LOST;
						$gainHp = rand(1, ($mycore -> fields['cost'])) / 10;
						$db -> Execute("UPDATE `wojp` SET `hp` = ".($attacker['hp']).", `fights` = `fights` + 1, `loses` = `loses` + 1 WHERE `id` = ".$myid);
						$db -> Execute("UPDATE `wojp` SET `hp` = ".($defender['hp']).", `max_hp` = `max_hp` + ".$gainHp.", `fights` = `fights` + 1, `wins` = `wins` + 1 WHERE `id` = ".$opid);
						//defender wins and get gold to bank
						$gainGold = ceil($attacker['attack'] + $attacker['defence'] + $attacker['speed'] + $attacker['max_hp']);
						$gainGold *= (($opcore -> fields['arena']) == 'Z') ? 2 : 3;
						$gainPlatinum = rand(0,ceil($gainGold/200));
						$db -> Execute("UPDATE `players` SET `bank` = `bank` + ".$gainGold.", `platinum` = `platinum` + ".$gainPlatinum." WHERE `id` = ".$defender['ownerid']);
						$smarty -> assign('Reward','');
						$msg = CORE_M.' '.($attacker['name']).' [<a href="view.php?view='.($attacker['ownerid']).'">'.($attacker['user']).'</a>] '.ATTACKED.' '.($defender['name']).'. '.YOU_WON.' '.YOU_GOT.' <b>'.($gainGold).'</b> '.GOLD_PIECES.', '.($gainPlatinum).PLATINUM;
						}

					global $newdate;
					$strDate = $db -> DBDate($newdate);
					$db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.($defender['ownerid']).', \''.$msg.'\', '.$strDate.');');


					$smarty -> assign(array(
						"Fight" => $fight,
						"Log" => $fightlog,
						"Result" => $result,
						"Arena" => ''
						));
					}
				//choosing arena - main view
				else {
					$smarty -> assign(array(
						"Arena" => '',
						"Fight" => ''
						));
					}
				$smarty -> display('grota.tpl');
				break;
				}
/**
* breeding cores
*/
			case 'breed': {
				if (isset($_POST['maleid']) && isset($_POST['femaleid'])) {
					//integercheck
					$malecoreid = (int)$_POST['maleid'];
					if (!isset($malecoreid) || $malecoreid == '') error(ERROR);
					$femalecoreid = (int)$_POST['femaleid'];
					if (!isset($femalecoreid) || $femalecoreid == '') error(ERROR);

					$malecore = $db -> Execute("SELECT `owner`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `wojp`.`hp`, `wojp`.`max_hp`, `wojownikplomieni`.`id` AS `name`, `petname`, `gender`, `age`, `maturity`, `rest`, `status`, `arena`, `cost`, `base` FROM `wojp`, `wojownikplomieni` WHERE `wojownikplomieni`.`id` = `base` AND `wojp`.`id` = ".($malecoreid));

					if ($malecore -> fields['owner'] != $player -> id) error(NOT_YOURS);
					if ($malecore -> fields['status'] != 'N') error(WRONG_STATUS);
					if ($malecore -> fields['hp'] <= 0) error(IS_DEAD);
					if ($malecore -> fields['gender'] != 'M') error(WRONG_GENDER);
					if ($malecore -> fields['age'] < $malecore -> fields['maturity']) error(TOO_YOUNG);
					if ($malecore -> fields['rest'] > 0) error(NEED_REST);

					$femalecore = $db -> Execute("SELECT `owner`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `wojp`.`hp`, `wojp`.`max_hp`, `wojownikplomieni`.`id` AS `name`, `petname`, `gender`, `age`, `maturity`, `rest`, `status` FROM `wojp`, `wojownikplomieni` WHERE `wojownikplomieni`.`id` = `base` AND `wojp`.`id` = ".($femalecoreid));

					if ($femalecore -> fields['owner'] != $player -> id) error(NOT_YOURS);
					if ($femalecore -> fields['status'] != 'N') error(WRONG_STATUS);
					if ($femalecore -> fields['hp'] <= 0) error(IS_DEAD);
					if ($femalecore -> fields['gender'] != 'F') error(WRONG_GENDER);
					if ($femalecore -> fields['age'] < $femalecore -> fields['maturity']) error(TOO_YOUNG);
					if ($femalecore -> fields['rest'] > 0) error(NEED_REST);

					if ($femalecore -> fields['name'] != $malecore -> fields['name']) error(WRONG_SPECIES);

					$statsum = $malecore -> fields['attack'] + $femalecore -> fields['attack'] + $malecore -> fields['defence'] + $femalecore -> fields['defence'] + $malecore -> fields['speed'] + $femalecore -> fields['speed'];

					$energycost = $malecore -> fields['cost'];

					$platinumcost = floor($statsum / 100);
					$adamantiumcost = floor($statsum / 200);
					$crystalcost = floor($statsum / 200);
					$meteorcost = ($malecore -> fields['arena'] == 'M') ? floor($statsum / 400) : 0;

					$minerals = $db -> Execute("SELECT `adamantium`, `crystal`, `meteor` FROM `minerals` WHERE `owner` = ".($player -> id));

					if ($platinumcost > $player -> platinum ||
						$adamantiumcost > $minerals -> fields['adamantium'] ||
						$crystalcost > $minerals -> fields['crystal'] ||
						$meteorcost > $minerals -> fields['meteor'])
						$nominerals = NO_MINERALS;

					if ($energycost > $player -> energy) $noenergy = NO_ENERGY;

					if (isset($_POST['cross'])) {
						if (isset($nominerals)) error(NO_MINERALS);
						if (isset($noenergy)) error(NO_ENERGY);
						$rest = ceil($malecore -> fields['maturity'] / 2);

						$templebless = $db -> Execute("SELECT `bless`, `blessval` FROM `players` WHERE `id` = ".($player -> id));
						if ($templebless -> fields['bless'] == 'breeding') {
							$bless = $templebless -> fields['blessval'];
							$player -> breeding += $bless;
							}

						$chance = 1000 * $player -> breeding / $statsum - 5 * $malecore -> fields['cost'];
						if ($chance > 90) $chance = 90;

						if (rand(1,100) <= $chance) {
							$gainbreeding = round(0.03 * $energycost,2);
							$gainExp = round($energycost * $malecore -> fields['cost'] * 10);
							$newattack = rand(($malecore -> fields['attack']),($femalecore -> fields['attack'])) * rand(75,100) / 100;
							$newdefence = rand(($malecore -> fields['defence']),($femalecore -> fields['defence'])) * rand(75,100) / 100;
							$newspeed = rand(($malecore -> fields['speed']),($femalecore -> fields['speed'])) * rand(75,100) / 100;
							$newhp = rand(($malecore -> fields['max_hp']),($femalecore -> fields['max_hp'])) * rand(75,100) / 100;
							$newgender = (rand(1,2) == 1) ? 'M' : 'F';
							$db -> Execute("INSERT INTO `wojp` (`owner`, `base`, `attack`, `defence`, `speed`, `hp`, `max_hp`, `gender`) VALUES (".($player -> id).", ".($malecore -> fields['base']).", ".$newattack.", ".$newdefence.", ".$newspeed.", ".$newhp.", ".$newhp.", '".$newgender."')");
							$result = SUCCESS;
							}
						else {
							$gainbreeding = round(0.01 * $energycost,2);
							$result = LOSE;
							}

						$db -> Execute("UPDATE `minerals` SET `adamantium` = `adamantium` - ".$adamantiumcost.", `crystal` = `crystal` - ".$crystalcost.", `meteor` = `meteor` - ".$meteorcost." WHERE `owner` = ".($player -> id));
						$db -> Execute("UPDATE `wojp` SET `rest` = ".$rest." WHERE `id` = ".$malecoreid." OR `id` = ".$femalecoreid);

						if (!isset($gainExp)) $gainExp = 0;
						if ($gainExp > 0) {
							require_once('includes/checkexp.php');
							checkexp($player -> exp, $gainExp, $player -> level, $player -> race, $player -> user, $player -> id, '', '', '','',0);
							}

						$sql = "UPDATE `players` SET `breeding` = `breeding` + ".$gainbreeding.", `energy` = `energy` - ".$energycost.", `platinum` = `platinum` - ".$platinumcost;
						if (isset($bless)) $sql .= ", `bless` = '', `blessval` = 0";
						$sql .= " WHERE `id` = ".($player -> id);
						$db -> Execute($sql);

						$smarty -> assign(array(
							"Result" => $result,
							"Choosen" => 'Y',
							"Gainbreed" => $gainbreeding,
							"GainExp" => $gainExp
							));

						}
					else {

						$malename = ($malecore -> fields['petname']).' ('.($names[$malecore -> fields['name']]).')';
						$maleattack = $malecore -> fields['attack'];
						$maledefence = $malecore -> fields['defence'];
						$malespeed = $malecore -> fields['speed'];
						$malehp = ($malecore -> fields['hp']).' / '.($malecore -> fields['max_hp']);

						$femalename = ($femalecore -> fields['petname']).' ('.($names[$femalecore -> fields['name']]).')';
						$femaleattack = $femalecore -> fields['attack'];
						$femaledefence = $femalecore -> fields['defence'];
						$femalespeed = $femalecore -> fields['speed'];
						$femalehp = ($femalecore -> fields['hp']).' / '.($femalecore -> fields['max_hp']);

						if (!isset($nominerals)) $nominerals = '';
						if (!isset($noenergy)) $noenergy = '';

						$smarty -> assign(array(
							"Result" => '',
							"Choosen" => 'Y',
							"Maleid" => $malecoreid,
							"Malename" => $malename,
							"Maleattack" => $maleattack,
							"Maledefence" => $maledefence,
							"Malespeed" => $malespeed,
							"Malehp" => $malehp,
							"Femaleid" => $femalecoreid,
							"Femalename" => $femalename,
							"Femaleattack" => $femaleattack,
							"Femaledefence" => $femaledefence,
							"Femalespeed" => $femalespeed,
							"Femalehp" => $femalehp,
							"Nominerals" => $nominerals,
							"Adamantiumcost" => $adamantiumcost,
							"Crystalcost" => $crystalcost,
							"Platinumcost" => $platinumcost,
							"Meteorcost" => $meteorcost,
							"Energycost" => $energycost,
							"Noenergy" => $noenergy
							));
						}
					}
				else {
					//list of male cores
					$malecores = $db -> Execute("SELECT `wojp`.`id`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `wojp`.`hp`, `wojp`.`max_hp`, `wojownikplomieni`.`id` AS `name`, `petname` FROM `wojp`, `wojownikplomieni` WHERE `status` = 'N' AND `wojp`.`hp` > 0 AND `base` = `wojownikplomieni`.`id` AND `rest` = 0 AND `age` >= `maturity` AND `gender` = 'M' AND `owner` = ".($player -> id)." ORDER BY `wojownikplomieni`.`id`");
					for ($i = 0; !$malecores -> EOF ; $i++) {
						$malenamelist[$i] = ($malecores -> fields['petname']).' ('.($names[$malecores -> fields['name']]).')';
						$maleattacklist[$i] = $malecores -> fields['attack'];
						$maledefencelist[$i] = $malecores -> fields['defence'];
						$malespeedlist[$i] = $malecores -> fields['speed'];
						$malehplist[$i] = ($malecores -> fields['hp']).' / '.($malecores -> fields['max_hp']);
						$maleidlist[$i] = $malecores -> fields['id'];
						$malecores -> MoveNext();
						}
					if (isset($malenamelist)) {
						$smarty -> assign(array(
							"MaleNamelist" => $malenamelist,
							"MaleAttacklist" => $maleattacklist,
							"MaleDefencelist" => $maledefencelist,
							"MaleSpeedlist" => $malespeedlist,
							"MaleHplist" => $malehplist,
							"MaleIdlist" => $maleidlist
							));
						}
					else error(NO_MALE_CORE);

					//list of female cores
					$femalecores = $db -> Execute("SELECT `wojp`.`id`, `wojp`.`attack`, `wojp`.`defence`, `wojp`.`speed`, `wojp`.`hp`, `wojp`.`max_hp`, `wojownikplomieni`.`id` AS `name`, `petname` FROM `wojp`, `wojownikplomieni` WHERE `status` = 'N' AND `wojp`.`hp` > 0 AND `base` = `wojownikplomieni`.`id` AND `rest` = 0 AND `age` >= `maturity` AND `gender` = 'F' AND `owner` = ".($player -> id)." ORDER BY `wojownikplomieni`.`id`");
					for ($i = 0; !$femalecores -> EOF ; $i++) {
						$femalenamelist[$i] = ($femalecores -> fields['petname']).' ('.($names[$femalecores -> fields['name']]).')';
						$femaleattacklist[$i] = $femalecores -> fields['attack'];
						$femaledefencelist[$i] = $femalecores -> fields['defence'];
						$femalespeedlist[$i] = $femalecores -> fields['speed'];
						$femalehplist[$i] = ($femalecores -> fields['hp']).' / '.($femalecores -> fields['max_hp']);
						$femaleidlist[$i] = $femalecores -> fields['id'];
						$femalecores -> MoveNext();
						}
					if (isset($femalenamelist)) {
						$smarty -> assign(array(
							"FemaleNamelist" => $femalenamelist,
							"FemaleAttacklist" => $femaleattacklist,
							"FemaleDefencelist" => $femaledefencelist,
							"FemaleSpeedlist" => $femalespeedlist,
							"FemaleHplist" => $femalehplist,
							"FemaleIdlist" => $femaleidlist
							));
						}
					else error(NO_FEMALE_CORE);

					$smarty -> assign(array(
						"Result" => '',
						"Chosen" => ''
						));

					}
				$smarty -> display('grota.tpl');
				break;
				}
/**
* best cores
*/
			case 'monuments': {
				$bestnormal = $db -> Execute("SELECT `wojp`.`wins`, `petname`, `wojownikplomieni`.`id` AS `name`, `user`, `players`.`id` FROM `players`, `wojp`, `wojownikplomieni` WHERE `arena` = 'Z' AND `owner` = `players`.`id` AND `base` = `wojownikplomieni`.`id` ORDER BY `wins` DESC, `wojp`.`id` LIMIT 0 , 20");

				$normalname = '';
				for($i = 0; !$bestnormal -> EOF; $i++, $bestnormal -> MoveNext()) {
					$normalname[$i] = ($bestnormal -> fields['petname'] != '') ? '<b>'.($bestnormal -> fields['petname']).'</b> ('.$names[($bestnormal -> fields['name'])].')' : $names[($bestnormal -> fields['name'])];
					$normaluser[$i] = $bestnormal -> fields['user'];
					$normalid[$i] = $bestnormal -> fields['id'];
					$normalwins[$i] = $bestnormal -> fields['wins'];
					}
				if ($normalname != '')
					$smarty -> assign(array(
						"Normalcores" => 'Y',
						"Normalname" => $normalname,
						"Normalwins" => $normalwins,
						"Normaluser" => $normaluser,
						"Normalid" => $normalid,
						));
				else $smarty -> assign("Normalcores", '');

				$bestmagic = $db -> Execute("SELECT `wojp`.`wins`, `petname`, `wojownikplomieni`.`id` AS `name`, `user`, `players`.`id` FROM `players`, `wojp`, `wojownikplomieni` WHERE `arena` = 'M' AND `owner` = `players`.`id` AND `base` = `wojownikplomieni`.`id` ORDER BY `wins` DESC, `wojp`.`id` LIMIT 0 , 20");

				$magicname = '';
				for($i = 0; !$bestmagic -> EOF; $i++, $bestmagic -> MoveNext()) {
					$magicname[$i] = ($bestmagic -> fields['petname'] != '') ? '<b>'.($bestmagic -> fields['petname']).'</b> ('.$names[($bestmagic -> fields['name'])].')' : $names[($bestmagic -> fields['name'])];
					$magicuser[$i] = $bestmagic -> fields['user'];
					$magicid[$i] = $bestmagic -> fields['id'];
					$magicwins[$i] = $bestmagic -> fields['wins'];
					}
				if ($magicname != '')
					$smarty -> assign(array(
						"Magiccores" => 'Y',
						"Magicname" => $magicname,
						"Magicwins" => $magicwins,
						"Magicuser" => $magicuser,
						"Magicid" => $magicid,
						));
				else $smarty -> assign("Magiccores", '');

				$smarty -> display('grota.tpl');
				break;
				}
			}
		}

	

require_once("includes/foot.php");
?>
