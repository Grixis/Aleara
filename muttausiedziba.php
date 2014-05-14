<?

$title = 'Siedziba Muttau';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$test = $db -> Execute("SELECT meteor FROM minerals WHERE owner=".$player -> id);
$meteor= $test -> fields['meteor'];
$smarty -> assign(array("meteor" => $meteor));
$test = $db -> Execute("SELECT kupmuttau FROM players WHERE id=".$player -> id);
$kupmuttau= $test -> fields['kupmuttau'];
$smarty -> assign(array("kupmuttau" => $kupmuttau));
if ($kupmuttau > 0) {
      error ('<center><IMG SRC="images/locations/lasdusz.png"></center>Możesz tutaj zaglądać tylko raz na dzień! <a href="las.php">(Wróć)</a>');
}
if(isset($_POST['submit']))
{
    switch($_POST['jewel'])
    {
       case 'bles':
            $c = 50;
            $n = 'Bless';
       break;
       case 'soul':
            $c = 50;
            $n = 'Soul';
       break;
       case 'chaos':
            $c = 50;
            $n = 'Chaos';
       break;
    }
    
    if($meteor < $c)
    {
        error('Nie masz tyle sztuk meteorytu!');
    }
        else
    {
        $db -> Execute('UPDATE players SET klejnotmuttaua = klejnotmuttaua + 1 WHERE id = '.$player -> id);
        $db -> Execute('UPDATE players SET kupmuttau = kupmuttau + 1 WHERE id = '.$player -> id);
        $db -> Execute('UPDATE minerals SET meteor = meteor - 50 WHERE owner='.$player -> id);
        error('Otrzymałeś klejnot Muttaua!');
    }
}
    else
{
    
}

$smarty -> display('muttausiedziba.tpl');

require_once('includes/foot.php');
?>
