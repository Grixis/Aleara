<html lang="en">
	<title>Aleara MMORPG - Gra Online</title>
	<head>
		<script type="text/javascript" src="javascript/jquery.js"></script>
		<script type="text/javascript" src="javascript/jquery-ui.js"></script>
		<script type="text/javascript" src="javascript/jquery_cookie.js"></script>
		<script type="text/javascript" src="javascript/detector.js"></script>
		<script type="text/javascript" src="javascript/md5.js"></script>
		{literal}
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39308901-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
{/literal}
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/topki.css">
		<link rel="stylesheet" href="styleg.css">
		<link type="text/css" href="css/ui.css" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="css/main/default/layout.css" />
		<div id="fb-root"></div>
		<script type="text/javascript">
			document.cookie = 'fbid=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
			document.cookie = 'fbuser=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
			document.cookie = 'fbkey=; expires=Thu, 01-Jan-70 00:00:01 GMT;';


			
		</script>
	</head>
	<body style="color: #FFFFFF; background-color: #000000; background-position: center; background-image: url('ee.jpg')">
		<table border="0" cellpadding="0" cellspacing="0" style="width: 990px; height: 1050px; background-image: url('greynp2x.png')"
		align="center">
			<tr>
				<td valign="top" colspan="4">
					<table cellpadding="0" cellspacing="0" style="width: 990px; height: 150px">
						<tr>
							<td style="width: 315px; height: 150px">
								<p style="margin-left: 45px; text-align: left">
									<br>	<font size="1"><br>
									<font size="1"><font color="#669999"><font face="Verdana">	
									<b>Online (wraz z ukrytymi):</b> {$Online}<br>
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
								<form action="card.php" method="post"> 	
								<form action="soundtrack.html" method="post"> 								
									<p style="margin-left: 49px;">E-mail:<input style="width: 70px; height: 17px" name="email" size="15" type="text" />
										Hasło:  <input style="width: 70px; height: 17px" name="pass" size="15" type="password" />
										<input id="fng" type="hidden" name="finger" value="0"/>
									<input id="graa" type="submit" value="Loguj" style="width: 70px; height: 22px" class="button"/></input></form></form></p>
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
var prt=pstfgrpnt(1);
$("#fng").val(prt);
</script> 
<noscript><img alt="stat4u" src="http://stat.4u.pl/cgi-bin/s.cgi?i=demonix&amp;r=ns" width="1" height="1"></noscript> 
<!-- stat.4u.pl KoNiEc --><br>
<a href="http://www.inbot.pl" title="Katalog Stron www"><img src="http://www.inbot.pl/button.gif" border="0" alt="Katalog Stron" /></a>
<br>
<a title="Top Ranking, Top Lista" href="http://puuf.eu"><img src="http://puuf.eu/button.php?u=DemoniX" alt="Ranking Najlepszych Stron Top Lista" border="0" /></a>
<br>
<a href="http://www.top-rank.pl/" target="_blank"><img src="http://www.top-rank.pl/button.php?u=DemoniX" alt="Statystyki, katalog stron www, dobre i ciekawe strony internetowe" border="0" /></a>



