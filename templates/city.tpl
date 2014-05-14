{strip}

</br>
{/strip}
{strip}
{if (($Item == "0" && $Location == 'Altara') OR ($Location == 'Ardulith' && ($Step == "" OR $Step=="list"))) AND $Step!="ogloszenie"}
{if $Graphstyle == "Y"}

	{if $Location == 'Altara'}{strip}


<div style="width:95%" style="margin-left: 25px;">
<table style="margin-left: 35px;" border="0" bordercolor="#555555" align="center"  width="450px" cellpadding="1" cellspacing="1">
<tr style="border: 1px solid #666666; background: black;">
</tr>
<tr>
<td colspan="3" style="width: 450px; height: 150px; background: url( 'images/locations_1/aleara/tlomiasta_01.gif'); " >
</td>
</tr>		
<tr style="border: 1px solid #666666; background: black;">
            <th>Mroczne Obrzeże</th><th>Dzielnica Mieszkalna</th><th>Rynek Handlowy</th>
        </tr>
        <tr>
            <td style="font-weight: bold; text-align: center; width: 150px; height: 263px; background: url( 'images/locations_1/aleara/tlomiasta_02.gif');">
                <a href="wiezatrans.php" title="<center><b> Wieża Transmutacji </b><br><img src=images/obrazkimiasta/wiezatransmutacji.png>Możesz tutaj pić wywary transmutacji. Wywar transmutacji przeobrazi Twoją postać w zmutowane monstrum i dodaja jej nowe umiejętności takie jak hipnoza, atak krytyczny wampira itd. To właśnie tutaj też szamani mogą przygotować te oto wywary.<br></center>">Wieża Transmutacji</a><br>
                <a href="mines.php" title="<center><b> Domek Geologa </b><br><img src=images/obrazkimiasta/domekgeologa6.png>Możesz tutaj wykupić geologa do szukania złóż rudy miedzi, cynku, cyny, żelaza i węgla. To ile złóż zostanie odnalezionych przez geologa zależy od tego na ile czasu go wyślesz i ile mu zapłacisz. Gdy zostaną już odnalezione złoża, możesz wydobywać rudę z nich. Pobiera to energię.</center>">Domek Geologa</a><br>
                <a href="maze.php" title="<center><b> Opuszczony Szyb </b><br><img src=images/obrazkimiasta/opuszczonyszyb6.png><br>Miejsce przeznaczone do wędrówek. Zwiędzając opuszczony szyb starej kopalni możesz zdobyć zioło i drewno wszelkiego rodzaju. Czasem uda się nawet znaleźć trochę energii. Można natrafić też tutaj na potwory!</center>">Opuszczony Szyb</a><br>
                <a href="lumbermill.php" title="<center><b> Warsztat ciesielski </b><br><img src=images/obrazkimiasta/tartak6.png>Możesz kupić tutaj licencję na wyrąb drewna w Lesie Zbłąkanych Dusz! Rzemieślnicy dodatkowo mogą tutaj strugać łuki i strzały. Czym więcej rzemieślik posiada umiejętności stolarstwo i ma lepsze statystyki, tym wykonuje lepsze przedmioty.</center>">Warsztat Ciesielski</a><br>
                <a href="alchemik.php" title="<center><b> Pracownia Alchemiczna </b><br><img src=images/obrazkimiasta/pracowniaalchemiczna6.png><br>Możesz tutaj robić miksturki wszelkiego typu. Potrzebujesz do tego planów alchemicznych, które też tutaj znajdziesz. Moc miksturki zależy od plany oraz Twojej umiejętności alchemia. Rzemieslnicy moga tutaj tworzyć znacznie mocniejsze miksturki.</center>">Pracownia Alchemika</a><br>
                <a href="woodfarm.php" title="<center><b> Plugawy Ogród </b><br><img src=images/obrazkimiasta/plugawyogrod6.png><br>Możesz tutaj wynająć ziemię pod swój ogród. Na jednym obszarze możesz zasadzić maksymalnie 50 sadzonek drzewek. Ogród można rozbudowywać. Sadzonki można znaleźć przeszukując Las Zbłąkanych Dusz oraz Cmentarzysko Diaburiona w Diabolium. Drzewka można ściąć po 5 dniach od zasadzenia. Ilość ściętych drzewek zależy od naszej umiejętności drwalnictwo.</center>">Plugawy Ogród</a><br>
                <a href="opuszczonakuznia.php" title="<center><b> Opuszczona Kuźnia </b><br><img src=images/obrazkimiasta/opuszczonakuznia6.png><br>W opuszczonej kuźni mamy możliwość zakupienia reliktów potrzebnych do ulepszenia przedmiotu. Możemy kupić je tam za złoto. Cena reliktu zależy od jego mocy. Gracze z podklasą podróżnik mogą o wiele taniej kupowac relikty. Są trzy rodzaje reliktów. Każdy przedmiot można tylko raz ulepszyć jednym z reliktów. Takie ulepszenie zwiększa wszystkie parametry przedmiotu i jest na stałe.</center>">Opuszczona Kuźnia</a><br>
                <a href="ttshop.php" title="<center><b> Opuszczone Stawy </b><br><img src=images/obrazkimiasta/opuszczonestawy6.png><br>Możesz tutaj łowić ryby. Cena łowiena jest ustalona w złocie i zależy od poziomu postaci.</center>">Opuszczone Stawy</a><br>
                <a href="szaman.php" title="<center><b> Zagajnik Szamanów </b><br><img src=images/obrazkimiasta/zagajnikszamanow6.png><br>Lokacja jest przeznaczona tylko dla graczy z klasą szaman i nekromanta. Można tutaj szkolić swoją umiejętność rytuały. Szaman może tutaj leczyć samego siebie lub innych graczy. Otrzymuje za to doświadczenie. Nekromanta zaś ma możliwość wskrzesznia tutaj samego siebie i innych graczy. Również otrzymuje za to punkty doświadczenia.</center>">Zagajnik Szamanów</a><br>
                <a href="ziemniaki.php" title="<center><b> Pole Ziemniaków </b><br><img src=images/obrazkimiasta/poleziemniakow6.png><br>Mozesz kopać tutaj ziemniaki niezbędne do produkcji wódki w kuchni miejskiej dzieki której odzyskujemy znaczną ilość energii. Koszt kopania ziemniaków jest liczony w energii.</center>">Pole Ziemniaków</a><br>
                <a href="ashop.php" title="<center><b> Chatka Leśniczego </b><br><img src=images/obrazkimiasta/chatkalesniczego6.png><br>Możesz tutaj kupić grzyby niezbędne do gotowania zupy z grzybów w kuchni miejskiej. Cena zależy od Twojego poziomu postaci.</center>">Chatka Leśniczego</a>
            </td>
            <td style="font-weight: bold; text-align: center; width: 150px; height: 263px; background: url( 'images/locations_1/aleara/tlomiasta_03.gif');">
                <a href="house.php" title="<center><b> Domy Mieszkańców </b><br><img src=images/obrazkimiasta/domumieszkancow6.png><br>Możesz tutaj wykupic ziemię i wybudować na niej własny domek. Od tego ile zrobisz przy domku zależą Twóje punkty budowlane które zdobywasz co godzinę. Gdy Twój dom będzie już miał rozmiar minimum 5 będziesz mógł mieć współwłaściciela. W domu można odzyskiwać energię raz na reset główny. Do rozbudowy domku są potrzebne surówce takie jak: złoto, mithril i wszelkiego rodzaju drewno. To ile odzyskasz energi i szansa na to, zależy od rozmiaru i wartości Twojej posiadłości.</center>">Domy Mieszkańców</a><br>
                <a href="tribes.php" title="<center><b> Gmach Gildii </b><br><img src=images/obrazkimiasta/gmachgildii6.png><br>Znajduje się tutaj spis wszystkich gildii powstałych w naszej krainie, oraz ranking gildyjny opierający się na prestiżu gildii. Możesz tutaj również założyć własną gildię lub wejść do siedziby gildii w której znajdujesz się. Gildie posiadają swoje fortece i świątynie które możemy rozbudowywać. Czym większa forteca i świątynia, tym nasze armie mogą być silniejsze, gildia może mieć więcej członków, możemy brać silniejsze buffy na statystyki i umiejętności ze świątyni gildyjnej. Gildia zdobywa prestiż za wojny między gildiani, PvP między członkami różnych gildii, wbijanie poziomów naszych postaci.</center>">Gmach Gildii</a><br>
                <a href="reputation.php" title="<center><b> Dom Murgrabiego </b><br><img src=images/obrazkimiasta/dommurgrabiego6.png><br>W tej lokacji widnieją wszystkie informacje na temat konkursów przeprowadzanych przez murgrabiego. Za wygranie takiego konkursu, oraz udział w nim otrzymujemy spore nagrody.</center>">Dom Murgrabiego</a><br>
                <a href="news.php" title="<center><b> Zakątek Plotkarski </b><br><img src=images/obrazkimiasta/zakatek6.png><br>Tutaj jest miejsce w którym możesz puścić ciekawą plotkę na różne tematy, lecz pamiętaj, że muszą być związane z krainą lub graczami mieszkającymi w niej.</center>">Zakątek Plotkarski</a><br>
                <a href="chat.php" title="<center><b> Tawerna </b><br><img src=images/obrazkimiasta/taawerna.png><br>Tutaj znajduje się czat krainy. Możesz porozmawiać w tej lokacji z innymi graczami. Czat podzielony jest na dwa główne pokoje oraz dwa dla prywatnych rozmówek. W Izbie obowiązuje klimat, w Piwnicy są dopuszczalne rozmowy na różne tematy jednak trzeba pamiętać o regulaminie.</center>">Tawerna</a><br>
                <a href="wieza.php" title="<center><b> Wieża Magów </b><br><img src=images/obrazkimiasta/wiezamagow6.png><br>Magowie tutaj mogą za złoto nabyć szatę, różdżkę oraz czary niezbędne do walki na arenie walk. Znajdują się tutaj również czary użytkowe do umagiczniania (ulepszania) części ekwipunku graczy. Czym mamy więcej umiejętności rzucanie czarów, tym większa szansa na powodzenie rzucenia zaklęcia.</center>">Wieża Magów</a><br>
                <a href="battle2.php" title="<center><b> Arena Honorowa </b><br><img src=images/obrazkimiasta/ahonorowa.png><br>Jest to miejsce przeznaczone do honorowych walk między graczami. Walcząć tutaj nic nie zyskujemy tak jak i nic nie tracimy. Walki są typowo honorowe. Aby walczyć z danym graczem na arenie, obydwoje muszą znajdować się w tej lokacji. Inaczej walka nie będzie możliwa.</center>">Arena Honorowa</a><br>
                <a href="poorhouse.php" title="<center><b> Przytułek </b><br><img src=images/obrazkimiasta/przytulek6.png><br>Tu możesz bezpiecznie się schować przed złodziejami i bandytami. Koszt noclegu jest liczony w złocie i zależy od Twojego poziomu postaci. Po zapłacie zostaniesz wylogowany i aż do czasu kolejnego logowania będziesz bezpieczny.</center>">Przytułek</a><br>
                <a href="kuchnia.php" title="<center><b> Kuchnia Miejska </b><br><img src=images/obrazkimiasta/kuchnia6.png><br>Możesz tutaj smarzyć ryby, gotować zupę grzybową oraz wykonywać wódkę. Każda z czynności ma swój ustalony poziom trudności. Surowce potrzebne w lokacji: ryby, grzyby, ziemniaki. Dzieki udanym podtawą/napoją możesz odzyskiawć energię maksymalnie 5 razy na reset.</center>">Kuchnia Miejska</a><br>
                <a href="ogloszenia.php" title="<center><b> Słup Informacyjny </b><br><img src=images/obrazkimiasta/slup6.png><br>Na słupie infofrmacyjnym możesz napisać swoje ogłoszenie związane z grą. będzie one wyświetlane w górnym panelu gry, na dole miasta oraz tutaj. Cena jest w złocie i zależy od Twojego poziomu.</center>">Słup Informacyjny</a><br>
                <a href="los.php" title="<center><b> Budka Loteryjna </b><br><img src=images/obrazkimiasta/budkaloteryjna6.png><br>Mozesz tutaj zagrać w lotto typując liczby. Koszt losu zależy od Twojego poziomu.</center>">Budka Loteryjna</a><br>
                <a href="cech.php" title="<center><b> Dom Cechowy </b><br><img src=images/obrazkimiasta/domcechowy6.png><br>W tej lokacji możesz sprawdzić liste mieszkańców z podziałem na klasy.</center>">Dom Cechowy</a>
            </td>
            <td style="font-weight: bold; text-align: center; width: 150px; height: 263px; background: url( 'images/locations_1/aleara/tlomiasta_04.gif');">
                <a href="gielda.php" title="<center><b> Giełda Akcyjna </b><br><img src=images/obrazkimiasta/gielda6.png><br>Na giełdzie możesz inwestowac złoto na zakup akcji. Cena akcji ciągle zmienia się i zależy od każdego ruchu gildii. Można kupić 40 akcji danej gildii w ciągu jednej godziny. Ceny najgwałtowniej rosną gdy dana gildia rozbudowuje fortecę i świątynię na kolejny poziom. Raz w miesiącu ceny akcji gwałtownie spadają.</center>">Giełda Akcyjna</a><br>
                <a href="market.php" title="<center><b> Rynek Handlowy </b><br><img src=images/obrazkimiasta/rynekhandlowy6.png><br>Na rynku możesz kupić/wystawić dosłownie wszystko to czym można handlować. Warto pamiętać jednak aby ustalać sensowne ceny.</center>">Rynek</a><br>
                <a href="warehouse.php" title="<center><b> Magazyn Królewski </b><br><img src=images/obrazkimiasta/magazynkrolewski6.png><br>W magazynie królewskim możesz sprzedać wszystkie surowce jakie nadają się do tego celu. Cena zmienia się raz w tygodniu i zależy od kilku współczynników. Spredaje się tutaj surowce w ostateczności, gdy żaden gracz nie chce kupić ich za większą cenę niż oferuje nam magazyn.</center>">Magazyn Królewski</a><br>
                <a href="armor.php" title="<center><b> Płatnerz </b><br><img src=images/obrazkimiasta/platnerz6.png><br>Tutaj możesz kupić zbroje, hełmy, nagolenniki i tarcze. Cena ich jest taka sama dla wszystkich i nie ulega zmianie. Czym mocniejszy przedmiot i na większy poziom, tym cena jest większa. Warto jednak pamiętać, iż rzemieślnicy wykonują lepsze przedmioty niż te które znajdziemy tutaj.</center>">Płatnerz</a><br>
                <a href="weapons.php" title="<center><b> Zbrojmistrz </b><br><img src=images/obrazkimiasta/zbrojmistrz6.png><br>Możesz tutaj kupić broń ręczną dla swojej postaci. Warto jednak pamiętać, iż rzemieślnicy tworzą lepsze przedmioty niż tutaj znajdziesz. Cena przedmiotów jest stała i taka sama dla każdego mieszkańca Aleary.</center>">Zbrojmistrz</a><br>
                <a href="skarbiec.php" title="<center><b> Krasnoludzki Bank </b><br><img src=images/obrazkimiasta/krasnoludzkibank6.png><br>Możesz tutaj dać pieniądzę na lokatę 10% na czas 80 resetów. Gracze z podklasą handlarz mają możliwość wpłacenia pieniędzy na lokatę trwającą 7 dni a zysk wynosi 35%.</center>">Bank Krasnoludów</a><br>
                <a href="bows.php" title="<center><b> Fleczer </b><br><img src=images/obrazkimiasta/fleczer6.png><br>Tutaj możemy zakupić łuk i strzały dla naszej postaci. Cena jest stała i taka sama dla wszystkich mieszkańców Aleary. Warto jednak pamiętac, iż stolarze robią znacznie lepsze łuki i strzały.</center>">Fleczer</a><br>
                <a href="jewellershop.php" title="<center><b> Sklep Jubilerski </b><br><img src=images/obrazkimiasta/sklepjubilerski6.png><br>Możesz zakupić tutaj pierścienie na 1 poziom dla swojej postaci. Warto jednak pamiętać, iż od 10 poziomu możesz zakładac pierścienie znacznie silniejsze tworzone przez jubilerów w naszej krainie.</center>">Sklep Jubilerski</a><br>
                <a href="msklep.php" title="<center><b> Apteka Miejska </b><br><img src=images/obrazkimiasta/aptekamiejska6.png><br>Tutaj możesz zakupić mikstury wszelkiego rodzaju o mocy 50. Warto jednak pamiętać, że rzemieślnicy robią mikstury znacznie mocniejsze. Ty też możesz zrobić mikstury w pracowni alchemimcznej!</center>">Apteka</a><br>
                <a href="praca.php" title="<center><b> Pośredniak </b><br><img src=images/obrazkimiasta/posredniak6.png><br>Możesz tutaj podjąć się różnych prac. W zamian za poświęconą iczbe punktów energii otrzymasz odpowiednią ilość złota. Ilość złota zależy od Twojego poziomu postaci.</center>">Pośredniak</a><br>
                <a href="sklepy.php" title="<center><b> Sklepy Mieszkańców </b><br><img src=images/obrazkimiasta/spismieszkancow66.png><br>Możesz tutaj kupić swój własny sklepik w którym możesz sprzedawać skrzęt z ekwipunku. Cenu stalasz sam. Są tutaj też sklepy innych graczy.</center>">Sklepy Mieszkańców</a><br>
                <a href="vallars.php" title="<center><b> Sklep Z Brylantami </b><br><img src=images/obrazkimiasta/sklepzbrylantami6.png><br>W tej lokacji możesz wymienić swoje dennary które zdobywać można za głosowanie na Aleare w zakładce Głosuj na Nas! Możesz tutaj wymieniać też na nagrody swoje brylanty, które zdobędziesz zapraszając graczy do gry oraz w różnych konkursach.</center>">Sklep Z Brylantami</a><br>
            </td>
        </tr>
        <tr style="border: 1px solid #666666; background: black;">
            <th>Królewski Zamek</th><th>Przedmieście</th><th>Dzielnica Zachodnia</th>
        </tr>
        <tr>
            <td style="font-weight: bold; text-align: center; width: 150px; height: 263px; background: url( 'images/locations_1/aleara/tlomiasta_05.gif');">
                <a href="updates.php" title="<center><b> Tablica Wieści </b><br><img src=images/obrazkimiasta/tablicawiescil.png>Tutaj możesz zapoznać się z najnowszymi wydarzeniami i ogłoszeniami władców!<br></center>">Tablica Wieści</a><br>
                <a href="newspaper.php" title="<center><b> Redakcja Gazety </b><br><img src=images/obrazkimiasta/redakcjagazetyl.png>Tutaj możesz przeczytać najnowszy numer gazety aleariańskiej pisanej przez redaktorów maszej krainy. Możesz tutaj znaleźć także starsze numery gazety oraz masz prawo dodać swój tekst do opublikowania w gazetce!</center>">Redakcja Gazety</a><br>
                <a href="library.php" title="<center><b> Biblioteka Miejska </b><br><img src=images/obrazkimiasta/bibliotekal.png><br>Tutaj możesz znaleźć ciekawe opowiadania, wiersze spisane przez bibliotekarzy oraz mieszkańców krainy. Sam możesz nawet dodać swój tekst do biblioteki. Czasem można znaleźć tutaj różne zagadki i konkursy!!</center>">Biblioteka</a><br>
                <a href="court.php" title="<center><b> Gmach Sądu </b><br><img src=images/obrazkimiasta/gmachsadul.png>Tutaj odbywają się wszystkie rozprawy sądowe w naszej krainie. W gmachu sądu znajduje się również kodeks krainy!</center>">Gmach Sądu</a><br>
                <a href="temple.php" title="<center><b> Świątynia Kości </b><br><img src=images/obrazkimiasta/swiatyniakoscil.png><br>To miejsce w którym możesz pracwać dla świątyni i odzyskiwać punkty wiary. Za pomocą nich możesz otrzymywac różne błogosławieństwa do statystyk lub umiejętności postaci. Mogą być one czasowe lub stałe. W świątyni kości znajduje się także opis wszystkich bóstw krainy!</center>">Świątynia Kości</a><br>
                <a href="memberlist.php" title="<center><b> Spis Mieszkańców </b><br><img src=images/obrazkimiasta/spismieszkancow.png>Możesz tutaj zobaczyć spis wszystkich mieszkańców naszej krainy z podziałem na nick, range, rasę i klasę!</center>">Spis Mieszkańców</a><br>
                <a href="tower.php" title="<center><b> Wieża Zegarowa </b><br><img src=images/obrazkimiasta/wiezazegarowa6.png>Tutaj dowiesz się o jakich godzinach jest reset (nowa tura) oraz o której godzinie jest reset główny (tura główna - nowy dzień w krainie)!</center>">Wieża Zegarowa</a><br>
                <a href="polls.php" title="<center><b> Hala Zgromadzeń </b><br><img src=images/obrazkimiasta/halazgromadzen6.png><br>W hali zgormadzeń odbywają się bardzo ważne debaty wszczęte przez władców naszej krainy. Jako dobry obywatel Aleary powienienś głosować w ankietach oraz komentować je!</center>">Hala Zgromadzeń</a><br>
                <a href="smelter.php" title="<center><b> Huta Królewska </b><br><img src=images/obrazkimiasta/huta6.png><br>W królewskiej hucie możesz przetapiać swoje rudy wszelkiego rodzaju na sztabki potrzebne rzemieślnikom do wykówania przedmiotów. Przetapianie rudy na sztabki pobiera energię oraz surowce. Hutę można rozbudowywac za złoto i surowce. Dodatkowo w tej lokacji rzemieślnicy mają możliwość wzmacniania cześci ekwipunku!</center>">Huta</a><br>
                <a href="kowal.php" title="<center><b> Kuźnia Królewska </b><br><img src=images/obrazkimiasta/kuznia6.png>Lokacja przeznaczona tylko dla rzemieślników. Owa klasa ma możliwość wykonywania tutaj zbroi, nagolenników, hełmów, tarcz oraz nawet broni ręcznej! Czym rzemieślnik ma więcej umiejętności kowalstwo i lepsze statystyki tym wykonuje przedmioty o większych parametrach. Do wykonywania owych przedmiotów potrzeba energię i sztabki różnych rodzajów, oraz zakupione plany przedmiotów.</center>">Kuźnia</a><br>
                <a href="hof.php" title="<center><b> Galeria Bohaterów </b><br><img src=images/obrazkimiasta/galeriabohaterow6.png>Znajduje się tutaj spis wszystkich bohaterów w naszej krainie. Bohaterem można zostać po zabiciu Strażnika Skarbu. Aby otworzyć portal do strażnika potrzebujemy 20 astralnych map! Można otrzymać też rangę bohatera za znaczące zasługi dla krainy!</center>">Galeria Bohaterów</a><br>
                <a href="grid.php" title="<center><b> Kanały Podzamcze </b><br><img src=images/obrazkimiasta/kanaly6.png>Kanały podzamcze to lokacja przeznaczona do podróżowania. W kanałach możemy znaleźć złoto, mithril, mapy astralne, komponenty astralne oraz różne inne surowce. Każdy nasz ruch pobiera energię! Podczas wędrówki możemy również napotkać na naszej drodze różne stwory.</center>">Kanały</a><br>
            </td>
            <td style="font-weight: bold; text-align: center; width: 150px; height: 263px; background: url( 'images/locations_1/aleara/tlomiasta_06.gif');">
                <a href="battle.php" title="<center><b> Arena Walk </b><br><img src=images/obrazkimiasta/arenahonorowa.png><br>Lokacja przeznaczona głównie dla postaci walczących. Rzemieślnicy mają tutaj małe szanse, jednak wojwnicy, łowcy i inne klasy przeznaczone do walki mogą zdobywać tutaj ogromne ilości doświadczenia trenując z potworami, lub walcząc z innymi graczami. Każda walka z potworem pobiera nam 1 punkt energii. W zamian za wygraną walkę otrzymujemy daną ilośc punktów doświadczenia oraz złoto. Należy jednak pamiętać, że aby walczyć na arenie musimy posiadać założoną broń w ekwipunku, a magowie aktywowany czar w księdze czarów.</center>">Arena Walk</a><br>
                <a href="jail.php" title="<center><b> Lochy Podziemne </b><br><img src=images/obrazkimiasta/lochy6.png><br>Lochy to miejsce gdzie przebywają osoby które dokonały jakichś wykroczeń. Skazany w lochach nie otrzymuje energii co turę oraz nie może poruszać się po krainie. Trafić można tutaj za nieznajomość kodeksu gry oraz wpadki mechaniczne takie jak np nieudana kradzież złodzieja. Z lochów można wyjść tylko po odczekaniu kary czasowej lub po wpłaceniu kaucji.</center>">Lochy</a><br>
                <a href="train.php" title="<center><b> Błonie Treningowe </b><br><img src=images/obrazkimiasta/blonietreningowe6.png><br>Możesz tutaj trenować swoje statystyki. Za trening płacimy  złotem oraz energią. Koszt treningu zależy od rasy postaci. Trenować można tutaj tylko statystyki na czas stały.</center>">Błonie Treningowe</a><br>
                <a href="krainacieni.php" title="<center><b> Cmentarz Nekromantów </b><br><img src=images/obrazkimiasta/cmentarznekromantow6.png><br>Jest to specjalne miejsce tylko dla graczy z klasą nekromanta, lub podklasą nekromanta. Cmentarz jest otwierany raz na tydzień przez kostucha. Informuje on na poczcie co jakoś czas o terminie i czasie otwarciu cmentarza. Jest on otwierany zazwyczaj na nie dłużej niż 10 minut. W tym czasie można tutaj zdobyć energię licząc ją w tysiącach. Lokacja polega na podróżowaniu i wskrzeszaniu zmarłych. Otrzymujemy za to niezwykle duże ilości energii oraz mithrilu. Każdy nasz ruch kosztuje energię. Bardzo często zdarza się, iż nie zdołamy wskrzesić zmarłego i umieramy, dlatego warto mieć złoto w sakiewce przyszykowane do wskszeszania samego siebie.</center>">Cmentarz Nekromantów</a><br>
                <a href="code.php" title="<center><b> Wieża Druida </b><br><img src=images/obrazkimiasta/wiezadruida6.png><br>Jest to miejsce, w którym możemy wpisać magiczny kod. Można go zdobyć za zapraszanie graczy do gry, za uczestniczenie w różnych konkursach u murgrabiego oraz na eventach mechanicznych. Każdy poprawny kod zwiększa daną statystykę na stałe o 50. Są kody do statystyk takich jak: maksymalny poziom hp, zręczność i siła.</center>">Wieża Druida</a><br>
                <a href="rung.php" title="<center><b> Hala Gladiatorów </b><br>Lokacja tymczasowo nieczynna!</center>">Hala Gladiatorów</a><br>
                <a href="monuments.php" title="<center><b> Posągi Chwały </b><br><img src=images/obrazkimiasta/posagichwaly6.png><br>Znajduje się tutaj bardzo zaawansowany ranking mieszkańców naszej krainy z podziałem na dziesiątki motywów!</center>">Posągi Chwały</a><br>
                <a href="stafflist.php" title="<center><b> Rozpiska Stanowisk </b><br><img src=images/obrazkimiasta/rozpiskastanowisk6.png><br>Znajduje sie tutaj rozpiska stanowisk naszej krainy. Jest aktualizowana przynajmniej raz w miesiącu.</center>">Rozpiska Stanowisk</a><br>
                <a href="jeweller.php" title="<center><b> Warsztat Jubilerski </b><br><img src=images/obrazkimiasta/warsztatjubilerski6.png><br>Jest to przeznaczona lokacja dla graczy z klasą rzemieślnik. Można tutaj wykonywać pierścienie. Aby wykonać jakiekolwiek pierścień musimy posiadać plan sygnetu. Sygnety mają moc +0. Jeśli mamy wykonanych kilka sygnetów, możemy je przerobić na artefakty. Potrzebujemy do tego energię oraz surowce takie jak kryształ, meteoryt, adamantium oraz energię. Można tutaj też wykonywac relikty pierścieni, przekówając kilka jednakowych artefaktów. Jest to jednak bardzo trudny w wykonaniu proces.</center>">Warsztat Jubilerski</a><br>
                <a href="core.php" title="<center><b> Polana Chowańców </b><br><img src=images/obrazkimiasta/polanachowancow6.png><br>Możemy tutaj złapać chowańce, trenować je i wystawiać na arenie. Za wygrane walki chowańców otrzymujemy złoto oraz pkt doświadczenia. Można tutaj także sprzedawać swoje chowańce tak jak i je rozmnarzać. Na powodzenie szansy treningu chowańca wpływa umiejętność hodowla oraz poziom chowańca (czym mniejszy tym większe szanse).</center>">Polana Chowańców</a><br>
                <a href="port.php" title="<center><b> Port Pod Zgnitą Łajbą </b><br><img src=images/obrazkimiasta/port6.png><br>Jest to miejsce z którego możemy ruszyć na Wyspę Złota oraz Wyspę Mithrilu. Koszt przejazdu na Wyspę Mithrilu wynosi 50k złota, na Wyspę Złota 100k złota. Na wyspie mithrilu wydobywamy ogromne ilości mithrilu. Ilość wydobywanego surowca zależy od naszego poziomu postaci. To ile razy możemy wydobywac mithril z morza zależy od tego ile chcemy wydać energi. Z wyspą złota jest podobnie.</center>">Port</a>    
            </td>
            <td style="font-weight: bold; text-align: center; width: 150px; height: 263px; background: url( 'images/locations_1/aleara/tlomiasta_07.gif');">
                <a href="outposts.php" title="<center><b> Strażnica </b><br><img src=images/obrazkimiasta/straznica6.png><br>Strażnica to symulacja wielkiej fortecy. Możesz nią zbroić kupując piechurów, łuczników, katapulty, barykady. Możesz również dodawać do niej chowańce oraz uzbrajac własnych weteranów ekwipunkiem. Strażnic są przeznaczone głównie do walk między nimi oraz do zarabiania na nich poprzez ściąganie danin z innych wiosek. Surowce jakie sa potrzebne do zakupu wojska i zwiększania poziomu straznicy to głównie złoto, sosna i mithril.</center>">Strażnica</a><br>
                <a href="farm.php" title="<center><b> Farma </b><br><img src=images/obrazkimiasta/farma6.png><br>Możesz tutaj zakupić obszar pod własną farmę. Możesz ją rozbudowywać i siać na niej nasiona ziół. Aby cokolwiek na niej zasiać potrzebujesz całe wyposażenie farmy które zakupisz za złoto, mithril i sosnę. W chatce ogrodnika możesz suszyć zioło przerabiać je na nasionka. Zbiory zależą od czasu w którym zbieramy zioło (najlepiej między 20 - 23 resetem od zasiania), od ilości zasianego zioła oraz od Twojej umiejętności zielarstwo. Możesz tutaj siać wszelkie gatunki zioła.</center>">Farma</a><br>
                <a href="travel.php" title="<center><b> Bramy Miasta </b><br><img src=images/obrazkimiasta/bramymiasta6.png><br>Stąd możesz ruszyć w podróż do innych dużych lokacji. Do Lasu Zbłąkanych Dusz, Gór Przeznaczenia, Diabolium, Krwawych Mokradeł, Wyspę Złota i Mithrilu.</center>">Bramy Miasta</a><br>
                <a href="pary.php" title="<center><b> Kaplica Ślubna </b><br><img src=images/obrazkimiasta/kaplicaslubna6.png><br>Tutaj znajdziesz wszystkie pary w naszej krainie oraz informacje jak dokonać aktu ślubu. Ślub zwiększa Twoją energię jaką dostajesz co turę.</center>">Kaplica Ślubna</a><br>
                <a href="cechzl.php" title="<center><b> Gildia Złodzieji </b><br><img src=images/obrazkimiasta/gildiazlodzieji6.png><br>Możęsz tutaj będąc złodziejem wykupić dodatkowe pozwolenia na kradzież. Cena zależy od twojego poziomu postaci.</center>">Gildia Złodzieji</a><br>
                <a href="houselure.php" title="<center><b> Czerwona Latarnia </b><br><img src=images/obrazkimiasta/czerwonalatarnia6.png><br>Tutaj możesz kożystać z usług kobiet lekkich obyczajów. Koszt zalezy od kobiety oraz Twojego poziomu. Otrzymasz za to daną ilość energii.</center>">Czerwona Latarnia</a><br>
                <a href="baszta.php" title="<center><b> Baszta Najemników </b><br><img src=images/obrazkimiasta/basztanajemnikow6.png><br>Możesz tutaj wynająć najemników którzy będą Cię bronić. Możesz również odwołać ich z czasem. Cena wynajmu zalezy od Twojego poziomu postaci. Posiadanie najemników zapewnia Ci bezpieczeństwo przed atakami, kradzieżami, wampirami, szpiegami, hipnozą.</center>">Baszta Najemników</a><br>
                <a href="straz.php" title="<center><b> Baszta Strazników Miejskich </b><br><img src=images/obrazkimiasta/basztastraznikowmiejskich6.png><br>Możesz tutaj sprawdzić liste strażników miejskich i ich możliwości w celu poradzenia się straznika o coś, lub zgłoszenia złamania regulaminu. W przypadku braku strażników pisz do władcy.</center>">Baszta Strażników</a><br>
                <a href="pub.php" title="<center><b> Stary Pub </b><br><img src=images/obrazkimiasta/starypub6.png><br>Możesz tutaj pić alkohol. Dzięki temu wzrośnie Twoja umiejętnośc alkoholizm oraz odzyskasz daną ilość energi. To ile odzyskasz energii zależy od trunku jakiego wypijesz. Możesz pić w pubier raz na reset główny.</center>">Stary Pub</a><br>
                <a href="stajnia.php" title="<center><b> Zagroda Konii </b><br><img src=images/obrazkimiasta/zagrodakoni6.png><br>Możesz tutaj nauczyć się jazdy konno oraz trenować własnego konia. Dzięki koniu możesz podróżować między miastami zadarmo. Możesz również na nim jeździć i odzyskiwać sporą ilość energii na reset (co godzinę). Gdy Twój koń będzie miał juz rozmiar minimum 5, będziesz mógł mieć współwłaściciela.</center>">Zagroda Koni</a>
            </td>
        </tr>

