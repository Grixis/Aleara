{if $Dziwka == ""}
   <center>Witaj w Domu Towarzyskim -  podala oferty :</center><br><br>
   <center><b>Dla Mê¿czyzn</b>:</center><br>
   
   <center> - <a href="burdel.php?dziwka=esmeralda">Esmeralda</a><br><br></center>
   <center>- <a href="burdel.php?dziwka=eilena">Eilena</a><br><br></center>
   <center> - <a href="burdel.php?dziwka=kasandra">Kasandra</a><br><br><br></center>
   <center>======================================</center><br>
   <center><b>Dla Kobiet</b>:</center><br>
   
   <center> - <a href="burdel.php?kurwa=rokie">Roki</a><br><br></center>
   <center>- <a href="burdel.php?kurwa=herkules">Herkules</a><br><br></center>
   <center> - <a href="burdel.php?kurwa=treminator">Terminator</a><br><br><br></center>


   <center><b>Cena zalezy od waszego poziomu w koncu im wieksze miesnie tym wiecej potrzebuja uwagi.</b></center>
   <br><br><br>
   


 {/if}

{if $Dziwka == "esmeralda" && $opis == ""}
    Esmeralda : opis laski. Zaplacisz jej : {$Cost} za co twa energia wzorsnie o 1.
<br><br><br>
    <center><form method="post" action="burdel.php?dziwka=esmeralda&step=wybierz">
    <input type="submit" value="Przespij sie"><br><br><br>
    (<a href="burdel.php">Wróæ</a>)
{/if}

{if $Dziwka == "eilena" && $opis == ""}
    Eilena : opis laski. Zaplacisz jej : {$Cost2} za co twa energia wzorsnie o 2.
<br><br><br>
    <center><form method="post" action="burdel.php?dziwka=eilena&step=wybierz">
    <input type="submit" value="Przespij sie"><br><br><br>
    (<a href="burdel.php">Wróæ</a>)
{/if}

{if $Dziwka == "kasandra" && $opis == ""}
    Kasandra : opis laski. Zaplacisz jej : {$Cost3} za co twa energia wzorsnie o 3.
<br><br><br>
    <center><form method="post" action="burdel.php?dziwka=kasandra&step=wybierz">
    <input type="submit" value="Przespij sie"><br><br><br>
    (<a href="burdel.php">Wróæ</a>)
{/if}

{if $Step == "wybierz" && $opis == ""}
    <br>Wybra³e¶ piekna  {$dziwka}. Spedziliscie upojne chwile dzieki czemu twoja energia wzrosla.
{/if}


{if $Kurwa == "rokie" && $opis == ""}
    Roki : bokser silny, dobry prawy sierpowy. Zaplacisz mu : {$Cost4} za co twa energia wzorsnie o 1.
<br><br><br>
    <center><form method="post" action="burdel.php?kurwa=rokie&step=wybierz">
    <input type="submit" value="Przespij sie"><br><br><br>
    (<a href="burdel.php">Wróæ</a>)
{/if}

{if $Kurwa == "herkules" && $opis == ""}
    Herkules : to mit, piêkny umiêsniony, syn Bogów. Zaplacisz mu : {$Cost5} za co twa energia wzorsnie o 2.
<br><br><br>
    <center><form method="post" action="burdel.php?kurwa=herkules&step=wybierz">
    <input type="submit" value="Przespij sie"><br><br><br>
    (<a href="burdel.php">Wróæ</a>)
{/if}

{if $Kurwa == "treminator" && $opis == ""}
    Terminator : niezniszczalny silny bardzo umiêsniony. Zaplacisz mu : {$Cost6} za co twa energia wzorsnie o 3.
<br><br><br>
    <center><form method="post" action="burdel.php?kurwa=treminator&step=wybierz">
    <input type="submit" value="Przespij sie"><br><br><br>
    (<a href="burdel.php">Wróæ</a>)
{/if}

{if $Step == "wybierz" && $opis == ""}
    <br>Wybra³e¶ pieknego  {$kurwa}. Spedziliscie upojne chwile dzieki czemu twoja energia wzrosla.
{/if}


