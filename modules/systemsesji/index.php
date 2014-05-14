<?php
/**
 *   File functions:
 *   Load RPG module into game
 *
 *   @name                 : index.php                            
 *   @copyright            : (C) 2012 Fenix Team
 *   @author               : Thoran <defman@o2.pl>
 *   @version              : 1.0
 *   @since                : 02.09.2012
 *
 */
// Tytuł modułu
$title = "Miejsce spotkań";
// Adres modułu
$modAdress = 'modules.php?mod=systemsesji';
$modAjaxAdress = 'modules.php?mod=systemsesji-ajax';

// Pliki do włączenia do szablonu
$strHeaderFiles = '
<script type="text/javascript" src="/modules/systemsesji/libs/jquery.js"></script>
<script type="text/javascript" src="/modules/systemsesji/libs/jquery-ui-1.8.11.custom.min.js"></script>
<script type="text/javascript" src="/modules/systemsesji/libs/jquery.alerts/jquery.alerts.js"></script>
<script type="text/javascript" src="/modules/systemsesji/libs/ajaxmanager3.js"></script>
<script type="text/javascript" src="/modules/systemsesji/libs/jquery.window.js"></script>
<script type="text/javascript" src="/modules/systemsesji/libs/main.js"></script>
<link href="/modules/systemsesji/libs/jquery.window.css" rel="stylesheet" type="text/css" media="screen" />
<link href="/modules/systemsesji/libs/jquery.alerts/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="/modules/systemsesji/libs/jquery.ui.css" />
<link rel="stylesheet" type="text/css" href="/modules/systemsesji/style.css" />';

// Menu do wyświetlenia na stronie
$strHeaderMenu = '
   <ul>
     <li><a href=' . $modAdress . '>Wszystkie sesje</a></li>
	 <li><a href=' . $modAdress . '&view=wpis>Dodaj sesję</a></li>
	 <li><a href=' . $modAdress . '&view=wpisy>Twoje sesje</a></li>
	 <li><a href=' . $modAdress . '&view=subskrypcja>Obserwowane sesje</a></li>
   </ul>
   <br />
';

// inkluduje plik główny gry
require_once(BASE_DIR . 'includes/head.php');

// Pobieram dodatkowe dane z tabeli gracza
$arrPlayer = $db -> EXECUTE("SELECT `diary`, `mg` FROM players WHERE `id`=" . $player -> id . " LIMIT 1");
$player -> mg = $arrPlayer -> fields['mg'];
$player -> diary = $arrPlayer -> fields['diary'];

if (isset($_GET['view']) && $_GET['view'] == 'subskrypcja')
{
	print 'Witaj w Liście Sesji Aktywnych. Możesz tutaj bez zbędnego szukania odwiedzić miejsca w których postanowiłeś/aś już wcześniej cos napisać. Wystarczy że napiszesz w codzienniku, a pojawi się tutaj skrót. Kasując tutaj wpis nie kasujesz codziennika a jedynie możliwość otrzymywania subskrybcji, czyli powiadomień o wypowiedziach, które się w nim pojawią.<br /><br />';

	if ($arrPlayer -> fields['diary'] != 0) $db -> EXECUTE("UPDATE players SET diary=0 WHERE id=" . $player -> id . " LIMIT 1");

	if (isset($_GET['limit']))
	{
		if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['limit'])) error('Wpisz cyfrę <a href="modules.php?mod=systemsesji">Wróć</a>');
	}
	else $_GET['limit'] = 0;

	$wpisy = 1;
	$msel = $db -> Execute("SELECT COUNT(id) FROM subskrybcja_all WHERE owner=" . $player -> id . " AND type='C' LIMIT 1");
	if ( ! $msel -> fields['COUNT(id)'])
	{
		$wpisy = 0;
		print '<center><b>Brak wpisów</b></center>';
	}
	if ($wpisy != 0)
	{
		$intWszystkie = $msel -> fields['COUNT(id)'];
		$msel -> Close();

		$saved = $db -> SelectLimit("SELECT * FROM subskrybcja_all WHERE owner=" . $player -> id . " AND type='C' ORDER BY id DESC", 20, $_GET['limit']) or print 'Nie moge pobrać z bazy';
		print '
                <table width="100%" border="0">
                <tr>
                <td width="300"><b><u>Temat</td>
                <td width="50"><b><u>L</td>
                <td width="50"><b><u>Czytaj</td>
                <td width="50"><b><u>Skasuj</td>
                <td width="50"><b><u>K</td>
                </tr>';
		while ( ! $saved -> EOF)
		{
			$migacz = '';
			if ($saved -> fields['amount'] > 0) $migacz = '<img src=/modules/systemsesji/images/poczta.gif border=0>';
			print '<tr><td width="200" style="border-bottom: 1px solid brown; border-right: 1px solid brown;">' . $saved -> fields['name'] . '</td>
                           <td style="border-bottom: 1px solid brown; border-right: 1px solid brown;">' . $saved -> fields['amount'] . '</td>
                           <td style="border-bottom: 1px solid brown; border-right: 1px solid brown;"><a href="' . $modAdress . '&view=zobacz&id=' . $saved -> fields['t_id'] . '" />Tak</a></td>
                           <td style="border-bottom: 1px solid brown; border-right: 1px solid brown;"><a href="' . $modAdress . '&view=subskrypcja&skasuj=tak&id=' . $saved -> fields['t_id'] . '" />Tak</a></td>
                           <td style="border-bottom: 1px solid brown; border-right: 1px solid brown;">' . $migacz . '</td>
                           </tr>';

			$saved -> MoveNext();
		}
		$saved -> Close();
		print '</table>';
		print '<table><tr>';
		if ($_GET['limit'] >= 20)
		{
			$lim = $_GET['limit'] - 20;
			print '<td><form method="post" action="' . $modAdress . '&view=subskrypcja&limit=' . $lim . '"><input type="submit" value="Poprzednie"></form></td>';
		}
		$lim = $_GET['limit'] + 20;
		if ($intWszystkie > 20 && $lim < $intWszystkie)
		{
			print '<td><form method="post" action="' . $modAdress . '&view=subskrypcja&limit=' . $lim . '"><input type="submit" value="Następne"></form></td>';
		}
		print '</tr></table>';
	}

	if (isset($_GET['skasuj']) && $_GET['skasuj'] == 'tak')
	{
		if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['id'])) error('Wpisz cyfrę <a href="modules.php?mod=systemsesji">Wróć</a>');
		$wpis = $db -> EXECUTE("SELECT id FROM subskrybcja_all WHERE t_id=" . $_GET['id'] . " AND owner=" . $player -> id . " LIMIT 1");
		if ( ! $wpis -> fields['id']) error('Nie ma takiego wpisu.  <a href="modules.php?mod=systemsesji">Wróć</a>');
		$db -> EXECUTE("DELETE FROM subskrybcja_all WHERE id=" . $wpis -> fields['id'] . "");
		$db -> EXECUTE("UPDATE players SET diary=0 WHERE id=" . $player -> id . " LIMIT 1");
		$wpis -> Close();
		header('LOCATION:' . $modAdress . '&view=subskrypcja');
		exit;
	}
}

