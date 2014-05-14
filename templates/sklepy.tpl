<center><IMG SRC="images/locations/sklepymieszkancow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{if $View == "" && $Remowe == "" && $Buy == ""}

Tutaj znajdują się sklepy mieszkańców krainy . Masz pare opcji:<br>
<ul>
<li><a href="sklepy.php?view=szukaj">Szukaj ofert</a></li>
{if $Sklep == 'Y'}
<li><a href="{$SCRIPT_NAME}?view=add">Dodaj ofertę</a></li>
<li><a href="{$SCRIPT_NAME}?view=del">Skasuj wszystkie swoje oferty</a></li>
<li><a href="sklepy.php?view=opis">Zmień opis sklepu</a></li>
{/if}
</ul>
{if $Sklep == 'N'}
<li><a href="{$SCRIPT_NAME}?view=kup1">Kup sklep (50000 sztuk złota i 100 sztuk mithrilu)</a>
{/if}
{section name=sklepy loop=$Sklepy}
<fieldset>
<legend><a href="sklepy.php?view=market&lista=id&limit=0&owner={$Owner[sklepy]}">{$Sklepy[sklepy]}</a></legend>
Właściciel: {$Owner[sklepy]} <br/>
Oferty: {$Oferty[sklepy]} <br/>
<br/>
{$Opis[sklepy]}
</fieldset><br/>
<br/>
{/section}


{/if}

{if $View == "kup1"}
<form method="post" action="sklepy.php?view=kup">
Nazwa sklepu: <input type="text" name="opis"> (Jeżeli będzie beznadziejna lub wulgarna, sklep zostanie <b>skasowany</b><br>
<input type="submit" value="Kup">
</form>
{/if}

{if $View == "szukaj"}
Szukaj ofert w sklepach lub <a href="sklepy.php">wróć</a>. Uwaga! Wpisz dokładną nazwę przedmiotu jakiego poszukujesz.<br><br>
<table><form method="post" action="sklepy.php?view=market&limit=0&lista=name">
Przedmiot: <input type="text" name="szukany">
<tr><td colspan="2" align="center"><input type="submit" value="Szukaj"></td></tr>
</form></table>
{/if}

{if $View == "market"}
Zobacz oferty lub <a href="sklepy.php">wróć</a>.<br><br>
<table>
<tr>
<td width="100"><b>Nazwa</b></td>
<td width="100"><b>Siła (moc w przypadku pierścieni)</b></td>
<td width="100"><b>Wytrzy.</b></td>
<td width="100"><b>Szybk.</b></td>
<td width="100"><b>Zręcz.</b></td>
<td width="50"><b>Poziom</b></td>
<td width="50"><b>Ilość</b></td>
<td width="50"><b>Koszt</b></td>
<td width="100"><b><u>Opcje</td>
</tr>
{section name=item loop=$Name}
<tr>
<td>{$Name[item]}</td>
<td align="center">{$Power[item]}</td>
<td align="center">{$Durability[item]}/{$Maxdur[item]}</td>
<td align="center">{$Speed[item]}</td>
<td align="center">{$Agility[item]}</td>
<td align="center">{$Minlev[item]}</td>
<td align="center">{$Amount[item]}</td>
<td>{$Cost[item]}</td>
{$Action[item]}
{/section}
</table>
{$Previous}{$Next}
{/if}

{if $View == "add"}
Dodaj ofertę do sklepu lub <a href="sklepy.php">wróć</a>.<br><br>
<table><form method="post" action="sklepy.php?view=add&step=add">
Przedmiot: <select name="przedmiot">
{section name=item1 loop=$Name}
<option value="{$Itemid[item1]}">{$Name[item1]}(ilość: {$Amount[item1]})</option>
{/section}
<tr><td>Ilość:</td><td><input type="text" name="amount"></td></tr>
<tr><td>Cena za sztukę:</td><td><input type="text" name="cost"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Dodaj"></td></tr>
</form></table>
{/if}

{if $Buy != ""}
Zakup przedmiot lub <a href="sklepy.php">wróć</a>.<br /><br />
<b>Przedmiot:</b> {$Name} <br />
<b>Siła:</b> {$Power} <br />
{if $Agi != "0"}
<b>Premia do zręczności:</b> {$Agi} <br />
{/if}
{if $Speed != "0"}
<b>Premia do szybkości:</b> {$Speed} <br />
{/if}
{if $Type != "R" && $Type != "S" && $Type != "Z" && $Type != "G"}
<b>Wytrzymałość:</b> {$Dur}/{$MaxDur} <br />
{/if}
{if $Type == "R"}
<b>Liczba strzał:</b> {$Dur} <br />
{/if}
{if $Type == "G"}
<b>Liczba grotów:</b> {$Dur} <br />
{/if}
<b>Ilość w ofercie:</b> {$Amount1} <br />
<b>Cena za sztukę:</b> {$Cost} <br />
<b>Sprzedający:</b> <a href="view.php?view={$Sid}">{$Seller}</a> <br /><br />
<table><form method="post" action="sklepy.php?buy={$Itemid}&step=buy">
<tr><td>Ilość:</td><td><input type="text" name="amount"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Kup"></td></tr>
</form></table>
{/if}

{if $View == "all"}
Tutaj masz spis wszystkich ofert jakie są w sklepach.<br />
<table>
<tr>
<td><b><u>Nazwa</u></b></td><td><b><u>Ofert</u></b></td><td align="center"><b><u>Akcja</u></b></td>
</tr>
{section name=all loop=$Name}
<tr>
<td>{$Name[all]}</td>
<td align="center">{$Amount[all]}</td>
<td><form method="post" action="sklepy.php?view=market&limit=0&lista=id">
<input type="hidden" name="szukany" value="{$Name[all]}">
<input type="submit" value="Pokaż"></form>
</td>
</tr>
{/section}
</table>
{/if}
{if $View == "opis"}
Zmień opis sklepu na:<br/>
<form method="post" action="sklepy.php?view=zmien">
<input name="opis" type="text">
<input type="submit" value="Zmień">
</form>
{/if}
{$Message}
<br />