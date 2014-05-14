<?php /* Smarty version 2.6.16, created on 2012-10-06 07:02:15
         compiled from index2.tpl */ ?>
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

<?php if ($this->_tpl_vars['Facebook'] == '1'): ?>

<?php if ($this->_tpl_vars['Noaccount'] == '1'): ?>
<div style="width: 200px">
Nie masz jeszcze konta w grze lub nie zostało połączone z Facebookiem. Kliknij <a href="register2.php?uid=<?php echo $this->_tpl_vars['Fbid']; ?>
">tutaj</a> aby utworzyć lub połączyć konto.
</div>
<?php else: ?>
<input type="hidden" name="email" value="<?php echo $this->_tpl_vars['Fbuser']; ?>
">
<input type="hidden" name="pass" value="<?php echo $this->_tpl_vars['Fbkey']; ?>
">	</td>
<input type="submit" value="Wejdź do krainy !" />
<?php endif;  else: ?>
<td>E-mail:<input name="email" size="15" type="text" /></td>
<br>

<td>Hasło:  <input name="pass" size="15" type="password" /></td>
<br>
<input type="submit" value="Wejdź do krainy !" />


<?php endif; ?>
<br><br><br><br><br>

Online: <?php echo $this->_tpl_vars['Online']; ?>
<br>
Rekord online: <?php echo $this->_tpl_vars['numRecord']; ?>
<br>
Zarejestrowanych: <?php echo $this->_tpl_vars['Players']; ?>
<br>
Ostatni przybysz:<b><?php echo $this->_tpl_vars['LastName']; ?>
</b> (<?php echo $this->_tpl_vars['LastID']; ?>
).<br/><br><br>

<a href=register2.php><font color="#66FFFF">NIE MASZ KONTA? KLIKNIJ!</font></a>

</font></font>
</div>
</body>

</html>	