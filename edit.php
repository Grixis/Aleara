<?
/**
* Vermilion based on Vallheru
* @function: edit players from admin panel
* @copyrights: 2006 for thion
* @author: thion <thion@o2.pl>
* @version: 0.1
*/
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
$title = 'Edycja użytkowników';
require_once('includes/head.php');

if($player -> rank != 'Admin')
{
    error('To nie jest miejsce dla Ciebie!');
}

if(empty($_GET['id']) && empty($_POST['submit']))
{
    error('Wpisz poprawne id!');
}
    elseif(empty($_POST['submit']) && isset($_GET['id']))
{
    $test = $db -> Execute('SELECT id FROM players WHERE id = '.$_GET['id']);
    if(empty($test -> fields['id']))
    {
        $test -> Close();
        error('Nie ma takiego gracza!');
    }
    $test -> Close();

    $edit = new Player($_GET['id']);
    error('Witaj w panelu edycji użytkowników Twojej gry. Aktualnie edytujesz <b>'.$edit -> user.'</b><br /><br />
    <form method="POST" action="?">
        Nazwa:<br /><input name="user" type="text" value="'.$edit -> user.'" /><br /><br />
        Id:<br /><input name="id" type="text" value="'.$edit -> id.'" /><br /><br />
        Poziom:<br /><input name="level" type="text" value="'.$edit -> level.'" /><br /><br />
        EXP:<br /><input name="exp" type="text" value="'.$edit -> exp.'" /><br /><br />
        HP:<br /><input name="hp" type="text" value="'.$edit -> hp.'" /><br /><br />
        Maksymalne HP:<br /><input name="max_hp" type="text" value="'.$edit -> max_hp.'" /><br /><br />
        Mana:<br /><input name="mana" type="text" value="'.$edit -> mana.'" /><br /><br />
        Energia:<br /><input name="energy" value="'.$edit -> energy.'" /><br /><br />
        Maksymalna energia:<br /><input name="max_energy" type="text" value="'.$edit -> max_energy.'" /><br /><br />
        Złoto:<br /><input name="credits" type="text" value="'.$edit -> credits.'" /><br /><br />
        W banku:<br /><input name="bank" type="text" value="'.$edit -> bank.'" /><br /><br />
        Mithril:<br /><input name="platinum" type="text" value="'.$edit -> platinum.'" /><br /><br />
        Klan:<br /><input name="tribe" type="text" value="'.$edit -> tribe.'" /><br /><br />
        Ranga:<br /><input name="rank" type="text" value="'.$edit -> rank.'" /><br /><br />
        Lokacja:<br /><input name="location" type="text" value="'.$edit -> location.'" /><br /><br />
        AP:<br /><input name="ap" type="text" value="'.$edit -> ap.'" /><br /><br />
        Rasa:<br /><input name="race" type="text" value="'.$edit -> race.'" /><br /><br />
        Klasa:<br /><input name="clas" type="text" value="'.$edit -> clas.'" /><br /><br />
        Zręczność:<br /><input name="agility" type="text" value="'.$edit -> agility.'" /><br /><br />
        Siła:<br /><input name="strength" type="text" value="'.$edit -> strength.'" /><br /><br />
        Inteligencja:<br /><input name="inteli" type="text" value="'.$edit -> inteli.'" /><br /><br />
        Punkty Wiary:<br /><input name="pw" type="text" value="'.$edit -> pw.'" /><br /><br />
        Zwycięstwa:<br /><input name="wins" type="text" value="'.$edit -> wins.'" /><br /><br />
        Przegrane:<br /><input name="losses" type="text" value="'.$edit -> losses.'" /><br /><br />
        Ostatnio zabił:<br /><input name="lastkilled" type="text" value="'.$edit -> lastkilled.'" /><br /><br />
        Ostatnio zabity przez:<br /><input name="lastkilledby" type="text" value="'.$edit -> lastkilledby.'" /><br /><br />
        Wiek:<br /><input name="age" type="text" value="'.$edit -> age.'" /><br /><br />
        Ilość logowań:<br /><input name="logins" type="text" value="'.$edit -> logins.'" /><br /><br />
        Kowalstwo:<br /><input name="smith" type="text" value="'.$edit -> smith.'" /><br /><br />
        Siła ataku:<br /><input name="attack" type="text" value="'.$edit -> attack.'" /><br /><br />
        Uniki:<br /><input name="miss" type="text" value="'.$edit -> miss.'" /><br /><br />
        Punkty Magii:<br /><input name="magic" type="text" value="'.$edit -> magic.'" /><br /><br />
        IP:<br /><input name="ip" type="text" value="'.$edit -> ip.'" /><br /><br />
        Szybkość:<br /><input name="speed" type="text" value="'.$edit -> speed.'" /><br /><br />
        Wytrzymałość:<br /><input name="cond" type="text" value="'.$edit -> cond.'" /><br /><br />
        Alchemia:<br /><input name="alchemy" type="text" value="'.$edit -> alchemy.'" /><br /><br />
        GG:<br /><input name="gg" type="text" value="'.$edit -> gg.'" /><br /><br />
        Avatar:<br /><input name="avatar" type="text" value="'.$edit -> avatar.'" /><br /><br />
        Siła Woli:<br /><input name="wisdom" type="text" value="'.$edit -> wisdom.'" /><br /><br />
        Strzelanie:<br /><input name="shoot" type="text" value="'.$edit -> shoot.'" /><br /><br />
        Ranga w klanie:<br /><input name="tribe_rank" type="text" value="'.$edit -> tribe_rank.'" /><br /><br />
        Stolarstwo:<br /><input name="fletcher" type="text" value="'.$edit -> fletcher.'" /><br /><br />
        Immunitet:<br /><input name="immunited" type="text" value="'.$edit -> immunited.'" /><br /><br />
        Pozwolenie na chowańce:<br /><input name="corepass" type="text" value="'.$edit -> corepass.'" /><br /><br />
        Punkty treningowe:<br /><input name="trains" type="text" value="'.$edit -> trains.'" /><br /><br />
        Walka:<br /><input name="fight" type="text" value="'.$edit -> fight.'" /><br /><br />
        Wierzenie:<br /><input name="deity" type="text" value="'.$edit -> deity.'" /><br /><br />
        Ilość map:<br /><input name="maps" type="text" value="'.$edit -> maps.'" /><br /><br />
        Odpoczynek:<br /><input name="rest" type="text" value="'.$edit -> rest.'" /><br /><br />
        Strona:<br /><input name="page" type="text" value="'.$edit -> page.'" /><br /><br />
        Profil:<br /><textarea name="profile" rows="10" cols="30">'.$edit -> profile.'</textarea><br /><br />
        Przestęp do popełnienia:<br /><input name="crime" type="text" value="'.$edit -> crime.'" /><br /><br />
        Płeć:<br /><input name="gender" type="text" value="'.$edit -> gender.'" /><br /><br />
        Styl:<br /><input name="style" type="text" value="'.$edit -> style.'" /><br /><br />
        Dowodzenie:<br /><input name="leadership" type="text" value="'.$edit -> leadership.'" /><br /><br />
        Styl graficzny:<br /><input name="graphic" type="text" value="'.$edit -> graphic.'" /><br /><br />
        Język:<br /><input name="lang" type="text" value="'.$edit -> lang.'" /><br /><br />
        Język dodatkowy:<br /><input name="seclang" type="text" value="'.$edit -> seclang.'" /><br /><br />
        Ankieta:<br /><input name="poll" type="text" value="'.$edit -> poll.'" /><br /><br />
        Klejnoty Przemiany:<br /><input name="soul" type="text" value="'.$edit -> soul.'" /><br /><br />
        Klejnoty Błogosławieństwa:<br /><input name="bles" type="text" value="'.$edit -> bles.'" /><br /><br />
        Klejnoty Chaosu:<br /><input name="chaos" type="text" value="'.$edit -> chaos.'" /><br /><br />
        Stan cywilny:<br /><input name="stan" type="text" value="'.$edit -> stan.'" /><br /><br />
        Woda:<br /><input name="water" type="text" value="'.$edit -> water.'" /><br /><br />
	Konkurs u druida:<br /><input name="druid" type="text" value="'.$edit -> druid.'" /><br /><br />
	<input type="submit" name="submit" value="Zmień" /><br />
    </form><a href="?">Wróć</a>');
}
    elseif(empty($_GET['id']) && isset($_POST['submit']))
{
    /**
    * Update player's stats
    */
    $edit = new Player($_POST['id']);
    
        $db -> Execute("UPDATE `players` SET `user` = '".$_POST["user"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `id` = '".$_POST["id"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `level` = '".$_POST["level"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `exp` = '".$_POST["exp"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `hp` = '".$_POST["hp"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `max_hp` = '".$_POST["max_hp"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `pm` = '".$_POST["pm"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `energy` = '".$_POST["energy"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `max_energy` = '".$_POST["max_energy"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `credits` = '".$_POST["credits"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `bank` = '".$_POST["bank"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `platinum` = '".$_POST["platinum"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `tribe` = '".$_POST["tribe"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `rank` = '".$_POST["rank"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `miejsce` = '".$_POST["location"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `ap` = '".$_POST["ap"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `rasa` = '".$_POST["race"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `klasa` = '".$_POST["clas"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `agility` = '".$_POST["agility"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `strength` = '".$_POST["strength"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `inteli` = '".$_POST["inteli"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `pw` = '".$_POST["pw"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `wins` = '".$_POST["wins"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `losses` = '".$_POST["losses"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `lastkilled` = '".$_POST["lastkilled"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `lastkilledby` = '".$_POST["lastkilledby"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `age` = '".$_POST["age"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `logins` = '".$_POST["logins"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `ability` = '".$_POST["smith"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `atak` = '".$_POST["attack"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `unik` = '".$_POST["miss"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `magia` = '".$_POST["magic"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `ip` = '".$_POST["ip"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `szyb` = '".$_POST["speed"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `wytrz` = '".$_POST["cond"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `alchemia` = '".$_POST["alchemy"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `gg` = '".$_POST["gg"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `avatar` = '".$_POST["avatar"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `wisdom` = '".$_POST["wisdom"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `shoot` = '".$_POST["shoot"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `tribe_rank` = '".$_POST["tribe_rank"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `fletcher` = '".$_POST["fletcher"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `immu` = '".$_POST["immunited"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `corepass` = '".$_POST["corepass"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `trains` = '".$_POST["trains"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `fight` = '".$_POST["fight"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `deity` = '".$_POST["deity"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `maps` = '".$_POST["maps"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `rest` = '".$_POST["rest"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `page` = '".$_POST["page"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `profile` = '".$_POST["profile"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `crime` = '".$_POST["crime"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `gender` = '".$_POST["gender"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `style` = '".$_POST["style"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `leadership` = '".$_POST["leadership"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `graphic` = '".$_POST["graphic"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `lang` = '".$_POST["lang"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `seclang` = '".$_POST["seclang"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `battlelog` = '".$_POST["battlelog"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `poll` = '".$_POST["poll"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `soul` = '".$_POST["soul"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `bles` = '".$_POST["bles"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `chaos` = '".$_POST["chaos"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `stan` = '".$_POST["stan"]."' WHERE user = '".$_POST["user"]."'");
        $db -> Execute("UPDATE `players` SET `water` = '".$_POST["water"]."' WHERE user = '".$_POST["user"]."'");
	$db -> Execute("UPDATE `players` SET `druid` = '".$_POST["druid"]."' WHERE user = '".$_POST["user"]."'");
	
	error("Zaktualizowałeś użytkownika ".$_POST["user"]);
}

require_once("includes/foot.php");
?>
