<?php 
$title='Przeklęta Jaskinia Krutynów';
$title1='Przeklęta Jaskinia Krutynów';
require_once('includes/head.php');
if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}
$test = $db -> Execute("SELECT sta FROM players WHERE id=".$player -> id);
$sta = $test -> fields['sta'];
$smarty -> assign(array("sta" => $sta));
$test = $db -> Execute("SELECT wej FROM players WHERE id=".$player -> id);
$wej = $test -> fields['wej'];
$smarty -> assign(array("wej" => $wej));
$test = $db -> Execute("SELECT wejscie FROM runy");
$wejscie = $test -> fields['wejscie'];
$smarty -> assign(array("wejscie" => $wejscie));
if($wejscie > 0)
{
	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Walka została już stoczona. <a href="przekletajaskinia.php">Wracasz...</a>');
}
if($wej > 0)
{
	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Dopiero co walczyłeś... <a href="przekletajaskinia.php">Wracasz...</a>');
}

if($sta == 0)
{

$test2 = $db -> Execute('SELECT user FROM players where vii=1');
$user2 = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczvii' => $user2));

$test2 = $db -> Execute('SELECT user FROM players where eof=1');
$user3 = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczeof' => $user3));

$test2 = $db -> Execute('SELECT user FROM players where nov=1');
$user4 = $test2 -> fields['user'];
$smarty -> assign(array('posiadacznov' => $user4));

$test2 = $db -> Execute('SELECT user FROM players where voe=1');
$user5 = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczvoe' => $user5));

$test2 = $db -> Execute('SELECT user FROM players where rut=1');
$user6 = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczrut' => $user6));
	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Nie posiadasz ani jednej magicznej runy... <a href="przekletajaskinia.php">Wracasz...</a>');
}


$test = $db -> Execute("SELECT voe FROM runy");
$voe = $test -> fields['voe'];
$smarty -> assign(array("voe" => $voe));

if($voe != '<font color=green>AKTYWNA</font>')
{
	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Brak runy VOE. <a href="przekletajaskinia.php">Wracasz...</a>');
}

$test = $db -> Execute("SELECT nov FROM runy");
$nov = $test -> fields['nov'];
$smarty -> assign(array("nov" => $nov));

if($nov != '<font color=green>AKTYWNA</font>')
{
	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Brak runy NOV. <a href="przekletajaskinia.php">Wracasz...</a>');
}

$test = $db -> Execute("SELECT eof FROM runy");
$eof = $test -> fields['eof'];
$smarty -> assign(array("eof" => $eof));

if($eof != '<font color=green>AKTYWNA</font>')
{
	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Brak runy EOF. <a href="przekletajaskinia.php">Wracasz...</a>');
}

$test = $db -> Execute("SELECT vii FROM runy");
$vii = $test -> fields['vii'];
$smarty -> assign(array("voe" => $voe));

if($vii != '<font color=green>AKTYWNA</font>')
{
	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Brak runy VII. <a href="przekletajaskinia.php">Wracasz...</a>');
}

$test = $db -> Execute("SELECT rut FROM runy");
$rut = $test -> fields['rut'];
$smarty -> assign(array("tur" => $tur));

if($rut != '<font color=green>AKTYWNA</font>')
{
	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Brak runy RUT. <a href="przekletajaskinia.php">Wracasz...</a>');
}
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


$test2 = $db -> Execute('SELECT user FROM players where vii=1');
$user2 = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczvii' => $user2));

$test2 = $db -> Execute('SELECT user FROM players where eof=1');
$user3 = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczeof' => $user3));

$test2 = $db -> Execute('SELECT user FROM players where nov=1');
$user4 = $test2 -> fields['user'];
$smarty -> assign(array('posiadacznov' => $user4));

$test2 = $db -> Execute('SELECT user FROM players where voe=1');
$user5 = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczvoe' => $user5));

$test2 = $db -> Execute('SELECT user FROM players where rut=1');
$user6 = $test2 -> fields['user'];
$smarty -> assign(array('posiadaczrut' => $user6));





$test=$db->Execute("Select SUM(strength+agility+wytrz+szyb+inteli+wisdom) AS suma from players where nov=1 or vii=1 or voe=1 or eof=1 or rut=1");

