<?php /* Smarty version 2.6.16, created on 2013-02-20 22:52:06
         compiled from code.tpl */ ?>
</br><center><IMG SRC="images/locations/wiezadr.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Witaj w Wieży Druida. Tutaj, z pomocą odpowiedniego kodu, Druid pomoże Ci podnieść twoje statystyki za darmo. Kod składa się tylko z cyfr. Jednak nie powiem jaki jest długi. Po każdym odpowiednim wskazaniu kod się zmienia.
<br><br>
Aktualnym Druidem krainy jest: <a href="view.php?view=18">Idael</a><br>
Jeśli chcesz dostać kod zwiększający statystyki Twojej postaci o +50 poleć grę jakiejś osobie, a następnie gdy wkroczy do naszej krainy, napisz do druida z prośbą o kod. Za jednego nowego mieszkańca otrzymuje się jeden kod, 50 denarów oraz 5 brylantów. Gracz który dołączył do krainy musi jednak osiągnąć min 3 lvl. <br>
<br>Możliwe kody:<br>
- kod do mikstury zwiększającej maksymalny poziom życia<br>
- kod do mikstury zwiększającej siłę<br>
- kod do mikstury zwiększającej zręczność<br>




<br><br><br>

Ostatni obdarzony przez druida mieszkaniec: <b><?php echo $this->_tpl_vars['user']; ?>
</b>.<br>
Za odgadnięcie tajnego szyfru: <b><?php echo $this->_tpl_vars['jaki']; ?>
</b>.<br>
Druid przekazał miksturę zwiększającą: <b><?php echo $this->_tpl_vars['naco']; ?>
</b>.<br>









</b>






<br /><br />
<form action="?act=result" method="POST">
<b><?php echo $this->_tpl_vars['Code']; ?>
</b>: <input type="text" name="code" />
<input type="submit" name="submit" value="<?php echo $this->_tpl_vars['Submit']; ?>
" />
</form>
<?php if ($this->_tpl_vars['Action'] == 'result'): ?>
<i><?php echo $this->_tpl_vars['Result']; ?>
</i>
<?php endif; ?>
</br>