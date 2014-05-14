{strip}
{$Statsinfo}<br /><br />
{$Avatar}<br />
{if $Action == "gender"}
    <form method="post" action="stats.php?action=gender&amp;step=gender">
    <select name="gender"><option value="M">{$Genderm}</option>
    <option value="F">{$Genderf}</option></select><br />
    <input type="submit" value="{$Aselect}" /></form>
{/if}
<table>
    <tr>
        <td width="50%" valign="top">
            <fieldset style="height:250px">
            <legend><b>{$Tstats}</b></legend>
            <table width="100%">
            ........................................................................................................................................
            <center><b>REGULAMIN KARCZMY<b/></center>
            ........................................................................................................................................
            <br><br>
          
   <font color="green"><b><center>REGULAMIN KARCZMY<br></font></center>
   <font color="red">* Zakaz spamu - wysyłanie 4 wiadomości z kolei grozi banem!<br>
   <font color="red">* Zakaz slangu - używanie słów nie należących do j. polskiego grozi banem!<br>
   <font color="red">* Zakaz wulgaryzmów - przeklinanie w godzinacz od 6:00 - 22:00 grozi banem!<br>
   <font color="red">* Zakaz obrażania - obrażanie kogokolwiek grozi banem!<br>
   <br>
  </font></font></font></font></font></font>
  <br><br><br><br><br><br><br><br><br>
            
            
            
            
            
            </table>
            </fieldset>
        </td>
        
</table>
{/strip}