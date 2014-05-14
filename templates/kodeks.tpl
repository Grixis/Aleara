<html lang="en">
	<title>Aleara MMORPG - Gra Online</title>
	<head>
	<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript" src="javascript/jquery-ui.js"></script>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/topki.css">
		<link rel="stylesheet" href="styleg.css">
		<link type="text/css" href="css/ui.css" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="css/main/default/layout.css" />		
		<div id="fb-root"></div>



	</head>
	<body style="color: #FFFFFF; background-color: #000000; background-position: center; background-image: url('ee.jpg')">

		<table border="0" cellpadding="0" cellspacing="0" style="width: 990px; height: 1050px; background-image: url('greynp2xx.png')" align="center">
			<tr>
				<td valign="top" colspan="4">
					<table cellpadding="0" cellspacing="0" style="width: 990px; height: 150px">
						<tr>
							<td style="width: 315px; height: 150px">	
								<p style="margin-left: 45px; text-align: left">
									<br> 

									<font size="1"><font color="#669999"><font face="Verdana"><b>Online (wraz z ukrytymi):</b> {$Online}<br>
									<b>Rekord graczy online:</b> {$numRecord}<br>
									<b>Mieszkańców krainy:</b> {$Players}<br>
									<b>Ostatni przybył:</b> <b>{$LastName}</b> ({$LastID}).<br>
									<b>Pogoda w krainie:</b><br>
									{$Weather}
								</p>
							</td>															
							<td style="width: 655px; height: 150px">
								<br><br><br><Br><br><br>
								<font size="1"><font color="#669999"><font face="Verdana">	
								<form action="http://aleara.pl/card.php" method="post"> 						
									<p style="margin-left: 49px;">E-mail:<input style="width: 70px; height: 17px" name="email" size="15" type="text" />
										Hasło:  <input style="width: 70px; height: 17px" name="pass" size="15" type="password" />
									<input id="graa" type="submit" value="Loguj" style="width: 70px; height: 22px" class="button"/></input></form></p>
							</td>
						</tr>
					</table>
					<table>
					<tr>
					<td>
				<center><div id="gorne_menu" style="align: center";>
						<a href="index.php"><b><font size="1"><font color="#FFFFCC"><font face="Verdana">	STARTOWA</b></a>
						<a href="register.php">	<b><font size="1"><font color="#FFFFCC"><font face="Verdana">REJESTRACJA</b></a>
						<a href="kontakt.php">	<b><font size="1"><font color="#FFFFCC"><font face="Verdana">KONTAKT</b></a>
						<a href="kodeks.php"><b><font size="1"><font color="#FFFFCC"><font face="Verdana">KODEKS</b></a>
						<a href="politykaprywatnosci.php"><b><font size="1"><font color="#FFFFCC"><font face="Verdana">PRYWATNOŚĆ</b></a>
        </div></center>
         </td>
         </tr>


					<table cellpadding="3" cellspacing="3" style="width: 990px; height: 675px">
						<tr>
							<td style="width: 220px; height: 680px" valign="top">
								<form method="post" action="register.php?action=register">   
									<table border="0" bordercolor="#999999" style=" margin-left: 45px;" cellpadding="2" cellspacing="2" width="120" id="rejestracja_form"> 
										<tr>
											<td>
												<font size="1"><font color="#669999"><font face="Verdana">Nick:
											</td>
											<td>
												<input style="width: 90px; height: 17px" type="text" name="user" />
											</td>
										</tr>
										<tr>
											<td><font size="1"><font color="#669999"><font face="Verdana">Email:</td>
											<td><input style="width: 90px; height: 17px" type="text" name="email" /></td>
										</tr>
										<tr>
											<td><font size="1"><font color="#669999"><font face="Verdana">Email:</td>
											<td><input style="width: 90px; height: 17px" type="text" name="vemail" /></td>
										</tr>
										<tr>
											<td><font size="1"><font color="#669999"><font face="Verdana">Hasło:</td>
											<td><input style="width: 90px; height: 17px" type="password" name="pass" /></td>
										</tr>
									</table>
									<select name="lang" style=" margin-left: 53px;">
										{section name=register loop=$Lang}
										<option value="{$Lang[register]}"><font size="1"><font color="#669999"><font face="Verdana">{$Lang[register]}</option>
										{/section}
									</select>
									<input id="graa" type="submit" value="{$smarty.const.REGISTER}" class="button"/></div>
								</form> 
					       <div id="facebook">
                  <div class="fb-like-box" data-href="http://www.facebook.com/alearammorpg" data-width="136" data-height="120" data-colorscheme="dark" data-show-faces="false" data-stream="false" data-header="false"></div>					
					      </div>
						      <div id="reklama"><br><br>
							      <marquee width="95" height="60" direction="up" scrollamount="1"style=" margin-left: 70px; border="1";>
									    <a href="http://brudnebaletki.strefa.pl"><img src="bbbaner.jpg" width="90" height="33"></a><br><br>
							       	<a href="http://yggdrasil.pl"><img border="0" alt="Yggdrasil – portal o grach" src="http://yggdrasil.pl/button.png" width="90" height="33"></a><br><br>
							      	<a href="http://www.kf2.pl"><img src="http://www.kf2.pl/images/banners/button2.jpg" width="90" height="33" alt="Kroniki Fallathanu - Prawdziwy mmoRPG w przeglądarce"></a><br><br>
								      <a href="http://animeonmusic.pl/news.php"><img src="http://animeonmusic.pl/images/aonmb.png"></a><br><br>
							        <a href="http://animegakure.dbnao.net"><img src="http://dbnao.szm.com/ag/b88x31_1.jpg"></a><br><br>
								      <a href="http://xboxarcade.pl"><img src="http://xboxarcade.pl/images/reklama/arcadebutton.gif"><br></a><br>
							      	<a href="http://www.rpgmaker.pl"><img src="http://rpgmaker.pl/lay/bannerki/button-a.gif" alt="Twierdza RPG Maker"></a><br>
							     </marquee><br><br>
							     <center>
{literal}<center><!-- stat.4u.pl NiE KaSoWaC --> 
<a target=_top href="http://stat.4u.pl/?demonix" title="statystyki stron WWW"><img alt="stat4u" src="http://adstat.4u.pl/s4u.gif" border="0"></a> 
<script language="JavaScript" type="text/javascript"> 
<!-- 
function s4upl() { return "&amp;r=er";} 
//--> 
</script> 
<script language="JavaScript" type="text/javascript" src="http://adstat.4u.pl/s.js?demonix"></script> 
<script language="JavaScript" type="text/javascript"> 
<!-- 
s4uext=s4upl(); 
document.write('<img alt="stat4u" src="http://stat.4u.pl/cgi-bin/s.cgi?i=demonix'+s4uext+'" width="1" height="1">') 
//--> 
</script> 
<noscript><img alt="stat4u" src="http://stat.4u.pl/cgi-bin/s.cgi?i=demonix&amp;r=ns" width="1" height="1"></noscript> 
<!-- stat.4u.pl KoNiEc -->


