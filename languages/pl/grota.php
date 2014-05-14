<?php

require_once("languages/".$player -> lang."/corenames2.php");

if (!defined('ERROR')) define('ERROR','Zapomnij o tym!');
if (!defined('BACK')) define('BACK','Wróć');

if ($player -> corepass != 'Y') {
	define('NO_MONEY', 'Licencja kosztuje 500 sztuk złota - których akurat nie masz przy sobie. Proszę, wróć kiedy będziesz miał odpowiednią sumę.');
	define('YES_LICENSE', 'Świetnie - masz już Licencję. Kliknij <a href="grota.php">tutaj</a> aby kontynuować.');
	define('COREPASS_INFO', 'Witaj w grocie!');
	define('A_YES', 'Jasne, kupuję.');
	define('A_NO', 'Nie...');
	define('HAVE_MONEY', 'Masz 500 sztuk złota - dlaczego nie kupisz licencji? To otworzy Ci kolejne miejsce w mieście.');
	}
else if (!isset($_GET['view'])) {

	if ($player -> location == 'Altara')
		define('CORE_MAIN', 'Witaj w Sektorze! Widzę, że masz swoją licencję... w porządku, baw się dobrze.');
	else
		define('CORE_MAIN', 'Po krótkim spacerze przybywasz do groty. Twoim oczom ukazuje się przepiękny widok. Polana usiana jest egzotycznymi kwiatami, a gdzieniegdzie widać jak ludzie, elfy i przedstawiciele innych ras krzątają się między klatkami z wojownikami. W najdalszym miejscu Polany widzisz Arenę, na której walczą ze sobą dwa chowańce. Co robisz?');

	define('A_MY_CORE', 'Moje Chowańce');
	define('A_ARENA', 'Arena wojowników');
	define('A_TRAIN', 'Sala Treningowa wojowników');
	define('A_MARKET', 'Sklep z wojownikami');
	define('A_SEARCH', 'Szukaj');
	define('A_BREED', 'Zagroda wojowników');
	define('A_MONUMENTS', 'Najlepsze chowańce');
	
	}
