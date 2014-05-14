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
	<form method="post" action="card2.php?action=gender">
	
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
	<br />&raquo; <a href="card2.php">{$smarty.const.C_BACK}</a>
{/if}
{if $Action == 'race'}
	<div id="racetabs">
		<ul>
			<li><a href="card2_race_preview.php?view=human">Człowiek</a></li>
			<li><a href="card2_race_preview.php?view=elf">Elf</a></li>
			<li><a href="card2_race_preview.php?view=dwarf">Krasnolud</a></li>
			<li><a href="card2_race_preview.php?view=hobbit">Hobbit</a></li>
			<li><a href="card2_race_preview.php?view=reptilion">Jaszczuroczłek</a></li>
			<li><a href="card2_race_preview.php?view=gnome">Gnom</a></li>
			<li><a href="card2_race_preview.php?view=darkelf">Mroczny elf</a></li>
			<li><a href="card2_race_preview.php?view=undead">Nieumarły</a></li>
			<li><a href="card2_race_preview.php?view=tauren">Tauren</a></li>
			<li><a href="card2_race_preview.php?view=orc">Ork</a></li>
			<li><a href="card2_race_preview.php?view=centaur">Centaur</a></li>
			<li><a href="card2_race_preview.php?view=halfdragon">Półsmok</a></li>
			<li><a href="card2_race_preview.php?view=kobold">Kobold</a></li>
			<li><a href="card2_race_preview.php?view=demon">Demon</a></li>
			<li><a href="card2_race_preview.php?view=shadow">Cień</a></li>
			<li><a href="card2_race_preview.php?view=serafin">Serafin</a></li>
		</ul>
		
</div>
	
		
	
	<br />&raquo; <a href="card2.php">{$smarty.const.C_BACK}</a>
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
<form method="post" action="card2.php?action=class&amp;select=warrior&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab2">

		<b>Klasa:</b> Barbarzyńca <br><br>
<b>Opis fabularny:</b><br>
<p>Jeśli Wojownik jest profesorem walki Barbarzyńca bezapelacyjnie jest jej sługą. Podstawową kwestią różniącą Wojownika od Barbarzyńcy jest kultura, kunszt i podejście do rzemiosła. Barbarzyńca żyje wojną i rozlewem krwi.  I choć jest wojownikiem Północy klasa ta jest diametralnie inna. Życie barbarzyńcy to pasmo walk i wojen, do których podchodzi całym sobą. Ma w duszy dziką bestię, która nie przejmuje się wynikiem walki a samą satysfakcją płynącą z niej. Bestia tkwiąca w barbarzyńcy to chaos i dzikość, które na polu walki nadają mu szaleńczej furii wyłączając myślenie i pozwalają mu kierować się pierwotnym instynktem. Nie można jednak powiedzieć o barbarzyńcach, że nie mają honoru czy swego kodeksu. Wręcz przeciwnie. To kodeks surowy i twardy, gdyż klasa ta wywodzi się z surowego kraju zwanego Norgardem, gdzie trzeba walczyć o każdy, kolejny dzień życia. Barbarzyńcy rzadko grzeszą inteligencją, czy kulturą, w szerokim rozumieniu tego pojęcia. To prości, często nieokrzesani, potężni w budowie wojownicy, którzy nie zastanawiają się nad koleją rzeczy, dla nich walka ma prostą zasadę walcz lub zgiń. Podchodzą do owej sztuki w sposób prosty i pierwotny, używając broni i siły, która jest głównym atutem tej klasy wojaków. Siła, determinacja, pierwotny instynkt przetrwania, dzikość i nieokiełznany temperament, sprawiają, że każdy barbarzyńca jest niemal maszyną do zabijania, maszyną, która nie myśli a jedynie młuci z całej siły wykorzystując też duży i ciężki oręż. Kultura tych wojowników północy, czyni ich bohaterami Norgardu i postrachem innych ziem, które grabią gwałcąc kobiety, mordując mieszkańców, plądrując i paląc całe wioski. To co jest chwałą dla barbarzyńcy i daje mu dumę, dla wojowników bardziej cywilizowanego świata, jest nie do przejścia budząc w nich strach bądź niesmak. Bezgraniczne oddanie dzikiej walce, w której barbarzyńca idzie przed siebie niczym taran a jedynym celem jest zabić, to atut tej klasy. Bestialski, dziki sposób walki, to ich siła. Ich kultura niemal wyzbyta magii, jaką znają inne cywilizacje sprawia, że każdy przedstawiciel tej klasy pała nienawiścią do wszystkiego co związane z magią. Zarówno do przedmiotów magicznych jak i do samych Magów, których , gdyby mógł, zmiótł by z powierzchni ziemi bądź zadeptał jak byle robactwo. Owe uprzedzenia zapewne wynikają z lęku przed tym co niezrozumiałe, nienamacalne…I choć poza udeptaną ziemią, to zwykłe, normalne istoty dla widzących ich podczas niej, zostaną Barbarzyńcami, Dzikusami, Berserkami.   Często najmowani do konwojów, ochrony osób lub bogactw, są tanią i zadziwiająco skuteczną bronią. Wielu z nich szuka przygód trudniąc się rabowaniem, napaściami, plądrowaniem i poszukiwaniem skarbów. Więc jeśli Nordowie i Wikingowie są ci bliscy, Norgard nie odstrasza lodem i śniegiem, przedkładasz siłę i instynkt, nad wiedzę i kunszt. Wybierz tę klasę a na pewno się w niej odnajdziesz.</p>

