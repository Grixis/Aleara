<!-- Napisane przez Marcina Bratka - m.bratek@gmail.com -->
    <center><IMG SRC="images/locations/gielda.png"></center>
    <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
     Przechadzając się nocą po opustoszałym rynku dostrzegasz gromadę mieszkańców przy zalewie. Postanawiasz sprawdzić co się dzieje. Szybko dowiadujesz się, że mieszczanie burzą się o drastyczny spadek cen na giełdzie. Niestety nie jesteś w temacie, ale postanawiasz postać chwilę i przysłuchać się kłótni mieszczan. Dowiedziałeś się z nich, że znajduje się tutaj gmach giełdy akcyjnej i można tutaj kupować i sprzedawać akcje wszystkich gildii. Dziś mieszkańcy nie są zadowoleni z zarobków, jednak udało Ci się posłyszeć, że niektórzy tutaj nieźle zarabiają...<br />
    <br> Oto lista gildii, ktore wypuściły akcje:
     <br /><a href="gieldasell.php">Moje akcje</a>

    <br /><br /><br />
    {if $Numbers >= "1"}
    
         <form action="gielda.php?action=buy" method="post">
	Ile akcji? <input type="text" name="sztuk" value="0">
	ID Akcji:  <input type="text" name="id" value="0">
	<input type="submit" value="Zakup"></form></center>
	
    <table>
    <tr>
    <td width="100"><b><u>Nazwa:</td>
    <td width="100"><b>ID Akcji:</td>
    <td width="50"><b><u>Cena:</td>
    <td width="100"><b>Ilość<u></td>
    </tr>
    {section name=strList loop=$Id}
        <tr>
        <td>{$Name[strList]}</td>
        <td>{$Id[strList]}</td>
        <td>{$Cost[strList]}</td>
        <td>{$Amount[strList]}</td>
        </tr>
    {/section}
    </table>
    
    {else}
    
    Nie ma żadnych akcji w Giełdzie!
    
    {/if}
    
    <br /><br />
    Jak klan może wyjsć na Giełdę?<br />
    <ul>
    <li> Podczas zakładania klanu, pracownicy Giełdy sami aktualizują spis
    </ul>
    <br />
    Ceny akcji zmieniaja się co reset i podczas ważniejszych wydarzeń. Wpływa na nie bardzo wiele czynników, więc będzie się wahać. Co reset akcje które mozna zakupić odnawiają się do 40.
    
