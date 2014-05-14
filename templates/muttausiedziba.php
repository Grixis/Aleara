<?

$title = 'Siedziba Muttau';
require_once('includes/head.php');
$test = $db -> Execute("SELECT meteor FROM minerals WHERE owner=".$player -> id);
$meteor= $test -> fields['meteor'];
$smarty -> assign(array("meteor" => $meteor));


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
        error('Nie masz pieniędzy!');
    }
        else
    {
        $db -> Execute('UPDATE players SET klejnotmuttaua = klejnotmuttaua + 1 WHERE id = '.$player -> id);
        $db -> Execute('UPDATE minerals SET meteor = meteor - 50 WHERE owner='.$player -> id);
        error('Otrzymałeś jednen klejnot Muttaua!');
    }
}
    else
{
    
}

$smarty -> display('muttausiedziba.tpl');

require_once('includes/foot.php');
?>
