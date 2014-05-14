Lista IP ( te same IP znajduj± się obok siebie ) przed zbanowaniem multikonta
spytaj się Demonixa czy dani gracze nie mają pozwolenia na multi. (takich pozwoleń
jest parę)
<br>
<br>
<br>{if $Number > "0"}
<div id="iptabs">
<ul>
<li><a href="#tabs-1">Lista IP</a></li>
<li><a href="#tabs-2">Lista powtarzajacych sie IP</a></li>
<li><a href="#tabs-3">Lista powtarzajacych sie znacznikow przegladarek</a></li>
</ul>
<div id="tabs-1">
	<table>
		<tr>
			<td width="100"><b><u>Imie:</td>
			<td width="50"><b><u>ID:</td>
			<td width="200"><b><u>IP:</td>
		</tr>
{section name=hobbit loop=$Name}
<tr>
<td><a href=view.php?view={$Id[hobbit]}>{$Name[hobbit]}</a></td>
<td>{$Id[hobbit]}</td>
<td>{$Ip[hobbit]}</td>

</tr>
{/section}
</table>
</div>
<div id="tabs-2">
	<table>
		<tr>
			<td width="100"><b><u>Imie:</td>
			<td width="30"><b><u>ID:</td>
			<td width="200"><b><u>IP:</td>
			<td width="50"><b><u>Powtorzenia:</td>
		</tr>
{section name=hobbit2 loop=$Name_2}
<tr>
<td><a href=view.php?view={$Id_2[hobbit2]}>{$Name_2[hobbit2]}</a></td>
<td>{$Id_2[hobbit2]}</td>
<td>{$Ip_2[hobbit2]}</td>
<td>{$Count_2[hobbit2]}</td>

</tr>
{/section}
</table>

</div>
<div id="tabs-3">
	<table>
		<tr>
			<td width="100"><b><u>Imie:</td>
			<td width="30"><b><u>ID:</td>
			<td width="200"><b><u>IP:</td>
			<td width="50"><b><u>Powtorzenia:</td>
		</tr>
{section name=hobbit3 loop=$Name_3}
<tr>
<td><a href=view.php?view={$Id_3[hobbit3]}>{$Name_3[hobbit3]}</a></td>
<td>{$Id_3[hobbit3]}</td>
<td>{$Ip_3[hobbit3]}</td>
<td>{$Count_3[hobbit3]}</td>

</tr>
{/section}
</table>

</div>
</div>
<script>$("#iptabs").tabs();</script>
{/if}



