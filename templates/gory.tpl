{strip}
{if $Health != "0" && $Action == ""}
{if $Graphstyle == "Y"}<div class="center">
<center><IMG SRC="images/locations/gory.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
</div>{/if}
    Po długiej podróży dotarłeś do rozległych, skalistych gór. Uważnie przyglądasz się otoczeniu. Widzisz wysokie urwiska, rzeki i wodospady. Obok przy szlaku zauważasz starca siedzącego na skale. Przypatrując mu się dokładniej dostrzegasz, iż to jakiś stary gnom-, który wygląda na podróżnika. Podchodzisz do niego i wdajesz się w rozmowę. Dowiedziałeś się z niej, że owe góry to Góry Przeznaczenia. Legenda głosi, iż gdzieś tutaj znajdują się leże olbrzymiego smoka Nughorga, lecz do dziś nie zostały odnalezione. Gnom powiedział Ci również, iż podobno smok strzeże niezwykle silnych skarbów i tylko wybrana osoba przez bogów będzie w stanie pokonać smoka. Starzec poinformował Cię także, że można tutaj znaleźć różne przydatne minerały oraz poinformował Cię o znajdującej się w okolicach wielkiej kopalni. Zastanawiasz się co zrobić...
    <ul>
    <li><a href="kopalnia.php">{$Amine}</a></li>
    <li><a href="explore.php">{$Asearch}</a></li>
    <li><a href="nughorg.php">Leże Nughorg'a</a></li>
    <li><a href="travel.php">Wracam..</a></li>
    </ul>
{/if}

{if $Health == "0" && $Action == ""}
    {$Youdead}.
    <ul>
    <li> <a href="gory.php?action=back">{$Backto}</a></li>
    <li> <a href="gory.php?action=hermit">{$Stayhere}</a></li>
    </ul>
{/if}

{if $Action == "hermit" && $Action2 == ""}
    {$Hermit}<br />
    <i>{$Hermit2}</i><ul>
    <li> <a href="gory.php?action=hermit&amp;action2=resurect">{$Aresurect}</a> ({$Tgold} {$Goldneed} {$Goldcoins})</li>
    <li> <a href="gory.php?action=hermit&amp;action2=wait">{$Await}</a> ({$Waittime}) </li>
    </ul>
{/if}

{if $Action2 == "resurect"}
    {$Res1}<br />
    <i>{$Res2}</i><br />
    {$Res3}
{/if}

{$Message}

{if $Action2 != ""}
    <br /><p><a href="gory.php">{$Aback}</a></p>
{/if}
{/strip}
</br></br>