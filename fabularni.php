<?php
$title = "Spis graczy fabularnych";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if(isset($_POST['submit']))
{
    switch($_POST['item'])
    {
       case 'dopisz':
            
            $n = 'Y';
  $m = 'Dopisałeś';
  $o = 'do';
  
       break;
       case 'wypisz':
            
            $n = 'N';
        $m = 'Wypisałeś';  
        $o = 'z';
       
       break;
    
    }

   
    $db -> Execute($query);
    $db -> Execute("UPDATE players SET fabularni='$n' WHERE id=".$player -> id);
    $lol = $db -> Execute('SELECT id FROM players WHERE refs = '.$player -> id);
    $i = 0;
    while(!$lol -> EOF)
    {
        $db -> Execute('UPDATE players SET refs = 0 WHERE id = '.$lol -> fields['id']);
        $i++;
    }
        
    error(''.$m.' się '.$o.' listy graczy grających fabularnie!');
}




if ($player -> level > 0) {
$prisoner = mysql_query("select * from players where gametype='MF' or gametype='F' order by pktfabularne desc");
$number = mysql_num_rows($prisoner);
$smarty -> assign ("Number", $number);
if ($number > 0) {
$arrid = array();
$arrname = array();
$arrpktfabularne = array();
$i = 0;
while ($fabularni = mysql_fetch_array($prisoner)) {
$arrid[$i] = $fabularni['id'];
$arrname[$i] = $fabularni['user'];
$arrpktfabularne[$i] = $fabularni['pktfabularne'];
$i = $i + 1;
}
$smarty -> assign ( array("Id" => $arrid, "Name" => $arrname, "pktfabularne" => $arrpktfabularne));
}
}

$smarty -> assign ( array("Level" => $player -> level));
$smarty -> display ('fabularni.tpl');

require_once("includes/foot.php");
?>

