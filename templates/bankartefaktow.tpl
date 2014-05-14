{strip}

{if $Action != "astral"}

    <fieldset>
    <legend>Artefakt: żebro</legend>
        <form method="post" action="bankartefaktow.php?action=zebro">
        {$Iwant} <input type="submit" value="{$Agive}" /> {$Dplayer} <input type="text" name="pid" size="3" /> <input type="text" name="zebro" value="{$zebro}" /> artefaktów.
        </form>
     </fieldset><br><br>   
 
   <fieldset>
    <legend>Artefakt: oko</legend>
        <form method="post" action="bankartefaktow.php?action=oko">
        {$Iwant} <input type="submit" value="{$Agive}" /> {$Dplayer} <input type="text" name="pid" size="3" /> <input type="text" name="oko" value="{$oko}" /> artefaktów.
        </form>
     </fieldset><br><br> 
     
        <fieldset>
    <legend>Artefakt: włos</legend>
        <form method="post" action="bankartefaktow.php?action=wlos">
        {$Iwant} <input type="submit" value="{$Agive}" /> {$Dplayer} <input type="text" name="pid" size="3" /> <input type="text" name="wlos" value="{$wlos}" /> artefaktów.
        </form>
     </fieldset><br><br> 
     
        <fieldset>
    <legend>Artefakt: serce</legend>
        <form method="post" action="bankartefaktow.php?action=serce">
        {$Iwant} <input type="submit" value="{$Agive}" /> {$Dplayer} <input type="text" name="pid" size="3" /> <input type="text" name="serce" value="{$serce}" /> artefaktów.
        </form>
     </fieldset><br><br> 
        <fieldset>
    <legend>Artefakt: ząb</legend>
        <form method="post" action="bankartefaktow.php?action=zab">
        {$Iwant} <input type="submit" value="{$Agive}" /> {$Dplayer} <input type="text" name="pid" size="3" /> <input type="text" name="zab" value="{$zab}" /> artefaktów.
        </form>
     </fieldset><br><br> 
{/if}


{/strip}
