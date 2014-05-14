<?php
/**
 *   File functions:
 *   Polish language for card2.php 
 *
 *   @name                 : card2.php                            
 *   @copyright            : (C) 2007 Team  based on Vallheru
 *   @author               : Marek Stasiak <l3thal2@gmail.com>
 *   @version              : 
 *   @since                : 
 *
 */

//
//
//       This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; either version 2 of the License, or
//   (at your option) any later version.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
define('C_BACK', 'Wróć');
define('E_LOGIN', 'Złe dane do konta');
define('C_PLACE_INFO', '');
define('C_BADCHOICE', 'Zapomnij o tym!');
define('C_YHAVE', ' <a href="city.php"><b><font size="40"><br><br><center>Wejdź do krainy.....</center></b></font></a><br><br><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>');
define('C_BGENDER', 'Zły wybór. <a href="card2.php?action=start">Wybierz płeć</a> ponownie.');
define('C_NOGENDER', 'Nie masz jeszcze wybranej płci. <a href="card2.php?action=gender">Wróć</a>, aby to zrobić.');
define('C_NORACE', 'Nie masz jeszcze wybranej rasy. <a href="card2.php?action=race">Wróć</a>, aby to zrobić.');
define('C_WELCOME', '');
define('C_START', '<center><p>&raquo; <a href="card2.php?action=gender">





<b>Rozpocznij tworzenie swojej postaci.</b></a><br>
<br>
<b>albo</b><br>
<p>&raquo; <a href="chat.php?room=piwnica"><b>Wejdź na czat w celu uzyskania porad na temat gry.</b></center></a><br>

<center>
<br><b>Jak grać? - Krótki poradnik!</b><br></center>

<p>Jeśli nigdy wcześniej nie miałeś nic wspólnego z grami tego typu - Przeczytaj ten poradnik! Te kilka zdań rozjaśni Ci grę!<br>
</p><p>Aleara to gra oparta na symulacji średniowiecznego cesarstwa. Gracz wciela się w jedną z ras, klas i podklas . Gra polega na rozwijaniu swej postaci, wbijaniu poziomów, oraz oferuje dużo więcej możliwości. W grze można zajmować się swoją farmą, strażnicą, tworzyć przedmioty, walczyć z innymi graczami i potworami, handlować i wiele, wiele innych możliwości. Gra bazuje na systemie energii gracza. To ile zrobimy w grze w ciągu godziny zależy właśnie od niej. W górnym panelu gry widzimy wskaźnik energii. Załóżmy mamy Energia: 150/500 (+8.00). Oznacza to, iż mamy 150 energii, 500 limitu energii, +8.00 nowej energii którą dostajemy trzy minuty po każdej równej godzinie. Większość rzeczy które chcemy zrobić w grze pobiera nam energię, lecz przed pobraniem jej jesteśmy o tym informowani (nie każdy ruch w grze pobiera energię, tylko czynności wykonywane). Liczba przy nicku gracza oznacza jego numer identyfikacyjny. Główną lokacją, gdzie możemy zdobywać doświadczenie, co za tym idzie - poziomy, to arena walk, lecz aby zacząć walczyć trzeba kupić sobie ekwipunek w mieście do którego wchodzimy przez menu lewe w grze. Mamy do wyboru kilkanaście ras, klas i podklas postaci. Klasa rzemieślnik opiera się głównie na tworzeniu przedmiotów (jest to dość skomplikowane), klasa mag włada magią, a pozostałe klasy to klasy walczące głównie wręcz i dystansem. W grze wyróżniamy podstawowe statystyki takie jak: <br>
</p><br>
<b>siła</b> - u postaci walczącej wręcz odpowiada za obrażenia.<br>
<b>zręczność</b> - u postaci walczącej wręcz odpowiada za trafianie, u dystansowej - trafianie oraz obrażenia.<br>
<b>szybkość</b> - odpowiada za szybkość zadawania ataków.<br>
<b>wytrzymałość</b> - odpowiada za zmęczenie postaci, punkty życia oraz za obronę.<br>
<b>inteligencja</b> - u maga odpowiada za obrażenia. (główna cecha maga.)<br>
<b>siła woli</b> - u maga odpowiada za obronę.<br><br>
<br>
&raquo; <a href="poradnik.php"><b>Nadal nie wiesz jak grać? (początki gry - krok po kroku)</a></b>





<b><br></b>
<br>
</p></center>');
define('C_DCHANGE', 'IV. Posiadasz już wyznanie. Możesz je jednak zmienić:<br /><br />&raquo; <a href="card2.php?action=deity&amp;step=change">Zmień wyznanie</a>.');
define('C_YOUTHERE', '(tutaj się znajdujesz)');

define('C_G', '&raquo; <a href="card2.php?action=gender">Wybierz płeć</a><br />');
define('C_R', '&raquo; <a href="card2.php?action=race">Wybierz rasę</a><br />');
define('C_C', '&raquo; <a href="card2.php?action=class">Wybierz klasę</a><br />');
define('C_D', '&raquo; <a href="podklasa.php">Wybierz podklasę</a><br />');
define('C_P', '&raquo; <a href="card2.php?action=place&select=coweritana">Wybierz miejsce zamieszkania</a><br />');
define('C_GENDER', 'I. Wybierz płeć swojej postaci.');
define('C_RACE', 'II. Wybierz rasę swojej postaci.');
define('C_CLASS', 'III. Wybierz klasę swojej postaci.');
define('C_DEITY', 'IV. Wybierz wyznanie swojej postaci.');
define('C_PLACE', 'V. Wybierz miejsce zamieszkania.');
define('C_ATHEIST', '');
define('C_MALE', 'Mężczyzna');
define('C_FEMALE', 'Kobieta');
define('C_SELECT', 'Wybierz');
define('C_GSELECTED', 'Właśnie wybrałeś płeć swojej postaci. Teraz <a href="card2.php?action=race">wybierz rasę</a>.');
define('C_RSELECTED', 'Właśnie wybrałeś rasę swojej postaci. Teraz <a href="card2.php?action=class">wybierz klasę</a>.');
define('C_CSELECTED', 'Właśnie wybrałeś klasę swojej postaci. Teraz <a href="podklasa.php">wybierz podklasę</a>.<br><br>

');
define('C_DSELECTED', 'Właśnie wybrałeś wyznanie swojej postaci. Teraz <a href="card2.php?action=place">wybierz miejsce zamieszkania</a>.');
define('C_PSELECTED', 'Aby zacząć przygodę, przejdź do <a href="city.php">miasta</a>.<br>Jeśli nie masz pojęcia o grze, zajrzyj do <a href="poradnik.php">poradnika.</a>.<br>Należy też zapoznać się z  <a href="court.php">Prawem Aleary.</a><br>Polecamy także przeczytac  <a href="fabula.php">kroniki Aleary.</a>');
define('C_CS', 'Właśnie wybrałeś klasę swojej postaci. Teraz <a href="podklasa.php">wybierz podklasę</a>.<br><br>');
define('C_DS', 'Właśnie wybrałeś wyznanie swojej postaci. Wróć do <a href="card2.php">kreatora postaci</a>.');

define('C_YES', 'Tak');
define('C_NO', 'Nie');

if (isset($_GET['step']) && $_GET['step'] == 'change')
{
    define('CHANGE', 'Czy na pewno chcesz zmienić swoje obecne wyznanie? Zmiana będzie ciebie kosztować');
    define('CHANGE2', 'punktów wiary.');
    define('YOU_CHANGE', 'Zrezygnowałeś z wiary w');
    define('YOU_MAY', '. Teraz możesz ponownie');
    define('A_SELECT2', 'wybrać');
    define('T_DEITY', 'wyznawane bóstwo.');
}

if (isset($_GET['action']) && isset($_GET['select'])) 
{
	if ($_GET['action'] == 'race')
	{
		if ($_GET['select'] == 'human') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Człowiek <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/czlowiek.jpg"> <br><br>
<b>Opis:</b><br>

<b>Geneza</b>
<p>Człowiek jest jedną z najbardziej kruchych istot stąpających po tym świecie. Mawiają, że powstali gdyż bogom nudno było obserwować nieśmiertelnych elfów. Pragnęli ujrzeć coś więcej poza pragnieniem wiedzy, dysputami o pięknie czy wymyślne wytwory fantazji elfich rzemieślników. W tym wszystkim brakowało im emocji, szerokiego spektrum możliwości i niedoskonałości. Wtedy też pojawili się ludzie.</p>
<p>
Początkowo wzbudzali ciekawość, potem zaś dwojakie poruszenie, głównie wśród nieśmiertelnych. Z jednej strony ich kruchość i siła zarazem powodowała sympatię i troskliwość, lecz różnorodność charakterów i nieprzewidywalność zachowań, idąca w parze z brzydotą i chorobami, nastawiała negatywnie idealistyczne istoty.</p>
<p>Mimo to bogowie chcieli, aby ludzie się rozmnażali. Finalnie zalali świat, spychając inne rasy do rang mniejszości. Słabsi, krótko żyjący, a jednak najliczniejsi tworzyli potęgę dotąd nieznaną nikomu.</p>
<br>
<b>Wygląd</b>
<p>Cechą charakterystyczną definiującą ludzi pod względem wyglądu jest ich różnorodność. Mogą być grubi, chudzi, umięśnieni albo filigranowi. Kwestią, która generuje wygląd człowieka to region w jakim się urodził i pochodzenie rodziców.</p>
<p>- Tereny pustynne, sawanny, stepy: skóra o różnych odcieniach brązu po czerń, ciemnowłosi i ciemnoocy.</p>
<p>- Tereny nizinne i wyżynne: smuklejsi, mniej toporne rysy twarzy, zwykle lekko ogorzali, ale nie opaleni.</p>
<p>- Tereny górskie: krępi, zwykle niżsi, o jaśniejszych twarzach, włosach i oczach.</p>
<p>- Tereny morskie, rzeczne i nad jeziorami: ogorzali, nie wyróżniający się wzrostem, różnorodni.</p>
<p>Powyższe opisy są jedynie kierunkiem, w jakim należy zmierzać tworząc człowieka. Wielokrotnie są odstępstwa od tych schematów, które potwierdzają ideę bogów o ludziach jako istotach nieprzewidywalnych pod każdym względem.</p>
<br>
<b>Wiek</b>
<p>Ludzie potrafią dożyć sędziwego wieku, nawet 100 lat, jednak udaje się to nielicznym. Średnia życia mieści się między 60-80 lat, zaś w czasach wojny, epidemii czy głodu, śmierć pochłania i młodych i starych, a średnia przesuwa się do maksymalnie 40 lat.</p>
<br>
<b>Stosunek do innych ras:</b>
<p>Ludzie są tak różni, że nie sposób z góry założyć kogo będą lubić a kogo nie. Potrafią zbratać się z najplugawszymi istotami, jeśli widzą w tym jakąś korzyść. Kierują się cnotami i celami, pragnieniami i emocjami.</p>

<br><br>
<b>Statystyki:</b><br>
Człowiek otrzymuje za 1 AP:<br>
			+3.5 Siły<br>
      +2.9 Zręczności<br>
      +3 Szybkości<br>
      +3.5 Wytrzymałości<br>
      +2.5 Inteligencji<br>
      +2.5 Siły Woli<br>
      <br><br>
     </p>');
		}

		if ($_GET['select'] == 'elf') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Elf <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/elf.jpg"> <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>Elfy powstały przed wiekami, jako towarzysze bogów. Były najdoskonalszymi z ich dzieł. Początkowo urzeczeni swoim sukcesem Stwórcy pozwalali elfom żyć wedle własnej woli. Obserwowali je, rozmawiali wspólnie, poruszali ważkie problemy. Obdarzyli swoje dzieci najczulszą z atencji i nieomal zrównali ze sobą. Spokojni i zrównoważeni elfowie z dumą kroczyli po kontynencie, aż w końcu bogowie poczuli się znudzeni.</p>
<p>Dotąd jedyni na ziemi stanęli nagle twarzą w twarz z istotami mniej idealnymi, chaotycznymi i emocjonalnymi. Pierwszy szok przeszedł w radość, wszak inność oznaczała kolejne pytania, które potrzebują odpowiedzi. Jednak współpraca z ludźmi nie układała się tak jakby tego elfowie chcieli. Traktowali ich jak nowy gatunek, bliższy bardziej zwierzętom, które można testować, badać, obserwować.</p>
<p>Napotkali mur w postaci odrębności, lecz nie niższości ludzi. Okazało się, że wcale nie dadzą się traktować jak domowe pupile, że mają charakter i co gorsza, potrafią się organizować oraz unosić gniewem.</p>
<p>Wtedy dotąd dobre i pokojowe elfy poczuły coś nowego- niechęć, wraz z którą przyszła arogancja.</p>
<p>Bogowie jednak nie zostawili tak problemu samemu sobie. Zauważyli zmianę u elfów, potępili ich postępowanie, za karę odbierając im nieśmiertelność. Odtąd byli rasą długowieczną, lecz można było ich zabić, zaś czas odbijał się wyraźnie na ich licach i zdrowiu.</p>
<p>Późniejsze zmiany na ziemi, nowi towarzysze i nowe realia sprawiły, że te dwie cechy pogłębiły się tworząc ogromną przepaść, którą jedynie nieliczni potrafili odrzucić. W trakcie przemian niektóre elfy zeszły do podziemi, a te co zostały, podzieliły się wewnętrznie na szczepy.</p>
<p><i>Szczep Wysokich Elfów</i>- kultywacja dorobku elfów, wywyższanie ich natury i najgorsze cechy arogancji, nie pozwalające im na współistnienie z innymi rasami, poza własnymi. Zamknięta grupa społeczna. Posiadają własny styl ubierania, produkują własne tkaniny i własnoręcznie zaprojektowane domy. Wszelkie wytwory innych kultur odrzucają jako gorsze, potrafią wręcz tępić objawy aprobaty czy sympatii do rasy ludzkiej czy krasnoludzkiej.</p>
<p><i>Szczep Niskich Elfów</i>- nazwa nadana oczywiście przez przedstawicieli starszyzny Wysokich Elfów, aby od razu wskazać im ich miejsce w szeregu. Ten szczep nie pozwalał na niszczenie korzeni elfów, lecz nie odrzucał ludzi czy innych ras. Wychodzili z założenia globalnego, że razem powinni żyć i współpracować. Nie posiadali zamkniętych umysłów, pracowali ramię w ramię z ludźmi, dzielili się swoją wiedzą i pomagali tworzyć nowy świat.</p>
<br>
<b>Wygląd</b>
<p>Pierwsze co wyróżnia elfy z wyglądu to ich wzrost. Mierzą między 180cm a 2 metrami. Dlatego długouche zawsze były dobrymi celami strzelniczymi, ale i punktami orientacyjnymi. Niewiele ważą i nie potrafią przytyć, chociażby chcieli. Mają gładkie lica, których nie spala mocne słońce. Proste nosy, pociągłe twarze i wysokie czoła tworzą z nich istoty na wskroś doskonałe.</p>
<p>Elfy separujące się od ludzi cenią swoją białą skórę, nie pozwalając, by twarze im ogorzały od ciężkiej pracy. Drugi szczep nie dba tak o zewnętrzna skorupę, przez co pojawiają się jednostki opalone, jednak nie jest to cecha dziedziczna, a nabyta.</p>
<p>Długowieczne istoty posiadają muskulaturę zbliżoną do ludzkiej, jednak przez ogromny wzrost, jest ona mniej widoczna, ale nie mniej niebezpieczna.</p>
<p>Kolor włosów czy oczu jest równie zróżnicowany co u ludzi. Jedynie patrząc w elfie tęczówki widzimy głębię i mądrość. Same włosy zaś są zadbane, jedwabiście gładkie i mocne.</p>
<p>Żyją do 800 lat, a dojrzałość osiągają wedle własnego uznania w okolicach 50 lat ludzkich.</p>
<br>
<b>Charakter</b>
<p>Elfy są istotami dwulicowymi. Uważane za doskonałe tak mocno wbiły to sobie do głowy, iż same wyznają ten pogląd. Nie znoszą zmian, nowości. Stały się rasistami i ignorantami.</p>
<p>Są także perfekcjonistami. Jeśli podejmują się jakiegoś zadania to brną do celu po trupach. Nie baczą na koszta. Nie potrafią pogodzić się z porażką. Trzymają urazy długo i potrafią być mściwe. Mimo to jak najdalej trzymają się od wojen i pokazywania własnej siły. Ich orężem jest głównie magia i nauka, chociaż od mieczy czy łuków nie stronią. Zatem pole na którym zwykli konkurować było sztuką, architektura czy filozofią.</p>
<p>Posiadają wspaniałych łuczników o sokolim wzroku, oraz doskonałych oporników, rzadziej zaś mieczników. Za towarzyszy upodobali sobie konie.</p><br>
<b>Stosunek do innych ras</b>
<p>Jedyną rasą, z którą potrafią żyć w symbiozie są centaury.</p>
<p>Poza tym wszystkich uważają za gorszych sobie, mniej inteligentnych.</p>
<p>Drąży je także głęboka zazdrość do serafinów, oraz strach przed demonami. To były bezpośrednio po nich stworzone istoty, tak od siebie różne, a jednak jako jedyne potrafiły wpływać na elfy.</p>


<br><br>
<b>Statystyki</b>:<br>
Elf otrzymuje za 1 AP:<br>
			+2 Siły<br>
      +3.5 Zręczności<br>
      +3.4 Szybkości<br>
      +2 Wytrzymałości<br>
      +2.9 Inteligencji<br>
      +2.0 Siły Woli<br>
      <br><br>
     </p');
		}

		if ($_GET['select'] == 'dwarf') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Krasnolud <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/krasnolud.jpg"> <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>Krasnoludy pojawiły się tak jak hobbici. Kwestia ewolucji i oddzielenia się ludzi od miejskiego życia, poświęcenie się pracy w górach. Ale co najważniejsze ich zmiany w wyglądzie korygowała sama natura. Brak światła, gorsze warunki życia sprawiły, że zdziczeli i rodzili się bardzo silni, krzepcy i dość niscy.</p>
<p>Związali się na śmierć i życie z ziemią, z górami. Umiłowali te tereny, budując górnicze miejscowości. Tam ich można najczęściej spotkać. Rzadko który krasnolud zapędza się w doliny i niziny, a gdzieżby nad morze! Takich uważano za odludki, czarne owce przynoszące wstyd własnej nacji. Jedynym odstępstwem od górniczego życia uznawanym przez krasnoludy było jubilerstwo albo wojaczka. Oczywiście nie potrafili robić misternych elfickich przedmiotów, ale właśnie spod ich młota wychodziły najmocniejsze i najszlachetniejsze zbroje i miecze.</p>
<p>Żyją do 500 lat.</p><br>
<b>Wygląd</b>
<p>Mierzą od 150 cm do 165 cm, ale od hobbitów różni ich krępa budowa oraz mocne owłosienie. Często ubrani w skórznie, kaftany, ochronne nagolenniki i rękawice. Rzadko spotyka się blond krasnoluda, najczęściej mają ciemne gęstwiny. I zawsze mają zadbane długie brody. Wplatają w nie różne ozdoby, które sami produkują. Niektórzy sądzą, że długość brody ma istotne znaczenie w hierarchii mieszkańców gór. Nic bardziej mylnego. Krasnoludy nie zwykli się wywyższać, ani bawić w politykę. Każdy z nich pracuje, są zaprogramowani do robienia czegoś, tworzenia albo walenia kilofem w skalne ściany.</p>
<br><b>Charakter</b>
<p>Pracowici i nieco złośliwi. Potrafią dużo wypić i głośno się bawić, a potem bez problemów z kacem wędrować w góry, aby tam pracować naście godzin. Nie lubią rozmów, polityki i spraw, które wymagają logiki, rachowania. Najbardziej doświadczeni i starzy krasnoludzie tworzą starszyznę, a ta rozpatruje wnioski, rozsądza spory i decyduje czy obić komuś w czasie wojny mordę czy nie. Są dość skryci jeśli chodzi o umiejętności kowalskie i jubilerskie. Niechętnie też dzielą się wiadomościami odnośnie gór, nie pokazują wszystkich ścieżek.</p><br>
<b>Stosunek do innych ras</b>
<p>Krasnoludy ogółem utrzymują pozytywne kontakty z każdą rasą. Nie są negatywnie nastawieni, ale nie mają ochoty na kontakty z elfami. Uważają, że ci starają się przegonić ich w sztuce kowalstwa, stąd wyraźna niechęć. Lubią pić z ludźmi i hobbitami, omijają zezwierzęcone rasy, szczególnie te inteligentniejsze od nich. Ogółem nie twoja przynależność rasowa, a zasługi sprawiają, że krasnolud napije się z tobą bimbru, albo obije cię tak, że rodzona matka nie pozna.</p>

<br><br>
<b>Statystyki:</b><br>
Krasnolud otrzymuje za 1 AP:<br>
			+3.7 Siły<br>
      +2.9 Zręczności<br>
      +2.7 Szybkości<br>
      +2.8 Wytrzymałości<br>
      +2.3 Inteligencji<br>
      +2.5 Siły Woli<br>
      <br><br>
     </p');
		}

		if ($_GET['select'] == 'hobbit') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Hobbit <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/hobbit.jpg"> <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>Hobbici nie są genetyczną zabawą elfów, ani innych ras. Nie powstali też poprzez ingerencję boską. Po prostu przez wieki wśród ludzi pojawiały się jednostki bardzo małe, skarlałe o nieco odmiennym wyglądzie. Ci zaczęli się wiązać między sobą, przez co wykreślili wysoki wzrost, a potem wykształcili własną małą społeczność.</p>
<p>Ta społeczność wybierała dla siebie ziemie rolne, wieś, zielone otoczenie, aniżeli miejski zgiełk. Umiłowali oni naturę, dlatego najczęściej można je zobaczyć przy pracy na polu, albo w ogrodzie. To wspaniali hodowcy i plantatorzy. Właśnie spod ich ręki wychodziły najrzadsze rodzaje roślin, a także od nich bogaci panowie kupują sadzonki do swoich posiadłości. Mawiają, że sami władcy zatrudniają najzdolniejszych hobbitów, dzięki czemu mogą pochwalić się najpiękniejszymi i najokazalszymi ogrodami. Najczęstszym miejscem zamieszkania tej społeczności są hrabstwa takie jak Leyonn lub Northerm, gdzie jest wiele wsi, oraz przyjemny klimat. Niektóre szczepy hobbitów można spotkać w Volkstand, ale różnią się one nieco od ciepłolubnych istot Południa. Żyją do około 250 lat.</p>
<br><b>Wygląd</b>
<p>Bogowie ukarali tą rasę niepomiernie. Mierzą od 120 cm wzrostu do 155 cm. Niewiele ważą, chociaż bywają wśród nich przedstawiciele grubi i opaśli, jak u ludzi. Są bardziej pyzaci z twarzy, opaleni i rumiani poprzez koegzystowanie z naturą i ciężką pracę na świeżym powietrzu. Nie noszą obuwia, nie jest im to potrzebne. Przez wiele pokoleń wykształcili twarde podbicia stóp, przez co swobodnie mogą podróżować, wdrapywać się na drzewa, pływać i nie czuć skrępowania z powodu obuwia. Hobbici mają także nieco skośne uszy, co upodabnia ich do elfów, ale to jedynie skutek uboczny mieszania się ze sobą, aniżeli koligacji. Mimo to elfy z pobłażaniem na nich spoglądają, traktując jak swoje bardziej upośledzone rodzeństwo.</p>
<br><b>charakter</b>
<p>Dobroduszne i ciepłe istoty. Nie mają w sobie za grosz waleczności, chyba, że ktoś zadepcze im sadzonki- wtedy chwytają za widły i ganiają gapę po miasteczku. Ale wśród nich jakby czas stanął w miejscu. Nie lubią zmian, nie interesuje ich polityka, ani wojny. Odgradzają się od nich murem, nawet jak staną w jej obliczu to zachowują się jakby nic się nie działo. Weseli, gadatliwi i chętni do zabaw, ufni i wręcz naiwni. To, co jednak powoduje, iż nie można ich lekceważyć to ich żyłka do interesów. Nikt nigdy nie widział ubogiego hobbita. Żaden nie żyje w nędzy, nie żebrze, ani nie para się złodziejstwem. A to dlatego, że potrafią się targować. Wszystko co sprzedają wychodzi spod ich rąk, ma ogromną wartość i nie ma niskiej ceny. A jeśli sprzedają samych siebie, w sensie własne usługi, tym bardziej nie da się obejść bez dużej sumy. Z drugiej jednak strony nie da się ich oszukać względem pieniędzy.</p><br>
<b>Stosunek do innych ras</b>
<p>Hobbici do każdego podchodzą tak samo- nie zadepczesz moich sadzonek, napijesz się pszenicznego piwa? Jesteś swój. Nie dzielą świata na dobro czy zło. Odgradzają się od tego, chociaż strach wzbudzają w nich istoty, które nie mają cienia, albo są cieniami.</p>
<br><br>
<b>Statystyki:</b><br>
Hobbit otrzymuje za 1 AP:<br>
			+2 Siły<br>
      +2.8 Zręczności<br>
      +2.3 Szybkości<br>
      +2.5 Wytrzymałości<br>
      +3.7 Inteligencji<br>
      +3.4 Siły Woli<br>
      <br><br>
     </p');
		}

		if ($_GET['select'] == 'reptilion') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Jaszczuroczłek <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/jaszczuroczlek.jpg"> <br><br>
