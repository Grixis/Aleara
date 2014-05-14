<?php
/**
 *   File functions:
 *   Polish language for temple
 *
 *   @name                 : temple.php
 *   @copyright            : (C) 2004,2005,2006 Vallheru Team based on Gamers-Fusion ver 2.5
 *   @author               : thindil <thindil@users.sourceforge.net>
 *   @author               : Zamareth <zamareth@users.sourceforge.net>
 *   @version              : 1.4
 *   @since                : 13.09.2007
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
// $Id: temple.php 678 2006-10-06 11:29:24Z thindil $

define('ERROR', 'Zapomnij o tym!');
define('YOU_DEAD', 'Ponieważ jesteś martwy, nie możesz tutaj wejść!');
define('NO_ENERGY', 'Nie masz tyle energii!');

define('TEMPLE_INFO', $player -> location == 'Altara' ? '<p>Witaj w świątyni. Możesz tutaj modlić się do boga' : '<p>Po raz kolejny wędrujesz po Coweritan. Miasto jest dosyć ładne, ale całość psuje dym bez przerwy unoszący się w powietrzu. Również jest tu dosyć mało światła. Fakt słyszałeś o planach zainwestowania w rurociągi, które by ciągnęły gaz możliwy do spalania i dający sporo światła, ale to spekulacje. Chodzisz gdzie popadnie. To wędrujesz po rynku szukając atrakcyjnych ofert, to szwędasz się po prostu ulicami. Teraz ciekawość zawiodła cię blisko wielkiego budynku <i>- Ciekawe co tam jest...</i> - myslisz sobie. Budynek wygląda dosyć dziwnie. Z przodu dosyć prostokątny, z jakiegoś egzotycznego kamienia. Nie było by to dziwne gdyby nie to, że z dachu wychodziło osiem wież. Były wysokie i grube. Z ciekawością podchodzisz do drzwi, a następnie wchodzisz. Ukazała ci się wielka prostokątna sala z dziewięcioma drzwiami. Po chwili podchodzi do ciebie postać odziana w długie szary.
<br><i>- Witam w świątyni. W czym mogę pomóc?
<br>- A więc to jest świątynia? ... Głupie pytanie...
<br>- Fakt. A więc w czym mogę pomóc?
<br>- Mógłbyś mi opowiedzieć o tym miejscu?
<br>- Oczywiście. Znajdujesz się w wielkiej świątyni Coweritan. Jak widzisz jest tu dziewięć drzwi. Te - postać wskazuje na drzwi ozdobione symbolem książki - prowadzą do biblioteki świątynnej. Jest tam wiele starożytnych tekstów opowiadających o bogach naszej krainy. Pozostałe osiem prowadzi do kaplic poszczególnych bogów, które umieszczone są w wieżach. Poza tym możesz pomóc naszej świątyni. Przykładowe zajęcia to katalogowanie ksiąg, a także czyszczenie kaplic. Bądź pewien że twój bóg cię wynagrodzi za to. A więc co chcesz zrobić?</i> ');
define('TEMPLE_INFO2', 'Aby Twoja modlitwa została wysłuchana, musisz posiadać odpowiednią ilość Punktów Wiary. Punkty zdobywasz służąc w świątyni. To czym Ciebie obdaruje bóg zależy tylko od niego.</p>');

define('A_WORK', 'Pracuj dla świątyni');
define('A_PRAY', 'Módl się do boga');
define('A_BOOK', 'Podejdź do księgi');
define('A_PANTHEON', 'Panteon '.$gamename);

if (isset($_GET['view'])) {
switch ($_GET['view'])
{
    case 'service':
        define('YOU_WORK', 'Pracowałeś przez pewien czas dla świątyni i zdobywasz ');
        define('YOU_WORK2', ' Punkt(ów) Wiary');
        define('TEMPLE_INFO_W', 'Pracując dla świątyni, sprawiasz, że');
        define('TEMPLE_INFO2_W', 'spogląda na ciebie przychylniejszym okiem. Za każde 0,5 energii zdobywasz 1 Punkt Wiary. Czy chcesz służyć w świątyni?');
        define('I_WANT', 'Chcę uzyskać');
        define('T_AMOUNT', 'punktów wiary');
        define('A_WORK_2', 'Pracuj');
        define('NO_DEITY', 'Nie możesz pracować w świątyni ponieważ jesteś ateistą!');
        break;
    case 'prayer':
        define('CHOOSE_PRAYER', 'Wybierz żarliwość (koszt w pkt. energii) Twojej modlitwy:');
        define('NO_PW', 'Nie masz Punktów Wiary aby się modlić!');
        define('YOU_PRAY', 'Modliłeś się przez pewien czas do ');
        define('BUT_FAIL', '. Niestety został(a) głuchy(a) na twe prośby.');
        define('NO_DEITY', 'Nie możesz modlić się w świątyni ponieważ jesteś ateistą!');
        define('NO_RACE', 'Nie możesz modlić się w świątyni ponieważ nie wybrałeś jeszcze rasy!');
        define('YOU_HAVE', 'Posiadasz już błogosławieństwo od boga!');
        define('P_SUCCESS', ', który(a) okazał(a) się zadowolony(a) z twej pobożności. Otrzymujesz błogosławieństwo do ');
        define('P_DEAD', ' lecz on(a) okazał(a) się nieprzychylny(a). Twe modły rozdrażniły bóstwo. Nagle posąg ');
        define('P_DEAD2', ' wystrzelił w Twoją stronę błyskawicę, która uśmierciła Cię na miejscu....');
		define('PERM_BONUS', 'Otrzymałeś trwałą premię +1 do ');
        define('AGI', 'Zręczności');
        define('STR', 'Siły');
        define('INTELI', 'Inteligencji');
        define('WIS', 'Siły Woli');
        define('SPE', 'Szybkości');
        define('CON', 'Wytrzymałości');
		define('HITPTS', 'Punktów Życia');
        define('SMI', 'Kowalstwa');
        define('ALC', 'Alchemii');
        define('FLE', 'Stolarstwa');
        define('WEA', 'Walki bronią');
        define('SHO', 'Strzelectwa');
        define('DOD', 'Uników');
        define('CAS', 'Rzucania czarów');
        define('BRE', 'Hodowli');
        define('MINI', 'Górnictwa');
        define('LUMBER', 'Drwalnictwa');
        define('HERBS', 'Zielarstwa');
        define('ENERGY_PTS2', 'pkt energii');
        define('PRAY1', 'Pacierz');
        define('PRAY2', 'Modlitwa');
        define('PRAY3', 'Psalm');
        define('PRAY4', 'Adoracja');
		define('PRAY5', 'Trwały bonus +1 do cechy (100 PW) / umiejętności (300 PW)');
        define('BLESS_FOR', 'Proś o błogosławieństwo do (w nawiasie koszt w pkt. wiary): ');
        define('JEWEL', 'Jubilerstwa');
		define('METAL', 'Hutnictwa');
        break;
    case 'book':
        define('NEXT_PAGE', 'Następna strona');
        define('BOOK_INFO', '<p>Podchodzisz bliżej do cokołu i uważnie przyglądasz się znalezisku. Zdziwiony jesteś iż dopiero teraz ją zauważyłeś. Księga wygląda na starą, jej okładka wykonana jest z brązowej skróry, na grzbiecie książki widzisz nie znany sobie symbol. Zaciekawiony ostrożnie otwierasz księgę...</p><br />');
        $arrText = array('');
        break;
    case 'pantheon':
        $arrNames = array('Tartus', 'Anea', 'Meltis', 'Dintel', 'Yala', 'Unrod', 'Luzubal', 'Gulgard', 'Artis');
        $arrDesc = array('<p><b>Powiedzenia</b>: <i>Niech Cię Tartus pochłonie...</i><br />
<b>Inne stosowane nazwy</b>: <i>Pan Ognia</i>, <i>Władca Piekieł</i></p>
<p>Niegdyś mógł się mierzyć z najpotężniejszym z Wielkiej Czwórki. Jednak, gdy 
jego zachłanność wzięła górę nad cierpliwością i szacunkiem wobec innych Bogów, 
został wygnany z Panteonu. Zbyt szybko zdradził swoje plany podporządkowania 
sobie reszty Bogów, zwłaszcza tych którzy stanowili władzę nad ówczesnym 
światem. Wykluczony z boskiej społeczności zaszył się w odmętach góry Ephel i 
rozpoczął przygotowania do wojny. W swoim zacietrzewieniu i rządzy zemsty 
postanowił rzucić wyzwanie pozostałym Bogom. W krótkim czasie zebrał potężną 
armię demonów, czartów i wszelkiego innego plugastwa, których skusił wizją 
plądrowania i uciskania podbitych terenów.</p>
<p>Z początku udało mu się zaskoczyć swoich wrogów. W epickiej walce pokonał i 
upokorzył Karsertha - uważanego za niezrównanego mistrza oręża, a o tym 
pojedynku do dziś bardowie śpiewają ballady. Niestety Tartus zbyt szybko ujawnił 
swoje wojenne zamiary i został otoczony w swojej twierdzy i pokonany. Karą za 
sprzeniewierzenie się boskim ideałom było wieczne strącenie w międzyplanarną 
nicość, pozbawienie większości mocy jaką wówczas posiadał oraz skazanie na 
zapomnienie.</p>
<p>Dzięki własnej silnej woli oraz niewątpliwej pomocy z zewnątrz Tartus powstał 
z otchłani niebytu. Jednak tym razem jego moc nie pozwalała mu na podboje i 
wojny. Jego egzystencja na planie rzeczywistym wymagała ciągłego czerpania ze 
źródeł piekielnej mocy, jaką zapewniały mu trzewia wulkanicznej góry. Trudno 
było mu zaakceptować swoje słabości. Sfrustrowany zaszył się w odmętach planu 
piekielnego, bez którego nie mógł czerpać nadwątlonych mocy.</p>
<p>Gnuśniał z wieku na wiek stając się raczej pośmiewiskiem i dziwakiem, niż 
budzącym grozę potężnym władcą piekieł. Tartus wyglądem przypomina elfickiego 
wojownika - smukły i wysoki, o dumnej, wyprostowanej postawie. Na ramiona 
spływały mu proste czarne włosy, które kontrastowały z blado popielatą skórą. 
Jego twarz mimo, iż nie była pozbawiona piękna, to jednak miała marmurowe, 
nieprzystępne, puste oblicze. Tartus najczęściej miał oczy przymknięte - jego 
moce telepatyczne pozwalały mu nie korzystać ze zmysłu wzroku. Jednak biada 
temu, który ujrzał wzrok Władcy piekieł - z nad powiek rozbłyska od razu furia 
piekielnego żaru. Niczym para małych słońc spojrzenie Tartusa wypala nie tylko 
materię, ale także wysysa wszelką mentalną energię, pozbawiając przeciwnika 
wszelkiego oporu. Mocy tej jednak Pan Ognia używa niezwykle rzadko - tylko w 
przypadkach zagrożenia lub niekontrolowanej wściekłości, albowiem wymaga to od 
niego zaczerpnięcia ogromnych pokładów magicznej energii.</p>
<p>Kolejną pozostałością po dawnej potędze, której grozę siał po wielu krainach, 
stanowią nieczęsto używane skrzydła wyrastające Mu znad łopatek. Niegdyś jarzyły 
się one ognistym blaskiem, a gdy unosiły swojego właściciela, przypominały 
majestatycznego feniksa. Dziś są juz tylko cieniem dawnej okazałości - skarlałe, 
pozbawione blasku i praktycznie nie używane, wiszące bez pożytku. Taką cenę 
przypłacił Tartus za swoją rządzę władzy. Za najpotężniejszego Boga jaką znały 
wszystkie znane Krainy, stał się niczym upadły anioł - wyrzutkiem boskiego 
Panteonu.</p>
<p>W prawej ręce zakończonej długimi w kształcie szponu paznokciami, dzierżył 
długi miecz - wykuty jeszcze przez mistrza Helluvarta - doskonale wyważony 
bastard z wygrawerowanymi na klindze prastarymi runami - dodającymi swojemu 
właścicielowi dodatkowe siły i odporności. Był to niebezpieczny oręż, którym do 
dziś Tartus posługuje się z godną podziwu zręcznością.</p>
<p>Druga ręka była z pozoru wolna. Jednak w każdej chwili z wnętrza dłoni może 
się wyłonić ognista sfera, emanacja substancji z jakiej stworzony został Pan 
Ognia, żywioł, który okiełznać i naginać do własnej woli potrafi jedynie Tartus. 
Kiedyś była to władza niemal nieograniczona, dzisiaj pozwalająca jedynie na 
przywoływanie demonów i czartów oraz władanie magią ognia. Stąd właśnie w 
dzisiejszych czasach postać Tartusa jest rozpoznawana jako Władcę Piekieł i 
demonów.</p>
<p>Z racji tego, że śmiertelnicy zwykli bać się wszelkiego rodzaju chochlików, 
sukubów czy diabłów, także przylgnęła do niego nieprawdziwa opinia, jakoby 
Tartus miał także władzę nad życiem i śmiercią. Jest to taka sama prawda jak to, 
że mleko jest czerwone.</p>
<p>Kult Tartusa nie jest w Królestwie Orodlinu zakazany - oficjalnie władza nie 
ingeruje w religijne preferencje swoich obywateli, przynajmniej do momentu kiedy 
dzięki niej nie czyni się innym krzywdy lub nie działa na szkodę państwa. 
Jednakowoż wielu spośród świątynnych kapłanów i wędrownych wieszczy czy 
kaznodziejów Pan Ognia jest uosobieniem czystego zła, którym straszą pospolitą 
gawiedź. Stąd utarło się powiedzenie: &quot;Niech cię Tartus pochłonie&quot; lub 
&quot;Piekielne męczarnie&quot;. Dlatego też wyznawcy nie cieszą się popularnością wśród 
zwykłych obywateli Orodlinu i raczej publicznie nie demonstrują swojej wiary. 
Były nawet przypadki kilku lokalnych pogromów, gdzie wymordowano wiernych, 
którzy pomimo tortur nie wyrzekli się swojej wiary - paląc ich na stosie. Mając 
te wydarzenia w pamięci, wyznawcy Tartusa często spotykają się na tajnych 
wiecach i zgromadzeniach przypominających loże masońskie, co daje dodatkowo 
negatywne wrażenie.</p>
<p>Mimo swojej złej i demonicznej sławy w niektórych kręgach Pan Ognia cieszy 
się wielkim szacunkiem. I nie chodzi tutaj tylko o piromanów i czarodziejów - 
maniaków, ale o poważnych uczonych i magów, rzemieślników, a nawet całe 
plemiona. Napisano wiele interesujących traktatów odnośnie magii ognia i w 
każdym z nich centralne miejsce stanowił Tartus, który stał się idolem i 
patronem studiów nad tym żywiołem zwłaszcza z zakresu wywoływań, kreowania 
ognistej materii i w końcu przywoływań. W swoim szczytowym momencie Pan Ognia 
był mistrzem nad mistrzami w posługiwaniu się ognistym żywiołem, co niewątpliwie 
zachwyca wielu uczonych w tej dziedzinie.</p>
<p>Co więcej Tartus bowiem poprzez swoją naturę potrafił naginać wolę wszelkich 
demonów zamieszkujących piekielne plany i otchłanie. Sztuka ta inspirowała wielu 
przywoływaczy, którzy studiowali i praktykowali magiczne portale, bramy i znaki 
łączące plan materialny z wyższymi planami.</p>
<p>Wielu spośród rzemieślników, zwłaszcza hutników i metalurgów podczas swojej 
pracy wznoszą modły o przychylność Pana Ognia, aby ich wyroby były jak 
największej jakości. Tartus słynął niegdyś z nagradzania swoich zwolenników, na 
których spływała łaska i błogosławieństwo. Uważane to było za niezwykły 
zaszczyt, albowiem nieczęsto Pan Ognia obłaskawiał zwykłych śmiertelników.</p>
<p>Niegdyś chodziły plotki, że jedno plemię elfów zostało na trwale namaszczone 
przez Władcę Piekieł. Zwano ich Tallamarami. Potrafili oni władać żywiołem ognia 
na podobieństwo swojego patrona, a także wytwarzać niezwykłe magiczne 
przedmioty. Jednak nikt do końca nie potwierdził istnienia tego szczepu. 
Niektórzy twierdzą, że ognista krew przemieszała się z krwią innych ras, co 
wzburzyło Tartusa na tyle, że zdradził i opuścił swój wybrany naród. Inni zaś 
uważają, że to jedynie bujda starych i zidiociałych bardów.</p>
<p>Tartus budzi duży respekt także wśród wielu wojowników. Widzą w Nim swojego 
patrona i bohatera. Każdy z nich emocjonuje się mitycznym opisami walk jakie 
stoczył Władca Piekieł, a tym bardziej pragnie dzierżyć tak doskonałą broń. 
Zdarzają się szkoły fechmistrzów, a nawet całe zakony, których członkowie 
udoskonalają swój wojenny kunszt z imieniem Tartusa na ustach.</p>
<p>Co by nie powiedzieć postać Tartusa jest jedną z bardziej kontrowersyjnych 
wśród całego panteonu czczonego w Królestwie Orodlinu. Opowieści o Panu Ognia są 
pełne sprzeczności i tajemnic, sięgających jeszcze czasów pradawnych, a przez to 
mało udokumentowanych. Wielu spośród tych, co zgłębiali sekrety Tartusa ginęło w 
niejasnych okolicznościach, jakby sam Władca Piekieł zazdrośnie strzegł swojej 
tożsamości. Tartus daje błogosławieństwa do: </p>
<ul class="sword">
				<li>Walki bronią</li>
				<li>Rzucania czarów</li>
				<li>Hutnictwo</li>
				<li>Inteligencji</li>
				<li>Siły</li>
		</ul>		
', '<p><i>Miał taki ten kapelusz w gwiazdki, spiczasty taki. I wsadził tam rękę, ja 
patrzę, a on wyciąga zająca! Szarego, wierzgającego jeszcze. Wiem jak wygląda 
żywy królik i to kropka w kropkę ten tak wyglądał. Tośmy mu manto spuścili, 
zająca zabraliśmy i upiekliśmy na ognisku. Minę magik miał nietęgą, ha ha! 
Bredził, że Anea nas pokarze. A kto by wierzył w takie brednie? Szkoda tylko, że 
nie znaleźliśmy więcej zająców, chociaż pocięliśmy kaszkiet na kawałeczki...</i> 
- Rozbójnik z okolic Meredith o iluzjoniście z trupy cyrkowej, napotkanej na 
gościńcu</p>
<p>Mówi się, że Anea to bogini magii i wiedzy tajemnej. Starzy magowie siedzący 
w swoich wysokich wieżach twierdzą, że jest zimną, mściwą kobietą – ni to elfką, 
ni to nieumarłą. Istotą bez wieku, o żółtych, zapadniętych oczach i wystających 
kościach policzkowych. Ponoć jej siwe włosy sięgają najgłębszych rozpadlin w 
morskim dnie, podczas gdy ona sama czuwa w posępnej, sięgającej chmur wieżycy 
nad równowagą Magii tego świata. Ci sami czarnoksiężnicy logicznie wnoszą, że 
skoro Anea jest uosobieniem Mądrości, siłą rzeczy musi mieć w swojej opiece 
wszystkich mędrców – co w tym przypadku oznacza: starców z brodami. Im dłuższą, 
tym lepszą. Toteż dzieci Anea nie lubi, a wręcz uważa za element szkodliwy. W 
związku z tymi refleksjami ukuto rozmaite powiedzenia, takie jak ironiczne 
„Kochać kogoś jak Anea dzieci” oraz fatalistyczne „Dzieciństwo jest jak ospa – 
każdy musi przez to przejść”.</p>
<p>To jednakże tylko część prawdy, dotycząca wyłącznie bogini znanej jako Anea 
Mądra. Bowiem istota ta ma więcej oblicz. Jedno z nich to Anea Kuglarka – tę z 
kolei wyznają wędrowni iluzjoniści cyrkowi i kuglarze, pokazujący swoje sztuczki 
ku uciesze gawiedzi na rogach placów. Twierdzą oni, że to właśnie bogini 
sprawia, że ich ręce są sprytniejsze niż oko, że są w stanie omamić tłum widzów 
i wmówić rozsądnym ludziom, że dokonują rzeczy niezwykłych. Wedle tych magików, 
Anea umiłowała sobie iluzję kiedy zorientowała się, że tym sposobem otwierają 
się przed boginią zupełne nowe możliwości, na przykład kiedy doda sobie urody. 
Od tamtej pory bogini jest zdania, że trochę oszustwa w życiu nie zaszkodzi, 
skoro przecież w efekcie wszyscy są zadowoleni – oszukani czują satysfakcję z 
obcowania z czymś fantastycznie wspaniałym, a oszukujący mają całkiem 
niefantastyczny, aczkolwiek równie wspaniały, zysk.</p>
<p>Na potwierdzenie tych teorii, owi magicy rozwieszają przy swoich kramikach 
gobeliny z wizerunkiem bogini – najczęściej jest to smukła, eteryczna kobieta o 
białym licu, w błękitnej, zwiewnej szacie. Miedzianorude włosy spływają 
kaskadami po ramionach, a w dłoniach bogini trzyma talię kart i kryształową 
kulę. Postać ma tajemniczy, intrygujący uśmiech i wpatruje się wyzywająco w 
publiczność.</p>
<p>Mówi się, że Anea Kuglarka lubi dzieci, bo przecież sztuczki ze znajdowaniem 
monety za uchem czy z wyjmowaniem zwierząt z kapelusza są przeznaczone głównie 
do rozbawienia młodszej widowni. Jednakże złośliwi dodają, że owa <i>młodsza 
widownia</i> stanowi w oczach bogini tylko głupkowate, naiwne narzędzie do 
przekonania rodziców, żeby chętniej pozbyli się swojego złota.</p>
<p>Wyobrażenie Anei Kuglarki jest bardzo bliskie koncepcji Anei Widzącej. Tę z 
kolei wyznają wróżki i jasnowidze. Wizerunek bogini, niemal identyczny, różni 
się jedynie ciemniejszą kolorystyką. Anea Widząca często ma kruczoczarne włosy, 
w których błyszczą gwiazdy. W szklanej kuli często widać błyskawice. </p>
<p>Wróżbici wszelkiego asortymentu utrzymują, że Anea Widząca dała im moc 
patrzenia w przyszłość i pragnie, żeby ten dar wykorzystywali dla dobra 
śmiertelników. Co bardziej radykalni nie przyjmują za swoje usługi opłaty innej, 
aniżeli kawę lub herbatę, z których fusów będą mogli później wróżyć kolejnym 
klientom. Ponoć Anea nie lubi pieniędzy, bo Magia to nie nierządnica, żeby nią 
handlować. Sceptycy co prawda twierdzą, że zawsze musi to być kawa i herbata 
pierwszego gatunku, bo jasnowidze później sprzedają je za granicą, a wróżą i tak 
cały czas z garści błota i kilku zeschniętych liści jesionu, ale przecież zawsze 
znajdzie się ktoś, kto szykanuje inne grupy społeczne.</p>
<p>Jednostki wyznające bogini Aneę spotyka się wśród każdej rasy. Nawet u 
jaszczuroludzi czy krasnoludów, choć paranie się czarami w jakiejkolwiek postaci 
nie jest u nich popularne. Toteż ani krasnoludy, ani jaszczuroludzie nie 
wytworzyli wizerunku bogini specyficznego dla ich ras. Korzystają z wyobrażeń 
elfów, ludzi, gnomów i niziołków. Jeśli chodzi o te dwie ostatnie rasy, to Anea 
u nich ma po prostu trochę weselszy uśmiech, pulchniejszą twarz i krótsze nogi. 
Hobbicka Anea Kuglarka i Anea Widząca zazwyczaj ma w kryształowej kuli nie 
błyskawice, a słońce.</p>
<p>Kult bogini jest bardzo rozproszony. W lasach można spotkać kapliczki i 
ołtarzyki poświęcone Anei – Strażniczce Pierwotnych Mocy. Stawiają je ci, którzy 
wierzą, że cała Magia pochodzi z Natury i tym samym Anea jest opiekunką roślin i 
zwierząt. W czasie równonocy wiosennej druidzi, szamani i znachorzy wędrują do 
lasów, by złożyć w ofierze lecznicze zioła i odurzające napary w niewielkich 
flakonikach.</p>
<p>W każdym mieście Anea Mądra ma najwyżej jedną świątynię. Jest to wtedy 
strzeliste, posępne gmaszysko o wysokich oknach zaciągniętych ciężkimi kotarami, 
do którego wnętrza ma wstęp jedynie kapłan, który podczas przesilenia zimowego 
musi złożyć krwawą ofiarę w kłębach dymu i odprawić tajemne rytuały. Kapłan taki 
jest wybierany spośród zrzeszonych magów co roku.</p>
<p>Anea Kuglarka i Anea Widząca nie mają świątyń ani ołtarzy do składania ofiar. 
Iluzjoniści i magicy przed każdym występem mają w zwyczaju palić kadzidło przed 
wspomnianym wcześniej gobelinem z wizerunkiem bogini.</p>
<p>Twierdzi się, że srebrna biżuteria, taka jak medaliony, pierścienie i diademy 
pomagają utrzymać w ryzach Magię. Dlatego też zarówno kuglarze, jak i magowie 
często obwieszają się różnego rodzaju talizmanami i amuletami. Jedna Anea nie 
nosi biżuterii – na znak tego, że nie musi. Magia słucha bogini zawsze i 
wszędzie. A bez aprobaty Anei, żadne zaklęcie nie może się udać.</p>
<p>Jednak ani talizmany, ani składanie ofiar nie ocali śmiertelnika, jeśli 
zasłuży on na gniew bogini. A potrafi być nader złośliwa. Mówi się, że jeśli 
kuglarzowi nie powiedzie się występ, rozsypią się wszystkie karty z rękawa albo 
zając ugryzie w palec wskazujący podczas wyciągania zwierzaka z kapelusza, jest 
to kara za to, że pechowy magik zapomniał o kadzidle. Jeśli zła passa trwa 
dłużej, albo ktoś z gapiów wezwie straż miejską i oskarży magika o oszustwo, 
najprawdopodobniej sztukmistrz musiał wcześniej drwić z bogini albo w jakiś inny 
sposób poważnie jej uwłaczać.</p>
<p>Anea Mądra wcale nie jest łagodniejsza, a wręcz przeciwnie – na niewiernych z 
lubością zsyła parchy na wstydliwych częściach ciała albo sprawia, że 
śmiertelnikowi nos porasta twardą szczeciną w odcieniu magenta. Anea Widząca 
potrafi odebrać bluźniącym przeciwko niej wróżbitom dar jasnowidzenia.</p>
<p>Znany jest fakt, że na morzu, z dala od brzegu nie można używać czarów. Być 
może jest to potwierdzeniem teorii, że Magia pochodzi z ziemi, z Natury. A być 
może ma to uzasadnienie w plotkach, że bogini Anea cierpi na chorobę morską, 
dlatego zresztą tkwi w wieży, a w wodzie moczy tylko swoje długie włosy – może 
później umyć się nimi jak gąbką, bez wchodzenia do wanny, gdyż nawet takie fale 
mają zgubny wpływ na delikatny, boski żołądek.</p>
<p>Stąd zresztą złośliwe powiedzenie, że ktoś „robi coś tak często, jak Anea 
pływa” – czyli wcale. Ponoć talizmanów nie wolno myć wodą, bo utracą swoją 
magiczną moc.</p>
<p>Anea obdarza błogosławieństwem do: </p>
<ul class="sword">
				<li>Rzucania czarów</li>
				<li>Uników</li>
				<li>Siły woli</li>
				<li>Zręczności </li>
</ul>
', '<p><i>Meeeeltiiis!</i> – mówi się, że drwale czasem stosują przy ścinaniu drzew 
w celu ostrzeżenia innych przed walącym się drzewem, niekiedy używając (jak 
twierdzą) bardziej wygodnej formy <i>tiiiis-Meeeel!</i><br />
<i>Piękna jak Meltis</i> – znaczenie tego zdania bywa niejasne ze względu na 
trudności w zrozumieniu szczerości intencji tego zdania w wykonaniu oddanych 
wyznawców.<br />
<i>Heeej!</i>, <i>Zdrowieee!</i> - najczęściej używane podczas składania hołdów 
bogini.</p>
<p>Meltis objawia się tylko wiernym i zazwyczaj przybiera postać silnie 
umięśnionej krasnoludzicy, którą uważa za symbol seksu i ciężkiej pracy. Wierni, 
którym się objawiła witają ją zazwyczaj dyplomatycznym uśmiechem oraz sypią 
komplementami jak z rękawa. Aby przypodobać się Meltis trzeba mieć wybitne 
zdolności w prawieniu komplementów w sposób choćby przypominający szczerość, co 
niestety wychodzi nielicznym. Meltis z racji swego sposobu objawiania się, jak 
również ideologicznego patronatu nad męstwem, siłą oraz wszelkimi rzemiosłami 
wymagającymi krzepy jest bardzo popularna wśród krasnoludów, którym nieco lepiej 
wychodzi komplementowanie bogini, jak również modlitwa i składanie jej hołdów.</p>
<p>Wierzący w boginię Meltis nie negują istnienia innych bóstw, jednak swoją 
wiarą starają się udowodnić oddanie i wyższość siły oraz wytrwałości każdego nad 
innymi cechami potrzebnymi w życiu. Wśród wierzących w Meltis wierni wybierają 
sobie kapłanów oraz odprawiają hołdy w świątyni, zwyczajowo świątynie poświęcone 
tej bogini cieszą się największą popularnością wśród narzeczonych jeżeli chodzi 
o śluby (choć niektórym parom nie odpowiada specyfika świątyni oraz hołdów 
odprawianych podczas ceremonii). Świątynie te z reguły budowane są w miastach i 
co większych wioskach ze względu właśnie na ową popularność przy odprawianiu 
ślubów w tych świątyniach, jednak pomniejsze kapliczki można napotkać także 
podczas podróży w górach, a nawet wewnątrz jaskiń. Grupy podróżnych nieraz 
korzystały z tych jaskiniowych kaplic gdy pogoda była niesprzyjająca do dalszej 
wędrówki, gdy wędrowców zastała noc lub gdy dopadło ich nagłe i silne 
pragnienie. Przy kapliczkach tych bowiem dla strudzonych podróżników okoliczne 
górskie plemiona krasnoludów zostawiają beczkę napełnioną rumem, który z 
założenia ma służyć spożyciu w niewielkich ilościach i dociepleniu organizmu, 
najczęściej jednak istoty z nich korzystające znajdują o wiele bardziej 
pocieszające zastosowanie.</p>
<p>Meltis nie wymaga ofiar, najczęściej hołd składa się jej w karczmie silnie 
uderzając kuflem piwa o stół, co jest wyrazem siły. Najbardziej popularnym 
sposobem składania hołdu Meltis jest jednak pochłanianie złocistego trunku drogą 
doustną, co jest dowodem wytrzymałości. Dlatego w świątyniach dedykowanych 
bogini Meltis dla niektórych dość dziwnym wydaje się fakt, że kapłan silnie 
uderza kuflem piwa o ołtarz i wypija całość duszkiem składając tym samym hołd 
bogini. Błogosławienie wiernych poprzez kropidło wypełnione alkoholem również 
może być wyjątkowo dziwnie odbierane przez osoby z zewnątrz. Dla wyznawców 
jednak jest to fakt oczywisty, normalny. Oczywistością jest również iż kapłan 
wyznający i modlący się do bogini Meltis musi charakteryzować się silną głową, 
co ujęto nawet w wymaganiach wobec osób starających się o kapłaństwo u tej 
bogini (dojście do ustanowienia tego wymogu okupiono licznymi upadkami kapłanów 
po odprawieniu trzech lub więcej hołdów z rzędu, jak również bardzo częstymi 
przypadkami kompromitującymi życie osobiste kapłanów, którym alkohol do głowy 
uderzał w sposób zbyt wyraźny).</p>
<p>Meltis jest boginią niezwykle dobrotliwą, jednak poziom jej dobrotliwości 
można porównać do poziomu jej wrażliwości na uwagi wiernych, stąd konieczność 
komplementowania bogini aby jej się przypodobać. Bogini ku nieszczęściu wielu ma 
wyjątkową zdolność do wyczuwania szczerości oraz nieszczerości, zatem intensywna 
modlitwa do niej przeznaczona jest jedynie dla najlepszych w swoim fachu 
dyplomatów.</p>
<p>Zielarze wierzący w Meltis trudnią się zazwyczaj uprawą chmielu w celu 
dostarczania go na potrzeby kapłanów, jednak w celach zarobkowych trudnią się 
także uprawą wielu innych ziół, warzyw, jak również owoców. Znane są w świecie 
przypadki odłamów w postaci uwielbienia uprawy ogórków, pomidorów czy też porów 
oraz modlitw do Meltis o pomyślność jedynie tychże upraw, odłamy te jednak 
traktowane są przez prawdziwych wyznawców Meltis jako herezje wypaczające 
prawdziwe znaczenie wiary w boginię i nie są traktowane poważnie.</p>
<p>Uważana jest także za patronkę nowożeńców ze względu zarówno na swój 
dobrotliwy i szczery charakter, jak również ze względu na ów symbol seksu i 
ciężkiej pracy, które to kojarzone są właśnie z nowożeńcami. Paradoksalnie 
nowożeńcy jednak nie zawsze uznają Meltis za swoją patronkę, szczególnie przez 
małżonki które nie uznają wymówek mężów upijających się piwem jakoby byłoby to 
działanie hołdujące Meltis oraz jakoby było to elementem próśb o wstawiennictwo 
i błogosławieństwo bogini dla ich nowego małżeństwa (rzadsza, ale również 
spotykana jest sytuacja odwrotna – małżonków martwiących się o upijające się 
żony). Upijanie się piwem do nieprzytomności nie jest oczywiście prawidłową 
formą składania hołdu oraz żadną formą prośby o błogosławieństwo, za formę tą 
można uznać picie piwa i nie upijanie się nim (jako symbol wytrzymałości), lecz 
o wiele skuteczniejszą (lecz z niewiadomych przyczyn mniej popularną) formą jest 
modlitwa po ciężkiej pracy.</p>
<p>Od dawien dawna uważana za siostrę Dintel, obecnie wiadomo że jej siostrą nie 
jest. Ujawnienie tego faktu wywołało zarówno wiele sporów i konfliktów w sferze 
etycznej, jak również w sferze politycznej między wiernymi obu bogiń. Między 
samymi boginiami konfliktu nigdy nie było do momentu owego feralnego incydentu, 
w którym jeden z wysoko postawionych kapłanów pomylił się i wziął Meltis za 
Dintel. Nazwał ją „wielką patronką” przytaczając przy tym kilka innych epitetów 
nadmiernie akcentując jej wielkość, co Meltis nie przyjęła jako jednoznaczne 
pochlebstwo. Do bezpośredniego konfliktu między boginiami to wydarzenie nie 
doprowadziło, jednak Meltis z dystansem traktuje wszystkich wiernych Dintel 
często z rozmysłem ignorując ich potrzeby (co niestety było najistotniejszym 
powodem niezadowolenia i sporów wiernych).</p>
<p>Mówi się, że choć wyznawcy Dintel ze sporym powodzeniem integrują się z 
naturą, ciesząc się empatią zwierząt, to jednak ich uprawy rosną w sposób nieraz 
nieprzewidywalny, a w lesie nieraz zdarza się, że kasztany i żołędzie bardziej 
wolą spadać im na głowy niż gdziekolwiek indziej. Uznawane to jest za jedną z 
konsekwencji „wielkiej pomyłki”.</p>
<p>Jak łatwo zaobserwować, kary wymierzane przez Meltis nie należą do niezwykle 
surowych. Zazwyczaj karą jest kompromitacja, podkreślenie braku owej siły lub 
wytrwałości danej jednostki, wiadomo jednak że nie było jeszcze przypadków 
śmiertelnych. Fakt ten wraz z dużą neutralnością i tolerancją wobec istnienia i 
wiary w innych bogów oraz boginie (może poza wyżej przytoczonym wyjątkiem w 
postaci Dintel) składa się na opinię bogini Meltis, która uznawana jest za 
boginię dobrotliwą, współczującą, łagodną w swym usposobieniu.</p>
<p>Meltis obdarza błogosławieństwem: </p>
<ul class="sword">
				<li>Zielarstwo</li>
				<li>Drwalnictwo</li>
				<li>Górnictwo</li>
				<li>Siłę</li>
				<li>Wytrzymałość</li>
</ul>
', '<p><b>Dintel</b> – bogini życia, miłości i dobrobytu, opiekunka chorych<br />
Jeszcze starożytni uważali Meltis i Dintel za jedną, spójną istotę. Ówcześni 
heretycy twierdzili nawet, że tak naprawdę jest to jedna z postaci Wszechmatki. 
Jednak od czasu, gdy wielki filozof i znawca boskich obyczajów, Narezjusz z 
Esbionu ogłosił swoją własną teorię powstania Świata, sprowadzając tym samym 
obie boginie do roli wszechpotężnych sióstr, wszystko znacznie się 
skomplikowało. Zirytowane powstałym zamieszaniem istoty objawiły się pewnemu 
bardzo wpływowemu kapłanowi. Mało kto zna dziś szczegóły tamtego zajścia – dość 
powiedzieć, że odkąd Asmozjan, nazywany przez potomnych Wielkim, zanegował 
wszelkie nici pokrewieństwa między boginiami, nie próbowano już głosić nowych 
herezji. Niektórzy co prawda przebąkiwali z początku coś o ich własnych wersjach 
wydarzeń – tajemnicze wypadki, które spotykały tych nieszczęśników skutecznie 
zamknęły usta reszcie buntowników.</p>
<p>Dintel objawia się jako niska i zadziwiająco drobna krasnoludka. Nikt nie 
może zobaczyć jej twarzy – zawsze jest zasłonięta od stóp do głów delikatną, 
jakby utkaną z pajęczyny, materią. Czasem tylko, gdy się śmieje, da się dostrzec 
jej długie, rude loki, upodabniające ją nieco do Meltis. To właśnie one były 
główną przyczyną zamieszania powstałego wokół bogiń. Z charakteru obie panie są 
jednak skrajnie różne - Dintel, w przeciwieństwie do „siostry”, nie pragnie 
komplementów, ani pochlebstw. I chociaż również nie uznaje składania ofiar z 
istot żywych, zdarza się, że nadgorliwi, by nie rzec - fanatyczni, wyznawcy palą 
na jej cześć ogromne, słomiane kukły, oplecione z zewnątrz wszelkimi wiankami z 
kwiecia. Jest to oczywisty gest zniewagi wobec opiekunki roślin, którą jest 
Meltis. Dlatego też kapłani Dintel sprzeciwiają się tym ofiarom, a na każdego, 
kogo przyłapią na tym niecnym procederze, czeka pręgierz.</p>
<p>Sam kult Dintel wzbudza dziś wiele kontrowersji. Jej świątynie to małe, 
kamienne budynki oparte na planie kwadratu z jedną wieżyczką. Elementami 
charakterystycznymi są zielono-złote witraże w kształcie dwóch splecionych kół. 
W każdej świątyni znajduje się również wyłożona ciemnym drzewem sala z 
wymalowanymi na ścianach znakami symbolizującymi płodność. Albowiem Dintel jest 
także boginią miłości, a każda jej kapłanka, zakładając uprzednio na twarz 
zasłonę, w noc swojego wyświęcenia ma obowiązek oddać się jednemu z wiernych. 
Jeśli zostanie poczęte dziecko, zostaje ono uznane za potomka samej bogini. 
Innowiercy uważają ten obyczaj za wstrętny i groteskowy, kpiąc z niego, gdy 
tylko nadarzy się okazja.</p>
<p>Najliczniejszą grupę wyznawców bogini stanowią hodowcy. Często, chcąc 
odwdzięczyć się Dintel za opiekę nad zwierzętami, nadają młodym jej imię. 
Kapłani starają się walczyć z tym zwyczajem, utrzymując, że niezależnie od tego, 
jak piękna i okazała byłaby koza, wołanie – „Niechże ktoś wydoi Dintel!” - 
ujmuje bogini godności. Doprowadzono nawet do tak absurdalnej sytuacji, że po 
roku, w którym narodziło się bardzo dużo kóz, w Urzędzie Rejestracji Zwierząt I 
Innych Stworzeń Magiczno-Hodowlanych, zabroniono nadawania tego imienia małym 
koziołkom. Co na to hodowcy? Jak to hodowcy – wzruszają ramionami i chrzczą w 
ten sposób swoje krowy i młode żubrzyce.</p>
<p>Inny związek zawodowy, który obrał sobie Dintel za patrona, to uzdrowiciele. 
Stąd powstało zresztą powiedzenie – „Dintel nad <kimś> 
czuwała”, którego używa się w przypadku, gdy ktoś umierający, nagle zdrowieje. 
Należy również wspomnieć o innym, mniej chlubnym określeniu – „pies Dintel”, 
którym prosty lud nazywa lekarzy o złej sławie. Sami uzdrowiciele lubią być 
nazywani „prawą ręką Dintel” – niestety, tego sformułowania używa się głównie w 
ważnych pismach państwowych, tudzież szkolnych wypracowaniach elfów, którym 
brakuje synonimów, lub zwyczajnie chcą się podlizać nauczycielowi. Uzdrowiciela 
charakteryzować jednak musi duża cierpliwość, więc znosi te wszystkie złośliwe 
docinki w spokoju i ciszy. Wie, że jego bogini surowo przykazała swoim wyznawcom 
żyć w czystości ducha (co nie oznacza czystości ciała).</kimś></p>
K
<p>Kolejna grupa ludzi, stanowiąca obszerne grono wyznawców Dintel, to samotne 
matki i nawrócone nierządnice. Kobiety te wierzą, że skoro same kapłanki bogini 
oddają się w jej świątyni, to również im samym Dintel okaże łaskę i zrozumienie. 
Często jednak zdarza się, że nie wytrzymują presji otoczenia, które zarzuca im 
obłudę i świętoszkowatość. Wymyślono także kolejne określenie – „łzy Dintel” , 
które oznacza żałowanie za popełnione winy. Sama bogini, choć bardzo 
przyjacielsko usposobiona i zrównoważona, zsyła kary na prześmiewców tych 
kobiet. Dlatego też ostatnimi czasy na swoją patronkę wybrała ją nowoutworzona 
grupa – emancypantki. Twierdzą, że Dintel szczególnie mocno mści się na 
mężczyznach, natomiast niezwykle rzadko karze kobiety.</p>
<p>Za symbol Dintel uznaje się motyla. Niektórzy twierdzą, że gdy nad ciężko 
rodzącym zwierzęciem pojawi się ten kolorowy owad, jest to znak, że zarówno 
matka, jak i młode zachowa życie i zdrowie. Albowiem bogini ta upodobała sobie 
wszelkie formy życia i zawsze stara się nad nim czuwać. Zdarza się nawet, że 
podczas poświęcenia małego dziecka w świątyni, na chwile na jego czole pojawia 
się delikatne znamię. Świadczy to o wielkiej łasce Dintel, oraz gwarantuje 
wszelaką pomyślność.</p>
<p>Jak widać, Dintel jest boginią, która bardzo aktywnie wtrąca się w życie 
zwykłych śmiertelników. Nakłania swoich wiernych do zakładania rodzin – nie 
tylko poprzez słowa kapłanów. Tajemnicą poliszynela jest, że takim ludziom 
często powodzi się znacznie lepiej – znienacka ich gospodarstwa zaczynają 
przynosić większe dochody, a dosłownie znikąd pojawiają się dawno zaginione 
skarby rodzinne. Wielu ludzi najniższych kast społecznych uważa to za 
niedopuszczalne i często buntuje przeciwko bogini swoje własne bóstwo. Czasem 
prowadzi to nawet do wojen. Zwykle jednak są to sytuacje taka jak ta, w której 
niejaki gospodarz Zirruh oskarżył swojego sąsiada, Firghona o to, że jego kury 
znoszą znacznie więcej jajek. Jak donoszą śledczy – spowodowane to było nie 
wsparciem bogini, a tym, że Firghon karmił swoje ptactwo znacznie mniej 
oszczędnie niż sąsiad. Sprawę umorzono, a sami bogowie często wspominają ją, 
śmiejąc się donośnie.</p>
<p>Pomimo (a może właśnie dlatego), że religia Dintel głosi przede wszystkim 
miłość i pokój, nie ma większego wpływu na podejmowane decyzje państwowe. 
Ostatnim razem bogini wściekła się, gdy wbrew głosom jej kapłanów, w krainie 
wybuchła wielka wojna domowa. Dintel, wraz z sprzymierzoną wtedy Meltis, podjęła 
swoistą walkę partyzancką. W całym kraju zaczęły się masowe ucieczki zwierząt, 
które podczas swoich dzikich wędrówek, tratowały całe zasiewy i uprawy. Jednak 
gdy stare piwo zaczęło kwaśnieć, a młody chmiel został zniszczony, walczący nie 
mogli tolerować tego dłużej i ogłoszono zawieszenie broni. Uspokojone boginie 
osiągnęły swój cel - mogły więc powrócić do zwyczajowych kłótni.</p>
<p>Dintel pozostaje jednym z najbardziej zrównoważonych bóstw. I choć jej 
patronat nie przynosi wierzącemu wielkich przygód (pomijając te z kurami), daje 
jednak to, czego wszyscy w niej poszukują – szczęście.</p>
<p>Dintel obdarza błogosławieństwem do: </p>
<ul class="sword">
				<li>Hodowli</li>
				<li>Alchemii</li>
				<li>Zielarstwa</li>
				<li>Punktów życia</li>
				<li>Siły woli</li>
</ul>
', '<p><i>Okpiony przez Yalę</i> – ktoś, kogo interes, w którym pokładał wielkie 
nadzieje, spalił na panewce<br />
<i>Yala go zesłała</i> – klient który podpisuje ważny, dochodowy kontrakt z 
wykonawcą bądź klient który zawiera umowę dla niego wyjątkowo niekorzystną.</p>
<p>Każdemu, kto obraca pieniędzmi i posiada własny interes, marzy się łaskawe 
spojrzenie Yali. Tym bardziej, że trudno w panteonie znaleźć tak zmienne bóstwo. 
Nad wyraz kapryśna, niestała i tak naprawdę nieprzewidywalna – zupełnie jak 
handel któremu patronuje. Pomimo przewidywań, prognoz czy wyliczeń kupców, 
rzemieślników i badaczy rynku zawsze jest ryzyko, że właśnie ona, pod wpływem 
kaprysu, pójdzie wszystkim w sukurs.</p>
<p>Najczęściej przedstawiana jest jako drobna gnomka. Ruda czupryna, duże 
niebieskie oczy, rumiane policzki i figlarny zawadiacki uśmieszek: tak 
najczęściej wyobrażają sobie ją jej wyznawcy. Przedstawiana jest w różnych 
strojach, co jest zależne od aspektu jaki jest z nią powiązany. Mamy więc Yalę 
Cieślę, dzierżącą hebel oraz dłuto, pracującą przy tworzeniu kuferka na 
drogocenne przedmioty. Jest obraz Yali Kowala, odzianej w fartuch kowalski i 
wykuwającą podkowę – symbol szczęścia. Yala Złotnik zazwyczaj ukazana jest jako 
siedząca postać w swej pracowni, skupiona nad ozdabianiem drogocennymi 
kamieniami złotego rogu, symbolu dobrobytu. Rzadziej uwidacznia się boginię jako 
Yalę Płatnerza, Zbrojmistrza czy Yalę Fleczera a najmniej popularna wśród 
wiernych jest postać Yali Inżyniera czy Budowniczego. Bardzo często Yala 
występuje jako Wędrowna Kramarka: uwidacznia się ją stojącą przy wozie handlowym 
i podrzucającą sakiewkę złota. Zawsze wtedy jednak jej uśmiech jest wyjątkowo 
szelmowski a dopełnia go cwaniacki błysk w oku: obrazuje to fakt, iż nie wiadomo 
czy Yala trzymaną sumę pieniędzy chce podarować wyznawcy czy właśnie ów 
potencjalny dochód sprzątnęła śmiertelnikowi sprzed nosa. Istoty które 
zdecydowały się żyć pod patronatem tej bogini często noszą pobłogosławionego 
miedziaka z otworem na środku, którego wieszają albo na szyi albo trzymają taką 
monetę bezpośrednio w sakiewkach. Innym symbolem jest garniec złota. To dochód 
którym Yala w swej łaskawości może obdarzyć lub to stracony w interesach zarobek 
mieszkańców, który bogini poprzez kaprys sobie przywłaszczyła.</p>
<p>Aspektów owej bogini jest sporo, tyle ile jest profesji usługowych. Yala 
patronuje praktycznie każdemu zawodowi który wymaga umiejętności 
rękodzielniczych lub rzemieślniczych. Można jednak wyróżnić dwie główne formy 
wyznaniowe: </p>
<ul class="sword">
				<li><u>Yala Rzemieślniczka</u>: skupienie i koncentracja to 
				podstawa rzemieślniczego fachu. Przy wyrobie przedmiotów 
				potrzebna jest precyzja i należyta uwaga aby swoją pracę wykonać 
				należycie i aby przedmiot, który wychodzi spod rąk twórcy, był 
				jak najlepszej jakości. Yala jest jednak boginią przewrotną i 
				figlarną: gdy ma taką ochotę dekoncentruje myśli, miesza 
				zapamiętane wzory i tak mąci w umyśle tak, iż wyuczone przez 
				lata reguły i zachowania nagle stają się niezrozumiałe bądź są 
				momentalnie zapominane. Doświadczeni rzemieślnicy wiedzą, że 
				konieczne jest ułaskawić Yalę by patrzyła na swoich poddanych 
				łaskawym okiem. Trzeba jednak pamiętać, że figle, psoty i zabawa 
				śmiertelnikami leżą w naturze Yali więc są nie do uniknięcia. 
				Błagania i ofiary składane bogini mogą natomiast skutkować tym, 
				że kapryśne bóstwo skupi swą uwagę na kimś innym.</li>
				<li><u>Yala Kramarka</u>: pieniądz napędza handel, który to 
				skutkuje przypływem większej ilości pieniądza. Gdyby cała 
				gospodarka bazowała na tej prostej zasadzie wtedy wszyscy byliby 
				bajecznie bogaci. Niestety prawa handlu są zdecydowanie bardziej 
				skomplikowane. Najgorsze jest jednak to, że pieczę nad nimi 
				pełni nie kto inny jak właśnie nieobliczalna i psotna Yala. Na 
				nic się zdadzą żmudne obliczenia, prognozy, tabele, wykresy czy 
				wzory tworzone przez myślicieli handlowych wszelkich raz, skoro 
				jeden kaprys może wszystko wywrócić do góry nogami. Do Yali więc 
				modlą się wszyscy. Ci, którzy mają już własny interes i trudnią 
				się nim z dziada pradziada, w krytycznych momentach proszą 
				boginię o to, by nie miała ochoty wprowadzać niespodziewanych 
				zmian. Ci natomiast, którzy dopiero zakładają własną działalność 
				zarobkową, błagają o przewrót czy gospodarczą rewolucję jaka 
				mogłaby dać im niepowtarzalną szansę na krociowe zyski. Nie ma 
				jednak reguły, ze modlitwy zostaną wysłuchane: mogą one tak 
				ułagodzić psotną naturę bogini jak i równie dobrze mogą zwrócić 
				uwagę jej figlarnej osoby na modlącego się śmiertelnika. Popyt i 
				podaż na dane artykuły, kryzys i nadmiar surowcowy, spadek i 
				wzrost wartości pieniądza: wszystko to, mimo iż rządzi się 
				swoimi zasadami, podlega też niewątpliwie zmiennej woli Yali.</li>
</ul>
<p>Kult Yali kwitnie głównie w Agarakar ale dość potężna filia istnieje w 
portowej dzielnicy Meredith gdzie żywo prosperuje handel zamorski. Oba ośrodki 
są finansowane przez handlarzy, rzemieślników i przedsiębiorców: utrzymują się 
one z tak zwanych „trzynastek” czyli comiesiecznych ofiar dziękczynnych czy 
błagalnych stanowiących trzynastą część zarobku. Popularny jest również proceder 
ofiarowania na rzecz bogini przedmiotów wykonanych własnoręcznie które składa 
się na użytek świątyń. Każdy z szanowanych cechów i gildii raz na jakiś czas 
sponsoruje część świątynną poświęconą Yali. Można więc się łatwo domyśleć, że 
jej ołtarze są najbardziej okazałe i monumentalne. Ich wystrój często się 
zmienia, wraz z panującą modą, lecz stałym elementem są góry drogocennych 
przedmiotów: od jubilerskich, misternych dzieł, przez piękne, solidne meble a na 
górach monet skończywszy. Kult Yali ma spore udziały w bankach krasnoludzkich i 
za ich pośrednictwem obraca pieniędzmi z ofiar. Tym samym pozwala mu to na 
udzielanie gorliwym wyznawcom bardzo atrakcyjnych pożyczek. Kaplice Yali, 
podobnie jak jej część świątyń, są nad wyraz różnorodne a ich wygląd jest 
zależny od cechów rzemieślniczych które nad daną kaplicą sprawują pieczę: 
kapliczka cechu kamieniarskiego jest zbudowana z marmuru i ozdobiona pięknymi 
płaskorzeźbami natomiast kaplica gildii handlu morskiego zawiera w sobie 
elementy sztuki marynarskiej jak mapy, przyrządy nawigacyjne czy butelki 
przedniego rumu. Co ciekawe wszelkie wspaniałości nie nęcą żadnego ze złodziei 
czy rabusiów. Każdy ma na tyle rozumu by wiedzieć, czym grozi niezadowolenie 
bogini. Zarobek z kradzieży takich przedmiotów jest ostatnim zarobkiem w życiu 
ryzykanta który postanowi przywłaszczyć sobie to, co należy do Yali.</p>
<p>Święta ku czci Yali są ściśle zależne od wpływów danych przedsiębiorstw. W 
ostatni dzień miesiąca jest czas na to, by rzemieślnicy i handlarze mogli, po 
podsumowaniu trzydziestu dni pracy, wybłagać o zwrot kosztów i zyski lub złożyć 
dziękczynienie za łaski dużych przychodów. Okazją do modlitwy są też dni 
handlowe w których panuje wzmożony tłum na rynkach i targach. W ciągu roku są 
dwa wielkie święta ku czci bogini. Pierwsze jest na wczesną wiosnę, w pierwszy 
dzień w którym śnieg i lód topnieją, port handlowy jest otwierany a pracownie 
zaczynają intensywny rozruch. Wtedy właśnie poszczególni wyznawcy spisują na 
glinianych tabliczkach obietnice, czyli deklaracje czym akurat chcą przekupić 
Yalę by ta odwróciła od nich swą figlarną i psotną uwagę. Jest to okazja tym 
samym do zawierania sojuszy handlowych, ubijania rocznych interesów i utarczek 
słownych mających na celu zniechęcenie potencjalnych rywali gospodarczych. 
Składanie deklaracji kończy się z zachodem słońca i od tego czasu każdy udaje 
się na spoczynek by następnego dnia już rozpocząć pracę aby móc zrealizować dane 
przyrzeczenie. Drugie święto ma miejsce w ostatni dzień jesieni: jest to czas w 
którym każdy kto złożył glinianą tabliczkę musi wywiązać się ze swoich obietnic. 
To okazja do radosnej biesiady, wspólnego podliczania zysków i strat, gratulacji 
sukcesów i opijania handlowych porażek. Żaden z handlarzy nie ma prawa w tym 
dniu narzekać na zły rok czy obrażać się na Yalę za poniesione straty: miłe jest 
bogini widzieć, jak brak sukcesów przyjmuje się z pogodą. Tym samym każdy, komu 
szczęście i intuicja handlowa sprzyjały ma obowiązek spędzić całą noc tak 
rozrzutnie jak tylko może wydając pieniądze na innych: ma to na celu wyrażenie 
swej radości w poprawny sposób i osłodzenie porażki tym, którym się w roku nie 
powiodło.</p>
<p>Wyznawcy Yali mają dość dobre stosunki z wyznawcami innych bóstw. Drobne 
utarczki są między wiernymi aspektu Yali Inżyniera lub Yali Budowniczej a 
wyznawcami Gulgarda. Ci pierwsi zarzucają swym rywalom brak finezji i zbyt 
konserwatywne podejście do sztuki jaką jest inżynieria natomiast ci drudzy 
patrzą na wyznawców aspekty Yali jako na partaczy którzy nie potrafią wykonywać 
swych zadań w sposób wytrwały i precyzyjny. Natomiast wyjątkowo poprawne 
stosunki są zawiązane z wyznawcami Artis: skupia się to przede wszystkim na 
zawadiackim i szelmowskim charakterze obu bóstw.</p>
<p>Modlitwa do Yali może dać błogosławieństwo do: </p>
<ul class="sword">
				<li>Kowalstwa</li>
				<li>Jubilerstwa</li>
				<li>Stolarstwa</li>
				<li>Inteligencji</li>
				<li>Siły woli</li>
</ul>
', '<p><i>Strzała Unroda</i> – Ktoś kto dąży wytrwale do celu i zawsze do niego 
trafia &quot;Unrodowy Celę – Ktoś kto stoi na pozycji z góry przegranej</p>
<p>Unrod jest największym samotnikiem spośród grona bogów, nigdy nie był 
widywany wraz z którymkolwiek z panteonu, nawet w trakcie wojen bogów nie 
wychylał się ze swych lasów. Uważa się go mimo wszystko za najstarszego z nowych 
bogów, mówi się także że zanim stał się jednym z najwyższych był zwykłym 
pomniejszym bożkiem borów, będących na służbie Anariel.</p>
<p>W dzisiejszych czasach został opiekunem myśliwych, ludzi mieszkających w 
pobliżu lasów, często także modlą się do niego podróżni, oraz drwale, którzy 
obawiają się leśnych bestii. Wyznawców jego poznać można po tym iż noszą amulety 
z symbolem swego boga – łukiem przekreślonym trzema strzałami.</p>
<p>Unrod uznawany jest za najlepszego z myśliwych to o nim mity mówią, że zabił 
jedynie za pomocą swego łuku który zwie się Helantrag, większość 
najpotężniejszych bestii, które mogły zagrozić śmiertelnym.</p>
<p>Całym swym postępowaniem a także i swym wyglądem bóg podkreśla to iż ponad 
wszystko jest myśliwym, jest więc bogiem cierpliwym i spokojnym, jednocześnie 
nieustępliwym i stanowczym, to co raz postanowi pozostaje niezmienne. Dla swych 
wrogów jest bezlitosny, ktoś kto sprzeciwi się jego woli może być pewien, ze w 
najbliższym czasie zginie w niejasnych okolicznościach.</p>
<p>Dla swych wyznawców jednak jest wielce łaskawy, często objawia się 
najgorliwszym z wiernych. Oni właśnie opisują go jako umięśnionego mężczyznę w 
sile wieku. Długie włosy koloru nocnego nieba sięgają mu za ramiona, a między 
nimi można już zauważyć siwe pasemka. Na twarzy oprócz jadowicie zielonych oczu 
można dostrzec długą bliznę ciągnąca się od ucha boga do jego ust (ponoć jest to 
pamiątka jaka została mu po walce z wielkim dzikiem Urteusem). Charakterystyczną 
cechą jego wyglądu jest też długa, gęsta broda, która przepleciona jest 
niezliczonymi pędami.</p>
<p>Bóg zazwyczaj ubrany jest jak każdy myśliwy, przekłada wygodę i praktyczność 
swego odzienia nad piękny wygląd, tak wiec zazwyczaj można go zobaczyć w długim 
płaszczu z kapturem, który daje mu możliwość stania się niewidocznym, oprócz 
tego nosi znoszony skórzany strój.</p>
<p>Organizacja jego kultu także różni się od tradycyjnych kultów. Unrod nie ma 
głównej świątyni, większość modłów oraz ofiar ludzie składają w niewielkich, 
drewnianych kapliczkach rozsianych na obrzeżach lasów. Jednak osoby, które chcą 
w szczególny sposób oddać cześć swemu bogu udają się do jaskiń Unrosatame 
znajdujących się w Lesie Krętych Ścieżek, ponieważ według legendy to gdzieś w 
nich Unrod ma swoją siedzibę. Ofiary są składane głównie z części upolowanego 
przez myśliwych mięsa, choć zarówno drwale jak i stolarze zastępują to 
składaniem niewielkich ognisk z łupków drewna.</p>
<p>Modliwta do Unroda może dać błogosławieństwo do: </p>
<ul class="sword">
				<li>Strzelectwo</li>
				<li>Stolarstwo</li>
				<li>Zreczność</li>
				<li>Wytrzymałość</li>
</ul>
', '<p><u>Związki frazeologiczne</u>: </p>
<ul class="sword">
				<li><i>tarcza Luzubala</i> - coś co podczas zmagań (często 
				walki) nieoczekiwanie staje się bronią</li>
				<li><i>Luzubalowy pojedynek</i> - morderstwo</li>
				<li><i>droga Luzubala</i> - doskonalenie się w wojennym 
				rzemiośle, walka z coraz silniejszymi przeciwnikami</li>
				<li><i>zdobycz Luzubala</i> (Silvenglor) - przedmiot o dużej 
				mocy, którego jednak nie można wykorzystać (a przynajmniej my 
				nie możemy)</li>
				<li><i>zbrojownia Luzubala</i> - ogrom różnego rodzaju 
				przedmiotów służących jednemu celowi (najczęściej walce)</li>
</ul>
<center><u>1. Historia Luzubala</u></center>
<p>Dawno temu, w czasach kiedy uosobieniem wojny był Karserth, narodził się 
pewien jaszczuroczłek. Nikt jeszcze nie mógł przypuszczać, że owo dziecię, 
kiedyś pokona w walce jednego z bogów i zajmie jego miejsce. Co prawda już po 
kilku latach widać było, że z Luzubala wyrośnie wielki wojownik, ale nikt nawet 
w połowie nie domyślał się, jakich czynów dokona.</p>
<p>W owych czasach nie było wiadomym, że bogów da się zabić. A już z pewnością 
nikt nie przypuszczał, że jest w stanie dokonać tego śmiertelnik. Karserth 
cieszył się powszechnym poszanowaniem. Jego kapłani-wojownicy bronili 
społeczeństwa przed różnymi bestiami i ludźmi w jakiś sposób niebezpiecznymi. I 
chociaż wewnątrz Karserth tęsknił do wojny, to wiedział, że nie może jej 
wywołać. Od wieków pośród bóstw trwał pokój stworzony przez mądrość Illuminati.</p>
<p>W takich czasach przyszło Luzubalowi dorastać. Powie ktoś zatem, że nie 
sprzyjały one powstawaniu bohaterów. Przyznam mu rację, lecz tylko częściową. 
Chociaż bowiem pokój panował między bogami, chociaż armie z rzadka się ścierały, 
to jednak wciąż istniały bestie. A w miejscu w którym żył Luzubal było ich 
pełno. Zarózno moczary zamieszkałe przez jaszczuroludzi, jak i okoliczne mroczne 
knieje obfitowały w potwory. Już od najmłodszych lat przyszły bóg uczył się 
walczyć.</p>
<p>Kiedy miał kilkanaście lat i był młodzieńcem, po raz pierwszy objawiła się 
jego natura. Podkochiwał się w tym czasie w pewnej dziewczynie z jego wioski. Ta 
jednak miała już wyjść za jednego z uznanych wojowników. Na dzień przed ich 
ślubem Luzubal zamordował owego wojownika. Kara była adekwatna do popełnionej 
zbrodni - wygnanie z wioski. Należy nadmienić, że w owym miejscu wygnanie 
oznaczało śmierć. Luzubal jednak nie umarł. Poprawił za to znacznie swoje 
umiejętności. Na wygnaniu zaś spotkał Ilvarona - wielkiego wojownika i zarazem 
kapłana Karsertha. Kapłan ów buntował się przeciw własnemu bóstwu. Nie mógł 
zrozumieć, dlaczego Karserth nie dąży do żadnej wojny. Właśnie ten kapłan na 
długie lata został mentorem Luzubala. Wiele nauczył go o walce. Więcej jeszcze o 
bogach Orodlinu, ich historiach i relacjach między nimi. Kapłan znał wiele 
opowieści. W tym opowieść o czarnym korbaczu wykutym jeszcze w czasach, kiedy 
Tartus cieszył się uznaniem bogów. Ów oręż został stworzony wspólnymi siłami 
przez włacę ognia i Heluvalda. Nazwany został Meregrond.</p>
<p>To, co się później działo opisuje &quot;Wyprawa po Meregrond&quot;. Ustępuje ona tylko 
drugiemu dziełu o Luzubalu nazwanemu &quot;Śmierć Boga Wojny&quot;. Wracając jednak do 
Meregrondu. Leżał on przez wieki w sekretnej zbrojowni Tartusa znajdującej się w 
jaskini niedaleko góry Ephel. Po pierwszej wojnie bogów w owej jaskini ukrył się 
potężny demon wraz ze swoim oddziałem. Dzięki temu przeżył klęskę armii Tartusa. 
W labiryncie jaskiń skrywającym ukrytą zbrojownię mieszkał przez całe wieki. Tam 
właśnie przybył Luzubal razem z Ilvaronem. Już wtedy byli sobie równi pod 
względem umiejętności, a przyszły zabójca Karsertha przewyższał go szybkością 
nauki. Obaj zaczęli walczyć z armią demona. Długo trwała walka i wiele 
przeciwników usiekli. W końcu wyszedł i pan jaskini. Ilvaron zginął nie mogąc mu 
dorównać. Zaczął się pojedynek. Wiele razy ciął Luzubal demona sam unikając jego 
straszliwych ciosów, wielokrotnie jaszczuroczłek zasłaniał się tarczą przed 
płomieniami którymi demon próbował go spopielić. W końcu stało się tak, że 
Luzubal pod wpływem silnego ciosu przeciwnika wypuścił miecz. Wydawało się, że 
już przegra, jednakże wtedy odepchnął demona tarczą i dobił podniesionym z ziemi 
toporem swego mistrza. Tak zakończyła się wyprawa po Meregrond.</p>
<p>W ciągu następnych lat Luzubal sam się doskonalił. Wciąż wędrował w 
poszukiwaniu mądrości. A podczas wędrówek mordował. Był postrachem wszystkich 
ras. Niczym widmo przemykał się przez knieje, znikał w puszczach i pośród gór 
aby pojawić się gdzieś zupełnie indziej i siać zniszczenie. Nikt zaś nie 
wiedział gdzie znajduje się jego siedziba w której zresztą wtedy rzadko 
przebywał. Wiele tekstów opisuje jego wędrówki. Podczas kilku z nich 
zaprzyjaźnił się z Eriathem - bohaterem i heroldem Karsertha. Nie zachował się 
jednak żaden opowiadający o ostatnim roku przed wielkim pojedynkiem. Podobno 
wtedy Luzubal doznał oświecenia. Prawdopodobnie też upewnił się, że bóstwo można 
pokonać. Ze uczynić to może nawet śmiertelnik.</p>
<p>Kolejne wydarzenia opisuje &quot;Śmierć Boga Wojny&quot;. Luzubal odziany w kolczastą 
zbroję, trzymający takąż tarczę oraz Meregrond wyrusza do siedziby Karsertha. 
Już samo dotarcie tam wymagało znacznej wiedzy. Nie jest łatwo bowiem dotrzeć do 
siedziby boga. Jaszczur jednak dociera i w wojennym rynsztunku wchodzi do zamku. 
Kiedy już ma wejść do sali tronowej, drogę zastawia mu Eriath. Spodziewa się 
zamiarów dawnego towarzysza. Luzubal, łaknący boskiej mocy decyduje się na 
zaatakowanie bohatera. Eriath ginie pod korbaczem towarzysza, który wchodzi do 
sali tronowej i wyzywa boga na pojedynek. Początkowo walka trwa w pałacu. Trzy 
mithrilowe topory rzucane przez Luzubala burzą kolumny siedziby Karsertha 
odpychane przez niego samego siłą jego woli. Potem rozpoczyna się walka. 
Siedmiokrotnie przyszły bóg wojny upada pod ciosami Karsertha. Tyleż razy się 
podnosi i kontynuuje pojedynek. Już teraz nie w pałacu, ale na szczycie wzgórza, 
gdzie przeniósł się razem z nim bóg. W końcu Karserth dostaje cios. Kule 
korbacza, chociaż wcześniej zimne, teraz rozgrzewają się straszliwie za sprawą 
magii Tartusa zaklętej w Meregrondzie. Karserth pogruchotany spada. Zabity tą 
samą mocą, co jego brat, chociaż nie tą samą ręką. On jednak nie ma szansy na 
powrócenie do świata żywych. Ginie bezpowrotnie.</p>
<p>Dzięki zwycięstwu w pojedynku Luzubal zyskał moc o jakiej mu się nie śniło. 
Stał się jednym z bogów. Pozostałe bóstwa to wyczuły jednakże w tej chwili nie 
były w stanie zareagować. Nowy bóg pochłonął moc poprzednika. Jej ostatnia część 
pozostała w mieczu - Silvenglorze. Jego zwycięzca nie mógł zabrać. Oręż palił 
jego dłoń. Został więc przy porzuconych zwłokach Karsertha. Luzubal powrócił do 
siedziby pokonanego. Część z wyznawców Karsertha przeszła na jego stronę, część 
uciekła, a część zginęła w nierównej walce. Tymczasem kapłani z ukrytego zakonu 
braci (Karsertha i Veldorna) zabrali zwłoki pana oraz Silvenglor. I tak słuch o 
cudownym orężu zaginął aż do czasu powrotu Veldorna.</p>
<center><u>2. Luzubal jako bóstwo</u></center>
<p>Wraz z zabiciem Karsertha Luzubal zyskał boską potęgę. Przejął dziedzinę 
martwego bóstwa i ułożył sobie sprawy z jego wyznawcami. Wciąż jednak istniało 
zagrożenie ze strony innych bogów. Swym czynem pogwałcił jedno z najważniejszych 
praw panujących w świecie bóstw. I zapewne poniósłby karę gdyby nie powrócił 
Tartus. Zapewne pomogła mu w tym śmierć Karsertha. Dwaj bogowie stanęli po 
jednej stronie. Wybuchła nowa wojna bogów w wyniku której zmieniło się oblicze 
świata. Ogrom uwolnionej energii zniszczył dawne światy ale i wykreował nowe. 
Wraz ze śmiercią bogów powstawały nowe potęgi. Świat się zmienił na zawsze. A 
ery zaczęto liczyć od nowa.</p>
<p>Obecnie Luzubal jest jednym z silniejszych bogów. Nikt dokładnie nie potrafi 
ocenić jego potęgi, zwłaszcza że w tą winno się także wliczać ogrom jego wojsk 
znajdujących się w jego dawnej twierdzy. Aktualne zależności między bóstwami 
zdążyły się już utrwalić toteż Bóg Mordu nie staje już do regularnych wojen. 
Jego najemnicy dokonują natomiast wielu wypraw łupieżczych.</p>
<p>Szybko pojawił się kult Luzubala. Część osieroconych wyznawców Karsertha 
przeszła na jego stronę. Ponadto pod jego sztandary zaczęły ściągać różne typy 
spod ciemnej gwiazdy. Jego historia fascynowała wielu. Nawet wyznawcy innych 
religii zaczęli darzyć go szacunkiem. Szybko znalazło się też grono naśladowców 
którzy liczyli że im także uda się trafić do panteonu. Ci nie pożyli zbyt długo. 
Większość zginęła okrutnie zamordowana przez wyznawców Pana Wojny. Reszta z łap 
bestii które w swojej wędrówce starali się pokonać. Nikt nie dotarł do którejś z 
boskich siedzib aby rzucić rękawicę Potędze.</p>
<center><u>3. Luzubal jako istota</u></center>
<p>Niewielu jest tych, którzy go widzieli. Według słów tych nielicznych Luzubal 
ma postawę giganta. Potężne ciało chronione jest przez ogromną zbroję płytową z 
wystającymi kolcami. Nikt nie ma wątpliwości że Bóg Wojny jest jedynym 
potrafiącym jej używać. Kolce które z niej wystają mogą służyć do ranienia 
przeciwników, przede wszystkim jednak przejmują lękiem. Tak samo jak hełm z 
wyrzeźbionym demonicznym obliczem. Luzubal posługuje się wieloma brońmi. Wciąż 
jednak jego ulubioną jest Meregrond - potężny korbacz. W drugiej ręce trzyma 
ciężką tarczę wzmacnianą meteorytem którą nieraz już uderzał zaskoczonych 
przeciwników.</p>
<p>Niezmienną cechą Luzubala jest chęć niszczenia i mordowania. Jednak robi to 
na różne sposoby. Czasem jest zimnym i opanowanym Panem Mordu, innym razem 
przepełnia go brutalna, zwierzęca siła. Zdarza się że jest nie tyle wojownikiem 
ile okrutnym tyranem wysyłającym wojska do boju i nie liczącym się ze stratami. 
Luzubal ma tyle oblicz ile twarzy ma sama wojna.</p>
<p>Najpopularniejszym symbolem Luzubala jest korbacz a zaraz za nim zaciśnięta 
pięść w rękawicy. Bóstwo to jednak posiada także inne np cierń, oset, zwierzęta 
drapieżne (np. lew).</p>
<center><u>4. Kult Luzubala</u></center>
<p>Pierwsi wyznawcy Pana Mordu pojawili się zaraz po wielkim pojedynku, kiedy to 
Luzubal wrócił zwycięski do pałacu Karsertha. Wielu spośród wojowników 
zachwyciło się mordercą ich dawnego pana oraz bijącą od niego mocą. Powiadają, 
że nowy bóg wojny zebrał wszystkich z pałacu do jednej sali gdzie wygłosił 
przemówienie. Herosi Karsertha po kolei składali mu hołd. Była jednak spora 
grupa tych, którzy nie odwrócili się od Karsertha. Dokonała się więc rzeź z 
której uciekło jedynie kilkunastu wiernych. Od tego momentu powstała Świątynia 
Luzubala. Pierwsi wyznawcy boga mordu zostali jego kapłanami.</p>
<p>Wieść o śmierci Karsertha szybko się rozniosła. Wkrótce pojawiły się rzesze 
nowych wyznawców. Przybywało ich w takim tempie, że bóg wojny mógł zaatakować na 
inne bóstwa. Wiele istnień pochłonęła wojna bogów. Ginęli nie tylko ci, którzy 
zamieszani byli w konflikt ale także niewinni. Część kultystów Luzubala wzięła 
udział w Wielkim Exodusie. Wyznawcy boga wojny przetrwali apokalipsę i rozeszli 
się po nowych światach.</p>
<p>Wkrótce sytuacja się uspokoiła. Na niebiosach nastał pokój a raczej rozejm, 
który przerodził się w zimną wojnę. Rasy inteligentne mogły wreszcie odethnąć. 
Nie było to dobre dla wyznawców Luzubala. Kiedy kapłani skończyli z wojaczką 
rozpoczęły się zażarte teologiczne dysputy. I to właśnie poróżniło kultystów ze 
sobą. Nastała Wielka Schizma Luzubalicka. Jej powody były dwa: pierwszą i 
oczywistą przyczyną była władza - część z kultystów dążyła do tego aby cała 
władza kościelna zebrana była w jednych rękach, reszta pragnęła pozostać przy 
starym systemie gdzie władzę sprawowała rada najwyższych kapłanów. Druga 
przyczyna leżała bardziej w ideologii - zwolennicy Rady (konserwatyści) 
utrzymywali, że Luzubal był na początku śmiertelnikiem takim samym jak my 
wszyscy, a potęgę osiągnął jedynie dzięki ciężkiej pracy. Nie zgadzali się z 
nimi rewolucjoniści - ci utrzymywali że Luzubal był przeznaczony do stania się 
bogiem. To zaś oznacza że żaden śmiertelnik prócz niego nie może dostąpić 
apoteozy. Prawdopodobnie miało to zapobiec sytuacji w której śmiertelnicy 
zamiast czcić boga wojny sami próbowaliby nim zostać.</p>
<p>Wielka Schizma Luzubalicka była przyczyną rozłamu a potem wojny w której 
zwycięzcami okazali się być rewolucjoniści. Konserwatyści zostali wyklęci przez 
Arcykapłana jako heretycy*. Nie zostali nimi jednak uznani przez kulty innych 
bogów które do konfliku się nie mieszały. Do teraz istnieją wspólnoty wyznaniowe 
konserwatystów są jednak regularnie tropione i niszczone przez zwycięzców (czyli 
obecnie oficjalny kult Luzubala).</p>
<center><u>5. Wiara w Luzubala</u></center>
<p>Aby zostać wyznawcą luzubala należy odwiedzić któregoś z kapłanów. Podczas 
ceremoni przystąpienia do wspólnoty kandydat rozcina sobie rytualnym nożem dłoń 
kropiąc krwią ołtarz. Na ostrzu noża znajduje się specyficzna substancja będąca 
lekką trucizną. Powoduje ona że nowy wyznawca doświadcza bólu a także wizji w 
których zmaga się z własnymi lękami. Po przebudzeniu jest już pełnoprawnym 
członkiem kultu.</p>
<p>Kult Luzubala promuje przemoc ale i doskonalenie się. Wielu z wyznawców tego 
boga (nawet nie będących wojownikami) ćwiczy własne ciało a podczas świąt nawet 
toczy walki - rzadko kiedy śmiertelne. Wyznawcy innych religii postrzegają 
kultystów Luzubala jako jednostki niebezpieczne.</p>
<center><u>6. Święta</u></center>
<ul class="sword">
				<li><b>święto wielkiej walki</b> (Kaagor Israd) upamiętniające 
				pojedynek Luzubala z Karserthem. Uroczystość świętuje się przez 
				rytualne pojedynki</li>
				<li><b>święto krwi</b> - podczas niego składa się bogowi wojny 
				ofiarę - zwykle z jakiegoś potwora z areny walk (zwłaszcza w 
				większych i otwartych dla wszystkich ośrodkach kultu) czasem zaś 
				ludzi i inne istoty rozumne (w małych, tajnych zgromadzeniach - 
				zwłaszcza heretyckich)</li>
				<li><b>święto odwagi</b> - bliższe popisom jarmarcznym niż 
				kultowi Luzubala nie jest wszędzie obchodzone, podczas niego 
				szczególni ludzie w różny sposób dają popisy odwagi - czy to 
				skacząc nad przepaścią, czy walcząc gołymi rękami z jakimś 
				potworem. Święto prowokuje wiele wygłupów pośród młodzików. 
				Podczas tego dnia prowokowanie straży miejskiej jest nader 
				częste. Wyjątkowi idioci posuwają się nawet do narażania się 
				innym bóstwom.</li>
				<li><b>święto drogi</b> - podczas niego wyznawcy nakładają na 
				siebie różne zobowiązania które potem starają się wypełniać. 
				Mają przy tym cały czas w pamięci to, że walka z Karserthem była 
				tylko punktem na drodze Luzubala. A żeby osiągnąć zwycięstwo 
				musiał nie tylko starać się podczas samej walki ale i dużo 
				przedtem wykazać się ogromną wytrwałością.</li>
</ul>
<center><u>7. Miejsca kultu</u></center>
<p>Kult Luzubala istnieje już wystarczającą ilość czasu aby mieć własne święte 
miejsca. Poniżej przedstawię kilka z nich. </p>
<ul class="sword">
				<li><b>pola Emeliad</b> - miejsce ostatniej bitwy w wojnie bogów 
				- nie była to szczególnie wielka bitwa, ale jedyna z wojny bogów 
				która odbyła się w Orodlinie. Brały w niej udział resztki z sił 
				dawnych Potęg. Teraz na polach znajduje się małe sanktuarium w 
				którym przechowywane są prochy ze spalonych wrogów boga wojny. 
				Tych, którzy byli w pielgrzymce na polach Emeliad można 
				rozpoznać po sępie wytatuowanym na ramieniu.</li>
				<li><b>jaskinia Yldamren</b> - w niej zginął jeden ze świętych 
				Luzubala podczas samotnej walki z hordą potworów. Odbywający 
				pielgrzymkę wrzucają do jaskini różnorakie bronie - przeważnie 
				miecze albo sztylety.</li>
				<li><b>Meredroth</b> - dawna forteca Luzubala - bardzo trudno 
				jest do niej dotrzeć - nieliczni znają drogę. Sama pielgrzymka 
				jest nagrodą za służbę świątyni Luzubala. Jest to mekka jego 
				wyznawców spośród których wybrańcy mogą doznać nawiedzenia przez 
				boga wojny.</li>
				<li>główna świątynia Luzubala w Meredith - jest to największy 
				przybytek tego bóstwa we wnętrzu którego znajdują się liczne 
				relikwie. Tutaj także ma swoją siedzibę arcykapłan Irreglon - 
				obecny najwyższy kapłan Luzubala</li>
</ul>
<center><u>8. Herezje</u></center>
<p>Istnieje kilka herezji które wywodzą się z kultu Luzubala. Pierwszą z nich 
jest herezja tzw Harenitów (od Harena który był pierwszym przywódcą odłamu). Już 
wcześniej została wspomniana. Harenici wierzą że każdy może naśladować czyny 
Luzubala a więc stać się kimś tak potężnym jak on. Jest to najbardziej 
nienawidzona przez Nową Świątynię Luzubala herezja. Mimo że przez inne religie 
nie została za taką uznana to wyznawcy oficjalnego kultu Luzubala mają prawo 
(zagwarantowane przez państwo) bezkarnego zamordowania harenity (w drugą stronę 
też to działa - królestwo nie miesza się w sprawy między odłamami luzubalitów). 
Z tego powodu heretycy nie działają oficjalnie - mają zdecydowanie mniej siły od 
przeciwników.</p>
<p>Drugą herezją jest herezja Kaagorytów (od Kaagor Israd - pojedynku Karsertha 
z Luzubalem). Ludzie w nią wierzący twierdzą że po zwycięstwie Luzubal wraz z 
mocą Karsertha pochłonął także inne jego cechy i zespolił się z nim. Karserth i 
Luzubal są więc teraz jednością. Ów odłam jest mniej zawzięcie niszczony przez 
luzubalitów gdyż stanowi mniejszą siłę i nie należy do niego dużo członków ras 
rozumnych.</p>
<p>Trzeci odłam to Syrythici. Z początku należeli do Nowej Świątyni Luzubala. 
Stanowili zakon wojowników podległy luzubalitom. Wyznawali jednak pogląd, że 
pokój który panuje między religiami jest wbrew woli Luzubala. Zakon zaczął 
aktywnie i całą swoją mocą atakować inne kulty. W wyniku nacisku jaki 
zastosowały one wobec luzubalitów arcykapłan wyklął Zakon. Od teraz działa 
nielegalnie. Jest to herezja powszechna - uznana przez wszystkie oficjalne 
kulty. Niemniej jednak przez luzubalitów jest ona najmniej nękana.</p>
<p>Czwartą i ostatnią z większych herezji powstałych z kultu luzubala jest odłam 
Braci Miecza. Chociaż nienawidzeni przez luzubalitów mogą działać oficjalnie 
gdyż mają zapewnioną protekcję innych religii oraz królestwa (jako grupa 
pokojowa). Bracia Miecza twierdzą że Luzubalowi nie chodziło o mordowanie. Widzą 
w nim mędrca doskonalącego się poprzez trening ciała i ducha. Negują wszelkie 
jego zbójeckie wypady. Twierdzą także, że wyzywając Karsetha na pojedynek 
Luzubal ratował świat przed jego niszczycielską siłą - zabijając uosobienie 
wojny chciał doprowadzić do powszechnego pokoju na świecie. Bracia Miecza wierzą 
że uda im się doprowadzić do pokoju. Swoich umiejętności używają wyłącznie do 
walki z bestiami i osobnikami zagrażającymi bezpieczeństwu. Chociaż ideałami 
bliscy wyznawcom Veldorna to jednak wypominają im trwanie w błędzie samo 
istnienie boga-mściciela uznając za niemożliwe.</p>
<p>Luzubal daje błogosławieństwo do: </p>
<ul class="sword">
				<li>Walki bronią</li>
				<li>Strzelectwa</li>
				<li>Szybkości</li>
				<li>Inteligencji</li>
</ul>
', '<p><i>No jak babcię miłuję, czegoś takiego to ja żem nie widział! Wszedł ten 
niziołek do kopalni, a kilof go przeginał do samej ziemi. Boso oczywiście był 
chłopaczek, włosy ze stóp to zostawiał na każdym ostrzejszym kamieniu. Razem ze 
skórą i krwią. Ale amuletów jakichś miał kilka. Wymiętosił je, coś tam 
pomamrotał pod nosem i wiesz pan co się stało?! Uderzył kilofem! Ale jak 
uderzył! A spod cienkiej warstwy pyłu wyłoniła się żyła szczerego złota! A 
przeca to była kopalnia miedzi...</i> - Szef zmiany w krasnoludzkiej kopalni</p>
<p>Mówi się, że Gulgard umiłował sobie krasnoludy jako rasę żyjącą pracą w 
kopalniach i hutach. Że jest to bóstwo miłujące metalurgię i obróbkę kamieni. 
Znany jako Gulgard Podziemny, bóg ten błogosławi górnikom, którzy w pocie czoła, 
przez wiele tygodni nie widząc światła słonecznego, wyrywają ziemi jej skarby. 
Ponoć w najgłębiej sięgających tunelach można czasem natknąć się na ogromny 
kilof, którego nie uniósłby żaden krasnolud – nie wolno go dotykać. Najlepiej w 
takiej sytuacji złożyć przy znalezisku bryłkę jakiejś rudy i wracać do swojej 
pracy. Bo to Gulgard odwiedził kopalnię, a opuszczając ją, zapomniał swojego 
narzędzia. A wizyta boga jest wielkim zaszczytem i górnicy mogą być wtedy pewni, 
że następnego dnia – zakładając, że nie dotknęli kilofa i złożyli drobną ofiarę 
– odnajdą wielkie pokłady cennych minerałów.</p>
<p>Gulgard Podziemny nie ma wielu wizerunków ani świątyń. Bo gdzież w kopalni 
stawiać świątynie i kapliczki? Poza tym bóg nie dba o takie głupoty – ceni sobie 
przede wszystkim ciężką pracę w kopalni. Ale w tradycji ustnej funkcjonuje jako 
potężny krasnolud, wzrostem dorównujący niemal ludziom, a wagą przewyższający 
ich wielokroć. W jednej masywnej dłoni dzierży ogromny kilof, a w drugiej bryłę 
złota. Twarz ma łagodną, nieco nawet obojętną. Cały jest oblepiony pyłem 
zmieszanym z potem. Często towarzyszy mu żółty lub złoty kanarek.</p>
<p>Oprócz Gulgarda Podziemnego, krasnoludy znają też Gulgarda Młotodzierżcę – 
patrona kowali. Jest to ta sama masywna postać, ale ma na sobie skórzany 
kowalski fartuch. W rękach trzyma niezwykłej wielkości młot i misternie 
ozdobiony, finezyjny miecz.</p>
<p>Kowale twierdzą, że do Gulgarda Młotodzierżcy nie warto się modlić, bo bóg 
skupia się wyłącznie na swoim rzemiośle i nie interesują go wyznawcy. Stąd nawet 
pochodzi ironiczne powiedzenie „interesować się czymś jak Gulgard błagalnikami”. 
Z drugiej strony, mówi się „angażować się w coś jak Gulgard w klepanie miecza” – 
widać więc wyraźnie, że mamy do czynienia z postacią o skrajnych postawach.</p>
<p>O ile Gulgard Młotodzierżca jest najzupełniej obojętny na wszelkie formy 
kultu (stąd zresztą topnieje rzesza jego wyznawców, których obecnie znajduje się 
już tylko wśród najstarszych i najbardziej tradycyjnych rodów kowali, 
najczęściej krasnoludzkich), o tyle jednak Gulgard Ogień Lejący całkiem poważnie 
ingeruje w pracę swoich poddanych. Jako patron hutników, czuwa nad właściwymi 
proporcjami stopów i nad utrzymaniem idealnej temperatury w piecu. Wykonując 
więc swoją pracę, hutnicy często powtarzają formułkę: „Ogień Lejący, Gulgardzie 
Precyzyjny, użycz boskiego tchnienia moim miechom, wlej boski żar do moich 
pieców”.</p>
<p>Gulgard – patron hutników ma gabaryty normalnego krasnoluda. Zza masywnych 
gogli patrzą na świat spokojne, przyjazne oczy. Ze wszystkich wyobrażeń Gulgarda, 
ten jest najczęściej spotykany. Mimo że nie ma świątyń, przy warsztatach stawia 
mu się kapliczki, gdzie wśród świec ustawia się niewielkie miedzioryty 
przedstawiające boga podnoszącego gołymi rękami świeżo wylaną sztabkę.</p>
<p>Jako że dla Gulgarda bardzo istotna jest wytrwałość w pracy i niepoddawanie 
się w obliczu niepowodzeń (takich jak pęknięcie klingi miecza dzierżonego przez 
króla Valerna Srogiego, gdy ten pojedynkował się ze swoim bratankiem o prawo do 
tronu – młody krasnolud, który wykuł ostrze dla swojego pana, nie poddał się 
strachowi, dzięki czemu w lochu ukuł coś, co istnieje już wiele wieków i nie 
wygląda na to, żeby miało dać się nadgryźć przez ząb czasu – pełne zgorzknienia 
powiedzenie słabych handlarzy: „wyjść na czymś jak gulgardyta na wierności”), 
toteż Gulgard jest bogiem, który daje swoim wyznawcom szczególną wytrzymałość na 
ból oraz na magię. Nikt ani nic nie może powstrzymać górnika, hutnika czy kowala 
od kontynuowania pracy.</p>
<p>Ten ostatni, dający moc wytrwania mimo przeciwności, jest nazywany 
Skałą-Gulgardem. Jego wierni określani są często mianem „żwiru Gulgardowego”. Są 
niezniszczalni jak głazy, ale mimo wszystko są tylko maluczkimi śmiertelnikami w 
porównaniu z bogiem. Skała-Gulgard nie ma portretów. Symbolicznie w kaplicach 
poświęconych temu bóstwu kładzie się okrągłe kamienie.</p>
<p>Podobno Gulgard gardzi magią – jednakże ta teoria tak naprawdę nie ma 
potwierdzenia w zapisach. Wydaje się, że raczej bóg jest na magię i wszelaką 
inną wiedzę tajemną po prostu obojętny. Znamienne jest to, że zasadniczo każda 
rasa wyobraża sobie boga jako krasnoluda – czasem tylko Gulgard Ogień Lejący 
zostaje przedstawiony na jakimś miedziorycie jako wyrośnięty, ogorzały gnom.</p>
<p>Wbrew pozorom, Gulgard nie jest też głupi. Może fakt, że nie jest mistrzem 
błyskotliwości i ciętej riposty, ale ma niezwykłe wyczucie estetyki, na obróbce 
metali zna się jak żadna inna istota i nikt nie robi tak pięknej biżuterii, jak 
wierni wyznawcy Gulgarda. Podobno jego zamiłowanie do metalurgii wynika z tego, 
że jest najzwyczajniej łasy na błyskotki. To dlatego zagorzali gulgardyci 
obwieszają się talizmanami w kształcie młotów, kowadeł, kilofów czy obcęgów – 
żeby bóg przychylniej na nich patrzył. Żeby w ogóle raczył na nich spojrzeć. 
Podobno to działa.</p>
<p>Gulgard ofiarowuje błogosławieństwo do: </p>
<ul class="sword">
				<li>Kowalstwa</li>
				<li>Górnictwa</li>
				<li>Hutnictwa</li>
				<li>Wytrzymałości</li>
				<li>Siły woli</li>
</ul>
', '<p><i>szczury Artis</i> – największa biedota, nędzarze i żebracy<br />
<i>szczęście przez Artis dane</i> – zdarzenie które jest z pozoru uśmiechem losu 
ale w konsekwencji najprawdopodobniej przyniesie katastrofę i nieszczęście.</p>
<p>Śmiertelnicy muszą wiedzieć w kogo wierzyć: zasada jest taka, że skutkiem 
świadomości istnienia bóstwa jest wiara weń. Bóstwo objawia się poprzez 
dokonania wojowników duchownych, usta proroków czy niezwykłe wydarzenia zwane 
cudami. Artis nie lubi zasad więc i tą wywraca na opak. Jej kult istniał od 
zawsze, wiara w nią nigdy nie gasła a w sferach biedoty i marginesu społecznego 
co rusz przewijało się imię Artis. Pomimo braku objawień teologowie nie mogli 
przeczyć temu, iż wraz z wiarą musi istnieć jej osoba. Wciąż jednak wiąże się z 
nią ogrom kontrowersji w środowiskach filozoficznych. Grupa, która jest 
przekonana iż Artis jest boginią w pełnym tego słowa znaczeniu to tylko jedna ze 
stron dysput. Druga strona powiada, iż brak wyraźnych oznak obecności jest 
dowodem na to, iż jest to demon, upały anioł lub jeden z avatarów Potężnych. W 
dyskusji nie liczy się zmniejszająca się z roku na rok garstka mędrców którzy 
twardo przeczą istnieniu takiej postaci a kult nazywają opium dla mas biedoty. 
Bo kto może zaprzeczyć jej istnieniu widząc te miliony wiernych? Cała ta 
sytuacja dowodzi jednego. Artis, Wielka Manipulatorka, bez czynnego udziału, 
tylko poprzez samo swe istnienie potrafi wodzić za nos nawet najtęższe głowy.</p>
<p>Burza czarnych loków, kocie brązowe oczy, śniada cera i nieustannie panujący 
na ustach uśmiech eksponujący białe zęby. Odziana zazwyczaj w białe, bufiaste 
bluzki eksponujące obfity biust oraz szerokie, czerwone suknie. Rzuca się w oczy 
duża ilość biżuterii: korale o czerwonej barwie, złote, okrągłe kolczyki, 
łańcuszki, breloczki, wisiorki i amulety. U pasa szereg sakiewek i 
charakterystyczny, zakrzywiony nóż. Zazwyczaj ukazana jako dama z rozwianymi 
włosami, wirująca w szalonym tańcu lub jako dama stąpająca na palcach między 
ciałami śpiących kloszardów. Takie panuje wyobrażenie Artis, Pani Żebraków, Muzy 
Oszustów i opiekunki każdego szemranego interesu. Grono wyznawców jest szerokie. 
Począwszy od biedaków i żebraków dla których jest bogini nadzieją na lepsze 
jutro i szansą na przeżycie kolejnych dni. Kolejną grupą są wszelkiego rodzaju 
włamywacze, skrawkarze, paserzy, kieszonkowcy, ladacznice, przemytnicy, 
szulerzy, złodzieje, hieny cmentarne, ciury, kanciarze i przedstawiciele wielu 
innych profesji które obracają się wokół zawodów zarobkowych niekoniecznie 
zbieżnych z prawem. Ostatnią grupą są jubilerzy i alchemicy: ci pierwsi widzą 
jej patronat w uwielbieniu przez nią błyskotek, ci drudzy bazują na ogromnej 
potrzebie szczęścia w czasie ich ryzykownych prac. Symbolika oscylująca wokół 
Artis jest nad wyraz różnorodna. I tak na przykład w Agarakar jej częstym 
symbolem jest brązowo-ruda kocica. Dachowce takiej maści często są traktowane 
tutaj przez niższe klasy jako wysłannicy bogini, jej oczy, nos i uszy a w co 
poniektórych widzi się samą osobę patronki. Zwierzęta te są często dokarmiane i 
głupotą jest ganiać, przepędzać te zwierzęta, nie mówiąc o ich zabijaniu. Sami 
wierni czasem tatuują sobie na rękach sylwetkę kota. Kot podkreśla jej bliskość 
z ubogimi wiernymi a tak jak to zwierze bawi się ze swoimi ofiarami tak Artis 
zabawia się często kosztem wyznawców. W Meredith natomiast najpopularniejszym 
symbolem jest sroka. Tutaj bierze się pod uwagę upodobanie bogini do błyskotek 
jak również cwany i złodziejski charakter, które to wiąże ją z tym czarno-białym 
ptakiem. Wierni dość często noszą u paska kilka sroczych piór które muszą być 
porzucone przez ich właścicieli, bowiem ptaki również są uznawane jako szpiedzy 
bogini. Najbardziej cenione są długie pióra pochodzące z ogonów, które dumne 
wiesza się u paska lub przy sakiewce. Mniej popularnymi symbolami są znaczone 
karty, spiłowane kości do gry czy wyważone monety. Uniwersalnym jednak znakiem, 
rozpoznawalnym w każdym miejscu Orodlinu, jest palec przytknięty do ust 
oznaczający jakoby uciszenie rozmówcy. Tak witają się wyznawcy Artis i to jest 
głównym symbolem jej kultu.</p>
<p>Kult Artis nie posiada tradycji poszczególnych jej aspektów. Natomiast jej 
patronat można podzielić na trzy zasadnicze grupy: </p>
<ul class="sword">
				<li>Tam gdzie rozwój tam i różnice klasowe a tam gdzie różnice 
				klasowe tam i bieda. Czyś był oficerem z szeregiem orderów 
				upiętych na piersi, czyś był możnym kupcem który swe towary 
				rozprowadzał po całej krainie: to nieważne. Teraz żeś biedak, 
				stoisz na równi z innymi kloszardami i tak samo klepiesz biedę. 
				Jesteś członkiem niezliczonej trzody Artis. Każdy stojący na 
				najniższym szczeblu drabiny społecznej składa ku niej modły 
				znając charakter swej patronki: złośliwy, cwany i wyrachowany. 
				Bogini uwielbia bawić się ze swoimi wyznawcami tak jak kot bawi 
				się ze szczurem – stąd też biedaków nazywa się potocznie 
				„szczurami Artis”. Ci na skraju wytrzymałości psychicznej i 
				doszczętnie zrujnowani modlą się o śmierć: oni właśnie dostąpią 
				tejże łaski najpóźniej. Niektórzy proszą o przeżycie kolejnego 
				dnia. Potężna ceni pokorę z jaką przyjmują oni swój los biedaków 
				i im najczęściej osładza trudny żywot. Nie robi tego 
				bezinteresownie: to początek zabawy ze śmiertelnikiem, którego 
				zachłanną naturę zna Artis na wskroś. Zrujnować kogoś zabierając 
				mu wszystko to nie jest sztuka: bogini jest na tyle subtelna, że 
				rujnuje życie darując niespotykane dary. Mało jest nędzarzy na 
				tyle mądrych by wiedzieć, iż prosić się powinno tylko o to co 
				niezbędne. Wielu, gdy ma zapewnione warunki bytu zaczyna błagać 
				o więcej: wiele jest opowieści o tych, których życzenie ich 
				patronka natychmiast spełnia. Nagły przypływ gotówki, znalezione 
				mieszki z drogocennymi kamieniami, uśmiech losu na loterii. 
				Pozornie to szansa na przyszłość ale śmiertelnik poprzez swą 
				zachłanność dławi się owym bogactwem i albo wydaje wszystko 
				staczając się w jeszcze głębszą biedę albo poprzez przechwałki i 
				pychę sprowadza na siebie gniew swych niedawnych towarzyszy 
				który skutkuje kradzieżą majątku i śmiercią. W ten sposób 
				potężna zabawia się istotami ziemskimi.</li>
				<li>Zasady są po to by je łamać. Artis idzie w sukurs prawom i 
				ograniczeniom, uwielbia iść pod prąd i robić rzeczy na opak. 
				Patronuje tym, którzy potrafią wybić się poza granice praw i 
				zasad i w sposób niekonwencjonalny radzić sobie w życiu i 
				zarabiać pieniądze. Przemytnicy, ladacznice, handlarze 
				narkotyków, hieny cmentarne, właściciele burdeli czy jaskiń 
				hazardu działając wbrew prawu ofiarowują pewną część zarobku 
				jako hołd złożony w zamian za uznanie, jakim bogini ich obdarza. 
				Głównie lubuje się ona w zabawie śmiertelnikami poprzez 
				powodowanie diametralnych zmian w ich życiu i obserwowanie jak 
				sobie radzą w takich sytuacjach. Opryszki, złodzieje, 
				kieszonkowcy, włamywacze, oszuści czy rabusie składają modły do 
				swej patronki by raczyła posłużyć się nimi jako narzędziem i w 
				ten sposób zmienić jakiegoś bogacza w godnego pożałowania 
				nędznika a tym samym pozwolić swemu wyznawcy zarobić parę 
				groszy. Artis jednak zna zachłanne myśli śmiertelników i dla 
				uciechy często właśnie nimi się zabawia: czy to posyłając na 
				miejsce rabunku patrol gwardii miejskiej czy też budząc 
				właściciela okradanego mieszkania.</li>
				<li>Artis to koneserka przedmiotów wartościowych i unikalnych. 
				Kocha błyskotki i tajemne mikstury, widzi w nich misterność 
				wykonania i ogrom skupienia, pracy jakie się wkłada w stworzenie 
				tychże przedmiotów. Najbardziej jednak fascynuje ją stopień 
				ryzyka jaki jest związany z produkcją tychże wyrobów. U 
				jubilerów potrzebna jest niebywała precyzja, bowiem 
				najdrobniejszy ruch może zmienić piękny klejnot w mało 
				wartościowy kamyk, jedno drgnienie ręki potrafi obrócić w pył 
				kilka miesięcy żmudnej pracy. Alchemicy zaś w skupieniu i 
				koncentracji pokładają własne zdrowie i życie: złe przyrządzenie 
				mikstury często kończy się wytrącaniem trujących wyziewów a 
				nawet może skutkować eksplozją. W Artis, która obserwuje pracę 
				swych poddanych, fascynacja wyrobami rywalizuje z chęcią 
				zniweczenia wysiłków lub zrujnowania życia śmiertelnika. Wierni 
				więc modlą się przede wszystkim o to, by przedmiot wychodzący 
				spod ich rąk był jak najlepszy, po tym patronka skupiła się na 
				jego podziwianiu a nie na czymś innym.</li>
</ul>
<p>Miejsce poświęcone Artis w świątyniach jest tylko symboliczne i praktycznie 
nikt tam nie chodzi aby się modlić czy ofiarować dary. Tym samym kult nie 
stanowi żadnej organizacji. Jej kult jest żywy tam, gdzie mieszkają jej 
wyznawcy, czyli w dzielnicach slumsów i melin. Odpowiednikiem kapliczek są ślepe 
zaułki w których na murze ktoś wymalował symbol ust uciszanych palcem. Tam też 
wierni składają swoje skromne ofiary: od żywności, przez odzienie a na części 
łupów czy dochodów skończywszy. Mimo, że Artis pozwala, by dane jej przedmioty 
były przywłaszczane przez mieszkańców, to paradoksalnie skarby znikają bardzo 
powoli. Wiadomym jest, że dane rzeczy mogą zabrać tylko ci, którym są one 
niezbędne do przeżycia kolejnych dni. Każdy, kto zabierze je z czystej 
zachłanności czy chęci wzbogacenia się staje się od razu ofiarą złośliwej natury 
swojej patronki: tym samym ci którzy przywłaszają sobie ofiary muszą nie mieć z 
czego żyć albo być skończonymi głupcami. Jedynym świętem ku czci Artis jest 
dzień tydzień po pierwszym dniu zimy. Wtedy wierni zbierają się w umówionym 
miejscu po czym przy ogniskach dyskutują jak wspólnie przetrwać nadchodzącą 
zimę. Ci którym dobrze się powodzi mają obowiązek dzielić się własnym dobytkiem 
aby biedacy i kloszardzi mogli przeżyć mrozy i głód panujący w czasie tej 
nieprzyjaznej pory roku. Artis, mimo swej natury, dba o swe szczury.</p>
<p>Artis obdarza błogosławieństwem do: </p>
<ul class="sword">
				<li>Jubilerstwa</li>
				<li>Alchemii</li>
				<li>Zręczności</li>
				<li>Szybkości</li>
</ul>
');
        break;
}
}
?>
