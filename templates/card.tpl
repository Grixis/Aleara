{strip}
{if !$Action}
	{$smarty.const.C_WELCOME}
	{if $Gender == '' && $Race == '' && $Class == '' && $Deity == ''}
		{$smarty.const.C_START}
	{else}
	{if $Gender != '' && $Race != '' && $Class != '' && $Deity != '' && $Changed_loc == 'Y'}
		{$smarty.const.C_YHAVE}
	{/if}
		{if $Gender == ''}
			{$smarty.const.C_G}
		{/if}
		{if $Race == ''}
			{$smarty.const.C_R}
		{else}
			{if $Class == ''}
				{$smarty.const.C_C}
			{/if}
		{/if}
		{if $Deity == ''}
			{$smarty.const.C_D}
		{/if}
		{if $Changed_loc != 'Y'}
			{$smarty.const.C_P}
		{/if}
	{/if}
{/if}
{if $Action == 'gender'}
	{$smarty.const.C_GENDER}
	<form method="post" action="card.php?action=gender">
	
		<center>
		<table>
		<tr>
		<td><img src="images/misc/male.jpg" /></td>
		<td><img src="images/misc/female.jpg" /></td>
		</tr>
		<tr>
		<td><input type="radio" name="gender" value="M" checked="checked" />Mężczyzna</td>
		<td><input type="radio" name="gender" value="F" />Kobieta</td>
		</tr>
		</table>
		</center>
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
	<br />&raquo; <a href="card.php">{$smarty.const.C_BACK}</a>
{/if}
{if $Action == 'race'}
	<div id="racetabs">
		<ul>
			<li><a href="card_race_preview.php?view=human">Człowiek</a></li>
			<li><a href="card_race_preview.php?view=elf">Elf</a></li>
			<li><a href="card_race_preview.php?view=dwarf">Krasnolud</a></li>
			<li><a href="card_race_preview.php?view=hobbit">Hobbit</a></li>
			<li><a href="card_race_preview.php?view=reptilion">Jaszczuroczłek</a></li>
			<li><a href="card_race_preview.php?view=gnome">Gnom</a></li>
			<li><a href="card_race_preview.php?view=darkelf">Mroczny elf</a></li>
			<li><a href="card_race_preview.php?view=undead">Nieumarły</a></li>
			<li><a href="card_race_preview.php?view=tauren">Tauren</a></li>
			<li><a href="card_race_preview.php?view=orc">Ork</a></li>
			<li><a href="card_race_preview.php?view=centaur">Centaur</a></li>
			<li><a href="card_race_preview.php?view=halfdragon">Półsmok</a></li>
			<li><a href="card_race_preview.php?view=kobold">Kobold</a></li>
			<li><a href="card_race_preview.php?view=demon">Demon</a></li>
			<li><a href="card_race_preview.php?view=shadow">Cień</a></li>
			<li><a href="card_race_preview.php?view=serafin">Serafin</a></li>
		</ul>
		
</div>
	
		
	
	<br />&raquo; <a href="card.php">{$smarty.const.C_BACK}</a>
{/if}
{if $Action == 'class'}
	<div id="classtabs">
		<ul>
			<li><a href="#tab1">Wojownik</a></li>
			<li><a href="#tab2">Barbarzyńca</a></li>
			<li><a href="#tab3">Mag</a></li>
			<li><a href="#tab4">Złodziej</a></li>
			<li><a href="#tab5">Rzemieślnik</a></li>
			<li><a href="#tab6">Łowca</a></li>
			<li><a href="#tab7">Szaman</a></li>
			<li><a href="#tab8">Gwardzista</a></li>
			<li><a href="#tab9">Nekromanta</a></li>
			<li><a href="#tab10">Artysta</a></li>
			<li><a href="#tab11">Obywatel</a></li>
		</ul>
<div id="tab1">

			<b>Klasa:</b> Wojownik <br><br>
<b>Opis fabularny:</b><br>
<p>Wojownik, to klasa wybierana przez wielu, niezależnie od rasy czy pochodzenia. Choć sztuk i stylów walki, jest tak wiele jak i oręża. Choć Norgard, Kurysium i Huritinu różnią się od siebie diametralnie. Choć kultura istot zamieszkujących ten świat jest tak barwna i różna. W każdej z nich znajdziesz wojowników Zaś jedno jest pewne. Każdy wojownik, niezależnie od rodzaju broni, pochodzenia czy rasy, kocha swą klasę. Uwielbia czuć tę adrenalinę, która buzuje w jego żyłach , gdy staje twarzą w twarz ze śmiercią zaś o wyniku walki przesądzą jego umiejętności, spryt, koncentracja a nawet los. To klasa dla tych, którzy mają odwagę, bądź nie mają wyboru, dla tych, którzy pokładają ufność w sobie. Bycie wojownikiem to wybór drogi usłanej latami ćwiczeń, dyscypliną tak ciała, jak i umysłu. To profesja dla istot twardych i nieugiętych, potrafiących w pocie i krwi dążyć do wyznaczonych sobie celów. Trzeba mieć twarde zasady i charakter, odwagę i pewność siebie, by stać się dobrym wojownikiem. Za każdym razem, kiedy wojownik dobywa broni, igra z losem , z życiem i śmiercią, i właśnie to daje mu satysfakcję. Wojownik jest profesorem walki. Wiedza, odwaga, umiejętności, sprawność fizyczna i intelektualna, umiejętność logicznego myślenia w każdej sytuacji, chłodny spokój i kalkulacja, powstrzy6mywanie własnych emocji.. To czyni z trzymającego broń dobrego wojownika. Znajomość szermierki, anatomii, praktyka i zrozumienie. Broń  wojownika jest przedłużeniem jego ręki, nie narzędziem do odbierania życia. Choć różną kroczą drogą, zarówno szermierza, jak i gladiatora, rycerza czy najemnika, łączy ich jedno. Samodyscyplina, odwaga i męstwo, pokładanie nadziei w tym, że los im będzie sprzyjał i że wrócą z tarczą nie na tarczy. A cóż odróżnia wojowników od barbarzyńców? Podejście i kunszt.  Jeśli wojownik chce zabić maga, podejdzie jak najbliżej i zada cios jak najcelniej.. barbarzyńca podejdzie jak najbliżej i rąbnie jak najmocniej..
</p><p>Jesteś gotów oddać życie we władanie ślepego losu? Jesteś gotów oddać siebie wojnie, która jest kapryśną panią? Jeśli tak, to klasa dla ciebie. Niechaj bogowie ci sprzyjają znacząc twą drogę Victorią.
</p>
<br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
<ul>
	<li>Premia do umiejętności ataku i uniku w wysokości równej poziomowi postaci.</li>
	<li>Podstawowe umiejętności rzemieślnicze.</li>
</ul>
<br>{literal}
<div style="margin:20px; margin-top:5px">
    <div class="quotetitle">
        <b>Pozostałe umiejętności:</b>
        <input type="button" value="Pokaż/Ukryj" style="width:90px;font-size:10px;margin:0px;padding:0px;" onclick="
            if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display!= '')
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; 
                this.innerText = '';
                this.value = 'Ukryj';
            }
            else
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                this.innerText = '';
                this.value = 'Ukryj';
            }
        " />
    </div>
    <div class="quotecontent" style="display: none;">
    
 <li>Możliwość walki z potworami na arenie walki i w różnych lokacjach.</li>
<li>Możliwość walki z innymi graczami.</li>
<li>Możliwość picia wywaru transmutacji. Daje nam to czasową umiejętność hipnozy, kradzieży oraz ataku krytycznego wampira.</li>
<li>Możliwość prowadzenia swojego plugawego ogrodu, farmy i strażnicy.</li>
<li>Możliwość posiadania oraz ulepszania konia oraz domu.</li>
<li>Możliwość kopania surowców w kopalni.</li>
<li>Możliwość wycinania drzew w lesie.</li>
<li>Możliwość handlu z innymi graczami.</li>
<li>Możliwość przechodzenia przez astralne portale.</li>
<li>Możliwość podróżowania po Puszczy Krutynów, lesie, górach, opuszczonym szybie, kanałach.</li>
<li>Możliwość wynajmu geologa.</li>
<li>Możliwość wykonywania różnych mikstur.</li>
<li>Możliwość ulepszania przedmiotów za pomocą specjalnych artefaktów.</li>
<li>Możliwość łowienia ryb, zbierania ziemniaków, kupowania grzybów i gotowania z tego różnych potraw.</li>
<li>Możliwość dołączenia do gildii lub stworzenia własnej.</li>
<li>Możliwość wrzucania kłów Vorvox'a do świętego źródła.</li>
<li>Możliwość kupowania jednorazowych kluczyków w Dworze Krutynów do podziemnego miasta.</li>
<li>Możliwość posiadania własnego wojownika płomieni oraz wystawiania go do walk.</li>
<li>Możliwość korzystania z ołtarzu ofiarnego.</li>
<li>Możliwość przeszukiwania cmentarzyska.</li>
<li>Możliwość walki z bossami które czasem dają nam legendarny przedmiot.</li>
<li>Możliwość brania udziału w konkursach w Domku Murgrabiego.</li>
<li>Możliwość pisania plotek, udzielania się w tawernie, bibliotece, redakcji gazety.</li>
<li>Możliwość brania udziału w sesjach grupowych w portalu.</li>
<li>Możliwość przeprowadzania honorowych walk na Arenie Honorowej.</li>
<li>Możliwość grania w lotto.</li>
<li>Możliwość kupowania i sprzedawania akcji na giełdzie.</li>
<li>Możliwość handlu na rynku handlowym.</li>
<li>Możliwość kupowania surowców w Magazynie Królewskim.</li>
<li>Możliwość kupowania i sprzedawania ekwipunku w różnych lokacjach.</li>
<li>Możliwość wpłacania na lokaty procentowe złota.</li>
<li>Możliwość korzystania z urzędu pracy oraz pracowania na Dworze Krutynów.</li>
<li>Możliwość wypływania na wyspy.</li>
<li>Możliwość korzystania ze Świątyni Kości.</li>
<li>Możliwość oddawania głosu w Hali Zgromadzeń.</li>
<li>Możliwość trenowania na Błoniach Treningowych.</li>
<li>Możliwość posiadania swoich chowańców, trenowania ich i wystawiania na walki.</li>
<li>Możliwość wzięcie ślubu.</li>
<li>Możliwość wynajmu własnych najemników.</li>
<li>Możliwość korzystania z domu uciech cielesnych.</li>
<li>Możliwość picia alkoholu w starym pubie.</li>

   
    
    
    
    
    
    
    
    
    
    </div>
