Witaj w spisie swoich przyjaciół oraz wrogów. Dodawaj tutaj osoby z którymi się często kontaktujesz, aby mieć do nich szybki dostęp. <br><br>

Spis przyjaciół<hr>
<table>
<tr><th>Nick</th><th>Poziom</th><th>Status</th><th>Opcje</th></tr>
{section name=fre loop=$Buddysid}
<tr>
<td><a href="view.php?view={$Friendid[fre]}">{$Frienduser[fre]}</a></td>
<td>{$Friendlevel[fre]}</td>
<td>{$Friendonline[fre]}</td>
<td><a href="lista_przyjaciol.php?del={$Buddysid[fre]}">Usuń z listy</a></td>
</tr>
{/section}
</table>