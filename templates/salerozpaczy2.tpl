<center><IMG SRC="images/locations/salerozpaczy.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
{strip}
Przeszedłeś przez portal znajdujący się z prawej strony kolda. Przed Toba znajduje się kolejny kold handlarz. Podchodzisz do niego. Oferuje Ci dodatki do ekwipunku od trzydziestego poziomu.<br /><br />

<table align="center" width="75%">
    <tr>
        <td><b>{$Tname}</b></td>
        <td><b>{$Tbonus}</b></td>
        <td><b>{$Tamount}</b></td>
        <td><b>{$Tcost}</b></td>
        <td><b>{$Taction}</b></td>
    </tr>
    {section name=jeweller loop=$Rid}
    <tr>
        <td>{$Rname[jeweller]}</td>
        <td align="center">200</td>
        <td align="center">{$Ramount[jeweller]}</td>
        <td align="center">200000</td>
        <td align="center"><a href="salerozpaczy2.php?buy={$Rid[jeweller]}">{$Abuy}</td>
    </tr>
    {/section}
</table>

<br /><br />{$Message}
{/strip}</b>