<b>Opis:</b><br>
<b>Charakterystyka</b>
<p>Ciało ich masywne, pokryte w całości twardym pancerzem z łusek, samo w sobie staje się bronią dla tej rasy. Ogromna siła i wytrwałość są cechą charakterystyczną dla tej rasy.</p><p>Nikt nie śmie nazywać ich mutantami, czy wybrykami natury, gdyż każdy wie dokładnie, że jest to rasa równie stara co półsmoki. Niestety jeszcze bardziej nieliczna. Parudziesięciu przedstawicieli tego gatunku żyje gdzieś niedaleko Krwawych Mokradeł. Są dość anarchiczne i pozbawione jakiegokolwiek szacunku dla innych istot, co nie określa jednak tego, że są złe. One po prostu takie są. Tutaj siła rządzi światem, a silniejszy zawsze zgarnia wszystko. Na przegranych czeka tylko śmierć</p>
<br><b>Preferencje</b><p>Jaszczuroczłeki to wprawni wojownicy, chociaż ich zwinność pozostawia wiele do życzenia. Bo jak sprawnie poruszać się ma prawie 2 metrowe cielsko.</p><p>Lubują się w rozwiązaniach siłowych, nie znają w ogóle dyplomacji, a każda próba negocjacji w ich stronę kończy się w najlepszy wypadku uszkodzeniem ciała negocjatora.</p>
<br><b>Wygląd</b><p>Ich źrenice zawsze mają żółtawy odcień. Porozumiewają się często wśród swoich okrzykami i wrzaskami, co dla istot humanoidalnych w ogóle nie przypomina jakiegokolwiek znanego języka, co nie sugeruje że go nie znają. Nie rozumieją muzyki, zdobyczy kultury, gardzą pięknem natury. Ich młode wykluwają się z jaj składanych przez samice i już w tydzień po narodzinach są zanoszone do dziczy, by tam albo wyrosło na rosłego wojownika, lub zdechło słabe, nienadające się do wspólnoty.</p><p>Posiadają ostre pazury, którymi potrafią rozrywać swoje ofiary. Zęby natomiast mają dziwnie tępe, gdzie wśród opowiadań chłopów występują zazwyczaj zaostrzone jak grot strzały.</p><p>Z racji, iż mają wiele wspólnego z gadami są zmiennocieplne, stąd też musze uważać na zmiany temperatury. Każde jej wahanie odczuwalne jest przez nie ze zdwojoną siła, stąd też wśród ich obozowisk palą się wieczne ognie, by ogrzewać te istoty. Gdy nastaje okres zimowy, są apatyczne i często popadają w kilkutygodniowy letarg, co czyni je całkowicie bezbronnymi. Jest to czas największych mordów dokonanych na tej rasie.</p>
<br><b>Stosunek do innych ras</b><p>Tworzą dość zamknięty krąg, nie tolerują żadnych innych ras, nawet kobolty, zdawać by się mogło tak podobne do nich są dla nich wrogami. Mimo swojego wrogiego usposobienia pewnym szacunkiem darzą rzemieślników, każdej z ras. Cenią sobie dobry i ostry oręż. Nie używają natomiast pancerza, gdyż ich gruba łuska chroni je przed większością ataków fizycznych.</p>

