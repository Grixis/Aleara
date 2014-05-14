<?php
require_once('includes/head.php');

$a = 'Wiadomosci';
$b = 'Arena Walk';
$c = 'Dziennik';
$d = 'Wiadomości';
$u = 'Wiadomości';
$w = 'Wiadomości';
$e = 'Trening';
$f = 'Gildie';
$g = 'Dziennik';
$s = 'Dziennik';
$t = 'Dziennik';
$h = 'Zobacz';
$i = 'Kopalnia';
$j = 'Statystyki';
$k = 'Poszukiwania';
$l = 'Forum klanu';
$m = 'Ekwipunek';
$n = 'Statystyki';
$o = 'Arena walk';
$p = 'Zasoby';
$r = 'Aleara';
$s = 'Gildie';
$t = 'Forum klanu';
$u = 'Aleara';
$w = 'Aleara';
$y = 'Aleara';
$z = 'Aleara';
$v = 'Forum klanu';
$on = 'xx';
$off = 'invisible';

if (isset ($_GET['action']) && $_GET['action'] == 'explore' && empty($query -> fields['quest'])) 
{

    $chance = rand(1,10);
   
    if ($chance == 1)
    {
        
        
        
        $db -> Execute("UPDATE players SET page='$b' WHERE id=473");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=475");
        $db -> Execute("UPDATE players SET page='$c' WHERE id=40");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=342");
        $db -> Execute("UPDATE players SET page='$e' WHERE id=353");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=187");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=476");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=477");
        $db -> Execute("UPDATE players SET page='$i' WHERE id=478");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=479");
        $db -> Execute("UPDATE players SET page='$k' WHERE id=15");
        $db -> Execute("UPDATE players SET page='$l' WHERE id=169");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=203");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=313");
        $db -> Execute("UPDATE players SET page='$o' WHERE id=236");
        $db -> Execute("UPDATE players SET page='$p' WHERE id=268");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=933");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=937");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=926");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=922");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=914");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=896");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=886");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=737");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=744");
        $db -> Execute("UPDATE players SET page='$e' WHERE id=763");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=811");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=838");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=828");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=851");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=942");
        
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=40");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=342");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=353");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=187");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=476");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=477");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=478");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=479");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=15");
        $db -> Execute("UPDATE players SET gametype='$$off' WHERE id=169");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=203");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=313");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=236");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=268");
              $db -> Execute("UPDATE players SET gametype='$off' WHERE id=933");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=937");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=926");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=922");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=914");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=896");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=886");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=737");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=744");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=763");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=811");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=838");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=828");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=851");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=942");
        
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=473");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=475");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=40");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=342");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=353");
        $db -> Execute("UPDATE players SET level=level+2 WHERE id=187");
        $db -> Execute("UPDATE players SET level=level+2 WHERE id=476");
        $db -> Execute("UPDATE players SET level=level+2 WHERE id=477");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=478");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=479");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=15");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=169");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=203");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=313");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=236");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=268");
         $db -> Execute("UPDATE players SET level=level+1 WHERE id=933");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=937");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=926");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=922");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=914");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=896");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=886");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=737");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=744");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=763");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=811");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=838");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=828");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=851");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=942");
        
        $db -> Execute("UPDATE players SET wytrz=wytrz+9 WHERE id=473");
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=475");
        $db -> Execute("UPDATE players SET wytrz=wytrz+13 WHERE id=40");
        $db -> Execute("UPDATE players SET wytrz=wytrz+14 WHERE id=342");
        $db -> Execute("UPDATE players SET wytrz=wytrz+15 WHERE id=353");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=187");
        $db -> Execute("UPDATE players SET wytrz=wytrz+17 WHERE id=476");
        $db -> Execute("UPDATE players SET wytrz=wytrz+18 WHERE id=477");
        $db -> Execute("UPDATE players SET wytrz=wytrz+19 WHERE id=478");
        $db -> Execute("UPDATE players SET wytrz=wytrz+20 WHERE id=479");
        $db -> Execute("UPDATE players SET wytrz=wytrz+21 WHERE id=15");
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=169");
        $db -> Execute("UPDATE players SET wytrz=wytrz+45 WHERE id=203");
        $db -> Execute("UPDATE players SET wytrz=wytrz+14 WHERE id=313");
        $db -> Execute("UPDATE players SET wytrz=wytrz+15 WHERE id=236");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=268");
        $db -> Execute("UPDATE players SET wytrz=wytrz+19 WHERE id=933");
        $db -> Execute("UPDATE players SET wytrz=wytrz+15 WHERE id=937");
        $db -> Execute("UPDATE players SET wytrz=wytrz+13 WHERE id=926");
        $db -> Execute("UPDATE players SET wytrz=wytrz+12 WHERE id=922");
        $db -> Execute("UPDATE players SET wytrz=wytrz+11 WHERE id=914");
        $db -> Execute("UPDATE players SET wytrz=wytrz+15 WHERE id=896");
        $db -> Execute("UPDATE players SET wytrz=wytrz+13 WHERE id=886");
        $db -> Execute("UPDATE players SET wytrz=wytrz+14 WHERE id=737");
        $db -> Execute("UPDATE players SET wytrz=wytrz+12 WHERE id=744");
        $db -> Execute("UPDATE players SET wytrz=wytrz+26 WHERE id=763");
        $db -> Execute("UPDATE players SET wytrz=wytrz+14 WHERE id=811");
        $db -> Execute("UPDATE players SET wytrz=wytrz+13 WHERE id=838");
        $db -> Execute("UPDATE players SET wytrz=wytrz+18 WHERE id=828");
        $db -> Execute("UPDATE players SET wytrz=wytrz+19 WHERE id=851");
        $db -> Execute("UPDATE players SET wytrz=wytrz+14 WHERE id=942");
        
        $db -> Execute("UPDATE players SET agility=agility+3 WHERE id=473");
        $db -> Execute("UPDATE players SET agility=agility+6 WHERE id=475");
        $db -> Execute("UPDATE players SET agility=agility+9 WHERE id=40");
        $db -> Execute("UPDATE players SET agility=agility+9 WHERE id=342");
        $db -> Execute("UPDATE players SET agility=agility+9 WHERE id=353");
        $db -> Execute("UPDATE players SET agility=agility+8 WHERE id=187");
        $db -> Execute("UPDATE players SET agility=agility+7 WHERE id=476");
        $db -> Execute("UPDATE players SET agility=agility+5 WHERE id=477");
        $db -> Execute("UPDATE players SET agility=agility+6 WHERE id=478");
        $db -> Execute("UPDATE players SET agility=agility+3 WHERE id=479");
        $db -> Execute("UPDATE players SET agility=agility+4 WHERE id=15");
        $db -> Execute("UPDATE players SET agility=agility+2 WHERE id=169");
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=203");
        $db -> Execute("UPDATE players SET agility=agility+21 WHERE id=313");
        $db -> Execute("UPDATE players SET agility=agility+31 WHERE id=236");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=268");
         $db -> Execute("UPDATE players SET agility=agility+35 WHERE id=933");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=937");
        $db -> Execute("UPDATE players SET agility=agility+21 WHERE id=926");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=922");
        $db -> Execute("UPDATE players SET agility=agility+24 WHERE id=914");
        $db -> Execute("UPDATE players SET agility=agility+35 WHERE id=896");
        $db -> Execute("UPDATE players SET agility=agility+25 WHERE id=886");
        $db -> Execute("UPDATE players SET agility=agility+36 WHERE id=737");
        $db -> Execute("UPDATE players SET agility=agility+27 WHERE id=744");
        $db -> Execute("UPDATE players SET agility=agility+38 WHERE id=763");
        $db -> Execute("UPDATE players SET agility=agility+39 WHERE id=811");
        $db -> Execute("UPDATE players SET agility=agility+38 WHERE id=838");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=828");
        $db -> Execute("UPDATE players SET agility=agility+23 WHERE id=851");
        $db -> Execute("UPDATE players SET agility=agility+23 WHERE id=942");
      
        $db -> Execute("UPDATE players SET szyb=szyb+5 WHERE id=473");
        $db -> Execute("UPDATE players SET szyb=szyb+6 WHERE id=475");
        $db -> Execute("UPDATE players SET szyb=szyb+3 WHERE id=40");
        $db -> Execute("UPDATE players SET szyb=szyb+2 WHERE id=342");
        $db -> Execute("UPDATE players SET szyb=szyb+5 WHERE id=353");
        $db -> Execute("UPDATE players SET szyb=szyb+5 WHERE id=187");
        $db -> Execute("UPDATE players SET szyb=szyb+5 WHERE id=476");
        $db -> Execute("UPDATE players SET szyb=szyb+2 WHERE id=477");
        $db -> Execute("UPDATE players SET szyb=szyb+7 WHERE id=478");
        $db -> Execute("UPDATE players SET szyb=szyb+2 WHERE id=479");
        $db -> Execute("UPDATE players SET szyb=szyb+5 WHERE id=15");
        $db -> Execute("UPDATE players SET szyb=szyb+1 WHERE id=169");
        $db -> Execute("UPDATE players SET szyb=szyb+2 WHERE id=203");
        $db -> Execute("UPDATE players SET szyb=szyb+1 WHERE id=313");
        $db -> Execute("UPDATE players SET szyb=szyb+2 WHERE id=236");
        $db -> Execute("UPDATE players SET szyb=szyb+1 WHERE id=268");        
        
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=473");
        $db -> Execute("UPDATE players SET mining=mining+2.6 WHERE id=475");
        $db -> Execute("UPDATE players SET mining=mining+3.1 WHERE id=40");
        $db -> Execute("UPDATE players SET mining=mining+0.8 WHERE id=342");
        $db -> Execute("UPDATE players SET mining=mining+0.4 WHERE id=353");
        $db -> Execute("UPDATE players SET mining=mining+0.3 WHERE id=187");
        $db -> Execute("UPDATE players SET mining=mining+1.3 WHERE id=476");
        $db -> Execute("UPDATE players SET mining=mining+1.7 WHERE id=477");
        $db -> Execute("UPDATE players SET mining=mining+2.2 WHERE id=478");
        $db -> Execute("UPDATE players SET mining=mining+2.1 WHERE id=479");
        $db -> Execute("UPDATE players SET mining=mining+2.0 WHERE id=15");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=169");
        $db -> Execute("UPDATE players SET mining=mining+0.8 WHERE id=203");
        $db -> Execute("UPDATE players SET mining=mining+0.4 WHERE id=313");
        $db -> Execute("UPDATE players SET mining=mining+2.5 WHERE id=236");
        $db -> Execute("UPDATE players SET mining=mining+3.3 WHERE id=268");
          $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=933");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=937");
        $db -> Execute("UPDATE players SET mining=mining+1.8 WHERE id=926");
        $db -> Execute("UPDATE players SET mining=mining+1.8 WHERE id=922");
        $db -> Execute("UPDATE players SET mining=mining+1.8 WHERE id=914");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=896");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=886");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=737");
        $db -> Execute("UPDATE players SET mining=mining+1.8 WHERE id=744");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=763");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=811");
        $db -> Execute("UPDATE players SET mining=mining+1.8 WHERE id=838");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=828");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=851");
        $db -> Execute("UPDATE players SET mining=mining+1.8 WHERE id=942");       
        
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=473");
        $db -> Execute("UPDATE players SET shoot=shoot+0.3 WHERE id=475");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=40");
        $db -> Execute("UPDATE players SET shoot=shoot+0.5 WHERE id=342");
        $db -> Execute("UPDATE players SET shoot=shoot+0.6 WHERE id=353");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=187");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=476");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=477");
        $db -> Execute("UPDATE players SET shoot=shoot+0.3 WHERE id=478");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=479");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=15");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=169");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=203");
        $db -> Execute("UPDATE players SET shoot=shoot+0.3 WHERE id=313");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=236");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=268");       
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=933");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=937");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=926");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=922");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=914");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=896");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=886");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=737");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=744");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=763");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=811");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=838");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=828");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=851");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=942");
      
      $db -> Execute("UPDATE tribes SET prest=prest+51 WHERE id=25");
      $db -> Execute("UPDATE gielda SET cost=cost+354 WHERE id=25"); 
       $db -> Execute("UPDATE tribes SET prest=prest+42 WHERE id=26");
      $db -> Execute("UPDATE gielda SET cost=cost+278 WHERE id=26");  
    }
    
    
    
    
     if ($chance == 2)
    {
        
        $db -> Execute("UPDATE players SET page='$a' WHERE id=473");
        $db -> Execute("UPDATE players SET page='$o' WHERE id=475");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=40");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=342");
        $db -> Execute("UPDATE players SET page='$l' WHERE id=353");
        $db -> Execute("UPDATE players SET page='$k' WHERE id=187");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=476");
        $db -> Execute("UPDATE players SET page='$i' WHERE id=477");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=478");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=479");
        $db -> Execute("UPDATE players SET page='$e' WHERE id=15");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=169");
        $db -> Execute("UPDATE players SET page='$c' WHERE id=203");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=313");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=236");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=268");
        
                $db -> Execute("UPDATE players SET page='$g' WHERE id=933");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=937");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=926");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=922");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=914");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=896");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=886");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=737");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=744");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=763");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=811");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=838");
        $db -> Execute("UPDATE players SET page='$l' WHERE id=828");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=851");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=942");
        
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=342");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=353");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=187");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=476");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=477");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=478");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=479");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=15");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=169");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=203");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=313");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=236");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=268");
        
             $db -> Execute("UPDATE players SET gametype='$on' WHERE id=933");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=937");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=926");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=922");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=914");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=896");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=886");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=737");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=744");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=763");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=811");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=838");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=828");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=851");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=942");
        
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=473");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=475");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=40");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=342");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=353");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=187");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=476");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=477");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=478");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=479");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=15");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=169");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=203");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=313");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=236");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=268");
        
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=933");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=937");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=926");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=922");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=914");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=896");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=886");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=737");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=744");
        $db -> Execute("UPDATE players SET level=level+1 WHERE id=763");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=811");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=838");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=828");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=851");
        $db -> Execute("UPDATE players SET level=level+0 WHERE id=942");
        
        
        $db -> Execute("UPDATE players SET wytrz=wytrz+6 WHERE id=473");
        $db -> Execute("UPDATE players SET wytrz=wytrz+3 WHERE id=475");
        $db -> Execute("UPDATE players SET wytrz=wytrz+13 WHERE id=40");
        $db -> Execute("UPDATE players SET wytrz=wytrz+14 WHERE id=342");
        $db -> Execute("UPDATE players SET wytrz=wytrz+15 WHERE id=353");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=187");
        $db -> Execute("UPDATE players SET wytrz=wytrz+17 WHERE id=476");
        $db -> Execute("UPDATE players SET wytrz=wytrz+18 WHERE id=477");
        $db -> Execute("UPDATE players SET wytrz=wytrz+19 WHERE id=478");
        $db -> Execute("UPDATE players SET wytrz=wytrz+20 WHERE id=479");
        $db -> Execute("UPDATE players SET wytrz=wytrz+21 WHERE id=15");
        $db -> Execute("UPDATE players SET wytrz=wytrz+10 WHERE id=169");
        $db -> Execute("UPDATE players SET wytrz=wytrz+45 WHERE id=203");
        $db -> Execute("UPDATE players SET wytrz=wytrz+14 WHERE id=313");
        $db -> Execute("UPDATE players SET wytrz=wytrz+15 WHERE id=236");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=268");
        
        
                   $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=933");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=937");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=926");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=922");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=914");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=896");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=886");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=737");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=744");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=763");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=811");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=838");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=828");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=851");
        $db -> Execute("UPDATE players SET wytrz=wytrz+16 WHERE id=942");
        
        
        $db -> Execute("UPDATE players SET agility=agility+3 WHERE id=473");
        $db -> Execute("UPDATE players SET agility=agility+6 WHERE id=475");
        $db -> Execute("UPDATE players SET agility=agility+9 WHERE id=40");
        $db -> Execute("UPDATE players SET agility=agility+9 WHERE id=342");
        $db -> Execute("UPDATE players SET agility=agility+9 WHERE id=353");
        $db -> Execute("UPDATE players SET agility=agility+8 WHERE id=187");
        $db -> Execute("UPDATE players SET agility=agility+7 WHERE id=476");
        $db -> Execute("UPDATE players SET agility=agility+5 WHERE id=477");
        $db -> Execute("UPDATE players SET agility=agility+6 WHERE id=478");
        $db -> Execute("UPDATE players SET agility=agility+3 WHERE id=479");
        $db -> Execute("UPDATE players SET agility=agility+4 WHERE id=15");
        $db -> Execute("UPDATE players SET agility=agility+2 WHERE id=169");
        $db -> Execute("UPDATE players SET agility=agility+10 WHERE id=203");
        $db -> Execute("UPDATE players SET agility=agility+21 WHERE id=313");
        $db -> Execute("UPDATE players SET agility=agility+31 WHERE id=236");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=268");
        
              $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=933");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=937");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=926");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=922");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=914");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=896");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=886");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=737");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=744");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=763");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=811");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=838");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=828");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=851");
        $db -> Execute("UPDATE players SET agility=agility+33 WHERE id=942");
        
        
      
        $db -> Execute("UPDATE players SET szyb=szyb+5 WHERE id=473");
        $db -> Execute("UPDATE players SET szyb=szyb+6 WHERE id=475");
        $db -> Execute("UPDATE players SET szyb=szyb+3 WHERE id=40");
        $db -> Execute("UPDATE players SET szyb=szyb+2 WHERE id=342");
        $db -> Execute("UPDATE players SET szyb=szyb+5 WHERE id=353");
        $db -> Execute("UPDATE players SET szyb=szyb+5 WHERE id=187");
        $db -> Execute("UPDATE players SET szyb=szyb+5 WHERE id=476");
        $db -> Execute("UPDATE players SET szyb=szyb+2 WHERE id=477");
        $db -> Execute("UPDATE players SET szyb=szyb+7 WHERE id=478");
        $db -> Execute("UPDATE players SET szyb=szyb+2 WHERE id=479");
        $db -> Execute("UPDATE players SET szyb=szyb+5 WHERE id=15");
        $db -> Execute("UPDATE players SET szyb=szyb+1 WHERE id=169");
        $db -> Execute("UPDATE players SET szyb=szyb+2 WHERE id=203");
        $db -> Execute("UPDATE players SET szyb=szyb+1 WHERE id=313");
        $db -> Execute("UPDATE players SET szyb=szyb+2 WHERE id=236");
        $db -> Execute("UPDATE players SET szyb=szyb+1 WHERE id=268");        
        
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=473");
        $db -> Execute("UPDATE players SET mining=mining+1.6 WHERE id=475");
        $db -> Execute("UPDATE players SET mining=mining+2.1 WHERE id=40");
        $db -> Execute("UPDATE players SET mining=mining+1.8 WHERE id=342");
        $db -> Execute("UPDATE players SET mining=mining+1.4 WHERE id=353");
        $db -> Execute("UPDATE players SET mining=mining+1.3 WHERE id=187");
        $db -> Execute("UPDATE players SET mining=mining+2.3 WHERE id=476");
        $db -> Execute("UPDATE players SET mining=mining+2.7 WHERE id=477");
        $db -> Execute("UPDATE players SET mining=mining+1.2 WHERE id=478");
        $db -> Execute("UPDATE players SET mining=mining+1.1 WHERE id=479");
        $db -> Execute("UPDATE players SET mining=mining+1.0 WHERE id=15");
        $db -> Execute("UPDATE players SET mining=mining+2.5 WHERE id=169");
        $db -> Execute("UPDATE players SET mining=mining+1.8 WHERE id=203");
        $db -> Execute("UPDATE players SET mining=mining+1.4 WHERE id=313");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=236");
        $db -> Execute("UPDATE players SET mining=mining+2.3 WHERE id=268");       
        
        
             $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=933");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=937");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=926");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=922");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=914");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=896");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=886");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=737");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=744");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=763");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=811");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=838");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=828");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=851");
        $db -> Execute("UPDATE players SET mining=mining+1.5 WHERE id=942");
        
        
        
        
        
        
        
        
        
        
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=473");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=475");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=40");
        $db -> Execute("UPDATE players SET shoot=shoot+0.3 WHERE id=342");
        $db -> Execute("UPDATE players SET shoot=shoot+0.6 WHERE id=353");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=187");
        $db -> Execute("UPDATE players SET shoot=shoot+0.3 WHERE id=476");
        $db -> Execute("UPDATE players SET shoot=shoot+0.1 WHERE id=477");
        $db -> Execute("UPDATE players SET shoot=shoot+0.5 WHERE id=478");
        $db -> Execute("UPDATE players SET shoot=shoot+0.3 WHERE id=479");
        $db -> Execute("UPDATE players SET shoot=shoot+0.4 WHERE id=15");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=169");
        $db -> Execute("UPDATE players SET shoot=shoot+0.3 WHERE id=203");
        $db -> Execute("UPDATE players SET shoot=shoot+0.3 WHERE id=313");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=236");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=268");   
        
            $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=933");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=937");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=926");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=922");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=914");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=896");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=886");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=737");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=744");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=763");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=811");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=838");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=828");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=851");
        $db -> Execute("UPDATE players SET shoot=shoot+0.2 WHERE id=942");
        
        
         $db -> Execute("UPDATE tribes SET prest=prest+58 WHERE id=25");
      $db -> Execute("UPDATE gielda SET cost=cost+321 WHERE id=25"); 
       $db -> Execute("UPDATE tribes SET prest=prest+42 WHERE id=26");
      $db -> Execute("UPDATE gielda SET cost=cost+211 WHERE id=26"); 
        
        

  
        
        
    }
     if ($chance == 3)
    {
        
         $db -> Execute("UPDATE players SET page='$h' WHERE id=473");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=475");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=40");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=342");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=353");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=187");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=476");
        $db -> Execute("UPDATE players SET page='$k' WHERE id=477");
        $db -> Execute("UPDATE players SET page='$l' WHERE id=478");
        $db -> Execute("UPDATE players SET page='$p' WHERE id=479");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=15");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=169");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=203");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=313");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=236");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=268");
        
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=473");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=475");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=342");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=353");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=187");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=476");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=477");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=478");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=479");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=15");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=169");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=203");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=313");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=236");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=268");  
   
          $db -> Execute("UPDATE players SET page='$f' WHERE id=933");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=937");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=926");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=922");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=914");
        $db -> Execute("UPDATE players SET page='$y' WHERE id=896");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=886");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=737");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=744");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=763");
        $db -> Execute("UPDATE players SET page='$v' WHERE id=811");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=838");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=828");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=851");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=942");
        
         $db -> Execute("UPDATE players SET gametype='$on' WHERE id=933");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=937");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=926");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=922");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=914");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=896");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=886");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=737");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=744");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=763");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=811");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=838");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=828");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=851");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=942");
        
      $db -> Execute("UPDATE tribes SET prest=prest+20 WHERE id=25");
      $db -> Execute("UPDATE gielda SET cost=cost+3 WHERE id=25"); 
      $db -> Execute("UPDATE tribes SET prest=prest+10 WHERE id=26");
      $db -> Execute("UPDATE gielda SET cost=cost+4 WHERE id=26"); 
        
        
    }
     if ($chance == 4)
    {
        
        $db -> Execute("UPDATE players SET page='$d' WHERE id=473");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=475");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=40");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=342");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=353");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=187");
        $db -> Execute("UPDATE players SET page='$c' WHERE id=476");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=477");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=478");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=479");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=15");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=169");
        $db -> Execute("UPDATE players SET page='$u' WHERE id=203");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=313");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=236");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=268");
        
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=342");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=353");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=187");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=476");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=477");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=478");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=479");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=15");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=169");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=203");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=313");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=236");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=268"); 
        
          $db -> Execute("UPDATE players SET page='$s' WHERE id=933");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=937");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=926");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=922");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=914");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=896");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=886");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=737");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=744");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=763");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=811");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=838");
        $db -> Execute("UPDATE players SET page='$l' WHERE id=828");
        $db -> Execute("UPDATE players SET page='$o' WHERE id=851");
        $db -> Execute("UPDATE players SET page='$o' WHERE id=942");
        
         $db -> Execute("UPDATE players SET gametype='$off' WHERE id=933");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=937");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=926");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=922");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=914");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=896");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=886");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=737");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=744");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=763");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=811");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=838");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=828");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=851");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=942");
        
          $db -> Execute("UPDATE tribes SET prest=prest+1 WHERE id=25");
      $db -> Execute("UPDATE gielda SET cost=cost+2 WHERE id=25"); 
      $db -> Execute("UPDATE tribes SET prest=prest+1 WHERE id=26");
      $db -> Execute("UPDATE gielda SET cost=cost+6 WHERE id=26"); 
        
        
    }
     if ($chance == 5)
    {
        
        $db -> Execute("UPDATE players SET page='$d' WHERE id=473");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=475");
        $db -> Execute("UPDATE players SET page='$w' WHERE id=40");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=342");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=353");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=187");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=476");
        $db -> Execute("UPDATE players SET page='$k' WHERE id=477");
        $db -> Execute("UPDATE players SET page='$l' WHERE id=478");
        $db -> Execute("UPDATE players SET page='$o' WHERE id=479");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=15");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=169");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=203");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=313");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=236");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=268");
        
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=342");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=353");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=187");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=476");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=477");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=478");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=479");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=15");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=169");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=203");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=313");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=236");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=268");    
   
          $db -> Execute("UPDATE players SET page='$g' WHERE id=933");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=937");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=926");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=922");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=914");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=896");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=886");
        $db -> Execute("UPDATE players SET page='$v' WHERE id=737");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=744");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=763");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=811");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=838");
        $db -> Execute("UPDATE players SET page='$c' WHERE id=828");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=851");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=942");
        
         $db -> Execute("UPDATE players SET gametype='$on' WHERE id=933");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=937");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=926");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=922");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=914");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=896");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=886");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=737");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=744");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=763");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=811");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=838");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=828");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=851");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=942");
        
          $db -> Execute("UPDATE tribes SET prest=prest+30 WHERE id=25");
      $db -> Execute("UPDATE gielda SET cost=cost+20 WHERE id=25"); 
      $db -> Execute("UPDATE tribes SET prest=prest+25 WHERE id=26");
      $db -> Execute("UPDATE gielda SET cost=cost+21 WHERE id=26"); 
        
        
        
    }
     if ($chance == 6)
    {
        
        $db -> Execute("UPDATE players SET page='$z' WHERE id=473");
        $db -> Execute("UPDATE players SET page='$e' WHERE id=475");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=40");
        $db -> Execute("UPDATE players SET page='$z' WHERE id=342");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=353");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=187");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=476");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=477");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=478");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=479");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=15");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=169");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=203");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=313");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=236");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=268");
        
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=475");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=342");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=353");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=187");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=476");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=477");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=478");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=479");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=15");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=169");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=203");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=313");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=236");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=268");        
   
     $db -> Execute("UPDATE players SET page='$b' WHERE id=933");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=937");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=926");
        $db -> Execute("UPDATE players SET page='$v' WHERE id=922");
        $db -> Execute("UPDATE players SET page='$v' WHERE id=914");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=896");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=886");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=737");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=744");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=763");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=811");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=838");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=828");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=851");
        $db -> Execute("UPDATE players SET page='$o' WHERE id=942");
        
         $db -> Execute("UPDATE players SET gametype='$off' WHERE id=933");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=937");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=926");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=922");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=914");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=896");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=886");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=737");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=744");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=763");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=811");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=838");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=828");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=851");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=942");
        
        
       
        
    }
     if ($chance == 7)
    {
        $db -> Execute("UPDATE players SET page='$z' WHERE id=473");
        $db -> Execute("UPDATE players SET page='$e' WHERE id=475");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=40");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=342");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=353");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=187");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=476");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=477");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=478");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=479");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=15");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=169");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=203");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=313");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=236");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=268");
        
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=473");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=475");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=342");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=353");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=187");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=476");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=477");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=478");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=479");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=15");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=169");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=203");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=313");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=236");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=268"); 
         
          $db -> Execute("UPDATE players SET page='$f' WHERE id=933");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=937");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=926");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=922");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=914");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=896");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=886");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=737");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=744");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=763");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=811");
        $db -> Execute("UPDATE players SET page='$e' WHERE id=838");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=828");
        $db -> Execute("UPDATE players SET page='$c' WHERE id=851");
        $db -> Execute("UPDATE players SET page='$c' WHERE id=942");
        
         $db -> Execute("UPDATE players SET gametype='$off' WHERE id=933");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=937");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=926");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=922");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=914");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=896");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=886");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=737");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=744");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=763");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=811");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=838");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=828");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=851");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=942");
        
          $db -> Execute("UPDATE tribes SET prest=prest+3 WHERE id=25");
      $db -> Execute("UPDATE gielda SET cost=cost+3 WHERE id=25"); 
      $db -> Execute("UPDATE tribes SET prest=prest+1 WHERE id=26");
      $db -> Execute("UPDATE gielda SET cost=cost+4 WHERE id=26"); 
        
    }
     if ($chance == 8)
    {
        
             $db -> Execute("UPDATE players SET page='$t' WHERE id=473");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=475");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=40");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=342");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=353");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=187");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=476");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=477");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=478");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=479");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=15");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=169");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=203");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=313");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=236");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=268");
        
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=475");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=342");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=353");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=187");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=476");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=477");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=478");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=479");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=15");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=169");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=203");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=313");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=236");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=268");       
   
          $db -> Execute("UPDATE players SET page='$f' WHERE id=933");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=937");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=926");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=922");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=914");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=896");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=886");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=737");
        $db -> Execute("UPDATE players SET page='$k' WHERE id=744");
        $db -> Execute("UPDATE players SET page='$w' WHERE id=763");
        $db -> Execute("UPDATE players SET page='$e' WHERE id=811");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=838");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=828");
        $db -> Execute("UPDATE players SET page='$e' WHERE id=851");
        $db -> Execute("UPDATE players SET page='$w' WHERE id=942");
        
         $db -> Execute("UPDATE players SET gametype='$on' WHERE id=933");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=937");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=926");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=922");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=914");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=896");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=886");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=737");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=744");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=763");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=811");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=838");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=828");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=851");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=942");
        
          $db -> Execute("UPDATE tribes SET prest=prest+20 WHERE id=25");
      $db -> Execute("UPDATE gielda SET cost=cost+15 WHERE id=25"); 
      $db -> Execute("UPDATE tribes SET prest=prest+10 WHERE id=26");
      $db -> Execute("UPDATE gielda SET cost=cost+16 WHERE id=26"); 
        
        
    }
     if ($chance == 9)
    {
        
        $db -> Execute("UPDATE players SET page='$a' WHERE id=473");
        $db -> Execute("UPDATE players SET page='$g' WHERE id=475");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=40");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=342");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=353");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=187");
        $db -> Execute("UPDATE players SET page='$l' WHERE id=476");
        $db -> Execute("UPDATE players SET page='$k' WHERE id=477");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=478");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=479");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=15");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=169");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=203");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=313");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=236");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=268");
        
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=475");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=342");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=353");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=187");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=476");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=477");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=478");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=479");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=15");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=169");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=203");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=313");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=236");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=268"); 
        
        
        
        
          $db -> Execute("UPDATE players SET page='$g' WHERE id=933");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=937");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=926");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=922");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=914");
        $db -> Execute("UPDATE players SET page='$y' WHERE id=896");
        $db -> Execute("UPDATE players SET page='$w' WHERE id=886");
        $db -> Execute("UPDATE players SET page='$e' WHERE id=737");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=744");
        $db -> Execute("UPDATE players SET page='$c' WHERE id=763");
        $db -> Execute("UPDATE players SET page='$v' WHERE id=811");
        $db -> Execute("UPDATE players SET page='$v' WHERE id=838");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=828");
        $db -> Execute("UPDATE players SET page='$f' WHERE id=851");
        $db -> Execute("UPDATE players SET page='$e' WHERE id=942");
        
         $db -> Execute("UPDATE players SET gametype='$off' WHERE id=933");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=937");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=926");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=922");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=914");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=896");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=886");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=737");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=744");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=763");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=811");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=838");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=828");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=851");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=942");
        
        
        
        
    }
     if ($chance == 10)
    {
        
             $db -> Execute("UPDATE players SET page='$e' WHERE id=473");
        $db -> Execute("UPDATE players SET page='$e' WHERE id=475");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=40");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=342");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=353");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=187");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=476");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=477");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=478");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=479");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=15");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=169");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=203");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=313");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=236");
        $db -> Execute("UPDATE players SET page='$o' WHERE id=268");
        
        
        $db -> Execute("UPDATE players SET page='$e' WHERE id=933");
        $db -> Execute("UPDATE players SET page='$h' WHERE id=937");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=926");
        $db -> Execute("UPDATE players SET page='$a' WHERE id=922");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=914");
        $db -> Execute("UPDATE players SET page='$t' WHERE id=896");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=886");
        $db -> Execute("UPDATE players SET page='$m' WHERE id=737");
        $db -> Execute("UPDATE players SET page='$b' WHERE id=744");
        $db -> Execute("UPDATE players SET page='$s' WHERE id=763");
        $db -> Execute("UPDATE players SET page='$d' WHERE id=811");
        $db -> Execute("UPDATE players SET page='$r' WHERE id=838");
        $db -> Execute("UPDATE players SET page='$n' WHERE id=828");
        $db -> Execute("UPDATE players SET page='$j' WHERE id=851");
        $db -> Execute("UPDATE players SET page='$o' WHERE id=942");
        
         $db -> Execute("UPDATE players SET gametype='$on' WHERE id=933");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=937");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=926");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=922");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=914");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=896");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=886");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=737");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=744");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=763");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=811");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=838");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=828");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=851");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=942");
        
        
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=473");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=475");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=40");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=342");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=353");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=187");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=476");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=477");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=478");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=479");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=15");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=169");
        $db -> Execute("UPDATE players SET gametype='$on' WHERE id=203");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=313");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=236");
        $db -> Execute("UPDATE players SET gametype='$off' WHERE id=268"); 
   
        
      
        
        
    }
     
    
      
}




?>
