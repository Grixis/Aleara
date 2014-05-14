<?php
class quest{ //KLASA "quest" ver 2.0
	//Public Variables
	public $stat;
	public $step;
	public $quest;
	//Private Variables
	private $flags;
	private $debug = false;
	/**
	* @return bool(true)
	* @param
	* @desc Inicjuje klasę
    */
	function __construct($name){
		$this -> quest = $name;
		$this -> stat = (empty($_SESSION['stat_'.$this->quest]) ? 1 : $_SESSION['stat_'.$this->quest]);
		$this -> flags = (empty($_SESSION['flags_'.$this->quest]) ? array() : $_SESSION['flagss_'.$this->quest]);
		$this -> step = $_GET['step']?$_GET['step']:0;
	}
	/**
	* @return bool(true)
	* @param $a int
	* @desc Wyświetla zawartość pliku
    */
	function display($a){
		global $db;
		print nl2br(file_get_contents('quest/'.$this->quest.'/'.$a));
	}
	/**
	 * 
	* @return bool(true)
	* @param $a int
	* @desc Zmienia wartość $stat i usuwa zmienną $step
    */
	function go($a){
		$this -> debug('go: '.$a);
		$this -> stat = $a;
		$this -> step = null;
	}
	/**
	* @return bool(true)
	* @param $a string, $b string
	* @desc Nadaje flagę użytkownikowi
    */
	function flag($a, $b){
		$this->flags[$a] = $b;
	}
	/**
	* @return string
	* @param $a string
	* @desc Pobiera flagę użytkownika
    */
	function getflag($a){
		return $this->flags[$a];
	}
	/**
	* @return bool(true)
	* @desc Kończy questa niepowodzeniem
    */
	function end(){
		global $player, $db;
		$this -> stat = null;
		$this -> flags = null;
		$this -> save();
		$db -> Execute('insert into quests_marks (quest, status, id) values (\''.$this->quest.'\', \'failed\', '.$player->id.')');
		unset($_SESSION['przygoda']);
		$this -> debug('end: quest failed');
	}
	/**
	* @return bool(true)
	* @desc Zapisuje dane do sesji
    */
	function save(){
		$_SESSION['stat_'.$this->quest] = $this -> stat;
		$_SESSION['flags_'.$this->quest] = $this -> flags;
	}
	/**
	* @return bool(true)
	* @desc Kończy questa powodzeniem
    */
	function mark_ended(){
		global $player, $db;
		$this -> stat = null;
		$this -> flags = null;
		$this -> save();
		$db -> Execute('insert into quests_marks (quest, status, id) values (\''.$this->quest.'\', \'done\', '.$player->id.')');
		unset($_SESSION['przygoda']);
		$this -> debug('end: quest done');
	}
	/**
	* @return bool(true)
	* @param $co_zmienić string, $na_ile mixed, $na +-, $nie_dodawac bool
	* @desc Kończy questa niepowodzeniem
    */
	function update($co, $ile, $na='+', $dokladnie=true){
		global $player, $db;
		$db-> Execute('Update players set '.$co.'='.$co.$na.$ile.' where id='.$player->id);
		$this -> debug('player: '.$co.'='.($dokladnie?$ile:$co.$na.$ile));
	}
	/**
	* @return bool(true)
	* @param $text string
	* @desc Wyświetla komunikaty debug
    */
	function debug($text){
		if($this -> debug) print '<center><font color=red>'.$text.'</font></center><br>';
	}

	function check_location($location){
		global $player;
		return ($player->polozenie == $location || $player -> location == $location);
	}
	function fight($monster_id)
	{
		global $player, $db;
		$db->Execute("update players set fight=".$monster_id." where id=".$player->id);
		$win=battle('T','pierscien.php');
		return $win;
	}
	function check_status($quest = false){
		global $player, $db;
		if($quest === false) $quest = $this -> quest;
		$count = $db -> Execute('select count(*) from quests_marks where quest=\''.$quest.'\' and id='.$player->id);
		$result = $count->fields['count(*)'] != 0;
		//$count -> Close();
		return $result;
	}
}
?>
