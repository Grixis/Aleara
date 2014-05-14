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

Ostatni obdarzony przez druida mieszkaniec: <b>{$user}</b>.<br>
Za odgadnięcie tajnego szyfru: <b>{$jaki}</b>.<br>
Druid przekazał miksturę zwiększającą: <b>{$naco}</b>.<br>









</b>






<br /><br />
<form action="?act=result" method="POST">
<b>{$Code}</b>: <input type="text" name="code" />
<input type="submit" name="submit" value="{$Submit}" />
</form>
{if $Action == "result"}
<i>{$Result}</i>
{/if}
</br>