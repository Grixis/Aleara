{strip}
{if $View == ""}
    <p>{$Awelcome}</p>
{* Display main menu.*}
    <table align="center" width="100%">
    <td><a href="http://aleara.boo.pl/adal.php?view=innarchive">Luknij se ziomuś do archiwum naszego zajebistego czatu :P</a></td>
    <tr>
        {section name=i loop=$Titles}
            {if $smarty.section.i.last && ($smarty.section.i.iteration % 2 == 1)}
                <td colspan="2" valign="top">
            {else}
                <td valign="top">
            {/if}
            <fieldset><legend><b>{$Titles[i]}</b></legend>
            {section name=j loop=$Options[i]}
                <a href="{if $smarty.section.i.iteration != 1 && $smarty.section.i.iteration != 6}adal.php?view={/if}{$Options[i][j]}">{$Descriptions[i][j]}</a> <br />
            {/section}
            </fieldset>
            </td>
            {if ! $smarty.section.i.last}
                {if !($smarty.section.i.rownum % 2)}
                    </tr><tr>
                {/if}
            {else}
                </tr>
            {/if}
        {/section}
    </table>
{/if}


{if $View == "innarchive"}
    {if $Text[0] != ""}
        {section name=player loop=$Text}
            <b>{$Author[player]} {$Cid}:{$Senderid[player]}</b>: {$Text[player]}<br />
        {/section}
    {/if}
    {$Previous} {$Next}
{/if}

{$Message}

{if $View != ""}
    <br />(<a href="adal.php">{$Aback}</a>)
{/if}
{/strip}