{/literal}
						     </div>
              </td>
			         <td style="width: 525px; height: 675px">
                <div id="ogrze">
                <div style="height:620px; margin-top: 100px; overflow:auto ">
		             <font size="1"><font color="#669999"><font face="Verdana">	
		             <b>Niniejszy dokument zawiera : </b><br />
<br />
1. Postanowienia Ogólne.     <br />
2. Konstytucja Krainy.     <br />
3. Kodeks Karny.     <br />
4. Ustawa o graczach Fabularnych, Kartach Postaci i Nazewnictwie.     <br />
5. Ustawa o rangach fabularnych.<br />
6. Ustawa o kompetencjach i rangach mechanicznych. <br />
7. Ustawa o karach. <br />
<br />
<br />
<br />
W celu regulacji praw obywatelskich, zakresu władzy i z potrzeby utrzymania porządku oraz sprawiedliwości w Cesarstwie Reisen, zostały sporządzone następujące prawa: <br />
<br /><br>
<b>Postanowienia Ogólne</b><br />
<br />
§1. Wszystkie aspekty prawne, nie zawarte poniżej regulują normy Prawa Polskiego wraz z Kodeksem Karnym i Konstytucją Państwa Poskiego.<br />
§2. Właścicielami gry są osoby określane mianem Administratorów, udostępniają oni wykreowany autorski świat gry w celach publicznej grywalności, wszystkie aspekty gry, prócz fizycznie: serwera, domeny, są ich własnością.  <br />
§3. Administratorzy sprawują pieczę nad ogółem gry, dbają o jej klimat i wszelakie przejawy szykanowania tudzież podżegania w odniesieniu do gry będą karane permanentnym banem. <br />
Namiestnik jest zwierzchnikiem Hrabiów oraz wszystkich osób podlegających ich jurysdykcji , posiadają więc wszelkie ich kompetencje. Jest bezpośrednim zastępcą władcy w sprawach fabuły i klimatu Cesarstwa. <br />
§4. Administratorzy w myśl Konstytucji Państwa Polskiego stoją na straży przestrzegania Netykiety i chronienia danych jak i dobrego imienia graczy. Stąd też uprawnieni są do wymierzania odpowiednich podług nich kar za łamanie tych zasad.<br />
§5.Każda osoba posiadająca rangę sprawuję niejako cześć władzy z ramienia Administratorów, dlatego też zabronionym jest szkalowanie imienia takich osób, a wszelakie nadużycia zgłaszane powinny być bez zbędnych środków do Administratora.<br />
§6. Wszyscy gracze obowiązani są do przestrzegania ram ustalonych w tym świecie, stąd też każdy musi posiadać uzupełnione dane w profilu, avatar i imię zgodne z rasą i klasą. <br />
§7. Gracze deklarujący grę fabularną do 10 dnia od rozpoczęcia gry musza posiadać rozpisany profil swojej postaci, w który winno znaleźć się: miano postaci, charakter, preferencje postaci, dodatkowo gracz może wzbogacać swój profil i rozbudowywać go według własnego uznania, stosując się do Ustawy o Graczach Fabularnych.<br />
§8. Organem rozstrzygających kwestie sporne osób na stanowiskach rangowych są  tylko i wyłącznie administratorzy.<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<b>Konstytucja Krainy </b><br />
<br />
§1. Władza najwyższa pozostaje w rękach administratorów.<br />
§2. Administratorzy wespół z osobami przezeń wyznaczonymi wyznaczają ramy fabularne świata wykreowanego. <br />
§3. Administratorzy powoływać mogą: Książęta, Namiestnik, Hrabiowie, Dowódca Straży, Strażnicy, Właściciel Karczmy, oraz Rada Krainy, po to by z ich ramienia osoby te pomagały im w utrzymywaniu ładu w krainie. <br />
§4. Każde nadużycie panelu, tudzież bugów w grze będzie surowo karane.  Zaufanie jakim obdarzany jest przez administrację gracz uzyskujący rangę winien pielęgnować, działać wyłącznie dla dobra krainy.<br />
§5. Prawo w krainie ustanawia Administracja a organem doradczym może być osoba Namiestnika bądź osoby Hrabiów.  O wszelakich zmianach gracze winni być poinformowany na dzień przed ich wprowadzeniem, nie później, gdyż wchodzące prawo nabiera mocy prawnej z chwilą jego ogłoszenia.  <br />
§6. Prawo nie działa wstecz.<br />
§7. Każdy gracz winien zapoznać się z Kodeksem Krainy, noszącym w sobie wszelakie ustawy i postanowienia utworzone dla dobra ogółu. <br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<b>Kodeks Karny </b><br />
<br />
§ 1. Ataki na gracza:
 • Każdemu nowo przybyłemu graczowi przysługuje 7 dni okresu ochronnego, jest to czas w którym zabrania się atakowania nowego gracza przez pozostałych użytkowników. <br>
 • Dopuszcza się możliwość przeprowadzenia maksymalnie 3 ataków na postać gracza, lecz owe ataki muszą być zachowane w odstępach co najmniej 5 godzinnych. <br>
 • Nagminne i notoryczne nękanie gracza ciągłymi atakami może być potraktowane jako akt zawiści, jednak tutaj o wymiarze kary decyduje administracja.