if (empty($_GET['view']))
{
	print '<center><a href=' . $modAdress . '&archiwum=N>Sesje otwarte</a> || 
	 <a href=' . $modAdress . '&closed=Y>Sesje prywatne</a> || 
	 <a href=' . $modAdress . '&archiwum=Y>Sesje archiwalne</a></center><br /><br />';

	if (empty($_GET['archiwum'])) $_GET['archiwum'] = 'N';
	if (empty($_GET['closed'])) $_GET['closed'] = 'N';
	if (empty($_GET['pager'])) $_GET['pager'] = 1;
	if (strlen($_GET['closed']) != 1 && strlen($_GET['closed']) != 1) error('Wybierz poprawnie codzienniki <a href="modules.php?mod=systemsesji">Wróć</a>');

	$comm = $db -> EXECUTE("SELECT COUNT(id) FROM diary WHERE archiwal='" . $_GET['archiwum'] . "' AND private='" . $_GET['closed'] . "'");
	$zlicz_comm_d = $comm -> fields['COUNT(id)'];
	$comm -> Close();

	$stron_d = ceil($zlicz_comm_d / 20);

	print "<table border=\"0\"  cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"black\" align=\"center\"><tr>";
	for ($i = 0; $i <= $stron_d - 1; $i ++ )
	{
		if (($i + 1) == $_GET['pager']) $strStyle = 'style="color: red"';
		else $strStyle = '';
		if ($i % 15 == 0)
		{
			print "</tr><tr><td width=\"40\" align=\"center\"><a " . $strStyle . " href=\"'.$modAdress.'&pager=" . ($i + 1) . "&archiwum=" . $_GET['archiwum'] . "&closed=" . $_GET['closed'] . "\">-" . ($i + 1) . "-</a></td>";
		}
		else
		{
			print "<td width=\"40\" align=\"center\"><a " . $strStyle . " href=\"'.$modAdress.'&pager=" . ($i + 1) . "&archiwum=" . $_GET['archiwum'] . "&closed=" . $_GET['closed'] . "\">-" . ($i + 1) . "-</a></td>";
		}
	}
	print "</tr></table><br />";


	if (isset($_GET['pager']))
	{
		if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['pager'])) error('Wpisz cyfrę <a href="modules.php?mod=systemsesji">Wróć</a>');
		$x = ($_GET['pager'] - 1) * 20;
		$y = $x;
	}
	else
	{
		$_GET['pager'] = 1;
		$x = 0;
	}
	if ($_GET['pager'] == 1) $y = 0;



	$dziennik = $db -> SelectLimit("SELECT id, name, title, date, private, views, votes_ptk, votes FROM diary WHERE archiwal='" . $_GET['archiwum'] . "' AND private='" . $_GET['closed'] . "' ORDER BY id DESC", 20, $x);
	$i = $y + 1;
	print '<table width="100%"><tr><td align="center">LP</td><td align="center">Właściciel</td><td align="center">Data</td><td align="center">Temat</td><td align="center">Kom.</td><td align="center">Wyśw.</td><td align="center">Prywatny</td></tr>';
	while ( ! $dziennik -> EOF)
	{
		$comments = $db -> EXECUTE("SELECT COUNT(id) FROM diary_comments WHERE diaryid=" . $dziennik -> fields['id'] . "");
		$name = $dziennik -> fields['title'];

		if ($dziennik -> fields['private'] == 'Y')
		{
			$strPrivate = 'Tak';
			$bgColor = '';
		}
		else
		{
			$strPrivate = 'Nie';
			$bgColor = 'background:#191919;';
		}
		if ($dziennik -> fields['votes'] == 0) $dziennik -> fields['votes'] = 1;

		print '<tr><td height="30" style="border-bottom:1px solid brown;border-right : 1px solid brown;' . $bgColor . '">' . $i . '</td><td style="border-bottom:1px solid brown;' . $bgColor . '">' . $dziennik -> fields['name'] . ' </td>';
		print '<td style="border-bottom:1px solid brown;' . $bgColor . '">(' . $dziennik -> fields['date'] . ')</a></td><td style="border-bottom:1px solid brown;padding-left:20px;' . $bgColor . '" align="left"><a href="' . $modAdress . '&view=zobacz&id=' . $dziennik -> fields['id'] . '" />' . $name . '</a></td><td style="border-bottom:1px solid brown;text-align:center;' . $bgColor . '"> ' . $comments -> fields['COUNT(id)'] . ' </td>';
		print '<td style="border-bottom:1px solid brown;padding-left:20px;' . $bgColor . '">' . $dziennik -> fields['views'] . '</td><td style="border-bottom:1px solid brown;padding-left:20px;' . $bgColor . '">' . $strPrivate . '</td>';
		print '</tr>';
		$comments -> Close();
		$i = $i + 1;
		$dziennik -> MoveNext();
	}
	print '</table>';
	$dziennik -> Close();
}