<br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
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
<form method="post" action="card2.php?action=class&amp;select=barbarian&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab3">

<b>Klasa:</b> Mag <br><br>
<b>Opis fabularny:</b><br>

<p>Magowie to istoty wybrane, jak sami o sobie mówią. Ich jestestwo nosi w sobie tajemna siłę zwana magia, z którą każdy mag się rodzi. Siła owa to talent do jednej z dziedzin zwanych magicznymi. Magowie więc, to istoty, które ową wyjątkową mocą, jaką jest magia dysponują. Magowie urodzeni na ziemiach Huritinu, przedstawiają sobą najczęściej jasne dziedziny magii. Są wśród nich magowie żywiołów, magowie umysłu, magowie życia posiadający talenty uzdrawiania. Znajdziemy wśród nich także istoty widzące przyszłość, oraz posiadające nietypowa umiejętność nadawania przedmiotom magicznych właściwości. Ziemie tajemniczego Kurysuim są zaś kolebką ciemnej, mrocznej magii, którą reprezentują magowie śmierci, czarni magowie, magowie władający ogniem lub iluzją, sprowadzającą na twój umysł paranoję, strach, bądź szaleństwo, oraz alchemicy potrafiący uwarzyć szczęście, miłość, pożądanie a nawet chwałę i życie wieczne.. Norgard czas słynie z magii pierwotnej, pradawnej i prostej, tam najwięcej jest magów , którzy okiełznali magie wody, tam magia runiczna ma swoje korzenie, tam rodzą się wróżbici , wieszcze, szeptuchy znawcy duchów i demonów oraz pierwotnej magii w jej najczystszej postaci. Magowie to z reguły szanowane istoty, które w swoim środowisku cieszą się szacunkiem i uznaniem, bądź otoczeni są strachem i przerażeniem. Wśród magów znajdziemy elity umysłowe świata ale i szaleńców owładniętych chęcią zemsty, którym ich moc odebrała rozsądek znacząc ich szaleńczymi wizjami ludzi nieprzeciętnych i wielkich, choć niebezpiecznych i szalonych. Choć Mag jest istotą posiadającą w sobie magiczny dar, potrzebuje lat nauki i ćwiczeń by go rozwinąć i nauczyć się nad nim panować. To wyjątkowa i niebezpieczna droga. Choć daje moc panowania nad  sferą magiczną, kryje  w sobie niebezpieczeństwo, śmierci  czy szaleństwa przy utracie kontroli. Jeśli interesuje cię umysł a nie masz zamiłowania do broni. Jeśli pociąga cię to, co niematerialne, mistyczne, magiczne.. Zostań magiem i opanuj swoją dziedzinę magii nie tracąc przy tym zdrowia ni życia.</p>

<br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
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

<form method="post" action="card2.php?action=class&amp;select=mage&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab4">

