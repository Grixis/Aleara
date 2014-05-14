<?php /* Smarty version 2.6.16, created on 2013-02-07 16:59:42
         compiled from woodfarm.tpl */ ?>
<center><img src="images/locations/ogrod.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wędrując przez zaśmieconą, zniszczoną Alearę widzisz na swojej drodze starą bramę... Stajesz przed nią i widzisz rozległe tereny zaniedbanych ogrodów... Miałeś przez chwilę nadzieję, że w końcu odnajdziesz jakieś przytulne miejsce w Alearze, a jednak Twoje serce ogarnęło rozczarowanie... Wszędzie brud, smród i ubóstwo... Widzisz przed sobą zarośnięte trawą drzewa i ludzi, którzy je ścinają, lecz nie dbają o wygląd ogrodu… Zastanawiasz się co chcesz zrobić...
<br><br><br><?php if ($this->_tpl_vars['Empty'] == 'Y'): ?>
  <table> <img src="dziadu.jpg" style="float:left;" ><p>Podchodzi do Ciebie pewien mężczyzna w przeciętnym wieku. Niezbut przyjemnie od niego pachnie. Ma na sobie stare i brudne ubrania. Jednak starasz się udawać, że wszystko jest w porządku. Spojrzał Ci w oczy i mówi:<br>

  <i>-Witaj, co mógłbym robić w takim ogrodzie?<br>
  -Jeśli posiadasz sadzonki drzewek to możesz je posadzić. Wraz z czasem wyrosną z nich drzewa. Wtedy możesz je ściąć<br>
  -Ciekawa propozycja. Ile by mnie kosztowała taka inwestycja?<br>
  -Dasz mi 250 sztuk mithrilu i odsprzedam Ci najmniejszą część ogrodu. Jeśli będziesz chciał możesz w każdej chwili u mnie wykupić większy obszar ogrodu.<br>
  <br>
   </i> 
    
    
    
    <table>
    <ul><br><br>
    <a href="woodfarm.php?answer=yes">Tak kupuję najmniejszą część ogrodu za 250 mithrilu</a><br>
    <a href="city.php">Nie, dziękuję Panu. Żegnam.</a>
    </ul></table></table>
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == "" && $this->_tpl_vars['Empty'] == ""): ?>
    Witaj w swoim ogrodzie.
    <ul>
    <li><a href="woodfarm.php?view=stats">Zobacz swój ogród.</a>
    <li><a href="woodfarm.php?view=shop">Porozmawiaj z właścicielem.</a>
    <li><a href="woodfarm.php?view=add">Zasadź sadzonki.</a>
    <li><a href="woodfarm.php?view=take">Zetnij drzewa.</a>
    </ul>  <br><br><br>  
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'stats'): ?>
    Tutaj są informacje na temat Twojego ogrodu.
    <ul>
    <li>Obszarów: <?php echo $this->_tpl_vars['Amount']; ?>
</li>
    <li>Używane: <?php echo $this->_tpl_vars['Used']; ?>
</li>
    <li>Sadzonki: <?php echo $this->_tpl_vars['drzewka']; ?>
</li>
    <li>Zasiane: <br>
    <?php echo $this->_tpl_vars['Herbs']; ?>

    <?php if ($this->_tpl_vars['Herbs'] == ""): ?>
        <?php unset($this->_sections['herb']);
$this->_sections['herb']['name'] = 'herb';
$this->_sections['herb']['loop'] = is_array($_loop=$this->_tpl_vars['Herbname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['herb']['show'] = true;
$this->_sections['herb']['max'] = $this->_sections['herb']['loop'];
$this->_sections['herb']['step'] = 1;
$this->_sections['herb']['start'] = $this->_sections['herb']['step'] > 0 ? 0 : $this->_sections['herb']['loop']-1;
if ($this->_sections['herb']['show']) {
    $this->_sections['herb']['total'] = $this->_sections['herb']['loop'];
    if ($this->_sections['herb']['total'] == 0)
        $this->_sections['herb']['show'] = false;
} else
    $this->_sections['herb']['total'] = 0;
if ($this->_sections['herb']['show']):

            for ($this->_sections['herb']['index'] = $this->_sections['herb']['start'], $this->_sections['herb']['iteration'] = 1;
                 $this->_sections['herb']['iteration'] <= $this->_sections['herb']['total'];
                 $this->_sections['herb']['index'] += $this->_sections['herb']['step'], $this->_sections['herb']['iteration']++):
$this->_sections['herb']['rownum'] = $this->_sections['herb']['iteration'];
$this->_sections['herb']['index_prev'] = $this->_sections['herb']['index'] - $this->_sections['herb']['step'];
$this->_sections['herb']['index_next'] = $this->_sections['herb']['index'] + $this->_sections['herb']['step'];
$this->_sections['herb']['first']      = ($this->_sections['herb']['iteration'] == 1);
$this->_sections['herb']['last']       = ($this->_sections['herb']['iteration'] == $this->_sections['herb']['total']);
?>
            <?php echo $this->_tpl_vars['Herbname'][$this->_sections['herb']['index']]; ?>
 ilość: <?php echo $this->_tpl_vars['Herbamout'][$this->_sections['herb']['index']]; ?>
 wiek: <?php echo $this->_tpl_vars['Herbage'][$this->_sections['herb']['index']]; ?>
<br>
        <?php endfor; endif; ?>
    <?php endif; ?>
    </li></ul>
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'shop'): ?>
    <img src="dziadu.jpg" style="float:left;" ><br>Witaj ponownie, chcesz dokupić teren pod swój ogród?
    <ul>
    <li><a href="woodfarm.php?view=shop&buy=land">1 obszar więcej</a> (<?php echo $this->_tpl_vars['Cost']; ?>
 sztuk złota)</li>
    </ul>
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'add'): ?>
    Tutaj możesz zasadzić sadzonki. Aby obsadzić jeden obszar potrzebujesz 10 sadzonek drzewek. Drzewa możesz ściąć po 5 dniach od zasadzenia sadzonek.<br>
    <form method="post" action="woodfarm.php?view=add&step=add">
    <input type="submit" value="Zasadź">
    na
    <input type="text" name="amount" size="5" value="1"> obszarze 
    <input type="text" name="herb" size="5" value="1"> sadzonek
   
   
   <?php echo $this->_tpl_vars['Option']; ?>

    </select></form>
<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'take'): ?>
    <?php echo $this->_tpl_vars['Chop']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['View'] != ""): ?>
    <br><br> <a href="woodfarm.php">...wróć do ogrodu...</a>.   <br><br><br>   
<?php endif; ?>