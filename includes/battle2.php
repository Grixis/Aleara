<?php


require_once("languages/".$player -> lang."/battle.php");

function doattack(&$attacker, &$defender)
{
	global $title;
	$strMessage = '';
	$eor = 0;
	$damage = $attacker -> damage;

	if ($attacker -> clas != 'Monster' && ($attacker -> noweapon || $attacker -> usebow)) {
		$damage += rand($attacker -> mindamage , $attacker -> maxdamage);
		}
	if ($attacker -> clas == 'Barbarzyńca' && $defender -> usedefspell) {
		$damage *= 1.5;
		}
	//$damage += rand(1 , min(10 * $attacker -> level,100));
//krytyk
	if ($attacker -> clas != 'Monster' && $title !='Portal') {
		$rzut = rand(1,1000)/10;
		$rzut2 = $rzut;
		if ($rzut < $attacker -> criticalhit && !$attacker -> noweapon) {
			$rzut = rand(1,100);
			if ($rzut < 60) {
				$damage += 2 * $attacker -> criticalstat;
					$strMessage .= '<b>'.$attacker -> user.'</b>: szansa na trafienie krytyczne! ('.$attacker->criticalhit.' przeciwko: '.$rzut2.')';
				}
			else if ($rzut < 90) {
				$damage += 2 * $attacker -> criticalstat + $attacker -> damage;
				$strMessage .= '<b>'.$attacker -> user.'</b>: szansa na trafienie krytyczne! ('.$attacker->criticalhit.' przeciwko: '.$rzut2.')';
				}
			else if ($rzut < 100) {
				$damage += $defender -> defence;
				$strMessage .= '<b>'.$attacker -> user.'</b>: szansa na trafienie krytyczne! ('.$attacker->criticalhit.' przeciwko: '.$rzut2.')';
				}
			else {
			//one final shot
				if ($defender -> clas == 'Monster') {
					$defender -> hp -= $defender -> basehp;
					}
				else {
					$defender -> hp = 0;
					}
				if ($attacker -> usespell) {
					$strMessage .= '<b>'.$attacker -> user.'</b> '.P_ATTACK.' <b>'.$defender -> user.'</b> '.AND_KILL2.' ('.$defender -> hp.' '.HP_LEFT.')<br />';
					}
				else {
					$strMessage .= '<b>'.$attacker -> user.'</b> '.P_ATTACK.' <b>'.$defender -> user.'</b> '.AND_KILL.' ('.$defender -> hp.' '.HP_LEFT.')<br />';
					}
				if ($attacker -> usesword) {
				//gain attack
					$attacker -> gainattack += 0.05;
				}
				else if ($attacker -> usebow) {
				//gain shoot
					$attacker -> gainshoot += 0.05;
				}
				else if ($attacker -> usespell) {
				//gain magic
					$attacker -> gainmagic += 0.05;
				}
				$eor=1;
				}
			}
		}
//pech maga
	if (!$eor && $attacker -> usespell) {
		$rzut = rand(1,100);
		if ($rzut < $attacker -> misspell) {
			
				$attacker -> mana -= $attacker -> usespell;
				$strMessage .= '<b>'.$attacker -> user.'</b> koncentracja: *niepowodzenie* (-<b>'.$attacker -> usespell.'</b> many)<br />';
				$eor=1;
				}
			
			
			}
		
if (!$eor) {
	//trucizny
		if ($attacker -> poisontype == 'D' && (!isset($defender -> antidote_d) || $defender -> antidote_d == 0)) {
			$damage += $attacker -> poisonpower;
			}
		if ($attacker -> poisontype == 'I' && (!isset($defender -> antidote_i) || $defender -> antidote_i == 0)) {
			$damage += $attacker -> poisonpower;
			}
	//opponent defence
		if ($defender -> actionpoints > 0) {
			if ($defender -> clas == 'Barbarzyńca' && $attacker -> usespell) {
				$damage -= $defender -> defence * 1.5;
				}
			else {
				$damage -= $defender -> defence;
				}
			$damage -= rand(1 , min(10 * $defender -> level,100));
			}
		$damage = (int) $damage;
		if ($damage < 1) {
			$damage = 1;
			}
		if ($defender -> clas == 'Monster' && $damage > $defender -> basehp) {
			$damage = $defender -> basehp;
			}
	//hit chance
		$chance = 100 * $attacker -> hitmodificator / ($attacker -> hitmodificator + $defender -> missmodificator);
		if ($chance < 10) {
			$chance = 10;
			}
		if ($chance > 90) {
			$chance = 90;
			}
		if ($defender -> actionpoints <= 0) {
			$chance = 90;
			}
		$rzut = rand(1,100);
		if ($rzut < $chance) {
		//trafienie
			//trutka z nutari
			if ($attacker -> poisontype == 'N' && (!isset($defender -> antidote_n) || $defender -> antidote_n == 0)) {
				$defender -> mana -= $attacker -> poisonpower;
				$strMessage .='<b>'.$defender->user.'</b>: -'.$attacker->poisonpower.' many!<br>';
				}
			$defender -> hp -= $damage;
			$strMessage .= '<b>'.$attacker -> user.'</b>: atak *trafienie* (obrażenia:<b>'.$damage.'</b> (<b>'.$defender->user.'</b>:pozostało <b>'.$defender -> hp.'</b> punktów życia)<br />';
		//lost mana by defender
			if ($defender -> usedefspell) {
				$defender -> mana -= ceil( ($defender -> usedefspell / 2) + ($defender -> magic / 50) );
				if ($defender -> mana <= 0) {
					if ($defender -> usespell) {
						$defender -> setDamage($defender -> equipment,$defender -> spell);
						}
					$defender -> setDefence($defender -> equipment,$defender -> spell);
					}
				}
		//lost sword
			if ($attacker -> usesword) {
			//gain attack
				if ($damage > 1) $attacker -> gainattack += 0.01;
				$attacker -> equipment[0][6]--;
				$attacker -> lostequip[0]++;
				if ($attacker -> equipment[0][6] <= 0) {
					$attacker -> setDamage($attacker -> equipment,$attacker -> spell);
					}
				//wytarcie trutki
				if ($attacker -> poisontype && rand(1,10) == 1) {
					$attacker -> poisontype = '';
					$strMessage .='<b>'.$attacker->user.'</b>:trucizna naniesiona na broń przestaje działać.<br>';
					}
				}
			if ($attacker -> usebow) {
			//gain shoot
				if ($damage > 1) $attacker -> gainshoot += 0.01;
				}
			if ($attacker -> usespell) {
			//gain magic
				if ($damage > 1) $attacker -> gainmagic += 0.01;
				}
		//lost armors
			$rzut = rand(1,5);
			if ($rzut>1 && isset($defender -> equipment) && $defender -> equipment[$rzut][6] > 0) {
				$defender -> equipment[$rzut][6]--;
				$defender -> lostequip[$rzut]++;
				if ($defender -> equipment[$rzut][6] <= 0) {
					$defender -> setDefence($defender -> equipment,$defender -> spell);
					}
				}
			}
		else {
		//unik
			$strMessage .= '<b>'.$attacker -> user.'</b>:atak *pudło*  <b>'.$defender -> user.'</b> unika ciosu.<br />';
		//gain miss
			if ($defender -> clas != 'Monster' && $defender -> actionpoints > 0) {
				$defender -> gainmiss++;
				}
		//zmecznie z uniku
			$defender -> actionpoints -= $defender -> misscost;
			if (isset($_SESSION['exhaust']) && $defender -> clas != 'Monster') {
				$_SESSION['exhaust'] += $defender -> misscost;
				}
		}
	}

//zmecznie z ataku
	$attacker -> actionpoints -= $attacker -> attcost;
	if (isset($_SESSION['exhaust']) && $attacker -> clas != 'Monster') {
		$_SESSION['exhaust'] += $attacker -> attcost;
		}
//lost mana
	if ($attacker -> usespell) {
		$attacker -> mana -= ceil( ($attacker -> usespell / 2) + ($attacker -> magic / 50) );
		if ($attacker -> mana <= 0) {
			$strMessage .='<b>'.$attacker->user.'</b>: masz za mało many by rzucić czar!';
			$attacker -> setDamage($attacker -> equipment,$attacker -> spell);
			}
		}
//lost arrow
	if ($attacker -> usebow) {
		$attacker -> equipment[6][6]--;
		$attacker -> lostequip[6]++;
		$attacker -> equipment[1][6]--;
		$attacker -> lostequip[1]++;
		if ($attacker -> equipment[6][6] <= 0 || $attacker -> equipment[1][6] <= 0) {
			$attacker -> setDamage($attacker -> equipment,$attacker -> spell);
			}
		}
	return $strMessage;
}

