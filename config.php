<?php
require_once('adodb/adodb.inc.php');
$db = NewADOConnection('mysqlt');
//podajemy namiary na bazę danych: adres, user, haslo, nazwa
$db -> Connect("localhost", "paciek", "5rvtyoqk", "paciek_mistrzu");
$db -> Execute("SET NAMES utf8");
$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
$ADODB_CACHE_DIR = 'cache';
$gamename= "Kraina Mroku - Aleara";
$gamemail = "syer@wp.pl";
//tutaj musimy konicznie podać adres pod którym dostępna będzie gra
//bez początkowego http:// i końcowego /
//zazwyczaj będzie to "localhost" lub "localhost/orodlin"
$gameadress = "mistrzu.campari-lubliniec.pl/orodlin";
$adminname = "DemoniX";
$adminmail = "syer@wp.pl";
$city1 = "Aleara";
$city1a = "Wioska";
$city1b = "Bagna";
$city2 = "Coweritana";
ob_start("50");
?>