</div>

{/literal}
<form method="post" action="card.php?action=class&amp;select=warrior&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab2">

		<b>Klasa:</b> Barbarzyńca <br><br>
<b>Opis fabularny:</b><br>
<p>
Jest całkowitym przeciwieństwem honorowego woja. Dla tej klasy nie liczy się kunszt ni technika, każda rzecz jest dobra do zadawania obrażeń, byle by tylko dobrze rąbała i była dostatecznie ostra.
</p><p>Barbarzyńcy to często furiaci, wpadający w dziki szał. Czasami zatracają się w swym szaleństwie i podczas walki przypominają bardziej rozwścieczoną bestię aniżeli istotę rozumną.
</p><p>Żyją po to by zabijać, dla rozlewu krwi, dla przyjemności walki z kimkolwiek. Lubują się w brutalnej wymianie ciosów, często niemającej najmniejszego wyższego celu.
</p><p>Walka to całe ich życie. Bez wojen, bez krwi nie ma radości. Barbarzyńcy to osoby ograniczone w swojej brutalności, nie są dobrym materiałem do tworzenia cywilizowanej wspólnoty. Wśród nich panuje zasada „kto silniejszy, ten rządzi”, dlatego też jednostki słabe nigdy nie maja wstępu w ich szeregi.
</p><p>Żyją gdzie popadnie, ich rozrywką jest walka, gwałt i brutalne zabawy ostrym orężem.
</p><p>Faktem jest, iż są to jednostki odważne, lub po prostu nie ceniące sobie swoje życia. Dla Barbarzyńcy walka, w której przeciwnik ma przewagę liczebną to dobra okazja do udowodnienia swojego męstwa i siły.
</p><p>Każdy, kto chciałby zostać barbarzyńcą, musi zadać sobie pytanie, czy jest wystarczająco silny by zostać istną maszyną do zabijania.
</p><br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
<ul>
	<li>Klasa z premiami do walki.</li>
	<li>Pogromca magów - 10% mniejsze obrażenia od magii, zadaje 10% obrażeń wiecej magom.</li>
	<li>Nienawiść do magii - barbarzyńca nie może używać magicznych przedmiotów.</li>
	<li>Podstawowe umiejętności rzemieślnicze.</li>
</ul>
<br>{literal}
<div style="margin:20px; margin-top:5px">
    <div class="quotetitle">
        <b>Pozostałe umiejętności:</b>
        <input type="button" value="Pokaż/Ukryj" style="width:90px;font-size:10px;margin:0px;padding:0px;" onclick="
            if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display!= '')
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; 
                this.innerText = '';
                this.value = 'Ukryj';
            }
            else
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                this.innerText = '';
                this.value = 'Ukryj';
            }
        " />
    </div>
    <div class="quotecontent" style="display: none;">
    
 <li>Możliwość walki z potworami na arenie walki i w różnych lokacjach.</li>
<li>Możliwość walki z innymi graczami.</li>
<li>Możliwość picia wywaru transmutacji. Daje nam to czasową umiejętność hipnozy, kradzieży oraz ataku krytycznego wampira.</li>
<li>Możliwość prowadzenia swojego plugawego ogrodu, farmy i strażnicy.</li>
<li>Możliwość posiadania oraz ulepszania konia oraz domu.</li>
<li>Możliwość kopania surowców w kopalni.</li>
<li>Możliwość wycinania drzew w lesie.</li>
<li>Możliwość handlu z innymi graczami.</li>
<li>Możliwość przechodzenia przez astralne portale.</li>
<li>Możliwość podróżowania po Puszczy Krutynów, lesie, górach, opuszczonym szybie, kanałach.</li>
<li>Możliwość wynajmu geologa.</li>
<li>Możliwość wykonywania różnych mikstur.</li>
<li>Możliwość ulepszania przedmiotów za pomocą specjalnych artefaktów.</li>
<li>Możliwość łowienia ryb, zbierania ziemniaków, kupowania grzybów i gotowania z tego różnych potraw.</li>
<li>Możliwość dołączenia do gildii lub stworzenia własnej.</li>
<li>Możliwość wrzucania kłów Vorvox'a do świętego źródła.</li>
<li>Możliwość kupowania jednorazowych kluczyków w Dworze Krutynów do podziemnego miasta.</li>
<li>Możliwość posiadania własnego wojownika płomieni oraz wystawiania go do walk.</li>
<li>Możliwość korzystania z ołtarzu ofiarnego.</li>
<li>Możliwość przeszukiwania cmentarzyska.</li>
<li>Możliwość walki z bossami które czasem dają nam legendarny przedmiot.</li>
<li>Możliwość brania udziału w konkursach w Domku Murgrabiego.</li>
<li>Możliwość pisania plotek, udzielania się w tawernie, bibliotece, redakcji gazety.</li>
<li>Możliwość brania udziału w sesjach grupowych w portalu.</li>
<li>Możliwość przeprowadzania honorowych walk na Arenie Honorowej.</li>
<li>Możliwość grania w lotto.</li>
<li>Możliwość kupowania i sprzedawania akcji na giełdzie.</li>
<li>Możliwość handlu na rynku handlowym.</li>
<li>Możliwość kupowania surowców w Magazynie Królewskim.</li>
<li>Możliwość kupowania i sprzedawania ekwipunku w różnych lokacjach.</li>
<li>Możliwość wpłacania na lokaty procentowe złota.</li>
<li>Możliwość korzystania z urzędu pracy oraz pracowania na Dworze Krutynów.</li>
<li>Możliwość wypływania na wyspy.</li>
<li>Możliwość korzystania ze Świątyni Kości.</li>
<li>Możliwość oddawania głosu w Hali Zgromadzeń.</li>
<li>Możliwość trenowania na Błoniach Treningowych.</li>
<li>Możliwość posiadania swoich chowańców, trenowania ich i wystawiania na walki.</li>
<li>Możliwość wzięcie ślubu.</li>
<li>Możliwość wynajmu własnych najemników.</li>
<li>Możliwość korzystania z domu uciech cielesnych.</li>
<li>Możliwość picia alkoholu w starym pubie.</li>

   
    
    
    
    
    
    
    
    
    
    </div>
</div>

{/literal}
<form method="post" action="card.php?action=class&amp;select=barbarian&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab3">

<b>Klasa:</b> Mag <br><br>
<b>Opis fabularny:</b><br>

<p>
Magowie to osoby będące w stanie zapanować nad energią, jaka otacza wszystko co znajduje się w tym świecie. Osoby naznaczone specjalnym darem. Nie każdy bowiem może poszczycić się tym mianem. Zabawa z magiczną energią bywa czasem zgubna w skutkach, stąd też nawet osoby posiadające talent do magii nie często decydują się magiem zostać.
</p><p>Każda osoba posiada pojemność magiczną, czyli naturalne ograniczenie przepływu magii przez swoje ciało. Magowie potrafią ściągać energię magiczną, która jest wszechobecna, przepuszczać przez własne ciała i myślami, gestem formować zaklęcia. Niektórzy muszą najpierw zmagazynować moc w sobie, by potem ją uwolnić, niektórzy działają jak swoisty katalizator, lecz tych drugi jest zaledwie garstka.
</p><p>Są to istoty dążące do wiedzy, stąd też często odosobnione. By zostać prawdziwym magiem potrzeba lat, a proces tworzenia zaklęć jest niezwykle skomplikowany.
</p><p>Magowie mogą obierać wiele ścieżek swojego rozwoju w zależności do jakiej dziedziny magii przejawiają talent. Wielu wybiera ścieżkę krwi, jeszcze inni parają się magią umysłu, jeszcze inni potrafią uzdrawiać, nadawać przedmiotom magicznych właściwości. Dróg jest wiele, a wachlarz możliwości kreowania energii jest nieskończony.
</p><p>Rzec można, że osoba maga przez cały czas praktykowania igra ze śmiercią. Ciała istot śmiertelnych posiadają swoje ograniczenia, a przepływająca przezeń non stop energia magiczna wyniszcza je po trochu, co w konsekwencji kończy się śmiercią.
</p><p>Osoby zajmujące się magią bardzo rzadko pchają się do polityki. Mimo swojego stronniczego charakteru znaleźć może tutaj elitę umysłową świata, a także ogarnięte szaleńczym pędem jednostki gotowe oddać swe życie by posiąść niezmierzoną wiedzę magiczną.
</p><br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
<ul>
	<li>Postać posługująca się magią.</li>
	<li>Może wzmacniać ekwipunek.</li>
	<li>Każdy poziom pancerza obniża siłę czarów maga o 1%.</li>
	<li>Podstawowe umiejętności rzemieślnicze.</li>
