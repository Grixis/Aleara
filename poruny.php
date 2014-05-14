<?php

$title = "Poszukiwanie magicznych run";
require_once("includes/head.php");
if($player -> location == 'Lochy')
{
	error ('Jako, że jesteś w lochu - nie możesz tutaj przebywać.');
}
if ($player -> location !='Ardulith')
{
	error('Nie znajdujesz się na Krwawych Mokradłach!');
}
echo '<center><IMG SRC="przekletajaskinia.png"></center> 
   <img style="margin-left: -8px" width="538px"  src="liniuszka.png"><br><br>';
   
   
   
   
   

$tablica[0]='<li><a href="vii.php">Przechodząc przez tunel dostrzegasz leżącą na ziemii magiczną runę. Próbujesz ją podnieść...</a></li> ';
$tablica[1]='<li><a href="eof.php">Przechodząc przez tunel dostrzegasz leżącą na ziemii magiczną runę. Próbujesz ją podnieść...</a></li> ';
$tablica[2]='<li><a href="voe.php">Przechodząc przez tunel dostrzegasz leżącą na ziemii magiczną runę. Próbujesz ją podnieść...</a></li> ';
$tablica[3]='<li><a href="nov.php">Przechodząc przez tunel dostrzegasz leżącą na ziemii magiczną runę. Próbujesz ją podnieść...</a></li> ';
$tablica[4]='<li><a href="rut.php">Przechodząc przez tunel dostrzegasz leżącą na ziemii magiczną runę. Próbujesz ją podnieść...</a></li> ';
$tablica[5]='<li><a href="">Przeszukiwałeś jakiś czas jaskinię, lecz niestety nic nie znalazłeś...</a></li> ';
$tablica[6]='<li><a href="">Po chwili wędrówki postanowiłeś zawrócić i poszukać drogi powrotnej...</a></li> ';
$tablica[7]='<li><a href="">Wędrowałeś jakiś czas. Na swojej drodze nie znalazłeś nic wartościowego...</a></li> ';
$tablica[8]='<li><a href="">Przed Tobą pojawia się niezidentyfikowana osoba. Zawracasz w trosce o swoje bezpieczeństwo...</a></li> ';
$tablica[9]='<li><a href="">Zmęczyłeś się wędrówką. Postanawiasz chwilę odpocząć...</a></li> ';
$tablica[10]='<li><a href="">Nieoczekiwanie jaskinia zaczęła się zapadać. Zaczynasz uciekać...</a></li> ';
$tablica[11]='<li><a href="">Na Twojej drodze pojawia się widmo. Zawracasz...</a></li> ';
$tablica[12]='<li><a href="">Przeszukiwałeś jakiś czas jaskinię, lecz niestety nic nie znalazłeś...</a></li> ';
$tablica[13]='<li><a href="">Po chwili wędrówki postanowiłeś zawrócić i poszukać drogi powrotnej...</a></li> ';
$tablica[14]='<li><a href="">Wędrowałeś jakiś czas. Na swojej drodze nie znalazłeś nic wartościowego...</a></li> ';
$tablica[15]='<li><a href="">Przed Tobą pojawia się niezidentyfikowana osoba. Zawracasz w trosce o swoje bezpieczeństwo...</a></li> ';
$tablica[16]='<li><a href="">Zmęczyłeś się wędrówką. Postanawiasz chwilę odpocząć...</a></li> ';
$tablica[17]='<li><a href="">Nieoczekiwanie jaskinia zaczęła się zapadać. Zaczynasz uciekać...</a></li> ';
$tablica[18]='<li><a href="">Na Twojej drodze pojawia się widmo. Zawracasz...</a></li> ';
$tablica[19]='<li><a href="">Przeszukiwałeś jakiś czas jaskinię, lecz niestety nic nie znalazłeś...</a></li> ';
$tablica[20]='<li><a href="">Po chwili wędrówki postanowiłeś zawrócić i poszukać drogi powrotnej...</a></li> ';
$tablica[21]='<li><a href="">Wędrowałeś jakiś czas. Na swojej drodze nie znalazłeś nic wartościowego...</a></li> ';
$tablica[22]='<li><a href="">Przed Tobą pojawia się niezidentyfikowana osoba. Zawracasz w trosce o swoje bezpieczeństwo...</a></li> ';
$tablica[23]='<li><a href="">Zmęczyłeś się wędrówką. Postanawiasz chwilę odpocząć...</a></li> ';
$tablica[24]='<li><a href="">Nieoczekiwanie jaskinia zaczęła się zapadać. Zaczynasz uciekać...</a></li> ';
$tablica[25]='<li><a href="">Na Twojej drodze pojawia się widmo. Zawracasz...</a></li> ';
$klucz=array_rand($tablica);
print($tablica[$klucz]."<br>");





require_once("includes/foot.php");
?>