<b>Klasa:</b> Złodziej <br><br>
<b>Opis fabularny:</b><br>
<p>Złodziej to najstarszy zawód świata, jak kapłan czy kurtyzana. Jednak ze względu na swą wszechstronność i wielość specjalizacji tego fachu, stał się jedną z klas. Złodziejem może być niemal każda istota, którą charakteryzuje szybkość, zwinność, zręczność i chęć wzbogacenia się łatwym sposobem. Fachu złodzieja, niezależnie od tego czym się trudni, czy działa sam, czy w grupach zorganizowanych, trzeba się tez nauczyć. Trening wszak czyni mistrza. Złodziej zaś to mistrz kamuflażu i sztuki przywłaszczania sobie dóbr. Jest łotrem niezależnie od tego z jakiej wywodzi się kultury. I choć są takie rasy, które ze względu  na swój system wartości, czy ograniczenia, nie będą patrzyły w te stronę, zawsze znajdzie się czarna owca. Co tak naprawdę znaczy bycie złodziejem? To filozofia życia na pograniczu prawa, w której cenne są spryt, wyczucie, zamiłowanie do adrenaliny i niebezpieczeństwa. Złodzieje świetnie posługują się bronią krótką, taką jak sztylety i noże. A także niekonwencjonalną bronią skrytobójców, którymi często bywają, taką jak świstuły, liny czy łańcuchy. Złodziej to mistrz walki w ręcz, do której potrafi wykorzystać wszystko co ma wokół. Złodzieje parają się wszystkim, co można znaleźć w szarej strefie, wszystkim co nielegalne od przemytu i szpiegostwa, przez kradzieże kieszonkowe i rabunki,  po skrytobójstwo a nawet piractwo. Choć złodzieje mają swój kodeks honorowy, ich postępowanie często nie mieści się w przyjętych normach społecznych. Jeśli fascynuje cię życie na krawędzi prawa…  Jeśli masz smykałkę do ciemnych spraw i interesów.. Jeśli uważasz ze podołasz temu rzemiosłu unikając lochów czy szubienicy. Jeśli lubisz uczucie wiecznego lęku a ciągłe oglądanie się za siebie to dla ciebie rodzaj gry i sposób na Zycie. Złodziej to klasa dla ciebie.</p>
<br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
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
<form method="post" action="card2.php?action=class&amp;select=thief&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab5">

<b>Klasa:</b> Rzemieślnik <br><br>
<b>Opis fabularny:</b><br>
<p>Rzemieślnik to klasa dla wszystkich, którzy nie myślą o nieustającej walce. Znaleźć ich możemy zarówno w dużym mieście jak i małej wiosce. Wszędzie są tak samo wysoko cenieni. Rzemieślnik z zasady jest istotą cierpliwą, spokojną i posiadającą dużą dozę zdrowego rozsądku. Żyje on w monotonii i nie uważa tego za coś złego. W wioskach czy na pustkowiach rzemieślnik jest po trosze to tym, to tamtym, zwłaszcza jeżeli zawody są pokrewne, a w okolicy nie ma nikogo innego natomiast większa specjalizacja pojawiała się w miastach. Rzemieślnikiem jest zarówno kowal jak, górnik, hutnik czy też wytwórca łuków. Mało kto uważa rzemieślnika za artystę, a jednak jest on nim w pewnym stopniu. W zależności od rasy czy kultury z jakiej wywodzi się rzemieślnik obiera najdogodniejsza dla siebie dyscyplinę. Na przykład powszechnie wiadomo, że najlepszymi górnikami są krasnoludy, jubilerami gnomy, a wytwórcami luków elfy. Rodzaje stopów czy kształt broni zależny jest od kultury z jakiej wywodzi się rzemieślnik. Idąc za przykładem miecze wykonywane przez elfy są lekkie, pięknie zdobione i bardzo często posiadają magiczne właściwości. Krasnoludy zaś lubują się w toporach, barbarzyńcy w ciężkiej, dwuręcznej broni, centaury w drewnianej. Wiedza i kunszt rzemieślniczy najczęściej przekazywana jest z pokolenia na pokolenie. W ten sposób tworzy się tradycja rodzinna, o której mówimy „ Z dziada pradziada „ . Jeśli cenisz sobie spokój i harmonię… Jeśli masz w sobie twórcę a satysfakcję daje ci praca własnych rąk. Jeśli masz w sobie tyleż siły co talentu. Zostań rzemieślnikiem. Niech twój fach da ci poważanie i pełną sakiewkę.</p>

<br><br><b>Cechy mechaniczne wyróżniające klasę:</b><br>
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

<form method="post" action="card2.php?action=class&amp;select=artisan&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab6">