</ul>
<br>{literal}
<div style="margin:20px; margin-top:5px">
    <div class="quotetitle">
        <b>Pozostałe umiejętności:</b>
        <input type="button" value="Pokaż/Ukryj" style="width:90px;font-size:10px;margin:0px;padding:0px;" onclick="
            if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display!= '')
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; 
                this.innerText = '';
                this.value = 'Ukryj';
            }
            else
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                this.innerText = '';
                this.value = 'Ukryj';
            }
        " />
    </div>
    <div class="quotecontent" style="display: none;">
    
 <li>Możliwość walki z potworami na arenie walki i w różnych lokacjach.</li>
<li>Możliwość walki z innymi graczami.</li>
<li>Możliwość picia wywaru transmutacji. Daje nam to czasową umiejętność hipnozy, kradzieży oraz ataku krytycznego wampira.</li>
<li>Możliwość prowadzenia swojego plugawego ogrodu, farmy i strażnicy.</li>
<li>Możliwość posiadania oraz ulepszania konia oraz domu.</li>
<li>Możliwość kopania surowców w kopalni.</li>
<li>Możliwość wycinania drzew w lesie.</li>
<li>Możliwość handlu z innymi graczami.</li>
<li>Możliwość przechodzenia przez astralne portale.</li>
<li>Możliwość podróżowania po Puszczy Krutynów, lesie, górach, opuszczonym szybie, kanałach.</li>
<li>Możliwość wynajmu geologa.</li>
<li>Możliwość wykonywania różnych mikstur.</li>
<li>Możliwość ulepszania przedmiotów za pomocą specjalnych artefaktów.</li>
<li>Możliwość łowienia ryb, zbierania ziemniaków, kupowania grzybów i gotowania z tego różnych potraw.</li>
<li>Możliwość dołączenia do gildii lub stworzenia własnej.</li>
<li>Możliwość wrzucania kłów Vorvox'a do świętego źródła.</li>
<li>Możliwość kupowania jednorazowych kluczyków w Dworze Krutynów do podziemnego miasta.</li>
<li>Możliwość posiadania własnego wojownika płomieni oraz wystawiania go do walk.</li>
<li>Możliwość korzystania z ołtarzu ofiarnego.</li>
<li>Możliwość przeszukiwania cmentarzyska.</li>
<li>Możliwość walki z bossami które czasem dają nam legendarny przedmiot.</li>
<li>Możliwość brania udziału w konkursach w Domku Murgrabiego.</li>
<li>Możliwość pisania plotek, udzielania się w tawernie, bibliotece, redakcji gazety.</li>
<li>Możliwość brania udziału w sesjach grupowych w portalu.</li>
<li>Możliwość przeprowadzania honorowych walk na Arenie Honorowej.</li>
<li>Możliwość grania w lotto.</li>
<li>Możliwość kupowania i sprzedawania akcji na giełdzie.</li>
<li>Możliwość handlu na rynku handlowym.</li>
<li>Możliwość kupowania surowców w Magazynie Królewskim.</li>
<li>Możliwość kupowania i sprzedawania ekwipunku w różnych lokacjach.</li>
<li>Możliwość wpłacania na lokaty procentowe złota.</li>
<li>Możliwość korzystania z urzędu pracy oraz pracowania na Dworze Krutynów.</li>
<li>Możliwość wypływania na wyspy.</li>
<li>Możliwość korzystania ze Świątyni Kości.</li>
<li>Możliwość oddawania głosu w Hali Zgromadzeń.</li>
<li>Możliwość trenowania na Błoniach Treningowych.</li>
<li>Możliwość posiadania swoich chowańców, trenowania ich i wystawiania na walki.</li>
<li>Możliwość wzięcie ślubu.</li>
<li>Możliwość wynajmu własnych najemników.</li>
<li>Możliwość korzystania z domu uciech cielesnych.</li>
<li>Możliwość picia alkoholu w starym pubie.</li>

   
    
    
    
    
    
    
    
    
    
    </div>
</div>

{/literal}

<form method="post" action="card.php?action=class&amp;select=mage&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab4">

<b>Klasa:</b> Złodziej <br><br>
<b>Opis fabularny:</b><br>
<p>
Klasa ta była od zawsze, gdyż zawsze znajdzie się ktoś, kto połasi się na dobry innych osób. Jednak prawdziwy złodziej poszczycić się może taką sprawnością i szybkością, że nawet oko żywej istoty nie zarejestruje momentu kradzieży. Wśród tej klasy są osoby wszelakiej maści. Złodziejem zostaje każdy kto tylko uznaje, że normalna praca jest ujma na jego honorze.
</p><p>Osoba taka nigdy nie staje do walki twarzą w twarz, stroni także od rozlewu krwi. Złodzieje propagują raczej ogłuszanie swojej ofiary, lub w czym się tez lubują to ogłupianie, tak by ktoś podczas rozmowy nie zorientował się, że został okradziony.
</p><p>Klasa ta wymaga wielu lat treningów, a osoby przyjmujące to miano muszą nie rzadko być wytrenowane, posiadać niezwykły spryt i bystrość umysłu, a także zwinność, przebiegłość i wytrwałość.
</p><p>Jedna kradzież złodziejem nie czyni – tak mawiają oni wśród swych szeregów dopiero któraś z kolei nadaje ci ten „tytuł”. Są niezwykle uczynni, lecz tym wśród swoich. Jeden drugiemu jest w stanie pomóc we wszystkich i wesprzeć, lub ryzykować życiem, bo nie tylko kradzież zwiększa adrenalinę.
</p><p>Są mistrzami w posługiwaniu się bronią krótką, bardzo często znają kunszt walki wręcz. Potrafią cichaczem zawiązać linę wokół szyi ofiary i znienacka powiesić ja na drzewie, ni ta powie chociażby słowo.
</p><p>Każdy, kogo podnieca łamanie prawa, godny jest by dostąpić tego zaszczytu i stać się złodziejem.
</p><br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
<ul>
	<li>Kradzież kieszonkowa.</li>
	<li>Włamania do skarbców graczy.</li>
	<li>Wwłamania do sklepów.</li>
	<li>Kradzież astralnych komponentów.</li>
	<li>Podstawowe umiejętności rzemieślnicze.</li>
</ul>
<br>{literal}
<div style="margin:20px; margin-top:5px">
    <div class="quotetitle">
        <b>Pozostałe umiejętności:</b>
        <input type="button" value="Pokaż/Ukryj" style="width:90px;font-size:10px;margin:0px;padding:0px;" onclick="
            if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display!= '')
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; 
                this.innerText = '';
                this.value = 'Ukryj';
            }
            else
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                this.innerText = '';
                this.value = 'Ukryj';
            }
        " />
    </div>
    <div class="quotecontent" style="display: none;">
    
 <li>Możliwość walki z potworami na arenie walki i w różnych lokacjach.</li>
<li>Możliwość walki z innymi graczami.</li>
<li>Możliwość picia wywaru transmutacji. Daje nam to czasową umiejętność hipnozy, kradzieży oraz ataku krytycznego wampira.</li>
<li>Możliwość prowadzenia swojego plugawego ogrodu, farmy i strażnicy.</li>
<li>Możliwość posiadania oraz ulepszania konia oraz domu.</li>
<li>Możliwość kopania surowców w kopalni.</li>
<li>Możliwość wycinania drzew w lesie.</li>
<li>Możliwość handlu z innymi graczami.</li>
<li>Możliwość przechodzenia przez astralne portale.</li>
<li>Możliwość podróżowania po Puszczy Krutynów, lesie, górach, opuszczonym szybie, kanałach.</li>
<li>Możliwość wynajmu geologa.</li>
<li>Możliwość wykonywania różnych mikstur.</li>
<li>Możliwość ulepszania przedmiotów za pomocą specjalnych artefaktów.</li>
<li>Możliwość łowienia ryb, zbierania ziemniaków, kupowania grzybów i gotowania z tego różnych potraw.</li>
<li>Możliwość dołączenia do gildii lub stworzenia własnej.</li>
<li>Możliwość wrzucania kłów Vorvox'a do świętego źródła.</li>
<li>Możliwość kupowania jednorazowych kluczyków w Dworze Krutynów do podziemnego miasta.</li>
<li>Możliwość posiadania własnego wojownika płomieni oraz wystawiania go do walk.</li>
<li>Możliwość korzystania z ołtarzu ofiarnego.</li>
<li>Możliwość przeszukiwania cmentarzyska.</li>
<li>Możliwość walki z bossami które czasem dają nam legendarny przedmiot.</li>
<li>Możliwość brania udziału w konkursach w Domku Murgrabiego.</li>
<li>Możliwość pisania plotek, udzielania się w tawernie, bibliotece, redakcji gazety.</li>
<li>Możliwość brania udziału w sesjach grupowych w portalu.</li>
<li>Możliwość przeprowadzania honorowych walk na Arenie Honorowej.</li>
<li>Możliwość grania w lotto.</li>
<li>Możliwość kupowania i sprzedawania akcji na giełdzie.</li>
<li>Możliwość handlu na rynku handlowym.</li>
<li>Możliwość kupowania surowców w Magazynie Królewskim.</li>
<li>Możliwość kupowania i sprzedawania ekwipunku w różnych lokacjach.</li>
<li>Możliwość wpłacania na lokaty procentowe złota.</li>
<li>Możliwość korzystania z urzędu pracy oraz pracowania na Dworze Krutynów.</li>
<li>Możliwość wypływania na wyspy.</li>
<li>Możliwość korzystania ze Świątyni Kości.</li>
<li>Możliwość oddawania głosu w Hali Zgromadzeń.</li>
<li>Możliwość trenowania na Błoniach Treningowych.</li>
<li>Możliwość posiadania swoich chowańców, trenowania ich i wystawiania na walki.</li>
<li>Możliwość wzięcie ślubu.</li>
<li>Możliwość wynajmu własnych najemników.</li>
<li>Możliwość korzystania z domu uciech cielesnych.</li>
<li>Możliwość picia alkoholu w starym pubie.</li>

   
    
    
    
    
    
    
    
    
    
    </div>
