<?php
$title="Kuchnia";
require_once("includes/head.php");
require_once ("includes/funkcje.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if($player -> location != 'Altara')
{
	error ('Nie znajdujesz się w Alearze! <a href=travel.php>(Wróć)</a>');
}
//$grzyby = $db -> Execute("SELECT grzyby FROM players WHERE id=".$player -> id);
$wynik = mysql_query("SELECT gotow, grzyby, ryby, ziemniaki, gotowanie FROM players WHERE id=".$player->id);
$tag=mysql_fetch_array($wynik);
$gotow=$tag['gotow'];
$grzyby=$tag['grzyby'];
$ryby=$tag['ryby'];
$ziemniaki=$tag['ziemniaki'];
$gotowanie=$tag['gotowanie'];
if (isset($_GET['akcja']))
{
    if ($player -> hp <=0)
    {
        error("Jesteś martwy");
    }
    if ($player -> location !='Altara' and $player-> location !='Ardulith')
    {
        error("Nie jesteś w mieście");
    }
    if ($gotow > 4) 
    {
        error ("Z kuchni można korzystać tylko pięć razy na reset.");
    }
}
if (isset ($_GET['akcja']) && $_GET['akcja'] == 'grzyby')
{
    if ($grzyby < 20)
    {
        error("Masz za mało grzybów - na dobrą zupę potrzebujesz 20 grzybków");
    }
    $chance=(80*$gotowanie)/1.5;
    $roll=rand(1,100);
   // print($chance.'-'.$roll);
    if ($chance>$roll)
    {
        $gainenergy=round(log($gotowanie,2),2)*1.5;
        if ($gainenergy <=0)
        {
            $gainenergy=0.5;
        }
        $fltAbility=0.03;
        if ($player->clas == 'Rzemieślnik')
        {
            $fltAbility*=2;
        }
        $db -> Execute("UPDATE players SET grzyby=grzyby-20, gotow=gotow+1, gotowanie=gotowanie+".$fltAbility.", energy=energy+".$gainenergy." WHERE id=".$player->id);
		error ("Ugotowałeś niezłą zupę. Zyskujesz ".$gainenergy." energii oraz ".$fltAbility." do umiejętności gotowanie");
    }
    else
    {
        $fltAbility=0.01;
        if ($player->clas == 'Rzemieślnik')
        {
            $fltAbility*=2;
        }
        $db -> Execute("UPDATE  players SET grzyby=grzyby-20, gotow=gotow+1, gotowanie=gotowanie+".$fltAbility." WHERE id=".$player->id);
        $no=rand(1,3);

        switch($no)
        {
            case(1): error ("Ugotowałeś zupę ale okazała się niezbyt pożywna. Zyskujesz ".$fltAbility." do umiejętności gotowanie"); break;
            case(2): error ("Ugotowałeś zupę ale któryś ze składników okazał się nieświeży. Zwymiotowałeś ale czujesz się dobrze. Zyskujesz ".$fltAbility." do umiejętności gotowanie"); break;
            case(3): error ("Ugotowałeś zupę ale przesadziłeś z solą, przez co nie dało się jej zjeść. Zyskujesz ".$fltAbility." do umiejętności gotowanie"); break;
        }
        
        
    }
}
if (isset ($_GET['akcja']) && $_GET['akcja'] == 'ryby') {
    if ($ryby < 5)
    {
        error("Masz za mało ryb - na jedno danie potrzebujesz 5 ryb");
    }
    $chance=(80*$gotowanie);
    $roll=rand(1,100);
    //print($chance.'-'.$roll);
    if ($chance>$roll)
    {
        $gainenergy=round(log($gotowanie,2),2);
        if ($gainenergy <=0)
        {
            $gainenergy=0.5;
        }
        $fltAbility=0.03;
        if ($player->clas == 'Rzemieślnik')
        {
            $fltAbility*=2;
        }
        $db -> Execute("UPDATE players SET ryby=ryby-5, gotow=gotow+1, gotowanie=gotowanie+".$fltAbility.", energy=energy+".$gainenergy." WHERE id=".$player->id);
		error ("Przygotowałeś niezłą smażoną rybę. Zyskujesz ".$gainenergy." energii oraz ".$fltAbility." do umiejętności gotowanie");
    }
    else
    {
        $fltAbility=0.01;
        if ($player->clas == 'Rzemieślnik')
        {
            $fltAbility*=2;
        }
        $db -> Execute("UPDATE  players SET ryby=ryby-5,gotow=gotow+1, gotowanie=gotowanie+".$fltAbility." WHERE id=".$player->id);
        $no=rand(1,3);
        switch($no)
        {
            case(1): error ("Usmażyłeś rybę ale była niesmaczna. Zyskujesz ".$fltAbility." do umiejętności gotowanie"); break;
            case(2): error ("Zamyśliłeś się i niestety danie się przypaliło. Zyskujesz ".$fltAbility." do umiejętności gotowanie"); break;
            case(3): error ("Ryba rozpadła się podczas gotowania. Zyskujesz ".$fltAbility." do umiejętności gotowanie"); break;
        }
        
        
    }
}
  
  if (isset ($_GET['akcja']) && $_GET['akcja'] == 'wodka') {
  
  if ($ziemniaki < 20)
    {
        error("Aby wytworzyć wódkę o odpowiedniej mocy potrzebujesz 20 ziemniaków.");
    }
    $chance=(80*$gotowanie)/2;
    $roll=rand(1,100);
    //print($chance.'-'.$roll);
    if ($chance>$roll)
    {
        $gainenergy=round(log($gotowanie,2),2)*2;
        if ($gainenergy <=0)
        {
            $gainenergy=0.5;
        }
        $fltAbility=0.03;
        if ($player->clas == 'Rzemieślnik')
        {
            $fltAbility*=2;
        }
        $db -> Execute("UPDATE players SET ziemniaki=ziemniaki-20, gotow=gotow+1, gotowanie=gotowanie+".$fltAbility.", energy=energy+".$gainenergy." WHERE id=".$player->id);
		error ("Niezła flaszka która dodała ci wigoru. Zyskujesz ".$gainenergy." energii oraz ".$fltAbility." do umiejętności gotowanie");
    }
    else
    {
        $fltAbility=0.01;
        if ($player->clas == 'Rzemieślnik')
        {
            $fltAbility*=2;
        }
        $db -> Execute("UPDATE  players SET ziemniaki=ziemniaki-20,gotow=gotow+1, gotowanie=gotowanie+".$fltAbility." WHERE id=".$player->id);
        $no=rand(1,3);
        switch($no)
        {
            case(1): error ("Niestety pomyliłeś recepturę i zamiast flaszki wyszedł niezidentyfikowany płyn. Zyskujesz ".$fltAbility." do umiejętności gotowanie"); break;
            case(2): error ("Mocne to to nie było. Zyskujesz ".$fltAbility." do umiejętności gotowanie"); break;
            case(3): error ("Kiedy gotowałeś zgodnie z recepturą, okazało się że za bardzo podgrzałeś piec w wyniku czego część mocy trunku wyparowała. Zyskujesz ".$fltAbility." do umiejętności gotowanie"); break;
        }
        
        
    }
}
// inicjalizacja zmiennej
if (!isset($_GET['akcja'])) {
  $_GET['akcja'] = '';
}

$smarty -> display('kuchnia.tpl');
require_once("includes/foot.php");
?>
