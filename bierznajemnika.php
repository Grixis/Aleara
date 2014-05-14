<?php
$title = 'Wyjście Z Opuszczonej Kopalni';
require_once('includes/head.php');
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}


$test = $db -> Execute("SELECT kluczaktywny FROM players WHERE id=".$player -> id);
$kluczaktywny= $test -> fields['kluczaktywny'];
$smarty -> assign(array("kluczaktywny" => $kluczaktywny));
$test = $db -> Execute("SELECT bosszabity FROM players WHERE id=".$player -> id);
$bosszabity= $test -> fields['bosszabity'];
$smarty -> assign(array("bosszabity" => $bosszabity));
$test = $db -> Execute("SELECT losowanienagrody FROM players WHERE id=".$player -> id);
$losowanienagrody= $test -> fields['losowanienagrody'];
$smarty -> assign(array("losowanienagrody" => $losowanienagrody));
$test = $db -> Execute("SELECT najemnikblokada FROM players WHERE id=".$player -> id);
$najemnikblokada= $test -> fields['najemnikblokada'];
$smarty -> assign(array("najemnikblokada" => $najemnikblokada));
if ($bosszabity < 1) {
      error ('<center><IMG SRC="koopalnia.png"></center>Nie zabiłeś jeszcze bossa. Nie ma nic na skróty -.- <a href="las.php">(Wróć)</a>');
}
if ($kluczaktywny < 1) {
      error ('<center><IMG SRC="koopalnia.png"></center>Nie otworzyłeś jeszcze drzwi. Nie ma nic na skróty -.- <a href="las.php">(Wróć)</a>');
}
if ($losowanienagrody < 0) {
      error ('<center><IMG SRC="koopalnia.png"></center>Wchodzisz do pomieszczenia. Nie widzisz jednak nic ciekawego więc <a href="las.php">wychodzisz!</a>');
}
if ($najemnikblokada > 0) {
      error ('<center><IMG SRC="koopalnia.png"></center>Wchodzisz do pomieszczenia. Nie widzisz jednak nic ciekawego więc <a href="las.php">wychodzisz!</a>');
}






$intRoll = rand(1, 3);
       

		        if ($intRoll == 1) 
        {
    
        
        $db -> Execute('UPDATE najemnicystaty SET zrecznosc=zrecznosc+20 WHERE id='.$player -> id);
        $db -> Execute('UPDATE najemnicystaty SET wytrzymalosc=wytrzymalosc+10 WHERE id='.$player -> id);
          $db -> Execute('UPDATE najemnicystaty SET szybkosc=szybkosc+20 WHERE id='.$player -> id);
        //
            $db -> Execute('UPDATE players SET szyb=szyb+20 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET agility=agility+20 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET wytrz=wytrz+10 WHERE id='.$player -> id);
        
        $db -> Execute('UPDATE players SET najemnikblokada=najemnikblokada+1 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET najemnicy=najemnicy+1 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET questkopalnia=questkopalnia+1 WHERE id='.$player -> id);
           error ('<center><IMG SRC="koopalnia.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Zgodziłeś się uwolnić najemnika. Szybko rozkuwasz jego kajdany i <a href=las.php>wybiegacie z kopalni. [quest wykonany]</a>
<br><br>Otrzymujesz najemnika!<br>
+20 szybkość, +20 zręczność, +10 wytrzymałość!');
        }
        		if ($intRoll == 2) 
        {
       
      
        $db -> Execute('UPDATE najemnicystaty SET zrecznosc=zrecznosc+10 WHERE id='.$player -> id);
        $db -> Execute('UPDATE najemnicystaty SET wytrzymalosc=wytrzymalosc+10 WHERE id='.$player -> id);
        $db -> Execute('UPDATE najemnicystaty SET sila=sila+10 WHERE id='.$player -> id);
        
        //
          $db -> Execute('UPDATE players SET agility=agility+10 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET questkopalnia=questkopalnia+1 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET wytrz=wytrz+10 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET strenght=strenght+10 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET najemnikblokada=najemnikblokada+1 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET najemnicy=najemnicy+1 WHERE id='.$player -> id);
      
           error ('<center><IMG SRC="koopalnia.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Zgodziłeś się uwolnić najemnika. Szybko rozkuwasz jego kajdany i <a href=las.php>wybiegacie z kopalni. [quest wykonany]</a>
<br><br>Otrzymujesz najemnika!<br>
+10 zręczność, +10 wytrzymałość!');       }
        if ($intRoll == 3) 
        {
 
        $db -> Execute('UPDATE najemnicystaty SET inteligencja=inteligencja+20 WHERE id='.$player -> id);
        $db -> Execute('UPDATE najemnicystaty SET silawoli=silawoli+20 WHERE id='.$player -> id);
        $db -> Execute('UPDATE najemnicystaty SET wytrzymalosc=wytrzymalosc+10 WHERE id='.$player -> id);
        
            $db -> Execute('UPDATE players SET questkopalnia=questkopalnia+1 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET wisdom=wisdom+20 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET inteli=inteli+20 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET wytrz=wytrz+10 WHERE id='.$player -> id);
        
        $db -> Execute('UPDATE players SET najemnikblokada=najemnikblokada+1 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET najemnicy=najemnicy+1 WHERE id='.$player -> id);
        
           error ('<center><IMG SRC="koopalnia.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Zgodziłeś się uwolnić najemnika. Szybko rozkuwasz jego kajdany i <a href=las.php>wybiegacie z kopalni. [quest wykonany]</a>
<br><br>Otrzymujesz najemnika!<br>
+20 inteligencja, +20 siła woli, +10 wytrzymałość!');
        
    }    
$smarty -> display('bierznajemnika.tpl');
require_once("includes/foot.php"); 
?>
