<?php
require_once('adodb/adodb.inc.php');
$db = NewADOConnection('mysqlt');
//podajemy namiary na bazę danych: adres, user, haslo, nazwa
$db -> Connect("localhost", "virt100415", "KBqHYbwEFFeUXTTW", "virt100415_a");
$db -> Execute("SET NAMES utf8");
$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
$ADODB_CACHE_DIR = 'cache';
$gamename= "Aleara MMORPG";
$gamemail = "syer@wp.pl";
//tutaj musimy konicznie podać adres pod którym dostępna będzie gra
//bez początkowego http:// i końcowego /
//zazwyczaj będzie to "localhost" lub "localhost/orodlin"
$gameadress = "aleara.pl";
$adminname = "DemoniX";
$adminmail = "syer@wp.pl";
$city1 = "Aleara";
$city1a = "Aleara";
$city1b = "Aleara";
$city2 = "Krwawe Mokradła";
$pllimit = "100";
?>