<!-- Napisane przez Marcina Bratka - m.bratek@gmail.com -->
     Tutaj możesz sprzedawać zakupione aukcje. Pamiętaj!
     Sprzedawaj tylko wtedy, gdy będziesz wiedział, że Ci się to opłaci. Sprzedawaj z godnie z zasadą:
     <br /><i>Kupuj tanio - sprzedawaj drożej</i><br />
     Oto wszystkie twoje kupione akcję:
     <br /><a href="gielda.php">Zobacz akcje do kupienia</a>
     
    <br /><br /><br />
{if $Number > "0"}
     <form action="gieldasell.php?action=sell" method="post">
	Ile akcji sprzedać? <input type="text" name="sztuk" value="0">
	ID Akcji:  <input type="text" name="id" value="0">
	<input type="submit" value="Sprzedaj"></form></center>
    <table>
    <tr>
    <td width="100">ID Akcji:</td>
    <td width="100"><b>Ilość:<u></td>
    </tr>
    {section name=strList loop=$Amount}
        <tr>
        <td>{$akcja[strList]}</td>
        <td>{$Amount[strList]}</td>
        </tr>
    {/section}
    </table>
    
{else}

Nie masz żadnych zakupionych akcji!

{/if}
