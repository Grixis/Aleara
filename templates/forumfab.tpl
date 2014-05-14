{strip}




    <a href="forumfab.php?step=comments&amp;text={$Updid}"><center>Wejdź na forum!</center></a>
 



{if $Step == "comments"}
    {if $Amount == "0"}
        <center>{$Nocomments}</center>
    {/if}
    {if $Amount > "0"}
        {section name=update loop=$Tauthor}
            <div class="overflow"><fieldset style="width:90%">
            <legend><b>{$Tauthor[update]}</b> {if $Tdate[update] != ""} ({$Tdate[update]}) {/if}{$Writed}: </legend>
            {if $Rank == "Admin" || $Rank == "Mistrzyni Gry" || $Rank == "Hrabia" || $Rank == "Ksiaze"} <center>(<a href="forumfab.php?step=comments&amp;action=delete&amp;cid={$Cid[update]}">{$Adelete}</a>) </center> {/if}<br />
            {$Tbody[update]}
            </fieldset></div>
        {/section}
    {/if}
    <br /><br /><center>
    <form method="post" action="forumfab.php?step=comments&amp;action=add">
        Wpisz wiadomość:<br /><textarea name="body" rows="15" cols="50"></textarea><br />
        <input type="hidden" name="tid" value="{$Text}" />
        <input type="submit" value="{$Aadd}" />
    </form>
    <br /></center>
    <a href="forumfab.php">{$Aback}</a>
{/if}
{/strip}
