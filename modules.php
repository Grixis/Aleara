<?php

/**
 *   File functions:
 *   Load Modules into game
 *
 *   @name                 : modules.php                            
 *   @copyright            : (C) 2012 Fenix Team
 *   @author               : Thoran <defman@o2.pl>
 *   @version              : 1.0
 *   @since                : 02.09.2012

 * ************  INSTALACJA    *************
  1. Należy utworzyć katalog modules w głównym katalogu gry
  2. Należy wgrać plik modules.php do głównego katalogu gry
  3. Należy w pliku templates/header.tpl dodać nad znacznikiem <body> znacznik {$MODULEDATA}
  4. Należy w pliku templates/header.tpl dodać znacznik {$MODULEMENU} w menu bocznym lub tam gdzie chcemy by się wyświetlało menu modułów
  5. Należy w pliku includes/head.php w linii na oko 273-9 (nie ma to specjalnie znaczenia) dodać kod

  // MODULES DATA
  $smarty -> assign ('MODULEDATA', '');
  $smarty -> assign ('MODULEMENU', '');
  if (isset($strHeaderFiles)) $smarty -> assign ('MODULEDATA', $strHeaderFiles);
  if (isset($strHeaderMenu)) $smarty -> assign ('MODULEMENU', $strHeaderMenu);
  if (!isset($_SESSION['user_hide_id'])) $_SESSION['user_hide_id'] = $player -> id;
  // MODULES DATA
 *
 */
$title = 'VSM - ';
define('BASE_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);

// Pobieram odpowiedni moduł z odpowiedniego katalogu
if (strlen($_GET['mod']) <= 1) throw_error('Nie ma takiego modułu.');
if (isset($_GET['mod']))
{
	// jesli nie przechodzi walidacji to plujemu mu w twarz
	if ( ! preg_match('#^[a-z\-]*$#is', $_GET['mod'])) throw_error('W nazwie modułu mogą znajdować się tylko litery.');

	// Najpierw sprawdzam czy to nie jest zapytanie ajaxowe
	if (preg_match('#[\-]+#is', $_GET['mod']))
	{
		$arrAjax = explode('-', $_GET['mod']);
		if (is_dir(BASE_DIR . 'modules/' . $arrAjax[0] . '/'))
		{
			// jesli jest to ładujemy ajaxa i walimy resztę
			include(BASE_DIR . 'modules/' . $arrAjax[0] . '/ajax.php');
			exit;
		}
		else throw_error('Nie ma takiego modułu');
	}
	// jesli moduł istnieje to ładujemy go
	if (is_dir(BASE_DIR . 'modules/' . $_GET['mod'] . '/'))
	{
		include(BASE_DIR . 'modules/' . $_GET['mod'] . '/index.php');
	}
	else throw_error('Nie ma takiego modułu');
}
else throw_error('Nie ma takiego modułu');

// funkcyjka do epatowania błędami
function throw_error($text)
{
	global $smarty;
	global $db;
	global $start_time;
	global $player;
	global $numquery;
	global $compress;
	global $sqltime;
	global $phptime;
	global $gamename;
	global $arrTags;
	global $title;
	include('includes/head.php');
	
	error($text);
}

?>