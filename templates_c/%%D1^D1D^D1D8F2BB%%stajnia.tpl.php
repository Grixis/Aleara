<?php /* Smarty version 2.6.16, created on 2013-02-14 14:14:28
         compiled from stajnia.tpl */ ?>
<?php if ($this->_tpl_vars['Action'] == ""): ?>
<center><IMG SRC="images/locations/zagrodadlakoni.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>

Podczas kolejnej wędrówki po mieście docierasz do ogromnego parterowego budynku.  Kryta strzechą budowla pachnie sianem i końmi, podchodzisz więc bliżej, tak że słyszysz stajennych prowadzących porządki w boksach i rżenie nakarmionych koni. Zapach wilgotnego siana sprawia że zatrzymujesz się na chwile i wspominasz swoje dzieciństwo kiedy pierwszy raz poczułeś ten zapach. Jednak chwilę poźniej sentymenty odkładasz na bok, spieszy Ci się, chcesz przecież odjechać. Wchodzisz do stajni, stajenny widząc Ciebie pokazuje Ci, że akurat Twój koń jest już we własnym wysprzątanym boksie, machasz na niego ręką i mówisz cierpliwie:<br> 
-szybko potrzebuje konia, przygotuj go. Po tych słowach rzucasz mu miedziaka i wychodzisz na zewnątrz, chwilę poźniej dosiadasz swego rumaka i pędzisz przed siebie.


<br /><br />
    <?php if ($this->_tpl_vars['Houseid'] == ""): ?>
        - <a href="stajnia.php?action=land">Przejdź egzamin z jazdy konnej za <b>2000</b> sztuk złota</a><br>
        - <a href="stajnia.php?action=list">Zobacz liste osób posiadających Konie</a><br>
        - <a href="stajnia.php?action=rent">Zobacz Konie na sprzedaż</a><br />
    <?php endif; ?>
    <?php if ($this->_tpl_vars['Houseid'] > '0'): ?>
        - <a href="stajnia.php?action=my">Twój Koń</a><br>
        - <a href="stajnia.php?action=build">Dokup przedmioty</a><br>
        - <a href="stajnia.php?action=land">Trenuj Konia</a><br>
        - <a href="stajnia.php?action=list">Zobacz liste osób posiadających Konie</a><br>
 - <a href="stajnia.php?action=rent">Zobacz Konie sprzedawane przez innych graczy</a><br />
<br><b>Darmowe Przejazdy</b>:
 <li><a href="stajnia1.php?akcja=las"><b>Las Zbłąkanych Dusz</b></a></li>
 <li><a href="stajnia1.php?akcja=altara"><b>Aleara</b></a></li>
 <li><a href="stajnia1.php?akcja=felwood"><b>Krwawe Mokradła</b></a></li>
 <li><a href="stajnia1.php?akcja=gory"><b>Góry Przeznaczenia</b></a></li>
    <?php endif; ?>  
<?php endif; ?>

<?php if ($this->_tpl_vars['Action'] == 'rent'): ?>
    <table>
    <tr>
    <td><b><u>Numer Rodowy konia</u></b></td>
    <td><b><u>Imie Konia</u></b></td>
    <td><b><u>Stan Utrzymania</u></b></td>
    <td><b><u>Typ</u></b></td>
    <td><b><u>Cena</u></b></td>
	<td><b><u>Sprzedawca</u></b></td>
    <td><b><u>Opcje</u></b></td>
    </tr>
    <?php unset($this->_sections['house']);
