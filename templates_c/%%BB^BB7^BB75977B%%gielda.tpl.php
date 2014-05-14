<?php /* Smarty version 2.6.16, created on 2012-10-06 09:15:35
         compiled from gielda.tpl */ ?>
<!-- Napisane przez Marcina Bratka - m.bratek@gmail.com -->
    <center><IMG SRC="images/locations/gielda.png"></center>
    <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
     Przechadzając się nocą po opustoszałym rynku dostrzegasz gromadę mieszkańców przy zalewie. Postanawiasz sprawdzić co się dzieje. Szybko dowiadujesz się, że mieszczanie burzą się o drastyczny spadek cen na giełdzie. Niestety nie jesteś w temacie, ale postanawiasz postać chwilę i przysłuchać się kłótni mieszczan. Dowiedziałeś się z nich, że znajduje się tutaj gmach giełdy akcyjnej i można tutaj kupować i sprzedawać akcje wszystkich gildii. Dziś mieszkańcy nie są zadowoleni z zarobków, jednak udało Ci się posłyszeć, że niektórzy tutaj nieźle zarabiają...<br />
    <br> Oto lista gildii, ktore wypuściły akcje:
     <br /><a href="gieldasell.php">Moje akcje</a>

    <br /><br /><br />
    <?php if ($this->_tpl_vars['Numbers'] >= '1'): ?>
    
         <form action="gielda.php?action=buy" method="post">
	Ile akcji? <input type="text" name="sztuk" value="0">
	ID Akcji:  <input type="text" name="id" value="0">
	<input type="submit" value="Zakup"></form></center>
	
    <table>
    <tr>
    <td width="100"><b><u>Nazwa:</td>
    <td width="100"><b>ID Akcji:</td>
    <td width="50"><b><u>Cena:</td>
    <td width="100"><b>Ilość<u></td>
    </tr>
    <?php unset($this->_sections['strList']);
$this->_sections['strList']['name'] = 'strList';
$this->_sections['strList']['loop'] = is_array($_loop=$this->_tpl_vars['Id']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['strList']['show'] = true;
$this->_sections['strList']['max'] = $this->_sections['strList']['loop'];
$this->_sections['strList']['step'] = 1;
$this->_sections['strList']['start'] = $this->_sections['strList']['step'] > 0 ? 0 : $this->_sections['strList']['loop']-1;
if ($this->_sections['strList']['show']) {
    $this->_sections['strList']['total'] = $this->_sections['strList']['loop'];
    if ($this->_sections['strList']['total'] == 0)
        $this->_sections['strList']['show'] = false;
} else
    $this->_sections['strList']['total'] = 0;
if ($this->_sections['strList']['show']):

            for ($this->_sections['strList']['index'] = $this->_sections['strList']['start'], $this->_sections['strList']['iteration'] = 1;
                 $this->_sections['strList']['iteration'] <= $this->_sections['strList']['total'];
                 $this->_sections['strList']['index'] += $this->_sections['strList']['step'], $this->_sections['strList']['iteration']++):
$this->_sections['strList']['rownum'] = $this->_sections['strList']['iteration'];
$this->_sections['strList']['index_prev'] = $this->_sections['strList']['index'] - $this->_sections['strList']['step'];
$this->_sections['strList']['index_next'] = $this->_sections['strList']['index'] + $this->_sections['strList']['step'];
$this->_sections['strList']['first']      = ($this->_sections['strList']['iteration'] == 1);
$this->_sections['strList']['last']       = ($this->_sections['strList']['iteration'] == $this->_sections['strList']['total']);
?>
        <tr>
        <td><?php echo $this->_tpl_vars['Name'][$this->_sections['strList']['index']]; ?>
</td>
        <td><?php echo $this->_tpl_vars['Id'][$this->_sections['strList']['index']]; ?>
</td>
        <td><?php echo $this->_tpl_vars['Cost'][$this->_sections['strList']['index']]; ?>
</td>
        <td><?php echo $this->_tpl_vars['Amount'][$this->_sections['strList']['index']]; ?>
</td>
        </tr>
    <?php endfor; endif; ?>
    </table>
    
    <?php else: ?>
    
    Nie ma żadnych akcji w Giełdzie!
    
    <?php endif; ?>
    
    <br /><br />
    Jak klan może wyjsć na Giełdę?<br />
    <ul>
    <li> Podczas zakładania klanu, pracownicy Giełdy sami aktualizują spis
    </ul>
    <br />
    Ceny akcji zmieniaja się co reset i podczas ważniejszych wydarzeń. Wpływa na nie bardzo wiele czynników, więc będzie się wahać. Co reset akcje które mozna zakupić odnawiają się do 40.
    