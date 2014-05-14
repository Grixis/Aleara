<?php /* Smarty version 2.6.16, created on 2013-02-15 12:13:55
         compiled from panelmg.tpl */ ?>
<?php echo '<center><b>Narzędzia MG</b><br><br>Tutaj możesz dodać dostęp do forum fabularnego i przyznać punkty za aktywny udział w sesjach.<br><br></center></br>'; ?>

<table width="100%">
<tr>
<td>
<fieldset>
<legend>Punkty Fabularne</legend>
    <form method="post" action="panelmg.php?view=donate&amp;step=donated">
    ID gracza: <input type="text" name="id" size="4"/> <br />
	<input type="radio" name="what" value="add" />Dodaj<br>
	<input type="radio" name="what" value="del" />Odejmij<br>
    Ile punktów:<input type="text" name="amount" size="5"/><br/>
    <input type="submit" value="Wykonaj" /></form></br>
</fieldset>
</td>
<td>
<fieldset>
<legend>Dostęp do forum fabularnego</legend>
    <form method="post" action="panelmg.php?view=playerquest&amp;step=add">
         ID gracza: <input type="text" name="pid" size="5" /><br><br>
		 <input type="radio" name="qid" value="2">Przyznaj dostęp<br>
		 <input type="radio" name="qid" value="1">Zabierz dostęp<br><br>
    <input type="submit" value="Wykonaj" /></form>
</fieldset>
</td>
</tr>
</table>





</br>