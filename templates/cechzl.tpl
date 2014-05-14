{if $pokoj == ""}
<center><IMG SRC="images/locations/gildiazlodziei.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Spacerując nocą na obrzeżach Aleary dostrzegasz z oddali wielką skałę o dziwnym kształcie. Podchodzisz bliżej i zauważasz, że to jakaś stara ruina wzniesiona na skale. Postanawiasz zbadać to miejsce. Tak też robisz. Skradasz się powoli… Trochę czasu zajęło Ci odnalezienie przejścia w skale. Gdy stoisz już przy murach wychylasz się i widzisz mrocznego elfa z kapturem na głowie. Obok niego na ziemi siedzą inne istoty również ubrane na czarno i z kapturami na głowach. Zaciekawiony tą sytuacją powoli i niepewnie wchodzisz do ruiny. Podchodzisz do Mrocznego Elfa i drżącym głosem pytasz się go co to za miejsce. On oznajmia Ci, że to miejsce spotkań złodziei. Po krótkiej rozmowie dowiadujesz się, że możesz tutaj wykupić dodatkowe pozwolenia na kradzieże. Elf powiedział Ci również, że to jedne z najstarszych miejsc na ziemiach Huritinu i niewiele istot nie specjalizujących się w złodziejstwie wie o istnieniu tego miejsca. Spotkania tutaj są ściśle tajne i odbywają się tylko nocą. Kazał Ci pamiętać, aby o tym miejscu nie wspominać nikomu.
     
     <br><br>
   <center> - <a href="cechzl.php?pokoj=maly">Wykup pozwolenie</a><br><br></center>



 {/if}

{if $Pokoj == "maly" && $opis == ""}
     Za możliwosc dokonania dodatkowej kradzieży zapłacisz: {$Cost}.
<br><br><br>
    <center><form method="post" action="cechzl.php?pokoj=maly&step=wybierz">
    <input type="submit" value="Podpisz dokument"></input><br><br><br>
    (<a href="cechzl.php">Wróć</a>)
{/if}


{if $Step == "wybierz" && $opis == ""}
    <br>Zapłaciles ustaloną kwotę, możesz teraz spróbować swych złodziejskich umiejetności-uważaj jednak na straże!<br><br>
{/if}

 <BR>