</div>

{/literal}
<form method="post" action="card.php?action=class&amp;select=thief&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab5">

<b>Klasa:</b> Rzemieślnik <br><br>
<b>Opis fabularny:</b><br>
<p>
Jest to klasa idealna dla tych, których męczy ciągłe podnoszenie miecza. Można ich znaleźć właściwie wszędzie- w dużych miastach i na wsiach. Począwszy od zwykłych kowali, którzy wykuwają koniom podkowy, przez garncarzy a skończywszy na budowniczych, bez których wielu nie miałoby dachu nad głową. Są bardzo ważną i integralną częścią społeczeństwa, porównywaną często do artystów, chociaż ci drudzy nie są z tego porównania zadowoleni.
</p><p>Jeśli chodzi o prace związane z kowalstwem i hutnictwem- krasnoludy nie mają sobie równych. Ludzie są bliscy im jeśli chodzi o siłę, lecz poprzez związanie się z górami i rozumienie mowy metali, mieszkańcy gór dyskwalifikują każdego. Co prawda jedyne pole, na którym mogą się wszyscy mierzyć to jubilerstwo. Mawiają, że nie ma lepszych ozdób niż tych, które stworzyły elfy, lecz to właśnie neutralizm ludzi pozwolił im na to, aby móc konkurować ze wszystkimi. Elfy niskiego szczepu jak i krasnoludy często woleli wyroby śmiertelników, aniżeli drobne misterne zawijasy długouchych.
</p><p>Rzemieślnik to klasa dla tych, którzy nie boją się poświęcić jednej dziedzinie. To praca dla drwali, dla stolarzy, szkutników i kowali. Bez nich żadne miejsce nie może się obejść, a przekazywana z dziada pradziada wiedza jest cenniejsza niźli jakakolwiek inna nabyta za kontynentem.
</p><br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
<ul>
	<li>Zaawansowane umiejętności rzemieślnicze - może wykonywać przedmioty o lepszych parametrach.</li>
	<li>Premia do umiejętności i doświadczenia podczas tworzenia przedmiotów.</li>
	<li>Może wytwarzać astralne komponenty.</li>
	<li>Zadaje tylko 25% obrażeń podczas walki.</li>
	<li>Podczas walk turowych może używać jedynie zwykłego ataku.</li>
</ul>
<br>{literal}
<div style="margin:20px; margin-top:5px">
    <div class="quotetitle">
        <b>Pozostałe umiejętności:</b>
        <input type="button" value="Pokaż/Ukryj" style="width:90px;font-size:10px;margin:0px;padding:0px;" onclick="
            if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display!= '')
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; 
                this.innerText = '';
                this.value = 'Ukryj';
            }
            else
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                this.innerText = '';
                this.value = 'Ukryj';
            }
        " />
    </div>
    <div class="quotecontent" style="display: none;">
    
 <li>Możliwość walki z potworami na arenie walki i w różnych lokacjach.</li>
<li>Możliwość walki z innymi graczami.</li>
<li>Możliwość picia wywaru transmutacji. Daje nam to czasową umiejętność hipnozy, kradzieży oraz ataku krytycznego wampira.</li>
<li>Możliwość prowadzenia swojego plugawego ogrodu, farmy i strażnicy.</li>
<li>Możliwość posiadania oraz ulepszania konia oraz domu.</li>
<li>Możliwość kopania surowców w kopalni.</li>
<li>Możliwość wycinania drzew w lesie.</li>
<li>Możliwość handlu z innymi graczami.</li>
<li>Możliwość przechodzenia przez astralne portale.</li>
<li>Możliwość podróżowania po Puszczy Krutynów, lesie, górach, opuszczonym szybie, kanałach.</li>
<li>Możliwość wynajmu geologa.</li>
<li>Możliwość wykonywania różnych mikstur.</li>
<li>Możliwość ulepszania przedmiotów za pomocą specjalnych artefaktów.</li>
<li>Możliwość łowienia ryb, zbierania ziemniaków, kupowania grzybów i gotowania z tego różnych potraw.</li>
<li>Możliwość dołączenia do gildii lub stworzenia własnej.</li>
<li>Możliwość wrzucania kłów Vorvox'a do świętego źródła.</li>
<li>Możliwość kupowania jednorazowych kluczyków w Dworze Krutynów do podziemnego miasta.</li>
<li>Możliwość posiadania własnego wojownika płomieni oraz wystawiania go do walk.</li>
<li>Możliwość korzystania z ołtarzu ofiarnego.</li>
<li>Możliwość przeszukiwania cmentarzyska.</li>
<li>Możliwość walki z bossami które czasem dają nam legendarny przedmiot.</li>
<li>Możliwość brania udziału w konkursach w Domku Murgrabiego.</li>
<li>Możliwość pisania plotek, udzielania się w tawernie, bibliotece, redakcji gazety.</li>
<li>Możliwość brania udziału w sesjach grupowych w portalu.</li>
<li>Możliwość przeprowadzania honorowych walk na Arenie Honorowej.</li>
<li>Możliwość grania w lotto.</li>
<li>Możliwość kupowania i sprzedawania akcji na giełdzie.</li>
<li>Możliwość handlu na rynku handlowym.</li>
<li>Możliwość kupowania surowców w Magazynie Królewskim.</li>
<li>Możliwość kupowania i sprzedawania ekwipunku w różnych lokacjach.</li>
<li>Możliwość wpłacania na lokaty procentowe złota.</li>
<li>Możliwość korzystania z urzędu pracy oraz pracowania na Dworze Krutynów.</li>
<li>Możliwość wypływania na wyspy.</li>
<li>Możliwość korzystania ze Świątyni Kości.</li>
<li>Możliwość oddawania głosu w Hali Zgromadzeń.</li>
<li>Możliwość trenowania na Błoniach Treningowych.</li>
<li>Możliwość posiadania swoich chowańców, trenowania ich i wystawiania na walki.</li>
<li>Możliwość wzięcie ślubu.</li>
<li>Możliwość wynajmu własnych najemników.</li>
<li>Możliwość korzystania z domu uciech cielesnych.</li>
<li>Możliwość picia alkoholu w starym pubie.</li>

   
    
    
    
    
    
    
    
    
    
    </div>
</div>

{/literal}

<form method="post" action="card.php?action=class&amp;select=artisan&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab6">

<b>Klasa:</b> Łowca <br><br>
<b>Opis fabularny:</b><br>
<p>
Niegdyś słowo to znaczyło myśliwego, osobę, która na wielkim dworze brał udział w gromadnych polowaniach, albo na własną rękę zapewniał wielkiemu panu dostawę dziczyzny. Teraz łowca posiada o wiele więcej znaczeń. Może to być właśnie myśliwy i tropiciel, dzięki któremu nie umknie żadna zwierzyna. Z drugiej jednak strony łowca jest także przydatny w czasie wojny do tropienia uciekinierów, albo jako zwiadowca, który bez narażania życia odnajdzie obce skupiska.
</p><p>Łowca może polować nie tylko na zwierzęta, ale i na ludzi. Za dużą opłatą poza odnalezieniem- zabije. Zatem łączy się to także z pracą zabójcy i skrytobójcy. Cicha robota, bez śladu z zadowoleniem obu stron. Fach ten mający niegdyś pozytywny wydźwięk aktualnie łączy się z wszelkimi negatywnymi zadaniami, jakie można wykonywać za pełną sakiewkę.
</p><p>Nie służą nikomu na stałe. Są sami sobie panami, a tymczasowo jako najemnicy zmieniają władcę na sakiewkę pełną złota. Mają honor, ale potrzebują pieniędzy aby za nie żyć. Mawiają, że najlepszymi łowcami są elfy, jednak trudno uwierzyć, aby ich natura aż tak nisko upadła. Ten fach posiadają ludzie osamotnieni, zdziczeli, mający w poważaniu politykę oraz to kto zawiaduje tym światem. Polują na wszystko, są łowcami nagród, łowcami głów. Nie ma dla nich rzeczy niemożliwych.
</p>
<br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
<ul>	
	<li>Premia do walki dystansowej.</li>
	<li>Podstawowe umiejętności rzemieślnicze.</li>