<br><br>
<b>Statystyki:</b><br>
Jaszczuroczłek otrzymuje za 1 AP:<br>
			+3.5 Siły<br>
      +2.6 Zręczności<br>
      +3.7 Szybkości<br>
      +2.3 Wytrzymałości<br>
      +2.9 Inteligencji<br>
      +2.3 Siły Woli<br>
      <br><br>

     </p');
		}

		if ($_GET['select'] == 'gnome') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Gnom <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/gnom.jpg"> <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>Gnomy są rodziną krasnoludów. Jednak zamiast tracić czas na machanie kilofem, te postanowiły żyć na ziemi, miękkiej i leśnej ściółce. Stąd najczęściej można je spotkać na terenach zalesionych.</p><p>Niegdyś przebywały bliżej gór, ale zimny klimat im nie sprzyjał, szybko umierały. Dlatego przeszli bardziej na wschód i zagnieździli się w lesie Zbłąkanych Dusz oraz na Krwawych Mokradłach. Nie można powiedzieć, aby tworzyli mocno ze sobą związane społeczeństwa, albo rodziny. Swoich współbraci tolerowali wiedząc, że sam na sam z dziczą nie dadzą rady. Jednak jeśli nadarzała się możliwość szybko opuszczali własne domy, aby zaciągnąć się na służbę jakiejś wiedźmie, bogatej pani, albo komukolwiek kto nie wygląda jak on sam.</p><br>
<b>Wygląd</b><p>Mierzą maksymalnie do metra wysokości, przypominają karły albo dzieci. Z urody trafiają się i przystojni i mniej urodziwi. Jak ich bracia lubią brody, zaś kobiety posiadają potężne piersi, które przyciągają wzrok nie tylko własnej nacji. Ważą niewiele i żyją dość krótko, raptem około 50 lat. Za to szybko się rozmnażają, częsta u nich jest ciąża wielodzietna.</p><br>
<b>Charakter</b><p>Gnomy to istoty harde i złośliwe. Przez tak niski wzrost czują się odsuwane i upokarzane, stąd lubią na siebie zwracać uwagę, ale nigdy pozytywnie. Obrażają, wyzywają, robią nieprzyjemne kawały, albo zwodzą, oszukują. Nie mają umiaru w piciu i jedzeniu, są butne i honorowe, ale jedynie w stosunku do samych siebie. Nie waż się ich obrazić, bo są w stanie końskie łajno włożyć ci do siennika, albo załatwić lochy poprzez fałszywe oskarżenia.</p><br>
<b>Stosunek do innych ras</b><p>Nikogo nie lubią, nawet samych siebie. Służą innym, bo same nie potrafią się niczego dorobić. Są zbyt rozrzutne na to. Pracują dla dobrych i dla złych. Nie obchodzi ich czy jest się demonem, bogiem, aniołem czy też górskim trollem. Poświeć monetą, a obrażając cię od najgorszych uczyni ci łaskę oddając się na twe rozkazy. Gnomy to broń obosieczna. Dlatego nikt ich nie lubi.</p>

<br><br>
<b>Statystyki:</b><br>
Gnom otrzymuje za 1 AP:<br>
			+2.1 Siły<br>
      +3.5 Zręczności<br>
      +3.8 Szybkości<br>
      +3 Wytrzymałości<br>
      +2.9 Inteligencji<br>
      +2.3 Siły Woli<br>
      <br><br>

     </p');
		}
		if ($_GET['select'] == 'mroczny elf') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Mroczny Elf <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/mrocznyelf.jpg"> <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>Mroczne elfy pochodzą od elfów wysokich. Po stworzeniu ludzi podzieliły się na tyle mocno, że część postanowiła zejść do podziemia, aby tam koegzystować w oddzieleniu od istnień ziemskich. Mimo podobieństwa charakterów do elfów wysokich różniły się w jednej bardzo istotnej kwestii- uważały, że należy niszczyć wszystko to, co uważają za niedobre dla siebie.</p><p>Elfy Wysokie napiętnowały inności, jednak nie dążyły do ich likwidacji. Mroczni pogłębiali się w swojej nienawiści do pozostałych istnień, ledwo tolerując własnych braci, których wybór uważali za błędny.</p><p>Dlatego z podziemi często knuli różne spiski mające na celu pozbycie się rasy ludzkiej, a potem innych, które się pojawiły. Nienawiść i gorycz zmieniła ich oblicze nie do poznania.
 </p><br>
<b>Wygląd</b><p>To, co wyróżnia mroczne elfy to kolor skóry, począwszy od odcieni szarości skończywszy na granacie. Mają o wiele dłuższe skośne uszy, oraz nieludzki kolor oczu, znajdują się tam osobniki o tęczówkach fioletowych, oraz głównie czerwonych.</p><p>Są niżsi od swoich braci, mierzą od 160 cm do 185 cm. Ich kształty są mniej smukłe, kobiety mają większe biusty i szerokie biodra, silne uda i wyzywające oblicza. Brak słonecznych promieni sprawił, że stracili kolorowe pigmenty, dlatego większość mrocznych ma białe włosy lub inne odcienie przetykane siwizną.</p><p>Mężczyźni mają szerokie barki i są mocno zbudowani.</p><p>Żyją krócej niż elfy na powierzchni, od 400 do 500 lat.</p><br>
<b>Charakter</b><p>Pełni nienawiści do każdej rasy, są dominujący i agresywni. Mimo wielkiej mądrości wolą siłą pokazywać swoją wyższość niż sztuką oracji. Złośliwi i hardzi nie pozwalają sobą kierować, nie potrafią współdziałać z innymi, poza swoimi pobratymcami. Uprzednio wśród rasy była równość płciowa, lecz coraz mocniej uwidoczniły się różnice, które spowodowały, iż modelem rodziny stał się matriarchat. Mężczyźni byli potrzebni jako siła robocza, oraz rozpłodowa, zbyt pokojowi, zostali odsunięci od władzy.</p><p>Domeną kobiet jest magia, a mężczyzn oręż. Elfy wysokie jeśli sięgają po broń jest to zwykle łyk, kusza, bądź poręczniejszy sztylet czy toporek. Mroczne wybrały zakrzywione długie ostrza oraz kusze, ciężkie i zwykle nie poręczne.</p><br>
<b>Stosunek do innych ras</b><p>Głównie zawistni i pełni chęci niszczenia respekt czują jedynie przed demonami i cieniami, które posiadają cechę, jakiej oni nigdy nie poznają, czyli brak skrupułów.</p>

