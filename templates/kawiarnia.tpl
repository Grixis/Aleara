{if $Kawka == ""}
Chodzac uliczkami zauwa�asz du�y budynek z kt�rego wydobywa si� muzyka. Podchodzisz do kelnera i pytasz si� go
co ma do zaoferowania. On proponuje Ci:
<br>
<center><b></b>KAWY:<br>
<a href="kawiarnia.php?kawka=mk">Ma�a Kawa</a>
<br>
Cena: {$Cost}
<br>
<a href="kawiarnia.php?kawka=sk">Srednia Kawa</a>
<br>
Cena: {$Cost2}
<br>
<a href="kawiarnia.php?kawka=dk">Du�a Kawa</a>
<br>
Cena: {$Cost3}
<br>
</center><br><br><center>-----------------------------</center><br><center>Ciasta<br>
                                               <a href="kawiarnia.php?ciasto=ser">Sernik</a><br>
                                               Cena: {$Cost4}<br>
                                                <a href="kawiarnia.php?ciasto=pw">Pijana Wi�nia</a><br>
                                                Cena: {$Cost5}<br>
                                                <br>-----------------------------<br><center>Herbaty:<br>
                                                <a href="kawiarnia.php?herbatka=zh">Zielona Herbata</a><br>
                                                Cena: {$Cost6}<br>
                                                 <a href="kawiarnia.php?herbatka=ch">Czerwona Herbata</a><br>
                                                Cena: {$Cost7}<br>
                                                <a href="kawiarnia.php?herbatka=hzw">Herbata z W�dk�</a><br>
                                                Cena: {$Cost8}<br>
                                                <br>-----------------------------<br><center>Napoje Alkocholowe:<br>
                                                <a href="kawiarnia.php?alk=Szampan">Szampan</a><br>
                                                Cena: {$Cost9}<br>
                                                <a href="kawiarnia.php?alk=Wino">Wino</a><br>
                                                Cena: {$Cost13}<br>
                                                <a href="kawiarnia.php?alk=Piwo">Piwo</a><br>
                                                Cena: {$Cost11}<br>
                                                <a href="kawiarnia.php?alk=W�dka">W�dka</a><br>
                                                Cena: {$Cost12}<br>


 {/if}

{if $Kawka == "mk" && $opis == ""}
    Za fili�anke ma�ej kawy zap�acisz {$Cost}. Za co twa energia wzorsnie o 0.1.
<br><br><br>
    <center><form method="post" action="kawiarnia.php?kawka=mk&step=wybierz">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}

{if $Kawka == "sk" && $opis == ""}
    Za fili�anke du�ej kawy zap�acisz {$Cost2}. Za co twa energia wzorsnie o 0.5.
<br><br><br>
    <center><form method="post" action="kawiarnia.php?kawka=sk&step=wybierz">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}

{if $Kawka == "dk" && $opis == ""}
    Za fili�anke ma�ej kawy zap�acisz {$Cost3}. Za co twa energia wzorsnie o 1
<br><br><br>
    <center><form method="post" action="kawiarnia.php?kawka=dk&step=wybierz">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}
{if $Ciasto == "ser" && $opis1 == ""}
    Za Sernik zap�acisz {$Cost4}. Za co twa energia wzorsnie o 3
<br><br><br>
    <center><form method="post" action="kawiarnia.php?ciasto=ser&step=wybierz1">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}
{if $Ciasto == "pw" && $opis1 == ""}
    Za Pijan� Wi�ni� zap�acisz {$Cost5}. Za co twa energia wzorsnie o 6
<br><br><br>
    <center><form method="post" action="kawiarnia.php?ciasto=pw&step=wybierz1">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}
{if $Herbatka == "zh" && $opis2 == ""}
    Za Zielon�  Herbatk�  zap�acisz {$Cost6}. Za co twa energia wzorsnie o 8
<br><br><br>
    <center><form method="post" action="kawiarnia.php?herbatka=zh&step=wybierz2">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}
{if $Herbatka == "ch" && $opis2 == ""}
    Za Czerwon� Herbatk�  zap�acisz {$Cost7}. Za co twa energia wzorsnie o 10
<br><br><br>
    <center><form method="post" action="kawiarnia.php?herbatka=ch&step=wybierz2">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}
{if $Herbatka == "hzw" && $opis2 == ""}
    Za Herbat� z W�dk�  zap�acisz {$Cost8}. Za co twa energia wzorsnie o 15
<br><br><br>
    <center><form method="post" action="kawiarnia.php?herbatka=hzw&step=wybierz2">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}
{if $Alk == "Szampan" && $opis3 == ""}
    Za Szampan  zap�acisz {$Cost8}. Za co twa energia wzorsnie o 18
<br><br><br>
    <center><form method="post" action="kawiarnia.php?alk=Szampan&step=wybierz3">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}
{if $Alk == "Wino" && $opis3 == ""}
    Za Szampan  zap�acisz {$Cost10}. Za co twa energia wzorsnie o 19
<br><br><br>
    <center><form method="post" action="kawiarnia.php?alk=Wino&step=wybierz3">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}
{if $Alk == "Piwo" && $opis3 == ""}
    Za Szampan  zap�acisz {$Cost11}. Za co twa energia wzorsnie o 15
<br><br><br>
    <center><form method="post" action="kawiarnia.php?alk=Piwo&step=wybierz3">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}
{if $Alk == "W�dka" && $opis3 == ""}
    Za W�dk�  zap�acisz {$Cost12}. Za co twa energia wzorsnie o 18
<br><br><br>
    <center><form method="post" action="kawiarnia.php?alk=W�dka&step=wybierz3">
    <input type="submit" value="Kup"><br><br><br>
    (<a href="kawiarnia.php">Wr��</a>)
{/if}
{if $Step == "wybierz" && $opis == ""}
    <br>Wybra�e� {$kawke}. Po wypiciu kawki i porozmawianiu z r�znymi ludzi przy niej poczu�ej si� rozlu�niony i twa energia wzros�a.
{/if}
{if $Step == "wybierz1" && $opis1 == ""}
    <br>Wybra�e� {$kawke}. Po zjezedzniu smacznego ciasta i porozmawianiu z r�znymi lud�mi  poczu�ej si� rozlu�niony i twa energia wzros�a.
{/if}

{if $Step == "wybierz2" && $opis2 == ""}
    <br>Wybra�e� {$kawke}. Po wypiciu ciep�ej herbatki i porozmawianiu z r�znymi lud�mi  poczu�ej si� rozlu�niony i twa energia wzros�a.
{/if}
{if $Step == "wybierz3" && $opis3 == ""}
    <br>Wybra�e� {$kawke}. Po wypiciu alkoholu i porozmawianiu z r�znymi lud�mi  poczu�ej si� rozlu�niony i twa energia wzros�a.
{/if}

