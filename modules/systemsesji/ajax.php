<?php

session_start();
$ajax = true;
require_once (BASE_DIR . 'includes/config.php');
require_once(BASE_DIR . 'class/player_class.php');

$player = new Player($_POST['pid']);
$res = array();

// Adres modułu
$modAdress = 'modules.php?mod=systemsesji-ajax';

//funkcja odpowiedzialna za wychodzenie w przypadku b��du
function error($text)
{
	print 'ALERT|' . $text;
	exit;
}

function lefts($varb, $num)
{
	$dnum = intval($num);
	if (strlen($varb) > $dnum)
	{
		$nvarb = substr($varb, 0, $dnum);
		$nvarb .= ' ......';
	}
	else if (strlen($varb) < $dnum)
	{
		$nvarb = $varb;
	}
	return $nvarb;
}

if (isset($_GET['view']) && $_GET['view'] == 'edit')
{
	if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['typ'])) error("Wybierz poprawny wpis");

	$kom = $db -> EXECUTE("SELECT * FROM diary_comments WHERE id=" . $_GET['typ'] . " LIMIT 1");
	require_once(BASE_DIR . 'modules/systemsesji/libs/bbcode.php');
	$tresc = htmltobbcode($kom -> fields['body']);
	$strDane = '';
	$strDane = $strDane . '<center><form id="wyslij" name="wyslij" action="#" method="POST">';
	$arrTresci = explode("[/div]\n\n", $tresc);

	foreach ($arrTresci as $wpis)
	{
		$b = substr($wpis, 0, 11);
		$identyf = md5($wpis . time() . rand());
		if ($b == "[div_tresc]") $strDane = $strDane . '<textarea name="body_' . $identyf . '" id="body_' . $identyf . '" rows="10" cols="70">' . str_replace("[div_tresc]", "", $wpis) . '</textarea><br />';
		elseif ($b == "[div_rzutt]") $strDane = $strDane . '<textarea readonly name="rzut_' . $identyf . '" id="rzut_' . $identyf . '" rows="2" cols="70">' . str_replace("[div_rzutt]", "", $wpis) . '</textarea><br />';
	}
	$strDane = $strDane . '<input type="submit" value="Edytuj" onclick="edytuj_wpis(' . $kom -> fields['id'] . ');return false;" class="edytuj">
    </form></center>';
	print $strDane;
	$kom -> Close();
}
if (isset($_GET['typ']) && $_GET['typ'] == 'edit')
{
	if ( ! preg_match("/^[\d]{1,11}$/i", $_POST['id'])) error("Wpisz cyfrę");

	$kom = $db -> EXECUTE("SELECT diary_comments.id, diary_comments.owner, diary.owner as wlasciciel FROM diary_comments LEFT JOIN diary ON diary_comments.diaryid=diary.id WHERE diary_comments.id=" . $_POST['id'] . " LIMIT 1");

	if ($player -> mg != 'Y' && $kom -> fields['wlasciciel'] != $player -> id)
	{
		if ($kom -> fields['owner'] != $player -> id) error("To nie twój wpis");
	}

	// TRESC WPISU
	require_once(BASE_DIR . 'modules/systemsesji/libs/bbcode.php');
	$arrDane = $_POST['dane'];
	$strWpis = '';
	foreach ($arrDane as $klucz => $dane)
	{
		$test = substr($klucz, 0, 4);
		if ($test == 'body') $strWpis = $strWpis . '<div class="wpis_tresc">' . htmltobbcode($dane) . '</div>';
		elseif ($test == 'rzut') $strWpis = $strWpis . '<div class="wpis_rzut">' . htmltobbcode($dane) . '</div>';
	}

	$db -> EXECUTE("UPDATE diary_comments SET body='" . $strWpis . "' WHERE id=" . $kom -> fields['id'] . " LIMIT 1") or error("ALERT|Nie mog� zmieni�");
	$kom -> Close();
	print $strWpis;
}

