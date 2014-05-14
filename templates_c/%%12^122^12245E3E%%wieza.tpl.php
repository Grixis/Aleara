<?php /* Smarty version 2.6.16, created on 2012-10-06 15:04:08
         compiled from wieza.tpl */ ?>
<center><IMG SRC="images/locations/wiezamagow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
<?php echo '';  if ($this->_tpl_vars['Buy'] == ""):  echo 'W najdalszym zakątku miasta, do którego niewielu zagląda jest specyficzny budynek. Ogromna opleciona bluszczem, samotna wieża. Podchodząc do niego wyczuwasz specyficzny zapach magii. Nie od razu decydujesz się by przestąpić próg budowli, specjalnie bowiem została stworzona tak by zniechęcać nieutalentowanych i niezdolnych do poznania się na magii. A jednak bariera Ciebie przepuszcza. Dzień jest pochmurny, pada deszcz. Niebo jest puste, nawet nie słychać dziś ptaków.  Kiedy wchodzisz na stopień do wieży czujesz jakby zalała cię nagła fala chłodu, lecz kolejny krok zmywa to uczucie – to czas obronny, dzięki któremu istoty niemagiczne nie mają wstępu do wieży.<br>Zdaje się że drzwi otwierają się same, jakby rozpoznając wołanie twojej magicznej natury, wchodzisz więc i oczom twoim ukazują się surowe mury i troje drzwi na parterze. NA każdym z nich jest opis co za nimi znajdziesz. Wieża jest pusta, przynajmniej takie odnosisz wrażenie. Uważaj specyfika wiezy magów czyni niewidzialnych tych którzy w niej przebywają – swe zakupy i sprawy załatwiaj więc szybko. Nagle nim zdecydowałeś się którą drogą obrać, ze schodów ktoych nie dostrzegłeś schodzi blada elfka w soczyście zielonej szacie i bez słowa odgaduje twoje potrzeby otwierając przed tobą drzwi, których potrzebujesz.<br>  <ul><li><a href="wieza.php?dalej=T">';  echo $this->_tpl_vars['Abuyst'];  echo '</a></li><li><a href="wieza.php?dalej=C">';  echo $this->_tpl_vars['Abuyc'];  echo '</a></li><li><a href="wieza.php?dalej=P">';  echo $this->_tpl_vars['Abuys'];  echo '</a></li></ul>';  if ($this->_tpl_vars['Next'] != ""):  echo '<table width="100%">';  if ($this->_tpl_vars['Next'] == 'P'):  echo '<tr><td width="40%"><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td><td width="29%"><b><u>';  echo $this->_tpl_vars['Tpower'];  echo '</u></b></td><td width="15%"><b><u>';  echo $this->_tpl_vars['Tcost'];  echo '</u></b></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Tlevel'];  echo '</u></b></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Toptions'];  echo '</u></b></td></tr>';  unset($this->_sections['tower']);
$this->_sections['tower']['name'] = 'tower';
$this->_sections['tower']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tower']['show'] = true;
$this->_sections['tower']['max'] = $this->_sections['tower']['loop'];
$this->_sections['tower']['step'] = 1;
$this->_sections['tower']['start'] = $this->_sections['tower']['step'] > 0 ? 0 : $this->_sections['tower']['loop']-1;
if ($this->_sections['tower']['show']) {
    $this->_sections['tower']['total'] = $this->_sections['tower']['loop'];
    if ($this->_sections['tower']['total'] == 0)
        $this->_sections['tower']['show'] = false;
} else
    $this->_sections['tower']['total'] = 0;
if ($this->_sections['tower']['show']):

            for ($this->_sections['tower']['index'] = $this->_sections['tower']['start'], $this->_sections['tower']['iteration'] = 1;
                 $this->_sections['tower']['iteration'] <= $this->_sections['tower']['total'];
                 $this->_sections['tower']['index'] += $this->_sections['tower']['step'], $this->_sections['tower']['iteration']++):
