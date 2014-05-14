{if $Kawka == ""}
Chodzac uliczkami zauwa¿asz du¿y budynek z którego wydobywa siê muzyka. Podchodzisz do kelnera i pytasz siê go
co ma do zaoferowania. On proponuje Ci:
<br>
<center><b></b>KAWY:<br>
<a href="kawiarnia.php?kawka=mk">Ma³a Kawa</a>
<br>
Cena: {$Cost}
<br>
<a href="kawiarnia.php?kawka=sk">Srednia Kawa</a>
<br>
Cena: {$Cost2}
<br>
<a href="kawiarnia.php?kawka=dk">Du¿a Kawa</a>
<br>
Cena: {$Cost3}
<br>
</center><br><br><center>-----------------------------</center><br><center>Ciasta<br>
                                               <a href="kawiarnia.php?ciasto=ser">Sernik</a><br>
                                               Cena: {$Cost4}<br>
                                                <a href="kawiarnia.php?ciasto=pw">Pijana Wi¶nia</a><br>
                                                Cena: {$Cost5}<br>
                                                <br>-----------------------------<br><center>Herbaty:<br>
                                                <a href="kawiarnia.php?herbatka=zh">Zielona Herbata</a><br>
                                                Cena: {$Cost6}<br>
                                                 <a href="kawiarnia.php?herbatka=ch">Czerwona Herbata</a><br>
                                                Cena: {$Cost7}<br>
                                                <a href="kawiarnia.php?herbatka=hzw">Herbata z Wódk±</a><br>
                                                Cena: {$Cost8}<br>
                                                <br>-----------------------------<br><center>Napoje Alkocholowe:<br>
                                                <a href="kawiarnia.php?alk=Szampan">Szampan</a><br>
                                                Cena: {$Cost9}<br>
                                                <a href="kawiarnia.php?alk=Wino">Wino</a><br>
                                                Cena: {$Cost13}<br>
                                                <a href="kawiarnia.php?alk=Piwo">Piwo</a><br>
                                                Cena: {$Cost11}<br>
                                                <a href="kawiarnia.php?alk=Wódka">Wódka</a><br>
                                                Cena: {$Cost12}<br>


 {/if}

{if $Kawka == "mk" && $opis == ""}
    Za fili¿anke ma³ej kawy zap³acisz {$Cost}. Za co twa energia wzorsnie o 0.1.
<br><br><br>
    <center><form method="post" action="kawiarnia.php?kawka=mk&step=wybierz">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}

{if $Kawka == "sk" && $opis == ""}
    Za fili¿anke du¿ej kawy zap³acisz {$Cost2}. Za co twa energia wzorsnie o 0.5.
<br><br><br>
    <center><form method="post" action="kawiarnia.php?kawka=sk&step=wybierz">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}

{if $Kawka == "dk" && $opis == ""}
    Za fili¿anke ma³ej kawy zap³acisz {$Cost3}. Za co twa energia wzorsnie o 1
<br><br><br>
    <center><form method="post" action="kawiarnia.php?kawka=dk&step=wybierz">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}
{if $Ciasto == "ser" && $opis1 == ""}
    Za Sernik zap³acisz {$Cost4}. Za co twa energia wzorsnie o 3
<br><br><br>
    <center><form method="post" action="kawiarnia.php?ciasto=ser&step=wybierz1">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}
{if $Ciasto == "pw" && $opis1 == ""}
    Za Pijan± Wi¶niê zap³acisz {$Cost5}. Za co twa energia wzorsnie o 6
<br><br><br>
    <center><form method="post" action="kawiarnia.php?ciasto=pw&step=wybierz1">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}
{if $Herbatka == "zh" && $opis2 == ""}
    Za Zielon±  Herbatkê  zap³acisz {$Cost6}. Za co twa energia wzorsnie o 8
<br><br><br>
    <center><form method="post" action="kawiarnia.php?herbatka=zh&step=wybierz2">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}
{if $Herbatka == "ch" && $opis2 == ""}
    Za Czerwon± Herbatkê  zap³acisz {$Cost7}. Za co twa energia wzorsnie o 10
<br><br><br>
    <center><form method="post" action="kawiarnia.php?herbatka=ch&step=wybierz2">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}
{if $Herbatka == "hzw" && $opis2 == ""}
    Za Herbatê z Wódk±  zap³acisz {$Cost8}. Za co twa energia wzorsnie o 15
<br><br><br>
    <center><form method="post" action="kawiarnia.php?herbatka=hzw&step=wybierz2">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}
{if $Alk == "Szampan" && $opis3 == ""}
    Za Szampan  zap³acisz {$Cost8}. Za co twa energia wzorsnie o 18
<br><br><br>
    <center><form method="post" action="kawiarnia.php?alk=Szampan&step=wybierz3">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}
{if $Alk == "Wino" && $opis3 == ""}
    Za Szampan  zap³acisz {$Cost10}. Za co twa energia wzorsnie o 19
<br><br><br>
    <center><form method="post" action="kawiarnia.php?alk=Wino&step=wybierz3">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}
{if $Alk == "Piwo" && $opis3 == ""}
    Za Szampan  zap³acisz {$Cost11}. Za co twa energia wzorsnie o 15
<br><br><br>
    <center><form method="post" action="kawiarnia.php?alk=Piwo&step=wybierz3">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}
{if $Alk == "Wódka" && $opis3 == ""}
    Za Wódkê  zap³acisz {$Cost12}. Za co twa energia wzorsnie o 18
<br><br><br>
    <center><form method="post" action="kawiarnia.php?alk=Wódka&step=wybierz3">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wróæ</a>)
{/if}
{if $Step == "wybierz" && $opis == ""}
    <br>Wybra³e¶ {$kawke}. Po wypiciu kawki i porozmawianiu z róznymi ludzi przy niej poczu³ej siê rozlu¿niony i twa energia wzros³a.
{/if}
{if $Step == "wybierz1" && $opis1 == ""}
    <br>Wybra³e¶ {$kawke}. Po zjezedzniu smacznego ciasta i porozmawianiu z róznymi lud¼mi  poczu³ej siê rozlu¿niony i twa energia wzros³a.
{/if}

{if $Step == "wybierz2" && $opis2 == ""}
    <br>Wybra³e¶ {$kawke}. Po wypiciu ciep³ej herbatki i porozmawianiu z róznymi lud¼mi  poczu³ej siê rozlu¿niony i twa energia wzros³a.
{/if}
{if $Step == "wybierz3" && $opis3 == ""}
    <br>Wybra³e¶ {$kawke}. Po wypiciu alkoholu i porozmawianiu z róznymi lud¼mi  poczu³ej siê rozlu¿niony i twa energia wzros³a.
{/if}