$this->_sections['house']['name'] = 'house';
$this->_sections['house']['loop'] = is_array($_loop=$this->_tpl_vars['Housesname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['house']['show'] = true;
$this->_sections['house']['max'] = $this->_sections['house']['loop'];
$this->_sections['house']['step'] = 1;
$this->_sections['house']['start'] = $this->_sections['house']['step'] > 0 ? 0 : $this->_sections['house']['loop']-1;
if ($this->_sections['house']['show']) {
    $this->_sections['house']['total'] = $this->_sections['house']['loop'];
    if ($this->_sections['house']['total'] == 0)
        $this->_sections['house']['show'] = false;
} else
    $this->_sections['house']['total'] = 0;
if ($this->_sections['house']['show']):

            for ($this->_sections['house']['index'] = $this->_sections['house']['start'], $this->_sections['house']['iteration'] = 1;
                 $this->_sections['house']['iteration'] <= $this->_sections['house']['total'];
                 $this->_sections['house']['index'] += $this->_sections['house']['step'], $this->_sections['house']['iteration']++):
$this->_sections['house']['rownum'] = $this->_sections['house']['iteration'];
$this->_sections['house']['index_prev'] = $this->_sections['house']['index'] - $this->_sections['house']['step'];
$this->_sections['house']['index_next'] = $this->_sections['house']['index'] + $this->_sections['house']['step'];
$this->_sections['house']['first']      = ($this->_sections['house']['iteration'] == 1);
$this->_sections['house']['last']       = ($this->_sections['house']['iteration'] == $this->_sections['house']['total']);
?>
        <tr>
        <td><?php echo $this->_tpl_vars['Housesid'][$this->_sections['house']['index']]; ?>
</td>
   
        <td><?php echo $this->_tpl_vars['Housesname'][$this->_sections['house']['index']]; ?>
</td>
        <td><?php echo $this->_tpl_vars['Housesbuild'][$this->_sections['house']['index']]; ?>
</td>
        <td><?php echo $this->_tpl_vars['Housestype'][$this->_sections['house']['index']]; ?>
</td>
 <td><?php echo $this->_tpl_vars['Housescost'][$this->_sections['house']['index']]; ?>
</td>
 <td><a href="view.php?view=<?php echo $this->_tpl_vars['Housesseller'][$this->_sections['house']['index']]; ?>
"><?php echo $this->_tpl_vars['Housesseller'][$this->_sections['house']['index']]; ?>
</a></td>
 <td><?php echo $this->_tpl_vars['Houseslink'][$this->_sections['house']['index']]; ?>
</td>
        </tr>
    <?php endfor; endif; ?>
    </table> <a href="stajnia.php">Wróć</a>
    <?php echo $this->_tpl_vars['Message']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['Action'] == 'land'): ?>
Witaj w stajni, co chcesz zrobic??
    <ul>
    <li><a href="stajnia.php?action=land&step=buy">Trening kosztuje <?php echo $this->_tpl_vars['Cost']; ?>
 sztuk złota</a></li>
    <li><a href="stajnia.php">Wróć</a></li>
    </ul>
<?php endif; ?>

<?php if ($this->_tpl_vars['Action'] == 'build'): ?>
Posiadasz <b><?php echo $this->_tpl_vars['Points']; ?>
</b> punktów treningowych. Jesli nie masz konia, a poosiadasz jeszcze <b>10000</b> sztuk złota, jestem skłonny sprzedać ci konia.
<br><br>
    <?php echo $this->_tpl_vars['Buildhouse']; ?>

    <?php echo $this->_tpl_vars['Buildbed']; ?>

    <?php echo $this->_tpl_vars['Upgrade']; ?>

    <?php if ($this->_tpl_vars['Step'] == 'new'): ?>
        <form method="post" action="stajnia.php?action=build&step=new&step2=make">
        Imie Konia <input type=text name=name><br>
        <input type=submit value="Kupuj"></form><br>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['Step'] == 'upgrade'): ?>
        Tutaj możesz upiększać swojego Konia. Każde podniesienie jego wartości kosztuje 1000 zł oraz 1 punkt Treningowy.<br>
        <form method="post" action="stajnia.php?action=build&step=upgrade&step2=make">
        Przeznacz na podniesienie wartości Konia <input type=text name=points size=5> punktów Treningowych<br>
        <input type=submit value="Ćwicz"></form><br>
    <?php endif;  endif; ?>

<?php if ($this->_tpl_vars['Action'] == 'list'): ?>
    <table>
    <tr>
    <td><b><u>Numer Rodowodu Konia</u></b></td>
    <td><b><u>Właściciel</u></b></td>
    <td><b><u>Współwłaściciel</u></b></td>
    <td><b><u>Imie Konia</u></b></td>
    <td><b><u>Rozmiar</u></b></td>
    <td><b><u>Typ</u></b></td>
    </tr>
    <?php unset($this->_sections['house']);
