<?php /* Smarty version 2.6.16, created on 2012-11-02 16:11:03
         compiled from ksiadz.tpl */ ?>
<?php if ($this->_tpl_vars['View'] == ""): ?>
    Witaj w panelu kapłana. Co chcesz zrobić?
    <ul>
    <li><a href="ksiadz.php?view=poczta">Wyślij pocztę do wszystkich</a>
	<li><a href="ksiadz.php?view=pary">Udziel związku małżeńskiego</a>
    </ul>
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'pary'): ?>
    <form method="post" action="ksiadz.php?view=pary&step=add">
    ID Kobiety: <input type="text" name="prisoner"><br>
	ID Mężczyzny: <input type="text" name="prisonerp"><br>
    Przyczyna: <textarea name="verdict"></textarea><br>
    Koszt rozwodu: <input type="text" name="cost"><br>
    <input type="submit" value="Dodaj"></form>
<?php endif;  if ($this->_tpl_vars['View'] == 'poczta'): ?>
    <table>
    <form method="post" action="ksiadz.php?view=poczta&step=send">
    <tr><td>Temat:</td><td><input type="text" name="subject"></td></tr>
    <tr><td valign="top">Treść:</td><td><textarea name="body" rows="5" cols="19"></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="Wyślij"></td></tr>
    </form></table>
<?php endif; ?>

<br>