{strip}
{if $Action == "" && $Step == "" && $Quest == 'N'}
<center><IMG SRC="images/locations/cmentdiabur.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    <br />{$Labinfo} <a href="cmentarzysko.php?action=explore">{$Ayes}.</a>
{/if}

{if ($Chance == "1" || $Chance == "2" || $Chance == "4" || $Chance == "5" || $Chance == "7" || $Chance == "8" || $Chance == "9" || $Chance == "10" || $Chance == 11 || $Chance == 12 || $Chance == 13 || $Chance == 14 || $Chance == 15 || $Chance == 16 || $Chance == 17 || $Chance == 18 || $Chance == 21 || $Chance == 24 || $Chance == 25 || $Chance == 26 || $Chance == 27 || $Chance == 28 || $Chance == 29 || $Chance == 30) && $Quest == 'N'}
   <center><IMG SRC="images/locations/cmentdiabur.png"></center>
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{$Action2}
{/if}


{if $Chance == "3" && $Quest == 'N'}
<center><IMG SRC="images/locations/cmentdiabur.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{$Action2} <b>{$Goldgain}</b> {$Action3}
{/if}
{if $Chance == "19" && $Quest == 'N'}
<center><IMG SRC="images/locations/cmentdiabur.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{$Action2} <b>{$Grzybygain}</b> {$Action3}
  {/if}
    {if $Chance == "22" && $Quest == 'N'}
<center><IMG SRC="images/locations/cmentdiabur.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{$Action2} <b>{$Pokrzywagain}</b> {$Action3}
{/if}
{if $Chance == "6" && $Quest == 'N'}
<center><IMG SRC="images/locations/cmentdiabur.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{$Action2} <b>{$Mithgain}</b> {$Action3}
{/if}
{if $Chance == "23" && $Quest == 'N'}
<center><IMG SRC="images/locations/cmentdiabur.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{$Action2} <b>{$Meteorytgain}</b> {$Action3}
{/if}
{if $Chance == "20" && $Quest == 'N'}
<center><IMG SRC="images/locations/cmentdiabur.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{$Action2} <b>{$Expgain}</b> {$Action3}
{/if}
{if $Action == "explore" && ($Chance < 0 || $Chance == 1 || $Chance == 2 || $Chance == 3 || $Chance == 4 || $Chance == 5 || $Chance == 6 || $Chance == 7 || $Chance == 8 || $Chance == 9 || $Chance == 10 || $Chance == 11 || $Chance == 12 || $Chance == 13 || $Chance == 14 || $Chance == 15 || $Chance == 16 || $Chance == 17 || $Chance == 18 || $Chance == 19 || $Chance == 20 || $Chance == 21 || $Chance == 22 || $Chance == 23 || $Chance == 24 || $Chance == 25 || $Chance == 26 || $Chance == 27 || $Chance == 28 || $Chance == 29 || $Chance == 30) && $Quest == 'N'}
    <br /><br />... <a href="cmentarzysko.php?action=explore">{$Aexp}</a> {$Tnext} {$Energyleft} {$Enpts}.)
{/if}

{/strip}