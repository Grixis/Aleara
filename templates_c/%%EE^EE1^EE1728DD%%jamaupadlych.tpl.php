<?php /* Smarty version 2.6.16, created on 2012-10-06 11:37:53
         compiled from jamaupadlych.tpl */ ?>
<center><IMG SRC="images/locations/jamaupadlych.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br><?php echo '';  if ($this->_tpl_vars['Akcja'] == ""):  echo '<br /><br />Będąc w Diabolium dostrzegłeś wejście do olbrzymiej jamy. Jak w całym mieście wszędzie widniały pochodnie, było gorąco i czerwono… Gdy wszedłeś do jamy dostrzegłeś wielki stary, drewniany stół. Wszędzie były stare szafy z szufladami, sterty dokumentów. Za stołem znajdującym się na wprost Ciebie siedzi stary stwór o rasie Nieumarły. Zauważasz, że to mag, ponieważ używając swej zdolności przysunął Ci krzesło do stołu nie schodząc z własnego stołka. Zacząłeś się rozglądać po jamie. Wszędzie latały jakieś zjawy i błąkały się neutralne szkielety. Po chwili wzrok maga został skierowany w Twoje oczy. Usiadłeś na stołku i zapytałeś się co to za miejsce. Szybko uzyskałeś odpowiedź mówiącą, że to Jama Upadłych i można tutaj wpłacić złoto na lokatę większą niż w innych miastach. Mag zapytał się co chcesz zrobić?<br /><br /><li><a href="jamaupadlych.php?akcja=addweek">Chcę wpłacić złoto na lokatę 100 resetów +20%.</a><br /></li><li><a href="jamaupadlych.php?akcja=deposits">Chcę zobaczyć swoje lokaty w jamie.</a><br /> </li><li><a href="diabolium.php">Wracam do miasta</a></center></li>';  endif;  echo '';  if ($this->_tpl_vars['Akcja'] == 'addweek'):  echo '<br /><br />';  echo $this->_tpl_vars['Waddweek'];  echo '<br /> <br /><center><form method="post" action="jamaupadlych.php?akcja=addweek&step=payweek"><input type="text" name="amount" size="13" /><input type="submit" value="';  echo $this->_tpl_vars['Wpayweek'];  echo '" /></form></center>';  if ($this->_tpl_vars['Step'] == 'payweek'):  echo '';  echo $this->_tpl_vars['Wyoupay'];  echo '';  echo $this->_tpl_vars['Ile'];  echo '';  echo $this->_tpl_vars['Wyoupaygold'];  echo '<br /><br />(<a href="jamaupadlych.php">';  echo $this->_tpl_vars['Wreturn'];  echo '</a>)';  endif;  echo '';  endif;  echo '';  if ($this->_tpl_vars['Akcja'] == 'deposits'):  echo '';  echo $this->_tpl_vars['Mdescription'];  echo '<br /><table><tr><th><u>';  echo $this->_tpl_vars['Mamount'];  echo '</u></td><th><u>';  echo $this->_tpl_vars['Mtime'];  echo '</u></td><th><u>';  echo $this->_tpl_vars['Mtype'];  echo '</u></td></tr>';  unset($this->_sections['deposit']);
$this->_sections['deposit']['name'] = 'deposit';
$this->_sections['deposit']['loop'] = is_array($_loop=$this->_tpl_vars['Id']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['deposit']['show'] = true;
$this->_sections['deposit']['max'] = $this->_sections['deposit']['loop'];
$this->_sections['deposit']['step'] = 1;
$this->_sections['deposit']['start'] = $this->_sections['deposit']['step'] > 0 ? 0 : $this->_sections['deposit']['loop']-1;
if ($this->_sections['deposit']['show']) {
    $this->_sections['deposit']['total'] = $this->_sections['deposit']['loop'];
    if ($this->_sections['deposit']['total'] == 0)
        $this->_sections['deposit']['show'] = false;
} else
    $this->_sections['deposit']['total'] = 0;
if ($this->_sections['deposit']['show']):

            for ($this->_sections['deposit']['index'] = $this->_sections['deposit']['start'], $this->_sections['deposit']['iteration'] = 1;
                 $this->_sections['deposit']['iteration'] <= $this->_sections['deposit']['total'];
                 $this->_sections['deposit']['index'] += $this->_sections['deposit']['step'], $this->_sections['deposit']['iteration']++):
$this->_sections['deposit']['rownum'] = $this->_sections['deposit']['iteration'];
$this->_sections['deposit']['index_prev'] = $this->_sections['deposit']['index'] - $this->_sections['deposit']['step'];
$this->_sections['deposit']['index_next'] = $this->_sections['deposit']['index'] + $this->_sections['deposit']['step'];
$this->_sections['deposit']['first']      = ($this->_sections['deposit']['iteration'] == 1);
$this->_sections['deposit']['last']       = ($this->_sections['deposit']['iteration'] == $this->_sections['deposit']['total']);
 echo '<tr><td>';  echo $this->_tpl_vars['Amount'][$this->_sections['deposit']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Time'][$this->_sections['deposit']['index']];  echo '</td><td>';  echo $this->_tpl_vars['Type'][$this->_sections['deposit']['index']];  echo '</td><tr/>';  endfor; endif;  echo '</table>(<a href="jamaupadlych.php">';  echo $this->_tpl_vars['Mreturn'];  echo '</a>)';  endif;  echo ''; ?>

</br>