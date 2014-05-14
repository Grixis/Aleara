<?php
$title = 'Opuszczona Kopalnia - Wejście';
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

if ($bosszabity < 1) {
      error ('<center><IMG SRC="szybrogotona.png"></center>Nie zabiłeś jeszcze bossa. Nie ma nic na skróty -.- <a href="las.php">(Wróć)</a>');
}
if ($kluczaktywny < 1) {
      error ('<center><IMG SRC="szybrogotona.png"></center>Nie otworzyłeś jeszcze drzwi. Nie ma nic na skróty -.- <a href="las.php">(Wróć)</a>');
}
if ($losowanienagrody > 0) {
      error ('<center><IMG SRC="szybrogotona.png"></center>Wchodzisz do pomieszczenia. Nie widzisz jednak nieznajomego więc <a href="kopalniab.php">idziesz dalej!</a>');
}







$intRoll = rand(1, 27);
       

		        if ($intRoll == 1) 
        {
        $db -> Execute('UPDATE players SET exp=exp+1000 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
           error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>1.000 pkt doświadczenia.</b>. <a href=kopalniab.php>Idziesz dalej!</a>');
        }
        		if ($intRoll == 2) 
        {
        $db -> Execute('UPDATE players SET exp=exp+10000 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
           error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>10.000 pkt doświadczenia. </b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
        if ($intRoll == 3) 
        {
        $db -> Execute('UPDATE players SET exp=exp+100000 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>100.000 pkt doświadczenia. </b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
         if ($intRoll == 4) 
        {
        $db -> Execute('UPDATE players SET platinum=platinum+1000 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>1.000 sztuk mithrilu</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
        if ($intRoll == 5) 
        {
        $db -> Execute('UPDATE players SET platinum=platinum+10000 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>10.000 sztuk mithrilu</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
        if ($intRoll == 6) 
        {
        $db -> Execute('UPDATE players SET credits=credits+500000 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
           error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>500.000 sztuk złota</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
        if ($intRoll == 7) 
        {
        $db -> Execute('UPDATE players SET klejnotmuttaua=klejnotmuttaua+10 WHERE id='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>10 klejnotów Muttaua</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
            if ($intRoll == 8) 
        {
         $db -> Execute('UPDATE minerals SET meteor=meteor+200 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
           error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>200 brył meteorytu</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
        if ($intRoll == 9) 
        {
        $db -> Execute('UPDATE minerals SET meteor=meteor+500 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>500 brył meteorytu</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
         if ($intRoll == 10) 
        {
        $db -> Execute('UPDATE minerals SET pine=pine+30000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>30.000 sztuk drewna sosnowego</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
        
     if ($intRoll == 11) 
        {
        $db -> Execute('UPDATE minerals SET adamantium=adamantium+10000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>10.000 sztuk adamantium</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
     if ($intRoll == 12) 
        {
        $db -> Execute('UPDATE minerals SET crystal=crystal+20000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>20.000 sztuk kryształu</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
     if ($intRoll == 13) 
        {
        $db -> Execute('UPDATE minerals SET coal=coal+30000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>30.000 brył węgla</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
     if ($intRoll == 14) 
        {
        $db -> Execute('UPDATE minerals SET elm=elm+10000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>10.000 sztuk drewna z wiązu</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
     if ($intRoll == 15) 
        {
        $db -> Execute('UPDATE herbs SET illanias=illanias+400 WHERE gracz='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>400 sztuk illanias</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
            if ($intRoll == 16) 
        {
         $db -> Execute('UPDATE minerals SET meteor=meteor+1000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
           error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>1.000 brył meteorytu</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
         if ($intRoll == 17) 
        {
        $db -> Execute('UPDATE minerals SET pine=pine+5000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>5.000 sztuk drewna sosnowego</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
         if ($intRoll == 18) 
        {
        $db -> Execute('UPDATE minerals SET pine=pine+50000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>50.000 sztuk drewna sosnowego</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }

     if ($intRoll == 19) 
        {
        $db -> Execute('UPDATE minerals SET adamantium=adamantium+5000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>5.000 sztuk adamantium</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
     if ($intRoll == 20) 
        {
        $db -> Execute('UPDATE minerals SET adamantium=adamantium+20000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>20.000 sztuk adamantium</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
     if ($intRoll == 21) 
        {
        $db -> Execute('UPDATE minerals SET crystal=crystal+10000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>10.000 sztuk kryształu</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
     if ($intRoll == 22) 
        {
        $db -> Execute('UPDATE minerals SET crystal=crystal+30000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>30.000 sztuk kryształu</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
     if ($intRoll == 23) 
        {
        $db -> Execute('UPDATE minerals SET coal=coal+10000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>10.000 brył węgla</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
     if ($intRoll == 24) 
        {
        $db -> Execute('UPDATE minerals SET coal=coal+40000 WHERE owner='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>40.000 brył węgla</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
     if ($intRoll == 25) 
        {
        $db -> Execute('UPDATE herbs SET illanias=illanias+100 WHERE gracz='.$player -> id);
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. Przed Tobą pojawia się: <b>100 sztuk illanias</b>. <a href=kopalniab.php>Zabierasz to i idziesz dalej!</a>');
        }
     if ($intRoll == 26) 
        {
       
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. <b>Masz pecha. Karta jest pusta.</b>. <a href=kopalniab.php>Idziesz dalej!</a>');
        }
             if ($intRoll == 27) 
        {
       
        $db -> Execute('UPDATE players SET losowanienagrody=losowanienagrody+1 WHERE id='.$player -> id);
            error ('<center><IMG SRC="szybrogotona.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wskazujesz nieznajomemu jedną z kilkudziesięciu magicznych kart. On spogląda na Ciebie i pokazuje Ci ją. <b>Masz pecha. Karta jest pusta.</b>. <a href=kopalniab.php>Idziesz dalej!</a>');
        }
$smarty -> display('losowanie.tpl');
require_once("includes/foot.php"); 
?>
