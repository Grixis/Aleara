<center><IMG SRC="images/locations/wyspa.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
{if $Action == ""}
    Witaj marynarzu! Tutaj możesz wydoby złoto z tego morza.
	<br>
    <br>
    <br>
    <form method="post" action="zm.php?action=work">
    <input type="submit" value="Wydobywaj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
	<br><a href="wyspazlota.php">Wróć na wyspę</a>
{/if}
{if $Action == "work"}
    Podczas wydobywania zużyłeś  <b>{$Amount}</b> punkt(ów) energii i zdobyłeś <b>{$Gain}</b> sztuk złota.
    <br>[<a href="zm.php">Wróć do wydobywania</a>]
	<br>[<a href="wyspazlota.php">Wróć na wyspę</a>]
{/if}
