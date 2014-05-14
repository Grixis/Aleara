<?php
$title="Zagajnik Szamanów";
require_once("includes/head.php");
require_once ("includes/funkcje.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> clas != 'Nekromanta' && $player -> clas != 'Szaman')
{
    error ('<center><IMG SRC=images/locations/zagajnikszamanow.png></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>Kiedy zbliżyłeś się do zagajnika, poczułeś się dziwnie oszołomiony. Uczucie to wzrastało wraz ze zbliżaniem się do niego. Być może nie możesz wejść do środka. Pomiędzy drzewami widać nekromantów i szamanów - zapewnie tylko oni mogą tu przebywać <a href="city.php">(Wróć)</a>');
}

$wynik = mysql_query("SELECT wskrzes, wskrzeszanie FROM players WHERE id=".$player->id);
$tag=mysql_fetch_array($wynik);
$wskrzes=$tag['wskrzes'];
$wskrzeszanie=$tag['wskrzeszanie'];
if ($wskrzes > 9) 
	{
	error ('Twoja energia duchowa wymagana do przeprowadzania rytuałów jest na wyczerpaniu. Musisz poczekać do następnego resetu. <a href="city.php">(Wróć)</a>');
    }
if (isset ($_GET['a']) && $_GET['a'] == 'healself')
 {
    if ($player -> hp < 1)
    {
        error("Aby się uzdrowić twoja dusza musi być w ciele");
    }
    $hpvalue=abs(round(log($wskrzeszanie,2))+8);
    $db -> Execute("UPDATE players SET hp=hp+".$hpvalue.", wskrzes=wskrzes+1, wskrzeszanie=wskrzeszanie+0.03 WHERE id=".$player -> id);
    error ("Rytuał uzdrowienia został ukończony. Zyskujesz ".$hpvalue." punktów życia oraz 0.03 do umiejętności Rytuały");
 }
if (isset ($_GET['a']) && $_GET['a'] == 'resself')
 {
    if ($player -> hp > 0)
    {
        error('Aby się wskrzesić musisz być martwy. <a href="city.php">(Wróć)</a>');
    }
    //$hpvalue=abs(round(log($wskrzeszanie,2))*2+1);
    $db -> Execute("UPDATE players SET hp=1, wskrzes=wskrzes+1, wskrzeszanie=wskrzeszanie+0.03 WHERE id=".$player -> id);
    error ("Rytuał wskrzeszenia został ukończony i twoja dusza wróciła do ciebie. Zyskujesz 0.03 do umiejętności Rytuały");
 }


if (isset($_GET['a']) && $_GET['a'] == 'heal')
{
        $id=$_POST['id']; //przypisz z formularza
        if (!is_numeric($id)) //sprawdz czy to liczba
        {
            error('Zapomnij o tym! <a href="city.php">(Wróć)</a>');
        }
        if ($id == $player->id)
        {
            error('Zamierzasz wykonać ten rytuał na sobie - użyj rytuałów powyżej <a href="city.php">(Wróć)</a>');
        }
        $test=$db->Execute("Select * from players where id=".$id);
        if (!$test->fields['id'])
        {
            error("To ID nie istnieje.");
        }
        else
        {
            if ($_POST['akcja'] == "h")
            {
                if ($player -> clas =="Nekromanta")
                {
                    error("Jedynie Szaman może leczyć towarzyszy - ty jedynie możesz ich wskrzeszać");
                }
                if ($test -> fields['hp'] <1)
                {
                    error("Ta osoba musi być wpierw wskrzeszona");
                }
                $hpvalue=abs(round(log($wskrzeszanie,2))+8);
                $db -> Execute("Update players set hp=hp+".$hpvalue." where id=".$test->fields['id']);
                $db -> Execute("Update players set wskrzes=wskrzes+1, wskrzeszanie=wskrzeszanie+0.06 where id=".$player->id);
                error("Uleczyłeś gracza ".$test->fields['user'] .", który odzyskał dzięki tobie ".$hpvalue." punktów życia. Zyskujesz 0.06 do umiejętności Rytuały");
            }
            if ($_POST['akcja'] == "r")
            {
                if ($player -> clas =="Szaman")
                {
                    error("Jedynie Nekromanta może wskrzeszać towarzyszy - ty jedynie możesz ich leczyć");
                }
                if ($test -> fields['hp'] >0)
                {
                    error("Ta osoba jest żywa.");
                }
                //$hpvalue=abs(round(log($wskrzeszanie,2))*2+1);
                $db -> Execute("Update players set hp=1 where id=".$test->fields['id']);
                $db -> Execute("Update players set wskrzes=wskrzes+1, wskrzeszanie=wskrzeszanie+0.06 where id=".$player->id);
                error("Wskrzesiłeś gracza ".$test->fields['user'] .". Zyskujesz 0.06 do umiejętności Rytuały");
            }
                
        }
}
$smarty -> display('szaman.tpl');
require_once("includes/foot.php");
?>
