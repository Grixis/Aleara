<?php 
$title='Przeklęta Jaskinia Krutynów';
$title1='Przeklęta Jaskinia Krutynów';
require_once('includes/head.php');
if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}
$test = $db -> Execute("SELECT vii FROM runy");
$vii = $test -> fields['vii'];
$smarty -> assign(array("vii" => $vii));

$test = $db -> Execute("SELECT voe FROM runy");
$voe = $test -> fields['voe'];
$smarty -> assign(array("voe" => $voe));

$test = $db -> Execute("SELECT eof FROM runy");
$eof = $test -> fields['eof'];
$smarty -> assign(array("eof" => $eof));

$test = $db -> Execute("SELECT nov FROM runy");
$nov = $test -> fields['nov'];
$smarty -> assign(array("nov" => $nov));

$test = $db -> Execute("SELECT rut FROM runy");
$rut = $test -> fields['rut'];
$smarty -> assign(array("rut" => $rut));

$test = $db -> Execute("SELECT wejscie FROM runy");
$wejscie = $test -> fields['wejscie'];
$smarty -> assign(array("wejscie" => $wejscie));

$test = $db -> Execute("SELECT wynik FROM runy");
$wynik = $test -> fields['wynik'];
$smarty -> assign(array("wynik" => $wynik));

$test1 = $db -> Execute('Select strength from players where nov=1');
$strength = $test1 -> fields['strength'];
$smarty -> assign(array('strength' => $strength));
$test2 = $db -> Execute('Select strength from players where eof=1');
$strength = $test2 -> fields['strength'];
$smarty -> assign(array('strength' => $strength));
$test3 = $db -> Execute('Select strength from players where vii=1');
$strength = $test3 -> fields['strength'];
$smarty -> assign(array('strength' => $strength));
$test4 = $db -> Execute('Select strength from players where rut=1');
$strength = $test4 -> fields['strength'];
$smarty -> assign(array('strength' => $strength));
$test5 = $db -> Execute('Select strength from players where voe=1');
$strength = $test5 -> fields['strength'];
$smarty -> assign(array('strength' => $strength));





$test1 = $db -> Execute('Select agility from players where nov=1');
$agility = $test1 -> fields['agility'];
$smarty -> assign(array('agility' => $agility));

$test2 = $db -> Execute('Select agility from players where eof=1');
$agility = $test2 -> fields['agility'];
$smarty -> assign(array('agility' => $agility));

$test3 = $db -> Execute('Select agility from players where vii=1');
$agility = $test3 -> fields['agility'];
$smarty -> assign(array('agility' => $agility));

$test4 = $db -> Execute('Select agility from players where rut=1');
$agility = $test4 -> fields['agility'];
$smarty -> assign(array('agility' => $agility));

$test5 = $db -> Execute('Select agility from players where voe=1');
$agility = $test5 -> fields['agility'];
$smarty -> assign(array('agility' => $agility));






//
$test2=$db->Execute("SELECT id FROM players WHERE nov=1");
$dupaaw = $test2-> fields['id'];
$smarty -> assign(array("hehid" => $dupaaw));



$test2=$db->Execute("SELECT SUM(power+szyb) FROM equipment WHERE status='E' and owner=".$dupaaw);
$dupaap = $test2-> fields['SUM(power+zr+szyb)'];
$smarty -> assign(array("siilanov" => $dupaap));
$test2=$db->Execute("SELECT zr FROM equipment WHERE status='E' and owner=".$dupaaw);
$dupaapa = $test2-> fields['zr'];
$smarty -> assign(array("siilanov2" => $dupaapa));

$silanov3 = $dupaapa + $dupaap;

