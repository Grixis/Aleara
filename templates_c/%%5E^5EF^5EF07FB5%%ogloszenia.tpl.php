<?php /* Smarty version 2.6.16, created on 2012-10-06 10:09:51
         compiled from ogloszenia.tpl */ ?>
<center><IMG SRC="images/locations/oglo.png"></center> 
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Idziesz wolnym krokiem po centrum miasta. Podnosisz głowę i dostrzegasz lekko zachmurzone niebo przysłaniające białymi kłębami okrąg słońca. 
 Mijasz targ i przekrzykujące się baby walczące o odpowiednią cenę na dany produkt. Ledwie słychać wrzask młodej handlarki kiedy jakiś obdartus ucieka z nadgniłym jabłkiem w kierunku sieci uliczek. Zakład kowalski po prawej stronie rozbrzmiewa rytmicznymi uderzeniami młota o kowadło. Kilku starszych panów przysiadło na ławce nieopodal narzekając na swe zbolałe stawy jednocześnie mrugając do przechodzącej nieopodal kobiety o wydatnym biuście. Brukowany rynek tętni życiem niezliczonych przechodniów zmierzających tylko w sobie znanych celach, nawet ptaki zdawały się spieszyć kiedy porywały okruchy chleba rzucone przez jakieś roześmiane dziecko. Oto stajesz przed słupem informacyjnym, na którym możesz przeczytać ogłoszenia innych mieszkańców krainy lub dodać własną informację. Opłaty nie są wysokie, a dzięki ogłoszeniom szybciej rozejdzie się informacja że chcesz coś kupić  lub masz coś na sprzedaż.  A o to by ogłoszenia nie pojawiały się z nikąd i za darmo dba siedzący na kocu wychudzony mężczyzna.
 <br><br><center><a href="oglw.php">Dodaj Ogloszenie</a><br><br>
<?php if ($this->_tpl_vars['View'] == ""): ?>
<b><?php echo $this->_tpl_vars['Title1']; ?>
</b> napisany przez <b><?php echo $this->_tpl_vars['Starter']; ?>
</b><br><?php echo $this->_tpl_vars['Modtext']; ?>
<br><br></center>
<?php echo $this->_tpl_vars['Update']; ?>
<br>
<br>
(<a href="ogloszenia.php?view=all">ostatnie 10 ogloszen</a>)

<?php endif; ?>

<?php if ($this->_tpl_vars['View'] == 'all'):  unset($this->_sections['upd']);
$this->_sections['upd']['name'] = 'upd';
$this->_sections['upd']['loop'] = is_array($_loop=$this->_tpl_vars['Title1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['upd']['show'] = true;
$this->_sections['upd']['max'] = $this->_sections['upd']['loop'];
$this->_sections['upd']['step'] = 1;
$this->_sections['upd']['start'] = $this->_sections['upd']['step'] > 0 ? 0 : $this->_sections['upd']['loop']-1;
if ($this->_sections['upd']['show']) {
    $this->_sections['upd']['total'] = $this->_sections['upd']['loop'];
    if ($this->_sections['upd']['total'] == 0)
        $this->_sections['upd']['show'] = false;
} else
    $this->_sections['upd']['total'] = 0;
if ($this->_sections['upd']['show']):

            for ($this->_sections['upd']['index'] = $this->_sections['upd']['start'], $this->_sections['upd']['iteration'] = 1;
                 $this->_sections['upd']['iteration'] <= $this->_sections['upd']['total'];
                 $this->_sections['upd']['index'] += $this->_sections['upd']['step'], $this->_sections['upd']['iteration']++):
$this->_sections['upd']['rownum'] = $this->_sections['upd']['iteration'];
$this->_sections['upd']['index_prev'] = $this->_sections['upd']['index'] - $this->_sections['upd']['step'];
$this->_sections['upd']['index_next'] = $this->_sections['upd']['index'] + $this->_sections['upd']['step'];
$this->_sections['upd']['first']      = ($this->_sections['upd']['iteration'] == 1);
$this->_sections['upd']['last']       = ($this->_sections['upd']['iteration'] == $this->_sections['upd']['total']);
?>
<b><?php echo $this->_tpl_vars['Title1'][$this->_sections['upd']['index']]; ?>
</b> napisana przez <b><?php echo $this->_tpl_vars['Starter'][$this->_sections['upd']['index']]; ?>
</b>... <?php echo $this->_tpl_vars['Modtext'][$this->_sections['upd']['index']]; ?>
<br><br> 
"<?php echo $this->_tpl_vars['Update'][$this->_sections['upd']['index']]; ?>
"<br><br>
<?php endfor; endif;  endif; ?>