<br><br>
<b>Statystyki:</b><br>
Mroczny Elf otrzymuje za 1 AP:<br>
			+2 Siły<br>
      +3 Zręczności<br>
      +3.7 Szybkości<br>
      +3.5 Wytrzymałości<br>
      +2.9 Inteligencji<br>
      +2.7 Siły Woli<br>
      <br><br>
     </p');
		}if ($_GET['select'] == 'nieumarły') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Nieumarły <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/nieumarly.jpg"> <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>Nieumarli to istoty skazane na wieczne potępienie, lecz bez własnej winy. Ich powstanie było możliwe dzięki rozdzieleniu się magii na dobrą i złą. Nekromanci, bo tak nazywano magów śmierci, parali się najgorszą ze sztuk, polegającą między innymi na profanowaniu zwłok. Ich działania były podyktowane jedynie złą wolą, w przeciwieństwie do Animatorów, czyli magów, którzy ożywiali martwych aby rozsądzić pewne spory nie rozwiązane za życia.</p><p>I właśnie tak powstawali Nieumarli, tudzież zwani Ożywieńcami. Nekromanci podczas plugawych rytuałów nad kurhanami albo na cmentarzach przyzywali konkretnego człowieka. Takie przyzwanie zabierało dużo energii magowi, a co za tym idzie nie było możliwe stworzenie armii nieumarłych na raz jednej nocy.</p><p>Siła, wytrzymałość i długość żywota ożywieńca jest zależna od siły samego Nekromanty.</p><p>Nieumarli nie łączą się w społeczeństwa. Żyją przeszłością, którą szczątkowo zapamiętali. Kieruje nimi złość, gdyż naruszono ich spokój po śmierci i nienawiść, tak do zaprzeszłych zdarzeń jak i do sytuacji w jakiej się znalazły. Służą Nekromancie, jednak z dziką radością spełniliby swoje marzenia związane z zemstą.</p><p>Żyją póki Nekromancie starczy sił na utrzymanie ich duszy na tym świecie, albo póki ktoś maga nie uśmierci. Innym wyjściem na pokonanie Ożywieńca jest rozerwanie jego ciała, spalenie i pochowanie szczątków daleko od siebie.</p><p>Średnia przetrwania w stanie na wpół agonalnym sięga paru lat. Bardzo niewielu może przetrwać i odnaleźć sposób na przywrócenie dobrego stanu ciała. Jednym z takich sposobów jest pożywianie się mięsem ludzkim.</p><br>
<b>Wygląd</b><p>Ożywieńca od żywego odróżnia stopień rozkładu ciała. Zwykle odziany w to w czym został pochowany, czasami za pomocą opiekuna może przywdziać jakieś szaty, lecz zbyt wielka jest zwykle obawa o to, że jakaś część ciała odpadnie. A to skóra zwisa, a to brak oka, wszystko to sprawia, że ludzie są przerażeni na jego widok.</p><p>Pachną mokrą ziemią, oraz zgnilizną.</p><br>
<b>Stosunek do innych ras</b><p>Nienawidzą ludzi, głównie za prawdziwe życie, pełne uciech i przyjemności. Co za tym idzie wszystko co żywe jest dla nich wrogiem, którego z nienawiścią pozbawi oddechu.</p>


<br><br>
<b>Statystyki:</b><br>
Nieumarły otrzymuje za 1 AP:<br>
			+2 Siły<br>
      +2.8 Zręczności<br>
      +3.5 Szybkości<br>
      +2 Wytrzymałości<br>
      +3.5 Inteligencji<br>
      +3.6 Siły Woli<br>
      <br><br>
     </p');
		}if ($_GET['select'] == 'tauren') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Tauren <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/tauren.jpg"> <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>Legendarne, mocarne stworzenia pochodzące od byków powstały na wezwanie bogów, jako sojusznicy centaurów. Obdarzeni są siłą fizyczną, która potrafi przerazić każdego. Dlatego wśród nich trudno spotkać osoby światłej, naukowca czy też maga. Od początku swojego istnienia byli nastawieni na przeżycie. Dlatego żyją gromadnie, w stadach zwanych także szczepami, opiekując się sobą wzajemnie.</p><p>Pomimo swojej wojowniczej natury kultywują ognisko domowe, wychowując swoje potomstwo na podobną modłę. Zatem nie ma wśród nich osobników, którzy przeciwdziałaliby swoim braciom i siostrom. Pomimo panteonu bóstw, taureni wykształcili także swój własny pogląd na świat, oddając hołd naturze i wszystkim jej aspektom. Zabobonni i prowadzący koczowniczy tryb życia nigdy nie potrafili się dostosować do warunków jakie narzucała im dominacja ludzka.</p><p>Dlatego wycofali się jak centaury, wybierając za swoje terytorium stepy i niziny. Rzadko, lecz zdarzało się, iż stawali ramię w ramię z inną rasą chroniąc ją, walcząc przeciwko wspólnemu wrogowi, lecz sytuacja taka musiała być naprawdę wyjątkowa.</p><p>Żyją do około 200-300 lat ze względu na sposób życia.</p><br>
<b>Wygląd</b><p>Zamiast głowy posiadają łeb byka z ogromnymi rogami i paciorkowatymi oczami. Nieco zgarbiona sylwetka nosi nadal znamiona zwierzęcego pochylania się ku ziemi. Ma szerokie barki i wąskie biodra, górne kończyny są ludzkie, zakończone ogromnymi łapskami, a dolne są potężnymi kopytami.</p><p>Całe ciało Taurena jest owłosione, poza wewnętrznymi stronami dłoni. Kobiety są wątlejszej budowy i osiągają do 210 cm wzrostu, mężczyźni mogą mierzyć do 250 cm. Waga podobna do centaurów czyli powyżej tony. Płeć piękna jest smuklejsza, bez szlachetnego garba na plecach, bardziej wyprostowana , o bujnych kształtach, których nie skrywa owłosienie.</p><p>Taureni posiadają także zakończenie ciała w postaci ogona jako pozostałość po zwierzęcej odsłonie. Mimo swojego naturalizmu męskie egzemplarze chowają swoje przyrodzenie pod przepaską ze skóry, lecz poza tym nie posiadają odzienia.</p><p>Mają słabość do błyskotek, naszyjników, wisiorów z kamieni, zębów i innych materiałów. Kobiety zaplatają swoje włosy w warkocze, ozdabiają, a w okresie rui barwią swoje sutki na czerwono.</p><br>
<b>Charakter</b><p>Są to istoty rodzinne, dumne, acz nie wyniosłe. Posiadają mocno rozwinięty honor i poczucie własnej godności. Mimo braku w wiedzy, prymitywnego sposobu życia potrafią żyć nie czyniąc innym krzywdy, oraz nie kwalifikując innych ras jako gorszych. Kierują się instynktem, nie są zbyt gadatliwe. Ich aparat mowy nie jest dostosowany, zatem trudno się z nimi porozumieć, ale można próbować. Pozwalają innym wkraczać na swój teren, wręcz wolą wiedzieć i znać osobniki, z którymi mają do czynienia. Nie powstrzymują się przed kopulacją z innymi rasami, chociaż jedynie ze swoimi siostrami mogą spłodzić potomstwo.</p><br>
<b>Stosunek do innych ras</b><p>Nie lubią się z elfami, nawet ze szczepu Niskich. Te nie widzą w nich istot rozumnych, tylko zwierzęta, co zwykle spotyka się z agresją z obu stron.</p><p>Dobrze rozumieją się z centaurami oraz z hobbitami. Do pozostałych zaś ras podchodzą z dystansem i ostrożnością. Wrogami są z demony, cienie, orkowie i wszelkie postaci z mroku, które posiadają złe zamiary.</p>

<br><br>
<b>Statystyki:</b><br>
Tauren otrzymuje za 1 AP:<br>
			+3.6 Siły<br>
      +3.3 Zręczności<br>
      +3.5 Szybkości<br>
      +2 Wytrzymałości<br>
      +2.6 Inteligencji<br>
      +2.7 Siły Woli<br>
      <br><br>
     </p');
		}if ($_GET['select'] == 'umarlak') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Umarlak <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/umarlak.jpg"> <br><br>
<b>Opis:</b><br>
Umarlak, jest to mumia, bądz Zombie wskrzeszone przez Nekromantę podczas Nocy Trupów.
			Zamieszkuje od oczywiście Coweritanę, w której znajduje się owy cmentarz.
			Z charakteru jest flegnatyczny i melancholijny. Cechuje go duża szybkość i zręczność,
			 więc ta rasa zajmuje sięgłównie rzemiosłem. Mając dobry kontakt z magami, któwrych jest
			  w Coweritanie najwięcej, stwarzają potężne bronie, za które zdobywają dużo złota.

<br><br>
<b>Statystyki:</b><br>
Umarlak otrzymuje za 1 AP:<br>
			+3.7 Siły<br>
      +3.8 Zręczności<br>
      +2.9 Szybkości<br>
      +2.8 Wytrzymałości<br>
      +3 Inteligencji<br>
      +2.7 Siły Woli<br>
      <br><br>
     </p');
		}if ($_GET['select'] == 'ork') 
		{
			define('C_RACE_INFO', '
			<p>
<b>Rasa:</b> Ork <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/ork.jpg"> <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>Rasa ta jest wynaturzeniem, okrutnym żartem jakie sprawiła bogom natura. Orkowie to bowiem dalecy, niedoskonali kuzyni elfów. Jak można się było spodziewać nikt inny jak właśnie długousi postanowili eksperymentować nawet na samych sobie. Porwali noworodki i na nich poczęli sprawdzać co też się stanie. Rytuały i wywary jakie sporządzili okazały się śmiertelnie groźne. Kiedy elfie dzieci przestały oddychać ci wypili mikstury, aby zatrzeć ślady zbrodni i odsunąć od siebie konsekwencje. Jednak na wpół martwe ciała zaczęły się zmieniać, pęcznieć. W efekcie czego powstała nowa rasa.. Zmieniona do tego stopnia, że mało kto powiązałby ją z elfami. Ci, którzy ją stworzyli także przeszli przeobrażenie, ale niestety ich organizmy nie mogły się przystosować i umarli tydzień później w wielkich mękach. Długousi podjęli się opieki nad tymi strasznymi potworkami, chcąc z nich uczynić mądre istoty. Te jednak pełne okrucieństwa wybrały inną drogę. Szybko opuścili lasy elfów, uciekli na spalone i niedostępne ziemie Północy, albo górskie rozpadliny, aby tam budować swoje jestestwo.</p><br>
<b>Wygląd</b><p>Mogą mierzyć do 180 cm. Są ciężkie, nieforemne. Nie da się ich aparycji określić mianem urody- twarze są zniekształcone, zdeformowane, ręce często za długie, sylwetki zgarbione. Nie posiadają owłosienia, czasem mają jakąś kępkę na głowie. Kolor skóry waha się od zgniłej zieleni po szarości.</p><br>
<b>Charakter</b><p>Wrogie, nieprzyjazne i agresywne. Nie można im dawać jakiejś sfery psychicznej, ideologii tudzież wyjaśnienia i odnalezienia przyczyn. Te istoty są pozbawione inteligencji. Są prymitywne, kierują się instynktem. Chciwe, zachłanne.</p><br>
<b>Stosunek do innych ras</b><p>Mordować, zjadać i niszczyć. Potrafią skumać się z ludźmi, pod ich przywództwem potrafią wiele zrobić. A zwykle trzymają się ze sobą, ledwo się nie mordując wzajemnie.</p>

<br><br>
<b>Statystyki:</b><br>
Ork otrzymuje za 1 AP:<br>
			+3.6 Siły<br>
      +3.2 Zręczności<br>
      +3 Szybkości<br>
      +2 Wytrzymałości<br>
      +3 Inteligencji<br>
      +2.7 Siły Woli<br>
      <br><br>
     </p');
		}if ($_GET['select'] == 'Centaur') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Centaur <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/centaur.jpg"> <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>Tajemnicze stworzenia, będące połączeniem człowieka i konia powstały niedługo po ludziach, jako eksperyment. Od razu odnaleźli wspólny język z elfami, chociaż bardzo mocno zdystansowani i nieufni szybko postanowili wycofać się do lasów, aby tam wieść spokojny żywot.</p><p>Mimo symbiozy z elfami odczuwali ich zainteresowanie z przezornością, mając za przestrogę sposób z jakim obeszli się z ludźmi. Świadomi swojej wartości nie chcieli z nikim się skłócać, dlatego stworzyli zamknięte społeczeństwo.</p><br>
<b>Wygląd</b><p>Dół konia, a góra człowiecza, wielkością przerastali zwykłe wierzchowce. Ich umaszczenie jest zależne od rodzica. Twarze są nieco zniekształcone, nosy spłaszczone, głównie u mężczyzn, rysy toporniejsze. Mocno owłosieni, gardzą odzieżą, z dumnie wypiętą piersią pilnując swoich terytoriów. Mają spiczaste uszy jak elfy i smukłą budowę. Potrafią siłą przewyższyć krasnoludy, a szybkością samych długowiecznych.</p><p>Nie wstydzą się własnej nagości, przykładem kobiet, które nie skrywają prężnych i dużych piersi. Wzrost w kłębie sięga do 170 cm, a waga waha się od 800 kg do 1200 kg.</p><p>Żyją do 200 lat.</p><br>
<b>Charakter</b><p>Centaury są nieufne i ostrożne. Posiadają głębię mądrości, potrafią czytać z gwiazd, często parają się astrologią, astronomią i wróżbiarstwem, znajdują się wśród nich świetni łucznicy i łowcy. Znamienite jednak dla tej rasy jest to, że potrafią porozumiewać się z każdym. Wybrali jednak wycofanie się i nie stawanie po żadnej ze stron konfliktu, aby uniknąć tym samym jakichkolwiek nieprzyjemności. To rasa nastawiona pokojowo, widząca swoją wyższość nad elfami, pochodzącą od zrozumienia istoty sporu i nie włączania się w nią aktywnie.</p><p>Nie lubią sięgać po broń, jednak jeśli zostają do tego zmuszeni, mogą być groźnym przeciwnikiem. Umiłowali oręż strzelecki oraz dzidy. Mimo znajomości reguł magii korzystają z niej jedynie w dobrym celu tworząc lecznicze mikstury oraz wszelkie wspomagacze.</p><br>
<b>Stosunek do innych ras</b><p>Obojętny z nastawieniem na izolację od problemów świata.</p>

<br><br>
<b>Statystyki:</b><br>
		Centaur otrzymuje za 1 AP:<br>
			+3.2 Siły<br>
      +3.2 Zręczności<br>
      +3.6 Szybkości<br>
      +2 Wytrzymałości<br>
      +2 Inteligencji<br>
      +2.1 Siły Woli<br>
      <br><br>
     </p');
		}if ($_GET['select'] == 'Górski Ork') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Górski Ork <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/gorski ork.jpg"> <br><br>
