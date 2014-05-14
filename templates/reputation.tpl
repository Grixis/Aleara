{if $smarty.get.id}





    {$smarty.const.PLAYER_REPUTATION}
    <ul>{section name=i loop=$Reps}
        <li>{$smarty.const.T_ADDED} {$Reps[i].points} {$smarty.const.T_POINTS} {$smarty.const.T_FOR_A} {$Reps[i].description} ({$Reps[i].date})</li>
    {/section}
    </ul>
    <a href="reputation.php">{$smarty.const.T_LIST_BACK}</a> | <a href="view.php?view={$id}">{$smarty.const.T_PROFILE_BACK}</a>
{else}
    <p>{$smarty.const.T_REPUTATION_DESC}</p>
    
    
    
   <center><IMG SRC="images/locations/dommurgrabiego.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Witaj w Domu Murgrabiego. Obecny murgrabia:<a href="view.php?view=29"> Shanes</a>, oficjalne konto Murgrabiego:<a href="view.php?view=253"> Murgrabia</a><br><br><br>

<div class="ui-state-error ui-corner-all" style="margin-top: 20px; padding: 0 .7em;"><br>{$Mess}<br>&nbsp;</div><br><br>
 <fieldset><legend><b>Punkty reputacji można otrzymać za:</b></legend>

<b>*1pkt reputacji</b> - <i>za wbicie 5 leveli w ciągu trwania tury konkursu. [max liczba pkt - 4pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 1k drewna sosnowego. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 300 meteorytu. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 1k kryształu. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 1k rudy miedzi. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 5k mithrilu wpłacanego przez postać z lvlem 1 - 20, 10k mithrilu z lvlem 20 - 40, 15k mithrilu z lvlem +40  [max liczba pkt - 3pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 20k złota wpłacanego przez postać z lvlem 1 - 20, 200k złota z lvlem 20 - 40, 400k złota z lvlem +40  [max liczba pkt - 3pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 1k dynallca. [max liczba pkt - 2pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 2 sadzonki * lvl [max liczba pkt - 3pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za komplet artefaktów diaburiona. [max liczba pkt - 4pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 2 itemy na lvl +10 gdy wplacający ma lvl mniejszy od 20, za 5 itemów na lvl +30 gry wpłacający ma lvl pomiędzy 20 - 40, za 10 itemów na lvl +50 gdy wpłacający ma lvl większy od 40. Itemy nie mogą być zwykłymi itemami ze sklapów. Musza one być wyrobami rzemieślniczymi. [max liczba pkt - 2pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 200 sztabek jednego rodzaju. [max liczba pkt - 2pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za pierwsze miejsce w jakimkolwiek posągu chwały. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za pokonanie gracza mieszczącego się w ogólnym rangingu na pozycji od 1 do 3. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za znalezienie błędu w grze. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>jeśli gildia do której należy gracz wbije +500 prestiżu w ciągu trwania tury konkursu. [max liczba pkt - 1pkt.]<br></i>
 </fieldset>





 <fieldset><legend><b>Zasady:</b></legend>
<b>*</b> Wartości rzeczowe należy przesyłaś na konto oficjalne Murgrabiego o ID 253.<br>
<b>*</b> Co tydzień Murgrabia ogłasza zwycięzcę (osobę która ma największą ilość punktów reputacji). W przypadku, remisów majątek dzielony jest na równe części.<br>
<b>*</b> Tylko Murgrabia i władcy, mają dostęp do konta ID: 253. <br>
<b>*</b> Murgrabia nie może kasować wpisów w dzienniku na ID 235 w trakcie trwania tury i jeden dzień po jej zakończeniu, a władcy mogą kontrolować przebieg pracy Murgrabiego.<br>
<b>*</b> Konto Murgrabia ID: 253 jest całkowicie puste, dlatego Murgrabia nie może czerpać najmniejszych kożyści z niego.<br>
<b>*</b> Punkty reputacji są wyzerowane w dzień zakończenia tury<br>
<b>*</b> Trzy pierwsze miejsca otrzymuję brylanty od Murgrabiego. 1ms - 30 brylantów, 2ms - 20 brylantów, 3ms - 10 brylantów.<br>
<b>*</b> Trzy pierwsze miejsca otrzymuję wybrany przez siebie kod do Wieży Druida.<br>
<b>*</b> W razie jakichś niejasności proszę pisać do <a href="view.php?view=29"> Shanes ID 29</a>.<br>
<b>*</b> W sprawie przyznawania punktów proszę pisać na ID: 253.<br>


<b>*</b> Osoba która zajmuje pierwsze miejsce zgarnia wszystko przesłane na konto ID 253.<br>
<br><br><b>Nagroda Pocieszenia:</b> <br>   
-2 miejsce - 500k złota.<br>
-3 miejsce - 200k złota<br>   
 </fieldset>
    <p>{$smarty.const.T_DONATORS_LINK}</p>
    
    

    <ol>{section name=i loop=$Top}
        <li><a href="view.php?view={$Top[i].player_id}">{$Top[i].user}</a> - {$Top[i].id} {$Top[i].points} {$smarty.const.T_POINTS} (<a href="reputation.php?id={$Top[i].player_id}">{$smarty.const.SHOW_LIST}</a>)</li>
    {/section}</ol>
{/if}</br>
<center><a href="murgrabia.php">Panel Murgrabiego</a><br><br></center>