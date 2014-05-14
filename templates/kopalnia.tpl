<center><IMG SRC="images/locations/kopalnia.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
   Wędrując po Górach Przeznaczenia Twoją uwagę przykuwa pewna olbrzymia skała. Dostrzegłeś z daleka, że jest na niej wyrzeźbiona wielka czaszka. Podchodząc bliżej Twoim oczom ukazał się wielki skalisty most i wejście do jaskini przez czaszkę. Opętały Cię różne złowrogie wizje. Straciłeś przez nie ochotę na zwiedzanie tej jaskini, jednak podchodzi do Ciebie podróżnik którego spotkałeś już w drodze do Gór Przeznaczenia. Powiedział on Ci, że to przeklęta kopalnia, lecz nie jest taka straszna mimo pozorów i otaczających ją legend. Spojrzałeś jeszcze raz na nią, a odwróciwszy się podróżnika już nie było. Postanowiłeś zwiedzić kopalnię. Przeszedłeś powoli i niepewnym krokiem przez most. Wszedłeś do wnętrza jaskini i widzisz wydobywających tutaj różne minerały krasnoludów. Zastanawiasz się co chcesz zrobić… 
 {strip}
{if $smarty.get.action == "dig"}
    {$Youfind}<br /><br />
{/if}

{if $Health > "0"}
  <br>  <form method="post" action="kopalnia.php?action=dig">
        <input type="submit" value="{$smarty.const.A_SEARCH}" /> {$smarty.const.T_MINERALS} <input type="text" name="amount" size="5" value="0" /> {$smarty.const.T_AMOUNT}
    </form><br />
    - <a href="gory.php">{$smarty.const.NO}</a><br />
{/if}
{/strip}
