{strip}
{$Welcome}
<ul {if $Graphstyle=="Y"}class="sword"{/if}>
    {section name=menu loop=$Steps}
        <li><a href="account.php?view={$Steps[menu]}" title="{$Titles[menu]}">{$Links[menu]}</a></li>
        
    {/section}
</ul>

{if $View == "links"}
    {$Linksinfo}<br />
    {if $Linksid[0] != ""}
        <table align="center">
            <tr>
                <td align="center"><b>{$Tfile}</b></td>
                <td align="center"><b>{$Tname}</b></td>
                <td><b>{$Tactions}</b><td>
            </tr>
            {section name=links loop=$Linksid}
                <tr>
                    <td>{$Linksfile[links]}</td>
                    <td>{$Linkstext[links]}</td>
                    <td>
                        <a href="account.php?view=links&amp;step=edit&amp;lid={$Linksid[links]}">{$Aedit}</a><br />
                        <a href="account.php?view=links&amp;step=delete&amp;lid={$Linksid[links]}">{$Adelete}</a>
                    </td>
                </tr>
            {/section}
        </table>
    {/if}<br /><br />
    <form method="post" action="account.php?view=links&amp;step=edit&amp;lid={$Linkid}&amp;action=change">
        {$Tfile}: <input type="text" name="linkadress" size="20" value="{$Linkfile}" /><br />
        {$Tname}: <input type="text" name="linkname" size="20" value="{$Linkname}" /><br />
        <input type="submit" value="{$Aform}" />
    </form>
{/if}

{if $View == "bugtrack"}
    {$Bugtrackinfo}<br /><br />
    <table align="center">
        <tr>
            <td><b>{$Bugid}</b></td>
            <td><b>{$Bugtype}</b></td>
            <td><b>{$Bugloc}</b></td>
            <td><b>{$Bugname}</b></td>
        </tr>
        {section name=bugtrack loop=$Bugsid}
            <tr>
                <td align="center">{$Bugsid[bugtrack]}</td>
                <td align="center">{$Bugstype[bugtrack]}</td>
                <td align="center">{$Bugsloc[bugtrack]}</td>
                <td align="center">{$Bugsname[bugtrack]}</td>
            </tr>
        {/section}
    </table>
{/if}

{if $View == "bugreport"}
    Instrukcja zglaszania błędu<br>
	Błędy zgłaszamy w systemie Mantis dostepny pod adresem <a href="http://bugs-aleara.cba.pl/">http://bugs-aleara.cba.pl/</a>.
	Nastepnie logujemy sie na specjalnie utworzone do tego konto (jesli chcesz mieć własne konto - powiadom administratorów):<br>
	<b>Login</b>: Aleara<br>
	<b>Hasło</b>: aleara<br><br>
	Nastepnie przez link "Dodaj" dodajemy nowe zgłoszenie. Pola z czerwoną gwiazdka są wymagane.<br>
	Należy pamiętać o wybraniu odpowiedniej kategorii zgłoszenia, lista poniżej.
	<ul>
		<li><b>Błąd krytyczny</b> - błąd uniemożliwiający korzystanie z gry (biała strona z komunikatem, albo dziwne komunikaty po angielsku w samej grze)</li>
		<li><b>Błąd gry</b> - błędne działanie gry, funkcji w grze. </li>
		<li><b>Błąd w opisie/tekście</b> - literówki. </li>
		<li><b>Propozycja funkcjonalności</b> - propozycje zmian w grze </li>
	</ul>
	Wypełniamy pola "temat" oraz "opis" - czego błąd dotyczy. Pole "Kroki, by powtórzyć" jest informacją co należy zrobić aby powtórzyć błąd.<br>
	Pozostałe nie oznaczone gwiazdką pola mozna pominąć. Można załączać zrzuty ekranu. Im lepiej bedzie opisany problem, tym mniej czasu zajmie jego naprawa.
{/if}