{/literal} </div>
						      <div id="reklama"><br><br>
							      <marquee width="95" height="60" direction="up" scrollamount="1" style=" margin-left: 70px; border=1";>
									    <a href="http://brudnebaletki.strefa.pl"><img src="bbbaner.jpg" width="90" height="33"></a><br><br>
									    <a href="http://tv-mecze.pl" target="_blank"><img src="http://www.ufast.eu/pics/158857tv.gif "  width="90" height="33"  alt="TV-MECZE.PL" /></a><br><br>
							       	<a href="http://yggdrasil.pl"><img border="0" alt="Yggdrasil – portal o grach" src="http://yggdrasil.pl/button.png" width="90" height="33"></a><br><br>
							      	<a href="http://www.kf2.pl"><img src="http://www.kf2.pl/images/banners/button2.jpg" width="90" height="33" alt="Kroniki Fallathanu - Prawdziwy mmoRPG w przeglądarce"></a><br><br>
								      <a href="http://animeonmusic.pl/news.php"><img src="http://animeonmusic.pl/images/aonmb.png"></a><br><br>
							        <a href="http://animegakure.dbnao.net"><img src="http://dbnao.szm.com/ag/b88x31_1.jpg"></a><br><br>
								      <a href="http://xboxarcade.pl"><img src="http://xboxarcade.pl/images/reklama/arcadebutton.gif"><br></a><br>
							      	<a href="http://www.rpgmaker.pl"><img src="http://rpgmaker.pl/lay/bannerki/button-a.gif" alt="Twierdza RPG Maker"><br></a><br>
							      	<a href="http://zakon-ac.info/" style="background: url(http://zakon-ac.info/images/bannery/zac-8831.png); width: 88px; height: 31px; text-indent: -1000px; overflow: hidden; display: block;">Zakon Assassin's Creed</a><br><Br>
							      	
							      	
							      	
							      	
							     </marquee><br><br>
							     <center>





						     </div>
              </td>
			         <td style="width: 520px; height: 675px">
                <div id="ogrze">
		             <font size="1"><font color="#669999"><font face="Verdana">	
		             <br><b> Co to jest Aleara MMORPG?</b> To gra przez przeglądarkę polegająca na symulacji życia postaci mieszkającej w krainie fantasy. Jest to w pełni zautomatyzowana gra tekstowa. Posiada najbardziej zaawansowaną mechanikę spośród wszystkich gier tego typu. Gra jest również oparta na nieustannie rozwijanej fabule RPG. Wejdź do krainy, wykreuj swoją postać! Masz do wyboru jedną z osiemnastu różnorodnych ras fantasy, jedną z ośmiu unikalnych klas rpg, jedno z kilku wyznań, jedna z osiemnastu podklas! Tyle różnorodnych profesji sprawi, że Twoja postać będzie unikalna, a przed Tobą otworzy się niezliczony szereg różnych możliwości w krainie. Stań do walki z setkami potworów, zwiedzaj lokacje w krainie, wczuj się w klimat i pisz sesje rpg, współpracuj z innymi graczami, ćwicz swe różnorodne umiejętności, zdobywaj poziomy, twórz przedmioty i rozmawiaj na czacie w grze Aleara MMORPG ! Nie czekaj tylko wejdź do krainy…
                 <br><br>
                 <center>
				          <a href="testszablonuu1.jpg"><img id="fotografia" src="testszablonu1.png"></a> <a href="testszablonuu2.jpg"><img id="fotografia" src="testszablonu2.png"></a> <a href="testszablonuu3.jpg"><img id="fotografia" src="testszablonu3.png"></a>
			           </center>	
                </div>
                 <div id="wiesci">
                  <p style="margin-left: 0px; margin-right: 20px; text-align: left"><br><br>
				          
				          <center><img src=""><br>
				          Jest <b>{$day}</b> dzień <b>{$age}</b> ery. Bieżące wydarzenie fabularne:</center><br><br>
				          <div style="height:240px; overflow:auto; scrollbar-base-color: black ">
				          
				          
				          <b>Święto wiosny i jego plony.</b><br>
