<center><IMG SRC="arenahonorowa(l).png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
{if $Action == "" && $Battle == ""}
Witaj na arenie honorowej. Możesz tutaj prowadzić honorowe walki z graczami znajdującymi się w tym samym czasie na tej arenie. Za wygraną walkę nic nie zdobywasz, a za przegraną nic nie tracisz. Nie ma tutaj żadnych ograniczeń walk. Walczysz z kim chcesz, niezależnie od lvlu gracza, jego gildii itp.
   
   
    <ul{if $Graphstyle == "Y"} class="sword"{/if}>
    
 <center>   <li><a href="battle2.php?action=levellist&step=go">Zobacz listę graczy którzy aktualnie znajdują się na arenie. </a></li></center>
    
    </ul>
    
    <br><b>Ważne info:</b><br>
    - Aby przeciwnik zobaczył prezbieg walki musi mieć włączoną opcje raportów z walk przesyłanych na pocztę. Aktywuje się ją w opcjach konta - opcje dodatkowe.<br>
    - Gracz który znajduje się na arenie a jednocześnie na innej zakładce ma włączony czat może nie być wyświetlany na liście.
{/if}

{if $Action == "showalive"}
    Oto lista graczy znajdujących się na arenie...{$user}<br /><br />
    <table width="100%">
    <tr>
    <td width="10%"><b><u>{$Lid}</u></b></td>
    <td width="45%"><b><u>{$Lname}</u></b></td>
   <td width="45%"><b><u></u></b></td>
 
    <td width="10%"><b><u>{$Loption}</u></b></td>
    </tr>
    {section name=player loop=$Enemyid}
        <tr>
        <td>{$Enemyid[player]}</td>
        <td><a href="view.php?view={$Enemyid[player]}">{$Enemyname[player]}</a></td>
        <td>{$Enemyrank[player]}</td>
        <td>{$Enemytribe[player]}</td>
        <td>- <A href="battle2.php?battle={$Enemyid[player]}">{$Aattack}</a></td>
        </tr>
    {/section}
    </table><br />{$Orback} <a href="battle.php">{$Bback}</a>.
{/if}

{if $Action == "levellist"}
    <form method="post" action="battle2.php?action=levellist&amp;step=go">
    {$Showall} <input type="text" name="slevel" size="5" /> {$Tolevel} <input type="text" name="elevel" size="5" />
    <input type="submit" value="{$Ago}" /></form>
    {if $Step == "go"}
    <table width="100%">
        <tr>
        <td width="10%"><b><u>{$Lid}</u></b></td>
        <td width="45%"><b><u>{$Lname}</u></b></td>
        <td width="25%"><b><u>{$Lrank}</u></b></td>
        <td width="10%"><b><u>Poziom</u></b></td>
        <td width="10%"><b><u>{$Loption}</u></b></td>
        </tr>
        {section name=player loop=$Enemyid}
            <tr>
            <td>{$Enemyid[player]}</td>
            <td><a href="view.php?view={$Enemyid[player]}">{$Enemyname[player]}</a></td>
            <td>{$Enemyrank[player]}</td>
            <td>{$Enemylevel[player]}</td>
            <td>- <A href="battle2.php?battle={$Enemyid[player]}">{$Aattack}</a></td>
            </tr>
        {/section}
        </table>
    {/if}
{/if}

{if $Action == "monster"}
    {if $Action == "monster" && $View > 0}
        <br /><br />{$Avatar} <br />
        <center><u><b>{$Name}</b></u></center> <br /><br />
        <b>{$Tlevel}</b>:  {$Level}<br />
        <b>{$Thp}</b>:  {$Health} <br />
        <b>{$Tdescription}</b>: <br /><br />
        {$Description}<br /><br />
        <a href="battle2.php?action=monster&amp;next={$Id}">({$Mt_walka})</a>
        <a href="battle2.php?action=monster&amp;dalej={$Id}">({$Msz_walka})</a>
        <a href="battle2.php?action=monster">({$Aback})</a><br />
    {else}
        {if !$Fight && !$Fight1}
            {$Monsterinfo}
            <br /><br />
            {if $Dalej > 0}
                <form method="post" action="battle.php?action=monster&amp;fight={$Id}">
                <input type="submit" value="{$Abattle2}" /> {$Witha} <input type="text" size="5" name="razy" value="1" /> {$Name}{$Nend}
                <input type="text" size="5" name="times" value="1" /> {$Mtimes}</form>
            {/if}
            {if $Next > 0}
                <form method="post" action="battle.php?action=monster&amp;fight1={$Id}">
                <input type="submit" value="{$Abattle2}" /> {$Witha} <input type="text" size="5" name="razy" value="1" /> {$Name}{$Nend}
                <input type="hidden" name="write" value="Y" />
                </form>
            {/if}
            <table width="100%">
            <tr>
            <td width="25%"><b><u>Nazwa</u></b></td>
    		<td width="75%"><b><u>Opis</u></b></td>
            </tr>
			<tr><td>
			<div style="max-height:870px; overflow:auto">
            {section name=monster loop=$Enemyid}
            <a onclick="$('#desc').load('monster.php?show={$Enemyid[monster]}'); return false;"  href="battle.php?action=monster&view={$Enemyid[monster]}">{$Enemyname[monster]}</a><br>
            {/section}
			</div></td><td valign="top">
			<div id="desc" style="vertical-align:top;" ></div></td>
            </table><br />{$Orback2} <a href="battle2.php">{$Bback2}</a>.
        {/if}
    {/if}
{/if}
{/strip}