{if $View == "changes"}
    {$Changesinfo}<br />
    <ul{if $Graphstyle == "Y"} class="sword"{/if}>
        {section name=changes loop=$Changedate}
        <li>{$Changedate[changes]} {$Changeauthor[changes]}<br />
            {$Changeloc}: {$Changelocation[changes]}<br />
            {$Changetext[changes]}<br /><br />
        </li>
        {/section}
    </ul>
{/if}

{if $View == "options"}
    {$Toptions}<br /><br />
    <form method="post" action="account.php?view=options&amp;step=options">
        <input type="checkbox" name="battleloga" {$Checked} /> {$smarty.const.T_BATTLELOGA}<br />
        <input type="checkbox" name="battlelogd" {$Checked2} /> {$smarty.const.T_BATTLELOGD}<br />
        <input type="checkbox" name="graphbar" {$Checked3} /> {$smarty.const.T_GRAPHBAR}<br />
        
        <input type="checkbox" name="loginfo" {$Checked5} /> {$smarty.const.T_LOGINFO}<br />
        <input type="checkbox" name="mailinfo" {$Checked6} /> {$smarty.const.T_MAILINFO}<br /><br />
		<input type="checkbox" name="editor" {$Checked7} /> Edytory WYSIWYG (umożliwiają formatowanie tekstu i dodawanie grafik do profilu)<br />
		<input type="checkbox" name="overlib" {$Checked4} /> Rozwijena menu nawigacji<br /><br />
		
		
		Kolor nicku w tawernie:<input id="color" maxlength="6" size="6" type="text" name="color" value="{$Color}" />
		<div id="colorpicker"></div>
		<script type="text/javascript">
		{literal}
		$('#colorpicker').ColorPicker({
		flat:true,
		color: '#'+$('#color').val(),
	onSubmit: function(hsb, hex, rgb, el) {
		$('#color').val(hex);
		}
		});
		{/literal}
		</script>
        <input type="submit" value="{$Anext}" />
    </form>
    
    <i>Aby zmienić kolor nicku w tawernie należy znaleźć odpowiedni kolor, skopiować kod koloru i wkleić w pole wyżej.</i><br><br><br>
    {if $Step == "options"}
        {$Message}
    {/if}
{/if}

{if $View == "freeze"}
    {$Freezeinfo}<br /><br />
    <form method="post" action="account.php?view=freeze&amp;step=freeze">
        {$Howmany}: <input type="tezt" name="amount" size="5" /><br />
        <input type="submit" value="{$Afreeze2}" />
    </form>
    {if $Step == "freeze"}
        {$Message}
    {/if}
{/if}

{if $View == "lang"}
    {$Langinfo}<br /><br />
    <form method="post" action="account.php?view=lang&amp;step=lang">
    {$Flang} <select name="mainlang">
    {section name=account2 loop=$Lang}
        <option value="{$Lang[account2]}">{$Lang[account2]}</option>
    {/section}
    </select><br />
    {$Slang} <select name="seclang">
    {section name=account3 loop=$Lang}
        <option value="{$Lang[account3]}">{$Lang[account3]}</option>
    {/section}
    </select><br />
    <input type="submit" value="{$Aselect}" />
    </form>
    {if $Step == "lang"}
        {$Message}
    {/if}
{/if}



{if $View == "reset"}
    {$Resetinfo}?
    <ul{if $Graphstyle == "Y"} class="sword"{/if}>
    <li><a href="account.php?view=reset&amp;step=make">{$Yes}</a></li>
    <li><a href="account.php">{$No}</a></li>
    </ul>
    {if $Step == "make"}
        {$Resetselect}<br />
    {/if}
{/if}

{if $View == "resetfabularny2"}
    Opcja resetu fabularnego została wprowadzona tylko i wyłącznie z powodu wprowadzenia nowej fabuły w trakcie trwania ery. Jest to jednorazowa opcja. Podczas wykonywania resetu nic nie tracisz. Resetuje jedynie Rasę, klasę i podklasę. Czy chcesz wykonać reset?
    <ul>
    <li><a href="account.php?view=resetfabularny&amp;step=make">{$Yes}</a></li>
    <li><a href="account.php">{$No}</a></li>
    </ul>
    {if $Step == "make"}
        {$Resetselect}<br />
    {/if}
{/if}



