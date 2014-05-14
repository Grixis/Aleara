<?php /* Smarty version 2.6.16, created on 2012-10-06 00:48:28
         compiled from praca.tpl */ ?>
<center><IMG SRC="images/locations/posredniak.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php if ($this->_tpl_vars['View'] == ""): ?>
    Gdy wchodziłeś do pośredniaka odrazu przykuła twoją uwagę stara kobieta za zniszczoną ladą. Urzędniczka odezwała się do ciebie: Znajdujesz się w pośredniaku, jest tutaj wiele prac przy któych mozęsz się wzbogacić kosztem energii. Oto one:<br><br>

    <center>
    <a href="praca.php?view=oczyszczanie">Oczyszczanie miasta</a><br>
    <a href="praca.php?view=dom">Dom publiczny</a><br>
    <a href="praca.php?view=lesniczy">Domek Leśniczego</a><br>
    <a href="praca.php?view=mysliwy">Chatka trapera</a><br>
    <a href="praca.php?view=targ">Targ Niewolników</a><br>
    <a href="praca.php?view=studnia">Studnia poza miastem</a><br>
    <a href="praca.php?view=woda">Chatka na wodzie</a><br>
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'oczyszczanie'): ?>
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdy worek śmieci jakie uprzątniesz, dam ci <?php echo $this->_tpl_vars['G_min']; ?>
 sztuk złota.<br><br>
    <form method="post" action="praca.php?view=oczyszczanie&action=oczyszczanie">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
<?php endif;  if ($this->_tpl_vars['Action'] == 'oczyszczanie'): ?>
    Podczas pracy zużyłeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> punkt(ów) energii, zebrałeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> worków śmieci i zarobiłeś <b><?php echo $this->_tpl_vars['Gain']; ?>
</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'dom'): ?>
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdego klienta którego "obsłużysz", dam ci od <?php echo $this->_tpl_vars['G_min']; ?>
 - <?php echo $this->_tpl_vars['G_max']; ?>
 sztuk złota.<br><br>
    <form method="post" action="praca.php?view=dom&action=dom">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
<?php endif;  if ($this->_tpl_vars['Action'] == 'dom'): ?>
    Podczas pracy zużyłeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> punkt(ów) energii, obsłużyłas/eś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> klienta i zarobiłeś <b><?php echo $this->_tpl_vars['Gain']; ?>
</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'lesniczy'): ?>
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każde dzrzewko które zasadzisz, dam ci od <?php echo $this->_tpl_vars['G_min']; ?>
 - <?php echo $this->_tpl_vars['G_max']; ?>
  sztuk złota.<br><br>
    <form method="post" action="praca.php?view=lesniczy&action=lesniczy">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
<?php endif;  if ($this->_tpl_vars['Action'] == 'lesniczy'): ?>
    Podczas pracy zużyłeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> punkt(ów) energii, zasadziłęś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> drzewko/ek i zarobiłeś <b><?php echo $this->_tpl_vars['Gain']; ?>
</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'mysliwy'): ?>
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdą łąnie którą ustrzelisz, dam ci od <?php echo $this->_tpl_vars['G_min']; ?>
 - <?php echo $this->_tpl_vars['G_max']; ?>
 sztuk złota.<br><br>
    <form method="post" action="praca.php?view=mysliwy&action=mysliwy">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
<?php endif;  if ($this->_tpl_vars['Action'] == 'mysliwy'): ?>
    Podczas pracy zużyłeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> punkt(ów) energii, zestrzeliłeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> łani i zarobiłeś <b><?php echo $this->_tpl_vars['Gain']; ?>
</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'targ'): ?>
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdego złapanego wyrzutka społeczeństwa, dam ci od <?php echo $this->_tpl_vars['G_min']; ?>
 - <?php echo $this->_tpl_vars['G_max']; ?>
 sztuk złota.<br><br>
    <form method="post" action="praca.php?view=targ&action=targ">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
<?php endif;  if ($this->_tpl_vars['Action'] == 'targ'): ?>
    Podczas pracy zużyłeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> punkt(ów) energii, złapałeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> "wyrzutków i zarobiłeś <b><?php echo $this->_tpl_vars['Gain']; ?>
</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'woda'): ?>
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdą rybe którą mi przyniesiesz, dam ci od <?php echo $this->_tpl_vars['G_min']; ?>
 - <?php echo $this->_tpl_vars['G_max']; ?>
 sztuk złota.<br><br>
    <form method="post" action="praca.php?view=studnia&action=studnia">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
<?php endif;  if ($this->_tpl_vars['Action'] == 'woda'): ?>
    Podczas pracy zużyłeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> punkt(ów) energii, złowiłeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> ryb i zarobiłeś <b><?php echo $this->_tpl_vars['Gain']; ?>
</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'studnia'): ?>
    Pragniesz zarobić nieco sztuk złota? W porządku. Za każdy dzban z wodą który przyniesiesz ze studni do miasta, dam ci od <?php echo $this->_tpl_vars['G_min']; ?>
 - <?php echo $this->_tpl_vars['G_max']; ?>
 sztuk złota.<br><br>
    <form method="post" action="praca.php?view=woda&action=woda">
    <input type="submit" value="Pracuj"> <input type="text" name="amount" value="1" size="5"> razy.</form>
<?php endif;  if ($this->_tpl_vars['Action'] == 'studnia'): ?>
    Podczas pracy zużyłeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> punkt(ów) energii, przyniosłeś <b><?php echo $this->_tpl_vars['Amount']; ?>
</b> wiader wody i zarobiłeś <b><?php echo $this->_tpl_vars['Gain']; ?>
</b> sztuk złota.
    <br>[<a href="praca.php">Wróć</a>]
<?php endif; ?>