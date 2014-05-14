<center><IMG SRC="images/locations/salerozpaczy.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
{strip}
Przeszedłeś przez portal znajdujący się z lewej strony kolda. Przed Toba znajduje się kolejny kold handlarz. Podchodzisz do niego. Oferuje Ci dodatki do ekwipunku od pierwszego poziomu.<br /><br />

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
        <td align="center">20</td>
        <td align="center">{$Ramount[jeweller]}</td>
        <td align="center">50000</td>
        <td align="center"><a href="salerozpaczy1.php?buy={$Rid[jeweller]}">{$Abuy}</td>
    </tr>
    {/section}
</table>

<br /><br />{$Message}
{/strip}</b>