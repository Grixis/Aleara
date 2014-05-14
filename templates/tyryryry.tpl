{strip}
{if $Action == "" && $Health > "0"}
<center><IMG SRC="images/locations/pentagram.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    {$Portaltext}<br />
    <ul>
    <li><a href="tyryryry.php?action1=fight">{$Afight2}</a></li>
    <li><a href="diabolium.php">{$Aretreat}</a></li>
    </ul>
{/if}

{if $Action == "retreat"}
    {$Portaltext} <a href="diabolium.php">{$Ahere}</a>.
{/if}

{if $Win == "1"}
    {$Portaltext}<br />
    <ul>
    <li>Wybieram <a href="walkadiaburion.php?action1=fight&amp;step=sword">{$Sword}</a></li>
    <li>Wybieram <a href="walkadiaburion.php?action1=fight&amp;step=armor">{$Armor}</a></li>
    <li>Wybieram <a href="walkadiaburion.php?action1=fight&amp;step=staff">{$Istaff}</a></li>
    <li>Wybieram <a href="walkadiaburion.php?action1=fight&amp;step=cape">{$Cape}</a></li>
    </ul>
{/if}

{if $Step != ""}
    {$Steptext} {$Item}. {$Tgo} <a href=equip.php>{$Ahere}</a>
{/if}
{/strip}
</br>