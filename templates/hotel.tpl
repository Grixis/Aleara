{if $pokoj == ""}
    Witaj w hotelu, oto nasza oferta!
     :<br><br>
   <center> - <a href="hotel.php?pokoj=maly">Pok�j Ma�y</a><br><br></center>
   <center>- <a href="hotel.php?pokoj=sredni">Pokoj Sredni</a><br><br></center>
   <center> - <a href="hotel.php?pokoj=duzy">Pokoj Du�y</a><br><br><br></center>

   


 {/if}

{if $Pokoj == "maly"}
    Oto jedna z naszych ofert.Ma�y Pok�j!Wybieraj�� ten pok�j wy�pisz sie tu i zap�acisz : {$Cost} za co twa energia wzorsnie o 1.
<br><br><br>
    <center><form method="post" action="hotel.php?pokoj=maly&step=wybierz">
    <input type="submit" value="Przespij sie"><br><br><br>
    (<a href="hotel.php">Wr��</a>)
{/if}

{if $Pokoj == "sredni"}
Oto jedna z naszych ofert.�redni Pok�j!Wybieraj�� ten pok�j wy�pisz sie tu i zap�acisz : {$Cost2} za co twa energia wzorsnie o 2.
<br><br><br>
    <center><form method="post" action="hotel.php?pokoj=sredni&step=wybierz">
    <input type="submit" value="Przespij sie"><br><br><br>
    (<a href="hotel.php">Wr��</a>)
{/if}

{if $Pokoj == "duzy"}
Oto jedna z naszych ofert.Du�y Pok�j!Wybieraj�� ten pok�j wy�pisz sie tu i zap�acisz : {$Cost3} za co twa energia wzorsnie o 3.
<br><br><br>
    <center><form method="post" action="hotel.php?pokoj=duzy&step=wybierz">
    <input type="submit" value="Przespij sie"><br><br><br>
    (<a href="hotel.php">Wr��</a>)
{/if}


{if $Step == "wybierz"}
    <br>Wybra�e� pi�kny {$pokoj}. Bardzo sie wyspales przez co twoja energia wzrosla.
{/if}

