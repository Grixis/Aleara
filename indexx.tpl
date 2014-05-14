
<html lang="en">
<title>Aleara MMORPG - Gra Online</title>
<head>
<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript" src="javascript/jquery-ui.js"></script>

<meta charset="utf-8">
<link rel="stylesheet" href="css/topki.css">

</head>
<body style="color: #FFFFFF; background-color: #000000; background-position: center; background-image: url('ee.jpg')">

<table border="0" cellpadding="0" cellspacing="0" style="width: 990px; height: 770px; background-image: url('greynp2x.png')" align="center">
<tr>
<td valign="top" colspan="4">



<table cellpadding="0" cellspacing="0" style="width: 990px; height: 150px">
<tr>
		<td style="width: 320px; height: 150px">	
				   <p style="margin-left: 43px; text-align: left">
				   <br>
				   
				   <font size="1"><font color="#669999"><font face="Verdana"><b>Online:</b> {$Online}<br>
				   <b>Rekord online:</b> {$numRecord}<br>
				   <b>Mieszkańców krainy:</b> {$Players}<br>
				   <b>Ostatni przybył:</b> <b>{$LastName}</b> ({$LastID}).<br>
				   <b>Pogoda w krainie:</b><br>
				   {$Weather}
				   </p>
		</td>															
		<td style="width: 650px; height: 150px">
           <br><br><br><Br><br><br>
           <font size="1"><font color="#669999"><font face="Verdana">	
           <form action="http://aleara.pl/szablon.php" method="post"> 						
           <p style="margin-left: 49px;">E-mail:<input style="width: 70px; height: 17px" name="email" size="15" type="text" />
           Hasło:  <input style="width: 70px; height: 17px" name="pass" size="15" type="password" />
           <input type="submit" value="LOGUJ" class="button"/></input></form></p>
    </td>
</tr>





<table cellpadding="3" cellspacing="3" style="width: 990px; height: 180px">
<tr>


















<td style="width: 220px; height: 680px">






















<table border="0" bordercolor="#999999" style=" margin-left: 45px;" cellpadding="2" cellspacing="2" width="120">
            <form method="post" action="register.php?action=register">
            
           <br><br><br><br> 
            
            
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
<input type="submit" value="{$smarty.const.REGISTER}" class="button"/></div>
</form> 


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
												<font size="1"><font color="#669999"><font face="Verdana">
												<marquee width="95" height="60" direction="up" scrollamount="1"style=" margin-left: 70px; border="1";>
<a href="http://brudnebaletki.strefa.pl"><img src="bbbaner.jpg" width="90" height="33"></a><br><br>
<a href="http://yggdrasil.pl"><img border="0" alt="Yggdrasil – portal o grach" src="http://yggdrasil.pl/button.png" width="90" height="33"></a><br><br>
<a href="http://www.kf2.pl"><img src="http://www.kf2.pl/images/banners/button2.jpg" width="90" height="33" alt="Kroniki Fallathanu - Prawdziwy mmoRPG w przeglądarce"></a><br><br>
<a href="http://animeonmusic.pl/news.php"><img src="http://animeonmusic.pl/images/aonmb.png"></a><br><br>
<a href="http://animegakure.dbnao.net"><img src="http://dbnao.szm.com/ag/b88x31_1.jpg"></a><br><br>
<a href="http://xboxarcade.pl"><img src="http://xboxarcade.pl/images/reklama/arcadebutton.gif"><br></a><br>
<a href="http://www.rpgmaker.pl"><img src="http://rpgmaker.pl/lay/bannerki/button-a.gif" alt="Twierdza RPG Maker"></a><br>
</marquee>
</p>



</td>















<td style="width: 550px; height: 680px">
























<font size="1"><font color="#669999"><font face="Verdana">		

