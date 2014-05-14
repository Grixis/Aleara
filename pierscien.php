<?php
$title = 'Spacerująć wśród drzew...';
$title1 = 'Przygoda';
require_once('includes/head.php');
require_once('quest/class.php');
session_start();
$quest = new quest('pierscien');
$quest -> debug('stat: '.$quest -> stat);
if(!$quest -> check_status()){
	if($quest->stat==1){
		if(!$quest->step) $quest->display(1);
		elseif($quest->step==1) $quest -> go(2);
		elseif($quest->step==2) $quest -> go(3);
	}
	if($quest->stat==2){
		$quest->fight(1);
		if(!$quest->step) $quest->display(2);
		elseif($quest->step==1) $quest -> go(4);
		elseif($quest->step==2) $quest -> go(5);
	}
	if($quest->stat==3){
		if(!$quest->step) $quest->display(3);
		$quest->mark_ended();
	}
	if($quest->stat==4){
		if(!$quest->step) $quest->display(4);
		elseif($quest->step==1) $quest -> go(6);
		elseif($quest->step==2) $quest -> go(7);
	}
	if($quest->stat==5){
		if(!$quest->step) $quest->display(5);
		$quest->mark_ended();
	}
	if($quest->stat==6){
		if(!$quest->step) $quest->display(6);
		$quest -> update('exp', 250, '+', false);
		$quest->mark_ended();
	}
	if($quest->stat==7){
		if(!$quest->step) $quest->display(7);
		$quest -> update('exp', 150, '+', false);
		$quest->mark_ended();
	}
}
$quest -> save();
require_once('includes/foot.php');
?>