if (isset($_GET['view']) && $_GET['view'] == 'wpis')
{
	print '<br /> Wpis do daty : ' . $data . '<br />';
	print '<form method="post" action="' . $modAdress . '&view=wpis&step=dodaj"><table width="100%" align="center">';
	print '<tr><td>Tytuł</td><td><input type="text" name="title" size="20"></td></tr>
<tr><td>Miejsce akcji</td><td><input type="text" name="location" size="20" maxlength="100"></td></tr>
<tr><td>Pora dnia</td><td><input type="text" name="poradnia" size="20" maxlength="100"></td></tr>
<tr><td>Kto może pisać</td><td><select name=type>
<option value="H">Może pisać każdy</option>
<option value="Z">Nikt nie może komentować</option>
<option value="A">Tylko dla wybranych</option>
</select></td></tr>
<tr><td>Kto może czytać</td><td><select name=private>
<option value="N">Mogą czytać wszyscy</option>
<option value="Y">Mogą czytać tylko uczestnicy</option>
</select></td></tr></td></tr>
<tr><td colspan="2">';
	print '<textarea id="body" name="body" rows="30" style="width: 100%;"></textarea>';
	print '</td></tr>
</table>';
	print '<center><input type="submit" value="Wyślij" /></center>
</form>';
	if (isset($_GET['step']) && $_GET['step'] == 'dodaj')
	{
		if (empty($_POST['body'])) error('Wpisz coś <a href="modules.php?mod=systemsesji">Wróć</a>');
		if (empty($_POST['title'])) error('Wpisz coś <a href="modules.php?mod=systemsesji">Wróć</a>');
		$_POST['title'] = strip_tags($_POST['title']);
		$_POST['private'] = strip_tags($_POST['private']);
		$_POST['type'] = strip_tags($_POST['type']);
		$_POST['title'] = str_replace("'", "`", strip_tags($_POST['title']));
		$_POST['location'] = str_replace("'", "`", strip_tags($_POST['location']));
		$_POST['poradnia'] = str_replace("'", "`", strip_tags($_POST['poradnia']));

		require_once(BASE_DIR . 'modules/systemsesji/libs/bbcode.php');
		$clean_html = bbcodetohtml($_POST['body']);
		$mysqldate = date('Y-m-d H:i:s');
		$db -> Execute("INSERT INTO `diary` (`owner`,`name`,`title`,`text`,`date`,`type`, `location`, `poradnia`, `private`) VALUES (" . $player -> id . ",'" . $player -> user . "','" . $_POST['title'] . "','" . $clean_html . "','" . $mysqldate . "','" . $_POST['type'] . "','" . $_POST['location'] . "','" . $_POST['poradnia'] . "','" . $_POST['private'] . "')") or error('Nie moge dodać wpisu <a href="modules.php?mod=systemsesji">Wróć</a>');
		$id = $db -> Insert_ID();
		if ($id != 0) $db -> Execute("INSERT INTO `subskrybcja_all` (`owner`,`name`,`type`,`t_id`,`amount`) VALUES (" . $player -> id . ",'" . $_POST['title'] . "','C'," . $id . ",0)");
		header('LOCATION:'.$modAdress.'&view=wpisy');
		exit;
	}
}

if (isset($_GET['view']) && $_GET['view'] == 'edycja')
{
	if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['id'])) error('Wpisz cyfrę <a href="modules.php?mod=systemsesji">Wróć</a>');
	$wpis = $db -> EXECUTE("SELECT * FROM diary WHERE id=" . $_GET['id'] . " LIMIT 1");
	if ( ! $wpis -> fields['id']) error('<br /><center>Nie ma takiego wpisu</center>');
	if ($wpis -> fields['owner'] != $player -> id) error('To nie twój wpis <a href="modules.php?mod=systemsesji">Wróć</a>');
	print '<form method="post" action="' . $modAdress . '&view=edycja&step=dodaj&id=' . $_GET['id'] . '"><table width="100%" align="center">';
	print '<tr><td>Tytuł</td><td><input type="text" name="title" size="20" value="' . $wpis -> fields['title'] . '" /></td></tr>
