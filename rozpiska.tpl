<center><IMG SRC="images/locations/city43.jpg"><br></center>{strip}
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
            <fieldset style="height:500px">
            <legend><b>{$Tstats}</b></legend>
            <table width="100%">
            ................................................................
            <center><b>Aleara<b/></center>
            ................................................................
            <br><br>
            <b>Cesarz Aleary :</b> Pancur (2)<br>    
            <b>Książę Aleary :</b> MichaelCorvin (8)<br>
            <b>Mieszkańcy Aleary (rasy) :</b><br>
            <b>*</b>Człowiek<br>
            <b>*</b>Elf<br>
            <b>*</b>Krasnolud<br>
            <b>*</b>Hobbit<br>
            <b>*</b>Gnom<br>
            <b>*</b>Mroczny Elf<br>
            <b>*</b>Tauren<br>
            <b>*</b>Centaur<br>
            <b>*</b>Półsmok<br>
            <b>*</b>Kobold<br>
            
            
            
            
            
            </table>
            </fieldset>
        </td>
        <td width="50%" valign="top">
            <fieldset style="height:500px">
            <legend><b>{$Tability}</b></legend>
            ................................................................
            <center><b>Coweritana</b></center>
            ................................................................
            </table>
            </fieldset>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <fieldset>
            <legend><b>{$Tinfo}</b></legend>
            <div style="text-align:left">
            <table>
                suuu
            </table>
            </div>
            </fieldset>
        </td>
    </tr>
</table>
{/strip}