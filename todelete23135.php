<?php

$title = 'Panel Cheatera';
require_once('includes/head.php');

/**
* Get the localization for game
*/
require_once('languages/'.$player -> lang.'/panelcheatera.php');


/**
* Write new message
*/


	if (isset ($_GET['view']) && $_GET['view'] == 'add')
{
    $smarty -> assign(array("Addid" => ADD_ID,
        "Newrank" => NEW_RANK,
        "Rmember" => R_MEMBER,
        "Rdupas" => R_DUPAS,
        "Rkutas" => R_KUTAS,
        "Rkochamcie" => R_KOCHAMCIE,
        "Rdzifkaalearianska" => R_DZIFKAALEARIANSKA,
        "Rzulspodmostu" => R_ZULSPODMOSTU,
        "Rzlamas" => R_ZLAMAS,
        "Rcheater" => R_CHEATER,
        "Rnolifer" => R_NOLIFER,
        "Rmenda" => R_MENDA,
        "Aadd" => A_ADD));
    if (isset ($_GET['step']) && $_GET['step'] == 'add')
    {
        if ($_POST['aid'] != 1)
        {
            $strRank = $db -> qstr($_POST['rank'], get_magic_quotes_gpc());
            $db -> Execute("UPDATE `players` SET `rank`=".$strRank." WHERE `id`=".$_POST['aid']);
            error (YOU_ADD_R." ".$_POST['aid']." ".NEW_RANK." ".$_POST['rank'].".");
        }
    }
}

if (isset ($_GET['view']) && $_GET['view'] == 'write')
{
    
    
    $smarty -> assign_by_ref ('To', $_GET['to']);
    $smarty -> assign_by_ref ('Reply', $_GET['re']);
    $smarty -> assign_by_ref ('Body', $body);
    if (isset ($_GET['step']) && $_GET['step'] == 'send')
    {
     
        $rec = $db -> Execute('SELECT `id`, `user` FROM `players` WHERE `id`='.$_POST['to']);
       
      
        $_POST['subject'] = strip_tags($_POST['subject']);
        require_once('includes/bbcode.php');
        $_POST['body'] = bbcodetohtml($_POST['body']);
        $strBody = $db -> qstr($_POST['body'], get_magic_quotes_gpc());
        $strSubject = $db -> qstr($_POST['subject'], get_magic_quotes_gpc());
        $strDate = $db -> DBDate($newdate);
        $db -> Execute('INSERT INTO `log` (`owner`, `log`, `unread`, `czas`) VALUES('.$_POST['to'].' , '.$strBody.', "F", 0)');
        
        error (YOU_SEND.$rec -> fields['user'].'.');
    }
}
/**
* Initialization of variables
*/
if (!isset($_GET['view']))
{
    $_GET['view'] = '';
}
if (!isset($_GET['read']))
{
    $_GET['read'] = '';
}
if (!isset($_GET['zapisz']))
{
    $_GET['zapisz'] = '';
}
if (!isset($_GET['kasuj']))
{
    $_GET['kasuj'] = '';
}
if (!isset($_GET['send']))
{
    $_GET['send'] = '';
}
if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}
if (!isset($_GET['block']))
{
    $_GET['block'] = '';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array('View' => $_GET['view'],
                        'Read' => $_GET['read'],
                        'Write' => $_GET['zapisz'],
                        'Delete' => $_GET['kasuj'],
                        'Send'  => $_GET['send'],
                        'Block' => $_GET['block'],
                        'Step' => $_GET['step']));
$smarty -> display ('panelcheatera.tpl');

require_once('includes/foot.php');
?>
