<?code
require_once('includes/config.code');
   
   $id = $_GET['id'];//Pobieranie zmiennej id
   
   if (!ereg("^[1-9][0-9]*$", $_GET['id'])) { //Sprawdzanie czy wpisano liczbê jeœli nie to wychodzimy ze skryptu
     exit("Tylko liczby!");
   }
   if (!isset($_GET['id'])) { //Sprawdzanie czy wpisano coœ po id=
     exit("Wpisz id!");
   }
   
  
$sql = mysql_query("SELECT id, user, rasa, klasa, deity, gender FROM `players` WHERE `id`='$id'") or die(mysql_error()); //Pobieranie informacji z bazy sql
$num = mysql_fetch_array($sql); //Wyniki

if($num['gender'] == "M") {$plec = "Mê¿czyzna";}
elseif($num['gender'] == "M"){$plec = "Kobieta";}
else { $plec = "Niewybrana"; }

   if (empty ($num['id'])) { exit("Nie ma takiego u¿ytkownika!"); } //Sprawdzanie czy podany w id= u¿ytkownik wogóle istnieje
   
   $obrazek=ImageCreate(300,100);//Tworzenie obrazka
   $bialy=ImageColorAllocate($obrazek,255 ,255 ,255);//Kolor t³a (wartoœci rgb)
   $czarny=ImageColorAllocate($obrazek,0 ,0 ,0); //Kolor tekstu(wartoœci rgb)
   ImageFill($obrazek,0,0,$bialy);
   

   
   //Teksty
   //W skrypcie bêd¹ pokazywane: id,nick,rasa,klasu,wyznanie oraz p³eæ
    ImageString($obrazek,2,10,10,"ID:",$czarny); //1
    ImageString($obrazek,2,10,20,"Nick:",$czarny); //2
    ImageString($obrazek,2,10,30,"Rasa:",$czarny); //3
    ImageString($obrazek,2,10,40,"Klasa:",$czarny); //4
    ImageString($obrazek,2,10,50,"Wyznanie:",$czarny); //5
    ImageString($obrazek,2,10,60,"P³eæ:",$czarny); //6
    // Funkcje
    ImageString($obrazek,2,50,10,$num['id'],$czarny); //1
    ImageString($obrazek,2,50,20,$num['user'],$czarny); //2
    ImageString($obrazek,2,50,30,$num['rasa'],$czarny); //3
    ImageString($obrazek,2,50,40,$num['klasa'],$czarny); //4
    ImageString($obrazek,2,75,50,$num['deity'],$czarny); //5
    ImageString($obrazek,2,50,60,$plec,$czarny); //6
   
   
   Header("Content-type: image/gif");
   ImageGIF($obrazek);//Tworzenie obrazka
   ?>