if ($test->fields['suma'] > $intRoll = rand(2500, 3700))
{




//if(2500 < $test2-> fields['SUM(wisdom)'] + $test2-> fields['SUM(inteli)'] + $test2-> fields['SUM(wytrz)'] + $test2-> fields['SUM(agility)'] + $test2-> fields['SUM(strength)'] + $test2-> fields['SUM(szyb)'])
//{
$test2 = $db -> Execute('SELECT id FROM players where vii=1');
$id2 = $test2 -> fields['id'];
$smarty -> assign(array('id2' => $id2));

$test2 = $db -> Execute('SELECT id FROM players where eof=1');
$id3 = $test2 -> fields['id'];
$smarty -> assign(array('id3' => $id3));

$test2 = $db -> Execute('SELECT id FROM players where nov=1');
$id4 = $test2 -> fields['id'];
$smarty -> assign(array('id4' => $id4));

$test2 = $db -> Execute('SELECT id FROM players where voe=1');
$id5 = $test2 -> fields['id'];
$smarty -> assign(array('id5' => $id5));

$test2 = $db -> Execute('SELECT id FROM players where rut=1');
$id6 = $test2 -> fields['id'];
$smarty -> assign(array('id6' => $id6));

$db -> Execute('UPDATE players SET wej=wej+1 WHERE nov=1');
$db -> Execute('UPDATE players SET wej=wej+1 WHERE eof=1');
$db -> Execute('UPDATE players SET wej=wej+1 WHERE voe=1');
$db -> Execute('UPDATE players SET wej=wej+1 WHERE vii=1');
$db -> Execute('UPDATE players SET wej=wej+1 WHERE rut=1');
$db -> Execute('UPDATE players SET geoja=geoja+1 WHERE nov=1');
$db -> Execute('UPDATE players SET geoja=geoja+1 WHERE eof=1');
$db -> Execute('UPDATE players SET geoja=geoja+1 WHERE voe=1');
$db -> Execute('UPDATE players SET geoja=geoja+1 WHERE vii=1');
$db -> Execute('UPDATE players SET geoja=geoja+1 WHERE rut=1');
$db -> Execute('UPDATE players SET walkieyoy=walkieyoy+1 WHERE nov=1');
$db -> Execute('UPDATE players SET walkieyoy=walkieyoy+1 WHERE eof=1');
$db -> Execute('UPDATE players SET walkieyoy=walkieyoy+1 WHERE voe=1');
$db -> Execute('UPDATE players SET walkieyoy=walkieyoy+1 WHERE vii=1');
$db -> Execute('UPDATE players SET walkieyoy=walkieyoy+1 WHERE rut=1');
$db -> Execute("UPDATE runy SET wejscie=wejscie+1");


$test2 = $db -> Execute('SELECT id FROM players where vii=1');
$id2 = $test2 -> fields['id'];
$smarty -> assign(array('id2' => $id2));

$test2 = $db -> Execute('SELECT id FROM players where eof=1');
$id3 = $test2 -> fields['id'];
$smarty -> assign(array('id3' => $id3));

$test2 = $db -> Execute('SELECT id FROM players where nov=1');
$id4 = $test2 -> fields['id'];
$smarty -> assign(array('id4' => $id4));

$test2 = $db -> Execute('SELECT id FROM players where voe=1');
$id5 = $test2 -> fields['id'];
$smarty -> assign(array('id5' => $id5));

$test2 = $db -> Execute('SELECT id FROM players where rut=1');
$id6 = $test2 -> fields['id'];
$smarty -> assign(array('id6' => $id6));

$db->Execute('INSERT INTO log (owner, log, czas) VALUES('.$id2.', "Stoczyłeś wraz z '.$user6.', '.$user5.', '.$user4.', '.$user3.' udaną walkę przeciwko Yoylowi. Zdobywacie jedną z pięciu głów Eyoya.", NOW())');
$db->Execute('INSERT INTO log (owner, log, czas) VALUES('.$id3.', "Stoczyłeś wraz z '.$user6.', '.$user5.', '.$user4.', '.$user2.' udaną walkę przeciwko Yoylowi. Zdobywacie jedną z pięciu głów Eyoya.", NOW())');
$db->Execute('INSERT INTO log (owner, log, czas) VALUES('.$id4.', "Stoczyłeś wraz z '.$user6.', '.$user5.', '.$user3.', '.$user2.' udaną walkę przeciwko Yoylowi. Zdobywacie jedną z pięciu głów Eyoya.", NOW())');
$db->Execute('INSERT INTO log (owner, log, czas) VALUES('.$id5.', "Stoczyłeś wraz z '.$user6.', '.$user4.', '.$user3.', '.$user2.' udaną walkę przeciwko Yoylowi. Zdobywacie jedną z pięciu głów Eyoya.", NOW())');
$db->Execute('INSERT INTO log (owner, log, czas) VALUES('.$id6.', "Stoczyłeś wraz z '.$user5.', '.$user4.', '.$user3.', '.$user2.' udaną walkę przeciwko Yoylowi. Zdobywacie jedną z pięciu głów Eyoya.", NOW())');

$db -> Execute('UPDATE runy SET wynik="<font color=green>pozytywnym.</font>"');






$db -> Execute("UPDATE runy SET wejscie=wejscie+1");

	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Po włożeniu ostatniej runy skały rozsunęły się przed wami! A na przeciw wam stanął wielki Eyoy. Przygotowujesz się do walki wraz z '.$user4.', '.$user2.', '.$user3.',  '.$user5.', '.$user6.'... Walkę wygraliście! Otrzymujesz głowę Eyoya <a href="przekletajaskinia.php">Wracasz...</a>');
}

