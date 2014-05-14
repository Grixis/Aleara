{strip}
{if $Action == "" && $Step == "" && $Quest == 'N'}
<center><IMG SRC="images/locations/kanaly.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <br /> Schodzisz w dół drabinką do miejskich kanałów. System ten rozbudowano w zamierzchłych czasach. Nikt do końca nie wie czemu służył ten wielki, rozbudowany labirynt korytarzy, ciągnący się pod ziemią daleko poza granice miasta. Dziś jednak podziemny system wykorzystywany jest jako doskonały system kanalizacyjny. Jednak rozmiary i przestronność tej starożytnej budowli stały się także schronieniem dla rzeszy ulicznych żebraków, rzezimieszków i innego hultajstwa, poszukującego skarbów oraz cennych pozostałości z dawnych lat. Ponadto czym dalej w głąb tym coraz niebezpieczniej – można natknąć się na grupę goblinów, koboldów, orków lub nawet na potężniejsze potwory. Czy jesteś pewien, że chcesz podążać w nieznane?
    <br> <a href="grid.php?action=explore">{$Ayes}.</a>
{/if}

{if ($Chance == "1" || $Chance == "2" || $Chance == "4" || $Chance == "5" || $Chance == "7" || $Chance == "8" || $Chance == "9" || $Chance == 11) && $Quest == 'N'}
 <center><IMG SRC="images/locations/kanaly.png"></center>
 <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <br />{$Action2}
{/if}

{if $Chance == "3" && $Quest == 'N'}
  <center><IMG SRC="images/locations/kanaly.png"></center>
  <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <br />{$Action2} <b>{$Goldgain}</b> {$Action3}
{/if}

{if $Chance == "6" && $Quest == 'N'}
 <center><IMG SRC="images/locations/kanaly.png"></center>
 <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <br />{$Action2} <b>{$Mithgain}</b> {$Action3}
{/if}

{if $Action == "explore" && ($Chance < 10 || $Chance == 11) && $Quest == 'N'}
   
   <br /><br />... <a href="grid.php?action=explore">{$Aexp}</a> {$Tnext} {$Energyleft} {$Enpts}.)
{/if}

{/strip}