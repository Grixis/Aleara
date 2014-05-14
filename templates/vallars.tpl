{strip}
<center><IMG SRC="images/locations/sklepzbryl.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wychodzisz na spacer po rynku. Spacerując pomyślałeś, że udasz się do sklepu z brylantami, aby sprawdzić czy jest jakiś nowy towar. Idąc słyszysz jak mieszczan targujących się o ceny towarów. Podchodzi do Ciebie podchmielony kobold i prosi o miedziaka lecz Ty odsyłasz go z pustymi rękoma wydzierając się na niego. W końcu docierasz pod sklep z brylantami. Widzisz wielki szyld z wymalowanym na nim brylantem. Już na zewnątrz słychać tłumy ludzi znajdujących się w środku. Otwierając drzwi zadzwonił dzwoneczek, a oczy wszystkich mieszczan znajdujących się w środku zostały skierowane ku Twojej osobie. Witając się kulturalnie wchodzisz dalej i idziesz oglądać towar. Po jakimś czasie stajesz w kolejce i czekasz cierpliwie na swoją kolej…<br /><br />
<fieldset>
<legend>Wymień brylanty</legend>
<form action="?" method="POST">
<input type="radio" name="item" value="sword" /> Ostrze Chaosu - Ogień - 100 brylantów [Ogień Chaosu (+500) (+200 szyb) (10000/10000 wytrzymałości)]<br />
<input type="radio" name="item" value="bow" /> Łuk Chaosu - Wiatr - 100 brylantów [Wiatr Chaosu (+500) (+500 szyb) (10000/10000 wytrzymałości)]<br />
<input type="radio" name="item" value="staff" /> Różdżka Chaosu - Błyskawica - 100 brylantów (DMG: 300)<br />
<input type="radio" name="item" value="credits" /> 5000000 sztuk złota - 50 brylantów<br />
<input type="radio" name="item" value="energy" /> +1 do maksymalnej energii - 50 brylantów<br />
<input type="radio" name="item" value="toporek" /> Topór Druidów - 30 brylantów [Topór Druidów (+500) (+100 szyb) (1000/1000 wytrzymałości)]<br /><br />
<input type="submit" name="submit" value="Kupuj" />
</form>
</fieldset><br>
<fieldset>
<legend>Wymień denary</legend>
<form action="?" method="POST">
<input type="radio" name="item2" value="thousand" /> 10 denarów: 1000 sztuk złota<br>
<input type="radio" name="item2" value="buildpoints" /> 10 denarów: 10 punktów budowlanych<br>
<input type="radio" name="item2" value="energy" /> 50 denarów: +50 energii<br>
<input type="radio" name="item2" value="randore" /> 100 denarów: 200 sztuk losowej rudy<br>
<input type="radio" name="item2" value="randweed" /> 100 denarów: 200 sztuk losowego zioła<br>
<input type="radio" name="item2" value="maxene" /> 200 denarów: +1 do maksymalnej energii<br>
<input type="radio" name="item2" value="randstat" /> 200 denarów: +100 do losowej statystyki<br>
<input type="radio" name="item2" value="randabi" /> 200 denarów: +10 do losowej umiejętności<br>
<input type="radio" name="item2" value="rank" /> 300 denarów: ranga rycerza/damy<br>
<input type="radio" name="item2" value="wskrzesiciel" /> 300 denarów: ranga wskrzesiciel [wstęp na cmentarz nekromantów], większe wydobywanie złota z morza na wyspie oraz większe zarobki na Dworze Krutynów.<br><br>
<input type="submit" name="submit2" value="Kupuj" />
</form>
</fieldset>

	   
       
           <fieldset>
               <legend><b>Brylanty</b></legend>
                   <table>
                       <tr><td>Twoje brylanty:</td><td> {$refs}</td></tr>
                       <tr><td>Twoje denary:</td><td> {$denars}</td></tr>
                   </table>
           </fieldset>

{/strip}