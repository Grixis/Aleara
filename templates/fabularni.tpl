{if $Level > "0"}
<b>Aby zapisać się na listę musisz posiadać profil postaci!</b><br>
<br><br><br>
{if $Number > "0"}
<table>
<tr>
<td width="100"><b><u>Nick gracza:</td>
<td width="50"><b><u>ID:</td>
<td width="200"><b><u>Punkty fabularne</u></b></td>

</tr>
{section name=mag loop=$Name}
<tr>
<td><a href=view.php?view={$Id[mag]}>{$Name[mag]}</a></td>
<td>{$Id[mag]}</td>
<td>{$pktfabularne[mag]}</td>
</tr>
{/section}
</table>

{/if}

{/if}
          
<br><br><br>
<center>
<a href=panelmg.php>Panel Mistrza Gry</a><br><a href=forumfab.php>Forum dla ekipy fabularnej</a></center>