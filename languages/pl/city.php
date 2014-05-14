<?php

define('NO_CITY', 'Nie znajdujesz się w mieście');
define('OGLOSZENIE', 'Najnowsze ogłoszenie:');
define('AUTOR', ' napisane przez ');
define('NOWE', 'Dodaj nowe');
define('LISTA', '10 ostatnich');
define('OSTATNIE', 'Ostatnie ogłoszenia:');
define('OGLOSZENIE_INFO', 'Tutaj możesz dodać ogłoszenie, które będzie widoczne dla wszystkich graczy znajdujących się w mieście. Długość ogłoszenia: 255 znaków. Cena: ');
define('TYTUL', 'Tytuł:');
define('TEKST', 'Tekst:');
define('WYSLIJ', 'Wyślij');
define('ERR_FIELDS', 'Wypełnij wszystkie pola!');
define('ERR_GOLD', 'Nie masz tyle złota!');
define('ERR_ADDED', 'Ogłoszenie zostało dodane');
define('ERR_DEL', 'Usuń');
define('ERR_CONFIRM', 'Czy na pewno chcesz usunąć to ogłoszenie?');
define('PERMISSION', 'Nie masz do tego prawa!');
define('NO_ANN', 'Nie zaznaczono ogłoszenia do usunięcia!');
define('DELETED', 'Ogłoszenie zostało usunięte.');


