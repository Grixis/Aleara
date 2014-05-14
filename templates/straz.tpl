{strip}
<center><IMG SRC="images/locations/basytastraynikow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wchodzisz do Baszty Strażników Miejskich zauważając ogromną tablicę. Podchodzisz bliżej i czytasz:<br>
<i>Jeżeli zauważysz w cesarstwie podejrzane zachowanie mieszkańców natychmiast zgłoś to Strażnikom, których obowiązkiem jest dbanie o przestrzeganie zasad przez mieszkańców i pilnowanie porządku w krainie. Strażnicy mogą sami wymierzać karę, bądź przekazać sprawę SN.</i><br>
<a href="straznik.php">Baszta Strażnicza</a><br /><br />

<fieldset style="width:90%">
<legend><u>Lista Strażników Miejskich krainy</u></legend>
<table width="100%">
    <tr>
        <td width="50%"><b>Strażnicy:</b></td>
        
    </tr>
    <tr>
        <td valign="top">
            {section name=admins loop=$Stafflist[0][0]}
            <a href="view.php?view={$Stafflist[0][0][admins]}">{$Stafflist[0][1][admins]}</a> ID: {$Stafflist[0][0][admins]}<br />
            {/section}
        </td>
        
    </tr>


</table>
</fieldset>
<br><b>Funkcje Straży Miejskiej:</b><br><br>
- Strażnik może edytować profil i nick gracza<br>
- Strażnik może dodawać ankiety w Hali Zgromadzeń<br>
- Strażnik moze zablokować/odblokować gracza na poczcie<br>
- Strażnik moze zablokować/odblokować gracza na czacie<br>
- Strażnik ma dostęp do archiwum czatu<br>
- Strażnik może wyczyścić czat<br>
- Strażnik może edytować listę zabronionych słów<br>
- Strażnik może sprawdzać logi graczy<br>
- Strażnik może banować/odbanować graczy<br>
- Strażnik może wysyłać/uwalniać graczy z więzienia<br>
- Straznik moźe wysyłać masową pocztę do graczy<br>
{/strip}

<br><br>