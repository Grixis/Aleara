<?php
require_once('includes/head.php');
$a = 'Wiadomosci';
$b = 'Arena Walk';
$c = 'Dziennik';
$d = 'Wiadomości';
$u = 'Wiadomości';
$w = 'Wiadomości';
$e = 'Trening';
$f = 'Kuźnia';
$g = 'Dziennik';
$s = 'Dziennik';
$t = 'Dziennik';
$h = 'Zobacz';
$i = 'Strażnica';
$j = 'Statystyki';
$k = 'Poszukiwania';
$l = 'Uzdrowiciel';
$m = 'Ekwipunek';
$n = 'Statystyki';
$o = 'Arena walk';
$p = 'Zasoby';
$r = 'Aleara';
$on = 'xx';
$off = 'invisible';

if (isset ($_GET['action']) && $_GET['action'] == 'explore' && empty($query -> fields['quest'])) 
{

    $chance = rand(1,15);
   
    if ($chance == 1)
    {
        
        $db -> Execute("UPDATE players SET page='$n' WHERE id=473"); //miejsce BOT 1
        
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0.05 WHERE id=473"); //gotowanie BOT 1
        $db -> Execute("UPDATE players SET strenght=strenght+5 WHERE id=473"); //sila BOT 1
        $db -> Execute("UPDATE players SET agility=agility+6 WHERE id=473"); //zrecznosc BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=473"); //atak BOT 1
        $db -> Execute("UPDATE players SET unik=unik+0.06 WHERE id=473"); //unik BOT 1
        $db -> Execute("UPDATE players SET wytrz=wytrz+7 WHERE id=473"); //wytka BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0.05 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0.06 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        
        
         $db -> Execute("UPDATE players SET page='$m' WHERE id=475"); //miejsce BOT 2
        
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0.08 WHERE id=475"); //gotowanie BOT 2
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=475"); //sila BOT 2
        $db -> Execute("UPDATE players SET agility=agility+3 WHERE id=475"); //zrecznosc BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0.04 WHERE id=475"); //atak BOT 2
        $db -> Execute("UPDATE players SET unik=unik+0.05 WHERE id=475"); //unik BOT 2
        $db -> Execute("UPDATE players SET wytrz=wytrz+7 WHERE id=475"); //wytka BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0.10 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0.10 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        
        $db -> Execute("UPDATE players SET page='$c' WHERE id=187"); //miejsce BOT 3
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=187"); //lvl BOT 3
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0.2 WHERE id=187"); //gotowanie BOT 3
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=187"); //sila BOT 3
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=187"); //zrecznosc BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0.02 WHERE id=187"); //atak BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0.07 WHERE id=187"); //unik BOT 3
        $db -> Execute("UPDATE players SET wytrz=wytrz+473 WHERE id=187"); //wytka BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0.45 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=187");
        
        $db -> Execute("UPDATE players SET page='$l' WHERE id=40"); //miejsce BOT 4
       
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0.03 WHERE id=40"); //gotowanie BOT 4
        $db -> Execute("UPDATE players SET strenght=strenght+6 WHERE id=40"); //sila BOT 4
        $db -> Execute("UPDATE players SET agility=agility+20 WHERE id=40"); //zrecznosc BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0.10 WHERE id=40"); //atak BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0.10 WHERE id=40"); //unik BOT 4
        $db -> Execute("UPDATE players SET wytrz=wytrz+4750 WHERE id=40"); //wytka BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0.1 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0.0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=40");
        
        $db -> Execute("UPDATE players SET page='$u' WHERE id=342"); //miejsce BOT 5
     
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=342"); //gotowanie BOT 5
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=342"); //sila BOT 5
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=342"); //zrecznosc BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0.2 WHERE id=342"); //atak BOT 5
        $db -> Execute("UPDATE players SET unik=unik+0.5 WHERE id=342"); //unik BOT 5
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=342"); //wytka BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=342");
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=353"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=353"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=353"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=353"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=353"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=353"); //atak BOT 6
        $db -> Execute("UPDATE players SET unik=nik+0.6 WHERE id=353"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=353"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=353");
        
        
        
        
        
        
        
        
        
        
        
        //-------------------------------------------------------------
        $db -> Execute("UPDATE players SET page='$t' WHERE id=476"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=476"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=476"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=476"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=476"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=476"); //atak BOT 6
        $db -> Execute("UPDATE players SET unik=nik+0.6 WHERE id=476"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=476"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=476"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0 WHERE id=476"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=476");
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=477"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=477"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=477"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=477"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=477"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=477"); //atak BOT 6
        $db -> Execute("UPDATE players SET unik=nik+0.6 WHERE id=477"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=477"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=477"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0 WHERE id=477"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=477");
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=478"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=478"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=478"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=478"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=478"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=478"); //atak BOT 6
        $db -> Execute("UPDATE players SET unik=nik+0.6 WHERE id=478"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=478"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=478"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0 WHERE id=478"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=478");
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=479"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=479"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=479"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=479"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=479"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=479"); //atak BOT 6
        $db -> Execute("UPDATE players SET unik=nik+0.6 WHERE id=479"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=479"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=479"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0 WHERE id=479"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=479");
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=15"); //miejsce BOT 6
      
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=15"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=15"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=15"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=15"); //atak BOT 6
        $db -> Execute("UPDATE players SET unik=nik+0.6 WHERE id=15"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=15"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=15"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0 WHERE id=15"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=15");
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=169"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=169"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=169"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=169"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=169"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=169"); //atak BOT 6
        $db -> Execute("UPDATE players SET unik=nik+0.6 WHERE id=169"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=169"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=169"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0 WHERE id=169"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=169");
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=203"); //miejsce BOT 6
      
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=203"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=203"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=203"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=203"); //atak BOT 6
        $db -> Execute("UPDATE players SET unik=nik+0.6 WHERE id=203"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=203"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=203"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0 WHERE id=203"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=203");
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=236"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=236"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=236"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=236"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=236"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=236"); //atak BOT 6
        $db -> Execute("UPDATE players SET unik=nik+0.6 WHERE id=236"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=236"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=236"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0 WHERE id=236"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=236");
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=268"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=268"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=268"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=268"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=268"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=268"); //atak BOT 6
        $db -> Execute("UPDATE players SET unik=nik+0.6 WHERE id=268"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=268"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=268"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0 WHERE id=268"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=268");
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=313"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=313"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=313"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+10 WHERE id=313"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=313"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0.06 WHERE id=313"); //atak BOT 6
        $db -> Execute("UPDATE players SET unik=nik+0.6 WHERE id=313"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=313"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=313"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET wampiryzm=wampiryzm+0 WHERE id=313"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=313");
        //-------------------------------------------------------------
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }
    
    
    
    
     if ($chance == 2)
    {
        
        $db -> Execute("UPDATE players SET page='$a' WHERE id=473"); //miejsce BOT 1
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=473"); //lvl BOT 1
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=473"); //gotowanie BOT 1
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=473"); //sila BOT 1
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=473"); //zrecznosc BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //atak BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //unik BOT 1
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=473"); //wytka BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        
        $db -> Execute("UPDATE players SET page='$b' WHERE id=475"); //miejsce BOT 2
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=475"); //lvl BOT 2
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=475"); //gotowanie BOT 2
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=475"); //sila BOT 2
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=475"); //zrecznosc BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //atak BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //unik BOT 2
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=475"); //wytka BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        
        $db -> Execute("UPDATE players SET page='$c' WHERE id=187"); //miejsce BOT 3
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=187"); //lvl BOT 3
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=187"); //gotowanie BOT 3
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=187"); //sila BOT 3
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=187"); //zrecznosc BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //atak BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //unik BOT 3
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=187"); //wytka BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=187");
        
        $db -> Execute("UPDATE players SET page='$d' WHERE id=40"); //miejsce BOT 4
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=40"); //lvl BOT 4
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=40"); //gotowanie BOT 4
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=40"); //sila BOT 4
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=40"); //zrecznosc BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //atak BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //unik BOT 4
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=40"); //wytka BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=40");
        
        $db -> Execute("UPDATE players SET page='$e' WHERE id=342"); //miejsce BOT 5
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=342"); //lvl BOT 5
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=342"); //gotowanie BOT 5
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=342"); //sila BOT 5
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=342"); //zrecznosc BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //atak BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //unik BOT 5
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=342"); //wytka BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=342");
        
        $db -> Execute("UPDATE players SET page='$f' WHERE id=353"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=353"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=353"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=353"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=353"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //atak BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=353"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=353");
        
        
        
$db -> Execute("UPDATE players SET page='$t' WHERE id=476"); //
$db -> Execute("UPDATE players SET page='$h' WHERE id=477"); //
$db -> Execute("UPDATE players SET page='$j' WHERE id=478"); //
$db -> Execute("UPDATE players SET page='$k' WHERE id=479"); //
$db -> Execute("UPDATE players SET page='$s' WHERE id=15"); //
$db -> Execute("UPDATE players SET page='$b' WHERE id=169"); //
$db -> Execute("UPDATE players SET page='$n' WHERE id=203"); //
$db -> Execute("UPDATE players SET page='$m' WHERE id=236"); //
$db -> Execute("UPDATE players SET page='$f' WHERE id=268"); //
$db -> Execute("UPDATE players SET page='$u' WHERE id=313"); //
        
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=476"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=477"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=478"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=479"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=15"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=169"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=203"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=236"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=268"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=313"); //        
        
        
        
    }
     if ($chance == 3)
    {
        
        $db -> Execute("UPDATE players SET page='$g' WHERE id=473"); //miejsce BOT 1
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=473"); //lvl BOT 1
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=473"); //gotowanie BOT 1
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=473"); //sila BOT 1
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=473"); //zrecznosc BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //atak BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //unik BOT 1
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=473"); //wytka BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        
        $db -> Execute("UPDATE players SET page='$h' WHERE id=475"); //miejsce BOT 2
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=475"); //lvl BOT 2
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=475"); //gotowanie BOT 2
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=475"); //sila BOT 2
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=475"); //zrecznosc BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //atak BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //unik BOT 2
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=475"); //wytka BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        
        $db -> Execute("UPDATE players SET page='$i' WHERE id=187"); //miejsce BOT 3
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=187"); //lvl BOT 3
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=187"); //gotowanie BOT 3
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=187"); //sila BOT 3
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=187"); //zrecznosc BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //atak BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //unik BOT 3
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=187"); //wytka BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=187");
        
        $db -> Execute("UPDATE players SET page='$j' WHERE id=40"); //miejsce BOT 4
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=40"); //lvl BOT 4
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=40"); //gotowanie BOT 4
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=40"); //sila BOT 4
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=40"); //zrecznosc BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //atak BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //unik BOT 4
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=40"); //wytka BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        
        $db -> Execute("UPDATE players SET page='$k' WHERE id=342"); //miejsce BOT 5
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=342"); //lvl BOT 5
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=342"); //gotowanie BOT 5
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=342"); //sila BOT 5
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=342"); //zrecznosc BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //atak BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //unik BOT 5
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=342"); //wytka BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=342");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=477"); //lvl BOT 6
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=478"); //lvl BOT 6
        
        $db -> Execute("UPDATE players SET page='$l' WHERE id=353"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=353"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=353"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=353"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=353"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //atak BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=353"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=353");
        
        
        
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=476"); //
$db -> Execute("UPDATE players SET page='$g' WHERE id=477"); //
$db -> Execute("UPDATE players SET page='$h' WHERE id=478"); //
$db -> Execute("UPDATE players SET page='$s' WHERE id=479"); //
$db -> Execute("UPDATE players SET page='$i' WHERE id=15"); //
$db -> Execute("UPDATE players SET page='$e' WHERE id=169"); //
$db -> Execute("UPDATE players SET page='$j' WHERE id=203"); //
$db -> Execute("UPDATE players SET page='$k' WHERE id=236"); //
$db -> Execute("UPDATE players SET page='$a' WHERE id=268"); //
$db -> Execute("UPDATE players SET page='$s' WHERE id=313"); //
        
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=476"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=477"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=478"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=479"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=15"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=169"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=203"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=236"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=268"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=313"); //        
   
        
        
        
        
    }
     if ($chance == 4)
    {
        
        $db -> Execute("UPDATE players SET page='$m' WHERE id=473"); //miejsce BOT 1
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=473"); //lvl BOT 1
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=473"); //gotowanie BOT 1
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=473"); //sila BOT 1
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=473"); //zrecznosc BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //atak BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //unik BOT 1
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=473"); //wytka BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        
        $db -> Execute("UPDATE players SET page='$n' WHERE id=475"); //miejsce BOT 2
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=475"); //lvl BOT 2
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=475"); //gotowanie BOT 2
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=475"); //sila BOT 2
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=475"); //zrecznosc BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //atak BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //unik BOT 2
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=475"); //wytka BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=475");
        
        $db -> Execute("UPDATE players SET page='$o' WHERE id=187"); //miejsce BOT 3
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=187"); //lvl BOT 3
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=187"); //gotowanie BOT 3
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=187"); //sila BOT 3
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=187"); //zrecznosc BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //atak BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //unik BOT 3
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=187"); //wytka BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=187");
        
        $db -> Execute("UPDATE players SET page='$p' WHERE id=40"); //miejsce BOT 4
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=40"); //lvl BOT 4
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=40"); //gotowanie BOT 4
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=40"); //sila BOT 4
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=40"); //zrecznosc BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //atak BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //unik BOT 4
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=40"); //wytka BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=40");
        
        $db -> Execute("UPDATE players SET page='$r' WHERE id=342"); //miejsce BOT 5
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=342"); //lvl BOT 5
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=342"); //gotowanie BOT 5
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=342"); //sila BOT 5
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=342"); //zrecznosc BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //atak BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //unik BOT 5
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=342"); //wytka BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=342");
        
        $db -> Execute("UPDATE players SET page='$s' WHERE id=353"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=353"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=353"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=353"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=353"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //atak BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=353"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=353");
        
        
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=476"); //
$db -> Execute("UPDATE players SET page='$d' WHERE id=477"); //
$db -> Execute("UPDATE players SET page='$s' WHERE id=478"); //
$db -> Execute("UPDATE players SET page='$e' WHERE id=479"); //
$db -> Execute("UPDATE players SET page='$g' WHERE id=15"); //
$db -> Execute("UPDATE players SET page='$a' WHERE id=169"); //
$db -> Execute("UPDATE players SET page='$t' WHERE id=203"); //
$db -> Execute("UPDATE players SET page='$k' WHERE id=236"); //
$db -> Execute("UPDATE players SET page='$u' WHERE id=268"); //
$db -> Execute("UPDATE players SET page='$l' WHERE id=313"); //
        
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=476"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=477"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=478"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=479"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=15"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=169"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=203"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=236"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=268"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=313"); //        
   
        
        
        
        
        
    }
     if ($chance == 5)
    {
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=473"); //miejsce BOT 1
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=473"); //lvl BOT 1
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=473"); //gotowanie BOT 1
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=473"); //sila BOT 1
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=473"); //zrecznosc BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //atak BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //unik BOT 1
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=473"); //wytka BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=473");
        
        $db -> Execute("UPDATE players SET page='$u' WHERE id=475"); //miejsce BOT 2
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=475"); //lvl BOT 2
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=475"); //gotowanie BOT 2
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=475"); //sila BOT 2
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=475"); //zrecznosc BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //atak BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //unik BOT 2
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=475"); //wytka BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        
        $db -> Execute("UPDATE players SET page='$w' WHERE id=187"); //miejsce BOT 3
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=187"); //lvl BOT 3
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=187"); //gotowanie BOT 3
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=187"); //sila BOT 3
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=187"); //zrecznosc BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //atak BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //unik BOT 3
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=187"); //wytka BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=187");
        
        $db -> Execute("UPDATE players SET page='$w' WHERE id=40"); //miejsce BOT 4
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=40"); //lvl BOT 4
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=40"); //gotowanie BOT 4
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=40"); //sila BOT 4
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=40"); //zrecznosc BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //atak BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //unik BOT 4
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=40"); //wytka BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        
        $db -> Execute("UPDATE players SET page='$s' WHERE id=342"); //miejsce BOT 5
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=342"); //lvl BOT 5
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=342"); //gotowanie BOT 5
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=342"); //sila BOT 5
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=342"); //zrecznosc BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //atak BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //unik BOT 5
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=342"); //wytka BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=342");
        
        $db -> Execute("UPDATE players SET page='$m' WHERE id=353"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=353"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=353"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=353"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=353"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //atak BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=353"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=353");
          $db -> Execute("UPDATE players SET level=level+3 WHERE id=15"); //lvl BOT 6
        
        
        $db -> Execute("UPDATE players SET page='$w' WHERE id=476"); //
$db -> Execute("UPDATE players SET page='$d' WHERE id=477"); //
$db -> Execute("UPDATE players SET page='$a' WHERE id=478"); //
$db -> Execute("UPDATE players SET page='$s' WHERE id=479"); //
$db -> Execute("UPDATE players SET page='$f' WHERE id=15"); //
$db -> Execute("UPDATE players SET page='$n' WHERE id=169"); //
$db -> Execute("UPDATE players SET page='$m' WHERE id=203"); //
$db -> Execute("UPDATE players SET page='$n' WHERE id=236"); //
$db -> Execute("UPDATE players SET page='$n' WHERE id=268"); //
$db -> Execute("UPDATE players SET page='$l' WHERE id=313"); //
        
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=476"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=477"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=478"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=479"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=15"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=169"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=203"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=236"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=268"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=313"); //        
   
        
        
        
        
        
    }
     if ($chance == 6)
    {
        
        $db -> Execute("UPDATE players SET page='$i' WHERE id=473"); //miejsce BOT 1
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=473"); //lvl BOT 1
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=473"); //gotowanie BOT 1
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=473"); //sila BOT 1
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=473"); //zrecznosc BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //atak BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //unik BOT 1
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=473"); //wytka BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=473");
        
        $db -> Execute("UPDATE players SET page='$g' WHERE id=475"); //miejsce BOT 2
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=475"); //lvl BOT 2
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=475"); //gotowanie BOT 2
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=475"); //sila BOT 2
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=475"); //zrecznosc BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //atak BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //unik BOT 2
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=475"); //wytka BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        
        $db -> Execute("UPDATE players SET page='$s' WHERE id=187"); //miejsce BOT 3
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=187"); //lvl BOT 3
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=187"); //gotowanie BOT 3
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=187"); //sila BOT 3
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=187"); //zrecznosc BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //atak BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //unik BOT 3
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=187"); //wytka BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=477");
        
        $db -> Execute("UPDATE players SET page='$a' WHERE id=40"); //miejsce BOT 4
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=40"); //lvl BOT 4
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=40"); //gotowanie BOT 4
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=40"); //sila BOT 4
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=40"); //zrecznosc BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //atak BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //unik BOT 4
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=40"); //wytka BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=40");
        
        $db -> Execute("UPDATE players SET page='$f' WHERE id=342"); //miejsce BOT 5
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=342"); //lvl BOT 5
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=342"); //gotowanie BOT 5
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=342"); //sila BOT 5
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=342"); //zrecznosc BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //atak BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //unik BOT 5
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=342"); //wytka BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=342");
        
        $db -> Execute("UPDATE players SET page='$d' WHERE id=353"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=353"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=353"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=353"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=353"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //atak BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=353"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=353");
        
        
        
        
        
        $db -> Execute("UPDATE players SET page='$k' WHERE id=476"); //
$db -> Execute("UPDATE players SET page='$r' WHERE id=477"); //
$db -> Execute("UPDATE players SET page='$m' WHERE id=478"); //
$db -> Execute("UPDATE players SET page='$t' WHERE id=479"); //
$db -> Execute("UPDATE players SET page='$a' WHERE id=15"); //
$db -> Execute("UPDATE players SET page='$n' WHERE id=169"); //
$db -> Execute("UPDATE players SET page='$m' WHERE id=203"); //
$db -> Execute("UPDATE players SET page='$a' WHERE id=236"); //
$db -> Execute("UPDATE players SET page='$n' WHERE id=268"); //
$db -> Execute("UPDATE players SET page='$g' WHERE id=313"); //
        
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=476"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=477"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=478"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=479"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=15"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=169"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=203"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=236"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=268"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=313"); //        
   
        
        
        
    }
     if ($chance == 7)
    {
          $db -> Execute("UPDATE players SET level=level+3 WHERE id=203"); //lvl BOT 6
        $db -> Execute("UPDATE players SET page='$u' WHERE id=473"); //miejsce BOT 1
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=473"); //lvl BOT 1
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=473"); //gotowanie BOT 1
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=473"); //sila BOT 1
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=473"); //zrecznosc BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //atak BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //unik BOT 1
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=473"); //wytka BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=473");
        
        $db -> Execute("UPDATE players SET page='$t' WHERE id=475"); //miejsce BOT 2
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=475"); //lvl BOT 2
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=475"); //gotowanie BOT 2
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=475"); //sila BOT 2
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=475"); //zrecznosc BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //atak BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //unik BOT 2
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=475"); //wytka BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        
        $db -> Execute("UPDATE players SET page='$n' WHERE id=187"); //miejsce BOT 3
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=187"); //lvl BOT 3
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=187"); //gotowanie BOT 3
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=187"); //sila BOT 3
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=187"); //zrecznosc BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //atak BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //unik BOT 3
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=187"); //wytka BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=187");
        
        $db -> Execute("UPDATE players SET page='$m' WHERE id=40"); //miejsce BOT 4
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=40"); //lvl BOT 4
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=40"); //gotowanie BOT 4
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=40"); //sila BOT 4
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=40"); //zrecznosc BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //atak BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //unik BOT 4
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=40"); //wytka BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=40"); //drwalnictwo BOT 4
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        
        $db -> Execute("UPDATE players SET page='$d' WHERE id=342"); //miejsce BOT 5
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=342"); //lvl BOT 5
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=342"); //gotowanie BOT 5
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=342"); //sila BOT 5
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=342"); //zrecznosc BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //atak BOT 5
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=342"); //unik BOT 5
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=342"); //wytka BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=342"); //drwalnictwo BOT 5
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=342");
        
        $db -> Execute("UPDATE players SET page='$i' WHERE id=353"); //miejsce BOT 6
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=353"); //lvl BOT 6
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=353"); //gotowanie BOT 6
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=353"); //sila BOT 6
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=353"); //zrecznosc BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //atak BOT 6
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=353"); //unik BOT 6
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=353"); //wytka BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=353"); //drwalnictwo BOT 6
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=353");
        
        
        
        
        
        $db -> Execute("UPDATE players SET page='$b' WHERE id=476"); //