<b>Opis:</b><br>
Górski Ork należy do istot, które zapoczątkowały istnienie cesarstwa Coweritańskiego. Orki Górskie przywędrowały do osady Coweritańskiej zbudowanej przez demona DemoniXa, z Gór Migotliwych. Ich siła przekracza wszelakie granice. Szybkość i zręczność również imponują, więc świetnie nadawają się na wojowników. Są istotami złymi, dlatego też pozostali w Coweritanie.
<br><br>
<b>Statystyki:</b><br>
Górski Ork otrzymuje za 1 AP:<br>
			+3.7 Siły<br>
      +3 Zręczności<br>
      +3 Szybkości<br>
      +2 Wytrzymałości<br>
      +2.6 Inteligencji<br>
      +2.7 Siły Woli<br>
      <br><br>
     </p');
		}if ($_GET['select'] == 'ogr') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Ogr <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/ogr.jpg"> <br><br>
<b>Opis:</b><br>
Ogry przenieśli się z Aleary do Coweritany, wtedy gry dostrzegli olbrzymi zapał Orków
			 Stanęli po ich stwonie i silnie walczą o Coweritane. Chawakteryzują się dużą inteligencją i siłom woli,
			  więc świetnie nadająsię na magów, oraz farmerów. Mają przed sobą wielką przyszłość, lecz ciężko im zdobyć żonę
			  z innej rasy, zważając na ich odstraszający wygląd.

<br><br>
<b>Statystyki:</b><br>
Ogr otrzymuje za 1 AP:<br>
			+2 Siły<br>
      +2.8 Zręczności<br>
      +3 Szybkości<br>
      +2 Wytrzymałości<br>
      +3.5 Inteligencji<br>
      +3.5 Siły Woli<br>
      <br><br>
     </p');
		}	}if ($_GET['select'] == 'Cień') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Cień <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/cien.jpg" <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>Skąd się wzięły cienie? Dużo osób sądzi, że pochodzą z pustynnego Kurysium i są owocem magicznej działalności tamtejszych kapłanów. Może jest w tym cześć prawdy. Cienie od początku swojego istnienia były uwiązane do istoty ten cień rzucającej. Za dnia wiodły nudne życie, zaś w nocy, bezpostaciowe magicznie ożywione czarne materie podróżowały po całym świecie robiąc rzeczy często krew mrożące w żyłach, by na powrót o poranku powrócić na swoje miejsce, czyli do osoby cień rzucającej.</p><p>Nikt nie wie co kieruje tymi istotami. Czy są one od kogoś lub od czegoś zależne? Trudno stwierdzić.</p><br>
<b>Wygląd</b><p>To, określana przez niektórych istota eteryczna. Ale czy tak naprawdę tym jest właśnie cień? Duchem, bez kształtu a nawet wyglądu? Jest to jak najbardziej mylne spostrzeżenie.</p><p>Kształtem przypomina nieco zdeformowaną rzecz lub istotę, swój pierwowzór. Czasem jest większy, a czasem mniejszy, nigdy zaś identyczny do oryginału. Dziwne humanoidalne kształty – tak po krótce nazwać można tą „rasę”.</p><br>
<b>Charakter</b><p>Są wprawnymi zabójcami, gdyż ich technika kamuflażu pośród nocy jest niebywała, są niemal nie do wykrycia, niemal, gdyż nigdy do końca nie mogą ukryć swojej fizycznej obecności. Wykazują dużą zwinność i szybkość, za to jeżeli chodzi o siłę, to nawet 10 letnie dziecko ma jej więcej. Są w stanie podnosić tylko lekkie przedmioty, skąd też ciężki miecz, czy zbroja nie leży w ich gestii.</p><br>
<b>Stosunek do innych ras</b><p>Są raczej negatywnie nastawione do żywych istot, same będąc pomiędzy życiem a śmiercią.</p><p>Cienia można zabić, można pozbawić go kształtu, związać go na stałe z jakimś przedmiotem, lub więzić poprzez promienie słoneczne.</p><p>Jednak nie należy ich się zbytnio obawiać, pomimo, iż są sprawnymi zabójcami. Występują nielicznie i tak naprawdę nikt nie wie co skłania cienie do opuszczenia swojego pierwowzoru.</p>
<br><br>
<b>Statystyki:</b><br>
Cień otrzymuje za 1 AP:<br>
			+3 Siły<br>
      +3 Zręczności<br>
      +3 Szybkości<br>
      +3 Wytrzymałości<br>
      +3 Inteligencji<br>
      +3 Siły Woli<br>
      <br><br>
     </p>');
     }
		}
		if ($_GET['select'] == 'Półsmok') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Półsmok <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/polsmok.jpg"> <br><br>
<b>Opis:</b><br>
<center><b><i>Misternie budowane ego w gruzach runie,</i></b></center>
<center><b><i>Lecz podnieść się z ruiny mało, kto już umie.</i></b></center>
<center><b><i>Ale gdy zbudujesz obraz wiecznej chwały,</i></b></center>
<center><b><i>Nikt go nie rozwali, bo będzie ze skały.</i></b></center>
<b>Wygląd</b>
<p>Co do wyglądu, to jest on dość monotonny u wszystkich przedstawicieli tej rasy. Szczątkowe rogi, ciało pokryte miejscami czymś w rodzaju łuski, wzrost około 170 cm, dość krępe ciało, bardzo często pozbawione owłosienia. Zawsze kocie źrenice, czarne niczym węgiel. Brak skrzydeł, jakie zapewne posiadały ich przodkowie. Niektóre osobniki posiadają nawet krótki jaszczurzy ogon, lecz to akurat jest rzadkością.</p>
<b>Charakter</b>
<p>Umiłowanie mądrości, tymi słowami opisać można tę rasę. To pradawne istoty, praktycznie wymarłe, lub żyjące w odosobnieniu, czerpiące radość życia w dążeniu do poznania głębszych prawd kierujących tym światem.</p><p>Półsmoki to potomkowie prawdziwych smoków, przez wieki naginane potrzebą adaptacji przybierające obecną postać. Niektórzy powiadają, że zostały zrodzone ze związku smoka z demonem, inni zaś mówią, że są połączeniem smoczej gadziny i ludzkiego pierwiastka. One same zwykły milczeć o swoim pochodzeniu.</p><p>To niezwykle cicha i trzymająca się na uboczu rasa. To urodzeni myśliciele. Nie posiadają wrodzonej zdolności do magii stąd też nią się nie zajmują. Podążają natomiast za wiedzą, bo wiedza to potęga.</p><p>Ich dążenia mają często maniakalne skutki. Są tak zafascynowani odkrywaniem prawdy, iż nie ma dla nich znaczenia, że ktoś doznaje bólu poprzez ich praktyki.</p><p>Męscy przedstawiciele często eksperymentują na ludzkich kobietach, gwałcą je by spłodzić nowy obiekt do swych badań. Bywają przy tym brutalni, analizując zachowania swojej „ofiary”.</p><p>Ludność wierzy, iż zjedzenie serca półsmoka pozwoli przejąć wiedzę jego właściciela. A gałki oczne są wykorzystywane w eliksirach miłosnych, lub spopielone jako afrodyzjak.</p><p>Są nader spostrzegawcze, a ich zdolność analizy i wysnuwania konkretnych wniosków znajduje sobie uznanie wśród niejednego władcy. Nie są traktowane jednak z powagą jako doradcy, ze swoim maniakalnym dążeniem do wiedzy bywają bardzo często prześladowanie nie tylko za ich cenne organy, lecz także za właśnie niebezpieczeństwo jakie stwarzają.</p><br>
<b>Stosunek do innych ras</b><p>Półsmoki potrafią dożywać sędziwego wieku nawet 500 lat, lecz średnio żyją one około 200. Ciągłe polowania na te i tak już przetrzebione istoty blokują im możliwość osiągnięcia późnej starości, stąd też ich dość negatywny stosunek do ras ludzkich.</p>

<br><br>
<b>Statystyki:</b><br>
Półsmok otrzymuje za 1 AP:<br>
			+3.6 Siły<br>
      +3.5 Zręczności<br>
      +2.6 Szybkości<br>
      +2.5 Wytrzymałości<br>
      +2.9 Inteligencji<br>
      +2.3 Siły Woli<br>
      <br><br>
     </p');
		}if ($_GET['select'] == 'Kobold') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Kobold <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/kobold.jpg"> <br><br>
<b>Opis:</b><br>

