<?php

$title = "Kroniki Aleary";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, ¿e jesteœ w lochu - nie mo¿esz tutaj przebywaæ.');
}
require_once("languages/".$player -> lang."/updates.php");
if (!isset ($_GET['view'])) 
{
    $upd = $db -> SelectLimit("SELECT * FROM kronikii", 10000);
    if ($player -> rank == 'Admin' && $player -> rank == 'Staff' && $player -> rank == 'Kronikarz') 
    {
        $modtext = "(<a href=\"addkroniki.php?modify=".$upd -> fields['id']."\">".A_CHANGE."</a>)";
    } 
        else 
    {
        $modtext = '';
    }
    if (isset($upd -> fields['id']))
    {
        $objQuery = $db -> Execute("SELECT id FROM kronikii_comments WHERE updateid=".$upd -> fields['id']);
        $intComments = $objQuery -> RecordCount();
        $objQuery -> Close();
    }
        else
    {
        $intComments = 0;
    }
    $smarty -> assign(array("Title1" => $upd -> fields['title'], 
        "Starter" => $upd -> fields['starter'], 
        "Update" => $upd -> fields['updates'], 
        "Modtext" => $modtext, 
        "Date" => T_DAY.$upd -> fields['time'],
        "Alast10" => A_LAST10,
        "Comments" => $intComments,
        "Updid" => $upd -> fields['id']));    
} 

if (isset($_GET['view']))
{
    $upd = $db -> SelectLimit("SELECT * FROM kronikii ORDER BY id", 10000);
    $arrtitle = array();
    $arrstarter = array();
    $arrnews = array();
    $arrmodtext = array();
    $arrtimestamp = array();
    $arrComments = array();
    $arrUpdid = array();
    $i = 0;    
    while (!$upd -> EOF) 
    {
        if ($player -> rank == 'Admin' && $player -> rank == 'Kronikarz') 
        {
            $arrmodtext[$i] = "(<a href=\"addkroniki.php?modify=".$upd -> fields['id']."\">".A_CHANGE."</a>)";
        } 
            else 
        {
            $arrmodtext[$i] = '';
        }
        $objQuery = $db -> Execute("SELECT id FROM kronikii_comments WHERE updateid=".$upd -> fields['id']);
        $arrComments[$i] = $objQuery -> RecordCount();
        $objQuery -> Close();
        $arrtitle[$i] = $upd -> fields['title'];
        $arrstarter[$i] = $upd -> fields['starter'];
        $arrnews[$i] = $upd -> fields['updates'];
        $arrUpdid[$i] = $upd -> fields['id'];
        if (isset($upd -> fields['time']))
        {
            $arrtimestamp[$i] = T_DAY.$upd -> fields['time'];
        }
            else
        {
            $arrtimestamp[$i] = '';
        }
        $upd -> MoveNext();
        $i = $i + 1;        
    }
    $upd -> Close();
    $smarty -> assign(array("Title1" => $arrtitle, 
        "Starter" => $arrstarter, 
        "Update" => $arrnews, 
        "Modtext" => $arrmodtext, 
        "Date" => $arrtimestamp,
        "Comments" => $arrComments,
        "Updid" => $arrUpdid));    
}

/**
* Comments to text
*/
if (isset($_GET['step']) && $_GET['step'] == 'comments')
{
    $smarty -> assign("Amount", '');
    
    require_once('includes/comments.php');
    /**
    * Display comments
    */
    if (!isset($_GET['action']))
    {
        displaycomments($_GET['text'], 'kronikii', 'kronikii_comments', 'updateid');
        $smarty -> assign(array("Tauthor" => $arrAuthor,
            "Tbody" => $arrBody,
            "Amount" => $i,
            "Cid" => $arrId,
            "Tdate" => $arrDate,
            "Nocomments" => NO_COMMENTS,
            "Addcomment" => ADD_COMMENT,
            "Adelete" => A_DELETE,
            "Aadd" => A_ADD,
            "Aback" => A_BACK,
            "Writed" => WRITED));
    }

    /**
    * Add comment
    */
    if (isset($_GET['action']) && $_GET['action'] == 'add')
    {
        addcomments($_POST['tid'], 'kronikii_comments', 'updateid');
    }

    /**
    * Delete comment
    */
    if (isset($_GET['action']) && $_GET['action'] == 'delete')
    {
        deletecomments('kronikii_comments');
    }
}

/**
* Initialization of variables
*/
if (!isset($_GET['view'])) 
{
    $_GET['view'] = '';
}
if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}
if (!isset($_GET['text']))
{
    $_GET['text'] = '';
}

/**
* Assign variables to template and display page
*/
$smarty -> assign(array("View" => $_GET['view'],
    "Writeby" => WRITE_BY,
    "Step" => $_GET['step'],
    "Text" => $_GET['text'],
    "Rank" => $player -> rank,
    "Acomments" => A_COMMENTS));
$smarty -> display ('fabula.tpl');

require_once("includes/foot.php");
?>
