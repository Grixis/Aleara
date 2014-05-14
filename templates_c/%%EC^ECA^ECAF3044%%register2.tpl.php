<?php /* Smarty version 2.6.16, created on 2012-10-06 22:51:19
         compiled from register2.tpl */ ?>
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
<?php if ($this->_tpl_vars['Action'] == ""): ?>

   
        
		<div class="text"><br>
 
    <center><?php echo $this->_tpl_vars['Error']; ?>

                <?php if ($this->_tpl_vars['Facebook'] != '1'): ?>
				<div id="reg">
					
                    <tr><td><form method="post" action="register.php?action=register">
                        <div class="register">Nick: <input type="text" name="user" /></div>
                        <div class="register">Email: <input type="text" name="email" /></div>
                        <div class="register">Email: <input type="text" name="vemail" /></div>
                        <div class="register">Hasło: <input type="password" name="pass" /></div>
                        Język <select name="lang">
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
"><?php echo $this->_tpl_vars['Lang'][$this->_sections['register']['index']]; ?>
</option>
                        <?php endfor; endif; ?>
                        </select>
                       
                        <div class="register"><input type="submit" value="<?php echo @REGISTER; ?>
" /></div>
                    </form>Jeśli po wciśnięciu 'Rejestracja' nie zobaczysz komunikatu<br> potwierdzającego założenie konta - oznacza to, <br>że masz już konto w naszym serwisie. <br>Jeśli nie pamiętasz hasła/maila - załóż nowe, <br>lecz powiadom o tym od razu administratora.
                </div><br /></tr></td><a href=index.html><font color="#66FFFF">Wróć do strony głównej!</font></a>
				<?php else: ?>
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
				<?php endif; ?>
				
</center>
<?php endif; ?>

<?php if ($this->_tpl_vars['Action'] == 'register'): ?>
    <div id="content"><font color="#FFFF99"> <br>Twoja postać została zarejestrowana. <br>Możesz już się <a href="index.html"> ZALOGOWAĆ</font></a>
<?php endif;  if ($this->_tpl_vars['Action'] == 'fb'): ?>
    <div id="content"><font color="#FFFF99"> <br>Twoja postać została zarejestrowana. <br>Możesz już <a href="http://sharp-frost-5998.herokuapp.com/"> rozpocząć przygodę!</font></a>
<?php endif;  if ($this->_tpl_vars['Action'] == 'merge'): ?>
    <div id="content"><font color="#FFFF99"> <br>Konto zostało połączone z Facebookiem. <br>Możesz już <a href="http://sharp-frost-5998.herokuapp.com/"> rozpocząć przygodę!</font></a>
<?php endif; ?>
</div>
</body>

</html>	