<center>		<font size="1"><font face="Verdana"><p style="margin-rigth: 5000px;">	
								<span style="word-spacing: 1em">
								
								<a href=".php"><b><font size="1"><font color="#FFFFCC"><font face="Verdana"><p style="margin-rigth: 50px;">	STARTOWA</b></a>
								<a href=".php">	<b><font size="1"><font color="#FFFFCC"><font face="Verdana">REJESTRACJA</b></a>
								<a href=".php">	<b><font size="1"><font color="#FFFFCC"><font face="Verdana">KONTAKT</b></a>
								<a href=".php"><b><font size="1"><font color="#FFFFCC"><font face="Verdana">KODEKS</b></a>
								<a href=".php"><b><font size="1"><font color="#FFFFCC"><font face="Verdana">PRYWATNOŚĆ</b></a>
								
								</span></center>


<p style="margin-left: 0px; margin-right: 20px; text-align: left">
<font size="1"><font color="#669999"><font face="Verdana">	
<b> Co to jest Aleara MMORPG?</b> To tekstowa gra przez przeglądarkę polegająca na symulacji życia postaci mieszkającej w krainie fantasy. Jest to w pełni zautomatyzowana gra tekstowa. Posiada najbardziej zaawansowaną mechanikę spośród wszystkich gier tego typu. Gra jest również oparta na nieustannie rozwijanej fabule RPG. Wejdź do krainy, wykreuj swoją postać! Masz do wyboru jedną z osiemnastu różnorodnych ras fantasy, jedną z ośmiu unikalnych klas rpg, jedno z kilku wyznań, jedna z osiemnastu podklas! Tyle różnorodnych profesji sprawi, że Twoja postać będzie unikalna, a przed Tobą otworzy się niezliczony szereg różnych możliwości w krainie. Stań do walki z setkami potworów, zwiedzaj lokacje w krainie, wczuj się w klimat i pisz sesje rpg, współpracuj z innymi graczami, ćwicz swe różnorodne umiejętności, zdobywaj poziomy, twórz przedmioty i rozmawiaj na czacie w grze Aleara MMORPG ! Nie czekaj tylko wejdź do krainy…
<p style="margin-left: 0px; margin-left: 20px; text-align: left">
<a href="testszablonuu3.jpg"><img id="fotografia" src="testszablonu1.png"></a> <a href="testszablonuu1.jpg"><img id="fotografia" src="testszablonu2.png"></a> <a href="testszablonuu2.jpg"><img id="fotografia" src="testszablonu3.png"></a>
<br>
<p style="margin-left: 0px; margin-right: 20px; text-align: left"><br><br>
Jest <b>{$day}</b> dzień <b>{$age}</b> ery.<br><br>
<b>Najnowsze wieści od władz krainy:</b><br>
Podczas nocy mrocznej i ponurej zakończył się czas składania wniosków na rangi. Wyniki wyborów na rangi mają się następująco: 
Rangę karczmarza otrzymał Elanor Vardomir (54), a rangę redaktorki Setre Seithr (482).
O rangę druida, która jest nadal wolna ubiega się kilku kandydatów. W Hali Zgromadzeń obecnie trwa głosowanie na ów kandydatów. Konkurs „Najwięcej Zaprozonych” wygrał Blackbird (735), natomiast konkurs „Najciekawsza Plotka” wygrali ex aequo Nugon (649) oraz Johan Lynira (558). Zakończyły się także konkurs na reklamę na facebooku oraz konkurs u Murgrabiego, obecnie wyczekujemy wyników.  
<br><br><br><Br><br><br><Br><br><br><br><Br><br><br>


</td>















<td style="height: 680px; width: 220px">








												<font size="1"><font color="#669999"><font face="Verdana">
											<p id="online" style="margin-left: 0px; margin-left: 20px; text-align: left">	
										Tu ma być lista online 
										{$WhoOnline}
										</p>
										<script type="text/javascript">
										$("#online").load("onlinelist2.php");
										</script>
										
</td>
</tr>
</table>		
								
<table>						
<tr>
<td style="height: 130px; width: 220px">




</td>
<td style="height: 130px; width: 550px">
														<p style="margin-left: 32px; margin-right: 68px; text-align: left">
												
												
												<center><font size="1"><font color="#669999"><font face="Verdana">
												<b>Aleara Engine powstały na Orodlin Engine</b><br><br><br><br>
												</center>
</td>
<td style="height: 130px; width: 220px">
</td>
</tr>
</table>




</body>














</body>

</html>	