else {
	if ($_GET['view'] == 'my') {
		define('MY_CORES_INFO', 'Tutaj jest lista Twoich wojowników.');
		define('NORMAL_ARENA','Arena Zwykła');
		define('MAGIC_ARENA','Arena Magiczna');
		if (isset($_GET['id']) || isset($_POST['id'])) {
			if (isset($_GET['action']) && $_GET['action'] == 'changename') {
				define('NAME_CHANGED','Imię zostało zmienione');
				}
			else if (isset($_GET['action']) && $_GET['action'] == 'free') {
				define('FREE_INFO','Możesz wyrzucić wojownika. Nie będziesz go mógł potem odzyskać.');
				define('CORE_FREE','Wojownik został wyrzucony.');
				}
			else if (isset($_GET['action']) && ($_GET['action'] == 'activate' || $_GET['action'] == 'deactivate')) {
				define('ACTIVATE_INFO','Możesz zapisać wojownika na arenę aby mógł walczyć z wojownikami innych graczy.');
				define('WRONG_STATUS','Możesz zapisać na arenę tylko odpoczywające wojowniki.');
				define('IS_SEAD','Możesz zapisać na arenę tylko żywych wojowników.');
				define('DEACTIVATE_INFO','Możesz wykreślić wojownika z areny.');
				define('WRONG_STATUS2','Wojownik nie jest zapisany na arenę.');
				define('YOU_PAY','Musisz zapłacić za to');
				define('PLATINUM','sztuk mithrilu');
				define('ADAMANTIUM','bryłek adamantytu');
				define('CRYSTAL','kawałków kryształu');
				define('NO_MONEY','Nie stać Cię na to.');
				define('CORE_ACTIVATED','Zapisałeś swojego wojownika na arenę.');
				define('CORE_DEACTIVATED','Wypisałeś swojego wojownika z areny.');
				}
			else if (isset($_GET['action']) && $_GET['action'] == 'sell') {
				define('SELL_INFO','Możesz wystawić wojownika na sprzedaż. Podaj cenę:');
				define('BAD_PRIZE','Cena musi być liczbą naturalną dodatnią.');
				define('IS_DEAD','Nie możesz sprzedać martwego wojownika.');
				define('YOU_SOLD','Wystawiłeś wojownika na sprzedaż.');
				define('WRONG_STATUS','Nie możesz sprzedać aktywnego wojownika. Najpierw zabierz go z areny.');
				}
			else if (isset($_GET['action']) && $_GET['action'] == 'unsell') {
				define('YOU_UNSOLD','Wycofałeś ofertę sprzedaży wojownika.');
				define('NOT_FORSALE','Ten wojownik nie jest na sprzedaż.');
				}
			else if (isset($_GET['action']) && $_GET['action'] == 'pass') {
				define('NO_PLAYER','Nie ma takiego gracza.');
				define('NO_SELF','Czy aby na pewno chcesz przekazać wojownika samemu sobie?');
				define('PASS_INFO','Możesz przekazać wojownika innemu graczowi. Podaj jego numer ID:');
				define('YOU_PASSED','Przekazałeś wojownika');
				define('TO_PLAYER','graczowi');
				define('YOU_GOT','Dostałeś wojownika');
				define('FROM_PLAYER','od gracza');
				define('WRONG_STATUS','Nie możesz przekazać aktywnego wojownika, bądź wojownika wystawionego na sprzedaż.');
				}
			else if (isset($_GET['action']) && ($_GET['action'] == 'heal' || $_GET['action'] == 'resurrect')) {
				define('NO_NEED_HEAL','wojownik nie potrzebuje uzdrowienia.');
				define('NO_NEED_RES','wojownik nie potrzebuje wskrzeszenia.');
				define('NEED_RESURRECT','wojownik potrzebuje wskrzeszenia, a nie leczenia.');
				define('HEAL_COST','Za uleczenie wojownika zapłacisz');
				define('RESURRECT_COST','Za wskrzeszenie wojownika zapłacisz');
				define('PLATINUM','sztuk mithrilu');
				define('ADAMANTIUM','bryłek adamantytu');
				define('CRYSTAL','kawałków kryształu');
				define('NO_MONEY','Nie stać Cię na uleczenie wojownika.');
				define('NO_MONEY2','Nie stać Cię na wskrzeszenie wojownika.');
				define('CORE_HEALED','Twój wojownik jest uleczony.');
				define('CORE_RESURRECTED','Twój wojownik został wskrzeszony.');
				}
			define('NOT_YOURS','To nie Twój wojownik!');
			define('NO_CORE','Nie ma takiego wojownika!');
			define('C_NAME','Imię');
			define('A_HEAL','ulecz');
			define('A_FREE','wyrzuć');
			define('A_PASS','przekaż');
			define('A_RESURRECT','wskrześ');
			define('A_SELL','sprzedaj');
			define('A_UNSELL','wycofaj ofertę');
			define('A_ACTIVATE','zapisz na arenę');
			define('A_DEACTIVATE','wycofaj z areny');
			define('CHANGE_NAME','zmień imię');
			define('C_SPECIES','Gatunek');
			define('C_GENDER','Płeć');
			define('GOLD_PIECES','sztuk złota');
			define('GENDER_MALE','Samiec');
			define('GENDER_FEMALE','Samica');
			define('C_HP','Punkty życia');
			define('C_DEAD','Martwy');
			define('C_ATTACK','Atak');
			define('C_DEFENCE','Obrona');
			define('C_SPEED','Szybkość');
			define('C_TEXT','Opis');
			define('C_WINS','Zwycięstw');
			define('C_LOSES','Porażek');
			define('C_AGE','Wiek');
			define('C_MATURE','dojrzały');
			define('C_IMMATURE','młody');
			define('C_ATUT','Atuty');
			define('C_STATUS','Status');
			define('C_ARENA','Arena');
			define('DAYS_TO_BREED','dni do możliwości rozrodu');
			define('ARENA_Z','Zwykła');
			define('ARENA_M','Magiczna');
			define('ACTIVE','Gotowy do walki');
			define('NONACTIVE','Odpoczywa');
			define('FORSALE','Wystawiony na sprzedaż');
			$description = array('',
				'Łasica',
				'Sokół',
				'Zmutowany żądlak',
				'Jeleń',
				'Dzik',
				'Pustynny wąż',
				'Wielki orzeł',
				'Wilk',
				'Wielki skorpion',
				'Bizon',
				'Olbrzymi jaszczur',
				'Niedźwiedź',
				'Tygrys',
				'Nosorożec',
				'Olifant',
				'Harpia',
				'Pegaz',
				'Minotaur',
				'Centaur',
				'Jednorożec',
				'Gorgona',
				'Gryf',
				'Astralny Wojownik',
				'Feniks',
				'Mantikora',
				'Behemot',
				'Hydra',
				'Zielony smok',
				'Czerwony smok',
				'Czarny smok'
				);

			}
		}
	else if ($_GET['view'] == 'search') {
		define('SEARCH_INFO','Stoisz przed ołtarzem przywoływania. Jeśli chcesz, możesz złożyć ofiarę bożkom lasu z 5 bryłek adamantytu, 3 kawałków kryształu, 1 bryłki meterorytu. Skup się i wypowiedz uważnie inskrypcję zapisaną na ołtarzu a może uda Ci się przywołać wojownika. Na każdą próbę musisz poświęcić 1 energii.');
		define('YOU_CAN','Możesz spróbować przywołać wojownika');
		define('TIMES','razy.');
		define('NO_ENERGY','Nie masz wystarczającej ilości energii do przywołania wojownika.');
		define('NO_MINERALS','Nie masz wystarczającej ilości minerałów do przywołania wojownika.');
		define('NO_CORES','Nie udało Ci się przywołać żadnego wojownika.');
		define('SUMMON','przywołuj');
		define('YOU_SUMMON','Przywołałeś');
		define('YOU_GAINED','Zdobyłeś');
		define('EXPERIENCE','punktów doświadczenia');
		}
	else if ($_GET['view'] == 'market') {
		define('MARKET_INFO','Witaj w sklepie z wojownikami. Tutaj możesz sprzedać innym graczą swojego wojownika, bądź sam możesz go kupić od innych graczy.');
		define('A_BUY','Kup');
		define('C_ATTACK','Atak');
		define('C_DEFENCE','Obrona');
		define('C_SPEED','Szybkość');
		define('C_HP','Punkty życia');
		define('C_GENDER','Płeć');
		define('GOLD_PIECES','sztuk złota');
		define('SELL_TEXT','Wystaw wojownika na sprzedaż:');
		define('GENDER_MALE','Samiec');
		define('GENDER_FEMALE','Samica');
		define('A_SELL','sprzedaj');
		if (isset($_GET['buy'])) {
			define('NOT_FOR_SALE','Ten wojownik nie jest na sprzedaż.');
			define('NO_MONEY','Nie stać Cię na zakup tego wojownika. Wróć gdy zdobędziesz więcej pieniędzy.');
			define('YOU_BOUGHT','Kupiłeś wojownika. Został on przetransportowany na Twoją polanę.');
			define('BOUGHT','kupił wojownika');
			define('YOU_GOT','Dostałeś');
			define('TO_BANK','do banku.');
			define('IS_YOURS','Gratuluję! Kupiłeś wojownika od samego siebie. Wpłaciłeś już pieniądze na swoje konto bankowe, a Twój wojownik został przetransportowany z Twojej polany na Twoją polanę. I czego Ci oczy wyłażą? Myślisz, że nie mam nic lepszego do roboty? Zajmij się czymś pożytecznym, a nie porządnym ludziom głowę zawracasz. I to już! Bo psem poszczuję.');
			}
		}
	else if ($_GET['view'] == 'arena') {
		define('ARENA_INFO','Witaj na arenie wojowników.');
		define('ARENA_Z','Arena Zwykła');
		define('ARENA_M','Arena Magiczna');
		define('ARENA_Z_INFO','Zwykła arena....');
		define('ARENA_M_INFO','Arena Magiczna.... ');
		define('NO_ENERGY','Nie masz wystarczająco energii, żeby walczyć (każda walka kosztuje Ciebie 0.5 energii).');
		if (isset($_GET['arena'])) {
			define('WRONG_ARENA','Jakiej areny szukasz?');
			define('NO_ACTIVE_CORE','Nie masz wojowników zapisanych na tę arenę.');
			define('NO_OPPONENTS','Nie ma żadnych przeciwników na tej arenie.');
			define('CHOOSE_YOUR','Wybierz swojego wojownika do walki:');
			define('CHOOSE_OPPONENT','Wybierz przeciwnika:');
			define('DO_FIGHT','Walcz');
			}
		if (isset($_GET['action']) && $_GET['action'] == 'fight') {
			define('NO_CORE','Nie masz takiego wojownika.');
			define('NO_OPPONENT','Nie ma takiego przeciwnika.');
			define('YOURS_EXHAUSTED','Twój wojownik jest zbyt zmęczony, by dalej walczyć.');
			define('OPPONENTS_EXHAUSTED','wojownik przeciwnika jest zbyt zmęczony, by dalej walczyć.');
			define('NOT_YOURS','To nie Twój wojownik!');
			define('YOURS_IS_DEAD','Twój wojownik jest martwy.');
			define('OPPONENTS_IS_DEAD','Wrogi wojownik jest martwy.');
			define('YOUR_OWN','Twoi wojownicy nie mogą walczyć przeciw sobie.');
			define('DIFFERENT_ARENA','Wojownicy z innych aren nie mogą walczyć przeciwko sobie.');
			define('VERSUS',':: przeciwko ::');
			define('ATTACKS','atakuje');
			define('AND_HITS','i zadaje');
			define('DAMAGES','obrażeń');
			define('HP_LEFT','zostało');
			define('YOU_WON','Twój wojownik zwycięża.');
			define('YOU_DRAW','Walka została nierozstrzygnięta.');
			define('YOU_LOST','Twój wojownik przegrywa.');
			define('YOU_GOT','Zdobywasz');
			define('GOLD_PIECES','sztuk złota');
			define('PLATINUM',' sztuk mithrilu');
			define('CORE_M','wojownik');
			define('CORE_B','wojownika');
			define('ATTACKED','zaatakował');
			}
		}
	else if ($_GET['view'] == 'train') {
		define('TRAIN_INFO','Witaj na sali treningowej. Pokaż nam swojego wojownika, a my już dobierzemy dla niego specjalny zestaw ćwiczeń.');
		define('TRAIN_TEXT','Wybierz wojownika do treningu:');
		define('A_TRAIN','trenuj');
		if (isset($_POST['id'])) {
			define('NOT_YOURS','To nie Twój wojownik!');
			define('WRONG_STATUS','Nie możesz trenować wojowników wystawionych na sprzedaż lub na arenę.');
			define('FOR_ONE_TRAIN','Za każdy udany trening zapłacisz');
			define('PLATINUM','sztuk mithrilu');
			define('ADAMANTIUM','bryłek adamantytu');
			define('CRYSTAL','kawałków kryształu');
			define('ENERGY','energii');
			define('YOU_CAN_TRAIN','Maksymalnie możesz trenować wojownika');
			define('TIMES','razy');
			define('C_ATTACK','Atak');
			define('C_DEFENCE','Obrona');
			define('C_SPEED','Szybkość');
			define('WRONG_STAT','Co Ty właściwie chcesz trenować?');
			define('NO_MINERALS','Nie stać Cię na taki trening.');
			define('NO_ENERGY','Nie masz wystarczająco energii.');
			define('YOU_TRAINED','Wytrenowałeś');
			define('YOU_GOT','Zdobyłeś');
			define('BREEDING','Umiejętności hodowla');
			define('EXPERIENCE','Punktów doświadczenia');
			define('T_ATTACK','siły ataku');
			define('T_DEFENCE','obrony');
			define('T_SPEED','szybkości');
			define('YOU_PAID','Wydałeś');
			}
		}
	else if ($_GET['view'] == 'breed') {
		define('BREED_INFO','Ładny zakątek, co nie? To właśnie tu możesz przyprowadzić swoich wojowników, by spróbować je rozmnożyć. Mamy pełen wybór afrodyzjaków dostosowanych do każdego gatunku. To gdzie są nasi zakochani?');
		define('CROSS_CORE','Skrzyżuj wojownika');
		define('WITH_CORE','z wojownikiem');
		define('A_CROSS','skrzyżuj');
		define('NO_MALE_CORE','Nie masz żadnego samca nadającego się do rozrodu');
		define('NO_FEMALE_CORE','Nie masz żadnej samicy nadającej się do rozrodu');
		if (isset($_POST['maleid']) && isset($_POST['femaleid'])) {
			define('NOT_YOURS','To nie Twój wojownik!');
			define('WRONG_STATUS','Nie możesz skrzyżować wojowników wystawionych na sprzedaż lub na arenę.');
			define('WRONG_GENDER','Natura tego tak nie zaprojektowała');
			define('TOO_YOUNG','Czy ten wojownik aby nie jest za młody?');
			define('NEED_REST','Spokojnie ogierze, wojownicz też muszą odpocząć.');
			define('IS_DEAD','Zwłoki mi tu przynosisz?');
			define('WRONG_SPECIES','Laboratorium genetyczne drugie drzwi na prawo doktorze Frankenstein.');
			define('C_ATTACK','Atak');
			define('C_DEFENCE','Obrona');
			define('C_SPEED','Szybkość');
			define('C_HP','Punkty życia');
			define('NO_MINERALS','Nie stać Cię na to. Wróć gdy zdobędziesz minerały.');
			define('YOU_PAY','Będzie cię to kosztować');
			define('YOU_NEED','Potrzebujesz na to');
			define('PLATINUM','sztuk mithrilu');
			define('ADAMANTIUM','bryłek adamantytu');
			define('CRYSTAL','kawałków kryształu');
			define('METEOR','kawałków meteorytu');
			define('ENERGY','energii');
			define('NO_ENERGY','Nie masz wystarczajaco energii');
			define('SUCCESS','Udało Ci się skrzyżować wojowników');
			define('LOSE','Nie udało Ci się skrzyżować wojowników');
			define('YOU_GOT','Zdobyłeś');
			define('BREEDING','Umiejętności hodowla');
			define('EXPERIENCE','Punktów doświadczenia');
			}
		}
	else if ($_GET['view'] == 'monuments') {
		define('NAME','wojownik');
		define('WINS','Zwycięstw');
		define('USER','Właściciel');
		define('NORMAL_TITLE','Arena Zwykła');
		define('MAGIC_TITLE','Arena Magiczna');
		}
	}


?>