</table>
            </div>
</br>
{/strip}

	{/if}
		{if $Location == 'Ardulith'}{strip}
<center><img src="images/locations/rwawemokradla.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png">
{/strip}
</br>
	{/if}
{/if}</br>
	{if $Location == 'Ardulith'}
    <div class="justify">{$smarty.const.CITY_INFO}</div><br />
    <center>
    <a href=bagnisko.php>Stare Bagnisko Krutynów</a><br>
    <a href=dwor.php>Zaginiony Dwór Krutynów</a><br>
    <a href=puszcza.php>Mroczna Puszcza Krutynów</a><br>
     <a href=przekletajaskinia.php>Przeklęta Jaskinia</a><br>
    </center>
    {/if}
</br>
	<br />
	
	{if $Step == "list"}
	<div class="center">
		<b><u>{$smarty.const.OSTATNIE}</u></b>
		{section name=i loop=$ArrNews}
			<br /><b>{$ArrNews[i][2]}</b>{$smarty.const.AUTOR}<b>{$ArrNews[i][1]}</b>{if $Rank == "Admin" || $Rank == "Staff"} <a href="city.php?step=list&amp;del={$ArrNews[i][0]}" onclick="return confirm('{$smarty.const.ERR_CONFIRM}');" title="{$smarty.const.ERR_DEL}">{if $Graphstyle == "Y"}<img src="images/icons/delete.png" alt="_img{$smarty.const.ERR_DEL}" />{else}{$smarty.const.ERR_DEL}{/if}</a>{/if}<br /><br />
			"{$ArrNews[i][3]}".<br><br>
		{/section}
		<a href="city.php?step=ogloszenie">{$smarty.const.NOWE}</a>
	</div>
