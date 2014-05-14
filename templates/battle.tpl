<center><IMG SRC="images/locations/arenahonorowa.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
{strip}
{if $Action == "" && $Battle == ""}
    <p>{$Battleinfo}</p>
    <ul{if $Graphstyle == "Y"} class="sword"<br>{/if}
    <li><a href="battle.php?action=levellist">{$Ashowlevel}</a></li>
    <li><a href="battle.php?action=showalive">{$Ashowalive}</a></li>
    <li><a href="battle.php?action=monster">{$Ashowmonster}</a></li>
    </ul>
<br>{/if}

{if $Action == "showalive"}

    {$Showinfo} {$Level}...<br /><br />
    <table width="100%">
    <tr>
    <td width="10%"><b><u>{$Lid}</u></b></td>
    <td width="45%"><b><u>{$Lname}</u></b></td>
    <td width="25%"><b><u>{$Lrank}</u></b></td>
    <td width="10%"><b><u>{$Lclan}</u></b></td>
    <td width="10%"><b><u>{$Loption}</u></b></td>
    </tr>
    {section name=player loop=$Enemyid}
        <tr>
        <td>{$Enemyid[player]}</td>
        <td><a href="view.php?view={$Enemyid[player]}">{$Enemyname[player]}</a></td>
        <td>{$Enemyrank[player]}</td>
        <td>{$Enemytribe[player]}</td>
        <td>- <A href="battle.php?battle={$Enemyid[player]}">{$Aattack}</a></td>
        </tr>
    {/section}
    </table><br />{$Orback} <a href="battle.php">{$Bback}</a>.
<br>{/if}

{if $Action == "levellist"}

    <form method="post" action="battle.php?action=levellist&amp;step=go">
    {$Showall} <input type="text" name="slevel" size="5" /> {$Tolevel} <input type="text" name="elevel" size="5" />
    <input type="submit" value="{$Ago}" /></form>
    {if $Step == "go"}
    <table width="100%">
        <tr>
        <td width="10%"><b><u>{$Lid}</u></b></td>
        <td width="45%"><b><u>{$Lname}</u></b></td>
        <td width="25%"><b><u>{$Lrank}</u></b></td>
        <td width="10%"><b><u>{$Lclan}</u></b></td>
        <td width="10%"><b><u>{$Loption}</u></b></td>
        </tr>
        {section name=player loop=$Enemyid}
            <tr>
            <td>{$Enemyid[player]}</td>
            <td><a href="view.php?view={$Enemyid[player]}">{$Enemyname[player]}</a></td>
            <td>{$Enemyrank[player]}</td>
            <td>{$Enemytribe[player]}</td>
            <td>- <A href="battle.php?battle={$Enemyid[player]}">{$Aattack}</a></td>
            </tr>
        {/section}
        </table>
    <br>{/if}
<br>{/if}

{if $Action == "monster"}

    {if $Action == "monster" && $View > 0}
        <br /><br />{$Avatar} <br />
        <center><u><b>{$Name}</b></u></center> <br /><br />
        <b>{$Tlevel}</b>:  {$Level}<br />
        <b>{$Thp}</b>:  {$Health} <br />
        <b>{$Tdescription}</b>: <br /><br />
        {$Description}<br /><br />
        <a href="battle.php?action=monster&amp;next={$Id}">({$Mt_walka})</a>
        <a href="battle.php?action=monster&amp;dalej={$Id}">({$Msz_walka})</a>
        <a href="battle.php?action=monster">({$Aback})</a><br />
    {else}
        {if !$Fight && !$Fight1}
        
            {$Monsterinfo}
            <br /><br />
            {if $Dalej > 0}
            
                <form method="post" action="battle.php?action=monster&amp;fight={$Id}">
                <input type="submit" value="{$Abattle2}" /> {$Witha} <input type="text" size="5" name="razy" value="1" /> {$Name}{$Nend}
                <input type="text" size="5" name="times" value="1" /> {$Mtimes}</form>
            <br>{/if}
            {if $Next > 0}
          
                <form method="post" action="battle.php?action=monster&amp;fight1={$Id}">
                <input type="submit" value="{$Abattle2}" /> {$Witha} <input type="text" size="5" name="razy" value="1" /> {$Name}{$Nend}
                <input type="hidden" name="write" value="Y" />
                </form>
            <br>{/if}
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
            </table><br />{$Orback2} <a href="battle.php">{$Bback2}</a>.
        <br>{/if}
    <br>{/if}
<br>{/if}
{/strip}
</br>