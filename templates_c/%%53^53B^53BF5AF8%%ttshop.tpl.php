<?php /* Smarty version 2.6.16, created on 2012-10-06 13:01:54
         compiled from ttshop.tpl */ ?>
<center><IMG SRC="images/locations/opuszczonestawy.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Wolnym krokiem zmierzasz w kierunku Bram Miasta, mijasz strażników i czujesz wolność. Biegniesz niemal przez pełne rosy łąki. Jest chłodny poranek, cisza niemal rani uszy – jedynie polne ptaki słychać a w oddali klekot bociana odbija się echem. 
<br>Docierasz do Opuszczonych Stawów, rozsiadasz się na pomoście i wyciągasz wędkę, którą zarzucasz na wodę. Pozostaje jedynie czekanie na złowione ryby. Oczekiwanie na obietnicę dobrego posiłku. Jednak za użytkowanie Stawów musisz uiścić opłatę – tej nie unikniesz. Jednak tu czeka na nią wodnik – stwór wywoływany za każdym razem gdy zarzucasz wędkę.  Kiedy spokojnie siedzisz z wody wyłania się nadgniła ręka- nie waż się nie zapłacić….

<br><br>
Aktualna cena <?php echo $this->_tpl_vars['Price']; ?>
 sztuk złota za jedno łowienie.
<form method="post" action="ttshop.php?action=buy">
Chcę łowić ryby <input type="text" name="ryby"> razy. <input type="submit" value="Wykonaj"><br><Br>
    <fieldset><legend><b>Ryby</b></legend>
                   <table>
                       <tr><td>Twoje ryby:</td><td> <?php echo $this->_tpl_vars['ryby']; ?>
</td></tr>
                       
                   </table>
           </fieldset>
</form>
</br></br>