<?
/**
* @function: upgrade items
* @author: _th <thion@o2.pl>
* @version: 0.1 alfa
*/

$title = 'Ulepszanie przedmiotów';
require_once('includes/head.php');

if($player -> pokrzywa <= 0 && $player -> wlos <= 0 && $player -> kora <= 0)
{
    error('Nie rekwizytów więc Ci nie pomogę!');
}

if(!@$_GET['act'])
{
    
    $log = $db -> Execute("SELECT * FROM equipment WHERE ulepszeniee=0 AND power > 0 AND owner=".$player -> id." ORDER BY id DESC");
    $arrtext = array();
    $arrmuu = array();
    $arrdate = array();
    $i = 0;
    while (!$log -> EOF)
    {
        if($player -> wlos > 0) $wlos = '<a href="?act=s&item='.$log -> fields['id'].'">Użyj rekwizytu: Włos Krutyna (moc+30%)</a><br>';
        if($player -> pokrzywa > 0) $pokrzywa = '<a href="?act=b&item='.$log -> fields['id'].'">Użyj rekwizytu: Pokrzywa życja (moc+20%)</a><br><br>';
        if($player -> kora > 0) $kora = '<a href="?act=c&item='.$log -> fields['id'].'">Użyj rekwizytu: Kora z przeklętego bębu (moc+50%)</a><br>';
          
        $arrtext[$i] = $log -> fields['name'];
        $arrmuu[$i] = $log -> fields['power'];
        
        $arrdate[$i] = '<br> '.$pokrzywa.' '.$wlos.' '.$kora.' ';
        $log -> MoveNext();
        $i++;
    }
    
    $log -> Close();
    
    $smarty -> assign(array('Date' => $arrdate,
            'Muu' => $arrmuu,
            'Text' => $arrtext));
    
    $smarty -> display('upg.tpl');
}
    elseif($_GET['act'] == 's' || $_GET['act'] == 'c' || $_GET['act'] == 'b')
{
    if(isset($_GET['item']))
    {
        if(!eregi('[[:digit:]]', $_GET['item']))
        {
            error('Niepoprawne id przedmiotu!');
        }
       
        $item = $db -> Execute('SELECT * FROM equipment WHERE id = '.$_GET['item'].' AND owner = '.$player -> id);
        if(!$item)
        {
            error('Taki przedmiot nie istnieje!');
        }
         if ($item -> fields['ulepszeniee'] > '0') 
            {
                error ("Nie możesz ulepszyć drugi raz tego samego przedmiotu!");
            }
       
        switch($_GET['act'])
        {
            case 'b':
                 $p = $item -> fields['power'] / 4 ;
                 $n = 'pokrzywa';
            break;
            case 'c':
                 $p = $item -> fields['power'] / 2 ;
                 $n = 'kora';
            break;
            case 's':
                 $p = $item -> fields['power'] / 3 ;
                 $n = 'wlos';
            break;
        }
           
        $db -> Execute('UPDATE equipment SET power=power+'.$p.', ulepszeniee=ulepszeniee+1  WHERE id = '.$item -> fields['id']);
        $db -> Execute('UPDATE players SET '.$n.' = '.$n.' - 1 WHERE id = '.$player -> id);
        
        error('Moc '.$item -> fields['name'].' podniesiona o +'.$p.'!');
        
        $item -> Close;
        
    }
}
    else
{
    error('Co chciałeś tu robić?');
}

require_once('includes/foot.php');
?>