</ul>
<br>{literal}
<div style="margin:20px; margin-top:5px">
    <div class="quotetitle">
        <b>Pozostałe umiejętności:</b>
        <input type="button" value="Pokaż/Ukryj" style="width:90px;font-size:10px;margin:0px;padding:0px;" onclick="
            if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display!= '')
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; 
                this.innerText = '';
                this.value = 'Ukryj';
            }
            else
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                this.innerText = '';
                this.value = 'Ukryj';
            }
        " />
    </div>
    <div class="quotecontent" style="display: none;">
    
 <li>Możliwość walki z potworami na arenie walki i w różnych lokacjach.</li>
<li>Możliwość walki z innymi graczami.</li>
<li>Możliwość picia wywaru transmutacji. Daje nam to czasową umiejętność hipnozy, kradzieży oraz ataku krytycznego wampira.</li>
<li>Możliwość prowadzenia swojego plugawego ogrodu, farmy i strażnicy.</li>
<li>Możliwość posiadania oraz ulepszania konia oraz domu.</li>
<li>Możliwość kopania surowców w kopalni.</li>
<li>Możliwość wycinania drzew w lesie.</li>
<li>Możliwość handlu z innymi graczami.</li>
<li>Możliwość przechodzenia przez astralne portale.</li>
<li>Możliwość podróżowania po Puszczy Krutynów, lesie, górach, opuszczonym szybie, kanałach.</li>
<li>Możliwość wynajmu geologa.</li>
<li>Możliwość wykonywania różnych mikstur.</li>
<li>Możliwość ulepszania przedmiotów za pomocą specjalnych artefaktów.</li>
<li>Możliwość łowienia ryb, zbierania ziemniaków, kupowania grzybów i gotowania z tego różnych potraw.</li>
<li>Możliwość dołączenia do gildii lub stworzenia własnej.</li>
<li>Możliwość wrzucania kłów Vorvox'a do świętego źródła.</li>
<li>Możliwość kupowania jednorazowych kluczyków w Dworze Krutynów do podziemnego miasta.</li>
<li>Możliwość posiadania własnego wojownika płomieni oraz wystawiania go do walk.</li>
<li>Możliwość korzystania z ołtarzu ofiarnego.</li>
<li>Możliwość przeszukiwania cmentarzyska.</li>
<li>Możliwość walki z bossami które czasem dają nam legendarny przedmiot.</li>
<li>Możliwość brania udziału w konkursach w Domku Murgrabiego.</li>
<li>Możliwość pisania plotek, udzielania się w tawernie, bibliotece, redakcji gazety.</li>
<li>Możliwość brania udziału w sesjach grupowych w portalu.</li>
<li>Możliwość przeprowadzania honorowych walk na Arenie Honorowej.</li>
<li>Możliwość grania w lotto.</li>
<li>Możliwość kupowania i sprzedawania akcji na giełdzie.</li>
<li>Możliwość handlu na rynku handlowym.</li>
<li>Możliwość kupowania surowców w Magazynie Królewskim.</li>
<li>Możliwość kupowania i sprzedawania ekwipunku w różnych lokacjach.</li>
<li>Możliwość wpłacania na lokaty procentowe złota.</li>
<li>Możliwość korzystania z urzędu pracy oraz pracowania na Dworze Krutynów.</li>
<li>Możliwość wypływania na wyspy.</li>
<li>Możliwość korzystania ze Świątyni Kości.</li>
<li>Możliwość oddawania głosu w Hali Zgromadzeń.</li>
<li>Możliwość trenowania na Błoniach Treningowych.</li>
<li>Możliwość posiadania swoich chowańców, trenowania ich i wystawiania na walki.</li>
<li>Możliwość wzięcie ślubu.</li>
<li>Możliwość wynajmu własnych najemników.</li>
<li>Możliwość korzystania z domu uciech cielesnych.</li>
<li>Możliwość picia alkoholu w starym pubie.</li>

   
    
    
    
    
    
    
    
    
    
    </div>
</div>

{/literal}

<form method="post" action="card.php?action=class&amp;select=ranger&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab7">

<b>Klasa:</b> Szaman <br><br>
<b>Opis fabularny:</b><br>

<p>
Szaleńcy i wichrzyciele. Opętani i szarlatani. Tak o nich mawiają. Jednak szamani to klasa odpowiednia dla tych, którzy mają dość klasycznego maga siedzącego w wieży i patrzącego w niebo. Szaman to istota połączona na trwałe z naturą, żyjąca jej cyklem i rozumiejąca byty, których nikt nie widzi. Jej talentem kierują jednak nie tylko boskie istoty, ale i demony. Miotają nim, światu obnażając swoją okrutną naturę.
</p><p>Szamani to klasa mistyczna i tajemnicza. Odprawiają oni rytuały, często są doradcami władców, jeśli będą działać na rzecz społeczeństwa. Służą także jako znachorzy i wróżbici. Leczą, warzą mikstury, tworzą skomplikowane pieśni w czasie, których wchodzą w trans. To istoty, które stoją na progu dobra i zła. Miotane przez obie te siły mogą tak samo dla własnej korzyści zastraszać, jak i prowadzić do wielu waśni. Posłuszni ich słowom władcy często zapominają o logice, nie słuchają ludu, a to może prowadzić do tragedii.
</p><p>Najczęściej klasa ta widoczna jest na ziemiach północnych, Volkstand, gdzie nieoświecona ludność wierzy w słowa szarlatana, jest zabobonna i zacofana. Tam najlepszy czeka ich żywot, brak głodu i dużo uwagi. Rzadko kiedy szamani odnajdują się na ziemiach południowych, gdzie ludzie dużo rozsądniej podchodzą do życia, nie dając wiary odzianemu w skóry starcowi z pomalowaną w dziwne wzory twarzą.
</p>
<br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
<ul>	
	<li>Podstawowe umiejętności rzemieślnicze.</li>
  <li>Postać nie posługuje się magią w walce.</li>
  <li>Posiada możliwość leczenia graczy.</li>
  <li>Możliwość warzenia wywarów transmutacji.</li>
</ul>
<br>{literal}
<div style="margin:20px; margin-top:5px">
    <div class="quotetitle">
        <b>Pozostałe umiejętności:</b>
        <input type="button" value="Pokaż/Ukryj" style="width:90px;font-size:10px;margin:0px;padding:0px;" onclick="
            if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display!= '')
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; 
                this.innerText = '';
                this.value = 'Ukryj';
            }
            else
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                this.innerText = '';
                this.value = 'Ukryj';
            }
        " />
    </div>
    <div class="quotecontent" style="display: none;">
    
 <li>Możliwość walki z potworami na arenie walki i w różnych lokacjach.</li>
<li>Możliwość walki z innymi graczami.</li>
<li>Możliwość picia wywaru transmutacji. Daje nam to czasową umiejętność hipnozy, kradzieży oraz ataku krytycznego wampira.</li>
<li>Możliwość prowadzenia swojego plugawego ogrodu, farmy i strażnicy.</li>
<li>Możliwość posiadania oraz ulepszania konia oraz domu.</li>
<li>Możliwość kopania surowców w kopalni.</li>
<li>Możliwość wycinania drzew w lesie.</li>
<li>Możliwość handlu z innymi graczami.</li>
<li>Możliwość przechodzenia przez astralne portale.</li>
<li>Możliwość podróżowania po Puszczy Krutynów, lesie, górach, opuszczonym szybie, kanałach.</li>
<li>Możliwość wynajmu geologa.</li>
<li>Możliwość wykonywania różnych mikstur.</li>
<li>Możliwość ulepszania przedmiotów za pomocą specjalnych artefaktów.</li>
<li>Możliwość łowienia ryb, zbierania ziemniaków, kupowania grzybów i gotowania z tego różnych potraw.</li>
<li>Możliwość dołączenia do gildii lub stworzenia własnej.</li>
<li>Możliwość wrzucania kłów Vorvox'a do świętego źródła.</li>
<li>Możliwość kupowania jednorazowych kluczyków w Dworze Krutynów do podziemnego miasta.</li>
<li>Możliwość posiadania własnego wojownika płomieni oraz wystawiania go do walk.</li>
<li>Możliwość korzystania z ołtarzu ofiarnego.</li>
<li>Możliwość przeszukiwania cmentarzyska.</li>
<li>Możliwość walki z bossami które czasem dają nam legendarny przedmiot.</li>
<li>Możliwość brania udziału w konkursach w Domku Murgrabiego.</li>
<li>Możliwość pisania plotek, udzielania się w tawernie, bibliotece, redakcji gazety.</li>
<li>Możliwość brania udziału w sesjach grupowych w portalu.</li>
<li>Możliwość przeprowadzania honorowych walk na Arenie Honorowej.</li>
<li>Możliwość grania w lotto.</li>
<li>Możliwość kupowania i sprzedawania akcji na giełdzie.</li>
<li>Możliwość handlu na rynku handlowym.</li>
<li>Możliwość kupowania surowców w Magazynie Królewskim.</li>
<li>Możliwość kupowania i sprzedawania ekwipunku w różnych lokacjach.</li>
<li>Możliwość wpłacania na lokaty procentowe złota.</li>
<li>Możliwość korzystania z urzędu pracy oraz pracowania na Dworze Krutynów.</li>
<li>Możliwość wypływania na wyspy.</li>
<li>Możliwość korzystania ze Świątyni Kości.</li>
<li>Możliwość oddawania głosu w Hali Zgromadzeń.</li>
<li>Możliwość trenowania na Błoniach Treningowych.</li>
<li>Możliwość posiadania swoich chowańców, trenowania ich i wystawiania na walki.</li>
<li>Możliwość wzięcie ślubu.</li>
<li>Możliwość wynajmu własnych najemników.</li>
<li>Możliwość korzystania z domu uciech cielesnych.</li>
<li>Możliwość picia alkoholu w starym pubie.</li>

   
    
    
    
    
    
    
    
    
    
    </div>