<b>Klasa:</b> Łowca <br><br>
<b>Opis fabularny:</b><br>
<p>Można powiedzieć, że łowca to istota dobrze czująca się w dziczy, a jednak nie. Wraz z rozwojem kultury i zwiększającym się zapotrzebowaniem na inne usługi ta klasa ma wielorakie zastosowanie. Łowca to łucznik, tropiciel, którego umiejętności nie mogą być porównywane z żadnymi innymi. Jego szybkość oraz celność są niemal legendarne. Umiejętność zastawiania pułapek – zarówno tych, które zadają obrażenia, jak i takich, które unieruchamiają, łowcy wykorzystują nie tylko jako myśliwi, z którymi najczęściej są kojarzeni. Znajomość fauny i flory, odczytywanie śladów to ich domena. Te umiejętności pozwalają im na przetrwanie zarówno w miastach jak i w dzikich ostępach leśnych. Tak utarło się, że łowca to przede wszystkim myśliwy, ale równie dobrze może być to łowca nagród tropiący innych dla własnych korzyści. Często istoty parające się w tą dziedziną stają się łowcami wynaturzeń, czyli tego wszystkiego czego nie lubią bądź nie rozumieją. Łowca to często samotnik, niecierpiący ograniczeń. Wolny duch, często żyjący z najemniczych zleceń. łowcy mają świetne wyczucie kierunku, potrafią oszacować go na podstawie obserwacji słońca czy gwiazd, a także zjawisk przyrody. W zależności o rasy czy kultury z jakiej się wywodzi łowca będzie zajmował się czym innym. Elfy czy centaury zamieszkujące ziemie Huritinu będą głównie myśliwymi lub przewodnikami. Wywodzące się z ziem Kurysium pół smoki, nieumarli lub demony staną się celem dla łowców. Jeżeli cenisz naturę, potrafisz z nią współgrać lub jeżeli brak Ci tolerancji, czegoś nie lubisz, nie rozumiesz łowca to klasa stworzona dla Ciebie. Mnogość przygód, możliwość polowań pociąga Cię to ta klasa jest idealna.</p>
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

<form method="post" action="card2.php?action=class&amp;select=ranger&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab7">

<b>Klasa:</b> Szaman <br><br>
<b>Opis fabularny:</b><br>

<p>Szaman to klasa niezwykle rzadka poza Norgardem. Reprezentanci tej klasy, to nie kto inny jak przywódcy duchowi. Biegli w dziedzinie zielarstwa, wytwarzania maści i wywarów leczących tak ciało jak i duszę. Wśród przedstawicieli tej niezwykłej klasy znajdziemy istoty o talencie wróżbiarskim, darze jasnowidzenia, czy mistycznym kontakcie ze sferą niematerialną. Choć klasa ta nie ma nic wspólnego z magią, ma w sobie jej pierwotną prawdę i wydźwięk wywodząc się z czystej natury i jej darów. Szamani to istoty posiadające szeroką i rozległą wiedze na temat naturalnych skarbów tego świata, od minerałów, przez faunę i florę, aż po sposoby ich łączenia tak, by wydobyć z natury właściwości lecznicze czy halucynogenne. Szamani w zależności od kultury czy rasy z jakiej się wywodzą są otaczani tak lękiem jak i szacunkiem, jak wszystko czego nie da się do końca pojąć rozumem. Swoją wiedzę przekazują uczniom z pokolenia na pokolenie wraz z rytuałami jakie potrzebne są by uzdrowić czyjąś znękaną dusze, odegnać złe duchy, czy wejść w kontakt z bóstwami poprzez wprowadzanie się w trans. W tej klasie plasują się też istoty posiadające dar uzdrawiania dotykiem. Szamani są , jak magowie w pierwotnych cywilizacjach i kulturach, ich mądrość i umiejętności służą społeczności w różny sposób. Wśród szamanów wielu jest prawdziwych znawców, ale wielu jest tez oszustów, snujących niecne intrygi i wykorzystujących posłuch i władzę, jaką daje im ich pozycja i szacunek, którym są darzeni wśród swoich. Znajdziemy pośród przedstawicieli tej klasy zielarzy, wiedźmy, szeptuchy,  wróżbitów, uzdrowicieli i  wieszczów, a nawet demonologów i mistyków. Wszystko zależne jest od tego w jakim regionie świata będziemy szukać i wśród jakich ras czy kultur tego świata ich znajdziemy. Jeżeli czujesz w sobie powołanie do niesienia pomocy innym dzięki darom tego świata. Jeśli wiedza i pierwotny mistycyzm są ci bliskie. To klasa dla ciebie.</p>


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

