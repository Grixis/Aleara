<?php

function getTaggedPlayerName ($name, $tribeid, $rank)
{

	if (!isset ($name) or !is_numeric ($tribeid) or !isset ($rank)) {
		throw new Exception ('Podaj prawidłowe argumenty!');
	}
	
	static $Tribes = array ();
	if (!isset ($Tribes[$tribeid])) {
		global $db;

		$oldFetchMode = $db -> SetFetchMode('ADODB_FETCH_ASOC');

		$tribe = $db->Execute ('SELECT * FROM `tribe_rank` WHERE tribe_id = \''.$tribeid.'\'');
		$Tribes[$tribeid] = $tribe->fields;
		$tribe->close ();

		$db -> SetFetchMode($oldFetchMode);
	}

	// Obejście tego, że ranga jest na sztywno wpisana w tabelkę players.
	//TODO: w przyszłości w tabeli players powinien być chyba tylko id rangi

	$rankid = -1;
	for ($i = 1; $i <= 10; $i++) {
		if ($Tribes[$tribeid]['rank'.$i] == $rank) {
			$rankid = $i;
			break;
		}
	}

	 $ret = '';
	if ($rankid != -1) {
		$ret =  '<span class=Tag><small><font size="2"><font color="red">' . htmlspecialchars($Tribes[$tribeid]['tag_prefix_'.$rankid]) . '</font></font></small></span>';
	}

	return '<span class=Tag><small><font size="2"><font color="red">' . htmlspecialchars($Tribes[$tribeid]['tag_sufix']) . '</font></font></small></span>'.$name.$ret;
}
?>
