<center>obrazek</center><br></center>{strip}
{if $Action == "" && $Step == ""}
    <br />{$Mazeinfo}<br />
    <a href="mrocznymag.php?action=explore">{$Ayes}</a>
{/if}

{if $Action == "explore" && $Step == ""}
    {if $Roll < "49" || $Roll > "63"}
        <br />{$Message}<br /><br />
        {$Link}
    {/if}
    {if $Roll > "48" && $Roll < "64"}
        <br  />{$Youmeet} {$Name}{$Fight2}<br />
       <a href="mrocznymag.php?step=battle&amp;type=T">{$Yturnf}</a><br />
       <a href="mrocznymag.php?step=battle&amp;type=S">{$Ynormf}</a><br />
       
    {/if}
{/if}



{if $Step == "battle"}
    {$Link}
{/if}
{/strip}