<br />
§ 2. Kradzieże:<br />
 • Zabrania się okradania nowo przybyłych w okresie do 7 dni.<br>
 • Kradzieże mechaniczne mogą zostać połączone w fabule i wykorzystane przez poszkodowanego do założenia sprawy fabularnej w razie przyłapania sprawcy kradzieży. 
<br>

§ 3. Godność:<br />
 • Zabronione jest obrażanie gracza używając słów uważanych powszechnie za obraźliwe. 
 • Zabrania się urażania uczuć religijnych i etycznych graczy, lecz w kwestiach spornych decyzję podejmują Naznaczeni, decydując czy dany incydent godzi w jakiekolwiek uczucia poszkodowanego. 
<br>
§ 4. Gildie: <br />
 • Gildia winna posiadać nazwę w klimacie fantasy, nie powinna ona być zaczerpnięta z jakiegokolwiek języka nowożytnego.<br> 
 • Osoby przynależące do gildii obligowane są do ogrywania tego faktu w fabule.<br>
 • Walki pomiędzy w/w organizacjami mają jedynie wtedy rację bytu, gdy jest to połączone fabularnie. Każdorazowe ataki mechaniczne bez wcześniejszego rozwinięcia fabuły są zabronione. 
<br>
§ 5. Przelewy bankowe i konta:<br />
 • Gracz może posiadać tylko jedno konto w grze, chyba, że administracja zadecyduje inaczej. <br>
 • Osoby posiadające ten sam adres IP winny zgłosić ten fakt Strażnikowi i umieścić tę informację w profilu. <br>
 • Zabronione jest przesyłanie jakichkolwiek dóbr materialnych osobom o tym samym adresie IP. <br>
 • Wszelakie nieścisłości, tudzież kwestie sporne dotyczące posiadania przez gracza drugiego konta i aktywnie korzystającego z obydwóch rozstrzygać będzie administracja wespół z Namiestnikiem lub Hrabiami. <br>