{if $View == "avatar"}
    {$Avatarinfo}<br /><br />
    {if $Avatar != ""}
    <center><br /><br /><img alt="img_avatar" src="{$Avatar}" width="100" heigth="100">
      <form action="account.php?view=avatar&amp;step=usun" method="post">
    <input type="hidden" name="av" value="{$Value}" />
    <input type="submit" value="{$Delete}" /></form></center>
    {/if}
    <form enctype="multipart/form-data" action="account.php?view=avatar&amp;step=dodaj" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="102400" />
    {$Afilename}: <input name="plik" type="file" /><br />
    <input type="submit" value="{$Aselect}" /></form>
{/if}

{if $View == "name"}
    <form method="post" action="account.php?view=name&amp;step=name">
    <input type="submit" value="{$Change}" /> {$Myname} <input type="text" name="name" value="{$OldNick}"/>
    </form>
{/if}

{if $View == "pass"}
    {$smarty.const.PASS_INFO}<br />
    <form method="post" action="account.php?view=pass&amp;step=cp">
    <table>
    <tr><td>{$smarty.const.OLD_PASS}:</td><td><input type="password" name="cp" /></td></tr>
    <tr><td>{$smarty.const.NEW_PASS}:</td><td><input type="password" name="np" /></td></tr>
    <tr><td colspan=2 align=center><input type="submit" value="{$smarty.const.CHANGE}" /></td></tr>
    </table>
    </form>
{/if}

{if $View == "profile"}

    {if $Step == ""}
    {$Profileinfo}<br /><br />
    {$Message}<br /><br />

    <a  href="account.php?view=profile&amp;step=addtab">{$Addtab}</a><br /><br /><br />
    <table width='100%'> 
<tr><td width='35%' ><b>Nazwa zakładki:</b></td><td width='15%' ><b> Kolejność:</b></td><td width='50%' ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Opcje:</b></td></tr>
 </table>
    <table width='100%'> 
    {section name=int loop=$Tab}
    <tr><td width='40%' > {$Tab[int]}</td><td width='10%' > {$Nr[int]}</td> <td><a  href="account.php?view=profile&amp;show={$Tabid[int]}">{$Show}</a> | <a  href="account.php?view=profile&amp;step=edit&amp;tab={$Tabid[int]}">{$Edit}</a> | <a  href="account.php?view=profile&amp;step=del&amp;tab={$Tabid[int]}">{$Delete}</a></td> </tr> 
    {/section}
    </table><br />

    <b>{$Tabname}</b><br />
    {$Profil}

    {/if}
    {if $Step == "addtab"}
    <form method="post" action="account.php?view=profile&amp;step=add">
    
    Nazwa: <input type="text" name="tabname" /> 
    Kolejność: <input type="text" name="tabnr" /><br />
    <textarea name="newprofile"  rows="20" cols="60"></textarea><br />

    <input  type="submit" value="OK" />
    </form>
    {/if}
    {if $Step == "edit"}
    <form method="post" action="account.php?view=profile&amp;step=edited">
    
    Nazwa: <input type="text" name="tabname" value="{$Tab}" /> 
    Kolejność: <input type="text" name="tabnr" value="{$Nr}" /><br />
    <textarea name="newprofile"  rows="20" cols="60">{$Editable}</textarea><br />
    <input  type="hidden" name="tabid" value="{$Tabid}" />

    <input  type="submit" value="OK" />
    </form>
    {/if}
    {if $Step == "profile"}
    <table align="center">
    <tr><td>{$Newprofile2}:</td><td></td></tr>
    <tr><td><div class="overflow">{$Profile}</div></td><tr>
    </table>
    {/if}
{/if}

