<?php /* Smarty version 2.6.16, created on 2012-10-06 09:49:37
         compiled from member.tpl */ ?>
<?php if ($this->_tpl_vars['View'] == ""): ?>
Witaj w panelu mieszkańca. Co chcesz zrobić?
<ul>
<A href="addnews.php">Dodać Plotkę</a><br>
<a href="oglw.php">Dodaj Ogloszenie</a><br>
</ul>
<?php endif;  if ($this->_tpl_vars['View'] != ""): ?>
<br />(<a href="member.php">Wróć do menu</a>)
<?php endif; ?>