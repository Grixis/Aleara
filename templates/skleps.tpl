{if $jedzenie == ""}
    Tutaj Zamieszczony B�dzie Opis
    
   <center> - <a href="laznie.php?jedzenie=tanie">Tanie jedzenie</a><br><br></center>
   
   <center>- <a href="laznie.php?jedzenie=srednie">�rednie jedzenie</a><br><br></center>
   
   <center> - <a href="laznie.php?jedzenie=wysmienite">Wy�mienite jedzenie</a><br><br><br></center>

Cena zalezy od twojego poziomu. W ko�cu im jeste� bardziej do�wiadczony i silny to

 {/if}

{if $jedzenie == "tanie" && $opis == ""}
    Tutaj Zamieszczony B�dzie Opis: <br>
    Zaplacisz  : {$Cost} za co tw�j g��d zmniejszy si� o 1.
<br><br><br>
    <center><form method="post" action="skleps.php?jedzenie=tanie&step=wybierz">
    <input type="submit" value="Kup i najedz si�"><br><br><br>
    (<a href="laznie.php">Wr��</a>)
{/if}

{if $kapiel == "srednie" && $opis == ""}
    Tutaj Zamieszczony B�dzie Opis<br>
 Zaplacisz  : {$Cost2} za co tw�j g��d zmniejszy si� o 3.
<br><br><br>
    <center><form method="post" action="laznie.php?kapiel=sredia&step=wybierz">
    <input type="submit" value="Kup i najedz si�"><br><br><br>
    (<a href="laznie.php">Wr��</a>)
{/if}

{if $kapiel == "wysmienite" && $opis == ""}
    Tutaj Zamieszczony B�dzie Opis<br>
. Zaplacisz  : {$Cost3} za co tw�j g��d zmniejszy si� o 5.
<br><br><br>
    <center><form method="post" action="laznie.php?kapiel=boska&step=wybierz">
    <input type="submit" value="Kup i najedz si�"><br><br><br>
    (<a href="laznie.php">Wr��</a>)
{/if}


{if $Step == "wybierz" && $opis == ""}
    <br>Wybra�e�  {$kapiel} jedzenie. Najad�es sie i zmniejszy� si� tw�j g��d.
{/if}