<tr><td>Miejsce akcji</td><td><input type="text" name="location" size="20" maxlength="100" value="' . $wpis -> fields['location'] . '" /></td></tr>
<tr><td>Pora dnia</td><td><input type="text" name="poradnia" size="20" maxlength="100" value="' . $wpis -> fields['poradnia'] . '" /></td></tr>
<tr><td>Kto może pisać</td><td><select name=type>
<option value="' . $wpis -> fields['type'] . '">Bez zmian</option>
<option value="H">Może pisać każdy</option>
<option value="Z">Nikt nie może komentować</option>
<option value="A">Tylko dla wybranych</option>
</select></td></tr>
<tr><td>Kto może czytać</td><td><select name=private>
<option value="' . $wpis -> fields['private'] . '">Bez zmian</option>
<option value="N">Mogą czytać wszyscy</option>
<option value="Y">Mogą czytać tylko uczestnicy</option>
</select></td></tr>
<tr><td colspan="2">';
	print '<textarea  style="width: 100%;" id="body" name="body" rows="30">' . $wpis -> fields['text'] . '</textarea>';
	print '</td></tr>
</table>';
	print '<center><input type="submit" value="Wyślij" /></center>
</form>';
	if (isset($_GET['step']) && $_GET['step'] == 'dodaj')
	{
		if (empty($_POST['body'])) error('Wpisz coś <a href="modules.php?mod=systemsesji">Wróć</a>');
		if (empty($_POST['title'])) error('Wpisz coś <a href="modules.php?mod=systemsesji">Wróć</a>');
		$_POST['title'] = strip_tags($_POST['title']);
		$_POST['private'] = strip_tags($_POST['private']);
		$_POST['type'] = strip_tags($_POST['type']);
		$_POST['title'] = str_replace("'", "`", strip_tags($_POST['title']));
		$_POST['location'] = str_replace("'", "`", strip_tags($_POST['location']));
		$_POST['poradnia'] = str_replace("'", "`", strip_tags($_POST['poradnia']));

		require_once(BASE_DIR . 'modules/systemsesji/libs/bbcode.php');
		$clean_html = bbcodetohtml($_POST['body']);

		$db -> EXECUTE("UPDATE `diary` SET `title`='" . $_POST['title'] . "', `text`='" . $clean_html . "', `type`='" . $_POST['type'] . "', `location`='" . $_POST['location'] . "', `poradnia`='" . $_POST['poradnia'] . "', `private`='" . $_POST['private'] . "' WHERE `id`=" . $_GET['id'] . " LIMIT 1") or error('Błąd MySQL <a href="modules.php?mod=systemsesji">Wróć</a>');

		header('LOCATION:'.$modAdress.'&view=wpisy');
		exit;
	}
	$wpis -> Close();
}

// ZEZWOLENIA

if (isset($_GET['view']) && $_GET['view'] == 'alow')
{
	if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['id'])) error('Wpisz cyfrę <a href="modules.php?mod=systemsesji">Wróć</a>');
	$wpis = $db -> EXECUTE("SELECT * FROM diary WHERE id=" . $_GET['id'] . " LIMIT 1");
	if ($wpis -> fields['type'] != 'A') error('Teraz nie możesz tego zrobić <a href="modules.php?mod=systemsesji">Wróć</a>');
	if ($player -> id != $wpis -> fields['owner']) error('To nie twój wpis <a href="modules.php?mod=systemsesji">Wróć</a>');

	print '<form method=post action="' . $modAdress . '&view=alow&step=add&id=' . $wpis -> fields['id'] . '">
	Wpisz id oddzielając je przecinkiem o tak id,id,id. Jeśli zechcesz usunąc wszystkich wpisz po prostu swoje id tylko<br />
        <input type="text" name="ideki" value="' . $wpis -> fields['zezwolenie'] . '"><br /><br />
        <input type="submit" value="Dodaj">
	</form>';


	if (isset($_GET['step']) && $_GET['step'] == 'add')
	{
		$_POST['ideki'] = strip_tags($_POST['ideki']);
		$idsy = explode(",", $_POST['ideki']);
		foreach ($idsy as $noweid)
		{
			if ( ! preg_match("/^[\d]{1,11}$/i", $noweid)) error('Źle to zrobiłeś popraw się <a href="modules.php?mod=systemsesji">Wróć</a>');
		}
		// Dodaję do obserwowanych
		reset($idsy);
		foreach ($idsy as $noweid)
		{
			$sub = $db -> EXECUTE("SELECT id FROM subskrybcja_all WHERE owner=" . $noweid . " AND t_id=" . $wpis -> fields['id'] . " AND type='C' LIMIT 1");
			if ( ! $sub -> fields['id'])
			{
				$db -> EXECUTE("INSERT INTO `subskrybcja_all` (`owner`,`name`,`type`,`t_id`,`amount`) VALUES (" . $noweid . ",'" . $wpis -> fields['title'] . "','C'," . $wpis -> fields['id'] . ",1)");
				$db -> EXECUTE("UPDATE players SET diary=diary+1 WHERE id=" . $noweid . " LIMIT 1");
			}
			$sub -> Close();
		}

		$db -> Execute("UPDATE diary SET zezwolenie='" . $_POST['ideki'] . "' WHERE id=" . $wpis -> fields['id'] . " LIMIT 1");
		error('Edytowano liste zewoleń: ' . $_POST['ideki'].' <a href="modules.php?mod=systemsesji">Wróć</a>');
	}
}

