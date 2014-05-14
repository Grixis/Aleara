<?php /* Smarty version 2.6.16, created on 2012-10-07 17:19:09
         compiled from kostuch.tpl */ ?>
﻿<?php echo $this->_tpl_vars['Welcome']; ?>
<br/><br/>
<i><?php echo $this->_tpl_vars['Info']; ?>
</i><br/><br/>
<script type="text/javascript" src="javascript/grave.js"></script>
<center><a href="#" onclick="kostuch.php?step=open">Otwórz cmentarz</a> | <a href="kostuch.php?step=close">Zamknij cmentarz</a> | <a href="kostuch.php?step=poczta">Wyślij pocztę do wszystkich</a></center>
<br><br>
<fieldset>
<legend>Otwórz cmentarz na...</legend>
<form name="form">
<input type="radio" name="d1" value="10" /> 10 minut <br>
<input type="radio" name="d1" value="15" /> 15 minut <br>
<input type="radio" name="d1" value="20" /> 20 minut <br><br>
<input type="button" value="Otwórz" onclick="OpenGrave()"/>
</form>
</fieldset>
<i><div id="mesdiv"></div></i><br><br>
<div id="timer"></div>


<?php if ($_GET['step'] == 'poczta'): ?>
	<br/>
   <table>
    <form method="post" action="kostuch.php?step=send">
    <tr><td>Temat:</td><td><input type="text" name="subject" /></td></tr>
    <tr><td valign="top">Treść:</td><td><textarea name="body" rows="5" cols="19"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Wyślij" /></td></tr>
    </form></table>
<?php endif; ?>