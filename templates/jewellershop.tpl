<center><IMG SRC="images/locations/sklepjubilerski.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>{strip}
Przechodząc rynkiem zatrzymuje Cię pewna elfka. Prosi Cię, abyś zajrzał do jej sklepiku. Nie mając bladego pojęcia o co chodzi udajesz się za kobietą. Po chwili zorientowałeś się, iż owa elfka wchodzi do sklepiku jubilerskiego. Wchodzisz za nią i uważnie się rozglądasz. Twoją uwagę już po samym wejściu zwróciło bogato zdobione wnętrze. Pod sufitem wisiały kryształowe lampy, na ladzie stały kryształowe świeczniki. W pomieszczeniu było ciemno, tylko świece rozświetlały pomieszczenie. Dekoracje i światło świec tworzyło cudowny klimat. Zachwycony sklepikiem nie zauważyłeś nawet, że elfka coś mówi do Ciebie. Dopiero gdy poklepała Cię po ramieniu i zapytała – Hej, wszystko w porządku? – Dotarło do Ciebie, że nie śnisz. Kobieta podeszła z Toba do lady i zaczęła pokazywać Ci kolekcję pierścieni wystawionych na sprzedaż… <br /><br />

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
        <td align="center">1</td>
        <td align="center">{$Ramount[jeweller]}</td>
        <td align="center">500</td>
        <td align="center"><a href="jewellershop.php?buy={$Rid[jeweller]}">{$Abuy}</td>
    </tr>
    {/section}
</table>

<br /><br />{$Message}
{/strip}