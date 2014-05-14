{strip}
{if $View == ""}
    <p>{$Awelcome}</p>
{* Display main menu.*}
    <ul>
    <li><a href="wielki.php?view=add">Zmień rangę graczowi</a></li>
	<li><a href="wielki.php?view=poczta">Wyślij pocztę do wszystkich</a></li>
	</ul>
    
{/if}

{if $View == "add"}
    <form method="post" action="wielki.php?view=add&amp;step=add">
    {$Addid} <input type="text" name="aid" /> {$Newrank}
    <select name="rank">
    <option value="Member">{$Rmember}</option>
    
    <option value="Gladiator">Gladiator</option>
    

    </select>. <input type="submit" value="{$Aadd}" />
    </form>
{/if}

{if $View == "poczta"}
    <table>
    <form method="post" action="wielki.php?view=poczta&amp;step=send">
    <tr><td>{$Pmsubject}:</td><td><input type="text" name="subject" /></td></tr>
    <tr><td valign="top">{$Pmbody}:</td><td><textarea name="body" rows="5" cols="19"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="{$Asend}" /></td></tr>
    </form></table>
{/if}

{$Message}

{if $View != ""}
    <br />(<a href="wielki.php">Wróć</a>)
{/if}
{/strip}
