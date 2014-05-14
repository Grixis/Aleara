<?php

class Botplayer {

var $id;
var $user;
var $energy;
var $level;
var $page;
var $location;
var $debug;
var $gametype;
var $debug;

//konstruktor
function Botplayer($id) {
	global $db;
	
	$test=$db->Execute("Select * from players where id=".$id);
	
	
}

}

?>