$test2=$db->Execute("Select SUM(power+zr+szyb) from equipment where status='E' and eof=1");
$dupaa = $test2-> fields['SUM(power+zr+szyb)'];
$smarty -> assign(array("siilaeof" => $dupaa));
$test2=$db->Execute("Select SUM(power+zr+szyb) from equipment where status='E' and vii=1");
$dupaa = $test2-> fields['SUM(power+zr+szyb)'];
$smarty -> assign(array("siilavii" => $dupaa));
$test2=$db->Execute("Select SUM(power+zr+szyb) from equipment where status='E' and voe=1");
$dupaa = $test2-> fields['SUM(power+zr+szyb)'];
$smarty -> assign(array("siilvoe" => $dupaa));
$test2=$db->Execute("Select SUM(power+zr+szyb) from equipment where status='E' and rut=1");
$dupaa = $test2-> fields['SUM(power+zr+szyb)'];
$smarty -> assign(array("siilarut" => $dupaa));


//













$test1 = $db -> Execute('Select szyb from players where nov=1');
$szyb = $test1 -> fields['szyb'];
$smarty -> assign(array('szyb' => $szyb));

$test2 = $db -> Execute('Select szyb from players where eof=1');
$szyb = $test2 -> fields['szyb'];
$smarty -> assign(array('szyb' => $szyb));

$test3 = $db -> Execute('Select szyb from players where vii=1');
$szyb = $test3 -> fields['szyb'];
$smarty -> assign(array('szyb' => $szyb));

$test4 = $db -> Execute('Select szyb from players where rut=1');
$szyb = $test4 -> fields['szyb'];
$smarty -> assign(array('szyb' => $szyb));

$test5 = $db -> Execute('Select szyb from players where voe=1');
$szyb = $test5 -> fields['szyb'];
$smarty -> assign(array('szyb' => $szyb));






$test1 = $db -> Execute('Select wytrz from players where nov=1');
$wytrz = $test1 -> fields['wytrz'];
$smarty -> assign(array('wytrz' => $wytrz));

$test2 = $db -> Execute('Select wytrz from players where eof=1');
$wytrz = $test2 -> fields['wytrz'];
$smarty -> assign(array('wytrz' => $wytrz));

$test3 = $db -> Execute('Select wytrz from players where vii=1');
$wytrz = $test3 -> fields['wytrz'];
$smarty -> assign(array('wytrz' => $wytrz));

$test4 = $db -> Execute('Select wytrz from players where rut=1');
$wytrz = $test4 -> fields['wytrz'];
$smarty -> assign(array('wytrz' => $wytrz));

$test5 = $db -> Execute('Select wytrz from players where voe=1');
$wytrz = $test5 -> fields['wytrz'];
$smarty -> assign(array('wytrz' => $wytrz));








$test1 = $db -> Execute('Select wisdom from players where nov=1');
$wisdom = $test1 -> fields['wisdom'];
$smarty -> assign(array('wisdom' => $wisdom));

$test2 = $db -> Execute('Select wisdom from players where eof=1');
$wisdom = $test2 -> fields['wisdom'];
$smarty -> assign(array('wisdom' => $wisdom));

$test3 = $db -> Execute('Select wisdom from players where vii=1');
$wisdom = $test3 -> fields['wisdom'];
$smarty -> assign(array('wisdom' => $wisdom));

$test4 = $db -> Execute('Select wytrz from players where rut=1');
$wisdom = $test4 -> fields['wisdom'];
$smarty -> assign(array('wisdom' => $wisdom));

$test5 = $db -> Execute('Select wytrz from players where voe=1');
$wisdom = $test5 -> fields['wisdom'];
$smarty -> assign(array('wisdom' => $wisdom));





$test1 = $db -> Execute('Select inteli from players where nov=1');
$inteli = $test1 -> fields['inteli'];
$smarty -> assign(array('inteli' => $inteli));

$test2 = $db -> Execute('Select inteli from players where eof=1');
$inteli = $test2 -> fields['inteli'];
$smarty -> assign(array('inteli' => $inteli));

$test3 = $db -> Execute('Select inteli from players where vii=1');
$inteli = $test3 -> fields['inteli'];
$smarty -> assign(array('inteli' => $inteli));

$test4 = $db -> Execute('Select inteli from players where rut=1');
$inteli = $test4 -> fields['inteli'];
$smarty -> assign(array('inteli' => $inteli));