if ($player -> location == 'Ardulith') {
	$arrTitles = array('');
	$arrNames = array(array('<center>Stare Bagnisko</center>', '<center>Zaginiony Dwór</center>', '<center>Brama Puszczy Krutynów</center>'),

	
	);
	define('CITY_INFO', '<p>Jadąc konno przez wielkie pustkowia nagle dostrzegasz budynki. Jedziesz dalej… Widzisz starych serafinów… Zatrzymujesz się na chwilę i pytasz się pierwszego napotkanego serafina gdzie jesteś. On Ci mówi, że jesteś na ziemiach Kurysium w osadzie Krwawe Mokradła opuszczonej przez inne rasy. Jest ona zamieszkiwana przez ród Krutynów. Postanawiasz się rozejrzeć wokół. Wszędzie widać tylko biedę i ubóstwo. Brak warunków do jakiegokolwiek rozwoju… Nie ma tutaj nawet sklepów… Słyszysz jednak rozmowę Krutynów… Mówią oni o istnieniu na południu miasta zupełnie odmiennego od tej osady… - Aleara. Zastanawiasz się czy pozostać tutaj <b><a href="travel.php?action=powrot">czy jechać do Aleary… </b></a></p>');
	define('STAFF_QUEST', 'Idąc ulicami '.$city1b.' czujesz się tak, jakbyś po raz pierwszy oglądał jej mury. Wydawała się promienieć pięknem... Zaśmiałeś się w duchu-po tych upiornych labiryntach wszystko byłoby wspaniałe. Wdychane świeże, poranne powietrze przyjemnie łaskotało płuca wywiewając z nich resztki zatęchłego odoru ziemi i wilgoci. Tak... Właśnie tak czuje się Bohater!<br /><br />Co dalej, Bohaterze?<br />');
	define('SQ_BOX1', 'kierujesz się do wieży Nubii, by oddać jej różdżkę');
	define('SQ_BOX2', 'zatrzymujesz różdżkę dla siebie');
	define('STAFF_QUEST2', 'Zmęczony i senny próbowałeś skupić myśli na tym, jak znaleźć drogę do domu, ale dalsza wędrówka wydała się wręcz niemożliwa. Karczma! Tak, to dobry wybór.<br />Gdy wszedłeś w jej progi, powitał cię chytry wzrok, grubego hobbita z namaszczeniem wycierającego drewniany kontuar. Zmierzył cię od stóp do głów i syknął przez zęby:<br />-Wynocha oberwańcu! Wykąp się, bo muchy padają od twojego zapaszku!<br />No tak... Po raz pierwszy od wyjścia z labiryntu spojrzałeś na siebie i widok nie był zachwycający: oberwane, brudne i cuchnące stęchlizną szatki, ziemia, pot i krew zakrzepłe na twarzy. Nie dziwota, że karczmarz nie chciał u siebie takiego gościa. Jednak jest coś, co zmiękczy jego miłość do higieny.<br />-Mam złoto. Chętnie kupię twoją wannę i pokój na kilka dni. Muszę porządnie wypocząć...<br />Gromki rechot hobbita przerwał twoje słowa:<br />-Złoto nie wynagrodzi mi wypłoszonych smrodem klientów! Musiałbyś mi dać coś cenniejszego, niż stu z nich!<br />-Coś cennego powiadasz...? Hmmm... A co dostanę w zamian za diamentową różdżkę...?<br /><br />Zdobywasz 10 000 sztuk złota');
	define('STAFF_QUEST1', 'Choć zmęczenie szarpało w dół twe powieki powiedziałeś sobie, że jeszcze dziś musisz dokończyć to, co zacząłeś, dlatego kierujesz swe kroki do Północnej Wieży Nubii. Ciekawość nie daje ci spokoju- co raz to inne wizje nasuwa ci umysł i wyobraźnia, lecz to właśnie dzięki jej bogactwu droga mija szybko i sprawnie.<br />Po chwili stajesz przed drzwiami wieży i sięgasz do kołatki.<br />-Czekałam na ciebie - słyszysz za sobą. Znasz ten głos. Słyszałeś go wielokrotnie w labiryncie. Gdy odwracasz głowę, widzisz Nubię siedzącą u stóp posągu Anariel. Ich podobieństwo jest uderzające...! Teraz rozumiesz, co miał na myśli Neh nazywając ją żywą boginią. Cóż teraz powiedzieć? Stoisz oszołomiony, nie mogąc wykrztusić słowa.<br />-Wspaniale rozwiązałeś zagadkę. Byłam tam z tobą myślami i śledziłam każdy ruch. Tylu wojowników zginęło podczas tej misji... Byli tacy nierozważni... -westchnęła cicho, po czym w zamyśleniu chwyciła cię za rękę i poprowadziła za sobą do świątyni.');
	define('ITEM', 'Różdżka Nubii');


} elseif ($player -> location == 'Altara') {
	$arrTitles = array('');





	$arrNames = array(array('Domek Geologa', 'Opuszczony Szyb', 'Podziemna Wartownia', 'Plugawy Ogród', 'Opuszczona Kuźnia', 'Opuszczone Stawy', 'Zagajnik Szamanów', 'Pole Ziemniaków', 'Chatka Leśniczego', 'Pracownia Alchemiczna', 'Tartak'),
	array('Domy Mieszkańców', 'Gmach Gildii', 'Dom Murgrabiego', 'Zakątek Plotkarski', 'Tawerna', 'Wieża Magów', 'Arena Honorowa', 'Przytułek', 'Kuchnia Miejska', 'Słup Informacyjny', 'Budka Loteryjna'),
	array('Giełda Akcyjna', 'Rynek Handlowy', 'Magazyn Królewski', 'Płatnerz', 'Zbrojmistrz', 'Krasnoludzki Bank', 'Fleczer', 'Sklep Jubilerski', 'Apteka Miejska', 'Pośredniak', 'Sklepy Mieszkańców', 'Sklep Z Brylantami'),
	array('Tablica Wieści','Świątynia Kości', 'Redakcja Gazety', 'Biblioteka', 'Gmach Sądu', 'Spis Mieszkańców', 'Wieża Zegarowa', 'Hala Zgromadzeń', 'Huta Królewska', 'Kuźnia Królewska', 'Galeria Bohaterów', 'Kanały Podzamcze', 'Dom Cechowy'),
	array('Arena Walk', 'Lochy Podziemne', 'Błonie Treningowe', 'Cmentarz Nekromantów', 'Wieża Druida', 'Hala Gladiatorów', 'Posągi Chwały', 'Rozpiska Stanowisk', 'Warsztat Jubilerski', 'Wieża Obserwacyjna', 'Port Pod Zgnitą Łajbą', 'Polana Chowańców'),
	array('Strażnica', 'Farma', 'Brama Miasta', 'Kaplica Ślubna', 'Gildia Złodzieji', 'Doki', 'Baszta Najemników', 'Baszta Strażników Miejskich', 'Stary Pub', 'Zagroda Koni', 'Czerwona Latarnia', 'Wieża Transmutacji')







	);
	define('CITY_INFO', '');
	define('GO_MOUNTAINS', '<p>Dotarłeś spokojnie do Gór Migotliwych.</p><p>Kliknij <a href="gory.php">tutaj</a>.</p>');

}
?>
