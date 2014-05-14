<?php
$title = "Dodaj Avatara";
require_once "includes/head.php";
echo 'Tutaj mo¿esz dodaæ swojego avatara.<br />
      Avatar musi spe³niaæ nastêpuj±ce wymagania:<br />
      <ul>
      <li>Jego rozszerzenie musi byæ *.jpg lub *.gif</li>
      <li>Jego waga nie mo¿e byæ wiêksza od 50000KB</li>
      <li>Jego tematyka musi byæ w klimacie fantasy</li>
      </ul>
      <b>UWAGA!</b><br />
      <ul>
      <li>Avatar nie powinien byæ wiêkszy ni¿ <b>120x120 px</b> poniewa¿ zostanie pomniejszony do tego rozmiaru</li>
      <li>Dodaj¹c nowego avatara usuwasz automatycznie starego</li>
      </ul>
      <center>
      <form name="form1" enctype="multipart/form-data" method="post" action="avatar.php?action=wyslij" />
      <input type="file" name="plik" id="plik" />
      <input type="submit" name="Submit" value="Dodaj" />
      <input type="hidden" name="MAX_FILE_SIZE" value="150000" /> 
      </form>
      </center>';

if ($_GET['action'] == "wyslij") {
  // pobranie typu i rozmiaru pliku
    $types = $_FILES["plik"]["type"];
    $rozmiar = $_FILES['plik']['size']; 
  // sprawdzenie czy rozmiar nie jest wiêkszy od dozwolonego
      if ($rozmiar > '150000') {
          echo 'Rozmiar pliku jest zbyt wysoki!';
          require_once "includes/foot.php";
          exit;
      } 
  // sprawdzenie czy zosta³ wybrany plik z dopuszcoznym rozszerzeniem
      if ($types != 'image/jpeg' && $types != 'image/gif') {
          echo 'Z³y typ pliku!';
          require_once "includes/foot.php";
          exit;
      } 
  // zmiana nazwy
      if ($types == 'image/jpeg') {
          $sciezka_docelowa = "avatars/";
          $nazwa_pliku = $_FILES["plik"]["name"];
          $nazwa_pliku = stripslashes($nazwa_pliku);
          $nazwa_pliku = str_replace("’","",$nazwa_pliku);
          $liczba = rand(1,100000000);
          $nazwa_pliku = str_replace("$nazwa_pliku","$liczba.jpg",$nazwa_pliku);
      }  
      if ($types == 'image/gif') {
          $sciezka_docelowa = "avatars/";
          $nazwa_pliku = $_FILES["plik"]["name"];
          $nazwa_pliku = stripslashes($nazwa_pliku);
          $nazwa_pliku = str_replace("’","",$nazwa_pliku);
          $liczba = rand(1,100000000);
          $nazwa_pliku = str_replace("$nazwa_pliku","$liczba.gif",$nazwa_pliku);
      } 
  // kopiowanie pliku tymczasowego na serwerze do miejsca docelowego
      if (copy($_FILES["plik"]["tmp_name"], $sciezka_docelowa.$nazwa_pliku)) {
          mysql_query("update players set avatar='$nazwa_pliku' where id=".$player -> id."");
          unlink('avatars/'.$player -> avatar.'');
          echo 'Avatar dodany!<br />';
      } else {
          echo "Nie mo¿na dodaæ avatara!<br />";
      }
}
require_once "includes/foot.php";
?>