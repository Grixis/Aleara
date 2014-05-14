<?php /* Smarty version 2.6.16, created on 2012-10-18 11:35:10
         compiled from politykaprywatnosci.tpl */ ?>
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

									<font size="1"><font color="#669999"><font face="Verdana"><b>Online (wraz z ukrytymi):</b> <?php echo $this->_tpl_vars['Online']; ?>
<br>
									<b>Rekord graczy online:</b> <?php echo $this->_tpl_vars['numRecord']; ?>
<br>
									<b>Mieszkańców krainy:</b> <?php echo $this->_tpl_vars['Players']; ?>
<br>
									<b>Ostatni przybył:</b> <b><?php echo $this->_tpl_vars['LastName']; ?>
</b> (<?php echo $this->_tpl_vars['LastID']; ?>
).<br>
									<b>Pogoda w krainie:</b><br>
									<?php echo $this->_tpl_vars['Weather']; ?>

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
										<?php unset($this->_sections['register']);
$this->_sections['register']['name'] = 'register';
$this->_sections['register']['loop'] = is_array($_loop=$this->_tpl_vars['Lang']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['register']['show'] = true;
$this->_sections['register']['max'] = $this->_sections['register']['loop'];
$this->_sections['register']['step'] = 1;
$this->_sections['register']['start'] = $this->_sections['register']['step'] > 0 ? 0 : $this->_sections['register']['loop']-1;
if ($this->_sections['register']['show']) {
    $this->_sections['register']['total'] = $this->_sections['register']['loop'];
    if ($this->_sections['register']['total'] == 0)
        $this->_sections['register']['show'] = false;
} else
    $this->_sections['register']['total'] = 0;
if ($this->_sections['register']['show']):

            for ($this->_sections['register']['index'] = $this->_sections['register']['start'], $this->_sections['register']['iteration'] = 1;
                 $this->_sections['register']['iteration'] <= $this->_sections['register']['total'];
                 $this->_sections['register']['index'] += $this->_sections['register']['step'], $this->_sections['register']['iteration']++):
$this->_sections['register']['rownum'] = $this->_sections['register']['iteration'];
$this->_sections['register']['index_prev'] = $this->_sections['register']['index'] - $this->_sections['register']['step'];
$this->_sections['register']['index_next'] = $this->_sections['register']['index'] + $this->_sections['register']['step'];
$this->_sections['register']['first']      = ($this->_sections['register']['iteration'] == 1);
$this->_sections['register']['last']       = ($this->_sections['register']['iteration'] == $this->_sections['register']['total']);
?>
										<option value="<?php echo $this->_tpl_vars['Lang'][$this->_sections['register']['index']]; ?>
"><font size="1"><font color="#669999"><font face="Verdana"><?php echo $this->_tpl_vars['Lang'][$this->_sections['register']['index']]; ?>
</option>
										<?php endfor; endif; ?>
									</select>
									<input id="graa" type="submit" value="<?php echo @REGISTER; ?>
" class="button"/></div>
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
<?php echo '<center><!-- stat.4u.pl NiE KaSoWaC --> 
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
document.write(\'<img alt="stat4u" src="http://stat.4u.pl/cgi-bin/s.cgi?i=demonix\'+s4uext+\'" width="1" height="1">\') 
//--> 
</script> 
<noscript><img alt="stat4u" src="http://stat.4u.pl/cgi-bin/s.cgi?i=demonix&amp;r=ns" width="1" height="1"></noscript> 
<!-- stat.4u.pl KoNiEc -->


'; ?>

						     </div>
              </td>
			         <td style="width: 520px; height: 675px">
                <div id="ogrze">
                <div style="height:620px; margin-top: 100px; overflow:auto ">
		             <font size="1"><font color="#669999"><font face="Verdana">	
Jakie dane o Tobie zbieramy?<br>
</b>
Dane zbierane podczas rejestracji<br>
Abyś mógł skorzystać z niektórych funkcji naszego systemu będziesz musiał się zarejestrować. Podczas rejestracji zapytamy Cię o Twój adres email oraz hasło jakiego będziesz używał na naszej witrynie. 
<br><br>
Dane zbierane automatycznie<br>
Podczas Twojej wizyty na naszej stronie internetowej, automatycznie zbierane są dane dotyczące Twojej wizyty, np. Twój adres IP, nazwa domeny, typ przeglądarki, typ systemu operacyjnego, itp. 
<br><br>
Dane zbierane, gdy kontaktujesz się z nami<br>
Gdy kontaktujesz się z nami za pomocą poczty email przekazujesz nam swoje dane osobowe, np. imię, nazwisko, adres email, itp. 
<br><br><b>
W jaki sposób wykorzystujemy Twoje dane?
</b><br><br>
W żadnym wypadku nie będziemy sprzedawali danych zebranych o Tobie podmiotom trzecim. 
<br>
Dane zbierane podczas rejestracji będą wykorzystane wyłącznie do umożliwienia Tobie zalogowania się do naszego systemu. Rejestracja jest obowiązkowa jeżeli chcesz uczestniczyć w grze. 
<br>
Dane zbierane automatycznie mogą być użyte do analizy zachowań użytkowników na naszej stronie internetowej, zbierania danych demograficznych o naszych użytkownikach, lub do personalizacji zawartości naszych stron internetowych. Dane te są zbierane automatycznie o każdym użytkowniku. 
<br>
Dane zbierane w trakcie korespondencji pomiędzy Tobą, a naszym serwisem będą wykorzystane wyłącznie w celu odpowiedzi na Twoje zapytanie. 
<br>
W przypadku kontroli Generalnego Inspektoratu Ochrony Danych Osobowych, Twoje dane mogą zostać udostępnione pracownikom Inspektoraru zgodnie z ustawą o ochronie danych osobowych. 
<br>
W przypadku naruszenia Regulaminu naszego serwisu, naruszenia prawa, lub gdy będą wymagały tego przepisy prawa, możemy udostępnić Twoje dane organom wymiaru sprawiedliwości. 
<br><br><b>
W jaki sposób będziemy się z Tobą kontaktować?<br>
</b>
Jeżeli dokonałeś rejestracji w portalu Aleara.pl - administracja zastrzega sobie prawo kontaktowania z użytkownikiem poprzez email podany podczas rejestracji. Jednocześnie chcemy poinformować, iż żadna z osób administrujących serwisem w żadnym wypadku nie skontaktuje się z Tobą, prosząc o podanie loginu/hasła do Twojego konta. 
<br><br><b>
W jaki sposób możesz poinformować nas o zmianie danych?
</b><br>
Po zalogowaniu się do serwisu i wybraniu sekcji Opcje, możesz wprowadzić zmiany swoich danych osobowych zbieranych podczas rejestracji i używanych do zalogowania się do systemu. Danych zbieranych automatycznie nie da się zmienić lub usunąć. 
<br><br><b>
Wykorzystanie ciasteczek ("cookies")
</b><br>
Nasza strona internetowa może wykorzystywać ciasteczka, które służą identyfikacji Twojej przeglądarki podczas korzystania z naszej strony, abyśmy wiedzieli jaką stronę Ci wyświetlić. Ciasteczka nie zawierają żadnych danych osobowych. 
<br><br><b>
W jaki sposób zabezpieczamy Twoje dane osobowe?
</b><br>
Nasze bazy danych zabezpieczone są przed wglądem osób trzecich.
<br><br></div>
				      </td>
               <td style="height: 675px; width: 235px">
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








	         
<?php echo '<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
'; ?>


</body>
</html>	