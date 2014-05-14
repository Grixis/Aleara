{strip}
{if $Action == "" && $Health > "0"}
<center><IMG SRC="http://aleara.pl/rogoton.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
    {$Portaltext}<br />
    <ul>
    <li><a href="bosskopalnia.php?action1=fight">{$Afight2}</a></li>
    <li><a href="las.php">{$Aretreat}</a></li>
    </ul>
{/if}

{if $Action == "retreat"}
    {$Portaltext} <a href="las.php">{$Ahere}</a>.
{/if}

{if $Win == "1"}
    {$Portaltext}<br />
    <ul>
     </ul>
{/if}

{if $Step != ""}
    {$Steptext} {$Item}. {$Tgo} <a href=equip.php>{$Ahere}</a>
{/if}
{/strip}
</br>