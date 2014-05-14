Witaj w spisie Twych prywatnych znajomych!<br /><br />

{if $Friends}
Spis przyjaciól:<br /><br />
<table width="90%" border="0" CELLSPACING="0" align="center">
<tr align="left"><td><b>Przyjaciel:</b></td><td align="right"><b>Akcja</b></td></tr>
{section name=fre loop=$Fid}
<tr {if $smarty.section.fre.index % 2}style=background:#333333;"{/if}><td>
<a href="#" onclick="$('#buddy{$smarty.section.fre.index}').toggle('slow'); return false;">{$Fname[fre]}({$Fid[fre]}) {$Flpv[fre]}</a><br><div id="buddy{$smarty.section.fre.index}" style="display:none"><table><tr><td><img src="avatars/{$Favatar[fre]}" width=120 height=120 style="float:left;"></td><td>
<br><b>Poziom:</b> <i>{$Flevel[fre]}</i>
<br><b>Profil:</b> <i><a href="view.php?view={$Fid[fre]}">Zobacz profil</a></i>
<br><b>Lokacja:</b> <i>{$Flocation[fre]}</i>
<br><b>Ostatnio:</b> <i>{$Ftime[fre]}</i>
<br><b>Gdzie:</b> <i>{$Fpage[fre]}</i>
<br><b>Ranga:</b> <i>{$Frank[fre]}</i>
<li><a href="mail.php?view=write&amp;to={$Fid[fre]}">Napisz wiadomość</a></li>
<li><a href="battle.php?battle={$Fid[fre]}">Atakuj</a></li>{if $Class == 'Złodziej'}
<li><a href="view.php?view={$Fid[fre]}&amp;steal={$Fid[fre]}">Kradzież kieszonkowa</a></li><li><a href="view.php?view={$Fid[fre]}&amp;steal_bank={$Fid[fre]}">Włamanie do skarbca</a></li>{/if}</td></tr></table>
</div></td>
<td align="right">
<a href="buddylist.php?delete={$Fid[fre]}">Usuń</a><br />
</td>
</tr>
{/section}
</table>
{else}
Aktualnie nie masz żadnych przyjaciół<br />
{/if}
<br />
{if $Pend}
Oczekujący na akceptacje:
<table width="90%" align="center">
<tr align="left"><td><b>Przyjaciel:</b></td><td align="right"><b>Akcja</b></td></tr>
{section name=fre loop=$Pid}
<tr ><td>Id {$Pid[fre]} {$Pname[fre]} ({$Plevel[fre]} lvl)<br />
{$Plocation[fre]}</td>
<td align="right">
<a href="buddylist.php?reject={$Pid[fre]}">Usuń</a> | <a href="buddylist.php?accept={$Pid[fre]}">Akceptuj</a><br />
</td>
</tr>
{/section}
</table>
<br />
{/if}
Dodaj osobe do listy:
<form action="buddylist.php?add" method="post">
	ID: <input type="text" name="id" /><br />
	<input type="submit" value="Dodaj" />
</form>
<br />
