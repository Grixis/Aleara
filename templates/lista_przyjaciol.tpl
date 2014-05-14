Witaj w spisie swoich przyjaciół. Dodawaj tutaj osoby z którymi się często kontaktujesz, aby mieć do nich szybki dostęp. <br><br>

Spis przyjaciół<hr>
<table style="width: 100%">
<tr><th>Nick</th><th>Poziom</th><th>Wiadomość</th><th>Status</th><th>Opcje</th></tr>
{section name=fre loop=$Buddysid}
<tr>
<td><a href="view.php?view={$Friendid[fre]}">{$Frienduser[fre]}</a></td>
<td><center>{$Friendlevel[fre]}</center></td>
<td><center><a href="mail.php?view=write&amp;to={$Friendid[fre]}">PW</a></center></td>
<td><center>{$Friendonline[fre]}</center></td>
<td><center><a href="lista_przyjaciol.php?del={$Buddysid[fre]}">Usuń z listy</a></center></td>
</tr>
{/section}
</table>
<form action="lista_przyjaciol.php?add" method="post">
<input type="text" name="friendid" width="4">
<input type="submit" value="Dodaj">
</form>