§ 6. Bugi: <br />
 • Wykorzystywanie bugów i niedociągnięć silnika gry jest kategorycznie zakazane, pod groźbą banicji.<br>
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<b>Ustawa o graczach Fabularnych, Kartach Postaci i Nazewnictwie </b><br />
<br />
§ 1. Każdy gracz fabularny winien posiadać rozbudowany profil.<br />
§ 2. O zgodności profili z fabułą decydują Strażnicy, jako organ pierwszej interwencji.
<br />
§ 3. Profil winien zawierać wszelkie informacje ułatwiające interakcję z innymi graczami, jak i podawać niezbędne dane Hrabiom do prowadzenia sesji z uczestnictwem tychże postaci.<br />
§ 4. Treści profili sprawdzane są sukcesywnie przez Strażników, zaś Harmonogram prac ustalają Hrabiowie. Niestosowne rzeczy, na wniosek Strażnika proszone będą o usunięcie. Brak reakcji ze strony gracza karany będzie odpowiednio lochami, lub banicją. <br />
§ 5. Prócz informacji ogólnodostępnych gracz jedynie za pozwoleniem Administracji  lub Namiestnika może umieścić w profilu rzeczy, które zakazuje poniższy artykuł. <br />
§ 6. Graczowi zabrania się pod karą lochów, a później banicji zamieszczania w swoich profilach treści takich jak: <br />
 • całokształt literaturowy, bez odpowiedniego cytowania, lub zamieszczania autora pierwowzoru,<br />
 • tekstów w obcym języku nowożytnym (teksty piosenek, wiersze etc.),<br />
 • grafik nie będących uzupełnieniem profilu, zdjęć bez odpowiedniego retuszu,<br>
 • wulgaryzmów  będących pogwałceniem kultury osobistej i dobrego smaku,<br>
 • wszelakich przejawów i opisów o zabarwieniu pornograficznym,<br>
 • wizerunków przedmiotów i syboli odbiegających od szeroko rozumianego klimatu oraz mogą urazić innych mieszkańców (np. swastyka).<br>
§ 7. Każdy gracz winien posiadać miano swojej postaci, musi być ono zgodne z poniższymi zasadami: <br />
 • Zabrania się używania nazw własnych postaci realnych.<br>
 • Zabrania się używania nazw w języku obcym nowożytnym.<br>
 • Dopuszczalnym jest stosowanie nazw postaci literaturowych, jednakże postać prowadzona przez gracza musi wykazywać odmienny charakter i rys profilowy.<br>