</div>

{/literal}

<form method="post" action="card.php?action=class&amp;select=shaman&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab8">

<b>Klasa:</b> Gwardzista <br><br>
<b>Opis fabularny:</b><br>
<p>
Gwardziści są dopiero co kształtującą się klasą w Cesarstwie Reisen. Wywodzą się licznej i wykwalifikowanej armii zawodowej. Wśród gwardzistów nie ma miejsca na dyskryminację ze względu na nację czy status społeczny. Gwardia w swe szeregi przyjmie każdego, komu zależy na dobru Cesarstwa, w zamian gwarantując stały żołd i miejsce zamieszkania.
</p><p>Gwardzista stoi na straży porządku i spokoju w Cesarstwie. Należy jednak zaznaczyć, iż praca ta to nie zwykły zawód, to służba, służba społeczeństwu.
</p><p>Aby zostać gwardzistą należy przejść szkolenie wojskowe, gdzie każdy uczy się podstawowych nauk jak czytanie czy pisanie, geografia i odczytywanie map, ale także działania zbiorowego, walki w zwarciu. Każdy zapoznawany jest też z prawami panującymi w krainie, tak by móc należycie wypełniać swoje obowiązki. Do garnizonów, gdzie szkoli się młodych rekrutów brane są dzieci od 7 roku życia w przypadku chłopców i 10 w przypadku dziewczynek. Od dziecka bowiem uczy się i przystosowuje gwardzistów do wykonywania rozkazów, a także skutecznej obrony i walki.
</p><p>Do obowiązków gwardzisty należą: patrolowanie miast, szlaków handlowych, eskortowanie znamienitych osobistości, aczkolwiek przede wszystkim obowiązkiem dobrego gwardzisty jest wypełnianie rozkazów swojego dowódcy. Dlatego tak ważne jest, osoby te były lojalne, uczciwe i potrafiły odróżniać dobro od zła. W szeregach gwardzistów spotkać można wszelkiej maści wojowników- mieczników, łuczników, włóczników, ale też medyków czy uczonych w mapach.
</p>
<br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
<ul>		
	<li>Premia do walk z magami.</li>
	<li>Podstawowe umiejętności rzemieślnicze.</li>
</ul>
<br>{literal}
<div style="margin:20px; margin-top:5px">
    <div class="quotetitle">
        <b>Pozostałe umiejętności:</b>
        <input type="button" value="Pokaż/Ukryj" style="width:90px;font-size:10px;margin:0px;padding:0px;" onclick="
            if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display!= '')
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; 
                this.innerText = '';
                this.value = 'Ukryj';
            }
            else
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                this.innerText = '';
                this.value = 'Ukryj';
            }
        " />
    </div>
    <div class="quotecontent" style="display: none;">
    
 <li>Możliwość walki z potworami na arenie walki i w różnych lokacjach.</li>
<li>Możliwość walki z innymi graczami.</li>
<li>Możliwość picia wywaru transmutacji. Daje nam to czasową umiejętność hipnozy, kradzieży oraz ataku krytycznego wampira.</li>
<li>Możliwość prowadzenia swojego plugawego ogrodu, farmy i strażnicy.</li>
<li>Możliwość posiadania oraz ulepszania konia oraz domu.</li>
<li>Możliwość kopania surowców w kopalni.</li>
<li>Możliwość wycinania drzew w lesie.</li>
<li>Możliwość handlu z innymi graczami.</li>
<li>Możliwość przechodzenia przez astralne portale.</li>
<li>Możliwość podróżowania po Puszczy Krutynów, lesie, górach, opuszczonym szybie, kanałach.</li>
<li>Możliwość wynajmu geologa.</li>
<li>Możliwość wykonywania różnych mikstur.</li>
<li>Możliwość ulepszania przedmiotów za pomocą specjalnych artefaktów.</li>
<li>Możliwość łowienia ryb, zbierania ziemniaków, kupowania grzybów i gotowania z tego różnych potraw.</li>
<li>Możliwość dołączenia do gildii lub stworzenia własnej.</li>
<li>Możliwość wrzucania kłów Vorvox'a do świętego źródła.</li>
<li>Możliwość kupowania jednorazowych kluczyków w Dworze Krutynów do podziemnego miasta.</li>
<li>Możliwość posiadania własnego wojownika płomieni oraz wystawiania go do walk.</li>
<li>Możliwość korzystania z ołtarzu ofiarnego.</li>
<li>Możliwość przeszukiwania cmentarzyska.</li>
<li>Możliwość walki z bossami które czasem dają nam legendarny przedmiot.</li>
<li>Możliwość brania udziału w konkursach w Domku Murgrabiego.</li>
<li>Możliwość pisania plotek, udzielania się w tawernie, bibliotece, redakcji gazety.</li>
<li>Możliwość brania udziału w sesjach grupowych w portalu.</li>
<li>Możliwość przeprowadzania honorowych walk na Arenie Honorowej.</li>
<li>Możliwość grania w lotto.</li>
<li>Możliwość kupowania i sprzedawania akcji na giełdzie.</li>
<li>Możliwość handlu na rynku handlowym.</li>
<li>Możliwość kupowania surowców w Magazynie Królewskim.</li>
<li>Możliwość kupowania i sprzedawania ekwipunku w różnych lokacjach.</li>
<li>Możliwość wpłacania na lokaty procentowe złota.</li>
<li>Możliwość korzystania z urzędu pracy oraz pracowania na Dworze Krutynów.</li>
<li>Możliwość wypływania na wyspy.</li>
<li>Możliwość korzystania ze Świątyni Kości.</li>
<li>Możliwość oddawania głosu w Hali Zgromadzeń.</li>
<li>Możliwość trenowania na Błoniach Treningowych.</li>
<li>Możliwość posiadania swoich chowańców, trenowania ich i wystawiania na walki.</li>
<li>Możliwość wzięcie ślubu.</li>
<li>Możliwość wynajmu własnych najemników.</li>
<li>Możliwość korzystania z domu uciech cielesnych.</li>
<li>Możliwość picia alkoholu w starym pubie.</li>

   
    
    
    
    
    
    
    
    
    
    </div>
</div>

{/literal}

<form method="post" action="card.php?action=class&amp;select=guardian&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab9">

<b>Klasa:</b> Nekromanta <br><br>
<b>Opis fabularny:</b><br>

<p>
Klasa ta za swoją kolebkę może uznawać gorące piaski Pustyni Rozpaczy w Księstwie Kurysium. Mówi się, że to właśnie kraina umarłych, gdzie walczy się o każdy dzień, pustynia jednak to przede wszystkim miejsce walki samego ze sobą. To tu magowie chcący poznać tajniki śmierci pokonują własne słabości i ograniczenia. Mówi się, że owładnęła nimi czarna magia, jednak sami nekromanci z magią mają niewiele wspólnego. Często opowiada się o nich jak o symbolu zła i chaosu, znani są też pod mianem „wskrzesicieli”.
</p><p>To dzięki nim możemy spotkać na terenach Cesarstwa Nieumarłych, których stworzyli podczas czarnomagicznych rytuałów. Nekromanci w swoim działaniu bazują na magicznych artefaktach, pradawnej i mrocznej wiedzy i zapisanych w potępionych księgach rytuałach. Jednak im potężniejszy mag, tym potężniejsze hordy nieumarłych potrafi powołać z powrotem do życia. Obcując na co dzień z mrokiem już dawno się w nim zatopili, tak samo jak istoty, które są ich tworami.
</p><p>Dla nich śmierć nie jest rzeczą ostateczną, a za odpowiednią cenę przywrócą życie każdemu. Nikt jednak nie pojmuje, że to wcale nie jest dar życia. Budzą przeważnie strach i niechęć, dlatego też sami trzymają się z dala od większych skupisk ludzi, uważając, że ci nie potrafią zrozumień ogromu i mocy śmierci.
</p><p>Są niezaspokojeni, cały czas dążą więc do coraz większej mocy, poszukują coraz silniejszych artefaktów i rytuałów. Najpotężniejszy z czarowników mają bowiem szansę stanie się Liczem, czyli nieśmiertelnym w formie umarłego, pokonując ostatecznie granicę między życiem a śmiercią.
</p>
<br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
<ul>	
	<li>Ma wstęp do cmentarza, ale tylko podczas Nocy Trupów.</li>
	<li>Podstawowe umiejętności rzemieślnicze.</li>
	<li>Postać nie posługuje się magią w walce.</li>
	<li>Posiada możliwość wskrzeszania graczy.</li>