$test5 = $db -> Execute('Select inteli from players where voe=1');
$inteli = $test5 -> fields['inteli'];
$smarty -> assign(array('inteli' => $inteli));



$test2 = $db -> Execute('SELECT user FROM players where vii=1');
$user = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczvii' => $user));

$test2 = $db -> Execute('SELECT user FROM players where eof=1');
$user = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczeof' => $user));

$test2 = $db -> Execute('SELECT user FROM players where nov=1');
$user = $test2 -> fields['user'];
$smarty -> assign(array('posiadacznov' => $user));

$test2 = $db -> Execute('SELECT user FROM players where voe=1');
$user = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczvoe' => $user));

$test2 = $db -> Execute('SELECT user FROM players where rut=1');
$user = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczrut' => $user));




$test2=$db->Execute("Select SUM(szyb) from players where nov=1 or vii=1 or voe=1 or eof=1 or rut=1");
$ono = $test2-> fields['SUM(szyb)'];
$smarty -> assign(array("ee" => $ono));
$test2=$db->Execute("Select SUM(strength) from players where nov=1 or vii=1 or voe=1 or eof=1 or rut=1");
$ono = $test2-> fields['SUM(strength)'];
$smarty -> assign(array("ee1" => $ono));
$test2=$db->Execute("Select SUM(agility) from players where nov=1 or vii=1 or voe=1 or eof=1 or rut=1");
$ono = $test2-> fields['SUM(agility)'];
$smarty -> assign(array("ee2" => $ono));
$test2=$db->Execute("Select SUM(wytrz) from players where nov=1 or vii=1 or voe=1 or eof=1 or rut=1");
$ono = $test2-> fields['SUM(wytrz)'];
$smarty -> assign(array("ee3" => $ono));
$test2=$db->Execute("Select SUM(inteli) from players where nov=1 or vii=1 or voe=1 or eof=1 or rut=1");
$ono = $test2-> fields['SUM(inteli)'];
$smarty -> assign(array("ee4" => $ono));
$test2=$db->Execute("Select SUM(wisdom) from players where nov=1 or vii=1 or voe=1 or eof=1 or rut=1");
$ono = $test2-> fields['SUM(wisdom)'];
$smarty -> assign(array("ee5" => $ono));





$test2=$db->Execute("Select SUM(wisdom+inteli+wytrz+agility+strength+szyb) from players where nov=1");
$ono = $test2-> fields['SUM(wisdom+inteli+wytrz+agility+strength+szyb)'];
$smarty -> assign(array("silanov" => $ono));
$test2=$db->Execute("Select SUM(wisdom+inteli+wytrz+agility+strength+szyb) from players where eof=1");
$ono = $test2-> fields['SUM(wisdom+inteli+wytrz+agility+strength+szyb)'];
$smarty -> assign(array("silaeof" => $ono));
$test2=$db->Execute("Select SUM(wisdom+inteli+wytrz+agility+strength+szyb) from players where vii=1");
$ono = $test2-> fields['SUM(wisdom+inteli+wytrz+agility+strength+szyb)'];
$smarty -> assign(array("silavii" => $ono));
$test2=$db->Execute("Select SUM(wisdom+inteli+wytrz+agility+strength+szyb) from players where voe=1");
$ono = $test2-> fields['SUM(wisdom+inteli+wytrz+agility+strength+szyb)'];
$smarty -> assign(array("silavoe" => $ono));
$test2=$db->Execute("Select SUM(wisdom+inteli+wytrz+agility+strength+szyb) from players where rut=1");
$ono = $test2-> fields['SUM(wisdom+inteli+wytrz+agility+strength+szyb)'];
$smarty -> assign(array("silarut" => $ono));



$calasilanov = $silanov + $siilanov + $silanov3;
$calasilavii = $silavii + $siilavii;
$calasilaeof = $silaeof + $siilaeof;
$calasilavoe = $silavoe + $siilavoe;
$calasilarut = $silarut + $siilarut;



$smarty -> display('przekletajaskinia.tpl');
require_once('includes/foot.php');
?>