<b>Geneza</b>
<p>Po świecie przetacza się legenda o powstaniu tej rasy, jakoby przywiezione zostały z innego świata, zagnieździły się tutaj i są. Tylko że prawda jest prozaiczna i mało zabawna. Nikt o niej nie mówi, ale każdy doskonale zdaje sobie sprawę z tego, że to efekt kolejnych eksperymentów elfich uczonych. Tak podobne do jaszczuroczłeków i półsmoków- nie sposób powiedzieć, że jest inaczej.</p><p>W dziwny sposób odnalazły się w surowej rzeczywistości, gdzie liczy się wielkość i lotność umysłu, a nie każdy z osobna. Stworzyły własny system i społeczność, która zintegrowała się z otoczeniem. Mieszkają głównie w dużych miastach i parają się wszystkim- od szpiegostwa, poprzez kradzieże, na byciu posłańcem skończywszy. Mimo pełnienia dość negatywnych ról w społeczeństwie same nie są specjalnie nieprzyjemne. Być może dlatego nikt nie negował ich pochodzenia i pozwolił małym stworzeniom na kultywowanie własnej legendy.</p><br>
<b>Wygląd</b><p>Koboldy przypominają po prostu jaszczurki. Stąpające na dwóch nogach, na czterech jeśli taka potrzeba. Mają skórę gładką i łuskowaną jak węże, wielobarwną, różną i ciekawą. Jeśli koloryt jest w danym momencie nasycony to znaczy, że następuje okres godowy. Koboldy nie mają więcej jak metr wysokości, jaszczurze pyski, rozdwojony język i gadzie oczy. Potrafią się kamuflować, przynajmniej te niektóre, a także odstraszać zapachami drapieżniki. Nie posiadają w ogóle owłosienia i żyją maksymalnie 50 lat.</p><br>
<b>Charakter</b><p>Nieco złośliwe, pyskate i gadatliwe. Nie utrzymują tajemnicy i zwykle wyrażają opinie w trzeciej osobie. Są nadgorliwe i często wpadają w tarapaty. Popędliwe, niezbyt bystre, ale kumate. Nie nadają się do roli zabójców, są bardzo tchórzliwe.</p><br>
<b>Stosunek do innych ras</b><p>Koboldy są towarzyskie i nie czują się źle w żadnym towarzystwie, o ile nikt z otoczenia nie weźmie sobie za cel pozbawienia ich ogonów – są na tym punkcie bardzo czułe. Starają się zaprzyjaźnić z każdą rasą i są mocno zasmuceni i zawiedzeni, gdy zostaną odrzuceni. Najlepsze kontakty mają z półsmokami oraz z jaszczuroczłekami, czego można się było spodziewać. A największy dystans trzymają przy demonach i serafinach. Jednak bardzo często dają się im opętać.</p>
<br><br>
<b>Statystyki:</b><br>
Kobold otrzymuje za 1 AP:<br>
			+2.9 Siły<br>
      +3.5 Zręczności<br>
      +2.9 Szybkości<br>
      +3.5 Wytrzymałości<br>
      +2.9 Inteligencji<br>
      +2.3 Siły Woli<br>
      <br><br>
     </p');
		}if ($_GET['select'] == 'Demon') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Demon <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/demon.jpg"> <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>Po świecie przetacza się legenda o powstaniu tej rasy, jakoby przywiezione zostały z innego świata, zagnieździły się tutaj i są. Tylko że prawda jest prozaiczna i mało zabawna. Nikt o niej nie mówi, ale każdy doskonale zdaje sobie sprawę z tego, że to efekt kolejnych eksperymentów elfich uczonych. Tak podobne do jaszczuroczłeków i półsmoków- nie sposób powiedzieć, że jest inaczej.</p><p>W dziwny sposób odnalazły się w surowej rzeczywistości, gdzie liczy się wielkość i lotność umysłu, a nie każdy z osobna. Stworzyły własny system i społeczność, która zintegrowała się z otoczeniem. Mieszkają głównie w dużych miastach i parają się wszystkim- od szpiegostwa, poprzez kradzieże, na byciu posłańcem skończywszy. Mimo pełnienia dość negatywnych ról w społeczeństwie same nie są specjalnie nieprzyjemne. Być może dlatego nikt nie negował ich pochodzenia i pozwolił małym stworzeniom na kultywowanie własnej legendy.</p><br>
<b>Wygląd</b><p>Koboldy przypominają po prostu jaszczurki. Stąpające na dwóch nogach, na czterech jeśli taka potrzeba. Mają skórę gładką i łuskowaną jak węże, wielobarwną, różną i ciekawą. Jeśli koloryt jest w danym momencie nasycony to znaczy, że następuje okres godowy. Koboldy nie mają więcej jak metr wysokości, jaszczurze pyski, rozdwojony język i gadzie oczy. Potrafią się kamuflować, przynajmniej te niektóre, a także odstraszać zapachami drapieżniki. Nie posiadają w ogóle owłosienia i żyją maksymalnie 50 lat.</p><br>
<b>Charakter</b><p>Nieco złośliwe, pyskate i gadatliwe. Nie utrzymują tajemnicy i zwykle wyrażają opinie w trzeciej osobie. Są nadgorliwe i często wpadają w tarapaty. Popędliwe, niezbyt bystre, ale kumate. Nie nadają się do roli zabójców, są bardzo tchórzliwe.</p><br>
<b>Stosunek do innych ras</b><p>Koboldy są towarzyskie i nie czują się źle w żadnym towarzystwie, o ile nikt z otoczenia nie weźmie sobie za cel pozbawienia ich ogonów – są na tym punkcie bardzo czułe. Starają się zaprzyjaźnić z każdą rasą i są mocno zasmuceni i zawiedzeni, gdy zostaną odrzuceni. Najlepsze kontakty mają z półsmokami oraz z jaszczuroczłekami, czego można się było spodziewać. A największy dystans trzymają przy demonach i serafinach. Jednak bardzo często dają się im opętać.</p>
			

