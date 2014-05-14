<?php

$title = "Forum fablarnych";
require_once("includes/head.php");
require_once("languages/".$player -> lang."/updates.php");
$test = $db->Execute("SELECT forumfab FROM players WHERE id=".$player->id);
$forumfab=$test->fields['forumfab'];
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
	if ($forumfab !="2")
	{
		error("Nasza Mistrzyni Gry nie przyznała Ci możliwości przesiadywania na tym forum.");
	}
	
	
	
	
if (!isset ($_GET['view'])) 
{
    $upd = $db -> SelectLimit("SELECT * FROM updates2 WHERE lang='".$player -> lang."' ORDER BY id DESC", 10);
    if ($player -> rank == 'Admin') 
    {
        $modtext = "(<a href=\"addupdate.php?modify=".$upd -> fields['id']."\">".A_CHANGE."</a>)";
    } 
        else 
    {
        $modtext = '';
    }
    if (isset($upd -> fields['id']))
    {
        $objQuery = $db -> Execute("SELECT id FROM upd_comments2 WHERE updateid=".$upd -> fields['id']);
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
    $upd = $db -> SelectLimit("SELECT * FROM updates2 WHERE lang='".$player -> lang."' ORDER BY id DESC", 10);
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
        if ($player -> rank == 'Admin') 
        {
            $arrmodtext[$i] = "(<a href=\"addupdate.php?modify=".$upd -> fields['id']."\">".A_CHANGE."</a>)";
        } 
            else 
        {
            $arrmodtext[$i] = '';
        }
        $objQuery = $db -> Execute("SELECT id FROM upd_comments2 WHERE updateid=".$upd -> fields['id']);
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
        displaycomments($_GET['text'], 'updates2', 'upd_comments2', 'updateid');
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
        addcomments($_POST['tid'], 'upd_comments2', 'updateid');
    }

    /**
    * Delete comment
    */
    if (isset($_GET['action']) && $_GET['action'] == 'delete')
    {
        deletecomments('upd_comments2');
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
$smarty -> display ('forumfab.tpl');

require_once("includes/foot.php");
?>
