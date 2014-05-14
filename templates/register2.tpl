<!DOCTYPE html>
 

<html lang="en">
<title>Aleara - Rejestracja</title>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/Dziuniart_v33.css">
		
</head>

<body>

<div id="forum">
 <font size="2"><font color="#99CCCC">
{if $Action == ""}

   
        
		<div class="text"><br>
 
    <center>{$Error}
                {if $Facebook != '1'}
				<div id="reg">
					
                    <tr><td><form method="post" action="register.php?action=register">
                        <div class="register">Nick: <input type="text" name="user" /></div>
                        <div class="register">Email: <input type="text" name="email" /></div>
                        <div class="register">Email: <input type="text" name="vemail" /></div>
                        <div class="register">Hasło: <input type="password" name="pass" /></div>
                        Język <select name="lang">
                        {section name=register loop=$Lang}
                            <option value="{$Lang[register]}">{$Lang[register]}</option>
                        {/section}
                        </select>
                       
                        <div class="register"><input type="submit" value="{$smarty.const.REGISTER}" /></div>
                    </form>Jeśli po wciśnięciu 'Rejestracja' nie zobaczysz komunikatu<br> potwierdzającego założenie konta - oznacza to, <br>że masz już konto w naszym serwisie. <br>Jeśli nie pamiętasz hasła/maila - załóż nowe, <br>lecz powiadom o tym od razu administratora.
                </div><br /></tr></td><a href=index.html><font color="#66FFFF">Wróć do strony głównej!</font></a>
				{else}
				<br><br>
				<form method="post" action="register2.php?action=fb">
				<center>Wpisz imię dla swojej postaci:<br>
					<input type="text" name="user" /><br>
						<input type="submit" value="Utwórz postać" />
				</form>
				</center>
				<br><br>
					<form method="post" action="register2.php?action=merge">
					Jeżeli masz już konto w grze<br>i chcesz połączyć je z FB, wpisz dane<br>do logowania tego konta poniżej.<br><br>
					Email: <input type="text" name="email" /><br>
					Hasło: <input type="password" name="pass" /><br>
						<input type="submit" value="Połącz" />
					</form>
				{/if}
				
</center>
{/if}

{if $Action == "register"}
    <div id="content"><font color="#FFFF99"> <br>Twoja postać została zarejestrowana. <br>Możesz już się <a href="index.html"> ZALOGOWAĆ</font></a>
{/if}
{if $Action == "fb"}
    <div id="content"><font color="#FFFF99"> <br>Twoja postać została zarejestrowana. <br>Możesz już <a href="http://sharp-frost-5998.herokuapp.com/"> rozpocząć przygodę!</font></a>
{/if}
{if $Action == "merge"}
    <div id="content"><font color="#FFFF99"> <br>Konto zostało połączone z Facebookiem. <br>Możesz już <a href="http://sharp-frost-5998.herokuapp.com/"> rozpocząć przygodę!</font></a>
{/if}
</div>
</body>

</html>	