// ARCHIWUM

if (isset($_GET['view']) && $_GET['view'] == 'archiwum')
{
	if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['id'])) error('Wpisz cyfrę <a href="modules.php?mod=systemsesji">Wróć</a>');
	$wpis = $db -> EXECUTE("SELECT id, owner FROM diary WHERE id=" . $_GET['id'] . " LIMIT 1");
	if ($player -> id != $wpis -> fields['owner']) error('To nie twój wpis <a href="modules.php?mod=systemsesji">Wróć</a>');

	$db -> Execute("UPDATE diary SET archiwal='Y' WHERE id=" . $wpis -> fields['id'] . " LIMIT 1");
	$wpis -> Close();
	header('LOCATION:'.$modAdress.'&view=wpisy');
	exit;
}
if (isset($_GET['view']) && $_GET['view'] == 'aktywuj')
{
	if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['id'])) error('Wpisz cyfrę <a href="modules.php?mod=systemsesji">Wróć</a>');
	$wpis = $db -> EXECUTE("SELECT id, owner FROM diary WHERE id=" . $_GET['id'] . " LIMIT 1");
	if ($player -> id != $wpis -> fields['owner']) error('To nie twój wpis <a href="modules.php?mod=systemsesji">Wróć</a>');

	$db -> Execute("UPDATE diary SET archiwal='N' WHERE id=" . $wpis -> fields['id'] . " LIMIT 1");
	$wpis -> Close();
	header('LOCATION:'.$modAdress.'&view=wpisy');
	exit;
}

// SKASUJ
if (isset($_GET['view']) && $_GET['view'] == 'del')
{
	if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['id'])) error('Wpisz cyfrę <a href="modules.php?mod=systemsesji">Wróć</a>');
	$wpis = $db -> EXECUTE("SELECT id, owner FROM diary WHERE id=" . $_GET['id'] . " LIMIT 1");

	if ($player -> id != $wpis -> fields['owner']) error('To nie twój wpis <a href="modules.php?mod=systemsesji">Wróć</a>');

	$wpis -> Close();

	$db -> EXECUTE("DELETE FROM diary_comments WHERE diaryid=" . $_GET['id'] . "");
	$db -> EXECUTE("DELETE FROM diary WHERE id=" . $_GET['id'] . " LIMIT 1");
	$db -> EXECUTE("DELETE FROM subskrybcja_all WHERE t_id=" . $_GET['id'] . "");
	header('LOCATION:'.$modAdress.'&view=wpisy');
	exit;
}