<br><br>
<b>Statystyki:</b><br>
Demon otrzymuje za 1 AP:<br>
			+2.2 Siły<br>
      +3.7 Zręczności<br>
      +3.3 Szybkości<br>
      +2.5 Wytrzymałości<br>
      +2.9 Inteligencji<br>
      +2.3 Siły Woli<br>
      <br><br>
     </p');
		}if ($_GET['select'] == 'Półent') 
		{
			define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Półent <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/polent.jpg"> <br><br>
<b>Opis:</b><br>
<b>Geneza</b>
<p>To skomplikowane skąd tak naprawdę wzięły się te istoty, bo dopiero od kilkuset lat zamieszkują wśród ludzi. Spłynęły nagle z nieba i wcieliły się w społeczność ludzką.</p><p>Wszyscy uważają ich za wysłanników bogów. Prawdopodobnie zostały też przez nich stworzone.</p><p>Plotki i podania głoszą, że były niegdyś żywą bronią w rękach potężnych bóstw, toczących nieustanne walki między sobą. Dziś one same nie negują tego lecz i nie potwierdzają. Prawdą jest natomiast, że nie są to już istoty boskie. Poza wielkimi skrzydłami i rosłymi ciałami, które posiadają nie wskazuje już nic na to by posiadały jakiekolwiek błogosławieństwa boskie.</p><br>
<b>Wygląd</b><p>Prawie w każdym przypadku są to osobniki postawne, ich wzrost w przypadku mężczyzn dochodzi do 190cm, u kobiet zaś do 180cm, a waga wacha się od 60kg w przypadku żeńskich przedstawicieli do 100kg u mężczyzn. Długie włosy w jasnych odcieniach, zawsze proste. Skrzydła posiadają rozpiętość nawet 3 metrów.</p><br>
<b>Charakter</b><p>Żyją raczej samotnie, wśród ludzi, lecz na uboczach miast. Nie kryją się przed wzrokiem ludności, lecz zdawać by się mogło, nie zauważają innych istot.</p><p>Nie ma wśród nich istot ani dobrych ani złych, po prostu posiadają one zróżnicowane ideały i raz obrane trzymają się ich do końca życia, nawet gdy udowodni się im pomyłkę.</p><br>
<b>Preferencje</b>
<p>Odznaczają się wielka odpornością na magię i dużą siłą fizyczną, za to ich skrzydła przeszkadzają im w walce przy pomocy orężu, gdyż są łatwym celem ataku. Serafin pozbawiony swoich skrzydeł staje się podatny na magię i traci swą wytrzymałość, stąd też wniosek, że cała ich siła w nich się kryje.</p><p>Potrafią latać, lecz nie jest to lot dalekobieżny. Nawet krótkie dystanse strasznie nadwątlają ich siły. Długość ich wieku nie jest znana.</p><p>Wielu wierzy nadal w ich boskość i często czczone są jako wysłannicy bóstw. Sami serafini zaś często butni i ślepo zapatrzeni w sprawiedliwość posiadają wypaczone pojęcie dobra i zła.</p>
<b>Stosunek do innych ras</b><p>Każdy, kto nie wierzy lub kto sprzeniewierza się ich ideałom uważany jest za wroga.</p>
<br><b>Ciekawostki</b>
<p>Z ciekawszych rzeczy o tej rasie jest to, iż udowodnienie mylności racji serafinowi skutkuje powolną zmianą koloru jego skrzydeł. Przybierają one odcienie szarości, lub w efekcie kolor czarny.</p><p>Czarnoskrzydły serafin to osobnik, wiedzący o nieprawidłowości swoich przekonań, lecz trzymający się ich. Są to tzw. Upadli.</p>

<br><br>
<b>Statystyki:</b><br>
Półent otrzymuje za 1 AP:<br>
			+4 Siły<br>
      +2.5 Zręczności<br>
      +2.1 Szybkości<br>
      +2.5 Wytrzymałości<br>
      +2.9 Inteligencji<br>
      +2.3 Siły Woli<br>
      <br><br>
     </p');
     }if ($_GET['select'] == 'Serafin') 
     {
     define('C_RACE_INFO', '
			<p>
			<b>Rasa:</b> Serafin <br><br>
<b>Ilustracja:</b><br> <IMG SRC="images/rasyy/serafin.jpg"> <br><br>
<b>Opis:</b><br>
Serafie są uznawane za potomkinie mistycznej armii aniołów, które walczyły u boku bóstw w Wojnach Bogów, w dalekiej antycznej przeszłości. Przez całe tysiąclecia te starożytne stworzenia zachowały swą szlachetną postać tak samo rygorystycznie, jak od zawsze interpretowały starożytne prawa.
			

<br><br>
<b>Statystyki:</b><br>
Serafin otrzymuje za 1 AP:<br>
			+3 Siły<br>
      +3 Zręczności<br>
      +3 Szybkości<br>
      +3 Wytrzymałości<br>
      +3 Inteligencji<br>
      +3 Siły Woli<br>
      <br><br>
     </p');
		}
		
		
	

	if ($_GET['action'] == 'class')
	{
		if ($_GET['select'] == 'warrior') 
		{
			define('C_CLASS_INFO', '<b>Klasa:</b> Wojownik <br><br>
<b>Opis:</b><br>
Wojownik to rycerz, fechmistrz, żołnierz i miłośnik bójek. Jego życie wypełnia poznawanie broni i taktyki. Można go spotkać nie tylko na polu bitwy, ale również walczącego twarz w twarz z potworami. Dobry wojownik musi być silny i zdrowy - inaczej ma nikłe szanse na przetrwanie.<br><br><b>Umiejętności:</b><br>
- klasa z bonusami do walki.<br>
- walka<br>
- hutnictwo<br>
- drwalnictwo<br>
- górnictwo<br>
- hodowla<br>
- zielarstwo<br>
- podstawowe jubilerstwo<br></p>

<br>Dostępne podklasy od 5 lvlu:<br>
<b>Łotr</b> - Możliwość kradzieży kieszonkowej.<br>
<b>Strzelec</b> - Strzelectwo + 100.<br>
<b>Rycerz</b> - Walka bronią + 100.<br>
<b>Voodoo</b> - Rzucanie czarów + 100.<br>
<b>Nekromanta</b> - Wstęp na cmentarz.<br>
<b>Szpieg</b> - Możliwość sprawdzania statystyk gracza.<br>
<b>Skrytobójca</b> - Unik i zręczność + 100.<br>
<b>Tropiciel</b> - Unik + 150.<br>
<b>Pirat</b> - Większe wydobywanie na wyspach.<br>
<b>Krwiopijca</b> - Możliwość napajania się krwią gracza.<br>
<b>Podróżnik</b> - Ma o 50% tańsze rekwizyty w Opuszczonej Kuźni.<br>
<b>Akcjonariusz</b> - Sprzedaż akcjii na giełdzie za 200% ceny.<br>
<b>Handlarz</b> - Dostępna lokata w skarbcu 50% - 7 dni.<br>
<b>Kapłan</b> - Bonusy ze świątyni gildyjnej +30%.<br>
<b>Jasnowidz</b> - Większa szansa wygranej na loterii oraz większe nagrody.<br>
<b>Kucharz</b> - Gotowanie +100 .<br>
<b>Hutnik</b> - Hutnictnictwo + 100.<br>
<b>Drwal</b> - Drwalnictwo + 100.<br>
<b>Górnik</b> - Górnictwo + 100.<br>
<b>Hodowca</b> - Hodowla + 100.<br>
<b>Jubiler</b> - Jubilerstwo + 500.<br>
<b>Farmer</b> - Zielarstwo + 100.<br>
<b>Alchemik</b> - Alchemia + 100.<br>
<b>Stolarz</b> - Stolarstwo + 100.<br>
<b>Kowal</b> - Kowalstwo + 100.<br>








');
		}

		if ($_GET['select'] == 'mage') 
		{
			define('C_CLASS_INFO', '<b>Klasa:</b> Mag <br><br>
<b>Opis:</b><br>
Mag jest to osoba specjalizująca się, w walce, wzmacnianiu. Studiuje zaklęcia, używa różdżek i szat.
<br><br><b>Umiejętności:</b><br>
- potrafi umagiczniać przedmioty<br>
- magia<br>
- walka<br>
- hutnictwo<br>
- drwalnictwo<br>
- górnictwo<br>
- hodowla<br>
- zielarstwo<br>
- podstawowe jubilerstwo<br></p><br>
<br>Dostępne podklasy od 5 lvlu:<br>
<b>Łotr</b> - Możliwość kradzieży kieszonkowej.<br>
<b>Strzelec</b> - Strzelectwo + 100.<br>
<b>Rycerz</b> - Walka bronią + 100.<br>
<b>Voodoo</b> - Rzucanie czarów + 100.<br>
<b>Nekromanta</b> - Wstęp na cmentarz.<br>
<b>Szpieg</b> - Możliwość sprawdzania statystyk gracza.<br>
<b>Skrytobójca</b> - Unik i zręczność + 100.<br>
<b>Tropiciel</b> - Unik + 150.<br>
<b>Pirat</b> - Większe wydobywanie na wyspach.<br>
<b>Krwiopijca</b> - Możliwość napajania się krwią gracza.<br>
<b>Podróżnik</b> - Ma o 50% tańsze rekwizyty w Opuszczonej Kuźni.<br>
<b>Akcjonariusz</b> - Sprzedaż akcjii na giełdzie za 200% ceny.<br>
<b>Handlarz</b> - Dostępna lokata w skarbcu 50% - 7 dni.<br>
<b>Kapłan</b> - Bonusy ze świątyni gildyjnej +30%.<br>
<b>Jasnowidz</b> - Większa szansa wygranej na loterii oraz większe nagrody.<br>
<b>Kucharz</b> - Gotowanie +100 .<br>
<b>Hutnik</b> - Hutnictnictwo + 100.<br>
<b>Drwal</b> - Drwalnictwo + 100.<br>
<b>Górnik</b> - Górnictwo + 100.<br>
<b>Hodowca</b> - Hodowla + 100.<br>
<b>Jubiler</b> - Jubilerstwo + 500.<br>
<b>Farmer</b> - Zielarstwo + 100.<br>
<b>Alchemik</b> - Alchemia + 100.<br>
<b>Stolarz</b> - Stolarstwo + 100.<br>
<b>Kowal</b> - Kowalstwo + 100.<br>');
		}

		if ($_GET['select'] == 'artisan') 
		{
			define('C_CLASS_INFO', '<b>Klasa:</b> Rzemieślnik <br><br>
<b>Opis:</b><br>
Rzemieślnik jest osobą specjalizującą się w tworzeniu przedmiotów. Zazwyczaj obierabia sobie jedną specjalizację którą rozwija. Stara się unikać walki bo chociaż potrafi stworzyć doskonały oręż nie zawsze jest w stanie go wykorzystać.<br><br><b>Umiejętności:</b><br>
- zaawansowane stolarstwo<br>
- zaawansowane jubilerstwo<br>
- zaawansowane kowalstwo<br>
- zaawansowana alchema<br>
- może produkować astralne komponenty<br>
- walka<br>
- hutnictwo<br>
- drwalnictwo<br>
- górnictwo<br>
- hodowla<br>
- zielarstwo<br></p><br>
<br>Dostępne podklasy od 5 lvlu:<br>
<b>Łotr</b> - Możliwość kradzieży kieszonkowej.<br>
<b>Strzelec</b> - Strzelectwo + 100.<br>
<b>Rycerz</b> - Walka bronią + 100.<br>
<b>Voodoo</b> - Rzucanie czarów + 100.<br>
<b>Nekromanta</b> - Wstęp na cmentarz.<br>
<b>Szpieg</b> - Możliwość sprawdzania statystyk gracza.<br>
<b>Skrytobójca</b> - Unik i zręczność + 100.<br>
<b>Tropiciel</b> - Unik + 150.<br>
<b>Pirat</b> - Większe wydobywanie na wyspach.<br>
<b>Krwiopijca</b> - Możliwość napajania się krwią gracza.<br>
<b>Podróżnik</b> - Ma o 50% tańsze rekwizyty w Opuszczonej Kuźni.<br>
<b>Akcjonariusz</b> - Sprzedaż akcjii na giełdzie za 200% ceny.<br>
<b>Handlarz</b> - Dostępna lokata w skarbcu 50% - 7 dni.<br>
<b>Kapłan</b> - Bonusy ze świątyni gildyjnej +30%.<br>
<b>Jasnowidz</b> - Większa szansa wygranej na loterii oraz większe nagrody.<br>
<b>Kucharz</b> - Gotowanie +100 .<br>
<b>Hutnik</b> - Hutnictnictwo + 100.<br>
<b>Drwal</b> - Drwalnictwo + 100.<br>
<b>Górnik</b> - Górnictwo + 100.<br>
<b>Hodowca</b> - Hodowla + 100.<br>
<b>Jubiler</b> - Jubilerstwo + 500.<br>
<b>Farmer</b> - Zielarstwo + 100.<br>
<b>Alchemik</b> - Alchemia + 100.<br>
<b>Stolarz</b> - Stolarstwo + 100.<br>
<b>Kowal</b> - Kowalstwo + 100.<br>');
		}

		if ($_GET['select'] == 'barbarian') 
		{
			define('C_CLASS_INFO', '<b>Klasa:</b> Barbarzyńca <br><br>
<b>Opis:</b><br>
Barbarzyńca może być doskonałym wojownikiem. Choć brakuje mu dyscypliny i umiejętności zwykłego wojownika, to może wprowadzać się w szał bitewny, przez co staje się silniejszy i wytrzymalszy.
<br><br><b>Umiejętności:</b><br>
- klasa z bonusami do walki.
<br>
- hutnictwo<br>
- drwalnictwo<br>
- górnictwo<br>
- hodowla<br>
- zielarstwo<br>
- podstawowe jubilerstwo<br></p><br>
<br>Dostępne podklasy od 5 lvlu:<br>
<b>Łotr</b> - Możliwość kradzieży kieszonkowej.<br>
<b>Strzelec</b> - Strzelectwo + 100.<br>
<b>Rycerz</b> - Walka bronią + 100.<br>
<b>Voodoo</b> - Rzucanie czarów + 100.<br>
<b>Nekromanta</b> - Wstęp na cmentarz.<br>
<b>Szpieg</b> - Możliwość sprawdzania statystyk gracza.<br>
<b>Skrytobójca</b> - Unik i zręczność + 100.<br>
<b>Tropiciel</b> - Unik + 150.<br>
<b>Pirat</b> - Większe wydobywanie na wyspach.<br>
<b>Krwiopijca</b> - Możliwość napajania się krwią gracza.<br>
<b>Podróżnik</b> - Ma o 50% tańsze rekwizyty w Opuszczonej Kuźni.<br>
<b>Akcjonariusz</b> - Sprzedaż akcjii na giełdzie za 200% ceny.<br>
<b>Handlarz</b> - Dostępna lokata w skarbcu 50% - 7 dni.<br>
<b>Kapłan</b> - Bonusy ze świątyni gildyjnej +30%.<br>
<b>Jasnowidz</b> - Większa szansa wygranej na loterii oraz większe nagrody.<br>
<b>Kucharz</b> - Gotowanie +100 .<br>
<b>Hutnik</b> - Hutnictnictwo + 100.<br>
<b>Drwal</b> - Drwalnictwo + 100.<br>
<b>Górnik</b> - Górnictwo + 100.<br>
<b>Hodowca</b> - Hodowla + 100.<br>
<b>Jubiler</b> - Jubilerstwo + 500.<br>
<b>Farmer</b> - Zielarstwo + 100.<br>
<b>Alchemik</b> - Alchemia + 100.<br>
<b>Stolarz</b> - Stolarstwo + 100.<br>
<b>Kowal</b> - Kowalstwo + 100.<br>');
		}

		if ($_GET['select'] == 'thief') 
		{
			define('C_CLASS_INFO', '<b>Klasa:</b> Złodziej <br><br>
<b>Opis:</b><br>
Złodziej to zręczny łotrzyk, który stara się osiągnąć własne cele - dobre lub złe. Jego znakami rozpoznawczymi są spryt, zwinność i ciągłe krycie się w cieniu. Tylko od złodzieja zależy, czy wykorzysta swe talenty przeciw niewinnym wędrowcom, bogatym kupcom, potworom lub gnębiącej biedaków władzy.<br><br><b>Umiejętności:</b><br>
- może okradać graczy<br>
- może rabować sklepy i skarbiec<br>
- może kraść astralne komponenty<br>
- walka<br>
- hutnictwo<br>
- drwalnictwo<br>
- górnictwo<br>
- hodowla<br>
- zielarstwo<br>
- podstawowe jubilerstwo<br></p><br>
<br>Dostępne podklasy od 5 lvlu:<br>
<b>Łotr</b> - Możliwość kradzieży kieszonkowej.<br>
<b>Strzelec</b> - Strzelectwo + 100.<br>
<b>Rycerz</b> - Walka bronią + 100.<br>
<b>Voodoo</b> - Rzucanie czarów + 100.<br>
<b>Nekromanta</b> - Wstęp na cmentarz.<br>
<b>Szpieg</b> - Możliwość sprawdzania statystyk gracza.<br>
<b>Skrytobójca</b> - Unik i zręczność + 100.<br>
<b>Tropiciel</b> - Unik + 150.<br>
<b>Pirat</b> - Większe wydobywanie na wyspach.<br>
<b>Krwiopijca</b> - Możliwość napajania się krwią gracza.<br>
<b>Podróżnik</b> - Ma o 50% tańsze rekwizyty w Opuszczonej Kuźni.<br>
<b>Akcjonariusz</b> - Sprzedaż akcjii na giełdzie za 200% ceny.<br>
<b>Handlarz</b> - Dostępna lokata w skarbcu 50% - 7 dni.<br>
<b>Kapłan</b> - Bonusy ze świątyni gildyjnej +30%.<br>
<b>Jasnowidz</b> - Większa szansa wygranej na loterii oraz większe nagrody.<br>
<b>Kucharz</b> - Gotowanie +100 .<br>
<b>Hutnik</b> - Hutnictnictwo + 100.<br>
<b>Drwal</b> - Drwalnictwo + 100.<br>
<b>Górnik</b> - Górnictwo + 100.<br>
<b>Hodowca</b> - Hodowla + 100.<br>
<b>Jubiler</b> - Jubilerstwo + 500.<br>
<b>Farmer</b> - Zielarstwo + 100.<br>
<b>Alchemik</b> - Alchemia + 100.<br>
<b>Stolarz</b> - Stolarstwo + 100.<br>
<b>Kowal</b> - Kowalstwo + 100.<br>');
		}
		if ($_GET['select'] == 'Nekromanta') 
		{
			define('C_CLASS_INFO', '<b>Klasa:</b> Nekromanta <br><br>
<b>Opis:</b><br>
Klasa ta jako jedyna ma dostęp na cmentarz raz na 7 dni. Nekromanta nie używa magi!.
<br><br><b>Umiejętności:</b><br>
- wskrzeszanie zmarłych na cmentarzu.<br>
- hutnictwo<br>
- drwalnictwo<br>
- górnictwo<br>
- hodowla<br>
- zielarstwo<br>
- podstawowe jubilerstwo<br>.</p><br>
<br>Dostępne podklasy od 5 lvlu:<br>
<b>Łotr</b> - Możliwość kradzieży kieszonkowej.<br>
<b>Strzelec</b> - Strzelectwo + 100.<br>
<b>Rycerz</b> - Walka bronią + 100.<br>
<b>Voodoo</b> - Rzucanie czarów + 100.<br>
<b>Nekromanta</b> - Wstęp na cmentarz.<br>
<b>Szpieg</b> - Możliwość sprawdzania statystyk gracza.<br>
<b>Skrytobójca</b> - Unik i zręczność + 100.<br>
<b>Tropiciel</b> - Unik + 150.<br>
<b>Pirat</b> - Większe wydobywanie na wyspach.<br>
<b>Krwiopijca</b> - Możliwość napajania się krwią gracza.<br>
<b>Podróżnik</b> - Ma o 50% tańsze rekwizyty w Opuszczonej Kuźni.<br>
<b>Akcjonariusz</b> - Sprzedaż akcjii na giełdzie za 200% ceny.<br>
<b>Handlarz</b> - Dostępna lokata w skarbcu 50% - 7 dni.<br>
<b>Kapłan</b> - Bonusy ze świątyni gildyjnej +30%.<br>
<b>Jasnowidz</b> - Większa szansa wygranej na loterii oraz większe nagrody.<br>
<b>Kucharz</b> - Gotowanie +100 .<br>
<b>Hutnik</b> - Hutnictnictwo + 100.<br>
<b>Drwal</b> - Drwalnictwo + 100.<br>
<b>Górnik</b> - Górnictwo + 100.<br>
<b>Hodowca</b> - Hodowla + 100.<br>
<b>Jubiler</b> - Jubilerstwo + 500.<br>
<b>Farmer</b> - Zielarstwo + 100.<br>
<b>Alchemik</b> - Alchemia + 100.<br>
<b>Stolarz</b> - Stolarstwo + 100.<br>
<b>Kowal</b> - Kowalstwo + 100.<br>');
		}

		if ($_GET['select'] == 'Gwardzista') 
		{
			define('C_CLASS_INFO', '<b>Klasa:</b> Gwardzista <br><br>
<b>Opis:</b><br>
Gwardzista to wojownik wychowany w nienawiści do magii. Po wielu latach ćwiczeń wyspecjalizował się w walce z wszelkiego rodzaju magami.<br><br><b>Umiejętności:</b><br>
- klasa z bonusami do walki.<br>
- hutnictwo<br>
- drwalnictwo<br>
- górnictwo<br>
- hodowla<br>
- zielarstwo<br>
- podstawowe jubilerstwo<br></p><br>
<br>Dostępne podklasy od 5 lvlu:<br>
<b>Łotr</b> - Możliwość kradzieży kieszonkowej.<br>
<b>Strzelec</b> - Strzelectwo + 100.<br>
<b>Rycerz</b> - Walka bronią + 100.<br>
<b>Voodoo</b> - Rzucanie czarów + 100.<br>
<b>Nekromanta</b> - Wstęp na cmentarz.<br>
<b>Szpieg</b> - Możliwość sprawdzania statystyk gracza.<br>
<b>Skrytobójca</b> - Unik i zręczność + 100.<br>
<b>Tropiciel</b> - Unik + 150.<br>
<b>Pirat</b> - Większe wydobywanie na wyspach.<br>
<b>Krwiopijca</b> - Możliwość napajania się krwią gracza.<br>
<b>Podróżnik</b> - Ma o 50% tańsze rekwizyty w Opuszczonej Kuźni.<br>
<b>Akcjonariusz</b> - Sprzedaż akcjii na giełdzie za 200% ceny.<br>
<b>Handlarz</b> - Dostępna lokata w skarbcu 50% - 7 dni.<br>
<b>Kapłan</b> - Bonusy ze świątyni gildyjnej +30%.<br>
<b>Jasnowidz</b> - Większa szansa wygranej na loterii oraz większe nagrody.<br>
<b>Kucharz</b> - Gotowanie +100 .<br>
<b>Hutnik</b> - Hutnictnictwo + 100.<br>
<b>Drwal</b> - Drwalnictwo + 100.<br>
<b>Górnik</b> - Górnictwo + 100.<br>
<b>Hodowca</b> - Hodowla + 100.<br>
<b>Jubiler</b> - Jubilerstwo + 500.<br>
<b>Farmer</b> - Zielarstwo + 100.<br>
<b>Alchemik</b> - Alchemia + 100.<br>
<b>Stolarz</b> - Stolarstwo + 100.<br>
<b>Kowal</b> - Kowalstwo + 100.<br>');
		}

		if ($_GET['select'] == 'Szaman') 
		{
			define('C_CLASS_INFO', '<b>Klasa:</b> Szaman <br><br>
<b>Opis:</b><br>
Szaman (dowolnej religii) zaspokaja duchowe potrzeby wspólnoty. Jest zarówno obrońcą, jak i uzdrowicielem. Nie jest jednak niechętny w walce. W przypadku zagrożenia złem szaman bez wahania odnajdzie je i zniszczy. Dotyczy to również złych szamanów, którzy jednakże niszczą dobro.
<br><br><b>Umiejętności:</b><br>
- klasa z bonusami do walki.<br>
- hutnictwo<br>
- drwalnictwo<br>
- górnictwo<br>
- hodowla<br>
- zielarstwo<br>
- podstawowe jubilerstwo<br></p><br>
<br>Dostępne podklasy od 5 lvlu:<br>
<b>Łotr</b> - Możliwość kradzieży kieszonkowej.<br>
<b>Strzelec</b> - Strzelectwo + 100.<br>
<b>Rycerz</b> - Walka bronią + 100.<br>
<b>Voodoo</b> - Rzucanie czarów + 100.<br>
<b>Nekromanta</b> - Wstęp na cmentarz.<br>
<b>Szpieg</b> - Możliwość sprawdzania statystyk gracza.<br>
<b>Skrytobójca</b> - Unik i zręczność + 100.<br>
<b>Tropiciel</b> - Unik + 150.<br>
<b>Pirat</b> - Większe wydobywanie na wyspach.<br>
<b>Krwiopijca</b> - Możliwość napajania się krwią gracza.<br>
<b>Podróżnik</b> - Ma o 50% tańsze rekwizyty w Opuszczonej Kuźni.<br>
<b>Akcjonariusz</b> - Sprzedaż akcjii na giełdzie za 200% ceny.<br>
<b>Handlarz</b> - Dostępna lokata w skarbcu 50% - 7 dni.<br>
<b>Kapłan</b> - Bonusy ze świątyni gildyjnej +30%.<br>
<b>Jasnowidz</b> - Większa szansa wygranej na loterii oraz większe nagrody.<br>
<b>Kucharz</b> - Gotowanie +100 .<br>
<b>Hutnik</b> - Hutnictnictwo + 100.<br>
<b>Drwal</b> - Drwalnictwo + 100.<br>
<b>Górnik</b> - Górnictwo + 100.<br>
<b>Hodowca</b> - Hodowla + 100.<br>
<b>Jubiler</b> - Jubilerstwo + 500.<br>
<b>Farmer</b> - Zielarstwo + 100.<br>
<b>Alchemik</b> - Alchemia + 100.<br>
<b>Stolarz</b> - Stolarstwo + 100.<br>
<b>Kowal</b> - Kowalstwo + 100.<br>');
		}

		if ($_GET['select'] == 'Łowca') 
		{
			define('C_CLASS_INFO', '<b>Klasa:</b> Łowca <br><br>
<b>Opis:</b><br>
Łowca to wojownik, myśliwy i leśnik. Biegle posługuje się bronią i jest wytrwałym znawcą lasu. Często chroni i pomaga zagubionym wędrowcom i wieśniakom.
Lecz jego głównym zajęciem jest polowanie. Łowca musi być silny, mądry i znać naturę, by żyć pełnią życia.<br><br><b>Umiejętności:</b><br>
- znakomity w walkach PVP.<br>
- hutnictwo<br>
- drwalnictwo<br>
- górnictwo<br>
- hodowla<br>
- zielarstwo<br>
- podstawowe jubilerstwo<br>
- walka<br></p><br>
<br>Dostępne podklasy od 5 lvlu:<br>
<b>Łotr</b> - Możliwość kradzieży kieszonkowej.<br>
<b>Strzelec</b> - Strzelectwo + 100.<br>
<b>Rycerz</b> - Walka bronią + 100.<br>
<b>Voodoo</b> - Rzucanie czarów + 100.<br>
<b>Nekromanta</b> - Wstęp na cmentarz.<br>
<b>Szpieg</b> - Możliwość sprawdzania statystyk gracza.<br>
<b>Skrytobójca</b> - Unik i zręczność + 100.<br>
<b>Tropiciel</b> - Unik + 150.<br>
<b>Pirat</b> - Większe wydobywanie na wyspach.<br>
<b>Krwiopijca</b> - Możliwość napajania się krwią gracza.<br>
<b>Podróżnik</b> - Ma o 50% tańsze rekwizyty w Opuszczonej Kuźni.<br>
<b>Akcjonariusz</b> - Sprzedaż akcjii na giełdzie za 200% ceny.<br>
<b>Handlarz</b> - Dostępna lokata w skarbcu 50% - 7 dni.<br>
<b>Kapłan</b> - Bonusy ze świątyni gildyjnej +30%.<br>
<b>Jasnowidz</b> - Większa szansa wygranej na loterii oraz większe nagrody.<br>
<b>Kucharz</b> - Gotowanie +100 .<br>
<b>Hutnik</b> - Hutnictnictwo + 100.<br>
<b>Drwal</b> - Drwalnictwo + 100.<br>
<b>Górnik</b> - Górnictwo + 100.<br>
<b>Hodowca</b> - Hodowla + 100.<br>
<b>Jubiler</b> - Jubilerstwo + 500.<br>
<b>Farmer</b> - Zielarstwo + 100.<br>
<b>Alchemik</b> - Alchemia + 100.<br>
<b>Stolarz</b> - Stolarstwo + 100.<br>
<b>Kowal</b> - Kowalstwo + 100.<br>');
		}
	}

	if ($_GET['action'] == 'deity')
	{
		if ($_GET['select'] == 'azuth') 
		{
			define('C_DEITY_INFO', '<p>Bóg natury, otacza wszystkie dobre istoty opieką i dba o nich. Złych przeklina i stanowczo osłabia.  (Tartus)</p>');
		}

		if ($_GET['select'] == 'anea') 
		{
			define('C_DEITY_INFO', '<p>Bogini błyskawic, gdy przemierza się po Alear to wywołuje burze z wyładowywaniami. Patronka Magów  (Anea)</p>');
		}

		if ($_GET['select'] == 'meltis') 
		{
			define('C_DEITY_INFO', '<p>Bóg wojny, mawiają że uczestniczy, w wielkich bitwach. Pojawia się, w centrum i pomaga swoim wyznawcom. (Meltis)</p>');
		}

		if ($_GET['select'] == 'dintel')
		{
			define('C_DEITY_INFO', '<p>Bóg osób walecznych lecz rozsądnych (przeciwieństwo Meltisa).  (Dintel)</p>');
		}

		if ($_GET['select'] == 'yala')
		{
			define('C_DEITY_INFO', '<p>Patronuje niewierności, oszustwu, okrucieństwu i nikczemności. Uosabia żądzę władzy i złą władzę. Jest też patronką zimnych uwodzicieli i osobników wykorzystujących cudze uczucia. Bywa patronką miłości - ale tylko tej nieszczęśliwej (Yala)</p>');
		}

		if ($_GET['select'] == 'unrod')
		{
			define('C_DEITY_INFO', '<p>Dla większości ludzi pozostaje w najlepszym przypadku nieznany, w najgorszym jest postrzegany jako bóstwo, od którego lepiej trzymać się z daleka. Noc bowiem to pora złych duchów. Blade światło księżyca przyciąga ponure istoty, które boją się słonecznego blasku.
Blada poświata Unrodowego oblicza doprowadza wielu ludzi o słabym duchu do szaleństwa. (Unrod)</p>');
		}

		if ($_GET['select'] == 'luzubal')
		{
			define('C_DEITY_INFO', '<p>Nazywano go prostym Bogiem. Opiekuje się ziemią i jest strażnikiem równowagi w przyrodzie. (Luzubal)</p>');
		}

		if ($_GET['select'] == 'gulgard')
		{
			define('C_DEITY_INFO', '<p>Gulgard jest okrutnym bogiem rozlewu krwi i wojen. Kocha bitewny szał i hojnie wynagradza swoich najbardziej krwiożerczych wyznawców. (Gulgard)</p>');
		}

		if ($_GET['select'] == 'artis')
		{
			define('C_DEITY_INFO', '<p>Artis to bóg opiekujący się zmarłymi, odprowadza ich do zaświatów i chroni ich dusze przed zagubieniem się. Mówi się, że przybywa po umierających pod rożnymi postaciami. (Artis)</p>');
		}
	}

	if ($_GET['action'] == 'place')
	{
		if ($_GET['select'] == 'Meredith') 
		{
			define('C_PLACE_INFO', '<p>yyyy</p>');
		}

		if ($_GET['select'] == 'agarakar')
		{
			define('C_PLACE_INFO', '<p>xxx</p>');
		}
	}

?>
