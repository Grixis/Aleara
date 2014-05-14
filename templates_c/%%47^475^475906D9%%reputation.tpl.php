<?php /* Smarty version 2.6.16, created on 2013-02-19 00:34:56
         compiled from reputation.tpl */ ?>
<?php if ($_GET['id']): ?>





    <?php echo @PLAYER_REPUTATION; ?>

    <ul><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Reps']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <li><?php echo @T_ADDED; ?>
 <?php echo $this->_tpl_vars['Reps'][$this->_sections['i']['index']]['points']; ?>
 <?php echo @T_POINTS; ?>
 <?php echo @T_FOR_A; ?>
 <?php echo $this->_tpl_vars['Reps'][$this->_sections['i']['index']]['description']; ?>
 (<?php echo $this->_tpl_vars['Reps'][$this->_sections['i']['index']]['date']; ?>
)</li>
    <?php endfor; endif; ?>
    </ul>
    <a href="reputation.php"><?php echo @T_LIST_BACK; ?>
</a> | <a href="view.php?view=<?php echo $this->_tpl_vars['id']; ?>
"><?php echo @T_PROFILE_BACK; ?>
</a>
<?php else: ?>
    <p><?php echo @T_REPUTATION_DESC; ?>
</p>
    
    
    
   <center><IMG SRC="images/locations/dommurgrabiego.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Witaj w Domu Murgrabiego. Obecny murgrabia:<a href="view.php?view=29"> Shanes</a>, oficjalne konto Murgrabiego:<a href="view.php?view=253"> Murgrabia</a><br><br><br>

<div class="ui-state-error ui-corner-all" style="margin-top: 20px; padding: 0 .7em;"><br><?php echo $this->_tpl_vars['Mess']; ?>
<br>&nbsp;</div><br><br>
 <fieldset><legend><b>Punkty reputacji można otrzymać za:</b></legend>

<b>*1pkt reputacji</b> - <i>za wbicie 5 leveli w ciągu trwania tury konkursu. [max liczba pkt - 4pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 1k drewna sosnowego. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 300 meteorytu. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 1k kryształu. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 1k rudy miedzi. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 5k mithrilu wpłacanego przez postać z lvlem 1 - 20, 10k mithrilu z lvlem 20 - 40, 15k mithrilu z lvlem +40  [max liczba pkt - 3pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 20k złota wpłacanego przez postać z lvlem 1 - 20, 200k złota z lvlem 20 - 40, 400k złota z lvlem +40  [max liczba pkt - 3pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 1k dynallca. [max liczba pkt - 2pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 2 sadzonki * lvl [max liczba pkt - 3pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za komplet artefaktów diaburiona. [max liczba pkt - 4pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 2 itemy na lvl +10 gdy wplacający ma lvl mniejszy od 20, za 5 itemów na lvl +30 gry wpłacający ma lvl pomiędzy 20 - 40, za 10 itemów na lvl +50 gdy wpłacający ma lvl większy od 40. Itemy nie mogą być zwykłymi itemami ze sklapów. Musza one być wyrobami rzemieślniczymi. [max liczba pkt - 2pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za 200 sztabek jednego rodzaju. [max liczba pkt - 2pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za pierwsze miejsce w jakimkolwiek posągu chwały. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za pokonanie gracza mieszczącego się w ogólnym rangingu na pozycji od 1 do 3. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>za znalezienie błędu w grze. [max liczba pkt - 1pkt.]<br></i>
<b>*1pkt reputacji</b> - <i>jeśli gildia do której należy gracz wbije +500 prestiżu w ciągu trwania tury konkursu. [max liczba pkt - 1pkt.]<br></i>
 </fieldset>





 <fieldset><legend><b>Zasady:</b></legend>
<b>*</b> Wartości rzeczowe należy przesyłaś na konto oficjalne Murgrabiego o ID 253.<br>
<b>*</b> Co tydzień Murgrabia ogłasza zwycięzcę (osobę która ma największą ilość punktów reputacji). W przypadku, remisów majątek dzielony jest na równe części.<br>
<b>*</b> Tylko Murgrabia i władcy, mają dostęp do konta ID: 253. <br>
<b>*</b> Murgrabia nie może kasować wpisów w dzienniku na ID 235 w trakcie trwania tury i jeden dzień po jej zakończeniu, a władcy mogą kontrolować przebieg pracy Murgrabiego.<br>
<b>*</b> Konto Murgrabia ID: 253 jest całkowicie puste, dlatego Murgrabia nie może czerpać najmniejszych kożyści z niego.<br>
<b>*</b> Punkty reputacji są wyzerowane w dzień zakończenia tury<br>
<b>*</b> Trzy pierwsze miejsca otrzymuję brylanty od Murgrabiego. 1ms - 30 brylantów, 2ms - 20 brylantów, 3ms - 10 brylantów.<br>
<b>*</b> Trzy pierwsze miejsca otrzymuję wybrany przez siebie kod do Wieży Druida.<br>
<b>*</b> W razie jakichś niejasności proszę pisać do <a href="view.php?view=29"> Shanes ID 29</a>.<br>
<b>*</b> W sprawie przyznawania punktów proszę pisać na ID: 253.<br>


<b>*</b> Osoba która zajmuje pierwsze miejsce zgarnia wszystko przesłane na konto ID 253.<br>
<br><br><b>Nagroda Pocieszenia:</b> <br>   
-2 miejsce - 500k złota.<br>
-3 miejsce - 200k złota<br>   
 </fieldset>
    <p><?php echo @T_DONATORS_LINK; ?>
</p>
    
    

    <ol><?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['Top']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <li><a href="view.php?view=<?php echo $this->_tpl_vars['Top'][$this->_sections['i']['index']]['player_id']; ?>
"><?php echo $this->_tpl_vars['Top'][$this->_sections['i']['index']]['user']; ?>
</a> - <?php echo $this->_tpl_vars['Top'][$this->_sections['i']['index']]['id']; ?>
 <?php echo $this->_tpl_vars['Top'][$this->_sections['i']['index']]['points']; ?>
 <?php echo @T_POINTS; ?>
 (<a href="reputation.php?id=<?php echo $this->_tpl_vars['Top'][$this->_sections['i']['index']]['player_id']; ?>
"><?php echo @SHOW_LIST; ?>
</a>)</li>
    <?php endfor; endif; ?></ol>
<?php endif; ?></br>
<center><a href="murgrabia.php">Panel Murgrabiego</a><br><br></center>