<?php

$title = 'Podklasy';
require_once('includes/head.php');
$test = $db -> Execute("SELECT level FROM players WHERE `id`=".$player -> id);
$level = $test -> fields['level'];
$smarty -> assign(array("level" => $level));
$test = $db -> Execute("SELECT podklasa FROM players WHERE `id`=".$player -> id);
$podklasa = $test -> fields['podklasa'];
$smarty -> assign(array("podklasa" => $podklasa));

if($podklasa != 'Nie wybrano')
{
    error('Masz już podklasę! <a href="stats.php">(wróć)</a>');
}

if(isset($_POST['submit']))
{
    switch($_POST['item'])
{
case 'Łotr':
$n = 'Łotr';
$c = 'Łotr';
break;
case 'Strzelec':
$n = 'Strzelec';
$c = 'Strzelec';
$c = 'Rycerz';
$db -> Execute("UPDATE players SET shoot=shoot+50 WHERE id=".$player -> id);
break;
case 'Rycerz':
$n = 'Rycerz';
$c = 'Rycerz';
$db -> Execute("UPDATE players SET atak=atak+50 WHERE id=".$player -> id);
break;
case 'Voodoo':
$n = 'Voodoo';
$c = 'Voodoo';
$db -> Execute("UPDATE players SET magia=magia+50 WHERE id=".$player -> id);
break;
case 'Nekromanta':
$n = 'Nekromanta';
$c = 'Nekromanta';
break;
case 'Szpieg':
$n = 'Szpieg';
$c = 'Szpieg';
break;
case 'Skrytobójca':
$n = 'Skrytobójca';
$c = 'Skrytobójca';
$db -> Execute("UPDATE players SET unik=unik+50 WHERE id=".$player -> id);
$db -> Execute("UPDATE players SET agility=agility+50 WHERE id=".$player -> id);
break;
case 'Tropiciel':
$n = 'Tropiciel';
$c = 'Tropiciel';
$db -> Execute("UPDATE players SET unik=unik+150 WHERE id=".$player -> id);
break;
case 'Pirat':
$n = 'Pirat';
$c = 'Pirat';
break;
case 'Krwiopijca':
$n = 'Krwiopijca';
$c = 'Krwiopijca';
break;
case 'Podróżnik':
$n = 'Podróżnik';
$c = 'Podróżnik';
break;
case 'Akcjonariusz':
$n = 'Akcjonariusz';
$c = 'Akcjonariusz';
break;
case 'Handlarz':
$n = 'Handlarz';
$c = 'Handlarz';
break;
case 'Kapłan':
$n = 'Kapłan';
$c = 'Kapłan';
break;
case 'Jasnowidz':
$n = 'Jasnowidz';
$c = 'Jasnowidz';
break;
case 'Kucharz':
$n = 'Kucharz';
$c = 'Kucharz';
$db -> Execute("UPDATE players SET gotowanie=gotowanie+50 WHERE id=".$player -> id);
break;
case 'Hutnik':
$n = 'Hutnik';
$c = 'Hutnik';
$db -> Execute("UPDATE players SET hutnictwo=hutnictwo+50 WHERE id=".$player -> id);
break;
case 'Drwal':
$n = 'Drwal';
$c = 'Drwal';
$db -> Execute("UPDATE players SET lumberjack=lumberjack+50 WHERE id=".$player -> id);
break;
case 'Górnik':
$n = 'Górnik';
$c = 'Górnik';
$db -> Execute("UPDATE players SET mining=mining+50 WHERE id=".$player -> id);
break;
case 'Hodowca':
$n = 'Hodowca';
$c = 'Hodowca';
$db -> Execute("UPDATE players SET breeding=breeding+50 WHERE id=".$player -> id);
break;
case 'Jubiler':
$n = 'Jubiler';
$c = 'Jubiler';
$db -> Execute("UPDATE players SET jeweller=jeweller+100 WHERE id=".$player -> id);
break;
case 'Farmer':
$n = 'Farmer';
$c = 'Farmer';
$db -> Execute("UPDATE players SET herbalist=herbalist+50 WHERE id=".$player -> id);
break;
case 'Alchemik':
$n = 'Alchemik';
$c = 'Alchemik';
$db -> Execute("UPDATE players SET alchemia=alchemia+50 WHERE id=".$player -> id);
break;
case 'Stolarz':
$n = 'Stolarz';
$c = 'Stolarz';
$db -> Execute("UPDATE players SET fletcher=fletcher+50 WHERE id=".$player -> id);
break;
case 'Kowal':
$n = "Kowal";
$c = 'Kowal';
$db -> Execute("UPDATE players SET ability=ability+50 WHERE id=".$player -> id);
break;

}
    
    $db -> Execute("UPDATE players SET podklasa='$n' WHERE id=".$player -> id);
  $db -> Execute("UPDATE players SET podklasaa='$n' WHERE id=".$player -> id);

    error('Wybrałeś podklasę: <b>'.$n.'</b>!   <a href="card.php?action=deity">Teraz wybierz wyznanie</a>');
}

// Dla tych którzy chcą podklasę z poza listy.




   
    $smarty -> assign ('Body', $body);
    if (isset ($_GET['step']) && $_GET['step'] == 'send')
    {
        
        
        
        $_POST['body']=  strip_tags($_POST['body']);
        //$strBody = $db -> qstr($_POST['body'], get_magic_quotes_gpc());
        $db -> Execute("UPDATE players set podklasaa='".$_POST['body']."' where id=".$player -> id);
        
        error ('Wybrałeś podklasę.  <a href="card.php?action=deity">Teraz wybierz wyznanie</a>');
    }





if (!isset($_GET['send']))
{
    $_GET['send'] = '';
}
if (!isset($_GET['step']))
{
    $_GET['step'] = '';
}


$smarty -> display('podklasa.tpl');
require_once('includes/foot.php');

?>
