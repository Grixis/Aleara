<center><IMG SRC="images/locations/wyspa.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>

{if $Action == ""}
    Chcesz trochę mithrilu? W porządku. Masz tu sitko i zbieraj. Aha, bardzo często zdaża sie zdobywać<b> {$Gold}</b> sztuk mithrilu.<br><br>
    <form method="post" action="mz.php?action=work">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
	<br><a href="wyspamithrilu.php">Wróć na wyspę</a>
{/if}

{if $Action == "work"}
    Podczas pracy wydobywania <b>{$Amount}</b> punkt(ów) energii i wydobyłeś <b>{$Gain}</b> sztuk mithrilu.
    <br>[<a href="mz.php">Wróć do wydobywania</a>]
	<br>[<a href="wyspamithrilu.php">Wróć na wyspę</a>]
{/if}