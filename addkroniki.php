<?php

$title = "Dodaj Kornikę";
require_once("includes/head.php");

require_once("languages/".$player -> lang."/addupdate.php");

if ($player -> rank != "Admin" && $player -> rank != "Kronikarz" && $player -> rank != "Staff" && $player -> rank != "Namiestnik" && $player -> rank != "Hrabia") 
{
    error (NOT_HAVE);
}
echo("wpisz wpis właściwy do kronik głównych.");
/**
* Check avaible languages
*/    
$path = 'languages/';
$dir = opendir($path);
$arrLanguage = array();
$i = 0;
while ($file = readdir($dir))
{
    if (!ereg(".htm*$", $file))
    {
        if (!ereg("\.$", $file))
        {
            $arrLanguage[$i] = $file;
            $i = $i + 1;
        }
    }
}
closedir($dir);

$smarty -> assign ( array("Button" => U_ADD, 
                          "Link" => "addkroniki.php?action=add", 
                          "Title1" => '', 
                          "Text" => '', 
                          "Ulangsel" => U_LANG_S, 
                          "Ulang" => $arrLanguage, 
                          "Utitle" => U_TITLE, 
                          "Utext" => U_TEXT));

/**
* Add new update
*/
if (isset ($_GET['action']) && $_GET['action'] == 'add') 
{
    if (empty($_POST['addtitle']) || empty($_POST['addupdate'])) 
    {
        error (EMPTY_FIELDS);
    }
    $_POST['addupdate'] = nl2br($_POST['addupdate']);
    $strTitle = $db -> qstr($_POST['addtitle'], get_magic_quotes_gpc());
    $strUpdate = $db -> qstr($_POST['addupdate'], get_magic_quotes_gpc());
    $strDate = $db -> DBDate($data);
    $db -> Execute("INSERT INTO `kronikii` (`starter`, `title`, `updates`, `time`, `lang`) VALUES('(".$player -> user.")', ".$strTitle.", ".$strUpdate.", ".$strDate.", '".$_POST['addlang']."')") or error(E_DB);
    error (U_SUCCES);
}

/**
* Update modyfication
*/
if (isset ($_GET['modify'])) 
{
    if (!ereg("^[1-9][0-9]*$", $_GET['modify'])) {
        error (ERROR);
    }
    $update = $db -> Execute("SELECT * FROM kronikii WHERE id=".$_GET['modify']);
    $update -> fields['updates'] = str_replace("<br />", "", $update -> fields['updates']);
    $smarty -> assign(array("Title1" => $update -> fields['title'], 
                            "Text" => $update -> fields['updates'], 
                            "Button" => U_MODIFY, 
                            "Link" => "addkroniki.php?action=modify&updid=".$update -> fields['id']));
    $update -> Close();
}

/**
* Save update modifications
*/
if (isset ($_GET['action']) && $_GET['action'] == 'modify') 
{
    if (empty($_POST['addtitle']) || empty($_POST['addupdate'])) 
    {
        error (EMPTY_FIELDS);
    }
    if (!ereg("^[1-9][0-9]*$", $_GET['updid'])) 
    {
        error (ERROR);
    }
    $uid = $db -> Execute("SELECT `id`, `lang` FROM `kronikii` WHERE `id`=".$_GET['updid']);
    if ($uid -> fields['id']) 
    {
        require_once("languages/".$uid -> fields['lang']."/addupdate1.php");
        $_POST['addupdate'] = $_POST['addupdate']."\n \n ".MODIFY_DATE." ".$data." ".MODIFY_BY." <b>".$player -> user."</b>";
        $_POST['addupdate'] = nl2br($_POST['addupdate']);
        $strTitle = $db -> qstr($_POST['addtitle'], get_magic_quotes_gpc());
        $strUpdate = $db -> qstr($_POST['addupdate'], get_magic_quotes_gpc());
        $db -> Execute("UPDATE `kronikii` SET `title`=".$strTitle.", `updates`=".$strUpdate." WHERE `id`=".$_GET['updid']);
        error (U_MODIFIED);
    } 
        else 
    {
        error (NO_UPD);
    }
    $uid -> Close();
}

$smarty -> display('addkroniki.tpl');

require_once("includes/foot.php");
?>
