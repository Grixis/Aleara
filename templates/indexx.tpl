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

		<table border="0" cellpadding="0" cellspacing="0" style="width: 990px; height: 1050px; background-image: url('greynp2x.png')" align="center">
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
						<a href="index.php"><b><font size="1"><font color="#FFFFCC"><font face="Verdana"><p style="margin-rigth: 50px;">	STARTOWA</b></a>
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
			         <td style="width: 520px; height: 675px">
                <div id="ogrze">
		             <font size="1"><font color="#669999"><font face="Verdana">	
		            <b> Co to jest Aleara MMORPG?</b> To gra przez przeglądarkę polegająca na symulacji życia postaci mieszkającej w krainie fantasy. Jest to w pełni zautomatyzowana gra tekstowa. Posiada najbardziej zaawansowaną mechanikę spośród wszystkich gier tego typu. Gra jest również oparta na nieustannie rozwijanej fabule RPG. Wejdź do krainy, wykreuj swoją postać! Masz do wyboru jedną z osiemnastu różnorodnych ras fantasy, jedną z ośmiu unikalnych klas rpg, jedno z kilku wyznań, jedna z osiemnastu podklas! Tyle różnorodnych profesji sprawi, że Twoja postać będzie unikalna, a przed Tobą otworzy się niezliczony szereg różnych możliwości w krainie. Stań do walki z setkami potworów, zwiedzaj lokacje w krainie, wczuj się w klimat i pisz sesje rpg, współpracuj z innymi graczami, ćwicz swe różnorodne umiejętności, zdobywaj poziomy, twórz przedmioty i rozmawiaj na czacie w grze Aleara MMORPG ! Nie czekaj tylko wejdź do krainy…
                 <br><br>
                 <center>
				          <a href="testszablonuu3.jpg"><img id="fotografia" src="testszablonu1.png"></a> <a href="testszablonuu1.jpg"><img id="fotografia" src="testszablonu2.png"></a> <a href="testszablonuu2.jpg"><img id="fotografia" src="testszablonu3.png"></a>
			           </center>	
                </div>
                 <div id="wiesci">
                  <p style="margin-left: 0px; margin-right: 20px; text-align: left"><br><br>
				          
				          <center><img src="wieesci.png"><br>
				          Jest <b>{$day}</b> dzień <b>{$age}</b> ery.</center><br><br>
				          <b>Najnowsze wieści od władz krainy:</b><br>
				          Podczas nocy mrocznej i ponurej zakończył się czas składania wniosków na rangi. Wyniki wyborów na rangi mają się następująco: 
				          Rangę karczmarza otrzymał Elanor Vardomir (54), a rangę redaktorki Setre Seithr (482).
				          O rangę druida, która jest nadal wolna ubiega się kilku kandydatów. W Hali Zgromadzeń obecnie trwa głosowanie na ów kandydatów. Konkurs „Najwięcej Zaprozonych” wygrał Blackbird (735), natomiast konkurs „Najciekawsza Plotka” wygrali ex aequo Nugon (649) oraz Johan Lynira (558). Zakończyły się także konkurs na reklamę na facebooku oraz konkurs u Murgrabiego, obecnie wyczekujemy wyników.  
				        </div>
				      </td>
               <td style="height: 675px; width: 250px">
                <div id="online" style="height:620px; overflow:auto ">
				         <font size="1"><font color="#669999"><font face="Verdana">
						 <br>
				         <p id ="online" style="margin-left: 0px; margin-left: 20px; text-align: left; font-size:16px">	
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