<form method="post" action="card2.php?action=class&amp;select=shaman&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab8">

<b>Klasa:</b> Gwardzista <br><br>
<b>Opis fabularny:</b><br>
<p>
Gwardzista jest to nowa klasa. Powstała z tradycji księstwa Hiuritinu znanego z dużej i wyszkolonej armii zawodowej, na potrzeby Cesrastwa Reisen. Niezależna od rasy i statusu majątkowego, jest dla każdego, kto pragnie mieć stały dochód i marzy o wojskowej karierze. Podstawowym celem Gwardzisty jest ochrona Cesarstwa we wszystkich aspektach. To ktoś, kto potrafi wykonywać rozkazy i oddany jest swojej służbie . Do akademii szkolącej gwardzistów często rekrutuje się już około 10 letnie dzieci, by od najmłodszych lat szkolić je do walki z każdą agresją, zarówno ofensywnie jak i defensywnie. W tej klasie znajdziemy strażników patrolujących ulice miasta, szlaki handlowe morskie czy lądowe, jak i wyszkolonych strzelców, a także jednostki owiane tajemnicą, których celem jest skrytobójstwo czy szpiegostwo. Podstawą pracy Gwardzisty jest ochrona obywateli, oraz granic Cesarstawa . Spośród najlepszych gwardzistów wyłaniana jest straż przyboczna do ochrony najznamienitszych person Cesarstwa, od Cesarza począwszy a na Kapłanach skończywszy. Gwardzista to osoba lojalna i dumna ze swojej służy, kochająca swój kraj i oddająca się swemu rzemiosłu bez reszty. Całe Zycie gwardzisty podporządkowane jest Gwardii i temu, co robi. Są wśród nich szermierze i kusznicy, marynarze i konnica. Zajmują się wszystkim , co powoduje, iż obywatele Cesarstwa mogą czuć się bezpieczni. Karierę w gwardii zrobić może każdy kto bezgranicznie odda się państwu. I choć rekruci z niższych warstw społecznych, zaczynają od najniższych stopni pnąc się w górę po jej szczeblach. Dzięki za wytrwałości, sumienności i rygorowi, często dochodzą na sam szczyt.
</p><p>
Leży Ci na sumieniu dobro Cesarstwa ta klasa jest dla Ciebie. Karierę zaczyna gwardzista od najniższego szczebla by móc się wykazać i piąć po szczeblach kariery wojskowej. Jeśli leży ci na sercu dobro obywateli Cesarstwa. Jeśli interesuje cie stały wikt i porządne zajęcie. Jeśli nie straszna ci dyscyplina i hierarchia. Nie zastanawiaj się. To klasa dla ciebie.
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

<form method="post" action="card2.php?action=class&amp;select=guardian&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>
<div id="tab9">