$db -> Execute("UPDATE players SET page='$z' WHERE id=477"); //
$db -> Execute("UPDATE players SET page='$w' WHERE id=478"); //
$db -> Execute("UPDATE players SET page='$a' WHERE id=479"); //
$db -> Execute("UPDATE players SET page='$s' WHERE id=15"); //
$db -> Execute("UPDATE players SET page='$d' WHERE id=169"); //
$db -> Execute("UPDATE players SET page='$f' WHERE id=203"); //
$db -> Execute("UPDATE players SET page='$h' WHERE id=236"); //
$db -> Execute("UPDATE players SET page='$k' WHERE id=268"); //
$db -> Execute("UPDATE players SET page='$t' WHERE id=313"); //
        
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=476"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=477"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=478"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=479"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=15"); //
$db -> Execute("UPDATE players SET gametype='$off' WHERE id=169"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=203"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=236"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=268"); //
$db -> Execute("UPDATE players SET gametype='$on' WHERE id=313"); //        
      $db -> Execute("UPDATE players SET level=level+2 WHERE id=342"); //lvl BOT 5
        
        
        
    }
     if ($chance == 8)
    {
        
        $db -> Execute("UPDATE players SET page='$i' WHERE id=473"); //miejsce BOT 1
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=473"); //lvl BOT 1
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=473"); //gotowanie BOT 1
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=473"); //sila BOT 1
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=473"); //zrecznosc BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //atak BOT 1
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=473"); //unik BOT 1
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=473"); //wytka BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=473"); //drwalnictwo BOT 1
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=473");
        
        $db -> Execute("UPDATE players SET page='$i' WHERE id=475"); //miejsce BOT 2
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=475"); //lvl BOT 2
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=475"); //gotowanie BOT 2
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=475"); //sila BOT 2
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=475"); //zrecznosc BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //atak BOT 2
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=475"); //unik BOT 2
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=475"); //wytka BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=475"); //drwalnictwo BOT 2
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        
        $db -> Execute("UPDATE players SET page='$j' WHERE id=187"); //miejsce BOT 3
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=187"); //lvl BOT 3
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=187"); //gotowanie BOT 3
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=187"); //sila BOT 3
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=187"); //zrecznosc BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //atak BOT 3
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=187"); //unik BOT 3
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=187"); //wytka BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET lumberjack=lumberjack+0 WHERE id=187"); //drwalnictwo BOT 3
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=187");
        
        $db -> Execute("UPDATE players SET page='$m' WHERE id=40"); //miejsce BOT 4
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=40"); //lvl BOT 4
        $db -> Execute("UPDATE players SET gotowanie=gotowanie+0 WHERE id=40"); //gotowanie BOT 4
        $db -> Execute("UPDATE players SET strenght=strenght+0 WHERE id=40"); //sila BOT 4
        $db -> Execute("UPDATE players SET agility=agility+0 WHERE id=40"); //zrecznosc BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //atak BOT 4
        $db -> Execute("UPDATE players SET atak=atak+0 WHERE id=40"); //unik BOT 4
        $db -> Execute("UPDATE players SET wytrz=wytrz+0 WHERE id=40"); 