{if $View == "eci"}
    <form method="post" action="account.php?view=eci&amp;step=ce">
    <table>
    <tr><td>{$Oldemail}:</td><td><input type="text" name="ce" /></td></tr>
    <tr><td>{$Newemail}:</td><td><input type="text" name="ne" /></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="{$Change}" /></td></tr>
    </table>
    </form>
    <form method="post" action="account.php?view=eci&amp;step=gg">
    <table>
    <tr><td>{$Tcommunicator}:</td><td><select name="communicator">
        {section name=acccom loop=$Tcom}
            <option value="{$Comm[acccom]}">{$Tcom[acccom]}</option>
        {/section}
    </select></td></tr>
    <tr><td>{$Newgg}:</td><td><input type="text" name="gg" /></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="{$Change}" /></td></tr>
   </table>
   </form>
{/if}

{if $View == "style"}

    {if $Layoutname != ''}
    Wybierz swój wygląd graficzny gry:<br><br>
   <li><a href="">Zmień Szablon Graficzny [zawieszona opcja]</a><br></li>
  
    {/if}
    <br /><br />
    <form method="post" action="account.php?view=style&amp;step=graphstyle">
    <table>
    <tr><td><input type="checkbox" name="graphstyle" id="graphfree" {$Checked} /><label for="graphfree"> {$Graphless}</label></td></tr>
    <tr><td><input type="submit" value="{$Sselect}" /></td></tr>
    </table>
    </form>
    {if $Step == "style" || $Step == "graph" || $Step == "graphstyle"}
       {$Youchange}. (<a href="account.php">{$Refresh}</a>)
    {/if}
{/if}

{if $View == "description"}
    <form method="post" action="account.php?view=description&amp;step=change">
    <table>
    <tr><td>{$opistext}</td></tr>
    <tr><td align="center">{$Newpodpis}<br /> <input type="text" name="opis" value="{$Opis}" /></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="{$Change}" /></td></tr>
    </table>
    </form>
    {if $Step == "change"}
    <table>
    <tr><td>{$Newopis2}:</td><td></td></tr>
    <tr><td><b>{$opis}</b></td><tr>
    </table>
    {/if}
{/if}
{if $View == "gametype"}
Wybierz typ swojego konta:<br><br>
<b>Gracz mechaniczny</b><br><br>
<img src="images/misc/mech.jpg" style="float: left">
Nie obchodzi cię fabuła, a widok tekstu dłuższego niż kilka zdań przyprawia cię o dreszcze. Chcesz rywalizować na posągach, wbijać poziomy i walczyć o miano bohatera krainy, albo najlepszego rzemieślnika w historii. Pozostali niech sobie klimacą do woli. Po co ta cała otoczka i oprawa bez gry mechanicznej? To nie forum.<br><a href="account.php?view=gametype&step=M">Zostań graczem mechanicznym</a><br>
<br><br><br><hr><br><br>
<b>Gracz mechaniczno-fabularny</b><br><br>
<img src="images/misc/mechfab.jpg" style="float: left">
Lubisz wbijać poziomy i walczyć na arenie, jednak czasem też chcesz popisać się swoją wybraźnią i odgrywasz swoją postać w karczmie z innymi osobami lub prowadzisz prywatną kampanię z inną osobą na poczcie. Jesteś uniwersalny, starasz sie o miano bohatera krainy i jednocześnie potrafisz odgrywać kogoś zupełnie innego.<br><a href="account.php?view=gametype&step=MF">Zostań graczem mechaniczno-fabularnym</a><br>
<br><br><br><hr><br><br>
<b>Gracz fabularny</b><br><br>
<img src="images/misc/fab.jpg" style="float: left">
Zupełnie nie obchodzi cie mechanika, a od klikania w linki boli cię palec. Lubisz za to popisać z innymi osobami w karczmie, wczuwając sie w swoją postać. Sesje fabularne w bramie przygód nie mają przed tobą tajemnic. Potrafisz tworzyć wspaniałe opowieści, które przeżywasz razem w gronie swoich znajomych. <br><a href="account.php?view=gametype&step=F">Zostań graczem fabularnym</a><br>

{/if}
{/strip}
</br></br>