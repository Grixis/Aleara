<?php /* Smarty version 2.6.16, created on 2012-10-13 19:06:26
         compiled from zm.tpl */ ?>
<center><IMG SRC="images/locations/wyspa.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
<?php if ($this->_tpl_vars['Action'] == ""): ?>
    Witaj marynarzu! Tutaj możesz wydoby złoto z tego morza.
	<br>
    <br>
    <br>
    <form method="post" action="zm.php?action=work">
    <input type="submit" value="Wydobywaj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
	<br><a href="wyspazlota.php">Wróć na wyspę</a>
<?php endif;  if ($this->_tpl_vars['Action'] == 'work'): ?>
    Podczas wydobywania zużyłeś  <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> punkt(ów) energii i zdobyłeś <b><?php echo $this->_tpl_vars['Gain']; ?>
</b> sztuk złota.
    <br>[<a href="zm.php">Wróć do wydobywania</a>]
	<br>[<a href="wyspazlota.php">Wróć na wyspę</a>]
<?php endif; ?>