<!DOCTYPE html>
 

<html lang="en">
<title>Aleara MMORPG - Gra Online</title>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/Dziuniart_v4.css">
		<b>
</head>
<br><br><br><br><br><br>
<body>

<div id="forum">
<form action="http://aleara.pl/szablon.php" method="post"> 
 

 <font size="2"><font color="#99CCCC">

{if $Facebook == '1'}

{if $Noaccount =='1'}
<div style="width: 200px">
Nie masz jeszcze konta w grze lub nie zostało połączone z Facebookiem. Kliknij <a href="register2.php?uid={$Fbid}">tutaj</a> aby utworzyć lub połączyć konto.
</div>
{else}
<input type="hidden" name="email" value="{$Fbuser}">
<input type="hidden" name="pass" value="{$Fbkey}">	</td>
<input type="submit" value="Wejdź do krainy !" />
{/if}
{else}
<td>E-mail:<input name="email" size="15" type="text" /></td>
<br>

<td>Hasło:  <input name="pass" size="15" type="password" /></td>
<br>
<input type="submit" value="Wejdź do krainy !" />


{/if}
<br><br><br><br><br>

Online: {$Online}<br>
Rekord online: {$numRecord}<br>
Zarejestrowanych: {$Players}<br>
Ostatni przybysz:<b>{$LastName}</b> ({$LastID}).<br/><br><br>

<a href=register2.php><font color="#66FFFF">NIE MASZ KONTA? KLIKNIJ!</font></a>

</font></font>
</div>
</body>

</html>	