<b>Klasa:</b> Nekromanta <br><br>
<b>Opis fabularny:</b><br>
<p>Nekromanci, to klasa mająca swoje korzenie pośród gorących piasków tajemniczego i mrocznego Księstwa Kurysium. Przedstawiciele tej klasy często są magami owładniętymi mroczną magią, choć sama klasa z talentem magicznym ma niewiele wspólnego. Kojarzeni ze złem i burzeniem porządku świata, zwani są wskrzesicielami. To oni w dużej mierze stworzyli rasę Nieumarłych, przez swe mroczne, tajemne praktyki oparte na najbardziej czarnomagicznych rytuałach. Nekromanta to znawca rytuałów wskrzeszenia, którego skutki są różne. Rytuał ten opiera się na tajemnych praktykach z wykorzystaniem czarnomagicznych artefaktów, które są w stanie wskrzesić umarłego i wyrwać go śmierci. To bardzo niebezpieczne zajęcie, gdyż najmniejszy błąd może kosztować nekromantę życie. Najczęściej pracują oni na usługach najpodlejszych istot tego świata, sami tez zbyt często oddając się mrokowi, z którym obcują na co dzień. To oni tworzą armie nieumarłych, bezmyślnych istot  dzięki którym czarnoksiężnicy, czy najpodlejsze kreatury tego świata osiągają swoje cele i spełniają ambicje. To oni wrócą życie każdemu za odpowiednio wysoką cenę. Budzący strach a nawet niesmak najczęściej trzymają się na uboczu niezrozumiani i często pogardzani. Jednak sama znajomość rytuałów nie jest wszystkim czego potrzeba nekromancie. Musi on też zdobyć odpowiednio silne artefakty nasycone najmroczniejszą magia tego świata, by móc wskrzesić umarłego. To od siły artefaktów zależy czy i w jakim stopniu mu się to uda, oraz od jego wiedzy i umiejętności. Jeśli jakiś czarnoksiężnik stanie się na tyle potężny by panować nad życiem i śmiercią, poznając rytuały nekromantów i praktykując je przez lata a czasem i wieki, posiądzie najsilniejsze nekromancie artefakty może stać się najwyższa formą jaka funkcjonuje w tej klasie- Liczem. Jednak dotyczy to tylko najpotężniejszych czarnoksiężników. Więc jeśli fascynuje cię wyrywanie istot śmierci. Jeśli twoja natura jest mroczna a serce nie zna strachu przed tym co nieodgadnione. Jeśli chcesz opanować sztukę władania życiem i śmiercią. Zostań Nekromantą i strzeż się, gdyż obcowanie z Niebytem to najbardziej niebezpieczne z zajęć tego świata.</p>
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

<form method="post" action="card2.php?action=class&amp;select=necromancer&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>










<div id="tab10">

<b>Klasa:</b> Artysta <br><br>
<b>Opis fabularny:</b><br>
<p>Artysta to klasa dla niektórych porównywalna do rzemieślnika. Wielu przecież wytwarza rzeczy, z których inni korzystają. Malarz czy jubiler dają nam swoje wyroby dla uciechy oka i duszy. Tej wrażliwej części duszy. Podstawową cechą różniącą artystę i rzemieślnika jest to, że artysta tworzy swoje dzieła w oparciu o własną koncepcję, nadając im niepowtarzalny charakter. Dzięki temu dzieła znanych artystów rozpoznawane są bez potrzeby oglądania ich wzorów. W zależności od rodzaju wykonywanej twórczości wykonywany przez artystę zawód będzie nosił nazwę na przykład: aktor, artysta malarz, śpiewak, tancerz czy kuglarz. Artysta to z zasady osoba próżna, trzeba to głośno powiedzieć, i potrzebuje do egzystowania aprobaty i miłości widzów. Większość artystów wyznaje zasadę „To ja jestem dla publiczności, a nie publiczność dla mnie”. Artysta, który umie manipulować ciekawością, miota się między skrajnościami, między zachwytem a rozpaczą. Artysta to istota o innej wrażliwości, dla której piękno jest we wszystkim, co go otacza i nawet brzydota ma w sobie jakąś niepowtarzalność i wyjątkowość. To osoby kapryśne, często żyjące w świecie swoich wyobrażeń. Są wśród nich osoby o wielkim talencie w różnorodnych dziedzinach kultury i sztuki. Jednych z nich się docenia innych nie zna bądź lekceważy. Jedno jest dla nich wspólne, to ich wrażliwość i intensywność z jaką przeżywają, z jaką patrzą na świat i odczuwają wszystko co się wokół nich dzieje. Jedni się kształcą, inni są samoukami z niebywałym, choć nieoszlifowanym, talentem.
</p><p>
Jeżeli czujesz, że masz coś do przekazania światu. Jeżeli jesteś wrażliwą duszą. Jeśli czujesz w sobie artystę. Zostań nim.
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

<form method="post" action="card2.php?action=class&amp;select=artysta&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>

<div id="tab11">

