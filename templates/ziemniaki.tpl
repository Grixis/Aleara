<center><IMG SRC="images/locations/pole.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>Wsiadasz do wozu wiozącego chętnych na wykopki, jest z tobą kilka osób. Czarownica z wielką brodawką na nosie, wyraźnie jej umiejętności alchemiczne spowodowały liczne poparzenia na twarzy –brodawka może być wynikiem reakcji alergicznej. Patrzy zaczepnie więc odwracasz wzrok. Wielkolud z workiem przyczepionym do pasa zdaje się być jednym ze stałych kopaczy, widać niedoczyszczone paznokcie i pęcherze na dłoniach.  Dwoje dzieci z matką kulą się w rogu ściskając w ręku wyschły kawałek chleba. Mijacie mury miejskie i kilka minut drogi po brukowanym trakcie skręcacie w lewo. Twoim oczom ukazują się ogromne pola ziemniaków. Zsiadasz z wozu, ktoś informuje, że kopiący dla siebie mają obowiązek zważyć i zapłacić później rolnikowi to co zabiorą. W zasadzie wiesz że ceny ziemniaków po za wykopkami są trzykrotnie wyższe więc zakasujesz rękawy i zabierasz się do kopania.<br><br>
    <ul>
    <li><a href="ziemniaki.php?action=kop">Chcę pokopać ziemniaki</a></li>
    </ul>
{if $Action == "kop"}
    Żeby kopać ziemniaki wpisz ile czasu (energii) poświęcisz na ta czynność. <br><br>
    <form method="post" action="ziemniaki.php?action=kop&dalej=tak">
    Chcę pracować <input type="text" size="3" value="0" name="rep"> razy. <input type="submit" value="Pracuj">
    </form>
{/if}

 <legend><b>Ziemniaki</b></legend>
                   <table>
                       <tr><td>Twoje ziemniaki:</td><td> {$ziemniaki}</td></tr>
                       
                   </table>
           </fieldset>
{$Message}

