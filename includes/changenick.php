<?php

$smarty -> assign(array('Info' => INFO,
                        'Changename1' => CHANGE_NAME1,
                        'Changename2' => CHANGE_NAME2,
                        'Changereason' => CHANGE_REASON,
                        'Defaultname' => DEFAULT_NAME,
                        'Save' => SAVE,
                        'Reason1' => DEFAULT1,
                        'Editprofile' => EDIT_PROFILE,
                        'Edit' => EDIT,
                        'Saveprofile' => SAVE_PROFILE,
                        'Reason2' => DEFAULT2,
                        'Reason3' =>DEFAULT3,
                        'Setid' => SET_ID,
                        'Newrank' => NEW_RANK,
                        'RMember' => R_MEMBER,
                        'RBeggar' => R_BEGGAR,
                        'RVillain' => R_VILLAIN,
                        'DescMember' => DESC_MEMBER,
                        'DescBeggar' => DESC_BEGGAR,
                        'DescVillain' => DESC_VILLAIN));

if (isset($_GET['action']))
{
/**
* General error protection.
*/
    if (!ereg('^[1-9][0-9]*$', $_POST['id']))
    {
         error (ERROR);
    }
    $objTest = $db -> Execute('SELECT count(*) FROM `players` WHERE `id`='.$_POST['id']);
    if (!$objTest -> fields['count(*)'] || $objTest -> fields['count(*)'] != 1)
    {
        error (INVALID_ID);
    }
    $objTest -> Close();
    if(isset($_POST['reason']))
    {
        $_POST['reason'] = str_replace("'","&apos;",strip_tags($_POST['reason']));
    }
/**
* Change nickname.
* Two (and more) players can have same nick (unlike account options). This allows to use "default nick".
*/
    if ($_GET['action'] == 'nick')
    {
        if (empty ($_POST['name']))
        {
            error (EMPTY_NAME);
        }
        $_POST['name'] = str_replace("'",'',strip_tags($_POST['name']));
        if ($_POST['name'] == 'Admin' || $_POST['name'] == 'Staff' || empty($_POST['name']) || !ereg('[[:graph:]]', $_POST['name']))
        {
            error (ERROR);
        }
        $db -> Execute('UPDATE `players` SET `user`=\''.$_POST['name'].'\' WHERE `id`='.$_POST['id']);
        $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$_POST['id'].',\''.YOUR_NICK_WAS_CHANGED_BY.' <b><a href="view.php?view='.$player -> id .'">'.$player -> user.'</a></b>, ID <b>'.$player -> id.'</b>. '.CHANGE_REASON.':  '.$_POST['reason'].'\','.$db -> DBDate($newdate).')');
        error (YOU_CHANGE.' '.$_POST['id'].' '.CHANGE_NAME2.' <b>'.$_POST['name'].'</b>.');
    }
    if ($_GET['action'] == 'profile')
    {
        $objProfile = $db -> Execute('SELECT `user`, `profile` from `players` WHERE `id`='.$_POST['id']);
        require_once('includes/bbcode.php');
        $strProfile = htmltobbcode($objProfile -> fields['profile']);
        $smarty -> assign(array('Currentinfo' => CURRENTINFO,
                                'Victimname' => $objProfile -> fields['user'],
                                'VictimID' => $_POST['id'],
                                'Current' => $objProfile -> fields['profile'],
                                'Editable' =>$strProfile));
        if (!empty($_POST['profile']))
        {
            $_POST['profile'] = bbcodetohtml($_POST['profile']);
            $strProfile = $db -> qstr($_POST['profile'], get_magic_quotes_gpc());
            $db -> Execute('UPDATE `players` SET `profile` = '.$strProfile.' WHERE `id` = '.$_POST['id']);
            $db -> Execute('INSERT INTO `log` (`owner`, `log`, `czas`) VALUES('.$_POST['id'].',\''.YOUR_PROFILE_WAS_CHANGED_BY.' <b><a href="view.php?view='.$player -> id .'">'.$player -> user.'</a></b>, ID <b>'.$player -> id.'</b>. '.CHANGE_REASON.':  '.$_POST['reason'].'\','.$db -> DBDate($newdate).')');
            error (YOU_CHANGED_PROFILE.' <b><a href="view.php?view='.$_POST['id'].'">'.$objProfile -> fields['user'].'</a></b>, ID <b>'.$_POST['id'].'</b>.');
        }
    }
    if ($_GET['action'] == 'rank' && $_POST['id'] != 1)
    {
        if ($_POST['rank'] != R_MEMBER && $_POST['rank'] != R_BEGGAR && $_POST['rank'] != 'Barbarzyńca')
        {
            error (WRONG_RANK);
        }
        $objTest2 =$db -> Execute('SELECT `rank` FROM `players` WHERE `id`='.$_POST['id']);
      
        $strRank = $db -> qstr($_POST['rank'], get_magic_quotes_gpc());
        $db -> Execute('UPDATE `players` SET `rank`='.$strRank.' WHERE `id`='.$_POST['id']);
        $arrDescriptions = array("Member" => "Mieszkaniec",
                                 R_BEGGAR => DESC_BEGGAR,
                                 R_VILLAIN => DESC_VILLAIN);
        error (YOU_ADD_R.' '.$_POST['id'].' '.NEW_RANK.' '.$arrDescriptions[$_POST['rank']].'.');
    }
}
?>
