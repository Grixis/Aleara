<?

/**
 *   File functions:
 *   Console - cheats and tricks
 *
 *   @name                 : code.php
 *   @copyright            : (C) 2005 thion
 *   @author               : thion <thion@o2.pl>
 *   @version              : 0.1.3 beta
 *   @since                : 28.12.2005
 *
 */
 
/**
* Site title and header
*/
$title = 'Wieża Druida';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
require_once('languages/'.$player -> lang.'/code.php');

      $test = $db -> Execute("SELECT ostatni FROM codes");
            $ostatni= $test -> fields['ostatni'];
            $smarty -> assign(array("ostatni" => $ostatnie));
            
            $test = $db -> Execute("SELECT user FROM players WHERE id=".$ostatni);
            $user= $test -> fields['user'];
            $smarty -> assign(array("user" => $user));
            
            
            $test = $db -> Execute("SELECT jaki FROM codes");
            $jaki= $test -> fields['jaki'];
            $smarty -> assign(array("jaki" => $jaki));
              $test = $db -> Execute("SELECT naco FROM codes");
            $naco= $test -> fields['naco'];
            $smarty -> assign(array("naco" => $naco));
            
            
$smarty -> assign(array('Info' => INFO,
        'Code' => CODE,
        'Submit' => SUBMIT));

if(@$_GET['act'] == 'result')
{
      
            
            
            
            
            
            
    if(isset($_POST['submit']))
    {
        $console = $db -> Execute('SELECT * FROM codes');
        if($_POST['code'] == $console -> fields['c1'])
        {
            /**
            * Add hp (+5); if player has got luck console adds 10 hp
            */
            $roll = rand(1,1348);
            $rand = rand(1000, 1348);
            if($roll == $rand)
            {
                $lucker = 50;
            }
                else
            {
                $lucker = 50;
            }
            $test = $db -> Execute("SELECT ostatni FROM codes");
            $ostatni= $test -> fields['ostatni'];
            $test = $db -> Execute("SELECT user FROM players WHERE id=".$ostatni);
            $user= $test -> fields['user'];
            $db -> Execute('UPDATE players SET max_hp=max_hp+'.$lucker.' WHERE id='.$player -> id);
            $db -> Execute('UPDATE codes SET ostatni='.$player -> id);
            $db -> Execute('UPDATE codes SET jaki='.$_POST['code'].'');
            $db -> Execute('UPDATE codes SET naco="maksymalny poziom zycia"');
             $roll = rand(1, 13480);
        $db -> Execute('UPDATE codes SET c1='.$roll);
        
        $roll2 = rand(1,13408);
        $db -> Execute('UPDATE codes SET c2='.$roll2);
        
        $roll3 = rand(1,13084);
        $db -> Execute('UPDATE codes SET c3='.$roll3);
            $smarty -> assign('Result', RESULT1);
        }
            elseif($_POST['code'] == $console -> fields['c2'])
        {
            /**
            * Add strength (+5); if players has got luck console adds 10 str
            */
            $roll = rand(1,1348);
            $rand = rand(1000, 1348);
            if($roll == $rand)
            {
                $lucker = 50;
            }
                else
            {
                $lucker = 50;
            }

            $db -> Execute('UPDATE players SET strength=strength+'.$lucker.' WHERE id='.$player -> id);
          $db -> Execute('UPDATE codes SET ostatni='.$player -> id);
           $db -> Execute('UPDATE codes SET jaki='.$_POST['code'].'');
           $db -> Execute('UPDATE codes SET naco="siłę"');
            $roll = rand(1, 13480);
        $db -> Execute('UPDATE codes SET c1='.$roll);
        
        $roll2 = rand(1,13408);
        $db -> Execute('UPDATE codes SET c2='.$roll2);
        
        $roll3 = rand(1,13084);
        $db -> Execute('UPDATE codes SET c3='.$roll3);
            $smarty -> assign('Result', RESULT2);
        }
            elseif($_POST['code'] == $console -> fields['c3'])
        {
            /**
            * Add agility (+5); if players has got luck console adds 10 agility
            */
            $roll = rand(1,1348);
            $rand = rand(1000, 1348);
            if($roll == $rand)
            {
                $lucker = 50;
            }
                else
            {
                $lucker = 50;
            }

            $db -> Execute('UPDATE players SET agility=agility+'.$lucker.' WHERE id='.$player -> id);
         $db -> Execute('UPDATE codes SET ostatni='.$player -> id);
          $db -> Execute('UPDATE codes SET jaki='.$_POST['code'].'');
          $db -> Execute('UPDATE codes SET naco="zręczność"');
          
           $roll = rand(1, 13480);
        $db -> Execute('UPDATE codes SET c1='.$roll);
        
        $roll2 = rand(1,13408);
        $db -> Execute('UPDATE codes SET c2='.$roll2);
        
        $roll3 = rand(1,13084);
        $db -> Execute('UPDATE codes SET c3='.$roll3);
            $smarty -> assign('Result', RESULT3);
        }
            else
        {
            $smarty -> assign('Result', RESULT4);
        }
        
      
       
    }
}

/**
* I don't know... What's this? |^_^| thin, you must edit this comment!
*/
if (!isset($_GET['act']))
{
    $_GET['act'] = '';
}

/**
* Assign variables and display page
*/
$smarty -> assign('Action', $_GET['act']);
$smarty -> display('code.tpl');

/**
* End of script and site footer
*/
require_once('includes/foot.php');
?>
