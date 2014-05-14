Możesz tutaj wrzucić trochę złota na tacę. Pamiętaj jednak by nie wrzucać go zbyt wiele, aby kapłan nie miał za dużo na wino.    <ul>
    <li><a href="taca.php?action=kop">Wrzuć na tacę.</a></li>
    </ul>
{if $Action == "kop"}
    Ile złota chcesz wrzucić na tacę? <br><br>
    <form method="post" action="taca.php?action=kop&dalej=tak">
     <input type="text" size="3" value="0" name="rep"> sztuk złota.. <input type="submit" value="Wrzuć na tacę">
    </form>
{/if}

{$Message}

</form></br>