<?php /* Smarty version 2.6.16, created on 2013-02-23 17:55:02
         compiled from vote.tpl */ ?>
<center><h2>Wspomóż nas w promowaniu gry!</h2></center>
Kraina nie przetrwa bez was, graczy. Dbajmy o to by było nas jak najwięcej, promujmy nas. Jednym ze
sposobów jest głosowanie na nas w toplistach. Proszę, poświęć chwilę na oddanie głosu - ciebie nic to nie kosztuje, 
a może być niezmiernie pomocne w istnieniu krainy. Za każde kliknięcie na przycisk dostaniesz jednego Denara. Tą specyficzną
walutę możesz wymienić w Sklepie z brylantami który znajduje się w każdym mieście na różne nagrody. Na każdą toplistę można oddać
głos tylko raz dziennie. Głosowałeś już dziś <b><?php echo $this->_tpl_vars['Voted']; ?>
</b> razy oraz posiadasz <b><?php echo $this->_tpl_vars['Denars']; ?>
</b> denarów.<br><br>
<center>
<fieldset><p><b>Głosowanie 1 :</b> <a target="_blank" href="vote.php?top=one"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 2 :</b> <a target="_blank" href="vote.php?top=three"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 3 :</b> <a target="_blank" href="vote.php?top=five"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 4 :</b> <a target="_blank" href="vote.php?top=thirteen"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 5 :</b> <a target="_blank" href="vote.php?top=14"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 6 :</b> <a target="_blank" href="vote.php?top=16"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 7 :</b> <a target="_blank" href="vote.php?top=17"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 8 :</b> <a target="_blank" href="vote.php?top=19"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 9 :</b> <a target="_blank" href="vote.php?top=20"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 10 :</b> <a target="_blank" href="vote.php?top=21"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 11 :</b> <a target="_blank" href="vote.php?top=31"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>
<fieldset>
<p><b>Głosowanie 12 :</b> <a target="_blank" href="vote.php?top=32"><img src="http://img217.imageshack.us/img217/3939/buttonyp7.gif" border="0" alt="TOP50 Gry" /></a></p>
</fieldset>



<br>
<center><b>Zaproś swoich znajomych z Facebooka</b></center>
Gra umożliwia wysłanie zaproszenia do gry twoim zanjomym. Również pomaga to w promocji gry, a co za tym idzie więcej graczy z którymi możemy grać :)<br>
<div id="fb-root"></div>
	<?php echo '
<center><a href="vote.php?fbrequest=send">Zaproś znajomych!</a></center>
'; ?>






</center>
<br>
<h1>Najwięcej denarów</h2>
<table style="border: 1px solid #636f6b;" cellspacing="0" cellpadding="2">
    <tr>
        <th>Miejsce</th>
        <th>ID</th>
        <th width="150px;">Gracz</th>
        <th>Denary</th>
        
    </tr>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Arrid']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
    <tr <?php if ($this->_sections['i']['iteration'] < 4): ?>bgcolor="#646464"<?php endif; ?>>
        <td><?php echo $this->_sections['i']['iteration']; ?>
.</td>
        <td><?php echo $this->_tpl_vars['Arrid'][$this->_sections['i']['index']]; ?>
</td>
        <td><a href="view.php?view=<?php echo $this->_tpl_vars['Arrid'][$this->_sections['i']['index']]; ?>
"><?php echo $this->_tpl_vars['Arruser'][$this->_sections['i']['index']]; ?>
</a></td>
        <td style="text-align:right"><span style="color: orange;"><?php echo $this->_tpl_vars['Arrdenars'][$this->_sections['i']['index']]; ?>
</span></td>
    </tr>
    <?php endfor; endif; ?>
</table>