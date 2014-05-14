
{strip}
{if $Action == "" && $Health > "0"}
    {$Portaltext}<br />
    <ul>
    <li><a href="nughorg.php?action1=fight">{$Afight2}</a></li>
    <li><a href="gory.php">{$Aretreat}</a></li>
    </ul>
{/if}

{if $Action == "retreat"}
    {$Portaltext} <a href="gory.php">{$Ahere}</a>.
{/if}

{if $Win == "1"}
    {$Portaltext}<br />
    <ul>
    <li>Wybieram <a href="gory.php?action1=fight&amp;step=sword">{$Sword}</a></li>
    <li>Wybieram <a href="gory.php?action1=fight&amp;step=armor">{$Armor}</a></li>
    <li>Wybieram <a href="gory.php?action1=fight&amp;step=staff">{$Istaff}</a></li>
    <li>Wybieram <a href="gory.php?action1=fight&amp;step=cape">{$Cape}</a></li>
    </ul>
{/if}

{if $Step != ""}
    {$Steptext} {$Item}. {$Tgo} <a href=equip.php>{$Ahere}</a>
{/if}
{/strip}
</br>