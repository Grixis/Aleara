  <table>
    <tr>
    <td width="100"><b><u>Nazwa:</td>
    <td width="100"><b>ID gildii:</td>

    </tr>
    {section name=strList loop=$Id}
        <tr>
        <td>{$Name[strList]}</td>
        <td>{$Id[strList]}</td>
       
        </tr>
    {/section}
    </table> 
 <br><br><br>
  <fieldset>
    <legend>Wybierz gildię na którą chcesz rzucić klątwę.</legend>
        <form method="post" action="rzucczar.php?action=czar">
        <input type="submit" value="Rzuć" /> klątwę na świątynię gildii o ID: <input type="text" name="pid" size="3" />.
        </form>
     </fieldset><br><br>  