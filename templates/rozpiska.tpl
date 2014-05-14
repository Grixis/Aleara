<center><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="[active.macromedia.com/flash4/cabs/swflash.cab#version=4,0,0,0"]; id="logo" width="540" height="210">
<center><IMG SRC="images/locations/city43.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
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
            ................................................................
            <center><b>Aleara<b/></center>
            ................................................................
            <br><br>
            <b><font color="red">Cesarz Aleary :</b></font></b><font color="gold"><b> Pancur (2)<br>    </font>
            <b><font color="red">Książę Aleary :</b></font></b><font color="gold"><b> MichaelCorvin (8)<br></font>
            <b><font color="red">Mieszkańcy Aleary (rasy) :</b><br></font>
            <b>*</b><font color="gold"><b>Człowiek<br></font>
            <b>*</b><font color="gold"><b>Elf<br></font>
            <b>*</b><font color="gold"><b>Krasnolud<br></font>
            <b>*</b><font color="gold"><b>Hobbit<br></font>
            <b>*</b><font color="gold"><b>Gnom<br></font>
            <b>*</b><font color="gold"><b>Mroczny Elf<br></font>
            <b>*</b><font color="gold"><b>Tauren<br></font>
            <b>*</b><font color="gold"><b>Centaur<br></font>
            <b>*</b><font color="gold"><b>Półsmok<br></font>
            <b>*</b><font color="gold"><b>Kobold<br></font>
            
            
            
            
            
            </table>
            </fieldset>
        </td>
        <td width="50%" valign="top">
            <fieldset style="height:250px">
            <legend><b>{$Tability}</b></legend>
            ................................................................
            <center><b>Coweritana</b></center>
            ................................................................
            <br><br>
            <b><font color="red">Cesarz Coweritany :</b></font></b><font color="gold"><b> DemoniX (1)<br>    </font>
            <b><font color="red">Książę Coweritany :</b></font></b><font color="gold"><b> Mardok (3)<br></font>
            <b><font color="red">Mieszkańcy Coweritany (rasy) :</b><br></font>
            <b>*</b><font color="gold"><b>Serafin<br></font>
            <b>*</b><font color="gold"><b>Półent<br></font>
            <b>*</b><font color="gold"><b>Demon<br></font>
            <b>*</b><font color="gold"><b>Cień<br></font>
            <b>*</b><font color="gold"><b>Ogr<br></font>
            <b>*</b><font color="gold"><b>Górski Ork<br></font>
            <b>*</b><font color="gold"><b>Ork<br></font>
            <b>*</b><font color="gold"><b>Umarlak<br></font>
            <b>*</b><font color="gold"><b>Nieumarły<br></font>
            <b>*</b><font color="gold"><b>Jaszczuroczłek<br></font>
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
            .........................................................................................................................................
            <center><b>INFORMACJE !</b></center>
            .........................................................................................................................................
            <br><br>
            <b><font color="red"> 1) Cesarz Aleary, ma prawo karać także mieszkańców Coweritany i odwrotnie! </font><br>
            <b><font color="red"> 2) Mieszkańcy Aleary mają prawo dołączyć tylko do klanu AA - Armia Aleariańska, a mieszkańcy Coweritany tylko do klanu AC - Armia Coweritańska! </font><br>
            <b><font color="red"> 3) Dobry obywatel krainy przebywa większą ilość czasu w swoim mieście! </font><br></b>
             
             
             
             
             
             
            </table>
            </div>
            </fieldset>
        </td>
    </tr>
</table>
{/strip}