$this->_sections['tower']['rownum'] = $this->_sections['tower']['iteration'];
$this->_sections['tower']['index_prev'] = $this->_sections['tower']['index'] - $this->_sections['tower']['step'];
$this->_sections['tower']['index_next'] = $this->_sections['tower']['index'] + $this->_sections['tower']['step'];
$this->_sections['tower']['first']      = ($this->_sections['tower']['iteration'] == 1);
$this->_sections['tower']['last']       = ($this->_sections['tower']['iteration'] == $this->_sections['tower']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['tower']['index']];  echo '</td>';  echo $this->_tpl_vars['Efect'][$this->_sections['tower']['index']];  echo '<td>';  echo $this->_tpl_vars['Cost'][$this->_sections['tower']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Itemlevel'][$this->_sections['tower']['index']];  echo '</td><td> <A href="wieza.php?buy=';  echo $this->_tpl_vars['Itemid'][$this->_sections['tower']['index']];  echo '&type=S">';  echo $this->_tpl_vars['Abuy'];  echo '</a></td></tr>';  endfor; endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Next'] != 'P'):  echo '<tr><td width="40%"><b><u>';  echo $this->_tpl_vars['Tname'];  echo '</u></b></td><td width="29%"><b><u>';  echo $this->_tpl_vars['Tpower'];  echo '</u></b></td><td width="15%"><b><u>';  echo $this->_tpl_vars['Tcost'];  echo '</u></b></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Tlevel'];  echo '</u></b></td><td width="8%"><b><u>';  echo $this->_tpl_vars['Toptions'];  echo '</u></b></td></tr>';  unset($this->_sections['tower1']);
$this->_sections['tower1']['name'] = 'tower1';
$this->_sections['tower1']['loop'] = is_array($_loop=$this->_tpl_vars['Name']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tower1']['show'] = true;
$this->_sections['tower1']['max'] = $this->_sections['tower1']['loop'];
$this->_sections['tower1']['step'] = 1;
$this->_sections['tower1']['start'] = $this->_sections['tower1']['step'] > 0 ? 0 : $this->_sections['tower1']['loop']-1;
if ($this->_sections['tower1']['show']) {
    $this->_sections['tower1']['total'] = $this->_sections['tower1']['loop'];
    if ($this->_sections['tower1']['total'] == 0)
        $this->_sections['tower1']['show'] = false;
} else
    $this->_sections['tower1']['total'] = 0;
if ($this->_sections['tower1']['show']):

            for ($this->_sections['tower1']['index'] = $this->_sections['tower1']['start'], $this->_sections['tower1']['iteration'] = 1;
                 $this->_sections['tower1']['iteration'] <= $this->_sections['tower1']['total'];
                 $this->_sections['tower1']['index'] += $this->_sections['tower1']['step'], $this->_sections['tower1']['iteration']++):
$this->_sections['tower1']['rownum'] = $this->_sections['tower1']['iteration'];
$this->_sections['tower1']['index_prev'] = $this->_sections['tower1']['index'] - $this->_sections['tower1']['step'];
$this->_sections['tower1']['index_next'] = $this->_sections['tower1']['index'] + $this->_sections['tower1']['step'];
$this->_sections['tower1']['first']      = ($this->_sections['tower1']['iteration'] == 1);
$this->_sections['tower1']['last']       = ($this->_sections['tower1']['iteration'] == $this->_sections['tower1']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Name'][$this->_sections['tower1']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Power'][$this->_sections['tower1']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Cost'][$this->_sections['tower1']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Itemlevel'][$this->_sections['tower1']['index']];  echo '</td><td> <A href="wieza.php?buy=';  echo $this->_tpl_vars['Itemid'][$this->_sections['tower1']['index']];  echo '&amp;type=I">';  echo $this->_tpl_vars['Abuy'];  echo '</a></td></tr>';  endfor; endif;  echo '';  endif;  echo '</table>';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Buy'] != ""):  echo '';  echo $this->_tpl_vars['Message'];  echo '';  endif;  echo ''; ?>
</br>