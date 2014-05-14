{if $kapiel == ""}
   Idąc wąską uliczką {$Gamename} zauważasz niski budynek z pozłacanym szydlem:<br><i><big><b><u>Łaźnie</u></b></big></i><br>
   Postanowiłeś wejść do środka<br>
   Idąc korytarzem  natrafiłeś na piękną elfkę która spytała cię:<br><i><font color="red"><b>Jaką kąpiel przygotować?</b></font></i><br>
   Ty odpowiadasz:<br><i><b> Poproszę..</b></i><br><br>

   <center> - <a href="laznie.php?kapiel=Tanią"><i>Tanią Kąpiel</i></a><br><br></center>

   <center>- <a href="laznie.php?kapiel=średnią"><i>średnią Kąpiel</i></a><br><br></center>
   <center> - <a href="laznie.php?kapiel=Książęca"><i>Książęca Kąpiel</i></a><br><br><br></center>
   <center> - <a href="laznie.php?kapiel=Królewską"><i>Królewską Kąpiel</i></a><br><br><br></center>

<center>Cena zależy od twojego poziomu .</center>



 {/if}

{if $kapiel == "Tanią" && $opis == ""}
    Jest to najtańsza kąpiel ze wszystkich. <br>

    Zaplacisz  : {$Cost} za co twa energia wzrośnie o 1.
<br><br><br>
    <center><form method="post" action="laznie.php?kapiel=Tanią&step=wybierz">
    <input type="submit" value="Skorzystaj z Łaźni"><br><br><br>
    (<a href="laznie.php">Wróć</a>)
{/if}

{if $kapiel == "średnią" && $opis == ""}
    Jest to kąpiel dla wymagających wojowników.<br>Dzięki specjalnym olejką wytwarzanym przez miejscowego Alchemika kąpiel jest bardzo relaksująca<br>
 Zaplacisz  : {$Cost2} za co twa energia wzrośnie o 3.
<br><br><br>
    <center><form method="post" action="laznie.php?kapiel=średnią&step=wybierz">
    <input type="submit" value="Skorzystaj z Łaźni"><br><br><br>
    (<a href="laznie.php">Wróć</a>)
{/if}

{if $kapiel == "Królewską" && $opis == ""}
    Jak sama nazwa wskazuje jest to kąpiel najlepsza ze wszystkich<br>

. Zaplacisz  : {$Cost3} za co twa energia wzrośnie  o 10.
<br><br><br>
    <center><form method="post" action="laznie.php?kapiel=Królewską&step=wybierz">
    <input type="submit" value="Skorzystaj z Łaźni"><br><br><br>
    (<a href="laznie.php">Wróć</a>)
{/if}

{if $kapiel == "Książęca" && $opis == ""}
    Jest to kąpiel przeznaczona głównie dla książąt i bogatych mieszkańców<br>
    Odpręża znakomicie lecz jest dosyć kosztowna

. Zaplacisz  : {$Cost4} za co twa energia wzrośnie  o 6.
<br><br><br>
    <center><form method="post" action="laznie.php?kapiel=Książęca&step=wybierz">
    <input type="submit" value="Skorzystaj z Łaźni"><br><br><br>
    (<a href="laznie.php">Wróć</a>)
{/if}
{if $Step == "wybierz" && $opis == ""}
    <br>Wybrałeś  {$kapiel} kąpiel. Spedziłeś miłe chwile dzieki czemu twoja energia wzrosla.
{/if}

