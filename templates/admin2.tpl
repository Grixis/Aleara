{strip}
<li><a href="addkroniki.php">Dodaj wpis właściwy do kronik.</a></li>


<br><br><br>
{if $View == "kroniki"}

	Dodaj nowy wpis do newsów kronik(kilka pierwszych zdań):<br>
	<form method="post" action="admin2.php?view=kroniki&amp;step=add">
	Treść:<br>
	<textarea name="text"></textarea><br>
	<INPUT type="submit" value="Dodaj newsa o kronice">
	</form>
{/if}	

{$Message}

{if $View != ""}
    <br />(<a href="admin2.php">{$Aback}</a>)
{/if}
{/strip}
