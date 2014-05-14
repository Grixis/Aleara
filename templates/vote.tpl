<center><h2>Wspomóż nas w promowaniu gry!</h2></center>
Kraina nie przetrwa bez was, graczy. Dbajmy o to by było nas jak najwięcej, promujmy nas. Jednym ze
sposobów jest głosowanie na nas w toplistach. Proszę, poświęć chwilę na oddanie głosu - ciebie nic to nie kosztuje, 
a może być niezmiernie pomocne w istnieniu krainy. Za każde kliknięcie na przycisk dostaniesz jednego Denara. Tą specyficzną
walutę możesz wymienić w Sklepie z brylantami który znajduje się w każdym mieście na różne nagrody. Na każdą toplistę można oddać
głos tylko raz dziennie. Głosowałeś już dziś <b>{$Voted}</b> razy oraz posiadasz <b>{$Denars}</b> denarów.<br><br>
<center>
<fieldset><p><b>Głosowanie 1 :</b> <a target="_blank" href="vote.php?top=one"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 2 :</b> <a target="_blank" href="vote.php?top=three"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 3 :</b> <a target="_blank" href="vote.php?top=five"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 4 :</b> <a target="_blank" href="vote.php?top=thirteen"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 5 :</b> <a target="_blank" href="vote.php?top=14"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 6 :</b> <a target="_blank" href="vote.php?top=16"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 7 :</b> <a target="_blank" href="vote.php?top=17"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 8 :</b> <a target="_blank" href="vote.php?top=19"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 9 :</b> <a target="_blank" href="vote.php?top=20"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 10 :</b> <a target="_blank" href="vote.php?top=21"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 11 :</b> <a target="_blank" href="vote.php?top=31"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 12 :</b> <a target="_blank" href="vote.php?top=32"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>



<br>
<center><b>Zaproś swoich znajomych z Facebooka</b></center>
Gra umożliwia wysłanie zaproszenia do gry twoim zanjomym. Również pomaga to w promocji gry, a co za tym idzie więcej graczy z którymi możemy grać :)<br>
<div id="fb-root"></div>
	{literal}
<center><a href="vote.php?fbrequest=send">Zaproś znajomych!</a></center>
{/literal}





</center>
<br>
<h1>Najwięcej denarów</h2>
<table style="border: 1px solid #636f6b;" cellspacing="0" cellpadding="2">
    <tr>
        <th>Miejsce</th>
        <th>ID</th>
        <th width="150px;">Gracz</th>
        <th>Denary</th>
        
    </tr>
    {section name=i loop=$Arrid}
    <tr {if $smarty.section.i.iteration < 4}bgcolor="#646464"{/if}>
        <td>{$smarty.section.i.iteration}.</td>
        <td>{$Arrid[i]}</td>
        <td><a href="view.php?view={$Arrid[i]}">{$Arruser[i]}</a></td>
        <td style="text-align:right"><span style="color: orange;">{$Arrdenars[i]}</span></td>
    </tr>
    {/section}
</table>