/**
* Function for fight player vs player
* zwraca stringa z przebiegiem walki
*/
function dofight(&$attacker, &$defender)
{
	global $smarty;

	$strMessage = '';
	$round = 0;
	$repeat = floor($attacker -> attackspeed / $defender -> attackspeed);
	if ($repeat>5) {
		$repeat = 5;
		}
	
	while ($round<24 && $attacker -> hp > 0 && $defender -> hp > 0) {
		
//$attacker action
		$opponents = 1;
		if ($attacker -> clas == 'Monster') {
			$opponents = ceil($attacker -> hp / $attacker -> basehp);
			}
		if ($opponents < 1) {
			$opponents = 1;
			}
		$strMessage .="<br>Tura #".$round+1 ."<br><hr>";
		for ($i=0; $i<($repeat*$opponents) && $attacker -> hp > 0 && $defender -> hp > 0 && $attacker -> actionpoints > 0; $i++) {
			$strMessage .= doattack($attacker, $defender);
			}


		$opponents = 1;
		if ($defender -> clas == 'Monster') {
			$opponents = ceil($defender -> hp / $defender -> basehp);
			}
		if ($opponents < 1) {
			$opponents = 1;
			}
//$defender action
		for ($i=0; $i<$opponents && $attacker -> hp > 0 && $defender -> hp > 0 && $defender -> actionpoints > 0; $i++) {
			$strMessage .= doattack($defender, $attacker);
			}
		$round++;
		}
	return $strMessage;
}