</ul>
<br>{literal}
<div style="margin:20px; margin-top:5px">
    <div class="quotetitle">
        <b>Pozostałe umiejętności:</b>
        <input type="button" value="Pokaż/Ukryj" style="width:90px;font-size:10px;margin:0px;padding:0px;" onclick="
            if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display!= '')
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; 
                this.innerText = '';
                this.value = 'Ukryj';
            }
            else
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                this.innerText = '';
                this.value = 'Ukryj';
            }
        " />
    </div>
    <div class="quotecontent" style="display: none;">
    
 <li>Możliwość walki z potworami na arenie walki i w różnych lokacjach.</li>
<li>Możliwość walki z innymi graczami.</li>
<li>Możliwość picia wywaru transmutacji. Daje nam to czasową umiejętność hipnozy, kradzieży oraz ataku krytycznego wampira.</li>
<li>Możliwość prowadzenia swojego plugawego ogrodu, farmy i strażnicy.</li>
<li>Możliwość posiadania oraz ulepszania konia oraz domu.</li>
<li>Możliwość kopania surowców w kopalni.</li>
<li>Możliwość wycinania drzew w lesie.</li>
<li>Możliwość handlu z innymi graczami.</li>
<li>Możliwość przechodzenia przez astralne portale.</li>
<li>Możliwość podróżowania po Puszczy Krutynów, lesie, górach, opuszczonym szybie, kanałach.</li>
<li>Możliwość wynajmu geologa.</li>
<li>Możliwość wykonywania różnych mikstur.</li>
<li>Możliwość ulepszania przedmiotów za pomocą specjalnych artefaktów.</li>
<li>Możliwość łowienia ryb, zbierania ziemniaków, kupowania grzybów i gotowania z tego różnych potraw.</li>
<li>Możliwość dołączenia do gildii lub stworzenia własnej.</li>
<li>Możliwość wrzucania kłów Vorvox'a do świętego źródła.</li>
<li>Możliwość kupowania jednorazowych kluczyków w Dworze Krutynów do podziemnego miasta.</li>
<li>Możliwość posiadania własnego wojownika płomieni oraz wystawiania go do walk.</li>
<li>Możliwość korzystania z ołtarzu ofiarnego.</li>
<li>Możliwość przeszukiwania cmentarzyska.</li>
<li>Możliwość walki z bossami które czasem dają nam legendarny przedmiot.</li>
<li>Możliwość brania udziału w konkursach w Domku Murgrabiego.</li>
<li>Możliwość pisania plotek, udzielania się w tawernie, bibliotece, redakcji gazety.</li>
<li>Możliwość brania udziału w sesjach grupowych w portalu.</li>
<li>Możliwość przeprowadzania honorowych walk na Arenie Honorowej.</li>
<li>Możliwość grania w lotto.</li>
<li>Możliwość kupowania i sprzedawania akcji na giełdzie.</li>
<li>Możliwość handlu na rynku handlowym.</li>
<li>Możliwość kupowania surowców w Magazynie Królewskim.</li>
<li>Możliwość kupowania i sprzedawania ekwipunku w różnych lokacjach.</li>
<li>Możliwość wpłacania na lokaty procentowe złota.</li>
<li>Możliwość korzystania z urzędu pracy oraz pracowania na Dworze Krutynów.</li>
<li>Możliwość wypływania na wyspy.</li>
<li>Możliwość korzystania ze Świątyni Kości.</li>
<li>Możliwość oddawania głosu w Hali Zgromadzeń.</li>
<li>Możliwość trenowania na Błoniach Treningowych.</li>
<li>Możliwość posiadania swoich chowańców, trenowania ich i wystawiania na walki.</li>
<li>Możliwość wzięcie ślubu.</li>
<li>Możliwość wynajmu własnych najemników.</li>
<li>Możliwość korzystania z domu uciech cielesnych.</li>
<li>Możliwość picia alkoholu w starym pubie.</li>

   
    
    
    
    
    
    
    
    
    
    </div>
</div>

{/literal}

<form method="post" action="card.php?action=class&amp;select=necromancer&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>










<div id="tab10">

<b>Klasa:</b> Artysta <br><br>
<b>Opis fabularny:</b><br>
<p>
Delikatna granica oddziela rzemieślnika od artysty. Niczym wątła nić powoduje drgania, tak i ich drogi niemal równolegle krocząc nierzadko krzyżują się. Artysta to nie tylko fach w ręku ale i dusza otwarta, nacechowana ekspresjonizmem i emocjonalnością. Wśród nich można wyróżnić aktorów, muzyków, architektów, malarzy, tancerzy…ale i jubiler zdaje się być artystą, tak jak i garncarz czy krawiec. To, co rozdziela ich istotę to oryginalność.
</p><p>Jeśli artysta powtarza coś starego, już stworzonego, nie daje nic od siebie, staje się rzemieślnikiem. Zatem musi być dusza dodana do dzieła, aby osiągnęło ono niebagatelną wartość i było na ustach ludności.
</p><p>Artyści to mieszkańcy wielkich miast, stolic, rzadko kiedy mniejszych. Żyją dla tłumu i z tłumem. Wywodzą się z biedoty, a dzięki bogatym mecenasom sztuki mogą liczyć na drobne pieniądze. Czasem nawet zyskują o wiele więcej, dom, stałą pensję. Stają się wtedy kukiełką bogaczy, ich maskotką. Jest to klasa niezwykle atrakcyjna, ekstrawertyczna i ciekawa. Artyści są osobami towarzyskimi, lubiącymi flirtować i przechwalać się. Niekiedy to staje się powodem ich zguby, ale i sukcesu. Gdyż artysta może przewodzić tłumom niczym władca.
</p>
<br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
<ul>	
	<li>Zadaje tylko 10% obrażeń podczas walki.</li>
	<li>Podstawowe umiejętności rzemieślnicze.</li>

</ul>
<br>{literal}
<div style="margin:20px; margin-top:5px">
    <div class="quotetitle">
        <b>Pozostałe umiejętności:</b>
        <input type="button" value="Pokaż/Ukryj" style="width:90px;font-size:10px;margin:0px;padding:0px;" onclick="
            if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display!= '')
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; 
                this.innerText = '';
                this.value = 'Ukryj';
            }
            else
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                this.innerText = '';
                this.value = 'Ukryj';
            }
        " />
    </div>
    <div class="quotecontent" style="display: none;">
    
 <li>Możliwość walki z potworami na arenie walki i w różnych lokacjach.</li>
<li>Możliwość walki z innymi graczami.</li>
<li>Możliwość picia wywaru transmutacji. Daje nam to czasową umiejętność hipnozy, kradzieży oraz ataku krytycznego wampira.</li>
<li>Możliwość prowadzenia swojego plugawego ogrodu, farmy i strażnicy.</li>
<li>Możliwość posiadania oraz ulepszania konia oraz domu.</li>
<li>Możliwość kopania surowców w kopalni.</li>
<li>Możliwość wycinania drzew w lesie.</li>
<li>Możliwość handlu z innymi graczami.</li>
<li>Możliwość przechodzenia przez astralne portale.</li>
<li>Możliwość podróżowania po Puszczy Krutynów, lesie, górach, opuszczonym szybie, kanałach.</li>
<li>Możliwość wynajmu geologa.</li>
<li>Możliwość wykonywania różnych mikstur.</li>
<li>Możliwość ulepszania przedmiotów za pomocą specjalnych artefaktów.</li>
<li>Możliwość łowienia ryb, zbierania ziemniaków, kupowania grzybów i gotowania z tego różnych potraw.</li>
<li>Możliwość dołączenia do gildii lub stworzenia własnej.</li>
<li>Możliwość wrzucania kłów Vorvox'a do świętego źródła.</li>
<li>Możliwość kupowania jednorazowych kluczyków w Dworze Krutynów do podziemnego miasta.</li>
<li>Możliwość posiadania własnego wojownika płomieni oraz wystawiania go do walk.</li>
<li>Możliwość korzystania z ołtarzu ofiarnego.</li>
<li>Możliwość przeszukiwania cmentarzyska.</li>
<li>Możliwość walki z bossami które czasem dają nam legendarny przedmiot.</li>
<li>Możliwość brania udziału w konkursach w Domku Murgrabiego.</li>
<li>Możliwość pisania plotek, udzielania się w tawernie, bibliotece, redakcji gazety.</li>
<li>Możliwość brania udziału w sesjach grupowych w portalu.</li>
<li>Możliwość przeprowadzania honorowych walk na Arenie Honorowej.</li>
<li>Możliwość grania w lotto.</li>
<li>Możliwość kupowania i sprzedawania akcji na giełdzie.</li>
<li>Możliwość handlu na rynku handlowym.</li>
<li>Możliwość kupowania surowców w Magazynie Królewskim.</li>
<li>Możliwość kupowania i sprzedawania ekwipunku w różnych lokacjach.</li>
<li>Możliwość wpłacania na lokaty procentowe złota.</li>
<li>Możliwość korzystania z urzędu pracy oraz pracowania na Dworze Krutynów.</li>
<li>Możliwość wypływania na wyspy.</li>
<li>Możliwość korzystania ze Świątyni Kości.</li>
<li>Możliwość oddawania głosu w Hali Zgromadzeń.</li>
<li>Możliwość trenowania na Błoniach Treningowych.</li>
<li>Możliwość posiadania swoich chowańców, trenowania ich i wystawiania na walki.</li>
<li>Możliwość wzięcie ślubu.</li>
<li>Możliwość wynajmu własnych najemników.</li>
<li>Możliwość korzystania z domu uciech cielesnych.</li>
<li>Możliwość picia alkoholu w starym pubie.</li>

   
    
    
    
    
    
    
    
    
    
    </div>