<p>
Cudowna wieść obiegła Cesarstwo Reisen, w głównej mierze jego zachodnią część. Zima powoli zaczęła wycofywać się, a słońce ciepłymi promieniami ogrzewać zziębniętą ziemię. Lód na rzekach począł kruszeć, ptaki powróciły do lasów, a na gałęziach krzewów poczęły pojawiać się pierwsze oznaki wiosny.
</p><p>I właśnie wtedy, gdy wiosna na dobre wybuchła, rozpoczął się wielki festyn w Hioto. Patronką była jak zwykle Solarna Bogini, która na czele panteonu bóstw opiekowała się naturą, niczym Matka Natura. To jej dziękować chciano za odejście zimy i to ją chciano przebłagać, aby dała im dużo plonów. Przygotowania trwały już od pierwszych roztopów. Przygotowywano scenerię, ustawiano lampiony. Hioto było w swoim żywiole. Przygotowaniami kierowała oczywiście hrabina shiroi, Xoan-Ayo.
</p><p>Ona także jak i większość ludności widziała po roztopach wielką łunę na niebie. Zadrżała wtedy i wstrzymała oddech. Łuna ta nie tylko była piękna, ile przerażająca. Próbowała się dowiedzieć co też oznaczała, zleciła to swojemu nadwornemu astrologowi, Xiao-Zungowi, lecz ten niedługo potem został zamordowany. I to akurat zaraz po rozpoczęciu festynu.
</p><p>Wiosenny festyn był o tyleż radosny dla ludzi, że niedawno zakończyła się nieprzyjemna zimna wojna z hrabstwem Leyonn. Dowódca armii shiroi, Liam Zung, syn słynnego astrologa siłą powziął za żonę najmłodszą córkę hrabiego. Upodobał sobie dziewczynę już lata temu, a gdy nadarzyła się okazja, wykorzystał ją i spełnił swoje pragnienie. Teraz młoda Ailinn już mężatka spodziewała się dziecka, które prawdopodobnie w trakcie trwania festynu narodzi się.
</p><p>Tym większa była radość mieszkańców, także spoza shiroi, że krew ich władców zaczyna się przeplatać. Symboliczna waga tego wydarzenia przerastała ich śmiałość, nadzieja tliła się w sercach. Przecież już dość ich dzieci poszło na wojnę, dość rodziców pogrzebało swoich potomków, by samemu bezdzietnie umrzeć. Tyle tradycji poszło w niepamięć. Shiroi pragnęli, by przerwano już ten łańcuch nieszczęśliwych zdarzeń. Sądzili, że narodziny wspólnego potomka przerwą spór.
</p><p>Tymczasem na Północy w Volkstand objawiony niedawno władca, Khardrag planował zdobyć większą armię, która pomogłaby mu w walce z południem. Musiał rozpocząć rozmowy z plemionami na północnych rubieżach, a jednocześnie ułagodzić spory z tauzenami, którzy faktycznie mogliby mu wiele dopomóc. Rozpoczęły się już budowy wielkich statków. Ale północ stała także przed wielkim zagrożeniem. Wraz z wiosennymi roztopami podnosił się poziom morza i zaczynał zalewać ich osady. Dodatkowo szamani przepowiadali przyjście wielkiego bóstwa, które ześle na nich pioruny, a z nimi przyjdzie ogień. Wielki Wódz miał przed sobą wiele problemów, lecz zimne serce nie pozwalało się cofać. Raz obrana droga staje się tą jedyną na całe życie…
</p>				          
				          
				          
				          
				          
				          
				          
				          
				
				            </div></div>
				      </td>
               <td style="height: 675px; width: 240px">
                <div id="online" style="height:620px; overflow:auto; scrollbar-base-color: black ">
				         <font size="1"><font color="#669999"><font face="Verdana">
						 <br>
				         <p id ="online" style="margin-right: 20px; text-align: left; font-size:16px">	
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
                 <br>Toplisty: <a href="http://toplista.i-rpg.pl/glosuj,DemoniX"><font color="#669999">top50.com.pl</font>
									</a>| <a href="http://top50.com.pl"><font color="#669999">top50.com.pl</font></a> |
									<a
									href="http://rpgtextowe.topka.pl/?we=demonix"><font color="#669999">rpgtextowe.topka.pl</font>
										</a>| <a href="http://mmorpg.toplista.pl/?we=demonix"><font color="#669999">mmorpg.toplista.pl</font></a> |
										<a
										href="http://top30.nboo.eu"><font color="#669999">top30.nboo.eu</font>
											</a>| <a href="http://graonline.toplista.pl/?we=demonix"><font color="#669999">graonline.toplista.pl</font></a>
											<br>| <a href="http://xnova.toplista.eu/in.php?id=52956"><font color="#669999">xnova.toplista.eu</font></a> |
											| <a href="http://proza-fantasy.toplista.info/?we=demonix"><font color="#669999">proza-fantasy.toplista.info</font></a> |
										| <a href="http://rpg.topka.pl/?we=demonix"><font color="#669999">rpg.topka.pl</font></a> |
											<a
											href="http://gildwars.topka.pl/?we=demonix"><font color="#669999">gildwars.topka.pl</font>
												</a>| <a href="http://rpg.najlepsze.net/?we=demonix"><font color="#669999">rpg.najlepsze.net</font></a> |
												</a>| <a href="http://topgranie.toplista.pl/?we=demonix"><font color="#669999">topgranie.toplista.pl</font></a> |
												<a
												href="http://toplista.game-dev.pl"><font color="#669999">toplista.game-dev.pl</font>
													</a>
													<br>Partnerzy:<a href="http://yggdrasil.pl" alt="Yggdrasil – portal o grach"><font color="#669999">Yggdrasil – portal o grach</font></a> |
													<a
													href="http://www.kf2.pl" alt="Kroniki Fallathanu - Prawdziwy mmoRPG w przeglądarce"><font color="#669999">Kroniki Fallathanu MMORPG</font>
														</a>
													| 	<a href="http://zarabiam.com" title="Praca w domu"><font color="#669999">Praca w domu</font></a>
														</center>
							</td>
						</tr>
						</div>
					</table>{literal}
					<script>
						(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s);
							js.id = id;
							js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>{/literal}</body>

</html>