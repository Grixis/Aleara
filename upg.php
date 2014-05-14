<?
/**
* @function: upgrade items
* @author: _th <thion@o2.pl>
* @version: 0.1 alfa
*/

$title = 'Ulepszanie przedmiotów';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
if($player -> pokrzywa <= 0 && $player -> wlos <= 0 && $player -> kora <= 0)
{
    error('Nie masz rekwizytów więc Ci nie pomogę!');
}

if(!@$_GET['act'])
{
    
    $log = $db -> Execute("SELECT * FROM equipment WHERE ulepszeniee=0 AND status='U' AND owner=".$player -> id." ORDER BY id DESC");
    $arrtext = array();
    $arrmuu = array();
    $arrzre = array();
    $arrszyy = array();
    $arrwytt = array();
    $arrdate = array();
    $i = 0;
    while (!$log -> EOF)
    {
        if($player -> wlos > 0) $wlos = '<a href="?act=s&item='.$log -> fields['id'].'">Użyj rekwizytu: Włos Krutyna (staty+20%)</a><br>';
        if($player -> pokrzywa > 0) $pokrzywa = '<a href="?act=b&item='.$log -> fields['id'].'">Użyj rekwizytu: Pokrzywa życja (staty+10%)</a><br><br>';
        if($player -> kora > 0) $kora = '<a href="?act=c&item='.$log -> fields['id'].'">Użyj rekwizytu: Kora z przeklętego dębu (staty+30%)</a><br>';
          
        $arrtext[$i] = $log -> fields['name'];
        $arrmuu[$i] = $log -> fields['power'];
        $arrzre[$i] = $log -> fields['zr'];
        $arrszyy[$i] = $log -> fields['szyb'];
        $arrwytt[$i] = $log -> fields['maxwt'];
        
        
        $arrdate[$i] = '<br> '.$pokrzywa.' '.$wlos.' '.$kora.' ';
        $log -> MoveNext();
        $i++;
    }
    
    $log -> Close();
    
    $smarty -> assign(array('Date' => $arrdate,
            'Muu' => $arrmuu,
            'Zre' => $arrzre,
            'Szy' => $arrszyy,
            'Wyt' => $arrwytt,
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
       
        $item = $db -> Execute('SELECT * FROM equipment WHERE id = '.$_GET['item'].' AND status="U" AND owner = '.$player -> id);
        if(!$item)
        {
            error('Taki przedmiot nie istnieje!');
        }
         if ($item -> fields['ulepszeniee'] == '1') 
            {
                error ("Nie możesz ulepszyć drugi raz tego samego przedmiotu!");
            }
       
        switch($_GET['act'])
        {
            case 'b':
                 $p = $item -> fields['power'] / 5 ;
                 $w = $item -> fields['maxwt'] / 5 ;
                 $z = $item -> fields['zr'] / 5 ;
                 $s = $item -> fields['szyb'] / 5 ;
                 $n = 'pokrzywa';
            break;
            case 'c':
                 $p = $item -> fields['power'] / 3 ;
                 $w = $item -> fields['maxwt'] / 3 ;
                 $z = $item -> fields['zr'] / 3 ;
                 $s = $item -> fields['szyb'] / 3 ;
                 $n = 'kora';
            break;
            case 's':
                 $p = $item -> fields['power'] / 4 ;
                 $w = $item -> fields['maxwt'] / 4 ;
                 $z = $item -> fields['zr'] / 4 ;
                 $s = $item -> fields['szyb'] / 4 ;
                 $n = 'wlos';
            break;
        }
           
        $db -> Execute('UPDATE equipment SET power = power +'.$p.', ulepszeniee = ulepszeniee + 1 WHERE id = '.$item -> fields['id']);
        $db -> Execute('UPDATE equipment SET maxwt = maxwt + '.$w.' WHERE id = '.$item -> fields['id']);
        $db -> Execute('UPDATE equipment SET zr = zr + '.$z.' WHERE id = '.$item -> fields['id']);
        $db -> Execute('UPDATE equipment SET szyb = szyb +'.$s.' WHERE id = '.$item -> fields['id']);
        
        
        
        
        
        $db -> Execute('UPDATE players SET '.$n.' = '.$n.' - 1 WHERE id = '.$player -> id);
        
        error('Moc/Atak/Obraona '.$item -> fields['name'].' podniesiona o +'.$p.', max wytrzymałość podniesiona o +'.$w.', zręczność  +'.$z.', szybkość +'.$s.' ');
        
        $item -> Close;
        
    }
}
    else
{
    error('Co chciałeś tu robić?');
}

require_once('includes/foot.php');
?>