// JEDEN CODZIENNIK
if (isset($_GET['view']) && $_GET['view'] == 'zobacz')
{

	if (isset($_GET['id']))
	{
		if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['id'])) error('Wpisz cyfrę <a href="modules.php?mod=systemsesji">Wróć</a>');
		$wpis = $db -> EXECUTE("SELECT * FROM diary WHERE id=" . $_GET['id'] . " LIMIT 1");
		if ( ! $wpis -> fields['id']) error('<br /><center>Nie ma takiego wpisu <a href="modules.php?mod=systemsesji">Wróć</a></center>');

		if (isset($_GET['coc']))
		{
			if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['coc'])) error('Wpisz cyfrę <a href="modules.php?mod=systemsesji">Wróć</a>');
			if ($player -> id != $wpis -> fields['owner'] && $player -> mg != 'Y') error('To nie twój wpis <a href="modules.php?mod=systemsesji">Wróć</a>');
			$com = $db -> EXECUTE("SELECT id FROM diary_comments WHERE diaryid=" . $wpis -> fields['id'] . " LIMIT 1");
			if ( ! $com -> fields['id']) error('To nie twój komentarz <a href="modules.php?mod=systemsesji">Wróć</a>');
			$com -> Close();

			$db -> EXECUTE("DELETE FROM diary_comments WHERE id=" . $_GET['coc'] . " LIMIT 1");
			header('LOCATION:'.$modAdress.'&view=zobacz&id=' . $_GET['id'] .'#pager');
			exit;
		}

		if (isset($_GET['sub']) && $_GET['sub'] == 'tak')
		{
			$sub = $db -> EXECUTE("SELECT id FROM subskrybcja_all WHERE owner=" . $player -> id . " AND t_id=" . $wpis -> fields['id'] . " AND type='C' LIMIT 1");
			if ( ! $sub -> fields['id'])
			{
				$db -> EXECUTE("INSERT INTO `subskrybcja_all` (`owner`,`name`,`type`,`t_id`,`amount`) VALUES (" . $player -> id . ",'" . $wpis -> fields['title'] . "','C'," . $_GET['id'] . ",1)");
			}
			$sub -> Close();
			header('LOCATION:'.$modAdress.'&view=zobacz&id=' . $_GET['id']);
			exit;
		}

		$sub = $db -> EXECUTE("SELECT id FROM subskrybcja_all WHERE owner=" . $player -> id . " AND t_id=" . $wpis -> fields['id'] . " AND type='C' LIMIT 1");
		if ($sub -> fields['id'])
		{
			$db -> EXECUTE("UPDATE subskrybcja_all SET amount=0 WHERE owner=" . $player -> id . " AND t_id=" . $wpis -> fields['id'] . " AND type='C' LIMIT 1");
			$db -> EXECUTE("UPDATE players SET diary=0 WHERE id=" . $player -> id . " LIMIT 1");
			$SUB = 'Tak'; // SUBSKRYPCJA
		}
		else
		{
			$SUB = 'Nie';  // SUBSKRYPCJA BRAK
		}
		$sub -> Close();
		// WYSWIETLENIA
		$strOceny = '<div style="right: 0pt; margin-top: 25px; position: static; width: 200px;text-align:left;float: right;">
         Wyświetleń: ' . $wpis -> fields['views'] . '
         </div>
         ';
		// OCENY OFF
		// STATYSTYKI PODSTRONY
		if ( ! isset($_COOKIE["Codzienniki_" . $wpis -> fields['id']]))
		{
			setcookie("Codzienniki_" . $wpis -> fields['id'], $wpis -> fields['id'], time() + 86400, '/');
			$db -> EXECUTE("UPDATE diary SET views=views+1 WHERE id=" . $wpis -> fields['id'] . " LIMIT 1");
		}
		// STATYSTYKA END
		if ($wpis -> fields['private'] != 'Y') print $strOceny;

		if ($wpis -> fields['type'] == 'A') $dla_kogo = 'Tylko dla wybranych';
		elseif ($wpis -> fields['type'] == 'H') $dla_kogo = 'Mogą pisać wszyscy';
		elseif ($wpis -> fields['type'] == 'Z') $dla_kogo = 'Nikt nie może pisać';

		if ($wpis -> fields['archiwal'] == 'Y') $archiwalny = '<font color="red">Codziennik zamknięty</font>';
		else $archiwalny = '<font color=green>Codziennik otwarty</font>';

		print '<br /><center><b>' . $wpis -> fields['title'] . '</b></center>
        <b>Autor</b>: <a href=view.php?view=' . $wpis -> fields['owner'] . '>' . $wpis -> fields['name'] . '</a> [' . $wpis -> fields['owner'] . ']<br />
        <b>Miejsce akcji</b>: ' . $wpis -> fields['location'] . '<br />
        <b>Pora dnia</b>: ' . $wpis -> fields['poradnia'] . '<br />
        ' . $dla_kogo . '<br />
        ' . $archiwalny;
		if ($SUB == 'Nie') print '<br /><a href=' . $modAdress . '&view=zobacz&id=' . $_GET['id'] . '&sub=tak>Subskrybuj sesję</a>';
		print '<br /><br />
        ' . $wpis -> fields['text'] . '<br /><br />';

		///////////// PANEL DLA MG ////////////
		$allow = 'N';
		if ($wpis -> fields['archiwal'] == 'N')
		{
			if ($wpis -> fields['type'] == 'A')
			{
				$ideki = explode(",", $wpis -> fields['zezwolenie']);
				foreach ($ideki as $noweid)
				{
					if ($noweid == $player -> id || $player -> id == $wpis -> fields['owner'])
					{
						$allow = 'Y';
					}
				}
				if ($allow == 'Y')
				{
					print 'Poniżej masz opcje dzięki, którym możesz wykonać rzut kością oraz dodać pod tym rzutem opis. Naciśnięcie konkretnego przycisku spowoduje dodanie formularza pod spodem<br /><br />';
					print '<center><img src="/modules/systemsesji/images/buttons/komentarz.png" onclick="mg_append(\'' . $modAjaxAdress . '\',\'K\',\'panel_mg\')" style="cursor:pointer;" /><img src="/modules/systemsesji/images/buttons/rzut.png"  onclick="CreateWindow(\'Wykonaj rzut\',\'' . $modAjaxAdress . '&view=R\',\'' . $wpis -> fields['id'] . '\',600,200,\'true\')"  style="cursor:pointer;" /><br /><br />';
					print '<form id="diary_form" method="post" style="width: 100%; text-align:left;">
		    <textarea id="diarywpis_body" name="diarywpis_body" rows="6"  style="width: 100%;"></textarea>
			Wpisz imie NPC (Zostaw puste): <input type="text" id="diarywpis_npc" name="npc" value="" />
		    <div id="panel_mg" style="align:center;"></div>
		    </form><br />
           <img src="/modules/systemsesji/images/buttons/wyslij.png" onclick="mg_addwpis(\'' . $modAjaxAdress . '&view=RZ\',\'' . $wpis -> fields['id'] . '\',\'panel_mg\')"  style="cursor:pointer;" /> <img src="/modules/systemsesji/images/buttons/podglad.png" onclick="mg_podglad(\'' . $modAjaxAdress . '&view=RZT\',\'podglad\')"  style="cursor: pointer;" />
           </center><br />';
				}
			}
			elseif ($wpis -> fields['type'] == 'H')
			{
				print 'Poniżej masz opcje dzięki, którym możesz wykonać rzut kością oraz dodać pod tym rzutem opis. Naciśnięcie konkretnego przycisku spowoduje dodanie formularza pod spodem<br /><br />';
				print '<center><img src="/modules/systemsesji/images/buttons/komentarz.png" onclick="mg_append(\'' . $modAjaxAdress . '\',\'K\',\'panel_mg\')" style="cursor:pointer;" /><img src="/modules/systemsesji/images/buttons/rzut.png"  onclick="CreateWindow(\'Wykonaj rzut\',\'' . $modAjaxAdress . '&view=R\',\'' . $wpis -> fields['id'] . '\',600,200,\'true\')"  style="cursor:pointer;" /><br /><br />';
				print '<form id="diary_form" method="post" style="width: 100%; text-align:left;">
		    <textarea id="diarywpis_body" name="diarywpis_body" rows="6"  style="width: 100%;"></textarea>
			Wpisz imie NPC (Zostaw puste): <input type="text" id="diarywpis_npc" name="npc" value="" />
		    <div id="panel_mg" style="align:center;"></div>
		    </form><br />
           <img src="/modules/systemsesji/images/buttons/wyslij.png" onclick="mg_addwpis(\'' . $modAjaxAdress . '&view=RZ\',\'' . $wpis -> fields['id'] . '\',\'panel_mg\')"  style="cursor:pointer;" /> <img src="/modules/systemsesji/images/buttons/podglad.png" onclick="mg_podglad(\'' . $modAjaxAdress . '&view=RZT\',\'podglad\')"  style="cursor: pointer;" />
           </center><br />';
			}
		}
		///////////// PANEL DLA MG ////////////


		print '<hr /><div id="podglad" class="podglad" style="align:center;"></div><br />';

		$comments = $db -> EXECUTE("SELECT id FROM diary_comments WHERE diaryid=" . $_GET['id'] . " ORDER BY id DESC");
		$kom_licz = $comments -> RecordCount();
		$comments -> Close();

		if (isset($_GET['pager']))
		{
			if ( ! preg_match("/^[\d]{1,11}$/i", $_GET['pager'])) error('Wpisz cyfrę <a href="modules.php?mod=systemsesji">Wróć</a>');
			$x = ($_GET['pager'] - 1) * 20;
		}
		else
		{
			$_GET['pager'] = 1;
			$x = 0;
		}

		// Pokazuje ID komentarza (obliczam z uwzględnieniem stron)
		$kom_ID = 0;
		$strLinkystron = '';
		$stron_d = ceil($kom_licz / 20);
		if ($stron_d > 1)
		{
			// Pokazuje ID komentarza (obliczam z uwzględnieniem stron)
			if (isset($_GET['pager'])) $kom_ID = ($_GET['pager'] - 1);
			else $kom_ID = 0;


			$strLinkystron = $strLinkystron . "<table border=\"0\"  cellpadding=\"0\" cellspacing=\"1\" bgcolor=\"black\" align=\"center\"><tr>";
			for ($i = 1; $i <= $stron_d; $i ++ )
			{
				if ($_GET['pager'] == $i) $strColor = 'style="color:red;"';
				else $strColor = '';
				if ($i % 19 == 0)
				{
					$strLinkystron = $strLinkystron . "</tr><tr><td width=\"40\" align=\"center\"><a " . $strColor . " href=\"'.$modAdress.'&view=zobacz&id=" . $_GET['id'] . "&pager=" . ($i) . "#pager\">-" . ($i) . "-</a></td>";
				}
				else
				{
					$strLinkystron = $strLinkystron . "<td width=\"40\" align=\"center\"><a " . $strColor . " href=\"'.$modAdress.'&view=zobacz&id=" . $_GET['id'] . "&pager=" . ($i) . "#pager\">-" . ($i) . "-</a></td>";
				}
			}
			$strLinkystron = $strLinkystron . "</tr></table>";
		}
		$strLinkystron = $strLinkystron . "<hr />";
		print $strLinkystron;

		// SPRAWDZENIE CZY PRYWATNY
		if ($wpis -> fields['private'] == 'Y' && $allow != 'Y')
		{
			$comments = $db -> EXECUTE("SELECT id FROM diary_comments WHERE diaryid=" . $_GET['id'] . " AND owner=" . $player -> id . " LIMIT 1");
			if ( ! $comments -> fields['id']) error('To jest codziennik do wglądu tylko dla uczestników <a href="modules.php?mod=systemsesji">Wróć</a>');
			$comments -> Close();
		}
		$comments = $db -> SelectLimit("SELECT * FROM diary_comments WHERE diaryid=" . $_GET['id'] . " ORDER BY id DESC", 20, $x);
		if ( ! $comments -> fields['id']) error("Brak wpisów <a href='#'></a>");
		print '<table id="pager" border="0" style="width: 100%;">';
		$i = 0;
		$do_ID = $kom_licz - ($kom_ID * 20); // Do ID komentarza potrzebne
		while ( ! $comments -> EOF)
		{
			// Je¶li wła¶ciciel to może skasować wpis
			if ($player -> id == $wpis -> fields['owner'] || $player -> mg == 'Y') $skasuj = '| <a href=' . $modAdress . '&view=zobacz&id=' . $_GET['id'] . '&coc=' . $comments -> fields['id'] . '>Skasuj</a>';
			else $skasuj = '';
			// Je¶li wła¶ciciel i MG może edytować wpis
			if ($player -> id == $wpis -> fields['owner'] || $player -> mg == 'Y')
			{
				$edytuj = "| <a href=# onclick=\"CreateWindow('Edycja wpisu','".$modAjaxAdress."&view=edit','" . $comments -> fields['id'] . "',600,500);return false;\">Edytuj</a>";
			}
			else
			{
				$edytuj = '';
			}

			// Je¶li Narrator to zmieniam nazwę
			if ($comments -> fields['narrator'] != '') $writer = $comments -> fields['narrator'];
			else $writer = '<a href=view.php?view=' . $comments -> fields['owner'] . '>' . $comments -> fields['author'] . '</a>';
			if (($player -> mg == 'Y' || $player -> id == $wpis -> fields['owner']) && $comments -> fields['narrator'] != '') $writer = '<a href=view.php?view=' . $comments -> fields['owner'] . '>' . $comments -> fields['narrator'] . '</a>';
			// Je¶li MG to może sprawdzić kto na prawdę wpisał
			//if ($player -> mg == 'Y') $writer = '<a href=view.php?view='.$comments -> fields['owner'].'>'.$namenr.'</a>';
			//else $writer = $namenr;

			if ($i % 2 == 0) $tlo = 'bgcolor="#191919"';
			else $tlo = 'bgcolor=#363636';

			$diaryav = '';
			if ($comments -> fields['narrator'] != '') $diaryav = '<center><br /><img src="/modules/systemsesji/images/book.png" border="0" /></center>';
			else
			{
				if (is_file(BASE_DIR . 'avatars/' . $comments -> fields['avatar'])) $diaryav = '<center><br /><img src="avatars/' . $comments -> fields['avatar'] . '" border="0" width="200"/></center>';
			}
			print '<tr><td width="150" ' . $tlo . '>' . $diaryav . '
           <br />Imię: ' . $writer . '  ';
			if ($comments -> fields['date'] != '0000-00-00 00:00:00') print '<br />' . $comments -> fields['date'];
			if ($comments -> fields['narrator'] == '')
			{
				print '<br /><br />Rasa: ' . $comments -> fields['rasa'] . '
               <br />Klasa: ' . $comments -> fields['klasa'] . '
               ';
			}

			print '</td><td valign="top" ' . $tlo . ' style="padding: 10px;">';
			print "Kom ID: #" . $do_ID . " " . $skasuj . " " . $edytuj . "<hr />";
			print "<div id=" . $comments -> fields['id'] . ">

           " . $comments -> fields['body'] . "

           </div>";

			print '</td></tr>';
			$i = $i + 1;
			$do_ID = $do_ID - 1;
			$comments -> MoveNext();
		}
		print '</table>';
		print $strLinkystron;
		$comments -> Close();
		$wpis -> Close();
	}
}

