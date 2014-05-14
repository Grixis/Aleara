$(window).ready(function(){
$('#rightbar').position({
	my: 'left top',
	at: 'right top',
	of: $('#topmiddlebar'),
	offset: '15px',
	collision: 'none' });
	
$('.bot').position({
	my: 'left top',
	at: 'left bottom',
	of: $('.sub'),
	offset: '0px',
	collision: 'none' });

$('.foot').hide();
	});