else
{

$db -> Execute('UPDATE players SET hp=0 WHERE nov=1');
$db -> Execute('UPDATE players SET hp=0 WHERE eof=1');
$db -> Execute('UPDATE players SET hp=0 WHERE voe=1');
$db -> Execute('UPDATE players SET hp=0 WHERE vii=1');
$db -> Execute('UPDATE players SET hp=0 WHERE rut=1');
$db -> Execute('UPDATE players SET wej=wej+1 WHERE nov=1');
$db -> Execute('UPDATE players SET wej=wej+1 WHERE eof=1');
$db -> Execute('UPDATE players SET wej=wej+1 WHERE voe=1');
$db -> Execute('UPDATE players SET wej=wej+1 WHERE vii=1');
$db -> Execute('UPDATE players SET wej=wej+1 WHERE rut=1');
$db -> Execute("UPDATE runy SET wejscie=wejscie+1");

$test2 = $db -> Execute('SELECT id FROM players where vii=1');
$id2 = $test2 -> fields['id'];
$smarty -> assign(array('id2' => $id2));

$test2 = $db -> Execute('SELECT id FROM players where eof=1');
$id3 = $test2 -> fields['id'];
$smarty -> assign(array('id3' => $id3));

$test2 = $db -> Execute('SELECT id FROM players where nov=1');
$id4 = $test2 -> fields['id'];
$smarty -> assign(array('id4' => $id4));

$test2 = $db -> Execute('SELECT id FROM players where voe=1');
$id5 = $test2 -> fields['id'];
$smarty -> assign(array('id5' => $id5));

$test2 = $db -> Execute('SELECT id FROM players where rut=1');
$id6 = $test2 -> fields['id'];
$smarty -> assign(array('id6' => $id6));
$db->Execute('INSERT INTO log (owner, log, czas) VALUES('.$id6.', "Stoczyłeś wraz z'.$user5.', '.$user4.', '.$user3.', '.$user2.' nieudaną walkę przeciwko Yoylowi. Polegliście w walce.", NOW())');
$db->Execute('INSERT INTO log (owner, log, czas) VALUES('.$id5.', "Stoczyłeś wraz z '.$user6.', '.$user4.', '.$user3.', '.$user2.' nieudaną walkę przeciwko Yoylowi. Polegliście w walce.", NOW())');
$db->Execute('INSERT INTO log (owner, log, czas) VALUES('.$id4.', "Stoczyłeś wraz z '.$user6.', '.$user5.', '.$user3.', '.$user2.' nieudaną walkę przeciwko Yoylowi. Polegliście w walce.", NOW())');
$db->Execute('INSERT INTO log (owner, log, czas) VALUES('.$id3.', "Stoczyłeś wraz z '.$user6.', '.$user5.', '.$user4.', '.$user2.' nieudaną walkę przeciwko Yoylowi. Polegliście w walce.", NOW())');
$db->Execute('INSERT INTO log (owner, log, czas) VALUES('.$id2.', "Stoczyłeś wraz z '.$user6.', '.$user5.', '.$user4.', '.$user3.' nieudaną walkę przeciwko Yoylowi. Polegliście w walce.", NOW())');

$db -> Execute('UPDATE runy SET wynik="<font color=red>negatywnym.</font>"');

	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Po włożeniu ostatniej runy skały rozsunęły się przed wami! A na przeciw wam stanął wielki Eyoy. Przygotowujesz się do walki wraz z '.$user4.', '.$user2.', '.$user3.',  '.$user5.', '.$user6.'... Nie udało Ci się... Poległeś w walce... Twoja drużyna jest zbyt słaba... <a href="przekletajaskinia.php">Wracasz...</a>');
}








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















$smarty -> display('wejdz.tpl');
require_once('includes/foot.php');
?>