function pvpfight(&$attacker,&$defender)
{
	global $db;
	global $player;
	global $smarty;
	global $newdate;

	$strMessage = '';

//fight
	if ($defender -> attackspeed > $attacker -> attackspeed) {
		$strMessage .= dofight($defender, $attacker);
		}
	else {
		$strMessage .= dofight($attacker, $defender);
		}

	$mailMessage = '<br /><b>'.$attacker -> user.' '.VERSUS.' '.$defender -> user.'</b><br />'.$strMessage;

	$strMessage .= '<br /><b>'.YOU_FIGHT_WITH.' '.$defender -> user.' ';
	if ($attacker -> hp > 0 && $defender -> hp > 0) {
		$strMessage .= YOU_DRAW.'</b><br />';
		$mailMessage .= '<br /><b>'.L_BATTLE.'!</b>';
		}
	else if ($attacker -> hp > 0) {
		$strMessage .= YOU_WIN.'</b><br />';
		$mailMessage .= '<br /><b>'.$attacker -> user.' '.B_WIN.'!</b>';
		}
	else {
		$strMessage .= YOU_LOSE_WITH.'</b><br />';
		$mailMessage .= '<br /><b>'.$defender -> user.' '.B_WIN.'!</b>';
		}

	$smarty -> assign ('Message', $strMessage);
	$smarty -> display ('error1.tpl');
	$strMessage = '';
//herold
	$strDate = $db -> DBDate($newdate);
	if ($attacker -> battleloga) {
		$strSubject = T_SUBJECT.$defender -> user.T_SUB_ID.$defender -> id;
		$db -> Execute("INSERT INTO `mail` (`sender`, `senderid`, `owner`, `subject`, `body`, `date`) VALUES('".T_SENDER."','0',".$attacker -> id.",'".$strSubject."','".$mailMessage."', ".$strDate.")");
		}
	if ($defender -> battlelogd) {
		$strSubject = T_SUBJECT.$attacker -> user.T_SUB_ID.$attacker -> id;
		$db -> Execute("INSERT INTO `mail` (`sender`, `senderid`, `owner`, `subject`, `body`, `date`) VALUES('".T_SENDER."','0',".$defender -> id.",'".$strSubject."','".$mailMessage."', ".$strDate.")");
		}
//count gained credits and experience and loststat

	$lostArray = array(STRENGTH,AGILITY,INTELIGENCE,CONDITION,SPEED,WISDOM);

	$strMap = '';

	if ($attacker -> hp > 0 && $defender -> hp <= 0) {
		loststat($defender);
		$ggold = $defender -> credits / 10;
		$ggold = (($ggold > 0)? $ggold: 0);
		$attacker -> gaingold = $ggold;
		$defender -> gaingold = - $ggold;
		$attacker -> gainexp = rand(5,10) * $defender -> level;
		if (rand (1,20) == 20 && $defender -> maps > 0) {
			$attacker -> maps++;
			$defender -> maps--;
			$strMap = AND_MAP;
			}
		$strMessage .= '';
		}
	else if ($attacker -> hp <= 0 && $defender -> hp > 0) {
		loststat($attacker);
		$ggold = $attacker -> credits / 10;
		$ggold = (($ggold > 0)? $ggold: 0);
		$defender -> gaingold = (int) $ggold;
		$attacker -> gaingold = - (int) $ggold;
		$defender -> gainexp = rand(5,10) * $attacker -> level;
		if (rand (1,20) == 20 && $attacker -> maps > 0) {
			$defender -> maps++;
			$attacker -> maps--;
			$strMap = AND_MAP;
			}
		$strMessage .= '';
		if ($attacker -> lost > 0) {
		
			}
		}

//prepare for writing data to db
	$attacker -> hp = (($attacker -> hp >= 0)? $attacker -> hp : 0);
	$attacker -> mana = (($attacker -> mana >= 0)? $attacker -> mana : 0);
	$attacker -> unsetBless();
	$defender -> hp = (($defender -> hp >= 0)? $defender -> hp : 0);
	$defender -> mana = (($defender -> mana >= 0)? $defender -> mana : 0);
	$defender -> unsetBless();


	$strMessage .= '<br /><b>'.YOU_REWARD.'</b><br /> ';
	
	


	$smarty -> assign ('Message', $strMessage);
	$smarty -> display ('error1.tpl');

}

?>
