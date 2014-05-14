<?php

$title = "Rozmowa z NPC w Opuszczonej Kopalni";
require_once("includes/head.php");
require_once("includes/funkcje.php");
require_once("includes/turnfight.php");
require_once("includes/battle.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
require_once("languages/".$player -> lang."/wnetrzekopalni2.php");
$test = $db -> Execute("SELECT kluczaktywny FROM players WHERE id=".$player -> id);
$kluczaktywny= $test -> fields['kluczaktywny'];
$smarty -> assign(array("kluczaktywny" => $kluczaktywny));
$test = $db -> Execute("SELECT user FROM players WHERE id=666");
$user= $test -> fields['user'];
$smarty -> assign(array("user" => $user));
if ($kluczaktywny < 1) {
      error ('<center><IMG SRC="szybrogotona.png"></center>Nie otworzyłeś jeszcze drzwi. Nie przejdziesz na skróty ^^! <a href="las.php">(Wróć)</a>');
}

if (isset($_GET['action']) && $_GET['action'] == 'moutains') 
{
    if (isset($_GET['step']) && $_GET['step'] == 'first') 
    {
        
		$_SESSION['bridge'] = 1;
        $smarty -> assign(array("Fquestion" => F_QUESTION,
                                "Anext" => A_NEXT));
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'second') 
    {
        if (!isset($_SESSION['bridge']) || $_SESSION['bridge'] != 1 || $player -> hp <= 0) 
        {
            error(ERROR);
        }
		$answer = strip_tags($_POST['fanswer']);
        if ($answer == 126) 
        {
			$_SESSION['bridge'] = 2;
            $smarty -> assign (array("Answer" => "true",
                                     "Squestion" => S_QUESTION,
                                     "Anext" => A_NEXT));
        } 
        else 
        {
			unset($_SESSION['bridge']);
			
            $smarty -> assign (array("Answer" => "false",
                                     "Qfail" => Q_FAIL));
        }
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'third') 
    {
        if (!isset($_SESSION['bridge']) || $_SESSION['bridge'] != 2 || $player -> hp <= 0) 
        {
            error(ERROR);
        }
        if (!isset($_POST['sanswer'])) 
        {
            $_POST['sanswer'] = '';
        }
        $answer = strip_tags($_POST['sanswer']);
        $answer = strtolower($answer);
        $gamename = strtolower($gamename);
        $test = $db -> Execute("SELECT user FROM players WHERE id=666");
$user= $test -> fields['user'];
$smarty -> assign(array("user" => $user));
        if ($answer == 457) 
        {
			$_SESSION['bridge'] = 3;
            $query = $db -> Execute("SELECT `id` FROM `koopalnia`");
            $amount = $query -> RecordCount();
            $query -> Close();
            $number = rand(1,$amount);
            $test = $db -> Execute("SELECT `temp` FROM `players` WHERE `id`=".$player -> id);
            if ($test -> fields['temp'] != 0) 
            {
                $number = $test -> fields['temp'];
            }
            $test -> Close();
            $question = $db -> Execute("SELECT `question` FROM `koopalnia` WHERE `id`=".$number);
            $db -> Execute("UPDATE `players` SET `temp`=".$number." WHERE `id`=".$player -> id);
            $smarty -> assign(array("Question" => $question -> fields['question'], 
                                    "Number" => $number, 
                                    "Answer" => "true",
                                    "Tquestion" => T_QUESTION,
                                    "Anext" => A_NEXT));
            $question -> Close();
        } 
            else 
        {
			unset($_SESSION['bridge']);
            
            $smarty -> assign(array("Answer" => "false",
                                    "Qfail" => Q_FAIL));
        }
    }
    if (isset ($_GET['step']) && $_GET['step'] == 'forth') 
    {
        if (!isset($_SESSION['bridge']) || $_SESSION['bridge'] != 3 || $player -> hp <= 0) 
        {
            error(ERROR);
        }
		unset($_SESSION['bridge']);
        if (!isset($_POST['tanswer'])) 
        {
            $_POST['tanswer'] = '';
        }
        if (!isset($_POST['number'])) 
        {
            $_POST['number'] = 1;
        }
        $answer = $db -> Execute("SELECT `answer` FROM `koopalnia` WHERE `id`=".$_POST['number']);
        
       
        $panswer = strip_tags($_POST['tanswer']);
        $panswer = strtolower($panswer);
        $answer -> fields['answer'] = strtolower($answer -> fields['answer']);
        if ($panswer == $answer -> fields['answer']) 
        {
            $query = $db -> Execute("SELECT count(*) FROM `equipment` WHERE `owner`=0 AND `minlev`<=".$player -> level);
            $amount = $query -> fields['count(*)'];
            $query -> Close();
            $roll = rand (0, ($amount-1));
            $arritem = $db -> SelectLimit("SELECT * FROM `equipment` WHERE `owner`=0", 1, $roll);
            $test = $db -> Execute("SELECT `id` FROM `equipment` WHERE `name`='".$arritem -> fields['name']."' AND `wt`=".$arritem -> fields['maxwt']." AND `type`='".$arritem -> fields['type']."' AND `status`='U' AND `owner`=".$player -> id." AND `power`=".$arritem -> fields['power']." AND `zr`=".$arritem -> fields['zr']." AND `szyb`=".$arritem -> fields['szyb']." AND `maxwt`=".$arritem -> fields['maxwt']." AND `cost`=1 AND `poison`=0");
            if (!$test -> fields['id']) 
            {
               
            } 
            else 
            {
                
            }
            $test -> Close();
            $db -> Execute("UPDATE `players` SET `bridge`='Y' WHERE `id`=".$player -> id);
            $smarty -> assign(array("Answer" => "true", 
                                   
                                    "Qsucc" => Q_SUCC));
                                    
        } 
        else 
        {
           
            $smarty -> assign(array("Answer" => "false",
                                    "Qfail" => Q_FAIL));
        }
    }
}


/**
* Initialization of variables
*/
if (!isset($_GET['step'])) 
{
    $_GET['step'] = '';
}
if (!isset($_GET['action']))
{
    $_GET['action'] = '';
}
if (!isset($rzut)) 
{
    $rzut = '';
}

$smarty -> assign(array("Step" => $_GET['step'], 
                        "Fight" => $player -> fight, 
                        "Action" => $_GET['action'],
                        "Location" => $player -> location, 
                        "Roll" => $rzut,
                        "Health" => $player -> hp));
$smarty -> display('wnetrzekopalni.tpl');

require_once("includes/foot.php");
?>
