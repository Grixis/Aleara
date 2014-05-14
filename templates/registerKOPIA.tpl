<!DOCTYPE html>
 

<html lang="en">
<title>Aleara - Rejestracja</title>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/Dziuniart_v3.css">
		
</head>





<div id="forum">
 <font size="2"><font color="#FF6600">
{if $Action == ""}

   
        
		<div class="text"><br>
 
    <center>
                <div id="reg">
                    <tr><td><form method="post" action="register.php?action=register">
                        <div class="register">Nick         : <input type="text" name="user" /></div>
                        <div class="register">Email          : <input type="text" name="email" /></div>
                        <div class="register">Email: <input type="text" name="vemail" /></div>
                        <div class="register">Hasło          : <input type="password" name="pass" /></div>
                        Język <select name="lang">
                        {section name=register loop=$Lang}
                            <option value="{$Lang[register]}">{$Lang[register]}</option>
                        {/section}
                        </select>
                       
                        <div class="register"><input type="submit" value="{$smarty.const.REGISTER}" /></div>
                    </form>Jeśli po wciśnięciu 'Rejestracja' nie zobaczysz komunikatu<br> potwierdzającego założenie konta - oznacza to, <br>że masz już konto w naszym serwisie. <br>Jeśli nie pamiętasz hasła/maila - załóż nowe, <br>lecz powiadom o tym od razu administratora.
                </div><br /></tr></td><a href=index.html><font color="red">Wróć do strony głównej!</font></a>
                
                {/if}
</center></center></center>
{if $Action == "register"}
    <div id="content"><font color="#FFFF99"> <br>Twoja postać została zarejestrowana. <br>Możesz już się <a href="index.html"> ZALOGOWAĆ</font></a>
{/if}
</div>
</body>

</html>	
