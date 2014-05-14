<center><IMG SRC="images/locations/zagajnikszamanow.png"></center>
<img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>


Właśnie dotarłeś do zagajniku starych szamanów. Rozglądając się dostrzegłeś mrocznych szamanów. Podchodzisz bliżej. Jeden z szamanów spoglądajac na Ciebie mówi:<br>
- Jakiego rytuału chcesz dokonać przybyszu?
<ul>
<li><a href="szaman.php?a=healself">Uleczenie</a></li>
<li><a href="szaman.php?a=resself">Powrót duszy do ciała</a></li>
</ul>
<br>
<fieldset>
<legend>Uleczenie/wskrzeszenie towarzysza</legend>
<form name="form01" method="post" action="szaman.php?a=heal">
ID: <input type="text" name="id" value="0" /><br>
Akcja: <input type="radio" name="akcja" value="h">Leczenie &nbsp; <input type="radio" name="akcja" value="r">Wskrzeszenie
<br><input type="submit" value="Wykonaj rytuał" />
</fieldset>