$this->_sections['house']['name'] = 'house';
$this->_sections['house']['loop'] = is_array($_loop=$this->_tpl_vars['Housesname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['house']['show'] = true;
$this->_sections['house']['max'] = $this->_sections['house']['loop'];
$this->_sections['house']['step'] = 1;
$this->_sections['house']['start'] = $this->_sections['house']['step'] > 0 ? 0 : $this->_sections['house']['loop']-1;
if ($this->_sections['house']['show']) {
    $this->_sections['house']['total'] = $this->_sections['house']['loop'];
    if ($this->_sections['house']['total'] == 0)
        $this->_sections['house']['show'] = false;
} else
    $this->_sections['house']['total'] = 0;
if ($this->_sections['house']['show']):

            for ($this->_sections['house']['index'] = $this->_sections['house']['start'], $this->_sections['house']['iteration'] = 1;
                 $this->_sections['house']['iteration'] <= $this->_sections['house']['total'];
                 $this->_sections['house']['index'] += $this->_sections['house']['step'], $this->_sections['house']['iteration']++):
$this->_sections['house']['rownum'] = $this->_sections['house']['iteration'];
$this->_sections['house']['index_prev'] = $this->_sections['house']['index'] - $this->_sections['house']['step'];
$this->_sections['house']['index_next'] = $this->_sections['house']['index'] + $this->_sections['house']['step'];
$this->_sections['house']['first']      = ($this->_sections['house']['iteration'] == 1);
$this->_sections['house']['last']       = ($this->_sections['house']['iteration'] == $this->_sections['house']['total']);
?>
        <tr>
        <td><?php echo $this->_tpl_vars['Housesid'][$this->_sections['house']['index']]; ?>
</td>
        <td><a href="view.php?view=<?php echo $this->_tpl_vars['Housesowner'][$this->_sections['house']['index']]; ?>
"><?php echo $this->_tpl_vars['Housesowner'][$this->_sections['house']['index']]; ?>
</a></td>
 <td><?php echo $this->_tpl_vars['Locator'][$this->_sections['house']['index']]; ?>
</td>
        <td><?php echo $this->_tpl_vars['Housesname'][$this->_sections['house']['index']]; ?>
</td>
        <td><?php echo $this->_tpl_vars['Housesbuild'][$this->_sections['house']['index']]; ?>
</td>
        <td><?php echo $this->_tpl_vars['Housestype'][$this->_sections['house']['index']]; ?>
</td>
        </tr>
    <?php endfor; endif; ?>
    </table> <a href="stajnia.php">Wróć</a>
<?php endif; ?>

<?php if ($this->_tpl_vars['Action'] == 'my'): ?>
    <?php if ($this->_tpl_vars['Step'] == ""): ?>
        Witaj w Stajni.         <br><br>
        Nazwa Konia: <?php echo $this->_tpl_vars['Name']; ?>
 <?php if ($this->_tpl_vars['Owner'] == $this->_tpl_vars['Id']): ?> [<a href="stajnia.php?action=my&step=name">Zmień nazwę</a>] <?php endif; ?><br />
 Właściciel: <a href="view.php?view=<?php echo $this->_tpl_vars['Owner']; ?>
"><?php echo $this->_tpl_vars['Owner']; ?>
</a><br />
        Umięśnienie Konia: <?php echo $this->_tpl_vars['Size']; ?>
<br>
        Wartość Konia: <?php echo $this->_tpl_vars['Build']; ?>
 <?php echo $this->_tpl_vars['Housename']; ?>
<br>
 Współwłaściciel: <?php echo $this->_tpl_vars['Locator']; ?>
<br />
        <?php echo $this->_tpl_vars['Bedroomlink']; ?>

        <?php echo $this->_tpl_vars['Wardrobelink']; ?>

 <?php echo $this->_tpl_vars['Locatorlink']; ?>

 <?php echo $this->_tpl_vars['Sellhouse']; ?>

        (<a href="stajnia.php">Wróć</a>)
    <?php endif; ?>
    <?php if ($this->_tpl_vars['Step'] == 'sell'): ?>
        <?php if ($this->_tpl_vars['Step2'] == ""): ?>
     Tutaj możesz sprzedać swojego Konia. Po wystawieniu Konia na sprzedaż nie możesz już więcej z niego korzystać ani też cofnąć oferty<br />
            <form method="post" action="stajnia.php?action=my&step=sell&step2=sell">
     <input type="submit" value="Wystaw"> konia na sprzedaż za <input type="text" name="cost"> sztuk złota
     </form>
 <?php endif; ?>
 (<a href="stajnia.php?action=my">Wróć</a>)<br />
 <?php echo $this->_tpl_vars['Message']; ?>

    <?php endif; ?>
    <?php if ($this->_tpl_vars['Step'] == 'locator'): ?>
        <?php if ($this->_tpl_vars['Step2'] == ""): ?>
            <form method="post" action="stajnia.php?action=my&step=locator&step2=change">
     <select name="loc"><option value="add">Dodaj</option>
     <option value="delete">Usuń</option></select> drugiego WspółWłasciciela<br />
     ID: <input type="text" name="lid" size="5" value="<?php echo $this->_tpl_vars['Locid']; ?>
"><br />
     <input type="submit" value="Wykonaj"></form><br />
 <?php endif; ?>
 (<a href="stajnia.php?action=my">Wróć</a>)<br />
 <?php echo $this->_tpl_vars['Message']; ?>

    <?php endif; ?>
    <?php if ($this->_tpl_vars['Step'] == 'name'): ?>
        <form method="post" action="stajnia.php?action=my&step=name&step2=change">
        <input type="submit" value="Zmień"> imie konia na: <input type="text" name="name">
        </form><br>
        (<a href="stajnia.php?action=my">Wróć</a>)
    <?php endif; ?>
    <?php if ($this->_tpl_vars['Step'] == 'bedroom'): ?>
        Gdy założysz siodło koniowi, możesz na nim pojeździć i odzyskać nieco energi. Możesz też całkowicie wyjechać z krainy, dzięki czemu nikt nie będzie mógł ciebie zaatakować. Po wyjeździe zostaniesz wylogowany.<br>
        - <a href="stajnia.php?action=my&step=bedroom&step2=rest">Chcę nieco Pojeździć</a><br>
        - <a href="logout.php?rest=Y&did=<?php echo $this->_tpl_vars['Id']; ?>
">Wyjeżdżam</a><br>
        (<a href="stajnia.php">Wróć</a>)
    <?php endif; ?>
    <?php if ($this->_tpl_vars['Step'] == 'wardrbe'): ?>
        W szafach w domu możesz przechowywać przedmioty. W jednej szafie mieści się 100 przedmiotów. Obecnie posiadasz <b><?php echo $this->_tpl_vars['Wardrobe']; ?>
 szaf</b>
        oraz <b><?php echo $this->_tpl_vars['Amount']; ?>
 przedmiotów</b> w nich.<br><br>
        - <a href="house.php?action=my&step=wardrobe&step2=add">Schowaj przedmiot w szafie</a><br>
        - <a href="house.php?action=my&step=wardrobe&step2=list">Lista przedmiotów w domu</a><br>
       (<a href="house.php?action=my">Wróć</a>)<br><br>
       <?php if ($this->_tpl_vars['Step2'] == 'list'): ?>
           <table>
           <tr>
           <td width="100"><b><u>Nazwa</u></b></td>
           <td width="100"><b><u>Siła</u></b></td>
           <td width="100"><b><u>Wytrzymałość</u></b></td>
           <td width="100"><b><u>Premia do zręczności</u></b></td>
           <td width="100"><b><u>Premia do szybkości</u></b></td>
           <td width="50"><b><u>Ilość</u></b></td>
           <td width="100"><b><u>Opcje</u></b></td>
           </tr>
           <?php unset($this->_sections['house1']);
$this->_sections['house1']['name'] = 'house1';
$this->_sections['house1']['loop'] = is_array($_loop=$this->_tpl_vars['Itemname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['house1']['show'] = true;
$this->_sections['house1']['max'] = $this->_sections['house1']['loop'];
$this->_sections['house1']['step'] = 1;
$this->_sections['house1']['start'] = $this->_sections['house1']['step'] > 0 ? 0 : $this->_sections['house1']['loop']-1;
if ($this->_sections['house1']['show']) {
    $this->_sections['house1']['total'] = $this->_sections['house1']['loop'];
    if ($this->_sections['house1']['total'] == 0)
        $this->_sections['house1']['show'] = false;
} else
    $this->_sections['house1']['total'] = 0;
if ($this->_sections['house1']['show']):

            for ($this->_sections['house1']['index'] = $this->_sections['house1']['start'], $this->_sections['house1']['iteration'] = 1;
                 $this->_sections['house1']['iteration'] <= $this->_sections['house1']['total'];
                 $this->_sections['house1']['index'] += $this->_sections['house1']['step'], $this->_sections['house1']['iteration']++):
$this->_sections['house1']['rownum'] = $this->_sections['house1']['iteration'];
$this->_sections['house1']['index_prev'] = $this->_sections['house1']['index'] - $this->_sections['house1']['step'];
$this->_sections['house1']['index_next'] = $this->_sections['house1']['index'] + $this->_sections['house1']['step'];
$this->_sections['house1']['first']      = ($this->_sections['house1']['iteration'] == 1);
$this->_sections['house1']['last']       = ($this->_sections['house1']['iteration'] == $this->_sections['house1']['total']);
?>
               <tr>
               <td><?php echo $this->_tpl_vars['Itemname'][$this->_sections['house1']['index']]; ?>
</td>
               <td align="center"><?php echo $this->_tpl_vars['Itempower'][$this->_sections['house1']['index']]; ?>
</td>
               <td align="center"><?php echo $this->_tpl_vars['Itemdur'][$this->_sections['house1']['index']]; ?>
/<?php echo $this->_tpl_vars['Itemmaxdur'][$this->_sections['house1']['index']]; ?>
</td>
               <td align="center"><?php echo $this->_tpl_vars['Itemagility'][$this->_sections['house1']['index']]; ?>
</td>
               <td align="center"><?php echo $this->_tpl_vars['Itemspeed'][$this->_sections['house1']['index']]; ?>
</td>
               <td align="center"><?php echo $this->_tpl_vars['Itemamount'][$this->_sections['house1']['index']]; ?>
</td>
               <td>- <a href="house.php?action=my&step=wardrobe&take=<?php echo $this->_tpl_vars['Itemid'][$this->_sections['house1']['index']]; ?>
">Weź</a></td>
               </tr>
           <?php endfor; endif; ?>
           </table>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Take'] != ""): ?>
            <?php if ($this->_tpl_vars['Step3'] == ""): ?>
                <form method="post" action="house.php?action=my&step=wardrobe&take=<?php echo $this->_tpl_vars['Id']; ?>
&step3=add">
                <input type="submit" value="Weź"> z domu <input type="text" name="amount" value="<?php echo $this->_tpl_vars['Amount']; ?>
" size="5"> sztuk(i) <b><?php echo $this->_tpl_vars['Name']; ?>
</b><br>
                </form>
            <?php endif; ?>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['Step2'] == 'add'): ?>
            <table><form method="post" action="house.php?action=my&step=wardrobe&step2=add&step3=add">
            Przedmiot: <select name="przedmiot">
            <?php unset($this->_sections['house2']);
$this->_sections['house2']['name'] = 'house2';
$this->_sections['house2']['loop'] = is_array($_loop=$this->_tpl_vars['Itemname1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['house2']['show'] = true;
$this->_sections['house2']['max'] = $this->_sections['house2']['loop'];
$this->_sections['house2']['step'] = 1;
$this->_sections['house2']['start'] = $this->_sections['house2']['step'] > 0 ? 0 : $this->_sections['house2']['loop']-1;
if ($this->_sections['house2']['show']) {
    $this->_sections['house2']['total'] = $this->_sections['house2']['loop'];
    if ($this->_sections['house2']['total'] == 0)
        $this->_sections['house2']['show'] = false;
} else
    $this->_sections['house2']['total'] = 0;
if ($this->_sections['house2']['show']):

            for ($this->_sections['house2']['index'] = $this->_sections['house2']['start'], $this->_sections['house2']['iteration'] = 1;
                 $this->_sections['house2']['iteration'] <= $this->_sections['house2']['total'];
                 $this->_sections['house2']['index'] += $this->_sections['house2']['step'], $this->_sections['house2']['iteration']++):
$this->_sections['house2']['rownum'] = $this->_sections['house2']['iteration'];
$this->_sections['house2']['index_prev'] = $this->_sections['house2']['index'] - $this->_sections['house2']['step'];
$this->_sections['house2']['index_next'] = $this->_sections['house2']['index'] + $this->_sections['house2']['step'];
$this->_sections['house2']['first']      = ($this->_sections['house2']['iteration'] == 1);
$this->_sections['house2']['last']       = ($this->_sections['house2']['iteration'] == $this->_sections['house2']['total']);
?>
                <option value="<?php echo $this->_tpl_vars['Itemid1'][$this->_sections['house2']['index']]; ?>
">(ilość: <?php echo $this->_tpl_vars['Itemamount1'][$this->_sections['house2']['index']]; ?>
) <?php echo $this->_tpl_vars['Itemname1'][$this->_sections['house2']['index']]; ?>
</option>
            <?php endfor; endif; ?>
            </select> sztuk <input type="text" name="amount" size="5"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Schowaj"></td></tr>
            </form></table>
        <?php endif; ?>
    <?php endif;  endif; ?>