// Wszystkie wpisy

if (isset($_GET['view']) && $_GET['view'] == 'wpisy')
{

	if (empty($_GET['id']))
	{
		$dziennik = $db -> EXECUTE("SELECT id, title, date, type FROM diary WHERE owner=" . $player -> id . " AND archiwal='N' ORDER BY id DESC");
		print '<table width="100%"><tr><td colspan="6" align="center"><h1>AKTYWNE</h1></td></tr>';
		while ( ! $dziennik -> EOF)
		{
			if ($dziennik -> fields['type'] == 'A') $type = '<a href=' . $modAdress . '&view=alow&id=' . $dziennik -> fields['id'] . '>Zezwolenia</a>';
			else $type = '';
			print '<tr><td>' . $dziennik -> fields['date'] . '</td><td><a href=' . $modAdress . '&view=zobacz&id=' . $dziennik -> fields['id'] . '>' . $dziennik -> fields['title'] . '</a></td><td><a href=' . $modAdress . '&view=del&id=' . $dziennik -> fields['id'] . '>Skasuj</a></td><td>' . $type . '</td><td><a href=' . $modAdress . '&view=edycja&id=' . $dziennik -> fields['id'] . '>Edytuj</a></td><td><a href=' . $modAdress . '&view=archiwum&id=' . $dziennik -> fields['id'] . '>Do Archiwum</a></td></tr>';
			$dziennik -> MoveNext();
		}
		print '</table>';
		$dziennik -> Close();


		$dziennik = $db -> EXECUTE("SELECT id, title, date, type FROM diary WHERE owner=" . $player -> id . " AND archiwal='Y' ORDER BY id DESC");
		print '<table width="100%"><tr><td colspan="6" align="center"><h1>ARCHIWUM</h1></td></tr>';
		while ( ! $dziennik -> EOF)
		{
			if ($dziennik -> fields['type'] == 'A') $type = '<a href=' . $modAdress . '&view=alow&id=' . $dziennik -> fields['id'] . '>Zezwolenia</a>';
			else $type = '';
			print '<tr><td>' . $dziennik -> fields['date'] . '</td><td><a href=' . $modAdress . '&view=zobacz&id=' . $dziennik -> fields['id'] . '>' . $dziennik -> fields['title'] . '</a></td><td><a href=' . $modAdress . '&view=del&id=' . $dziennik -> fields['id'] . '>Skasuj</a></td><td>' . $type . '</td><td><a href=' . $modAdress . '&view=edycja&id=' . $dziennik -> fields['id'] . '>Edytuj</a></td><td><a href=' . $modAdress . '&view=aktywuj&id=' . $dziennik -> fields['id'] . '>Do Aktywnych</a></td></tr>';
			$dziennik -> MoveNext();
		}
		print '</table>';
		$dziennik -> Close();
	}
}
require_once(BASE_DIR . "includes/foot.php");
?>