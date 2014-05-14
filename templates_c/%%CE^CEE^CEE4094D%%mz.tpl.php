<?php /* Smarty version 2.6.16, created on 2012-10-06 00:54:54
         compiled from mz.tpl */ ?>
<center><IMG SRC="images/locations/wyspa.png"></center><img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>

<?php if ($this->_tpl_vars['Action'] == ""): ?>
    Chcesz trochę mithrilu? W porządku. Masz tu sitko i zbieraj. Aha, bardzo często zdaża sie zdobywać<b> <?php echo $this->_tpl_vars['Gold']; ?>
</b> sztuk mithrilu.<br><br>
    <form method="post" action="mz.php?action=work">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
	<br><a href="wyspamithrilu.php">Wróć na wyspę</a>
<?php endif; ?>

<?php if ($this->_tpl_vars['Action'] == 'work'): ?>
    Podczas pracy wydobywania <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> punkt(ów) energii i wydobyłeś <b><?php echo $this->_tpl_vars['Gain']; ?>
</b> sztuk mithrilu.
    <br>[<a href="mz.php">Wróć do wydobywania</a>]
	<br>[<a href="wyspamithrilu.php">Wróć na wyspę</a>]
<?php endif; ?>