</br>	{/if}
	<br />

{elseif $Step == "ogloszenie"}
	<div id="ann">
		{$smarty.const.OGLOSZENIE_INFO}<b>{$Price}</b><br /><br />
		<form method="post" action="city.php?step=dodaj">
			<label for="antitle">{$smarty.const.TYTUL}</label><input id="antitle" type="text" name="tytul"><br />
			<label for="ancontent">{$smarty.const.TEKST}</label><textarea rows="4" cols="40" id="ancontent" name="tresc"></textarea><br />
			<label for="ansubmit">{$smarty.const.WYSLIJ}:</label><input id="ansubmit" type="submit" value="{$smarty.const.WYSLIJ}">
		</form></br>
	</div>
{elseif $Item == "1"}
    {if $Step == ""}
        {$smarty.const.STAFF_QUEST}<br />
        <a href="city.php?step=give">{$smarty.const.SQ_BOX1}</a><br />
        <a href="city.php?step=take">{$smarty.const.SQ_BOX2}</a>
    {elseif $Step != ""}
        {$Staffquest}<br />
        <a href="temple.php?temp=book&amp;book=2">{$smarty.const.TEMPLE}</a>
  </br>  {/if}
{elseif $Location == 'Ardulith' && $Step == "gory"}
         {$smarty.const.GO_MOUNTAINS}
{else}
         Welcome, whatever you are.
{/if}</br>
{/strip}
</br></br></br>

