</div>

{/literal}

<form method="post" action="card.php?action=class&amp;select=artysta&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>

<div id="tab11">

<b>Klasa:</b> Obywatel <br><br>
<b>Opis fabularny:</b><br>
<p>
To jedna z najmniej prestiżowych i zdawać by się mogło znaczących klas. Jest jednak najliczniejszą ze wszystkich w całym Cesarstwie. Miano obywatela przysługuje bowiem każdej istocie w granicach cesarstwa. Są to osoby, które z reguły nie odkryły w sobie żadnego talentu, nie obrały jeszcze żadnej ścieżki życia, lub wprost przeciwnie, po prostu starają się egzystować nie wadząc nikomu.
</p><p>Wśród obywateli znaleźć można zatem przedstawicieli wszystkich ras, bez względu na płeć czy status. Bogaci czy biedni, uczeni czy ci nie mający tego szczęścia, wszyscy ci, którzy nie zdecydowali jaką drogą będą kroczyć w życiu. Częstokroć podejmują się różnych zajęć, od pieczenia chleba w piekarniach po sprzedawanie własnego ciała na ulicach.
</p><p>Nie ma tu żadnych ograniczeń co do wykonywanych zajęć, barierę stanowi tu jedynie pomysłowość i kreatywność.
</p>
<br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
<ul>	
<li>Zadaje tylko 50% obrażeń podczas walki.</li>
<li>Podstawowe umiejętności rzemieślnicze.</li>

</ul>
<br>{literal}
<div style="margin:20px; margin-top:5px">
    <div class="quotetitle">
        <b>Pozostałe umiejętności:</b>
        <input type="button" value="Pokaż/Ukryj" style="width:90px;font-size:10px;margin:0px;padding:0px;" onclick="
            if (this.parentNode.parentNode.getElementsByTagName('div')[1].style.display!= '')
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = ''; 
                this.innerText = '';
                this.value = 'Ukryj';
            }
            else
            {
                this.parentNode.parentNode.getElementsByTagName('div')[1].style.display = 'none';
                this.innerText = '';
                this.value = 'Ukryj';
            }
        " />
    </div>
    <div class="quotecontent" style="display: none;">
    
 <li>Możliwość walki z potworami na arenie walki i w różnych lokacjach.</li>
<li>Możliwość walki z innymi graczami.</li>
<li>Możliwość picia wywaru transmutacji. Daje nam to czasową umiejętność hipnozy, kradzieży oraz ataku krytycznego wampira.</li>
<li>Możliwość prowadzenia swojego plugawego ogrodu, farmy i strażnicy.</li>
<li>Możliwość posiadania oraz ulepszania konia oraz domu.</li>
<li>Możliwość kopania surowców w kopalni.</li>
<li>Możliwość wycinania drzew w lesie.</li>
<li>Możliwość handlu z innymi graczami.</li>
<li>Możliwość przechodzenia przez astralne portale.</li>
<li>Możliwość podróżowania po Puszczy Krutynów, lesie, górach, opuszczonym szybie, kanałach.</li>
<li>Możliwość wynajmu geologa.</li>
<li>Możliwość wykonywania różnych mikstur.</li>
<li>Możliwość ulepszania przedmiotów za pomocą specjalnych artefaktów.</li>
<li>Możliwość łowienia ryb, zbierania ziemniaków, kupowania grzybów i gotowania z tego różnych potraw.</li>
<li>Możliwość dołączenia do gildii lub stworzenia własnej.</li>
<li>Możliwość wrzucania kłów Vorvox'a do świętego źródła.</li>
<li>Możliwość kupowania jednorazowych kluczyków w Dworze Krutynów do podziemnego miasta.</li>
<li>Możliwość posiadania własnego wojownika płomieni oraz wystawiania go do walk.</li>
<li>Możliwość korzystania z ołtarzu ofiarnego.</li>
<li>Możliwość przeszukiwania cmentarzyska.</li>
<li>Możliwość walki z bossami które czasem dają nam legendarny przedmiot.</li>
<li>Możliwość brania udziału w konkursach w Domku Murgrabiego.</li>
<li>Możliwość pisania plotek, udzielania się w tawernie, bibliotece, redakcji gazety.</li>
<li>Możliwość brania udziału w sesjach grupowych w portalu.</li>
<li>Możliwość przeprowadzania honorowych walk na Arenie Honorowej.</li>
<li>Możliwość grania w lotto.</li>
<li>Możliwość kupowania i sprzedawania akcji na giełdzie.</li>
<li>Możliwość handlu na rynku handlowym.</li>
<li>Możliwość kupowania surowców w Magazynie Królewskim.</li>
<li>Możliwość kupowania i sprzedawania ekwipunku w różnych lokacjach.</li>
<li>Możliwość wpłacania na lokaty procentowe złota.</li>
<li>Możliwość korzystania z urzędu pracy oraz pracowania na Dworze Krutynów.</li>
<li>Możliwość wypływania na wyspy.</li>
<li>Możliwość korzystania ze Świątyni Kości.</li>
<li>Możliwość oddawania głosu w Hali Zgromadzeń.</li>
<li>Możliwość trenowania na Błoniach Treningowych.</li>
<li>Możliwość posiadania swoich chowańców, trenowania ich i wystawiania na walki.</li>
<li>Możliwość wzięcie ślubu.</li>
<li>Możliwość wynajmu własnych najemników.</li>
<li>Możliwość korzystania z domu uciech cielesnych.</li>
<li>Możliwość picia alkoholu w starym pubie.</li>

   
    
    
    
    
    
    
    
    
    
    </div>
</div>
</p>
{/literal}

<form method="post" action="card.php?action=class&amp;select=obywatel&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>



























	</div>
	
	
	<br />&raquo; <a href="card.php">{$smarty.const.C_BACK}</a>
{/if}

{if $Action == 'deity'}



	{if $Select == ''}
		{if $Step == "change"}
			{if $Step2 == "confirm"}
				{$smarty.const.YOU_CHANGE} {$Pdeity}{$smarty.const.YOU_MAY} <a href="card.php?action=deity">{$smarty.const.A_SELECT2}</a> {$smarty.const.T_DEITY}<br />
			{else}
{$smarty.const.CHANGE} {$Ccost} {$smarty.const.CHANGE2}<br />
		<ul{if $Graphstyle == "Y"} class="sword"{/if}>
		<li><a href="card.php?action=deity&amp;step=change&amp;step2=confirm">{$smarty.const.C_YES}</a></li>
		<li><a href="card.php">{$smarty.const.C_NO}</a></li>
		</ul>
			{/if}
		{else}
	{/if}
	{else}
		<div class="center">
		{section name=deity loop=$GodName}
			&raquo;<a{if $Select == $GodOption[deity]} style="text-decoration: underline"{/if} href="card.php?action=deity&amp;select={$GodOption[deity]}">{$GodName[deity]}</a>&nbsp;
		{/section}
		</div>
		{$smarty.const.C_DEITY_INFO}
		<form method="post" action="card.php?action=deity&amp;select={$Select}&amp;step=mark">
			<input type="submit" value="{$smarty.const.C_SELECT}" />
		</form>
	{/if}
	<br />&raquo; <a href="card.php">{$smarty.const.C_BACK}</a>
		<div id="racetabs">
		<ul>
			<li><a href="card_deity_preview.php?view=azuth">Azuth</a></li>
			<li><a href="card_deity_preview.php?view=lathander">Lathander</a></li>
			<li><a href="card_deity_preview.php?view=tempus">Tempus</a></li>
			<li><a href="card_deity_preview.php?view=loviatar">Loviatar</a></li>
			<li><a href="card_deity_preview.php?view=shar">Shar</a></li>
			<li><a href="card_deity_preview.php?view=kelemvor">Kelemvor</a></li>
			<li><a href="card_deity_preview.php?view=bane">Bane</a></li>
			<li><a href="card_deity_preview.php?view=mielikki">Mielikki</a></li>
			<li><a href="card_deity_preview.php?view=helm">Helm</a></li>

		</ul>
		
</div>
{/if}

{if $Action == 'place'}
	{if $Select == ''}
		{$smarty.const.C_PLACE}
		<ul{if $Graphstyle == "Y"} class="sword"{/if}>
			{$City1}
			{$City2}
		</ul>
	{else}
		<div class="center">
		{section name=i loop=$Places}
			
			
			&raquo;<a{if $Select == $Places[i]} style="text-decoration: underline"{/if} href="card.php?action=place&amp;select={$Places[i]}">{$PlacesNames[i]}</a>&nbsp;
		{/section}
		</div>
		{$smarty.const.C_PLACE_INFO}
		
		
		<form method="post" action="card.php?action=place&amp;select={$Select}&amp;step=mark">
			<input type="submit" value="{$smarty.const.C_SELECT}" />
		</form>
	{/if}
	<br />&raquo; <a href="card.php">{$smarty.const.C_BACK}</a>
{/if}

	<br>

{/strip}