<b>Klasa:</b> Obywatel <br><br>
<b>Opis fabularny:</b><br>
<p>Wśród mieszkańców krainy znajdziemy dużą różnorodność klas i ras. Wielu pragnie zostać kimś i obiera ścieżkę, po której kroczy niezmiennie szkoląc się, ćwicząc by zdobywać wiedzę, kunszt, stanowiska. Wielu jest też takich, którzy zupełnie nie wiedzą co ze sobą zrobić. Niezależnie od rasy czy kultury, w jakiej się dorasta, zawsze znajdzie się jednostka wybitna i zwykła „czarna owca”. Obywatel to klasa dla niezdecydowanych, zdecydowanych, dla szaraków i jednostek wybitnych. Znajdzie się tu artysta, który nie umiejąc nic osiągnąć swoją sztuką połasi się na cudzą sakiewkę. Piekarz wypiekający pachnące pieczywo, cukiernik, perfumiarz. Dla pań lub panów handlujących walorami swego ciała także ta klasa daje możliwość zaistnienia. Wybierając tą klasę, każdy znajdzie coś dla siebie. Mieszczanin i szlachcic, ten bogaty i ten zubożały,żebrak i zwykły robotnik a nawet niewolnik. Aptekarz, bankier, browarnik, cieśla, kat a nawet zwykła drobna pijaczyna to właśnie obywatel. Gdzieś pasą się owce? Krowy nie mają opieki? Pasterz potrzebny od zaraz.. Chłop czy farmer, Ziemianin czy Kupiec.. Wachlarz zajęć dla obywatela jest wielki. Uważasz, że szwaczka czy krawiec jest klasą dla Ciebie, wybierz obywatela. Ta klasa nie ogranicza, nie narzuca profesji.</p>

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

<form method="post" action="card2.php?action=class&amp;select=obywatel&amp;step=mark">
		<input type="submit" value="{$smarty.const.C_SELECT}" />
	</form>
</div>



























	</div>
	
	
	<br />&raquo; <a href="card2.php">{$smarty.const.C_BACK}</a>
{/if}

{if $Action == 'deity'}



	{if $Select == ''}
		{if $Step == "change"}
			{if $Step2 == "confirm"}
				{$smarty.const.YOU_CHANGE} {$Pdeity}{$smarty.const.YOU_MAY} <a href="card2.php?action=deity">{$smarty.const.A_SELECT2}</a> {$smarty.const.T_DEITY}<br />
			{else}
{$smarty.const.CHANGE} {$Ccost} {$smarty.const.CHANGE2}<br />
		<ul{if $Graphstyle == "Y"} class="sword"{/if}>
		<li><a href="card2.php?action=deity&amp;step=change&amp;step2=confirm">{$smarty.const.C_YES}</a></li>
		<li><a href="card2.php">{$smarty.const.C_NO}</a></li>
		</ul>
			{/if}
		{else}
	{/if}
	{else}
		<div class="center">
		{section name=deity loop=$GodName}
			&raquo;<a{if $Select == $GodOption[deity]} style="text-decoration: underline"{/if} href="card2.php?action=deity&amp;select={$GodOption[deity]}">{$GodName[deity]}</a>&nbsp;
		{/section}
		</div>
		{$smarty.const.C_DEITY_INFO}
		<form method="post" action="card2.php?action=deity&amp;select={$Select}&amp;step=mark">
			<input type="submit" value="{$smarty.const.C_SELECT}" />
		</form>
	{/if}
	<br />&raquo; <a href="card2.php">{$smarty.const.C_BACK}</a>
		<div id="racetabs">
		<ul>
			<li><a href="card2_deity_preview.php?view=azuth">Azuth</a></li>
			<li><a href="card2_deity_preview.php?view=lathander">Lathander</a></li>
			<li><a href="card2_deity_preview.php?view=tempus">Tempus</a></li>
			<li><a href="card2_deity_preview.php?view=loviatar">Loviatar</a></li>
			<li><a href="card2_deity_preview.php?view=shar">Shar</a></li>
			<li><a href="card2_deity_preview.php?view=kelemvor">Kelemvor</a></li>
			<li><a href="card2_deity_preview.php?view=bane">Bane</a></li>
			<li><a href="card2_deity_preview.php?view=mielikki">Mielikki</a></li>
			<li><a href="card2_deity_preview.php?view=helm">Helm</a></li>

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
			
			
			&raquo;<a{if $Select == $Places[i]} style="text-decoration: underline"{/if} href="card2.php?action=place&amp;select={$Places[i]}">{$PlacesNames[i]}</a>&nbsp;
		{/section}
		</div>
		{$smarty.const.C_PLACE_INFO}
		
		
		<form method="post" action="card2.php?action=place&amp;select={$Select}&amp;step=mark">
			<input type="submit" value="{$smarty.const.C_SELECT}" />
		</form>
	{/if}
	<br />&raquo; <a href="card2.php">{$smarty.const.C_BACK}</a>
{/if}

	<br>

{/strip}