// PODGLAD WPISU
if (isset($_GET['view']) && $_GET['view'] == 'RZT')
{
	// TRESC WPISU
	require_once(BASE_DIR . 'modules/systemsesji/libs/bbcode.php');
	$arrDane = $_POST['dane'];
	$strWpis = '';

	$i = 0;
	foreach ($arrDane as $klucz => $dane)
	{
		$test = substr($klucz, 0, 9);
		if ($test == 'diarywpis') $strWpis = $strWpis . '<div class="wpis_tresc">' . htmltobbcode($dane) . '</div>';
		elseif ($test == 'diaryrzut') $strWpis = $strWpis . '<div class="wpis_rzut">' . htmltobbcode($dane) . '</div>';

		$i = $i + 1;
	}

	print $strWpis;
}
// DODANIE WPISU DO CODZIENNIKA
if (isset($_GET['view']) && $_GET['view'] == 'RZ')
{
	if ( ! preg_match("/^[\d]{1,11}$/i", $_POST['did'])) error("Niepoprawne dane.");
	$wpis = $db -> EXECUTE("SELECT * FROM diary WHERE id=" . $_POST['did'] . " LIMIT 1");
	if ( ! $wpis -> fields['id']) error('Nie ma takiego wpisu.');

	$ideki = explode(",", $wpis -> fields['zezwolenie']);
	$allow = 'N';
	foreach ($ideki as $noweid)
	{
		if ($noweid == $player -> id || $player -> id == $wpis -> fields['owner'])
		{
			$allow = 'Y';
		}
	}
	if ($wpis -> fields['type'] == 'A')
	{
		if ($allow != 'Y') error("Nie możesz tutaj pisać.");
	}
	if ($wpis -> fields['type'] == 'Z') error("Nie możesz tutaj pisać.");

	// TRESC WPISU
	require_once(BASE_DIR . 'modules/systemsesji/libs/bbcode.php');
	$arrDane = $_POST['dane'];
	$strWpis = '';

	$i = 0;
	foreach ($arrDane as $klucz => $dane)
	{
		$test = substr($klucz, 0, 9);
		if ($test == 'diarywpis') $strWpis = $strWpis . '<div class="wpis_tresc">' . htmltobbcode($dane) . '</div>';
		elseif ($test == 'diaryrzut') $strWpis = $strWpis . '<div class="wpis_rzut">' . htmltobbcode($dane) . '</div>';

		$i = $i + 1;
	}


	// je�li wpisany NPC podmieniam imiona
	if (isset($arrDane['npc']) && strlen($arrDane['npc']) > 3)
	{
		$NPC['npc'] = strip_tags($arrDane['npc']);
	}
	else $NPC['npc'] = '';

	// Subskrybcja komentarzy codziennika
	$strUserSub = 'N';
	$sub = $db -> EXECUTE("SELECT id, owner FROM subskrybcja_all WHERE t_id=" . $wpis -> fields['id'] . " AND type='C' ORDER BY owner ASC");
	while ( ! $sub -> EOF)
	{
		if ($player -> id != $sub -> fields['owner'])
		{
			$db -> EXECUTE("UPDATE subskrybcja_all SET amount=amount+1 WHERE id=" . $sub -> fields['id'] . " LIMIT 1");
			$db -> EXECUTE("UPDATE players SET diary=diary+1 WHERE id=" . $sub -> fields['owner'] . " LIMIT 1");
		}
		else $strUserSub = 'Y';

		$sub -> MoveNext();
	}
	$sub -> Close();

	if ($strUserSub == 'N')
	{
		$db -> EXECUTE("INSERT INTO `subskrybcja_all` (`owner`,`name`,`type`,`t_id`,`amount`) VALUES (" . $player -> id . ",'" . $wpis -> fields['title'] . "','C'," . $wpis -> fields['id'] . ",1)");
	}
	$db -> EXECUTE("UPDATE subskrybcja_all SET amount=0 WHERE owner=" . $player -> id . " AND t_id=" . $wpis -> fields['id'] . " AND type='C' LIMIT 1");
	$db -> EXECUTE("UPDATE players SET diary=0 WHERE id=" . $player -> id . " LIMIT 1");
	
	$player = $db->Execute("SELECT * FROM players WHERE id=".$_POST['pid']);
	$mysqldate = date('Y-m-d H:i:s');
	$db -> Execute("INSERT INTO diary_comments (diaryid,owner,author,narrator,body,avatar,rasa,klasa,poziom,date) VALUES (" . $wpis -> fields['id'] . "," . $player->fields['id'] . ",'" . $player ->fields['user'] . "','" . $NPC['npc'] . "','" . $strWpis . "','" . $player ->fields['avatar'] . "','" . $player ->fields['rasa'] . "','" . $player ->fields['klasa'] . "'," . $player ->fields['level'] . ",NOW() )") or error($db->ErrorMsg());
	//error("INSERT INTO diary_comments (diaryid,owner,author,narrator,body,avatar,rasa,klasa,poziom,date) VALUES (" . $wpis -> fields['id'] . "," . $player -> id . ",'" . $player -> user . "','" . $NPC['npc'] . "','" . $strWpis . "','" . $player -> avatar . "','" . $player -> race . "','" . $player -> clas . "'," . $player -> level . ",'" . $mysqldate . "')");
	$wpis -> Close();
}
// WYNIK RZUTU
if (isset($_GET['view']) && $_GET['view'] == 'WR1')
{
	// GLOWNE ZMIENNE
	$intDoRzutu = 0; // ZMIENNA DO WYKONANIA RZUTU
	// GLOWNE ZMIENNE

	if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['did'])) error("Niepoprawne dane.");
	if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['rzuty'])) error("Niepoprawne dane.");
	if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['kosc'])) error("Niepoprawne dane.");

	$strRzutyOutput = '';
	$i = 0;
	while ($i < $_GET['rzuty'])
	{
		$intRand = mt_rand(1, $_GET['kosc']);
		$strRzutyOutput = $strRzutyOutput . 'Rzut #' . ($i + 1) . ' = ' . $intRand . ' | ';
		$i = $i + 1;
	}
	$strRzutyOutput = $strRzutyOutput . '';


	$randID = md5(time());
	print '<div id="diarywpis_' . $randID . '" name="diaryrzut_' . $randID . '" style="height: auto;">';
	print $strRzutyOutput;
	print '</div>';
}
// FORMULARZ OPIS�W
if (isset($_GET['view']) && $_GET['view'] == 'K')
{
	$randID = md5(time());
	print '<div><textarea id="diarywpis_' . $randID . '" name="diarywpis_' . $randID . '" rows="6" cols="80"></textarea><img src="/modules/systemsesji/images/buttons/usun.png"  onclick="mg_usun(\'' . $randID . '\')" style="cursor: pointer;" /><div>';
}
// FORMULARZ DO RZUT�W
if (isset($_GET['view']) && $_GET['view'] == 'R')
{
	if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['typ'])) error("Niepoprawne dane.");
	$wpis = $db -> EXECUTE("SELECT * FROM diary WHERE id=" . $_GET['typ'] . " LIMIT 1");
	if ( ! $wpis -> fields['id']) error('Nie ma takiego wpisu');


	print '<br /><table width="100%" id="tabelgr">';
	print '<tr><td style="color: #D7D7D7;font-weight: bold;text-align: left;width:150px;">Wybierz kość</td><td>';
	print '<select name="podzial" id="rz_kosc">';
	print '<option value="6">k6</option>';
	print '<option value="100">k100</option>';
	print '<option value="1000">k1000</option>';
	print '</select>';
	print '</td><td style="color: #D7D7D7;font-weight: bold;text-align: left;width:150px;">Wybierz ilość rzutów</td><td>';
	print '<select name="podzial" id="rz_ilosc">';
	print '<option value="1">1</option>';
	print '<option value="2">2</option>';
	print '<option value="3">3</option>';
	print '<option value="4">4</option>';
	print '<option value="5">5</option>';
	print '<option value="6">6</option>';
	print '</select>';
	print '</td></tr>';
	print '</table>';

	print '<br /><br /><br /><center><img src="/modules/systemsesji/images/buttons/rzut.png"  onclick="mg_rzut(\'' . $modAdress . '&view=WR1\',\'' . $wpis -> fields['id'] . '\',\'panel_mg\')" /></center>';
	$wpis -> Close();
}

$db -> Close();
?>