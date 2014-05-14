{if $jedzenie == ""}
    Tutaj Zamieszczony Bêdzie Opis
    
   <center> - <a href="laznie.php?jedzenie=tanie">Tanie jedzenie</a><br><br></center>
   
   <center>- <a href="laznie.php?jedzenie=srednie">¦rednie jedzenie</a><br><br></center>
   
   <center> - <a href="laznie.php?jedzenie=wysmienite">Wyœmienite jedzenie</a><br><br><br></center>

Cena zalezy od twojego poziomu. W koñcu im jesteœ bardziej doœwiadczony i silny to

 {/if}

{if $jedzenie == "tanie" && $opis == ""}
    Tutaj Zamieszczony Bêdzie Opis: <br>
    Zaplacisz  : {$Cost} za co twój g³ód zmniejszy siê o 1.
<br><br><br>
    <center><form method="post" action="skleps.php?jedzenie=tanie&step=wybierz">
    <input type="submit" value="Kup i najedz siê"><br><br><br>
    (<a href="laznie.php">Wróæ</a>)
{/if}

{if $kapiel == "srednie" && $opis == ""}
    Tutaj Zamieszczony Bêdzie Opis<br>
 Zaplacisz  : {$Cost2} za co twój g³ód zmniejszy siê o 3.
<br><br><br>
    <center><form method="post" action="laznie.php?kapiel=sredia&step=wybierz">
    <input type="submit" value="Kup i najedz siê"><br><br><br>
    (<a href="laznie.php">Wróæ</a>)
{/if}

{if $kapiel == "wysmienite" && $opis == ""}
    Tutaj Zamieszczony Bêdzie Opis<br>
. Zaplacisz  : {$Cost3} za co twój g³ód zmniejszy siê o 5.
<br><br><br>
    <center><form method="post" action="laznie.php?kapiel=boska&step=wybierz">
    <input type="submit" value="Kup i najedz siê"><br><br><br>
    (<a href="laznie.php">Wróæ</a>)
{/if}


{if $Step == "wybierz" && $opis == ""}
    <br>Wybra³e¶  {$kapiel} jedzenie. Najad³es sie i zmniejszy³ siê twój g³ód.
{/if}