§ 8. Wizerunek postaci, określany potocznie Avatarem, zawierać musi przynajmniej w większości zgodnośc z obraną rasą i klasą. Na wszelakie odstępstwa pozwolenia udzielają Administratorzy gry, lub Namiestnik. <br />
§ 9. Zabronione jest używanie avatarów, które przedstawiają: <br>
 • inną rasę, klasę, wiekm płeć bądź rangę niż ta przedstawiona mechanicznie,<br>
 • zawierają treści wulgarne, obraźliwe, pornograficzne bądź rasistowskie etc.,<br>
 • znanych, sławnych i medialnych ludzi (np. polityków, aktorów, artystów oraz postaci z gier),<br>
 • rzeczy ze świata współczesnego, niezgodnych z realiami krainy (np. odzież współczesna, aparat cyfrowy, samochód),<br>
 • zdjęcia (znanych osob bądź będących manipulacją),<br>
 • jedynie zwierzęta bądź wyraźnie przysłaniających postać gracza,<br>
 • więcej niż jedną osobę (w przypadku gdy trudne jest wyodrębnienie na nim postaci gracza),<br>
 • znanych postaci z literatury, bajek, filmów czy będących ich karykaturami oraz postaci z mangi bądź anime,<br>
 • zawierać wizerunków przedmiotów i syboli odbiegających od szeroko rozumianego klimatu oraz mogą urazić innych mieszkańców (np. swastyka).<br>
§ 10. Karta Postaci. Każdy gracz fabularny winien stworzyć zakładkę w swoim profilu o nazwie „Karta Postaci”. Jest to informacja dla osób uprawnionych do prowadzenia rozgrywek o wszelakich nadzwyczajnych zdolnościach prowadzonej postaci, czy modyfikacjach.<br />
§ 11. Karta Postaci winna zawierać szczegółowo opisaną cechę, którą szczycić się może nasza postać, opisaną według schematu:<br>
Nazwa cechy:<br>
Historia nabycia:<br>
Opis cechy:<br>
ID Mistrza Gry wyrażającego przyzwolenie:<br>
§ 12. Gracz przed umieszczeniem w Karcie Postaci, cechy, umiejętności, zaklęcia, modyfikacji rasowej etc. winien przedyskutować ją z Hrabią (Mistrzem Gry) i uzyskać nań pozwolenie. Od decyzji Hrabiego nie ma odwołania i zabrania się angażowania innego MG w akceptację, gdy poprzedni nie wyraził zgody. <br />
§ 13. Gracz posiadający zaakceptowane umiejętności w Karcie Postaci, może z nich swobodnie korzystać w sesjach ogólnych jak i tych prywatnych. <br />
§ 14. Wszelakie przejawy nieprzestrzegania Ustawy karane będą odpowiednio: ostrzeżeniem, lochami, banicją. <br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<b>Ustawa o rangach fabularnych</b><br />
<br />
§ 1. Postanowienia ogólne: <br />
 • Ranga fabularna jest także stanowiskiem zajmowanym przez daną postać. <br />
 • Ma ona charakter czasowy, a każdorazowa zmiana postaci wymaga ponownego uzasadnienia kontynuacji stanowiska lub brania udziału w konkursie na ową rangę. <br />
 • Rangę fabularną można uzyskać poprzez rozpisany na stale konkurs w odpowiednim dziale na forum, lub poprzez nadanie przez Władcę, lub osobę o wystarczających uprawnieniach.<br />
 • Stanowisko Fabularne nakłada poniekąd na postać cele i pewne założenia, których należy się trzymać dla dobra odgrywanej rangi. <br />
 • Rang fabularnych nie należy kolekcjonować na potęgę. Można posiadać maksymalnie 1 rangę fabularną, a każda następna skutkować będzie usunięciem mniej ważnej.  <br />
 • W przypadku nadania rangi przez Mistrzów Gry (Hrabiów), gracz musi uzyskać tdwa pozytywne głosy akceptacji by owe stanowisko uzyskać, po uprzednim złożeniu podania na forum, lub w głosowaniu tajnym, po rozpisaniu konkursu i nadesłaniu zgłoszenia. <br />
 • Stanowiska fabularne pociągają za sobą także pewną odpowiedzialność, dlatego nie należy wykorzystywać nadanych z tego przywileju kompetencji do tylko i wyłącznie własnych celów. Ranga fabularna jest dla postaci, w mniejszym stopniu dla gracza. <br />
 •  Odgórnym nadaniem rangi może być fakt kierowania ważną dla danego Królestwa Organizacją, tudzież Klanem, a także uzyskaniem pewnych przywilejów fabularnych od Władcy danego regionu.<br>
  <br />
