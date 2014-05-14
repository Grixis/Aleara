<center><IMG SRC="images/locations/oglo.png"></center> 
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>
Idziesz wolnym krokiem po centrum miasta. Podnosisz głowę i dostrzegasz lekko zachmurzone niebo przysłaniające białymi kłębami okrąg słońca. 
 Mijasz targ i przekrzykujące się baby walczące o odpowiednią cenę na dany produkt. Ledwie słychać wrzask młodej handlarki kiedy jakiś obdartus ucieka z nadgniłym jabłkiem w kierunku sieci uliczek. Zakład kowalski po prawej stronie rozbrzmiewa rytmicznymi uderzeniami młota o kowadło. Kilku starszych panów przysiadło na ławce nieopodal narzekając na swe zbolałe stawy jednocześnie mrugając do przechodzącej nieopodal kobiety o wydatnym biuście. Brukowany rynek tętni życiem niezliczonych przechodniów zmierzających tylko w sobie znanych celach, nawet ptaki zdawały się spieszyć kiedy porywały okruchy chleba rzucone przez jakieś roześmiane dziecko. Oto stajesz przed słupem informacyjnym, na którym możesz przeczytać ogłoszenia innych mieszkańców krainy lub dodać własną informację. Opłaty nie są wysokie, a dzięki ogłoszeniom szybciej rozejdzie się informacja że chcesz coś kupić  lub masz coś na sprzedaż.  A o to by ogłoszenia nie pojawiały się z nikąd i za darmo dba siedzący na kocu wychudzony mężczyzna.
 <br><br><center><a href="oglw.php">Dodaj Ogloszenie</a><br><br>
{if $View == ""}
<b>{$Title1}</b> napisany przez <b>{$Starter}</b><br>{$Modtext}<br><br></center>
{$Update}<br>
<br>
(<a href="ogloszenia.php?view=all">ostatnie 10 ogloszen</a>)

{/if}

{if $View == "all"}
{section name=upd loop=$Title1}
<b>{$Title1[upd]}</b> napisana przez <b>{$Starter[upd]}</b>... {$Modtext[upd]}<br><br> 
"{$Update[upd]}"<br><br>
{/section}
{/if}