<?php
$title = 'Altara';
require_once('includes/head.php');
if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}
$test = $db -> Execute("SELECT sta FROM players WHERE id=".$player -> id);
$sta = $test -> fields['sta'];
$smarty -> assign(array("sta" => $sta));
if($sta > 0)
{
	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Masz już jedną runę. Więcej nie możesz wziąć. <a href="przekletajaskinia.php">Wracasz...</a>');
}
$test = $db -> Execute("SELECT nov FROM runy");
$nov = $test -> fields['nov'];
$smarty -> assign(array("nov" => $nov));

if($nov == '<font color=green>AKTYWNA</font>')
{
	error ('<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Podnosisz runę, lecz orientujesz się że jest to runa nov którą już ktoś z Twojej drużyny odnalazł. <a href="przekletajaskinia.php">Wracasz...</a>');
}

if(isset($_POST['submit']))
{
    switch($_POST['item'])
    {
       case 'credits':
            
            $db -> Execute("UPDATE players SET sta=sta+1 WHERE id =".$player -> id);
            $db -> Execute("UPDATE players SET nov=nov+1 WHERE id =".$player -> id);
            $db -> Execute('UPDATE runy SET nov="<font color=green>AKTYWNA</font>"');
            
           
       break;
    }
   
    error('Otrzymałeś runę <b>nov</b><a href="przekletajaskinia.php"> Wracam...</a>');
}

$smarty -> display ('nov.tpl');

require_once('includes/foot.php');
?>
	