<br />
<br />
<br />
<br />
<br />
<br />
<b>Ustawa o kompetencjach i rangach mechanicznych</b><br />
<br />
§ 1. Władzę ogólną w grze sprawuje Administracja. Zakres władzy Administratorów jest równy zarządzaniu swoją własnością, czyli jest absolutny. Administracja powołać może następujące rangi niższe, wspierające Adminów w kreśleniu wizji gry:<br>
 • Książęta:
Osoby równające się swoimi kompetencjami z Administracją, podczas ich nieobecności sprawujące pieczę na grze.
<br>
 • Namiestnik:<br>
Osoba powoływana bezpośrednio przez Administrację. Trzymająca pieczę nad poczynaniami fabularnymi gry. <br>
Namiestnicy posiadają pełnię praw decyzyjnych odnośnie fabuły gry jak i spraw będących bezpośrednio powiązanych z samą specyfiką klimatu, z pominięciem decyzyjności w sprawy fizyczne serwera.<br>
To osoba, będąca zwierzchnikiem wszystkich innych rang fabularnych jak i mechanicznych, posiada kompetencję do rozpisywania według własnego uznania konkursów na owe rangi.<br>
Jest Najwyższym Mistrzem Gry. Może nadawać punkty klimatu, kreować świat według własnej woli, nadawać równorzędne pozwolenia z Administracją, odnośnie nazewnictwa i profili. Namiestnik Posiada wszelakie kompetencję rang mu podległych.
Zakresem jego obowiązków jest kontrola rang mu podległych jak i prowadzenie fabuły głównej gry.
<br>
 • Hrabiowie:<br>
To osoby, które są podległe bezpośrednio pod Namiestnika i pełnią funkcję Mistrzów Gry.<br>
Posiadają pełnie praw do kreowania fabuły zgodnej z głównym nurtem nakreślonym przez Namiestnika. Mają obowiązek prowadzenia sesji ogólnych. <br>
Mogą wydawać pozwolenia odnośnie Kart Postaci, przyznawać punkty klimatu.<br>
Decyzja Mistrza Gry jest wiążąca i tylko Namiestnik bądź Administracja może podważyć jego zdanie. <br>
Hrabiowie odpowiadają za pracę Najwyższego Sędziego, Dowódcy Straży, Najwyższego Kapłana, Właściciela karczmy, Redaktora, Bibliotekarza oraz wszystkich osób im podległych i posiadają wszystkie uprawnienia podległych im osób.<br>
Mogą w porozumieniu z Namiestnikiem rozpisywać konkursy na powyższe rangi i w systemie głosowania podejmować decyzje o osadzeniu gracza na którymś ze stanowisk.<br>
Są to osoby zajmujące się zazwyczaj jedną z dziedzin świata gry, wyznaczonej przez Administrację lub Namiestnika.<br>
 • Dowódca Straży/Strażnik:<br>
Są to osoby odpowiedzialne za zgodność i poprawność Nazw i Profili. Mogą wymierzać kary przewidziane w Ustawie dotyczącej Kar i Wyroków.<br>
Dowódca Straży odpowiada za koordynację pracy Strażników, obligowany jest także o składanie raportu czasowego z ich pracy odpowiedniemu Hrabiemu.<br>
Strażnicy pilnują porządku w świecie przedstawionym, dlatego też są obligowani do ogrywania postaci strażnika przez ich postać.<br>
 • Najwyższy Sędzia i organ prawny:
Sędzia Najwyższy jak i Sędziowie i prawnicy to organ sądowniczy. W zakresie ich kompetencji leży reprezentowanie graczy poszkodowanych i zarządzenie wyroków.<br>
Do ich obowiązków należy także modyfikacja prawa na prośbę Hrabiego lub Namiestnika, opracowanie nowych przepisów ect.<br>
 • Właściciel Karczmy:
Osoba podległa jurysdykcji Hrabiowskiej. Będąca pewnego rodzaju Mistrzem Gry w Karczmie.<br>
Karczmarze obowiązani są do pilnowania klimatu w karczmie. Posiadają pozwolenie na sędziowanie walk w karczmach i prowadzenie sesji, za pomocą funkcji narratora.<br>
Ich decyzję mają charakter wiążący, a odwołać można się tylko do Hrabiego, któremu są podlegli.<br />
 <br />
