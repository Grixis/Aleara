<center><IMG SRC="images/locations/posredniak.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{if $View == ""}
    Gdy wchodziłeś do pośredniaka odrazu przykuła twoją uwagę stara kobieta za zniszczoną ladą. Urzędniczka odezwała się do ciebie: Znajdujesz się w pośredniaku, jest tutaj wiele prac przy któych mozęsz się wzbogacić kosztem energii. Oto one:<br><br>

    <center>
    <a href="praca.php?view=oczyszczanie">Oczyszczanie miasta</a><br>
    <a href="praca.php?view=dom">Dom publiczny</a><br>
    <a href="praca.php?view=lesniczy">Domek Leśniczego</a><br>
    <a href="praca.php?view=mysliwy">Chatka trapera</a><br>
    <a href="praca.php?view=targ">Targ Niewolników</a><br>
    <a href="praca.php?view=studnia">Studnia poza miastem</a><br>
    <a href="praca.php?view=woda">Chatka na wodzie</a><br>
{/if}

{if $View == "oczyszczanie"}
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdy worek śmieci jakie uprzątniesz, dam ci {$G_min} sztuk złota.<br><br>
    <form method="post" action="praca.php?view=oczyszczanie&action=oczyszczanie">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
{/if}
{if $Action == "oczyszczanie"}
    Podczas pracy zużyłeś <b>{$Amount}</b> punkt(ów) energii, zebrałeś <b>{$Amount}</b> worków śmieci i zarobiłeś <b>{$Gain}</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
{/if}

{if $View == "dom"}
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdego klienta którego "obsłużysz", dam ci od {$G_min} - {$G_max} sztuk złota.<br><br>
    <form method="post" action="praca.php?view=dom&action=dom">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
{/if}
{if $Action == "dom"}
    Podczas pracy zużyłeś <b>{$Amount}</b> punkt(ów) energii, obsłużyłas/eś <b>{$Amount}</b> klienta i zarobiłeś <b>{$Gain}</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
{/if}

{if $View == "lesniczy"}
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każde dzrzewko które zasadzisz, dam ci od {$G_min} - {$G_max}  sztuk złota.<br><br>
    <form method="post" action="praca.php?view=lesniczy&action=lesniczy">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
{/if}
{if $Action == "lesniczy"}
    Podczas pracy zużyłeś <b>{$Amount}</b> punkt(ów) energii, zasadziłęś <b>{$Amount}</b> drzewko/ek i zarobiłeś <b>{$Gain}</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
{/if}

{if $View == "mysliwy"}
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdą łąnie którą ustrzelisz, dam ci od {$G_min} - {$G_max} sztuk złota.<br><br>
    <form method="post" action="praca.php?view=mysliwy&action=mysliwy">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
{/if}
{if $Action == "mysliwy"}
    Podczas pracy zużyłeś <b>{$Amount}</b> punkt(ów) energii, zestrzeliłeś <b>{$Amount}</b> łani i zarobiłeś <b>{$Gain}</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
{/if}

{if $View == "targ"}
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdego złapanego wyrzutka społeczeństwa, dam ci od {$G_min} - {$G_max} sztuk złota.<br><br>
    <form method="post" action="praca.php?view=targ&action=targ">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
{/if}
{if $Action == "targ"}
    Podczas pracy zużyłeś <b>{$Amount}</b> punkt(ów) energii, złapałeś <b>{$Amount}</b> "wyrzutków i zarobiłeś <b>{$Gain}</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
{/if}

{if $View == "woda"}
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdą rybe którą mi przyniesiesz, dam ci od {$G_min} - {$G_max} sztuk złota.<br><br>
    <form method="post" action="praca.php?view=studnia&action=studnia">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
{/if}
{if $Action == "woda"}
    Podczas pracy zużyłeś <b>{$Amount}</b> punkt(ów) energii, złowiłeś <b>{$Amount}</b> ryb i zarobiłeś <b>{$Gain}</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
{/if}

{if $View == "studnia"}
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdy dzban z wodą który przyniesiesz ze studni do miasta, dam ci od {$G_min} - {$G_max} sztuk złota.<br><br>
    <form method="post" action="praca.php?view=woda&action=woda">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
{/if}
{if $Action == "studnia"}
    Podczas pracy zużyłeś <b>{$Amount}</b> punkt(ów) energii, przyniosłeś <b>{$Amount}</b> wiader wody i zarobiłeś <b>{$Gain}</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
{/if}