<br />
<br />
<br />
<br />
<br />
<b>Ustawa o Karach</b><br />
<br />
§ 1. Za złamanie po raz pierwszy jakiegokolwiek z punktów prawa, prócz Konstytucji Krainy, gdyż ta rozpatrywana jest z osobna przez Administrację, osoba łamiąca prawo może zostać upomniana naganą pisemną przez osobę do tego upoważnioną.<br />
§ 2. Za złamanie po raz drugi któregokolwiek z artykułów grozi odpowiednio:<br>
 • Kara pieniężna – jej wysokość ustala Sędzia lub osoba do tego upoważniona.
 • Kara pozbawienia wolności – długość dni w lochach zarządza Sędzia lub organ do tego upoważniony.<br>
 • Kara pieniężna i lochu lub czyn społeczny – w przypadku grzywny i lochów, jak w punkcie powyżej, w przypadku czynu, sędzia lub osoba do tego upoważniona określa charakter zadość uczynienia w postaci czynu społecznego.<br>
§ 3. Za złamanie po raz trzeci któregokolwiek z artykułów grozi banicja z krainy, lub kara inna nie przewidziana w dwóch poprzednich punktach, którą wymierza Administracja lub osoba do tego upoważniona.<br>
<br />
Ustawa ta ma charakter pomocniczy, a wysokość kar i długość przebywania w lochach zależy od czynu jaki dopuścił się gracz. Sędzia lub osoba władna mogą ułaskawić oskarżonego, gdy zostaną im przedstawione niezbite dowody na niewinność oskarżonego lub też oskarżony dokonał już jakiegoś czynu zadość uczynniającego.<br />
</div>
				      </td>
               <td style="height: 675px; width: 240px">
                <div id="online" style="height:620px; overflow:auto ">
				         <font size="1"><font color="#669999"><font face="Verdana">
						 <br>
				         <p id ="online" style="margin-left: 0px; margin-left: 23px; text-align: left; font-size:16px">	
					       <i>Ładowanie listy online...</i>
						  </p>
						  <script type="text/javascript">
						  $("#online").load("onlinelist3.php");
						  </script>
               </div>
		        	</td>
		        </tr>
	         </table>
	        
	        
	        		
          <table>	
           <div id="stopka">
            <tr>
		          	<td style="height: 130px; width: 950px">
	               <center><font size="1"><font color="#669999"><font face="Verdana"><b>Aleara Engine powstały na Orodlin Engine</b><br>
                 <br>Toplisty: <a href="http://toplista.i-rpg.pl/glosuj,DemoniX"><font color="#669999">top50.com.pl</font></a> | <a href="http://top50.com.pl"><font color="#669999">top50.com.pl</font></a> | <a href="http://rpgtextowe.topka.pl/?we=demonix"><font color="#669999">rpgtextowe.topka.pl</font></a> | <a href="http://mmorpg.toplista.pl/?we=demonix"><font color="#669999">mmorpg.toplista.pl</font></a> | <a href="http://top30.nboo.eu"><font color="#669999">top30.nboo.eu</font></a> | <a href="http://graonline.toplista.pl/?we=demonix"><font color="#669999">graonline.toplista.pl</font></a><br> | <a href="http://xnova.toplista.eu/in.php?id=52956"><font color="#669999">xnova.toplista.eu</font></a> | <a href="http://gildwars.topka.pl/?we=demonix"><font color="#669999">gildwars.topka.pl</font></a> | <a href="http://rpg.najlepsze.net/?we=demonix"><font color="#669999">rpg.najlepsze.net</font></a> | <a href="http://toplista.game-dev.pl"><font color="#669999">toplista.game-dev.pl</font></a>
			           <br>Partnerzy:<a href="http://yggdrasil.pl" alt="Yggdrasil – portal o grach"><font color="#669999">Yggdrasil – portal o grach</font></a> | <a href="http://www.kf2.pl" alt="Kroniki Fallathanu - Prawdziwy mmoRPG w przeglądarce"><font color="#669999">Kroniki Fallathanu MMORPG</font></a>
			           </center>
	             </td>
	             </tr> 
            </div>
           </table>








	         
{literal}<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
{/literal}

</body>
</html>	